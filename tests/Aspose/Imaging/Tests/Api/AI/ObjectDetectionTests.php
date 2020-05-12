<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectDetectionTest.php">
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

use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing ObjectDetection API
 * 
 * @group Imaging
 * @group v3.0
 * @group ObjectDetection
 */
class ObjectDetectionTests extends ApiTester
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
        $saveResultToStorage = false;
        if ($saveResultToStorage) {
            return;
        }

        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $name = "object_detection_example.jpg";
        foreach (self::$inputTestFiles as $inputFile) {
            if($name != $inputFile->getName()) {
                continue;
            }

            $this->getObjectDetectionRequestTestInternal(
                "objectBoundsRequest",
                "Input image: " . $name,
                $name,
                function () use ($name, $folder, $storage) {
                    $request = new Requests\ObjectBoundsRequest($name, null, 60, true, true, $folder, $storage);
                    return self::$imagingApi->objectBoundsAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
                    $this->assertNotNull($resultStream);
                },
                $folder,
                $storage);

            $this->getRequestTestInternal(
                "visualObjectBoundsRequest",
                "Input image: " . $name,
                $name,
                function () use ($name, $folder, $storage) {
                    $request = new Requests\VisualObjectBoundsRequest($name, null, 60, true, true, $folder, $storage);
                    return self::$imagingApi->visualObjectBoundsAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
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

        $name = "object_detection_example.jpg";
        foreach (self::$inputTestFiles as $inputFile)
        {
            if($name != $inputFile->getName()) {
                continue;
            }


                $outName = "object_detection_example_bounds.jpg";

                $this->postRequestTestInternal(
                    "createObjectBoundsTest",
                    $saveResultToStorage,
                    "Input image: " . $name,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($storage)
                    {
                        $request = new Requests\CreateObjectBoundsRequest($inputStream, null, 60, true, true,  $outPath, $storage);
                        return self::$imagingApi->createObjectBoundsAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use($saveResultToStorage)
                    {
                        if($saveResultToStorage == false) {
                            $this->assertNotNull($resultStream);
                        }
                    },
                    $folder,
                    $storage);

                $this->postRequestTestInternal(
                    "createVisualObjectBoundsTest",
                    $saveResultToStorage,
                    "Input image: " . $name,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($storage)
                    {
                        $request = new Requests\CreateVisualObjectBoundsRequest($inputStream, null, 60, true, true,  $outPath, $storage);
                        return self::$imagingApi->createVisualObjectBoundsAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use($saveResultToStorage)
                    {
                        if($saveResultToStorage == false) {
                            $this->assertNotNull($resultStream);
                        }
                    },
                    $folder,
                    $storage);
        }
    }
}
