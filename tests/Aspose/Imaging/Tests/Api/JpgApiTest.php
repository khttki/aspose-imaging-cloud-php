<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="JpgApiTest.php">
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
use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing JpgApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Jpg
 */
class JpgApiTest extends ApiTester
{
    /**
     * Test GetImageJpg
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImageJpgTest($saveResultToStorage)
    {
        $name = "test.jpg";
        $quality = 65;
        $compressionType = "progressive";
        $fromScratch = null;
        $outName = $name . "_specific.jpg";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageJpgTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Quality: " . $quality . "; Compression type: " . $compressionType,
            $name,
            $outName,
            function($fileName, $outPath) use ($quality, $compressionType, $fromScratch, $folder, $storage)
            {
                $request = new Requests\GetImageJpgRequest($fileName, $quality, $compressionType, $fromScratch, $outPath, $folder, $storage);
                return self::$asyncMode ? self::$imagingApi->getImageJpgAsync($request)->wait() : self::$imagingApi->getImageJpg($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($quality, $compressionType)
            {
                $this->assertNotNull($resultProperties->getJpegProperties());
                $this->assertNotNull($originalProperties->getJpegProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test PostImageJpg
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function postImageJpgTest($saveResultToStorage)
    {
        $name = "test.jpg";
        $quality = 65;
        $compressionType = "progressive";
        $fromScratch = null;
        $outName = $name . "_specific.jpg";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "postImageJpgTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Quality: " . $quality . "; Compression type: " . $compressionType,
            $name,
            $outName,
            function($inputStream, $outPath) use ($quality, $compressionType, $fromScratch, $storage)
            {
                $request = new Requests\PostImageJpgRequest($inputStream, $quality, $compressionType, $fromScratch, $outPath, $storage);
                return self::$asyncMode ? self::$imagingApi->postImageJpgAsync($request)->wait() : self::$imagingApi->postImageJpg($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($quality, $compressionType)
            {
                $this->assertNotNull($resultProperties->getJpegProperties());
                $this->assertNotNull($originalProperties->getJpegProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }
}
