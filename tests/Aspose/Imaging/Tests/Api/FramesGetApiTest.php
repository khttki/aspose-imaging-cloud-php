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
use \Aspose\Imaging;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
use \PHPUnit\Framework\TestCase;
use \GuzzleHttp\Stream;

/**
 * Class for testing FramesApi
 * 
 * @group Imaging
 * @group v1.0
 * @group v2.0
 * @group Tiff
 */
class FramesGetApiTest extends ApiTester
{
    /**
     * Test GetImageFrame
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImageSingleFrameTest($saveResultToStorage)
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
        $outName = $name . "_singleFrame.tiff";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageSingleFrameTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Frame ID: " . $frameId . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: " . $x. "; Y: " . $y . 
                "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod . 
                "; Save other frames: " . var_export($saveOtherFrames, true),
            $name,
            $outName,
            function($fileName, $outPath) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight , $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $request = new Requests\GetImageFrameRequest($fileName, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                    $rotateFlipMethod, $saveOtherFrames, $outPath, $folder, $storage);
                return self::$asyncMode === true ? self::$imagingApi->getImageFrameAsync($request)->wait() : self::$imagingApi->getImageFrame($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                $rotateFlipMethod, $saveOtherFrames, $saveResultToStorage, $outName, $folder, $storage)
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

                if (!$saveResultToStorage) return;

                $framePropertiesRequest = new Requests\GetImageFramePropertiesRequest($outName, 0, $folder, $storage);
                $framePropertiesResponse = self::$asyncMode === true ? 
                    self::$imagingApi->getImageFramePropertiesAsync($framePropertiesRequest)->wait() :
                    self::$imagingApi->getImageFrameProperties($framePropertiesRequest);

                $this->assertNotNull($framePropertiesResponse);
                $this->assertNotNull($framePropertiesResponse->getTiffProperties());
                $this->assertNotNull($framePropertiesResponse->getTiffProperties()->getFrames());
                $this->assertEquals($rectHeight, $framePropertiesResponse->getWidth());
                $this->assertEquals($rectWidth, $framePropertiesResponse->getHeight());
                $this->assertEquals($framePropertiesResponse->getTiffProperties()->getFrames()[0]->getWidth(), $framePropertiesResponse->getWidth());
                $this->assertEquals($framePropertiesResponse->getTiffProperties()->getFrames()[0]->getHeight(), $framePropertiesResponse->getHeight());
                $this->assertEquals($framePropertiesResponse->getTiffProperties()->getFrames()[0]->getFrameOptions()->getImageWidth(), $framePropertiesResponse->getWidth());
                $this->assertEquals($framePropertiesResponse->getTiffProperties()->getFrames()[0]->getFrameOptions()->getImageLength(), $framePropertiesResponse->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test GetImageFrame
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImageAllFramesTest($saveResultToStorage)
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
        $outName = $name . "_allFrames.tiff";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageAllFramesTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Frame ID: " . $frameId . "; New width: " . $newWidth . "; New height: " . $newHeight . "; X: " . $x. "; Y: " . $y . 
                "; Rect width: " . $rectWidth . "; Rect height: " . $rectHeight . "; Rotate/flip method: " . $rotateFlipMethod . 
                "; Save other frames: " . var_export($saveOtherFrames, true),
            $name,
            $outName,
            function($fileName, $outPath) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight , $rotateFlipMethod, $saveOtherFrames, $folder, $storage)
            {
                $request = new Requests\GetImageFrameRequest($fileName, $frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                    $rotateFlipMethod, $saveOtherFrames, $outPath, $folder, $storage);
                return self::$asyncMode === true ? self::$imagingApi->getImageFrameAsync($request)->wait() : self::$imagingApi->getImageFrame($request);
            },
            function($originalProperties, $resultProperties, $resultStream) use ($frameId, $newWidth, $newHeight, $x, $y, $rectWidth, $rectHeight, 
                $rotateFlipMethod, $saveOtherFrames, $saveResultToStorage, $outName, $folder, $storage)
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
