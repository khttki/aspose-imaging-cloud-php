<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectDetectionImage.php">
 *   Copyright (c) 2018-2020 Aspose Pty Ltd. All rights reserved.
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
use Aspose\Imaging\Model\Requests\GetObjectBoundsRequest;
use Aspose\Imaging\Model\Requests\GetVisualObjectBoundsRequest;
use Exception;


/**
 * Object detection image example.
 */
class ObjectDetectionImage extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "object_detection_example.jpg";
    }


    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Object detection image example");
    }

    /**
     *  Detect objects on an image from a cloud storage.
     * @constructor
     * @throws ApiException
     */
    public function DetectObjectsImageFromStorage()
    {
        echo "Detect objects on an image from a cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $method = "ssd";
        $threshold = 50;
        $includeLabel = true;
        $includeScore = true;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new GetObjectBoundsRequest($this->GetSampleImageFileName(), $method, $threshold, $includeLabel, $includeScore, $folder,
            $storage);

        echo "Call ObjectBoundsRequest with params: method: ${method}, threshold: ${threshold}, includeLabel: ${includeLabel},includeScore: ${$includeScore}," . PHP_EOL;

        try {
            $detectedObjectsList = self::$imagingApi->getObjectBounds($request);
            $count = count($detectedObjectsList->getDetectedObjects());
            echo "objects detected: $count";
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     *  Get visualized detected objects and upload it to the cloud storage.
     * @constructor
     * @throws ApiException
     */
    public function VisualiizeDetectObjectsAndUploadToStorage()
    {
        echo "Get visualized detected objects and upload it to the cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $method = "ssd";
        $threshold = 50;
        $includeLabel = true;
        $includeScore = true;
        $color = "blue";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new GetVisualObjectBoundsRequest($this->GetSampleImageFileName(), $method, $threshold, $includeLabel, $includeScore, $color, $folder,
            $storage);

        echo "Call VisualObjectBoundsRequest with params: method: ${method}, threshold: ${threshold}, includeLabel: ${includeLabel},includeScore: ${includeScore}, color: ${color}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->getVisualObjectBounds($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, "jpg");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     *  detected object on an image that is passed in a request stream.
     * @constructor
     * @throws ApiException
     */
    public function DetectedObjectsImageFromRequestBody()
    {
        echo "detected object on an image that is passed in a request stream" . PHP_EOL;

        $method = "ssd";
        $threshold = 50;
        $includeLabel = true;
        $includeScore = true;
        $outPath = null;
        $storage = null; // We are using default Cloud Storage
        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());

        $request = new CreateObjectBoundsRequest($inputStream, $method, $threshold, $includeLabel, $includeScore, $outPath,
            $storage);

        echo "Call CreateObjectBoundsRequest with params: method: ${method}, threshold: ${threshold}, includeLabel: ${includeLabel},includeScore: ${includeScore}," . PHP_EOL;

        try {
            $detectedObjectsList = self::$imagingApi->createObjectBounds($request);
            $count = count($detectedObjectsList->getDetectedObjects());
            echo "objects detected: $count";
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     *  Visualize detected object on an image that is passed in a request stream
     * @constructor
     * @throws ApiException
     */
    public function VisualizeDetectedObjectsImageFromRequestBody()
    {
        echo "Visualize detected object on an image that is passed in a request stream" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $method = "ssd";
        $threshold = 50;
        $includeLabel = true;
        $includeScore = true;
        $color = null;
        $outPath = null;
        $storage = null; // We are using default Cloud Storage

        $request = new CreateVisualObjectBoundsRequest($inputStream, $method, $threshold, $includeLabel, $includeScore, $color, $outPath,
            $storage);

        echo "Call CreateObjectBoundsRequest with params: method: ${method}, threshold: ${threshold}, includeLabel: ${$includeLabel},includeScore: ${$includeScore}, color: null" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createVisualObjectBounds($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, "jpg");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }
        echo PHP_EOL;
    }
}
