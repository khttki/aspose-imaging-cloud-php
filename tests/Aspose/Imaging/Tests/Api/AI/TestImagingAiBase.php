<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TestImagingAiBase.php">
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

namespace Aspose\Imaging\Tests\Api\AI;

use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging\Model\Requests;
use \DateTime;
use \Exception;

/**
 * Base class for testing AI
 */
abstract class TestImagingAiBase extends ApiTester
{
    /**
     * The cloud test folder prefix
     * 
     * @var string 
     */
    protected static $cloudTestFolderPrefix = "ImagingAICloudTestPhp";

    /**
     * Original test data folder
     * 
     * @var string 
     */
    protected static $originalDataFolder = "ImagingIntegrationTestData/AI";

    /**
     * Search context ID
     * 
     * @var string
     */
    protected $searchContextId;

    /**
     * @before
     */
    public function initTest()
    {
        $buildNumber = getenv("BUILD_NUMBER");
        if (!empty($buildNumber))
        {
            self::$tempFolder = self::$cloudTestFolderPrefix . '_' . $buildNumber;
        }
        else
        {
            self::$tempFolder = self::$cloudTestFolderPrefix . '_' . get_current_user();
        }

        $this->searchContextId = $this->createSearchContext();
    }

    /**
     * @after
     */
    public function finalizeTest()
    {
        if (isset($this->searchContextId))
        {
            $this->deleteImageSearch($this->searchContextId);
        }

        if (self::$imagingApi->objectExists(
            new Requests\ObjectExistsRequest(self::$tempFolder, self::$testStorage))->getExists())
        {
            self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest(self::$tempFolder, self::$testStorage, true));
        }
    }

    /**
     * Gets storage path
     *
     * @param string $imageName Image name
     * @param string $folder Folder
     * @return string
     */
    protected function getStoragePath($imageName, $folder = null)
    {
        if (isset($folder))
        {
            return $folder . "/" . $imageName;
        }
        else
        {
            return self::$originalDataFolder . "/" . $imageName;
        }
    }

    /**
     * Creates search context
     *
     * @return string
     */
    protected function createSearchContext()
    {
        $response = 
            self::$imagingApi->createImageSearchAsync(
                new Requests\CreateImageSearchRequest(null, null, null, self::$testStorage))->wait();
        
        return $response->getId();
    }

    /**
     * Deletes search context
     *
     * @param string $searchContextId Search context ID
     * @return void
     */
    protected function deleteImageSearch($searchContextId)
    {
        self::$imagingApi->deleteImageSearchAsync(new Requests\DeleteImageSearchRequest($searchContextId, null, self::$testStorage))->wait();
    }

    /**
     * Gets search context status
     *
     * @param string $searchContextId Search context ID
     * @return string
     */
    protected function getImageSearchStatus($searchContextId)
    {
        $response = 
            self::$imagingApi->getImageSearchStatusAsync(new Requests\GetImageSearchStatusRequest($searchContextId, null, self::$testStorage))->wait();
        return $response->getSearchStatus();
    }

    /**
     * Adds image features to search context
     *
     * @param string $storageSourcePath
     * @param bool $isFolder
     * @return void
     */
    protected function addImageFeaturesToSearchContext($storageSourcePath, $isFolder = false)
    {
        $request = $isFolder ?
            new Requests\CreateImageFeaturesRequest(
                $this->searchContextId, null, null, $storageSourcePath, null, self::$testStorage) :
            new Requests\CreateImageFeaturesRequest(
                $this->searchContextId, null, $storageSourcePath, null, null, self::$testStorage);
        
        self::$imagingApi->createImageFeaturesAsync($request)->wait();

        $this->waitSearchContextIdle();
    }

    /**
     * Waits for search context idle state
     *
     * @param int $timeout Timeout in minutes
     * @return void
     */
    protected function waitSearchContextIdle($timeout = 5)
    {
        $sleepTime = 10;
        $startTime = new DateTime();

        $status = $this->getImageSearchStatus($this->searchContextId);

        while ($status !== "Idle" && date_diff(new DateTime(), $startTime, false)->format("%i") < $timeout)
        {
            sleep($sleepTime);
            $status = $this->getImageSearchStatus($this->searchContextId);
        }
    }

    /**
     * Runs test with logging.
     *
     * @param string $testMethodWithParams String that holds test method name and params.
     * @param callable $testAction Test action.
     * @return void
     */
    protected function runTestWithLogging($testMethodWithParams, callable $testAction)
    {
        $passed = false;

        echo $testMethodWithParams . "\r\n";
        try
        {
            $testAction();
            $passed = true;
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage() . "\r\n";
            throw $ex;
        }
        finally
        {
            echo "Test passed: " . var_export($passed, true) . "\r\n";
        }
    }
}