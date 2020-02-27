<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateGifImage.php">
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

use Aspose\Imaging\Model\Requests\CreateModifiedGifRequest;
use Aspose\Imaging\Model\Requests\ModifyGifRequest;


/**
 *  Update GIF image example.
 */
class UpdateGifImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update GIF image example");
    }

    /**
     * Update parameters of existing GIF image. The image is saved in the cloud
     */
    public function ModifyGifFromStorage()
    {
        echo "Update parameters of a GIF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $backgroundColorIndex = 5;
        $colorResolution = 4;
        $hasTrailer = true;
        $interlaced = false;
        $isPaletteSorted = true;
        $pixelAspectRatio = 4;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageGifRequest = new ModifyGifRequest($this->GetSampleImageFileName(), $backgroundColorIndex,
            $colorResolution, $hasTrailer, $interlaced, $isPaletteSorted, $pixelAspectRatio, $fromScratch, $folder,
            $storage);

        echo "Call ModifyGif with params: background color index: ${backgroundColorIndex}, color resolution: ${colorResolution}, has trailer: ${hasTrailer}, interlaced: ${interlaced}, is palette sorted: ${isPaletteSorted}, pixel aspect ratio: ${pixelAspectRatio}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyGif($getImageGifRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "UpdateGIFSampleImage.gif";
    }

    /**
     * Update parameters of existing GIF image. The image is saved in the cloud
     */
    public function ModifyGifAndUploadToStorage()
    {
        echo "Update parameters of a GIF image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $backgroundColorIndex = 5;
        $colorResolution = 4;
        $hasTrailer = true;
        $interlaced = false;
        $isPaletteSorted = true;
        $pixelAspectRatio = 4;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageGifRequest = new ModifyGifRequest($this->GetSampleImageFileName(), $backgroundColorIndex,
            $colorResolution, $hasTrailer, $interlaced, $isPaletteSorted, $pixelAspectRatio, $fromScratch, $folder,
            $storage);

        echo "Call ModifyGif with params: background color index: ${backgroundColorIndex}, color resolution: ${colorResolution}, has trailer: ${hasTrailer}, interlaced: ${interlaced}, is palette sorted: ${isPaletteSorted}, pixel aspect ratio: ${pixelAspectRatio}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyGif($getImageGifRequest);
        $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);

        echo PHP_EOL;
    }

    /**
     * Update parameters of GIF image. Image data is passed in a request stream
     */
    public function CreateModifiedGifFromRequestBody()
    {
        echo "Update parameters of a GIF image from request body" . PHP_EOL;

        $backgroundColorIndex = 5;
        $colorResolution = 4;
        $hasTrailer = true;
        $interlaced = false;
        $isPaletteSorted = true;
        $pixelAspectRatio = 4;
        $fromScratch = null;
        $outPath = null;
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $postImageGifRequest = new CreateModifiedGifRequest($inputStream, $backgroundColorIndex, $colorResolution,
            $hasTrailer, $interlaced, $isPaletteSorted, $pixelAspectRatio, $fromScratch, $outPath, $storage);

        echo "Call CreateModifiedGif with params: background color index: ${backgroundColorIndex}, color resolution: ${colorResolution}, has trailer: ${hasTrailer}, interlaced: ${interlaced}, is palette sorted: ${isPaletteSorted}, pixel aspect ratio: ${pixelAspectRatio}" . PHP_EOL;

        $updatedImage = self::$imagingApi->createModifiedGif($postImageGifRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, true);

        echo PHP_EOL;
    }
}

