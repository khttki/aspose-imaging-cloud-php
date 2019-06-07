<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Jpeg2000ApiTest.php">
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
 * Class for testing Jpeg2000Api
 * 
 * @group Imaging
 * @group v3.0
 * @group Jpeg2000
 */
class Jpeg2000ApiTest extends ApiTester
{
    /**
     * Test ModifyJpeg2000
     * 
     * @test
     *
     * @return void
    */
    public function modifyJpeg2000Test()
    {
        $name = "test.j2k";
        $comment = "Aspose";
        $codec = "jp2";
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifyJpeg2000Test", 
            "Input image: " . $name . "; Comment: " . $comment . "; Codec: " . $codec,
            $name,
            function() use ($name, $comment, $codec, $fromScratch, $folder, $storage)
            {
                $request = new Requests\ModifyJpeg2000Request($name, $comment, $codec, $fromScratch, $folder, $storage);
                return self::$imagingApi->modifyJpeg2000Async($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($comment, $codec)
            {
                $this->assertNotNull($resultProperties->getJpeg2000Properties());
                $this->assertNotNull($resultProperties->getJpeg2000Properties()->getCodec());
                $this->assertEquals($codec, strtolower($resultProperties->getJpeg2000Properties()->getCodec()));

                $this->assertNotNull($resultProperties->getJpeg2000Properties()->getComments());
                $this->assertEquals($comment, $resultProperties->getJpeg2000Properties()->getComments()[0]);

                $this->assertNotNull($originalProperties->getJpeg2000Properties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
                $this->assertNotNull($originalProperties->getJpeg2000Properties()->getComments());
                $this->assertNotEquals($comment, $originalProperties->getJpeg2000Properties()->getComments()[0]);
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateModifiedJpeg2000
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function createModifiedJpeg2000Test($saveResultToStorage)
    {
        $name = "test.j2k";
        $comment = "Aspose";
        $codec = "jp2";
        $fromScratch = null;
        $outName = $name . "_specific.jp2";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedJpeg2000Test", 
            $saveResultToStorage,
            "Input image: " . $name . "; Comment: " . $comment . "; Codec: " . $codec,
            $name,
            $outName,
            function($inputStream, $outPath) use ($comment, $codec, $fromScratch, $storage)
            {
                $request = new Requests\CreateModifiedJpeg2000Request($inputStream, $comment, $codec, $fromScratch, $outPath, $storage);
                return self::$imagingApi->createModifiedJpeg2000Async($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($comment, $codec)
            {
                $this->assertNotNull($resultProperties->getJpeg2000Properties());
                $this->assertNotNull($resultProperties->getJpeg2000Properties()->getCodec());
                $this->assertEquals($codec, strtolower($resultProperties->getJpeg2000Properties()->getCodec()));

                $this->assertNotNull($resultProperties->getJpeg2000Properties()->getComments());
                $this->assertEquals($comment, $resultProperties->getJpeg2000Properties()->getComments()[0]);

                $this->assertNotNull($originalProperties->getJpeg2000Properties());
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());
                $this->assertNotNull($originalProperties->getJpeg2000Properties()->getComments());
                $this->assertNotEquals($comment, $originalProperties->getJpeg2000Properties()->getComments()[0]);
            },
            $folder,
            $storage);
    }
}
