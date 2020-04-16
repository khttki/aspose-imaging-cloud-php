<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GrayscaleApiTest.php">
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
 * Class for testing GrayscaleApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Grayscale
 */
class GrayscaleApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return [
            [".jpg", true], [".jpg", false],
        ];
    }

    /**
     * Test GrayscaleImage
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function grayscaleImageTest($formatExtension, $saveResultToStorage)
    {
        if ($saveResultToStorage) {
            return;
        }

        $name = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        foreach (self::$basicInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $this->getRequestTestInternal(
                "grayscaleImageTest",
                "Input image: " . $name . "; Output format: " . $formatExtension,
                $name,
                function () use ($name, $formatExtension, $folder, $storage) {
                    $request = new Requests\GrayscaleImageRequest($name, $folder, $storage);
                    return self::$imagingApi->grayscaleImageAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
                    $this->assertEquals($originalProperties->getBitsPerPixel(), $resultProperties->getBitsPerPixel());
                },
                $folder,
                $storage);
        }
    }

    /**
     * Test CreateGrayscaledImage
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createGrayscaledImageTest($formatExtension, $saveResultToStorage)
    {
        $name = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $outName = null;

        foreach (self::$basicInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $outName = $name . "_grayscale." . $formatExtension;

            $this->postRequestTestInternal(
                "createGrayscaledImageTest",
                $saveResultToStorage,
                "Input image: " . $name . "; Output format: " . $formatExtension,
                $name,
                $outName,
                function ($inputStream, $outPath) use ($formatExtension, $storage) {
                    $request = new Requests\CreateGrayscaledImageRequest($inputStream, $outPath, $storage);
                    return self::$imagingApi->createGrayscaledImageAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
                    $this->assertEquals($originalProperties->getBitsPerPixel(), $resultProperties->getBitsPerPixel());
                },
                $folder,
                $storage);
        }
    }
}
