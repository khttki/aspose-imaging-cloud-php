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

use Aspose\Imaging\Model\Requests\CreateResizedImageRequest;
use Aspose\Imaging\Model\Requests\ResizeImageRequest;

class ResizeImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Resize an image example");
    }

    /**
     * Resizes the image.
     */
    public function ResizeImageFromStorage()
    {
        echo "Resize an image from cloud storage" . PHP_EOL;

        // Upload local image to Cloud Storage
        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Resize
        // for possible output formats
        $format = "gif";
        $newWidth = 100;
        $newHeight = 150;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $resizeImageRequest = new ResizeImageRequest($this->GetSampleImageFileName(), $newWidth, $newHeight, $format,
            $folder, $storage);
        echo "Call ResizeImage with params: new width: ${newWidth}, new height: ${newHeight}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->resizeImage($resizeImageRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "ResizeSampleImage.psd";
    }

    /**
     * Resizes the sample image and upload to Cloud Storage
     */
    public function ResizeImageAndUploadToStorage()
    {
        echo "Resize an image and upload to cloud storage" . PHP_EOL;

        // Upload local image to Cloud Storage
        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Resize
        // for possible output formats
        $format = "gif";
        $newWidth = 100;
        $newHeight = 150;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $resizeImageRequest = new ResizeImageRequest($this->GetSampleImageFileName(), $newWidth, $newHeight, $format,
            $folder, $storage);
        echo "Call ResizeImage with params: new width: ${newWidth}, new height: ${newHeight}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->resizeImage($resizeImageRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false);

        echo PHP_EOL;
    }

    /**
     * Resize an image. Image data is passed in a request stream.
     */
    public function CreateResizedImageFromRequestBody()
    {
        echo "Resize an image from request body" . PHP_EOL;

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Resize
        // for possible output formats
        $format = "gif";
        $newWidth = 100;
        $newHeight = 150;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $createResizedImageRequest = new CreateResizedImageRequest($inputStream, $newWidth, $newHeight, $format,
            $outPath, $storage);
        echo "Call CreateResizedImage with params: new width: ${newWidth}, new height: ${newHeight}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->createResizedImage($createResizedImageRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);

        echo PHP_EOL;
    }
}

