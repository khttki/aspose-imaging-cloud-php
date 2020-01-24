<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeskewApiTest.php">
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
 * Class for testing DeskewApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Deskew
 */
class DeskewApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return self::$extendedTests ? [
            [".bmp", true, true, null], [".bmp", false, false, "green"],
            /* TODO: enable after IMAGINGCLOUD-51 is resolved
            [".gif", true, true, null], [".gif", false, true, null],
            */
            [".j2k", true, true, null], [".j2k", false, true, null],
            [".png", true, true, null], [".png", false, true, null],
            [".psd", true, true, null], [".psd", false, true, null],
            [".jpg", true, true, null], [".jpg", false, true, null],
            [".tiff", true, true, null], [".tiff", false, true, null],
            [".webp", true, true, null], [".webp", false, true, null]
            /*todo: enable after those formats save is implemented
            [".dicom", true, true, null], [".dicom", false, true, null],
            [".dng", true, true, null], [".dng", false, true, null],
            [".djvu", true, true, null], [".djvu", false, true, null]
            */
        ] : [
            [".jpg", true, true, null], [".jpg", false, true, null],
        ];
    }

    /**
     * Test DeskewImage
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param bool $resizeProportionally Resize proportionally
     * @param string $bkColor Background color
     * @return void
     */
    public function deskewImageTest($formatExtension, $saveResultToStorage, $resizeProportionally, $bkColor)
    {
        if ($saveResultToStorage) {
            return;
        }

        $name = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        foreach (self::$inputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $this->getRequestTestInternal(
                "deskewImageTest",
                "Input image: " . $name . "; Output format: " . $formatExtension . "; ResizeProportionally: " . $resizeProportionally . "; BkColor: " . $bkColor,
                $name,
                function () use ($name, $formatExtension, $resizeProportionally, $bkColor, $folder, $storage) {
                    $request = new Requests\DeskewImageRequest($name, $resizeProportionally, $bkColor, $folder, $storage);
                    return self::$imagingApi->deskewImageAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
                    $this->assertEquals($originalProperties->getBitsPerPixel(), $resultProperties->getBitsPerPixel());
                },
                $folder,
                $storage);
        }
    }

    /**
     * Test CreateDeskewedImage
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param bool $resizeProportionally Resize proportionally
     * @param string $bkColor Background color
     * @return void
     */
    public function createDeskewedImageTest($formatExtension, $saveResultToStorage, $resizeProportionally, $bkColor)
    {
        $name = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $outName = null;

        foreach (self::$inputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $outName = $name . "_deskew." . $formatExtension;

            $this->postRequestTestInternal(
                "createDeskewedImageTest",
                $saveResultToStorage,
                "Input image: " . $name . "; Output format: " . $formatExtension . "; ResizeProportionally: " . $resizeProportionally . "; BkColor: " . $bkColor,
                $name,
                $outName,
                function ($inputStream, $outPath) use ($formatExtension, $resizeProportionally, $bkColor, $storage) {
                    $request = new Requests\CreateDeskewedImageRequest($inputStream, $resizeProportionally, $bkColor, $outPath, $storage);
                    return self::$imagingApi->createDeskewedImageAsync($request)->wait();
                },
                function ($originalProperties, $resultProperties, $resultStream) {
                    $this->assertEquals($originalProperties->getBitsPerPixel(), $resultProperties->getBitsPerPixel());
                },
                $folder,
                $storage);
        }
    }
}
