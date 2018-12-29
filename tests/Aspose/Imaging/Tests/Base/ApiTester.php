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

use \Aspose\Imaging;
use \Aspose\Imaging\Model as ImagingModel;
use \Aspose\Imaging\Model\Requests as ImagingRequests;
use \Aspose\Storage\Api\StorageApi;
use \Aspose\Storage\Model as StorageModel;
use \Aspose\Storage\Model\Requests as StorageRequests;
use \PHPUnit\Framework\TestCase;
use \GuzzleHttp\Stream;
use \InvalidArgumentException;

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
    const LocalTestFolder = ".\\testdata\\";

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
    public static $failedAnyTest = false;

    /**
     * If async tests should be run
     * 
     * @var bool 
     */
    protected static $asyncMode;

    /**
     * Aspose.Imaging API
     * 
     * @var \Aspose\Imaging\ImagingApi 
     */
    protected static $imagingApi;

    /**
     * Aspose.Imaging API
     * 
     * @var \Aspose\Storage\Api\StorageApi 
     */
    protected static $storageApi;

    /**
     * If tests were initialized
     *
     * @var bool
     */
    protected static $initialized = false;
 
    /**
     * The temporary folder
     * 
     * @var string 
     */
    protected static $tempFolder;

    /**
     * The input test files
     * 
     * @var \Aspose\Imaging\Storage\Model\FileResponse[] 
     */
    protected static $inputTestFiles;

    /**
     * The test storage
     * 
     * @var string 
     */
    protected static $testStorage;

    /**
     * The cloud test folder prefix
     * 
     * @var string 
     */
    protected static $cloudTestFolderPrefix = "ImagingCloudTestPhp";

    /**
     * Whether resulting images should be removed from cloud storage
     * 
     * @var bool 
     */
    protected static $removeResult;

    /**
     * Original test data folder
     * 
     * @var string 
     */
    protected static $originalDataFolder = "ImagingCloudSdkInputTestData";

    /**
     * @beforeClass
     */
    public static function initFixture()
    {
        echo "\r\n";
        self::$asyncMode = getenv("AsyncMode") === "true" ? true : false;
        self::$asyncMode = true;
        echo "Async mode: " . (self::$asyncMode ? "true" : "false") . "\r\n";
        $buildNumber = getenv("BUILD_NUMBER");
        if (!empty($buildNumber))
        {
            self::$tempFolder = self::$cloudTestFolderPrefix . '_' . $buildNumber;
        }
        else
        {
            self::$tempFolder = self::$cloudTestFolderPrefix . '_' . get_current_user();
        }

        self::$testStorage = getenv("StorageName");

        if (empty(self::$testStorage))
        {
            echo "Storage name is not set by environment variable. Using the default one.\r\n";
            self::$testStorage = ApiTester::DefaultStorage;
        }

        self::createApiInstances(ApiTester::AppKey, ApiTester::AppSid, ApiTester::BaseUrl, ApiTester::ApiVersion, false);
        if (!self::$failedAnyTest && self::$removeResult && self::$storageApi->getIsExist(
            new StorageRequests\GetIsExistRequest(self::$tempFolder, null, self::$testStorage))->getFileExist()->getIsExist())
        {
            self::$storageApi->deleteFolder(new StorageRequests\DeleteFolderRequest(self::$tempFolder, self::$testStorage, true));
            self::$storageApi->putCreateFolder(new StorageRequests\PutCreateFolderRequest(self::$tempFolder, self::$testStorage, self::$testStorage));
        }

        self::$initialized = true;
    }

    /**
     * @afterClass
     */
    public static function finalizeFixture()
    {
        if (!self::$failedAnyTest && self::$removeResult && self::$storageApi->getIsExist(
            new StorageRequests\GetIsExistRequest(self::$tempFolder, null, self::$testStorage))->getFileExist()->getIsExist())
        {
            self::$storageApi->deleteFolder(new StorageRequests\DeleteFolderRequest(self::$tempFolder, self::$testStorage, true));
        }
    }

    /**
     * Creates the API instances using given access parameters.
     *
     * @param string $appKey The application key.
     * @param string $appSid The application SID.
     * @param string $baseUrl The base URL.
     * @param string $apiVersion The API version.
     * @param bool $debug Debug mode.
     * @return void
     */
    protected static function createApiInstances($appKey, $appSid, $baseUrl, $apiVersion, $debug)
    {
        if ($appKey === ApiTester::AppKey || $appSid === ApiTester::AppSid)
        {
            echo "Access data isn't set explicitly. Trying to obtain it from environment variables.\r\n";

            $appKey = getenv("AppKEY");
            $appSid = getenv("AppSID");
            $baseUrl = getenv("ApiEndpoint");
            $apiVersion = getenv("ApiVersion");
        }

        if (empty($appKey) || empty($appSid) || empty($baseUrl) || empty($apiVersion))
        {
            echo "Access data isn't set completely by environment variables. Filling unset data with default values.\r\n";
        }

        if (empty($apiVersion))
        {
            $apiVersion = ApiTester::ApiVersion;
            echo "Set default API version\r\n";
        }

        $serverAccessPath = ApiTester::LocalTestFolder . ApiTester::ServerAccessFile;
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
                echo "Set default App key\r\n";
            }

            if (empty($appSid))
            {
                $appSid = $accessData->{'AppSid'};
                echo "Set default App SID\r\n";
            }

            if (empty($baseUrl))
            {
                $baseUrl = $accessData->{'BaseURL'};
                echo "Set default base URL\r\n";
            }
        }
        else
        {
            throw new InvalidArgumentException("Please, specify valid access data (AppKey, AppSid, Base URL)");
        }

        echo "App key: " . $appKey . "\r\n";
        echo "App SID: " . $appSid . "\r\n";
        echo "Storage: " . self::$testStorage . "\r\n";
        echo "Base URL: " . $baseUrl . "\r\n";
        echo "API version: " . $apiVersion . "\r\n";

        $imagingConfig = new Imaging\Configuration();
        $imagingConfig->setBaseUrl($baseUrl);
        $imagingConfig->setAppKey($appKey);
        $imagingConfig->setAppSid($appSid);
        $imagingConfig->setApiVersion($apiVersion);
        self::$imagingApi = new Imaging\ImagingApi($imagingConfig);

        $storageConfig = new \Aspose\Storage\Configuration();
        $storageConfig->setHost($baseUrl);
        $storageConfig->setAppKey($appKey);
        $storageConfig->setAppSid($appSid);
        self::$storageApi = new StorageApi($storageConfig);

        self::$inputTestFiles = self::fetchInputTestFilesInfo();
    }
    
    /**
     * Fetches the input test files info.
     *
     * @return StorageModel\FileResponse[]
     */
    private static function fetchInputTestFilesInfo()
    {
        $filesResponse = self::$storageApi->getListFiles(new StorageRequests\GetListFilesRequest(self::$originalDataFolder, self::$testStorage));
        return $filesResponse->getFiles();
    }

    /**
     * Storage options provider
     *
     * @return array
     */
    public function storageOptionsProvider()
    {
        return [
            [true],
            [false]
        ];
    }

    /**
     * Tests the typical GET request.
     *
     * @param string $testMethodName Name of the test method.
     * @param bool $saveResultToStorage If save result to storage.
     * @param string $parametersLine The parameters line.
     * @param string $inputFileName Name of the input file.
     * @param string $resultFileName Name of the result file.
     * @param callable $requestInvoker The request invoker.
     * @param callable $propertiesTester The properties tester.
     * @param string $folder The folder.
     * @param string $storage The storage.
     * @return void
     */
    protected function getRequestTestInternal($testMethodName, $saveResultToStorage, $parametersLine, $inputFileName, $resultFileName,
        callable $requestInvoker, callable $propertiesTester, $folder, $storage)
    {
        $this->requestTestInternal($testMethodName, $saveResultToStorage, $parametersLine, $inputFileName, $resultFileName, 
            function() use ($inputFileName, $saveResultToStorage, $folder, $resultFileName, $requestInvoker) 
            {
                return $this->obtainGetResponse($inputFileName, $saveResultToStorage ? $folder . "/" . $resultFileName : null, $requestInvoker);
            },
            $propertiesTester, $folder, $storage);
    }

    /**
     * Tests the typical POST request.

     * @param string $testMethodName Name of the test method.
     * @param bool $saveResultToStorage If save result to storage.
     * @param string $parametersLine The parameters line.
     * @param string $inputFileName Name of the input file.
     * @param string $resultFileName Name of the result file.
     * @param callable $requestInvoker The request invoker.
     * @param callable $propertiesTester The properties tester.
     * @param string $folder The folder.
     * @param string $storage The storage.
     * @return void
     */
    protected function postRequestTestInternal($testMethodName, $saveResultToStorage, $parametersLine, $inputFileName, $resultFileName, 
        callable $requestInvoker, callable $propertiesTester, $folder, $storage)
    {
        $this->requestTestInternal($testMethodName, $saveResultToStorage, $parametersLine, $inputFileName, $resultFileName,
            function() use ($inputFileName, $saveResultToStorage, $folder, $resultFileName, $storage, $requestInvoker) 
            {
                return $this->obtainPostResponse($folder . "/" . $inputFileName, $saveResultToStorage ? $folder . "/" . $resultFileName : null, $storage, $requestInvoker);
            },
            $propertiesTester, $folder, $storage);
    }

    /**
     * Checks if input file exists.
     *
     * @param string $inputFileName Name of the input file.
     * @return bool
     */
    protected function checkInputFileExists($inputFileName)
    {
        foreach (self::$inputTestFiles as $storageFileInfo)
        {
            if ($storageFileInfo->getName() == $inputFileName)
            {
                return true;
            }
        }

        return false;
    }

    /**
     * Gets the storage file information.
     *
     * @param string $folder The folder which contains a file.
     * @param string $fileName Name of the file.
     * @param string $storage The storage.
     * @return \Aspose\Storage\Model\FileResponse
     */
    protected function getStorageFileInfo($folder, $fileName, $storage)
    {
        $fileListResponse = self::$storageApi->getListFiles(new StorageRequests\GetListFilesRequest($folder, $storage));
        foreach ($fileListResponse->getFiles() as $storageFileInfo)
        {
            if ($storageFileInfo->getName() === $fileName)
            {
                return $storageFileInfo;
            }
        }

        return null;
    }

    /**
     * Obtains the typical GET request response.
     *
     * @param string $inputFileName Name of the input file.
     * @param string $outPath The output path to save the result.
     * @param mixed $requestInvoker Request invoker.
     * @return \Psr\Http\Message\StreamInterface
     */
    private function obtainGetResponse($inputFileName, $outPath, $requestInvoker)
    {
        $response = $requestInvoker($inputFileName, $outPath);

        if (empty($outPath))
        {
            $this->assertNotNull($response);
            $this->assertGreaterThan(0, $response->getSize());
            return $response;
        }

        return null;
    }
        
    /**
     * Obtains the typical POST request response.
     *
     * @param string $inputPath The input path.
     * @param string $outPath The output path to save the result.
     * @param string $storage The storage.
     * @param callable $requestInvoker The request invoker.
     * @return Psr\Http\Message\StreamInterface
     */
    private function obtainPostResponse($inputPath, $outPath, $storage, callable $requestInvoker)
    {
        $downContents = self::$storageApi->getDownload(new StorageRequests\GetDownloadRequest($inputPath, null, $storage));
        $response = $requestInvoker($downContents->fread($downContents->getSize()), $outPath);
        if (!isset($outPath))
        {
            $this->assertNotNull($response);
            $this->assertGreaterThan(0, $response->getSize());
            return $response;
        }

        return null;
    }

    /**
     * Tests the typical request.
     *
     * @param string $testMethodName Name of the test method.
     * @param bool $saveResultToStorage If save result to storage.
     * @param string $parametersLine The parameters line.
     * @param string $inputFileName Name of the input file.
     * @param string $resultFileName Name of the result file.
     * @param callable $invokeRequestAction The invoke request action.
     * @param callable $propertiesTester The properties tester.
     * @param string $folder The folder.
     * @param string $storage The storage.
     * @return void
     */
    private function requestTestInternal($testMethodName, $saveResultToStorage, $parametersLine, $inputFileName, $resultFileName, 
        callable $invokeRequestAction, callable $propertiesTester, $folder, $storage)
    {
        echo "\r\n" . $testMethodName . "; save result to storage: " . var_export($saveResultToStorage, true) . "\r\n";

        if (!$this->checkInputFileExists($inputFileName))
        {
            throw new ArgumentException(
                "Input file " . $inputFileName . " doesn't exist in the specified storage folder: " . $folder . ". Please, upload it first.");
        }

        if (!self::$storageApi->getIsExist(new StorageRequests\GetIsExistRequest($folder . "/" . $inputFileName, null, $storage))->getFileExist()->getIsExist())
        {
            $downFile = self::$storageApi->getDownload(new StorageRequests\GetDownloadRequest(self::$originalDataFolder . "/" . $inputFileName, null, $storage));
            $this->assertNotNull($downFile);
            $putResponse = self::$storageApi->putCreate(new StorageRequests\PutCreateRequest($folder . "/" . $inputFileName, $downFile, null, $storage));
            $this->assertEquals(200, $putResponse->getCode());
        }

        $passed = false;
        $outPath = null;

        try
        {
            echo $parametersLine . "\r\n";

            if ($saveResultToStorage)
            {
                $outPath = $folder . "/" . $resultFileName;

                // remove output file from the storage (if exists)
                if (self::$storageApi->getIsExist(new StorageRequests\GetIsExistRequest($outPath, null, $storage))->getFileExist()->getIsExist())
                {
                    self::$storageApi->deleteFile(new StorageRequests\DeleteFileRequest($outPath, null, $storage));
                }
            }

            $resultProperties = null;
            $response = $invokeRequestAction();

            if ($saveResultToStorage)
            {
                $resultInfo = $this->getStorageFileInfo($folder, $resultFileName, $storage);
                if (!isset($resultInfo))
                {
                    throw new ArgumentException(
                        "Result file " . $resultFileName . " doesn't exist in the specified storage folder: "
                        . $folder . "Result isn't present in the storage by an unknown reason.");
                }

                $resultProperties = self::$asyncMode ?
                        self::$imagingApi->getImagePropertiesAsync(new ImagingRequests\GetImagePropertiesRequest($resultFileName, $folder, $storage))->wait() :
                        self::$imagingApi->getImageProperties(new ImagingRequests\GetImagePropertiesRequest($resultFileName, $folder, $storage));
                
                $this->assertNotNull($resultProperties);
            }
            else if (!preg_match('/\bv1\\.\b/', self::$imagingApi->getConfig()->getApiVersion()))
            {
                $resultProperties = self::$asyncMode ?
                    self::$imagingApi->postImagePropertiesAsync(new ImagingRequests\PostImagePropertiesRequest($response->getContents()))->wait() :
                    self::$imagingApi->postImageProperties(new ImagingRequests\PostImagePropertiesRequest($response->getContents()));
                $this->assertNotNull($resultProperties);
            }

            $originalProperties = self::$asyncMode ?
                self::$imagingApi->getImagePropertiesAsync(new ImagingRequests\GetImagePropertiesRequest($inputFileName, $folder, $storage))->wait() :
                self::$imagingApi->getImageProperties(new ImagingRequests\GetImagePropertiesRequest($inputFileName, $folder, $storage));
            $this->assertNotNull($originalProperties);

            if (isset($resultProperties) && isset($propertiesTester))
            {
                $propertiesTester($originalProperties, $resultProperties, $response);
            }
                
            $passed = true;
        }
        catch (Exception $ex)
        {
            self::$failedAnyTest = true;
            echo $ex->getMessage() . "\r\n";
            throw $ex;
        }
        finally
        {
            if ($passed && $saveResultToStorage && self::$removeResult && self::$storageApi->getIsExist(
                new StorageRequests\GetIsExistRequest($outPath, null, $storage))->getFileExist()->getIsExist())
            {
                self::$storageApi->deleteFile(new StorageRequests\DeleteFileRequest($outPath, null, $storage));
            }

            echo "Test passed: ";
            echo ($passed === true ? "true" : "false") . "\r\n";
        }
    }
}