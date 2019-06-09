<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WebPApiTest.php">
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
 * Class for testing WebpApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Webp
 */
class WebpApiTest extends ApiTester
{
    /**
     * Test ModifyWebp
     * 
     * @test
     *
     * @return void
    */
    public function modifyWebpTest()
    {
        $name = "Animation.webp";
        $lossless = true;
        $quality = 90;
        $animLoopCount = 5;
        $animBackgroundColor = "gray";
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifyWebpTest", 
            "Input image: " . $name . "; Lossless: " . $lossless . "; Quality: " . $quality . "; Anum loop count: " . $animLoopCount . ";
                Anim background color: " . $animBackgroundColor,
            $name,
            function() use ($name, $lossless, $quality, $animLoopCount, $animBackgroundColor, $fromScratch, $folder, $storage)
            {
                $request = new Requests\ModifyWebpRequest($name, $lossless, $quality, $animLoopCount, $animBackgroundColor, $fromScratch, $folder, $storage);
                return self::$imagingApi->modifyWebpAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($lossless, $quality, $animLoopCount, $animBackgroundColor)
            {
                $this->assertNotNull($resultProperties->getWebpProperties());
                $this->assertNotNull($originalProperties->getWebpProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateModifiedWebp
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function createModifiedWebpTest($saveResultToStorage)
    {
        $name = "Animation.webp";
        $lossless = true;
        $quality = 90;
        $animLoopCount = 5;
        $animBackgroundColor = "gray";
        $fromScratch = null;
        $outName = $name . "_specific.webp";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedWebpTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Lossless: " . $lossless . "; Quality: " . $quality . "; Anum loop count: " . $animLoopCount . ";
                Anim background color: " . $animBackgroundColor,
            $name,
            $outName,
            function($inputStream, $outPath) use ($lossless, $quality, $animLoopCount, $animBackgroundColor, $fromScratch, $storage)
            {
                $request = new Requests\CreateModifiedWebpRequest($inputStream, $lossless, $quality, $animLoopCount, $animBackgroundColor, $fromScratch, $outPath, $storage);
                return self::$imagingApi->createModifiedWebpAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($lossless, $quality, $animLoopCount, $animBackgroundColor)
            {
                $this->assertNotNull($resultProperties->getWebpProperties());
                $this->assertNotNull($originalProperties->getWebpProperties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }
}
