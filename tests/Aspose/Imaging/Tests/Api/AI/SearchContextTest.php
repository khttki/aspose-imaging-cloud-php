<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SearchContextTest.php">
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

use \Aspose\Imaging\Model\Requests;
use \DateTime;

/**
 * Class for testing image comparison
 * 
 * @group AI
 * @group v3.0
 */
class SearchContextTest extends TestImagingAiBase
{
    /**
     * Small test image
     *
     * @var string
     */
    private $smallTestImage = "ComparableImage.jpg";

    /**
     * Test image
     *
     * @var string
     */
    private $testImage = "ComparingImageSimilar15.jpg";

    /**
     * Tests search context creation
     *
     * @test
     * 
     * @return void
     */
    public function createSearchContextTest()
    {
        $this->runTestWithLogging("createSearchContextTest", function()
        {
            $this->assertNotNull($this->searchContextId);
        });
    }

    /**
     * Tests search context deletion
     *
     * @test
     * 
     * @return void
     */
    public function deleteSearchContextTest()
    {
        $this->runTestWithLogging("deleteSearchContextTest", function()
        {
            $this->deleteSearchContext($this->searchContextId);

            $exceptionThrown = false;
            try
            {
                self::$asyncMode ?
                    self::$imagingApi->getSearchContextStatusAsync(
                        new Requests\GetSearchContextStatusRequest($this->searchContextId, null, self::$testStorage))->wait() :
                    self::$imagingApi->getSearchContextStatus(
                        new Requests\GetSearchContextStatusRequest($this->searchContextId, null, self::$testStorage));
            }
            catch (\Exception $ex)
            {
                $exceptionThrown = true;
            }

            $this->assertTrue($exceptionThrown);
        });
    }

    /**
     * Tests image addition
     *
     * @test
     * 
     * @return void
     */
    public function addImageTest()
    {
        $this->runTestWithLogging("addImageTest", function()
        {
            $this->addImage($this->testImage);
        });
    }

    /**
     * Tests image deletion
     *
     * @test
     * 
     * @return void
     */
    public function deleteImageTest()
    {
        $this->runTestWithLogging("deleteImageTest", function()
        {
            $image = $this->testImage;
            $this->addImage($image);

            $destServerPath = self::$tempFolder . "/" . $image;

            self::$asyncMode ? 
                self::$imagingApi->deleteSearchContextImageAsync(new Requests\DeleteSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
                self::$imagingApi->deleteSearchContextImage(new Requests\DeleteSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, null, self::$testStorage));

            $exceptionThrown = false;
            try
            {
                self::$asyncMode ? 
                    self::$imagingApi->getSearchContextImageAsync(new Requests\GetSearchContextImageRequest(
                        $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
                    self::$imagingApi->getSearchContextImage(new Requests\GetSearchContextImageRequest(
                        $this->searchContextId, $destServerPath, null, self::$testStorage));
            }
            catch (\Exception $ex)
            {
                $exceptionThrown = true;
            }

            $this->assertTrue($exceptionThrown);
        });
    }

    /**
     * Tests getting image
     *
     * @test
     * 
     * @return void
     */
    public function getImageTest()
    {
        $this->runTestWithLogging("getImageTest", function()
        {
            $image = $this->testImage;
            $this->addImage($image);
            $responseStream = $this->getImage($image);
            $this->assertGreaterThan(50000, $responseStream->getSize());
        });
    }

    /**
     * Tests image update
     *
     * @test
     * 
     * @return void
     */
    public function updateImageTest()
    {
        $this->runTestWithLogging("updateImageTest", function()
        {
            $image = $this->testImage;
            $this->addImage($image);
            $responseStream = $this->getImage($image);
            $this->assertGreaterThan(50000, $responseStream->getSize());

            $image = $this->smallTestImage;
            $destServerPath = self::$tempFolder . "/" . $image;

            $storagePath = self::$originalDataFolder . "/" . $image;
            $imageStream = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($storagePath, self::$testStorage));
            $this->assertNotNull($imageStream);
            $imageContents = $imageStream->getContents();

            self::$asyncMode ? 
                self::$imagingApi->putSearchContextImageAsync(new Requests\PutSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage))->wait() :
                self::$imagingApi->putSearchContextImage(new Requests\PutSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage));

            $responseStream = $this->getImage($image);
            $this->assertLessThanOrEqual(40000, $responseStream->getSize());
        });
    }

    /**
     * Tests image features extraction
     *
     * @test
     * 
     * @return void
     */
    public function extractImageFeaturesTest()
    {
        $this->runTestWithLogging("extractImageFeaturesTest", function()
        {
            $image = $this->testImage;

            $this->addImage($image);

            $destServerPath = self::$tempFolder . "/" . $image;

            $response = self::$asyncMode ? 
                self::$imagingApi->getSearchContextExtractImageFeaturesAsync(new Requests\GetSearchContextExtractImageFeaturesRequest(
                    $this->searchContextId, $destServerPath, null, null, self::$testStorage))->wait() :
                self::$imagingApi->getSearchContextExtractImageFeatures(new Requests\GetSearchContextExtractImageFeaturesRequest(
                    $this->searchContextId, $destServerPath, null, null, self::$testStorage));
            $this->assertRegExp('/\bComparingImageSimilar15\\.jpg\b/', $response->getImageId());
            $this->assertGreaterThan(0, count($response->getFeatures()));
        });
    }

    /**
     * Tests image features extraction and addition
     *
     * @test
     * 
     * @return void
     */
    public function extractAndAddImageFeaturesTest()
    {
        $this->runTestWithLogging("extractAndAddImageFeaturesTest", function()
        {
            $this->addImageFeatures($this->testImage);
        });
    }

    /**
     * Tests image features extraction and addition from folder
     *
     * @test
     * 
     * @return void
     */
    public function extractAndAddImageFeaturesFromFolderTest()
    {
        $this->runTestWithLogging("extractAndAddImageFeaturesFromFolderTest", function()
        {
            self::$asyncMode ? 
                self::$imagingApi->postSearchContextExtractImageFeaturesAsync(new Requests\PostSearchContextExtractImageFeaturesRequest(
                    $this->searchContextId, null, null, self::$originalDataFolder . "/FindSimilar", null, self::$testStorage))->wait() :
                self::$imagingApi->postSearchContextExtractImageFeatures(new Requests\PostSearchContextExtractImageFeaturesRequest(
                    $this->searchContextId, null, null, self::$originalDataFolder . "/FindSimilar", null, self::$testStorage));

            $this->waitSearchContextIdle();

            $response = self::$asyncMode ? 
                self::$imagingApi->getSearchContextImageFeaturesAsync(new Requests\GetSearchContextImageFeaturesRequest(
                    $this->searchContextId, self::$originalDataFolder . "/FindSimilar/3.jpg", null, self::$testStorage))->wait() :
                self::$imagingApi->getSearchContextImageFeatures(new Requests\GetSearchContextImageFeaturesRequest(
                    $this->searchContextId, self::$originalDataFolder . "/FindSimilar/3.jpg", null, self::$testStorage));

            $this->assertRegExp('/\b3\\.jpg\b/', $response->getImageId());
            $this->assertGreaterThan(0, count($response->getFeatures()));
        });
    }

    /**
     * Tests getting image features
     *
     * @test
     * 
     * @return void
     */
    public function getImageFeaturesTest()
    {
        $this->runTestWithLogging("getImageFeaturesTest", function()
        {
            $this->addImageFeatures($this->testImage);
            $response = $this->getImageFeatures($this->testImage);
            $this->assertRegExp('/\bComparingImageSimilar15\\.jpg\b/', $response->getImageId());
            $this->assertGreaterThan(0, count($response->getFeatures()));
        });
    }

    /**
     * Tests image features deletion
     *
     * @test
     * 
     * @return void
     */
    public function deleteImageFeaturesTest()
    {
        $this->runTestWithLogging("deleteImageFeaturesTest", function()
        {
            $image = $this->testImage;
            $this->addImage($image);

            $destServerPath = self::$tempFolder . "/" . $image;

            self::$asyncMode ? 
                self::$imagingApi->deleteSearchContextImageAsync(new Requests\DeleteSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
                self::$imagingApi->deleteSearchContextImage(new Requests\DeleteSearchContextImageRequest(
                    $this->searchContextId, $destServerPath, null, self::$testStorage));

            $exceptionThrown = false;
            try
            {
                self::$asyncMode ? 
                    self::$imagingApi->getSearchContextImageAsync(new Requests\GetSearchContextImageRequest(
                        $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
                    self::$imagingApi->getSearchContextImage(new Requests\GetSearchContextImageRequest(
                        $this->searchContextId, $destServerPath, null, self::$testStorage));
            }
            catch (\Exception $ex)
            {
                $exceptionThrown = true;
            }

            $this->assertTrue($exceptionThrown);
        });
    }

    /**
     * Tests image features update
     *
     * @test
     * 
     * @return void
     */
    public function updateImageFeaturesTest()
    {
        $this->runTestWithLogging("updateImageFeaturesTest", function()
        {
            $image = $this->testImage;
            $this->addImageFeatures($image);
            $response = $this->getImageFeatures($image);
            $this->assertRegExp('/\bComparingImageSimilar15\\.jpg\b/', $response->getImageId());
            $features = $response->getFeatures();
            $featuresLength = strlen($features);

            $destServerPath = self::$originalDataFolder . "/" . $image;
            $storagePath = self::$originalDataFolder . "/" . $this->smallTestImage;

            $imageStream = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($storagePath, self::$testStorage));
            $this->assertNotNull($imageStream);
            $imageContents = $imageStream->getContents();

            self::$asyncMode ? 
                self::$imagingApi->putSearchContextImageFeaturesAsync(new Requests\PutSearchContextImageFeaturesRequest(
                    $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage))->wait() : 
                self::$imagingApi->putSearchContextImageFeatures(new Requests\PutSearchContextImageFeaturesRequest(
                    $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage));

            $this->waitSearchContextIdle();
            $response = $this->getImageFeatures($image);
            $this->assertRegExp('/\bComparingImageSimilar15\\.jpg\b/', $response->getImageId());
            $this->assertNotEquals($featuresLength, strlen($response->getFeatures()));
        });
    }

    /**
     * Adds an image
     *
     * @param string $image Image to add.
     * @return void
     */
    private function addImage($image)
    {
        $destServerPath = self::$tempFolder . "/" . $image;
        $storagePath = self::$originalDataFolder . "/" . $image;

        $imageStream = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($storagePath, self::$testStorage));
        $this->assertNotNull($imageStream);
        $imageContents = $imageStream->getContents();

        self::$asyncMode ? 
            self::$imagingApi->postSearchContextAddImageAsync(new Requests\PostSearchContextAddImageRequest(
                $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage))->wait() :
            self::$imagingApi->postSearchContextAddImage(new Requests\PostSearchContextAddImageRequest(
                $this->searchContextId, $destServerPath, $imageContents, null, self::$testStorage));  

        $existResponse = self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($destServerPath, self::$testStorage));
        $this->assertNotNull($existResponse);
        $this->assertTrue($existResponse->getExists());
    }

    /**
     * Gets an image
     *
     * @param string $image Image to get.
     * @return \Psr\Http\Message\StreamInterface
     */
    private function getImage($image)
    {
        $destServerPath = self::$tempFolder . "/" . $image;
        return self::$asyncMode ? 
            self::$imagingApi->getSearchContextImageAsync(new Requests\GetSearchContextImageRequest(
                $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
            self::$imagingApi->getSearchContextImage(new Requests\GetSearchContextImageRequest(
                $this->searchContextId, $destServerPath, null, self::$testStorage));
    }

    /**
     * Adds image features
     *
     * @param string $image Image add features from.
     * @return void
     */
    private function addImageFeatures($image)
    {
        $destServerPath = self::$originalDataFolder . "/" . $image;
        self::$asyncMode ? 
            self::$imagingApi->postSearchContextExtractImageFeaturesAsync(new Requests\PostSearchContextExtractImageFeaturesRequest(
                $this->searchContextId, null, $destServerPath, null, null, self::$testStorage))->wait() : 
            self::$imagingApi->postSearchContextExtractImageFeatures(new Requests\PostSearchContextExtractImageFeaturesRequest(
                $this->searchContextId, null, $destServerPath, null, null, self::$testStorage));
        
        $this->waitSearchContextIdle();
    }

    /**
     * Gets image features
     *
     * @param string $image Image to get features from.
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    private function getImageFeatures($image)
    {
        $destServerPath = self::$originalDataFolder . "/" . $image;
        $response = self::$asyncMode ?
            self::$imagingApi->getSearchContextImageFeaturesAsync(new Requests\GetSearchContextImageFeaturesRequest(
                $this->searchContextId, $destServerPath, null, self::$testStorage))->wait() :
            self::$imagingApi->getSearchContextImageFeatures(new Requests\GetSearchContextImageFeaturesRequest(
                $this->searchContextId, $destServerPath, null, self::$testStorage));
        return $response;
    }
}