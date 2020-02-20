<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ResizeImage.php">
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


namespace Aspose\Imaging\Examples;

use Aspose\Imaging\Model\BigRectangularFilterProperties;
use Aspose\Imaging\Model\Requests\FilterEffectImageRequest;

class FilterImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader('Filter image example:');
    }

    /**
     * Applies filtering effect to an image from cloud storage
     */
    public function FilterImageFromStorage()
    {
        echo "Apply filtering effect to an image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $filterType = "BigRectangular";
        $filterProperties = new BigRectangularFilterProperties();
        $format = "gif";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new FilterEffectImageRequest($this->GetSampleImageFileName(), $filterType, $filterProperties,
            $format, $folder, $storage);
        echo "Call FilterEffectImage with params: filter type: ${filterType}, format: ${format}";


        $updatedImage = self::$imagingApi->filterEffectImage($request);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false, $format);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "FilterEffectSampleImage.psd";
    }

    /**
     * Applies filtering effect to an image and uploads updated image to Cloud Storage
     */
    public function FilterImageAndUploadToStorage()
    {
        echo "Apply filtering effect to an image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $filterType = "BigRectangular";
        $filterProperties = new BigRectangularFilterProperties();
        $format = "gif";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new FilterEffectImageRequest($this->GetSampleImageFileName(), $filterType, $filterProperties,
            $format, $folder, $storage);
        echo "Call FilterEffectImage with params: filter type: ${filterType}, format: ${format}";


        $updatedImage = self::$imagingApi->filterEffectImage($request);
        $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false, $format), $updatedImage);

        echo PHP_EOL;
    }
}