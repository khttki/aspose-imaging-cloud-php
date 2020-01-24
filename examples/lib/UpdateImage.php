<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateImage.php">
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
use Aspose\Imaging\Model\Requests\CreateUpdatedImageRequest;
use Aspose\Imaging\Model\Requests\UpdateImageRequest;


/**
 *  Update image example.
 */
class UpdateImage extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "UpdateSampleImage.gif";
    }

    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update image example");
    }

    /**
     * Perform scaling, cropping and flipping of an existing image in a single request. The image is saved in the cloud
     * @constructor
     * @throws ApiException
     */
    public function UpdateImageFromStorage()
    {
        echo "Update parameters of an image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Update
        // for possible output formats
        $format = "pdf";
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageUpdateRequest = new UpdateImageRequest($this->GetSampleImageFileName(), $format, $newWidth, $newHeight,
            $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $folder, $storage);

        echo "Call UpdateImage with params: new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->updateImage($getImageUpdateRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Perform scaling, cropping and flipping of an existing image in a single request. And upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function UpdateImageAndUploadToStorage()
    {
        echo "Update parameters of an image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Update
        // for possible output formats
        $format = "pdf";
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageUpdateRequest = new UpdateImageRequest($this->GetSampleImageFileName(), $format, $newWidth, $newHeight,
            $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $folder, $storage);

        echo "Call UpdateImage with params: new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->updateImage($getImageUpdateRequest);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Perform scaling, cropping and flipping of an image in a single request. Image data is passed in a request stream
     * @constructor
     */
    public function CreateUpdatedImageFromRequestBody()
    {
        echo "Update parameters of an image from request body" . PHP_EOL;

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Update
        // for possible output formats
        $format = "pdf";
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $postImageUpdateRequest = new CreateUpdatedImageRequest($inputStream, $format, $newWidth, $newHeight, $x, $y,
            $rectWidth, $rectHeight, $rotateFlipMethod, $outPath, $storage);

        echo "Call CreateUpdatedImage with params: new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, $format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createUpdatedImage($postImageUpdateRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}
