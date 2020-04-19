<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FramesApiTest.php">
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

use Aspose\Imaging\Model\Requests;
use Aspose\Imaging\Tests\Base\ApiTester;
use InvalidArgumentException;

/**
 * Class for testing Frames API
 *
 * @group Imaging
 * @group v3.0
 * @group Frames
 */
class FramesApiTest extends ApiTester
{
    /**
     * Export options provider
     *
     * @return array
     */
    public function exportOptionsProvider()
    {
        return self::getExtendedTests() ? [
            [".cdr", true], [".cdr", false],
            [".cmx", true], [".cmx", false],
            [".dicom", true], [".dicom", false],
            [".djvu", true], [".djvu", false],
            [".gif", true], [".gif", false],
            [".odg", true], [".odg", false],
            [".otg", true], [".otg", false],
            [".psd", true], [".psd", false],
            [".webp", true], [".webp", false]
        ] : [
            [".tiff", true], [".tiff", false],
        ];
    }

    const formatsWithoutProperties = [".cdr", ".cmx", ".otg"];

    /**
     * Test GetImageFrame
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function getImageFrameTest($formatExtension, $saveResultToStorage)
    {
        if ($saveResultToStorage) {
            return;
        }

        $frameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $exportFormat = self::getExportFormat($formatExtension, true);

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $this->getRequestTestInternal(
                "getImageFrameTest",
                "Input image: " . $name . "; Frame id: " . $frameId,
                $name,
                function () use ($name, $frameId, $folder, $storage) {
                    $request = new Requests\GetImageFrameRequest($name, $frameId, null, null, null, null, null, null,
                        null, null, $folder, $storage);
                    return self::$imagingApi->getImageFrame($request);
                },
                function ($originalProperties, $resultProperties, $resultStream) use ($formatExtension, $exportFormat) {
                    $this->assertNotNull($resultProperties);
                    if (in_array($exportFormat, self::formatsWithoutProperties)) {
                        return;
                    }

                    $propertiesName = self::getPropertiesName($exportFormat);
                    $resultFormatProperties = $resultProperties[$propertiesName];
                    $this->assertNotNull($resultFormatProperties);
                },
                $folder,
                $storage
            );
        }
    }

    /**
     * Test CreateImageFrame
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function createImageFrameTest($formatExtension, $saveResultToStorage)
    {

        $frameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $exportFormat = self::getExportFormat($formatExtension, true);

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $outName = $name . "_single_frame" . $exportFormat;

            $this->postRequestTestInternal(
                "createImageFrameTest",
                $saveResultToStorage,
                "Input image: " . $name . "; Frame id: " . $frameId,
                $name,
                $outName,
                function ($inputStream, $outPath) use ($name, $frameId, $folder, $storage) {
                    $request = new Requests\CreateImageFrameRequest($inputStream, $frameId, null, null, null, null,
                        null, null, null, null, $outPath, $storage);
                    return self::$imagingApi->createImageFrame($request);
                },
                function ($originalProperties, $resultProperties, $resultStream) use ($formatExtension, $exportFormat) {
                    $this->assertNotNull($resultProperties);
                    if (in_array($exportFormat, self::formatsWithoutProperties)) {
                        return;
                    }

                    $propertiesName = self::getPropertiesName($exportFormat);
                    $resultFormatProperties = $resultProperties[$propertiesName];
                    $this->assertNotNull($resultFormatProperties);
                },
                $folder,
                $storage
            );
        }
    }

    /**
     * Test GetImageFrameRange
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function getImageFrameRangeTest($formatExtension, $saveResultToStorage)
    {
        if ($saveResultToStorage) {
            return;
        }

        $startFrameId = 0;
        $endFrameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $exportFormat = self::getExportFormat($formatExtension, true);

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $this->getRequestTestInternal(
                "getImageFrameRangeTest",
                "Input image: " . $name . "; Start frame id: " . $startFrameId . "; End frame id: " . $endFrameId,
                $name,
                function () use ($name, $startFrameId, $endFrameId, $folder, $storage) {
                    $request = new Requests\GetImageFrameRangeRequest($name, $startFrameId, $endFrameId, null, null,
                        null, null, null, null, null, null, $folder, $storage);
                    return self::$imagingApi->getImageFrameRange($request);
                },
                function ($originalProperties, $resultProperties, $resultStream) use ($formatExtension, $exportFormat) {
                    $this->assertNotNull($resultProperties);
                    if (in_array($exportFormat, self::formatsWithoutProperties)) {
                        return;
                    }

                    $propertiesName = self::getPropertiesName($exportFormat);
                    $resultFormatProperties = $resultProperties[$propertiesName];
                    $this->assertNotNull($resultFormatProperties);
                },
                $folder,
                $storage
            );
        }
    }

    /**
     * Test CreateImageFrameRange
     *
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function createImageFrameRangeTest($formatExtension, $saveResultToStorage)
    {
        $startFrameId = 0;
        $endFrameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $exportFormat = self::getExportFormat($formatExtension, false);

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            $outName = $name . "_frame_range" . $exportFormat;

            $this->postRequestTestInternal(
                "createImageFrameTest",
                $saveResultToStorage,
                "Input image: " . $name . "; Start frame id: " . $startFrameId . "; End frame id: " . $endFrameId,
                $name,
                $outName,
                function ($inputStream, $outPath) use ($name, $startFrameId, $endFrameId, $folder, $storage) {
                    $request = new Requests\CreateImageFrameRangeRequest($inputStream, $startFrameId, $endFrameId, null,
                        null, null, null, null, null, null, null, $outPath, $storage);
                    return self::$imagingApi->createImageFrameRange($request);
                },
                function ($originalProperties, $resultProperties, $resultStream) use ($formatExtension, $exportFormat) {
                    $this->assertNotNull($resultProperties);
                    if (in_array($exportFormat, self::formatsWithoutProperties)) {
                        return;
                    }

                    $propertiesName = self::getPropertiesName($exportFormat);
                    $resultFormatProperties = $resultProperties[$propertiesName];
                    $this->assertNotNull($resultFormatProperties);
                },
                $folder,
                $storage
            );
        }
    }

    /**
     * Test GetImageFrameProperties
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function getImageFrameProperties($formatExtension, $saveResultToStorage)
    {
        if ($saveResultToStorage) {
            return;
        }

        $frameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            self::copyInputFileToTestFolder($name, $folder, $storage);

            echo "GetImageFramePropertiesTest" . PHP_EOL;
            echo "Input image: " . $name . "; Frame id: " . $frameId . PHP_EOL;

            $responseMessage = self::$imagingApi->getImageFrameProperties(new Requests\GetImageFramePropertiesRequest($name,
                $frameId, $folder, $storage));

            $this->assertNotNull($responseMessage);
            if (in_array($formatExtension, self::formatsWithoutProperties)) {
                return;
            }

            $propertiesName = self::getPropertiesName($formatExtension);
            $resultFormatProperties = $responseMessage[$propertiesName];
            $this->assertNotNull($resultFormatProperties);
        }
    }

    /**
     * Test ExtractImageFrameProperties
     * @test
     * @dataProvider exportOptionsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param bool $saveResultToStorage If result should be saved to storage
     */
    public function extractImageFrameProperties($formatExtension, $saveResultToStorage)
    {
        if ($saveResultToStorage) {
            return;
        }

        $frameId = 1;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        foreach (self::$multipageInputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            self::copyInputFileToTestFolder($name, $folder, $storage);
            $imageData = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($folder . DIRECTORY_SEPARATOR . $name,
                $storage));

            echo "ExtractImageFramePropertiesTest" . PHP_EOL;
            echo "Input image: " . $name . "; Frame id: " . $frameId . PHP_EOL;

            $responseMessage = self::$imagingApi->extractImageFrameProperties(new Requests\ExtractImageFramePropertiesRequest($imageData,
                $frameId));

            $this->assertNotNull($responseMessage);
            if (in_array($formatExtension, self::formatsWithoutProperties)) {
                return;
            }

            $propertiesName = self::getPropertiesName($formatExtension);
            $resultFormatProperties = $responseMessage[$propertiesName];
            $this->assertNotNull($resultFormatProperties);
        }
    }

    /**
     * Returns field name containing properties for specified format
     * @param string $format The file format
     * @return string The properties field name
     */
    private function getPropertiesName($format)
    {
        if ($format == null) {
            new InvalidArgumentException("Invalid format");
        }

        if ($format === ".jpg")
            $format = ".jpeg";
        else if ($format === ".j2k")
            $format = ".jpeg2000";
        else if ($format === ".webp")
            $format = ".web_p";

        return ltrim($format, ".") . "_properties";
    }

    /**
     * Returns default export format for specified image format and single or range frame mode
     *
     * @param string $format The file format
     * @param bool $isSingleFrame Single frame or multiframe operation
     * @return string The export format
     */
    private function getExportFormat($format, $isSingleFrame)
    {
        if (in_array($format, [".dicom", ".dng", ".djvu", ".cdr", ".cmx", ".odg", ".otg", ".svg"])) {
            return $isSingleFrame ? ".psd" : ".pdf";
        }

        return $format;
    }
}
