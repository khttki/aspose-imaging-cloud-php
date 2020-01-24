<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageProperties.php">
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

use Aspose\Imaging\ApiException;
use Exception;
use \Aspose\Imaging\Examples\ImagingBase;
use Aspose\Imaging\Model\Requests\ExtractImagePropertiesRequest;
use Aspose\Imaging\Model\Requests\GetImagePropertiesRequest;


/**
 * Image properties example.
 */
class ImageProperties extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "PropertiesOfSampleImage.tiff";
    }

    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Image properties example");
    }

    /**
     * Get properties of an image, which is store in the cloud.
     * @constructor
     * @throws ApiException
     * @throws ApiException
     */
    public function GetImagePropertiesFromStorage()
    {
        echo "Get properties of an image in cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImagePropertiesRequest = new GetImagePropertiesRequest($this->GetSampleImageFileName(), $folder, $storage);

        echo "Call GetImageProperties" . PHP_EOL;

        $imagingResponse = self::$imagingApi->getImageProperties($getImagePropertiesRequest);

        $this->OutputPropertiesToFile("ImageProperties.txt", $imagingResponse);

        echo PHP_EOL;
    }

    /**
     * Get properties of an image. Image data is passed in a request stream.
     * @constructor
     * @throws ApiException
     */
    public function ExtractImagePropertiesFromRequestBody()
    {
        echo "Get properties of an image from request body" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $imagePropertiesRequest = new ExtractImagePropertiesRequest($inputStream);

        echo "Call ExtractImageProperties" . PHP_EOL;

        $imagingResponse = self::$imagingApi->extractImageProperties($imagePropertiesRequest);
        $this->OutputPropertiesToFile("ImagePropertiesFromRequest.txt", $imagingResponse);

        echo PHP_EOL;
    }
}

