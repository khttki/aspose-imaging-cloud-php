<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CropImage.php">
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
use Aspose\Imaging\Model\Requests\CreateCroppedImageRequest;
use Aspose\Imaging\Model\Requests\CropImageRequest;


/**
 * Crop image example.
 */
class CropImage extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "RotateFlipSampleImage.psd";
    }


    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Rotate/flip image example");
    }

    /**
     * Crops the image from cloud storage.
     * @constructor
     * @throws ApiException
     */
    public function CropImageFromStorage()
    {
        echo "Crops the image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Crop
        // for possible output formats
        $format = "jpg"; // Resulting image format.
        $x = 10;
        $y = 10;
        $width = 100;
        $height = 150;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new CropImageRequest($this->GetSampleImageFileName(), $format, $x, $y, $width, $height, $folder,
            $storage);

        echo "Call CropImage with params: x: ${x},y: ${y}, width: ${width}, height: ${height}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->cropImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, $format);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     * Crop an existing image, and upload updated image to Cloud Storage.
     * @constructor
     * @throws ApiException
     */
    public function CropImageAndUploadToStorage()
    {
        echo "Crops the image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Crop
        // for possible output formats
        $format = "jpg"; // Resulting image format.
        $x = 10;
        $y = 10;
        $width = 100;
        $height = 150;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new CropImageRequest($this->GetSampleImageFileName(), $format, $x, $y, $width, $height, $folder,
            $storage);

        echo "Call CropImage with params: x: ${x},y: ${y}, width: ${width}, height: ${height}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->cropImage($request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Crop an image. Image data is passed in a request stream.
     * @constructor
     */
    public function CreateCroppedImageFromRequestBody()
    {
        echo "Crops the image from request body" . PHP_EOL;

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Crop
        // for possible output formats
        $format = "jpg"; // Resulting image format.
        $x = 10;
        $y = 10;
        $width = 100;
        $height = 150;
        $outPath = null; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $request = new CreateCroppedImageRequest($inputStream, $format, $x, $y, $width, $height, $outPath, $storage);

        echo "Call CreateCroppedImage with params: x: ${x},y: ${y}, width: ${width}, height: ${height}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createCroppedImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}
