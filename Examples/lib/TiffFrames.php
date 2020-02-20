<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffFrames.php">
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

use Aspose\Imaging\Model\Requests\CreateImageFrameRequest;
use Aspose\Imaging\Model\Requests\ExtractImageFramePropertiesRequest;
use Aspose\Imaging\Model\Requests\GetImageFramePropertiesRequest;
use Aspose\Imaging\Model\Requests\GetImageFrameRequest;


/**
 *  TIFF frames example.
 */
class TIFFFrames extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("TIFF frames example");
    }

    /**
     * Get separate frame from existing TIFF image
     */
    public function GetImageFrameFromStorage()
    {
        echo "Get separate frame from existing TIFF image in cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Number of a frame
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $saveOtherFrames = false; // Result will include just the specified frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, $newWidth,
            $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("SingleFrame.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "TiffFrameSampleImage.tiff";
    }

    /**
     * Get separate frame from existing TIFF image, and upload the frame to Cloud Storage
     */
    public function GetImageFrameAndUploadToStorage()
    {
        echo "Get separate frame from existing TIFF image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Number of a frame
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $saveOtherFrames = false; // Result will include just the specified frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, $newWidth,
            $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->UploadImageToCloud("SingleFrame.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Resize a TIFF frame
     */
    public function ResizeImageFrameFromStorage()
    {
        echo "Resize frame from existing TIFF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 0; // Number of a frame
        $newWidth = 300;
        $newHeight = 300;
        $saveOtherFrames = false; // Result will include just the specified frame
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, $newWidth,
            $newHeight, null, null, null, null, null, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, new width: ${newWidth}, new height: ${newHeight}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("ResizeFrame.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Crop a TIFF frame
     */
    public function CropImageFrameFromStorage()
    {
        echo "Crop frame from existing TIFF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 0; // Number of a frame
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        // Result will include just the specified frame
        $saveOtherFrames = false;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, null, null, $x, $y,
            $rectWidth, $rectHeight, null, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("CropFrame.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Rotate/Flip a TIFF frame
     */
    public function RotateFlipImageFrameFromStorage()
    {
        echo "Rotate/flip frame from existing TIFF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 0; // Number of a frame
        $rotateFlipMethod = "Rotate90FlipX";
        // Result will include just the specified frame
        $saveOtherFrames = false;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, null, null, null,
            null, null, $rotateFlipMethod, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, rotate/flip method: ${rotateFlipMethod}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("RotateFlipFrame.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Gets all image frames from storage
     */
    public function GetAllImageFramesFromStorage()
    {
        echo "Gets all image frames from existing TIFF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $frameId = 1; // Number of a frame
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        // Result will include all other frames
        $saveOtherFrames = true;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageFrameRequest = new GetImageFrameRequest($this->GetSampleImageFileName(), $frameId, $newWidth,
            $newHeight, $x, $y, $rectWidth, $rectHeight, $rotateFlipMethod, $saveOtherFrames, $folder, $storage);

        echo "Call GetImageFrame with params: frame Id: ${frameId}, new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->getImageFrame($getImageFrameRequest);
        $this->SaveUpdatedImageToOutput("OtherFrames.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame from existing TIFF image. Image data is passed in a request stream
     */
    public function CreateImageFrameFromRequestBody()
    {
        echo "Get separate frame from existing TIFF image from request body" . PHP_EOL;

        $frameId = 1;
        $newWidth = 300;
        $newHeight = 450;
        $x = 10;
        $y = 10;
        $rectWidth = 200;
        $rectHeight = 300;
        $rotateFlipMethod = "Rotate90FlipX";
        $saveOtherFrames = false;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $createImageFrameRequest = new CreateImageFrameRequest($inputStream, $frameId, $newWidth, $newHeight, $x, $y,
            $rectWidth, $rectHeight, $rotateFlipMethod, $saveOtherFrames, $outPath, $storage);

        echo "Call CreateImageFrame with params: frame Id: ${frameId}, new width: ${newWidth}, new height: ${newHeight}, x: ${x}, y: ${y}, rect width: ${rectWidth}, rectHeight: ${rectHeight}, rotate/flip method: ${rotateFlipMethod}, save other frames: ${saveOtherFrames}" . PHP_EOL;

        $imageFrame = self::$imagingApi->createImageFrame($createImageFrameRequest);
        $this->SaveUpdatedImageToOutput("SingleFrameFromRequest.tiff", $imageFrame);

        echo PHP_EOL;
    }

    /**
     * Get separate frame properties of a TIFF image
     */
    public function GetImageFramePropertiesFromStorage()
    {
        echo "Gets separate frame properties of existing TIFF image from cloud storage" . PHP_EOL;

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
     * Get separate frame properties of a TIFF image. Image data is passed in a request stream.
     */
    public function ExtractImageFramePropertiesFromRequestBody()
    {
        echo "Get separate frame properties of existing TIFF image from request body" . PHP_EOL;

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
