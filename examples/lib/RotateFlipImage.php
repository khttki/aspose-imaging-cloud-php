<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RotateFlipImage.php">
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
use Aspose\Imaging\Model\Requests\CreateRotateFlippedImageRequest;
use Aspose\Imaging\Model\Requests\RotateFlipImageRequest;
use Exception;


/**
 * Rotate and/or flip an image example.
 */
class RotateFlipImage extends ImagingBase
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

    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Rotate/flip image example");
    }

    /**
     * Rotate and/or flip an image
     * @constructor
     * @throws ApiException
     */

    public function RotateFlipImageFromStorage()
    {
        echo "Rotate and/or flip an image from cloud storage" . PHP_EOL;


        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-RotateFlip
        // for possible output formats
        $format = "gif";
        $method = "Rotate90FlipX"; // RotateFlip method
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageRotateFlipRequest = new RotateFlipImageRequest($this->GetSampleImageFileName(), $format, $method,
            $folder, $storage);

        echo "Call RotateFlipImage with params: method: ${method}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->rotateFlipImage($getImageRotateFlipRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, $format);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Rotate and/or flip an image, and upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function RotateFlipImageAndUploadToStorage()
    {
        echo "Rotate/flip an image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-RotateFlip
        // for possible output formats
        $format = "gif";
        $method = "Rotate90FlipX"; // RotateFlip method
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageRotateFlipRequest = new RotateFlipImageRequest($this->GetSampleImageFileName(), $format, $method,
            $folder, $storage);

        echo "Call RotateFlipImage with params: method: ${method}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->rotateFlipImage($getImageRotateFlipRequest);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false, $format), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Rotate and/or flip an image. Image data is passed in a request stream.
     * @constructor
     */
    public function CreateRotateFlippedImageFromRequestBody()
    {
        echo "Rotate/flip an image from request body" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-RotateFlip
        // for possible output formats
        $format = "gif";
        $method = "Rotate90FlipX"; // RotateFlip method
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $createRotateFlippedImageRequest = new CreateRotateFlippedImageRequest($inputStream, $format, $method, $outPath,
            $storage);

        echo "Call CreateRotateFlippedImage with params: method: ${method}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createRotateFlippedImage($createRotateFlippedImageRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;

    }
}

