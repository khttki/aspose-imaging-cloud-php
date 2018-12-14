<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ApiTester.php">
 *   Copyright (c) 2019 Aspose Pty Ltd. All rights reserved.
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Imaging\Tests\Base;

use Aspose\Imaging;
use Aspose\Storage\Api\StorageApi;
use Aspose\Storage\Model;
use Aspose\Storage\Model\Requests;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Stream;

/**
 * Base class for API tester
 */
abstract class ApiTester extends TestCase
{
    /**
     * The server access file
     * 
     * @var string 
     */
    const ServerAccessFile = "serverAccess.json";

    /**
     * The API version
     * 
     * @var string 
     */
    const ApiVersion = "v2.0";

    /**
     * The application key
     * 
     * @var string 
     */
    const AppKey = "xxx";

    /**
     * The application SID
     * 
     * @var string 
     */
    const AppSid = "xxx";

    /**
     * The base URL
     * 
     * @var string 
     */
    const BaseUrl = "http://api.aspose.cloud/";

    /**
     * The local test folder
     * 
     * @var string 
     */
    const LocalTestFolder = __DIR__ . "..\\..\\..\\..\\..\\TestData\\";

    /**
     * The local test folder
     * 
     * @var string 
     */
    const DefaultStorage = "Imaging-QA";

    /**
     * The basic export formats
     * 
     * @var string[]
     */
    const BasicExportFormats = [ 
        "bmp",
        "gif",
        "jpg",
        "png",
        "psd",
        "tiff"
    ];
 
    /**
     * If any test failed
     * 
     * @var bool 
     */
    protected static $failedAnyTest = false;

    /**
     * The temporary folder
     * 
     * @var string 
     */
    protected $tempFolder;

    /**
     * The input test files
     * 
     * @var Aspose\Storage\Model\FileResponse[] 
     */
    protected $inputTestFiles;

    /**
     * Aspose.Imaging API
     * 
     * @var Aspose\Imaging\ImagingApi 
     */
    protected $imagingApi;

    /**
     * Aspose.Imaging API
     * 
     * @var \Aspose\Storage\Api\StorageApi 
     */
    protected $storageApi;

    /**
     * The cloud test folder prefix
     * 
     * @var string 
     */
    protected $cloudTestFolderPrefix = "ImagingCloudTestPhp";

    /**
     * Original test data folder
     * 
     * @var string 
     */
    protected $originalDataFolder = "ImagingCloudSdkInputTestData";

    /**
     * The test storage
     * 
     * @var string 
     */
    protected $testStorage;

    /**
     * Whether resulting images should be removed from cloud storage
     * 
     * @var bool 
     */
    protected $removeResult;

    /**
     * Whether this tester is initialized
     * 
     * @var bool 
     */
    protected $initialized;

    /**
     * @before
     */
    public function initFixture()
    {
        if ($initialized)
        {
            if (!$this->storageApi->getIsExist(new GetIsExistRequest($this->tempFolder, null, $this->testStorage))->fileExist->isExist)
            {
                $this->storageApi->putCreateFolder(new PutCreateFolderRequest($this->tempFolder, $this->testStorage, $this->testStorage));
            }
            
            return;
        }

        $buildNumber = getenv("BUILD_NUMBER");
        if (!empty($buildNumber))
        {
            $this->tempFolder = $this->cloudTestFolderPrefix . '_' . $buildNumber;
        }
        else
        {
            $this->tempFolder = $this->cloudTestFolderPrefix . '_' . get_current_user();
        }

        $this->testStorage = getenv("StorageName");

        if (!empty($this->testStorage))
        {
            echo "Storage name is not set by environment variable. Using the default one.";
            $this->testStorage = $this::DefaultStorage;
        }

        $this->createApiInstances();
        if (!$this->failedAnyTest && $this->removeResult && $this->storageApi->getIsExist(
            new GetIsExistRequest($this->tempFolder, null, $this->testStorage))->fileExist->isExist)
        {
            $this->storageApi->deleteFolder(new DeleteFolderRequest($this->tempFolder, $this->testStorage, true));
            $this->storageApi->putCreateFolder(new PutCreateFolderRequest($this->tempFolder, $this->testStorage, $this->testStorage));
        }

        $initialized = true;
    }

    /**
     * @after
     */
    public static function finalizeFixture()
    {
        if (!$this->failedAnyTest && $this->removeResult && $this->storageApi->getIsExist(
            new GetIsExistRequest($this->tempFolder, null, $this->testStorage))->fileExist->isExist)
        {
            $this->storageApi->deleteFolder(new DeleteFolderRequest($this->tempFolder, $this->testStorage, true));
        }
    }

    /**
     * Creates the API instances using given access parameters.
     *
     * @param string $appKey The application key.
     * @param string $appSid The application SID.
     * @param string $baseUrl The base URL.
     * @param string $apiVersion The API version.
     * @param boolean $debug Debug mode.
     * @return void
     */
    protected function createApiInstances(string $appKey = $this::AppKey, string $appSid = $this::AppSid, string $baseUrl = $this::BaseUrl, 
         string $apiVersion = $this::ApiVersion, bool $debug = false)
    {
        if ($appKey === $this::AppKey || $appSid === $this::AppSid)
        {
            echo "Access data isn't set explicitly. Trying to obtain it from environment variables.";

            $appKey = getenv("AppKEY");
            $appSid = getenv("AppSID");
            $baseUrl = getenv("ApiEndpoint");
            $apiVersion = getenv("ApiVersion");
        }

        if (empty($appKey) || empty($appSid) || empty($baseUrl) || empty($apiVersion))
        {
            echo "Access data isn't set completely by environment variables. Filling unset data with default values.";
        }

        if (empty($apiVersion))
        {
            $apiVersion = $this::ApiVersion;
            echo "Set default API version";
        }

        $serverAccessPath = $this::LocalTestFolder . $this::ServerAccessFile;
        $serverAccessString = null;
        if (file_exists($serverAccessPath))
        {
            $serverAccessString = file_get_contents($serverAccessPath);
        }

        if (!empty($serverAccessString))
        {
            $accessData = json_decode($serverAccessString);
            if (empty($appKey))
            {
                $appKey = $accessData->{'AppKey'};
                echo "Set default App key";
            }

            if (empty($appSid))
            {
                $appSid = $accessData->{'AppSid'};
                echo "Set default App SID";
            }

            if (empty($baseUrl))
            {
                $baseUrl = $accessData->{'BaseURL'};
                echo "Set default base URL";
            }
        }
        else
        {
            throw new InvalidArgumentException("Please, specify valid access data (AppKey, AppSid, Base URL)");
        }

        echo "App key: " . $appKey;
        echo "App SID: " . $appSid;
        echo "Storage: " . $this->testStorage;
        echo "Base URL: " . $baseUrl;
        echo "API version: " . $apiVersion;

        $this->imagingApi = new ImagingApi($appKey, $appSid, $baseUrl, $apiVersion, $debug);
        $storageConfig = new Aspose\Storage\Configuration();
        $storageConfig->setHost($baseUrl);
        $storageConfig->setAppKey($appKey);
        $storageConfig->setAppSid($appSid);
        $this->storageApi = new StorageApi($storageConfig);

        $this->inputTestFiles = $this->fetchInputTestFilesInfo();
    }

    /**
     * Fetches the input test files info.
     *
     * @return Aspose\Storage\Model\FileResponse[]
     */
    private function fetchInputTestFilesInfo()
    {
        $filesResponse = this->storageApi->getListFiles(new GetListFilesRequest($this->originalDataFolder, $this->testStorage));
        return $filesResponse->files;
    }

    /**
     * Obtains the typical GET request response.
     *
     * @param string $inputFileName Name of the input file.
     * @param string $outPath The output path to save the result.
     * @param mixed $requestInvoker Request invoker.
     * @return GuzzleHttp\Stream\StreamInterface
     */
    private function obtainGetResponse(string $inputFileName, string $outPath, $requestInvoker)
    {
        $response = $requestInvoker($inputFileName, $outPath);

        if (empty($outPath))
        {
            $this->assertNotNull($response);
            $this->assertGreaterThan(0, $response->getContentLength());
            return $response;
        }

        return null;
    }

        /// <summary>
        /// Tests the typical GET request.
        /// </summary>
        /// <param name="testMethodName">Name of the test method.</param>
        /// <param name="saveResultToStorage">if set to <c>true</c> [save result to storage].</param>
        /// <param name="parametersLine">The parameters line.</param>
        /// <param name="inputFileName">Name of the input file.</param>
        /// <param name="resultFileName">Name of the result file.</param>
        /// <param name="requestInvoker">The request invoker.</param>
        /// <param name="propertiesTester">The properties tester.</param>
        /// <param name="folder">The folder.</param>
        /// <param name="storage">The storage.</param>
        protected void TestGetRequest(string testMethodName, bool saveResultToStorage, string parametersLine, string inputFileName, string resultFileName,
            GetRequestInvokerDelegate requestInvoker, PropertiesTesterDelegate propertiesTester, string folder, string storage = DefaultStorage)
        {
            this.TestRequest(testMethodName, saveResultToStorage, parametersLine, inputFileName, resultFileName, 
                () => this.ObtainGetResponse(inputFileName, saveResultToStorage ? $"{folder}/{resultFileName}" : null, requestInvoker),
                propertiesTester, folder, storage);
        }

        /// <summary>
        /// Tests the typical POST request.
        /// </summary>
        /// <param name="testMethodName">Name of the test method.</param>
        /// <param name="saveResultToStorage">if set to <c>true</c> [save result to storage].</param>
        /// <param name="parametersLine">The parameters line.</param>
        /// <param name="inputFileName">Name of the input file.</param>
        /// <param name="resultFileName">Name of the result file.</param>
        /// <param name="requestInvoker">The request invoker.</param>
        /// <param name="propertiesTester">The properties tester.</param>
        /// <param name="folder">The folder.</param>
        /// <param name="storage">The storage.</param>
        protected void TestPostRequest(string testMethodName, bool saveResultToStorage, string parametersLine, string inputFileName, string resultFileName, 
            PostRequestInvokerDelegate requestInvoker, PropertiesTesterDelegate propertiesTester, string folder, string storage = DefaultStorage)
        {
            this.TestRequest(testMethodName, saveResultToStorage, parametersLine, inputFileName, resultFileName,
                () => this.ObtainPostResponse(folder + "/" + inputFileName, saveResultToStorage ? $"{folder}/{resultFileName}" : null, storage, requestInvoker),
                propertiesTester, folder, storage);
        }

        /// <summary>
        /// Checks if input file exists.
        /// </summary>
        /// <param name="inputFileName">Name of the input file.</param>
        /// <returns></returns>
        protected bool CheckInputFileExists(string inputFileName)
        {
            foreach (FileResponse storageFileInfo in InputTestFiles)
            {
                if (storageFileInfo.Name == inputFileName)
                {
                    return true;
                }
            }

            return false;
        }

        /// <summary>
        /// Gets the storage file information.
        /// </summary>
        /// <param name="folder">The folder which contains a file.</param>
        /// <param name="fileName">Name of the file.</param>
        /// <param name="storage">The storage.</param>
        /// <returns></returns>
        protected FileResponse GetStorageFileInfo(string folder, string fileName,
            string storage)
        {
            FilesResponse fileListResponse = this.StorageApi.GetListFiles(new GetListFilesRequest(folder, storage));

            foreach (FileResponse storageFileInfo in fileListResponse.Files)
            {
                if (storageFileInfo.Name == fileName)
                {
                    return storageFileInfo;
                }
            }

            return null;
        }
        
        /// <summary>
        /// Obtains the typical POST request response.
        /// </summary>
        /// <param name="inputPath">The input path.</param>
        /// <param name="requestInvoker">The request invoker.</param>
        /// <param name="outPath">The output path to save the result.</param>
        /// <param name="storage">The storage.</param>
        private Stream ObtainPostResponse(string inputPath, string outPath, string storage, PostRequestInvokerDelegate requestInvoker)
        {
            using (Stream iStream = this.StorageApi.GetDownload(new GetDownloadRequest(inputPath, null, storage)))
            {
                var response = requestInvoker.Invoke(iStream, outPath);

                if (string.IsNullOrEmpty(outPath))
                {
                    Assert.NotNull(response);
                    Assert.Greater(response.Length, 0);
                    return response;
                }

                return null;
            }
        }

        /// <summary>
        /// Tests the typical request.
        /// </summary>
        /// <param name="testMethodName">Name of the test method.</param>
        /// <param name="saveResultToStorage">if set to <c>true</c> [save result to storage].</param>
        /// <param name="parametersLine">The parameters line.</param>
        /// <param name="inputFileName">Name of the input file.</param>
        /// <param name="resultFileName">Name of the result file.</param>
        /// <param name="invokeRequestAction">The invoke request action.</param>
        /// <param name="propertiesTester">The properties tester.</param>
        /// <param name="folder">The folder.</param>
        /// <param name="storage">The storage.</param>
        private void TestRequest(string testMethodName, bool saveResultToStorage, string parametersLine, string inputFileName, string resultFileName, 
            Newtonsoft.Json.Serialization.Func<Stream> invokeRequestAction, PropertiesTesterDelegate propertiesTester, string folder, string storage = DefaultStorage)
        {
            Console.WriteLine(testMethodName);

            if (!CheckInputFileExists(inputFileName))
            {
                throw new ArgumentException(
                    $"Input file {inputFileName} doesn't exist in the specified storage folder: {folder}. Please, upload it first.");
            }

            if (!this.StorageApi.GetIsExist(new GetIsExistRequest(folder + "/" + inputFileName, null, storage)).FileExist.IsExist.Value)
            {
                var downStream = this.StorageApi.GetDownload(new GetDownloadRequest(OriginalDataFolder + "/" + inputFileName, null, storage));
                Assert.NotNull(downStream);
                var putResponse = this.StorageApi.PutCreate(new PutCreateRequest(folder + "/" + inputFileName, downStream, null, storage));
                Assert.AreEqual(HttpStatusCode.OK.ToString(), putResponse.Status.ToUpperInvariant());
            }

            bool passed = false;
            string outPath = null;

            try
            {
                Console.WriteLine(parametersLine);

                if (saveResultToStorage)
                {
                    outPath = folder + "/" + resultFileName;

                    // remove output file from the storage (if exists)
                    if (this.StorageApi.GetIsExist(new GetIsExistRequest(outPath, null, storage)).FileExist.IsExist.Value)
                    {
                        this.StorageApi.DeleteFile(new DeleteFileRequest(outPath, null, storage));
                    }
                }

                ImagingResponse resultProperties = null;

                using (Stream response = invokeRequestAction.Invoke())
                {
                    if (saveResultToStorage)
                    {
                        FileResponse resultInfo = this.GetStorageFileInfo(folder, resultFileName, storage);
                        if (resultInfo == null)
                        {
                            throw new ArgumentException(
                                $"Result file {resultFileName} doesn't exist in the specified storage folder: {folder}. Result isn't present in the storage by an unknown reason.");
                        }

                        resultProperties =
                            this.ImagingApi.GetImageProperties(new GetImagePropertiesRequest(resultFileName, folder, storage));
                        Assert.NotNull(resultProperties);
                    }
                    else if (!this.ImagingApi.Configuration.ApiVersion.Contains("v1."))
                    {
                        resultProperties =
                            this.ImagingApi.PostImageProperties(new PostImagePropertiesRequest(response));
                        Assert.NotNull(resultProperties);
                    }

                    ImagingResponse originalProperties =
                        this.ImagingApi.GetImageProperties(new GetImagePropertiesRequest(inputFileName, folder, storage));
                    Assert.NotNull(originalProperties);

                    if (resultProperties != null)
                    {
                        propertiesTester?.Invoke(originalProperties, resultProperties, response);
                    }
                }
                
                passed = true;
            }
            catch (Exception ex)
            {
                FailedAnyTest = true;
                Console.WriteLine(ex.Message);
                throw;
            }
            finally
            {
                if (passed && saveResultToStorage && this.RemoveResult && this.StorageApi.GetIsExist(new GetIsExistRequest(outPath, null, storage)).FileExist.IsExist.Value)
                {
                    this.StorageApi.DeleteFile(new DeleteFileRequest(outPath, null, storage));
                }

                Console.WriteLine($"Test passed: {passed}");
            }
        }

        /// <summary>
        /// Returns environment variable value
        /// </summary>
        /// <param name="variableName"></param>
        /// <returns>Environment variable value</returns>
        private string GetEnvironmentVariable(string variableName)
        {
            return (Environment.GetEnvironmentVariable(variableName, EnvironmentVariableTarget.Process) ??
                    Environment.GetEnvironmentVariable(variableName, EnvironmentVariableTarget.User))
                   ?? Environment.GetEnvironmentVariable(variableName, EnvironmentVariableTarget.Machine);
        }

        #endregion
    }
}
