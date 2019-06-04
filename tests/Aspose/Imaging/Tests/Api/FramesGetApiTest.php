<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FramesGetApiTest.php">
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
 * Class for testing FramesApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Tiff
 */
class FramesGetApiTest extends ApiTester
{
    /**
     * Test GetImageFrame
     * 
     * @test
     *
     * @return void
    */
    public function getImageSingleFrameTest()
    {
        $name = "test.tiff";
        $frameId = 2;
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $saveOtherFrames = false;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageSingleFrameTest", 
            "Input image: " . $name . "; Frame ID: " . $frameId . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: " . $x. "; Y: " . $y . 
                "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod . 
                "; Save other frames: " . var_export($saveOtherFrames, true),
            $name,
            function() use ($name, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight , $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $request = new Requests\GetImageFrameRequest($name, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                    $rotateFlipMethod, $saveOtherFrames, $folder, $storage);
                return self::$imagingApi->getImageFrameAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertNotNull($resultProperties->getTiffProperties()->getFrames());
                $this->assertEquals(1, count($resultProperties->getTiffProperties()->getFrames()));

                // please note that rotation was performed, so switching of width and height comparison is valid
                $this->assertEquals($rectHeight, $resultProperties->getTiffProperties()->getFrames()[0]->getWidth());
                $this->assertEquals($rectWidth, $resultProperties->getTiffProperties()->getFrames()[0]->getHeight());
                $this->assertEquals($resultProperties->getTiffProperties()->getFrames()[0]->getFrameOptions()->getImageWidth(), $rectHeight);
                $this->assertEquals($rectWidth, $resultProperties->getTiffProperties()->getFrames()[0]->getFrameOptions()->getImageLength());
                $this->assertEquals($rectHeight, $resultProperties->getWidth());
                $this->assertEquals($rectWidth, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test GetImageFrame
     * 
     * @test
     *
     * @return void
    */
    public function getImageAllFramesTest()
    {
        $name = "test.tiff";
        $frameId = 2;
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $saveOtherFrames = true;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageAllFramesTest", 
            "Input image: " . $name . "; Frame ID: " . $frameId . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: " . $x. "; Y: " . $y . 
                "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod . 
                "; Save other frames: " . var_export($saveOtherFrames, true),
            $name,
            function() use ($name, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight , $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $request = new Requests\GetImageFrameRequest($name, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                    $rotateFlipMethod, $saveOtherFrames, $folder, $storage);
                return self::$imagingApi->getImageFrameAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $this->assertNotNull($originalProperties->getTiffProperties());
                $this->assertNotNull($originalProperties->getTiffProperties()->getFrames());

                $this->assertNotNull($resultProperties->getTiffProperties());
                $this->assertNotNull($resultProperties->getTiffProperties()->getFrames());

                $this->assertEquals(count($originalProperties->getTiffProperties()->getFrames()), count($resultProperties->getTiffProperties()->getFrames()));
                $this->assertEquals($originalProperties->getWidth(), $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight(), $resultProperties->getHeight());

                // please note that rotation was performed, so switching of width and height comparison is valid
                $this->assertEquals($rectHeight, $resultProperties->getTiffProperties()->getFrames()[$frameId]->getWidth());
                $this->assertEquals($rectWidth, $resultProperties->getTiffProperties()->getFrames()[$frameId]->getHeight());
                $this->assertEquals($rectHeight, $resultProperties->getTiffProperties()->getFrames()[$frameId]->getFrameOptions()->getImageWidth());
                $this->assertEquals($rectWidth, $resultProperties->getTiffProperties()->getFrames()[$frameId]->getFrameOptions()->getImageLength());
            },
            $folder,
            $storage);
    }
}
