<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SvgApiTest.php">
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

use Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing SvgApi
 *
 * @group Imaging
 * @group v3.0
 * @group Svg
 */
class SvgApiTest extends ApiTester
{

    /**
     * Test ModifySvg performing rasterization of image using page size parameters
     *
     * @test
     *
     * @return void
     */
    public function modifySvgSizeRasterizationTest()
    {
        $name = "test.svg";
        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        // borderX and borderY are not supported right now, see IMAGINGNET-3543
        $borderX = 0;
        $borderY = 0;
        $format = "png";
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifySvgSizeRasterizationTest",
            "Input image: " . $name . "; Back color: " . $bkColor . "; Page width: " . $pageWidth . "; Page height: " . $pageHeight . ";
                Border X: " . $borderX . "; Border Y: " . $borderY,
            $name,
            function() use ($name, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $folder, $storage, $format)
            {
                $request = new Requests\ModifySvgRequest($name , null, null, null, null, $pageWidth, $pageHeight, $borderX, $borderY, $bkColor, $fromScratch, $folder, $storage, $format);
                return self::$imagingApi->modifySvgAsync($request)->wait();
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
     * Test ModifySvg performing rasterization of image using scale parameters
     *
     * @test
     *
     * @return void
     */
    public function modifySvgScaleRasterizationTest()
    {
        $name = "test.svg";
        $bkColor = "gray";
        $scaleX = 2.0;
        $scaleY = 2.0;
        $format = "png";
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifySvgSizeRasterizationTest",
            "Input image: " . $name . "; Back color: " . $bkColor . "; Scale X: " . $scaleX . "; Scale Y: " . $scaleY,
            $name,
            function() use ($name, $bkColor, $scaleX, $scaleY, $fromScratch, $folder, $storage, $format)
            {
                $request = new Requests\ModifySvgRequest($name , null, null, $scaleX, $scaleY, null, null, null, null, $bkColor, $fromScratch, $folder, $storage, $format);
                return self::$imagingApi->modifySvgAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($bkColor, $scaleX, $scaleY)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertEquals($originalProperties->getWidth() * $scaleX, $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight() * $scaleY, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test ModifySvg performing update of image properties
     *
     * @test
     *
     * @return void
     */
    public function modifySvgUpdatePropertiesTest()
    {
        $name = "test.svg";
        // Only RGB color type is supported right now, see IMAGINGNET-3543
        $colorType = "rgb";
        $textAsShapes = true;
        $format = "svg";
        $fromScratch = null;
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->getRequestTestInternal(
            "modifySvgUpdatePropertiesTest",
            "Input image: " . $name . "; Color type: " . $colorType . "; Text as shapes: " . $textAsShapes,
            $name,
            function() use ($name, $colorType, $textAsShapes, $fromScratch, $folder, $storage, $format)
            {
                $request = new Requests\ModifySvgRequest($name , $colorType, $textAsShapes, null, null, null, null, null, null, null, $fromScratch, $folder, $storage, $format);
                return self::$imagingApi->modifySvgAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($colorType, $textAsShapes)
            {
                $this->assertNotNull($resultProperties->getSvgProperties());
                $this->assertEquals($colorType, $resultProperties->getSvgProperties()->getColorType());
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateModifiedSvg performing rasterization of image using page size parameters
     *
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createModifiedSvgSizeRasterizationTest($saveResultToStorage)
    {
        $name = "test.svg";
        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        // borderX and borderY are not supported right now, see IMAGINGNET-3543
        $borderX = 0;
        $borderY = 0;
        $format = "png";
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedSvgSizeRasterizationTest",
            $saveResultToStorage,
            "Input image: " . $name . "; Back color: " . $bkColor . "; Page width: " . $pageWidth . "; Page height: " . $pageHeight . ";
                Border X: " . $borderX . "; Border Y: " . $borderY,
            $name,
            $outName,
            function($inputStream, $outPath) use ($bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $storage, $format)
            {
                $request = new Requests\CreateModifiedSvgRequest($inputStream, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY, $fromScratch, $outPath, $storage, $format);
                return self::$imagingApi->createModifiedSvgAsync($request)->wait();
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
     * Test CreateModifiedSvg performing rasterization of image using scale parameters
     *
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createModifiedSvgScaleRasterizationTest($saveResultToStorage)
    {
        $name = "test.svg";
        $bkColor = "gray";
        $scaleX = 2.0;
        $scaleY = 2.0;
        $format = "png";
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedSvgScaleRasterizationTest",
            $saveResultToStorage,
            "Input image: " . $name . "; Back color: " . $bkColor . "; Scale X: " . $scaleX . "; Scale Y: " . $scaleY,
            $name,
            $outName,
            function($inputStream, $outPath) use ($name, $bkColor, $scaleX, $scaleY, $fromScratch, $folder, $storage, $format)
            {
                $request = new Requests\CreateModifiedSvgRequest($inputStream, null, null, $scaleX, $scaleY, null, null, null, null, $bkColor, $fromScratch, $outPath, $storage, $format);
                return self::$imagingApi->createModifiedSvgAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($bkColor, $scaleX, $scaleY)
            {
                $this->assertNotNull($resultProperties->getPngProperties());
                $this->assertEquals($originalProperties->getWidth() * $scaleX, $resultProperties->getWidth());
                $this->assertEquals($originalProperties->getHeight() * $scaleY, $resultProperties->getHeight());
            },
            $folder,
            $storage);
    }

    /**
     * Test CreateModifiedSvg performing update of image properties
     *
     * @test
     * @dataProvider storageOptionsProvider
     *
     * @param bool $saveResultToStorage If result should be saved to storage.
     * @return void
     */
    public function createModifiedSvgUpdatePropertiesTest($saveResultToStorage)
    {
        $name = "test.svg";
        // Only RGB color type is supported right now, see IMAGINGNET-3543
        $colorType = "rgb";
        $textAsShapes = true;
        $format = "svg";
        $fromScratch = null;
        $outName = $name . "_specific.png";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $this->postRequestTestInternal(
            "createModifiedSvgUpdatePropertiesTest",
            $saveResultToStorage,
            "Input image: " . $name . "; Color type: " . $colorType . "; Text as shapes: " . $textAsShapes,
            $name,
            $outName,
            function($inputStream, $outPath) use ($name, $colorType, $textAsShapes, $fromScratch, $folder, $storage, $format)
            {
                $request = new Requests\CreateModifiedSvgRequest($inputStream, $colorType, $textAsShapes, null, null, null, null, null, null, null, $fromScratch, $outPath, $storage, $format);
                return self::$imagingApi->createModifiedSvgAsync($request)->wait();
            },
            function($originalProperties, $resultProperties, $resultStream) use ($colorType, $textAsShapes)
            {
                $this->assertNotNull($resultProperties->getSvgProperties());
                $this->assertEquals($colorType, $resultProperties->getSvgProperties()->getColorType());
            },
            $folder,
            $storage);
    }
}