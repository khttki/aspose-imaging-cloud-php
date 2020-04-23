<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffApiTest.php">
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
use \Aspose\Imaging;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests ;
use Exception;
use \PHPUnit\Framework\TestCase;
use \GuzzleHttp\Stream;

/**
 * Class for testing TiffApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Tiff
 */
class TiffApiTest extends ApiTester
{
    /**
     * Test ConvertTiffToFax
     * 
     * @test
     *
     * @return void
    */
    public function convertTiffToFaxTest()
    {
        $name = "test.tiff";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "convertTiffToFaxTest", 
            "Input image: " . $name,
            $name,
            function() use ($name, $folder, $storage)
            {
                $request = new Requests\ConvertTiffToFaxRequest($name, $storage, $folder);
                return self::$imagingApi->convertTiffToFaxAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream)
            {
                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertEquals(1, $resultProperties->getBitsPerPixel());
                $this->assertEquals(196, (int)ceil($resultProperties->getVerticalResolution()));
                $this->assertEquals(204, (int)ceil($resultProperties->getHorizontalResolution()));
                $this->assertEquals(1728, $resultProperties->getWidth());
                $this->assertEquals(2200, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateFaxTiff
     *
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createFaxTiff($saveResultToStorage)
    {
        $name = "test.tiff";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $outName = $name . "_specific.tiff";

        $this->postRequestTestInternal(
            "createFaxTiff",
            $saveResultToStorage,
            "Input image: " . $name,
            $name,
            $outName,
            function($inputStream, $outPath) use ($name, $folder, $storage)
            {
                $request = new Requests\CreateFaxTiffRequest($inputStream, $outPath, $storage);
                return self::$imagingApi->createFaxTiffAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream)
            {
                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertEquals(1, $resultProperties->getBitsPerPixel());
                $this->assertEquals(196, (int)ceil($resultProperties->getVerticalResolution()));
                $this->assertEquals(204, (int)ceil($resultProperties->getHorizontalResolution()));
                $this->assertEquals(1728, $resultProperties->getWidth());
                $this->assertEquals(2200, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test ModifyTiff
     * 
     * @test
     *
     * @return void
    */
    public function modifyTiffTest()
    {
        $name = "test.tiff";
        $compression = "adobedeflate";
        $resolutionUnit = "inch";
        $bitDepth = 1;
        $horizontalResolution = 150;
        $verticalResolution = 150;
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifyTiffTest", 
            "Input image: " . $name . "; Compression: " . $compression . "; Resolution unit: " . $resolutionUnit . "; Bit depth: " . $bitDepth . ";
                Horizontal resolution: " . $horizontalResolution . "; Vertical resolution: " . $verticalResolution,
            $name,
            function() use ($name, $compression, $resolutionUnit, $bitDepth, $horizontalResolution, $verticalResolution, $fromScratch, $folder, $storage)
            {
                $request = new Requests\ModifyTiffRequest($name, $bitDepth, $compression, $resolutionUnit, $horizontalResolution, $verticalResolution,
                    $fromScratch, $folder, $storage);
                return self::$imagingApi->modifyTiffAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($compression, $resolutionUnit, $bitDepth, $horizontalResolution, $verticalResolution)
            {
                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertEquals($bitDepth > 1 ? $bitDepth * 4 : $bitDepth, $resultProperties->getBitsPerPixel());
                $this->assertEquals($verticalResolution, (int)ceil($resultProperties->getVerticalResolution()));
                $this->assertEquals($horizontalResolution, (int)ceil($resultProperties->getHorizontalResolution()));

                $this->assertNotNull($originalProperties->getTiffProperties());
                $this->assertEquals(count($originalProperties->getTiffProperties()->getFrames()), 
                    count($resultProperties->getTiffProperties()->getFrames()));
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateModifiedTiff
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function createModifiedTiffTest($saveResultToStorage)
    {
        $name = "test.tiff";
        $compression = "adobedeflate";
        $resolutionUnit = "inch";
        $bitDepth = 1;
        $horizontalResolution = 150;
        $verticalResolution = 150;
        $fromScratch = null;
        $outName = $name . "_specific.tiff";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedTiffTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Compression: " . $compression . "; Resolution unit: " . $resolutionUnit . "; Bit depth: " . $bitDepth . ";
                Horizontal resolution: " . $horizontalResolution . "; Vertical resolution: " . $verticalResolution,
            $name,
            $outName,
            function($inputStream, $outPath) use ($compression, $resolutionUnit, $fromScratch, $bitDepth, $horizontalResolution, $verticalResolution, $storage)
            {
                $request = new Requests\CreateModifiedTiffRequest($inputStream, $bitDepth, $compression, $resolutionUnit, $horizontalResolution, 
                    $verticalResolution, $fromScratch, $outPath, $storage);
                return self::$imagingApi->createModifiedTiffAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($compression, $resolutionUnit, $bitDepth, $horizontalResolution, $verticalResolution)
            {
                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertEquals($bitDepth > 1 ? $bitDepth * 4 : $bitDepth, $resultProperties->getBitsPerPixel());
                $this->assertEquals($verticalResolution, (int)ceil($resultProperties->getVerticalResolution()));
                $this->assertEquals($horizontalResolution, (int)ceil($resultProperties->getHorizontalResolution()));

                $this->assertNotNull($originalProperties->getTiffProperties());
                $this->assertEquals(count($originalProperties->getTiffProperties()->getFrames()), 
                    count($resultProperties->getTiffProperties()->getFrames()));
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Tests AppendTiff
     *
     * @test
     * 
     * @return void
     */
    public function appendTiffTest()
    {
        $passed = false;

        echo "\r\nappendTiffTest\r\n";

        $inputFileName = "test.tiff";
        $folder = self::$tempFolder;

        if (!$this->checkInputFileExists($inputFileName))
        {
            throw new \ArgumentException(
                "Input file " . $inputFileName . " doesn't exist in the specified storage folder: " . $folder . ". Please, upload it first.");
        }

        $resultFileName = $inputFileName . "_merged.tiff";
        $outPath = null;
        $inputPath = $folder . "/" . $inputFileName;
        $storage = self::$testStorage;

        try
        {
            echo "Input file: " . $inputFileName . "\r\n";

            $outPath = self::$tempFolder . "/" . $resultFileName;

            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($outPath, $storage))->getExists())
            {
                self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($outPath, $storage));
            }

            if (!self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($inputPath, $storage))->getExists())
            {
                self::$imagingApi->copyFile(
                    new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $inputFileName, $inputPath, $storage, $storage));
            }

            self::$imagingApi->copyFile(
                new Requests\CopyFileRequest($inputPath, $outPath, $storage, $storage));

            $request = new Requests\AppendTiffRequest($resultFileName, $inputFileName, $storage, $folder);
            $response = self::$imagingApi->appendTiff($request);

            $resultInfo = $this->getStorageFileInfo($folder, $resultFileName, $storage);
            if (!isset($resultInfo))
            {
                throw new ArgumentException(
                    "Result file " . $resultFileName . " doesn't exist in the specified storage folder: "
                    . $folder . "Result isn't present in the storage by an unknown reason.");
            }

            $resultProperties = 
                self::$imagingApi->getImagePropertiesAsync(
                    new Requests\GetImagePropertiesRequest($resultFileName, $folder, $storage))->wait();
            $this->assertNotNull($resultProperties);

            $originalProperties =
                self::$imagingApi->getImagePropertiesAsync(
                    new Requests\GetImagePropertiesRequest($inputFileName, $folder, $storage))->wait();
            $this->assertNotNull($originalProperties);

            $this->assertNotNull($resultProperties->getTiffProperties());
            $this->assertNotNull($originalProperties->getTiffProperties());
            $this->assertEquals(count($originalProperties->getTiffProperties()->getFrames()) * 2, 
                count($resultProperties->getTiffProperties()->getFrames()));
            $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
            $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());

            $passed = true;
        }
        catch (Exception $ex)
        {
            self::$failedAnyTest = true;
            echo $ex->getMessage() . "\r\n";
            throw $ex;
        }
        finally
        {
            if ($passed && self::$removeResult && self::$imagingApi->objectExists(
                new Requests\ObjectExistsRequest($outPath, $storage))->getExists())
            {
                self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($outPath, $storage));
            }

            echo "Test passed: ";
            echo ($passed === true ? "true" : "false") . "\r\n";
        }
    }
}
