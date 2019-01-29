<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RotateFlipApiTest.php">
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
 * Class for testing RotateFlipApi
 * 
 * @group Imaging
 * @group v1.0
 * @group v2.0
 * @group RotateFlip
 */
class RotateFlipApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return self::$extendedTests ? [
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
     * Test GetImageRotateFlip
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function getImageRotateFlipTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        $name = null;
        $method = "Rotate90FlipX";
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
                $outName = $name . "_rotateFlip." . $format;

                $this->getRequestTestInternal(
                    "getImageRotateFlipTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; Method: " . $method,
                    $name,
                    $outName,
                    function($fileName, $outPath) use ($format, $method, $folder, $storage)
                    {
                        $request = new Requests\GetImageRotateFlipRequest($fileName, $format, $method, $outPath, $folder, $storage);
                        return self::$asyncMode ? self::$imagingApi->getImageRotateFlipAsync($request)->wait() : self::$imagingApi->getImageRotateFlip($request);
                    },
                    function($originalProperties, $resultProperties, $resultStream)
                    {
                        try
                        {
                            $this->assertEquals($originalProperties->getHeight(), $resultProperties->getWidth());
                        }
                        catch (\Exception $ex)
                        {
                            $this->assertEquals($originalProperties->getHeight(), $resultProperties->getWidth() + 1);
                        }

                        try
                        {
                            $this->assertEquals($originalProperties->getWidth(), $resultProperties->getHeight());
                        }
                        catch (\Exception $ex)
                        {
                            $this->assertEquals($originalProperties->getWidth(), $resultProperties->getHeight() + 1);
                        }
                    },
                    $folder,
                    $storage);
            }
        }
    }

    /**
     * Test PostImageRotateFlip
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function postImageRotateFlipTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        $name = null;
        $method = "Rotate90FlipX";
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
                $outName = $name . "_rotateFlip." . $format;

                $this->postRequestTestInternal(
                    "postImageRotateFlipTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; Method: " . $method,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($format, $method, $storage)
                    {
                        $request = new Requests\PostImageRotateFlipRequest($inputStream, $format,$method, $outPath, $storage);
                        return self::$asyncMode ? self::$imagingApi->postImageRotateFlipAsync($request)->wait() : self::$imagingApi->postImageRotateFlip($request);
                    },
                    function($originalProperties, $resultProperties, $resultStream)
                    {
                        try
                        {
                            $this->assertEquals($originalProperties->getHeight(), $resultProperties->getWidth());
                        }
                        catch (\Exception $ex)
                        {
                            $this->assertEquals($originalProperties->getHeight(), $resultProperties->getWidth() + 1);
                        }

                        try
                        {
                            $this->assertEquals($originalProperties->getWidth(), $resultProperties->getHeight());
                        }
                        catch (\Exception $ex)
                        {
                            $this->assertEquals($originalProperties->getWidth(), $resultProperties->getHeight() + 1);
                        }
                    },
                    $folder,
                    $storage);
            }
        }
    }
}
