<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DicomApiTest.php">
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
 * Class for testing DicomApi
 * 
 * @group Imaging
 * @group v1.0
 * @group v2.0
 * @group Dicom
 */
class DicomApiTest extends ApiTester
{
    /**
     * Test GetImageDicom
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImageDicomTest($saveResultToStorage)
    {
        $name = "test.dicom";
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageDicomTest", 
            $saveResultToStorage,
            "Input image: " . $name,
            $name,
            $outName,
            function($fileName, $outPath) use ($fromScratch, $folder, $storage)
            {
                $request = new Requests\GetImageDicomRequest($fileName, $fromScratch, $outPath, $folder, $storage);
                return self::$asyncMode ? self::$imagingApi->getImageDicomAsync($request)->wait() : self::$imagingApi->getImageDicom($request);
            },
            function($originalProperties, $resultProperties, $resultStream)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertNotNull($originalProperties->getDicomProperties());
                $this->assertEquals(10, $originalProperties->getDicomProperties()->getNumberOfFrames());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test PostImageDicom
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function postImageDicomTest($saveResultToStorage)
    {
        $name = "test.dicom";
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "postImageDicomTest", 
            $saveResultToStorage,
            "Input image: " . $name,
            $name,
            $outName,
            function($inputStream, $outPath) use ($fromScratch, $storage)
            {
                $request = new Requests\PostImageDicomRequest($inputStream, $fromScratch, $outPath, $storage);
                return self::$asyncMode ? self::$imagingApi->postImageDicomAsync($request)->wait() : self::$imagingApi->postImageDicom($request);
            },
            function($originalProperties, $resultProperties, $resultStream)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertNotNull($originalProperties->getDicomProperties());
                $this->assertEquals(10, $originalProperties->getDicomProperties()->getNumberOfFrames());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }
}
