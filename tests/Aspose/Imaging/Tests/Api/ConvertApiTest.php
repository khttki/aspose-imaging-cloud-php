<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveAsApiTest.php">
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
 * Class for testing ConvertApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Convert
 */
class ConvertApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return self::getExtendedTests() ? [
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
        ] : [
            [".jpg", true], [".jpg", false],
        ];
    }

    /**
     * Test ConvertImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function convertImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        if ($saveResultToStorage) {
            return;
        }

        $name = null;
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

        foreach (self::$basicInputTestFiles as $inputFile)
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
                    "convertImageTest", 
                    "Input image: " . $name . "; Output format: " . $format,
                    $name,
                    function() use ($name, $format, $folder, $storage)
                    {
                        $request = new Requests\ConvertImageRequest($name, $format, $folder, $storage);
                        return self::$imagingApi->convertImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream){},
                    $folder,
                    $storage);
            }
        }
    }

    /**
     * Test CreateConvertedImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function createConvertedImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        $name = null;
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

        foreach (self::$basicInputTestFiles as $inputFile)
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
                $outName = $name . "." . $format;

                $this->postRequestTestInternal(
                    "createConvertedImageTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($format, $storage)
                    {
                        $request = new Requests\CreateConvertedImageRequest($inputStream, $format, $outPath, $storage);
                        return self::$imagingApi->createConvertedImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream){},
                    $folder,
                    $storage);
            }
        }
    }
}
