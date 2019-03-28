<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PsdApiTest.php">
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
 * Class for testing PsdApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Psd
 */
class PsdApiTest extends ApiTester
{
    /**
     * Test GetImagePsd
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImagePsdTest($saveResultToStorage)
    {
        $name = "test.psd";
        $channelsCount = 3;
        $compressionMethod = "raw";
        $fromScratch = null;
        $outName = $name . "_specific.psd";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImagePsdTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Channels count: " . $channelsCount . "; Compression method: " . $compressionMethod,
            $name,
            $outName,
            function($fileName, $outPath) use ($channelsCount, $compressionMethod, $fromScratch, $folder, $storage)
            {
                $request = new Requests\GetImagePsdRequest($fileName, $channelsCount, $compressionMethod, $fromScratch, $outPath, $folder, $storage);
                return self::$asyncMode ? self::$imagingApi->getImagePsdAsync($request)->wait() : self::$imagingApi->getImagePsd($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($channelsCount, $compressionMethod)
            {
                $this->assertNotNull($resultProperties->getPsdProperties());
                $this->assertEquals($compressionMethod, strtolower($resultProperties->getPsdProperties()->getCompression()));
                $this->assertEquals($channelsCount, $resultProperties->getPsdProperties()->getChannelsCount());

                $this->assertNotNull($originalProperties->getPsdProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
                $this->assertEquals($originalProperties->getPsdProperties()->getBitsPerChannel(), $resultProperties->getPsdProperties()->getBitsPerChannel());
            },
            $folder,
            $storage);
    }

    /**
     * Test PostImagePsd
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function postImagePsdTest($saveResultToStorage)
    {
        $name = "test.psd";
        $channelsCount = 3;
        $compressionMethod = "raw";
        $fromScratch = null;
        $outName = $name . "_specific.psd";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "postImagePsdTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Channels count: " . $channelsCount . "; Compression method: " . $compressionMethod,
            $name,
            $outName,
            function($inputStream, $outPath) use ($channelsCount, $compressionMethod, $fromScratch, $storage)
            {
                $request = new Requests\PostImagePsdRequest($inputStream, $channelsCount, $compressionMethod, $fromScratch, $outPath, $storage);
                return self::$asyncMode ? self::$imagingApi->postImagePsdAsync($request)->wait() : self::$imagingApi->postImagePsd($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($channelsCount, $compressionMethod)
            {
                $this->assertNotNull($resultProperties->getPsdProperties());
                $this->assertEquals($compressionMethod, strtolower($resultProperties->getPsdProperties()->getCompression()));
                $this->assertEquals($channelsCount, $resultProperties->getPsdProperties()->getChannelsCount());

                $this->assertNotNull($originalProperties->getPsdProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
                $this->assertEquals($originalProperties->getPsdProperties()->getBitsPerChannel(), $resultProperties->getPsdProperties()->getBitsPerChannel());
            },
            $folder,
            $storage);
    }
}
