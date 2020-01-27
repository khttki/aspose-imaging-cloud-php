<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateApiTest.php">
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
 * Class for testing UpdateApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Update
 */
class UpdateApiTest extends ApiTester
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
     * Test UpdateImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function updateImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        if ($saveResultToStorage) {
            return;
        }

        $name = null;
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
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
                    "updateImageTest", 
                    "Input image: " . $name . "; Output format: " . $format . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: ". $x . "; Y: " . $y .
                        "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod,
                    $name,
                    function() use ($name, $format, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $folder, $storage)
                    {
                        $request = new Requests\UpdateImageRequest($name, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod,
                            $format, $folder, $storage);
                        return self::$imagingApi->updateImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use ($newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod)
                    {
                        $this->assertEquals($rectHeight, $resultProperties->getWidth());
                        $this->assertEquals($rectWidth, $resultProperties->getHeight());
                    },
                    $folder,
                    $storage);
            }
        }
    }

    /**
     * Test CreateUpdatedImage
     * 
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
    */
    public function createUpdatedImageTest($formatExtension, $saveResultToStorage, $additionalExportFormats = [])
    {
        $name = null;
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
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
                $outName = $name . "_update." . $format;

                $this->postRequestTestInternal(
                    "createUpdatedImageTest", 
                    $saveResultToStorage,
                    "Input image: " . $name . "; Output format: " . $format . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: ". $x . "; Y: " . $y .
                        "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod,
                    $name,
                    $outName,
                    function($inputStream, $outPath) use ($format, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $storage)
                    {
                        $request = new Requests\CreateUpdatedImageRequest($inputStream, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod,
                            $format, $outPath, $storage);
                        return self::$imagingApi->createUpdatedImageAsync($request)->wait();
                    },
                    function($originalProperties, $resultProperties, $resultStream) use ($newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod)
                    {
                        $this->assertEquals($rectHeight, $resultProperties->getWidth());
                        $this->assertEquals($rectWidth, $resultProperties->getHeight());
                    },
                    $folder,
                    $storage);
            }
        }
    }
}
