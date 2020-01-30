<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CropApiTest.php">
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
 * Class for testing CropApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Crop
 */
class CropApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return self::$extendedTests ? [
            [".bmp", true, [null]],  [".bmp", false, [null]],
            [".dicom", true], [".dicom", false],
            /* TODO: enable after IMAGINGCLOUD-51 is resolved
            [".gif", true], [".gif", false],
            */
            [".j2k", true, [null]], [".j2k", false, [null]],
            [".png", true, [null]], [".png", false, [null]],
            [".psd", true, [null]], [".psd", false, [null]],
            [".jpg", true, [null]], [".jpg", false, [null]],
            [".tiff", true, [null]], [".tiff", false, [null]],
            [".webp", true, [null]], [".webp", false, [null]]
        ] : [
            [".jpg", true, [null]], [".jpg", false, [null]],
        ];
    }

    /**
     * Test CropImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function cropImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        if ($saveResultToStorage) {
            return;
        }

        $name = null;
        $x = 10;
        $y = 10;
        $width = 100;
        $height = 150;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $formatsToExport = ApiTester::BasicExportFormats;
        foreach($additionalExportFormats as $additionalExportFormat)
        {
            if (!in_array($additionalExportFormat, $formatsToExport))
            {
                $formatsToExport[] = $additionalExportFormat;
            }
        }

        foreach (self::$inputTestFiles as $inputFile)
        {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension)
            {
                $name = $inputFileName;
            }
            else
            {
                continue;
            }

            foreach ($formatsToExport as $format)
            {
                $this->getRequestTestInternal(
                    "cropImageTest", 
                    "Input image: " . $name . "; Output format: " . $format . "; Width: " . $width . "; Height: " . $height . "; X: ". $x . "; Y: " . $y,
                    $name,
                    function() use ($name, $format, $x, $y, $width, $height, $folder, $storage)
                    {
                        $request = new Requests\CropImageRequest($name, $x, $y, $width, $height, $format, $folder, $storage);
                        return self::$imagingApi->cropImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use ($width, $height)
                    {
                        $this->assertEquals($width, $resultProperties->getWidth());
                        $this->assertEquals($height, $resultProperties->getHeight());
                    },
                    $folder,
                    $storage);
            }
        }
    }

    /**
     * Test CreateCroppedImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function createCroppedImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        $name = null;
        $x = 10;
        $y = 10;
        $width = 100;
        $height = 150;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $outName = null;

        $formatsToExport = ApiTester::BasicExportFormats;
        foreach($additionalExportFormats as $additionalExportFormat)
        {
            if (!in_array($additionalExportFormat, $formatsToExport))
            {
                $formatsToExport[] = $additionalExportFormat;
            }
        }

        foreach (self::$inputTestFiles as $inputFile)
        {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension)
            {
                $name = $inputFileName;
            }
            else
            {
                continue;
            }

            foreach ($formatsToExport as $format)
            {
                $outName = $name . "_crop." . $format;

                $this->postRequestTestInternal(
                    "createCroppedImageTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; Width: " . $width . "; Height: " . $height . "; X: ". $x . "; Y: " . $y,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($format, $x, $y, $width, $height, $storage)
                    {
                        $request = new Requests\CreateCroppedImageRequest($inputStream, $x, $y, $width, $height, $format, $outPath, $storage);
                        return self::$imagingApi->createCroppedImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use ($width, $height)
                    {
                        $this->assertEquals($width, $resultProperties->getWidth());
                        $this->assertEquals($height, $resultProperties->getHeight());
                    },
                    $folder,
                    $storage);
            }
        }
    }
}
