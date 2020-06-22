<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectDetectionApiTest.php">
 *   Copyright (c) 2018-2019 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\Imaging\Tests\Api;

use Aspose\Imaging\Model\DetectedObjectList;
use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing ObjectDetectionApi
 * 
 * @group Imaging
 * @group v3.0
 * @group ObjectDetection
 */
class ObjectDetectionApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return [
            [true], [false]
        ];
    }


    /**
     * Test Object detection
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function objectDetectionTest($saveResultToStorage)
    {
        if ($saveResultToStorage) {
            $this->assertTrue(true);
        }

        //echo "\r\n" . "objectDetectionTest1" . "; save result to storage: " . var_export($saveResultToStorage, true) . "\r\n";

        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $name = "test.bmp";
        foreach (self::$inputTestFiles as $inputFile) {
            if($name != $inputFile->getName()) {
                continue;
            }

            $this->getObjectDetectionRequestTestInternal(
                "objectDetection_objectbounds_test",
                "Input image: " . $name,
                $name,
                function () use ($name, $folder, $storage) {
                    $request = new Requests\GetObjectBoundsRequest($name, null, 10, true, true, "dog", "", $folder, $storage);
                    return self::$imagingApi->getObjectBoundsAsync($request)->wait();
                },
                function (DetectedObjectList $result) {
                    $this->assertNotNull($result);
                    $this->assertNotNull($result->getDetectedObjects());
                    $this->assertTrue(count($result->getDetectedObjects()) > 0);
                    $this->assertNotNull($result->getDetectedObjects()[0]);
                },
                $folder,
                $storage);

            $this->getRequestTestInternal(
                "objectDetection_visualobjectbounds_test",
                "Input image: " . $name,
                $name,
                function () use ($name, $folder, $storage) {
                    $request = new Requests\GetVisualObjectBoundsRequest($name, null, 60, true, true, "dog", null, "red", $folder, $storage);
                    return self::$imagingApi->getVisualObjectBoundsAsync($request)->wait();
                },
                function ($resultStream) {
                    $this->assertNotNull($resultStream);
                },
                $folder,
                $storage);
        }
    }

    /**
     * Test createObjectBoundsImageTest
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createObjectBoundsImageTest($saveResultToStorage)
    {
        $name = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $outName = null;

        $name = "test.bmp";
        foreach (self::$inputTestFiles as $inputFile)
        {
            if($name != $inputFile->getName()) {
                continue;
            }


                $outName = "result_test.bmp";

                $this->postObjectDetectionRequestTestInternal(
                    "objectDetection_createobjectbounds_test",
                    $saveResultToStorage,
                    "Input image: " . $name,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($storage)
                    {
                        $request = new Requests\CreateObjectBoundsRequest($inputStream, null, 60, true, true, "dog", null,  $outPath, $storage);
                        return self::$imagingApi->createObjectBoundsAsync($request)->wait();
                    },
                    function(DetectedObjectList $result) use($saveResultToStorage)
                    {
                        $this->assertNotNull($result);
                        $this->assertNotNull($result->getDetectedObjects());
                        $this->assertGreaterThan(0, count($result->getDetectedObjects()));
                        $this->assertNotNull($result->getDetectedObjects()[0]);
                    },
                    $folder,
                    $storage);

                $this->postRequestTestInternal(
                    "objectDetection_createvisualobjectbounds_test",
                    $saveResultToStorage,
                    "Input image: " . $name,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($storage)
                    {
                        $request = new Requests\CreateVisualObjectBoundsRequest($inputStream, null, 60, true, true, "dog", null, null,  $outPath, $storage);
                        return self::$imagingApi->createVisualObjectBoundsAsync($request)->wait();
                    },
                    function($resultStream) use($saveResultToStorage)
                    {
                        if($saveResultToStorage == false) {
                            $this->assertNotNull($resultStream);
                        }
                    },
                    $folder,
                    $storage);
        }
    }

    /**
     * Test get available labels
     * * @return void
     */
    public function availableLabelsTest()
    {
        $request = new Requests\GetAvailableLabelsRequest("ssd");
        $response = self::$imagingApi->getAvailableLabels($request)->wait();
        $this->assertNotNull($response);
    }
}
