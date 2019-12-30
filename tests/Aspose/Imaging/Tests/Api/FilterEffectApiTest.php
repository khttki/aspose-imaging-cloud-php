<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FilterEffectApiTest.php">
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
use \Aspose\Imaging\Model\Requests;
use \Aspose\Imaging\Model;

/**
 * Class for testing FilterEffectApi
 *
 * @group Imaging
 * @group v3.0
 * @group FilterEffect
 */
class FilterEffectApiTest extends ApiTester
{
    /**
     * Filter effect image formats provider
     *
     * @return array
     */
    public function filterEffectFormatsProvider()
    {
        return self::$extendedTests ? [
            [".dicom"],
            [".djvu"],
            [".gif"],
            [".psd"],
            [".tiff"],
            [".webp"]
        ] : [
            [".psd"],
        ];
    }

    /**
     * Test FilterEffectImage
     *
     * @test
     * @dataProvider filterEffectFormatsProvider
     *
     * @param string $formatExtension Format extension to search for input images in the test folder.
     * @param array $additionalExportFormats Additional formats to export to.
     * @return void
     */
    public function filterEffectTest($formatExtension, $additionalExportFormats = [])
    {
        $folder = self::$tempFolder;
        $storage = self::$testStorage;

        $formatsToExport = ApiTester::BasicExportFormats;
        foreach ($additionalExportFormats as $additionalExportFormat) {
            if (!in_array($additionalExportFormat, $formatsToExport)) {
                $formatsToExport[] = $additionalExportFormat;
            }
        }

        foreach (self::$inputTestFiles as $inputFile) {
            $inputFileName = $inputFile->getName();
            if (substr($inputFileName, -strlen($formatExtension), strlen($formatExtension)) === $formatExtension) {
                $name = $inputFileName;
            } else {
                continue;
            }

            foreach ($this->__getTestFilters() as $filter) {
                foreach ($formatsToExport as $format) {
                    $this->getRequestTestInternal(
                        "FilterEffectTest",
                        "Input image: " . $name . "; Output format: " . isset($format)? $format : "null" . "; Filter type: " . $filter->filterType,
                        $name,
                        function () use ($name, $format, $filter, $folder, $storage) {
                            $request = new Requests\FilterEffectImageRequest($name, $filter->filterType, $filter->filterProperties, $format, $folder, $storage);
                            return self::$imagingApi->filterEffectImageAsync($request)->wait();
                        },
                        function ($originalProperties, $resultProperties, $resultStream) {

                        },
                        $folder,
                        $storage
                    );
                }
            }
        }
    }

    private function __getTestFilters()
    {
        return [
            new __Filter("BigRectangular", new Model\BigRectangularFilterProperties()),
            new __Filter("SmallRectangular", new Model\SmallRectangularFilterProperties()),
            new __Filter("Median", new Model\MedianFilterProperties(array("size" => 2))),
            new __Filter("GaussWiener", new Model\GaussWienerFilterProperties(array("radius" => 2, "smooth" => 2))),
            new __Filter("MotionWiener", new Model\MotionWienerFilterProperties(array("length" => 2, "smooth" => 2, "angle" => 12))),
            new __Filter("GaussianBlur", new Model\GaussianBlurFilterProperties(array("radius" => 2, "sigma" => 0.5))),
            new __Filter("Sharpen", new Model\SharpenFilterProperties(array("size" => 2, "sigma" => 0.5))),
            new __Filter("BilateralSmoothing", new Model\BilateralSmoothingFilterProperties(array("size" => 2, "spatial_factor" => 2, "spatial_power" => 2, "color_factor" => 2, "color_power" => 2)))
        ];
    }

}

class __Filter
{
    public $filterType;
    public $filterProperties;

    /**
     * Filter constructor.
     * @param string $filterType The filter type.
     * @param Model\FilterPropertiesBase $filterProperties The filter properties.
     */
    public function __construct($filterType, $filterProperties)
    {
        $this->filterType = $filterType;
        $this->filterProperties = $filterProperties;
    }
}