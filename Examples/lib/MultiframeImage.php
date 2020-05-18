<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MultiframeImage.php">
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

use Aspose\Imaging\Model\Requests\CreateImageFrameRangeRequest;
use Aspose\Imaging\Model\Requests\CreateImageFrameRequest;
use Aspose\Imaging\Model\Requests\ExtractImageFramePropertiesRequest;
use Aspose\Imaging\Model\Requests\GetImageFramePropertiesRequest;
use Aspose\Imaging\Model\Requests\GetImageFrameRangeRequest;
use Aspose\Imaging\Model\Requests\GetImageFrameRequest;


/**
 *  Multiframe example.
 */
class MultiframeImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Multiframe example");
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "MultipageSampleImage.djvu";
    }

    /**
     * Get separate frame from existing image
     */
    public function GetImageFrameFromStorage()
    {
        echo "Get separate frame from existing image in cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Index of the frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, null,
            null, null, null, null, null, null, null, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("SingleFrame.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame from existing image, and upload the frame to Cloud Storage
     */
    public function GetImageFrameAndUploadToStorage()
    {
        echo "Get separate frame from existing image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Index of the frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, null,
            null, null, null, null, null, null, null, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->UploadImageToCloud("SingleFrame.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame from existing image. Image data is passed in a request stream
     */
    public function CreateImageFrameFromRequestBody()
    {
        echo "Get separate frame from existing image from request body" . PHP_EOL;

        $frameId = 1; // Index of the frame
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $createImageFrameRequest = new CreateImageFrameRequest($inputStream, $frameId, null,
            null, null, null, null, null, null, null, $outPath, $storage);

        echo "Call CreateImageFrame with params: frame Id: ${frameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->createImageFrame($createImageFrameRequest);
        $this->SaveUpdatedImageToOutput("SingleFrameFromRequest.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame range from existing image
     */
    public function GetImageFrameRangeFromStorage()
    {
        echo "Get separate frame range from existing image in cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $startFrameId = 1; // Index of the first frame in range
        $lastFrameId = 4; // Index of the last frame in range
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRangeRequest = new GetImageFrameRangeRequest($this->GetSampleImageFileName(), $startFrameId, $lastFrameId, null,
            null, null, null, null, null, null, null, $folder, $storage);

        echo "Call GetImageFrame with params: first frame Id: ${startFrameId}; last frame Id: ${lastFrameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrameRange($getImageFrameRangeRequest);
        $this->SaveUpdatedImageToOutput("FrameRange.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame range from existing image, and upload the frame to Cloud Storage
     */
    public function GetImageFrameRangeAndUploadToStorage()
    {
        echo "Get separate frame range from existing image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $startFrameId = 1; // Index of the first frame in range
        $lastFrameId = 4; // Index of the last frame in range
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRangeRequest = new GetImageFrameRangeRequest($this->GetSampleImageFileName(), $startFrameId, $lastFrameId, null,
            null, null, null, null, null, null, null, $folder, $storage);

        echo "Call GetImageFrame with params: first frame Id: ${startFrameId}; last frame Id: ${lastFrameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrameRange($getImageFrameRangeRequest);
        $this->UploadImageToCloud("FrameRange.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame range from existing image. Image data is passed in a request stream
     */
    public function CreateImageFrameRangeFromRequestBody()
    {
        echo "Get separate frame range from existing image from request body" . PHP_EOL;

        $startFrameId = 1; // Index of the first frame in range
        $lastFrameId = 4; // Index of the last frame in range
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $createImageFrameRangeRequest = new CreateImageFrameRangeRequest($inputStream, $startFrameId, $lastFrameId, null,
            null, null, null, null, null, null, null, $outPath, $storage);

        echo "Call CreateImageFrame with params: first frame Id: ${startFrameId}; last frame Id: ${lastFrameId}" . PHP_EOL;

        $imageFrame = self::$imagingApi->createImageFrameRange($createImageFrameRangeRequest);
        $this->SaveUpdatedImageToOutput("FrameRangeFromRequest.djvu", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame properties of a image
     */
    public function GetImageFramePropertiesFromStorage()
    {
        echo "Gets separate frame properties of existing image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Number of a frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $imageFramePropertiesRequest =
            new GetImageFramePropertiesRequest($this->GetSampleImageFileName(), $frameId, $folder, $storage);

        echo "Call GetImageFrameProperties with params: frame Id: ${frameId}" . PHP_EOL;

        $imagingResponse = self::$imagingApi->getImageFrameProperties($imageFramePropertiesRequest);
        $this->OutputPropertiesToFile("TiffFrameProperties.txt", $imagingResponse);

        echo PHP_EOL;
    }

    /**
     * Get separate frame properties of a image. Image data is passed in a request stream.
     */
    public function ExtractImageFramePropertiesFromRequestBody()
    {
        echo "Get separate frame properties of existing image from request body" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        {
            $frameId = 1;

            $imageFramePropertiesRequest = new ExtractImageFramePropertiesRequest($inputStream, $frameId);

            echo "Call ExtractImageFrameProperties with params: frame Id: ${frameId}" . PHP_EOL;

            $imagingResponse = self::$imagingApi->extractImageFrameProperties($imageFramePropertiesRequest);
            $this->OutputPropertiesToFile("TiffFramePropertiesFromRequest.txt", $imagingResponse);

            echo PHP_EOL;
        }
    }
}
