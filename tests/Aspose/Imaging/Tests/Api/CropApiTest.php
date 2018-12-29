<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CropApiTest.php">
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

namespace Aspose\Imaging\Tests\Api;

use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
use \PHPUnit\Framework\TestCase;
use \GuzzleHttp\Stream;

/**
 * Class for testing CropApi
 * 
 * @group Imaging
 * @group v1.0
 * @group v2.0
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
        return [
            [".bmp", true],  [".bmp", false], 
            [".dicom", true], [".dicom", false], 
            /* TODO: enable after IMAGINGCLOUD-51 is resolved
            [".gif", true], [".gif", false], 
            */
            [".j2k", true], [".j2k", false],
            [".png", true], [".png", false],
            [".psd", true], [".psd", false],
            [".jpg", true], [".jpg", false],
            [".tiff", true], [".tiff", false],
            [".webp", true], [".webp", false]
        ];
    }

    /**
     * Test GetImageCrop
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function getImageCropTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
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

                $this->getRequestTestInternal(
                    "getImageCropTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; Width: " . $width . "; Height: " . $height . "; X: ". $x . "; Y: " . $y,
                    $name,
                    $outName,
                    function($fileName, $outPath) use ($format, $x, $y, $width, $height, $folder, $storage)
                    {
                        $request = new Requests\GetImageCropRequest($fileName, $format, $x, $y, $width, $height, $outPath, $folder, $storage);
                        return self::$asyncMode ? self::$imagingApi->getImageCropAsync($request)->wait() : self::$imagingApi->getImageCrop($request);
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
     * Test PostImageCrop
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function postImageCropTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
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
                    "postImageCropTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; Width: " . $width . "; Height: " . $height . "; X: ". $x . "; Y: " . $y,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($format, $x, $y, $width, $height, $storage)
                    {
                        $request = new Requests\PostImageCropRequest($inputStream, $format, $x, $y, $width, $height, $outPath, $storage);
                        return self::$asyncMode ? self::$imagingApi->postImageCropAsync($request)->wait() : self::$imagingApi->postImageCrop($request);
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
