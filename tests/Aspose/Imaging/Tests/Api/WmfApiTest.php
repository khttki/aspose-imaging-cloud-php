<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WmfApiTest.php">
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
 * Class for testing WmfApi
 * 
 * @group Imaging
 * @group v3.0
 * @group Wmf
 */
class WmfApiTest extends ApiTester
{
    /**
     * Test GetImageWmf
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function getImageWmfTest($saveResultToStorage)
    {
        $name = "test.wmf";
        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "getImageWmfTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Back color: " . $bkColor . "; Page width: " . $pageWidth . "; Page height: " . $pageHeight . ";
                Border X: " . $borderX . "; Border Y: " . $borderY,
            $name,
            $outName,
            function($fileName, $outPath) use ($bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $folder, $storage)
            {
                $request = new Requests\GetImageWmfRequest($fileName, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $outPath, $folder, $storage);
                return self::$imagingApi->getImageWmfAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($bkColor, $pageWidth, $pageHeight, $borderX, $borderY)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertEquals($pageWidth + $borderX * 2, $resultProperties->getWidth());
                $this->assertEquals($pageHeight + $borderY * 2, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test PostImageWmf
     * 
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
    */
    public function postImageWmfTest($saveResultToStorage)
    {
        $name = "test.wmf";
        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "postImageWmfTest", 
            $saveResultToStorage,
            "Input image: " . $name . "; Back color: " . $bkColor . "; Page width: " . $pageWidth . "; Page height: " . $pageHeight . ";
                Border X: " . $borderX . "; Border Y: " . $borderY,
            $name,
            $outName,
            function($inputStream, $outPath) use ($bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $storage)
            {
                $request = new Requests\PostImageWmfRequest($inputStream, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $outPath, $storage);
                return self::$imagingApi->postImageWmfAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($bkColor, $pageWidth, $pageHeight, $borderX, $borderY)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertEquals($pageWidth + $borderX * 2, $resultProperties->getWidth());
                $this->assertEquals($pageHeight + $borderY * 2, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }
}
