<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateJpeg2000Image.php">
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
use Aspose\Imaging\Model\Requests\CreateModifiedJpeg2000Request;
use Aspose\Imaging\Model\Requests\ModifyJpeg2000Request;
use Exception;


/**
 *  Update JPEG2000 image example.
 */
class UpdateJpeg2000Image extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update JPEG2000 image example");
    }

    /**
     * Update parameters of existing JPEG2000 image. The image is saved in the cloud.
     * @constructor
     * @throws ApiException
     */
    public function ModifyJpeg2000FromStorage()
    {
        echo "Update parameters of a Jpeg2000 image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $codec = "jp2";
        $comment = "Aspose";
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageJpeg2000Request =
            new ModifyJpeg2000Request($this->GetSampleImageFileName(), $comment, $codec, $fromScratch, $folder,
                $storage);

        echo "Call ModifyJpeg2000 with params: codec: ${codec}, comment: ${comment}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyJpeg2000($getImageJpeg2000Request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "UpdateJPEG2000SampleImage.jp2";
    }

    /**
     * Update parameters of existing JPEG2000 image, and upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function ModifyJpeg2000AndUploadToStorage()
    {
        echo "Update parameters of a Jpeg2000 image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $codec = "jp2";
        $comment = "Aspose";
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageJpeg2000Request =
            new ModifyJpeg2000Request($this->GetSampleImageFileName(), $comment, $codec, $fromScratch, $folder,
                $storage);

        echo "Call ModifyJpeg2000 with params: codec: ${codec}, comment: ${comment}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyJpeg2000($getImageJpeg2000Request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Update parameters of existing JPEG2000 image. Image data is passed in a request stream
     * @constructor
     */
    public function CreateModifiedJpeg2000FromRequestBody()
    {
        echo "Update parameters of a Jpeg2000 image from request body" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        {
            $codec = "jp2";
            $comment = "Aspose";
            $fromScratch = null;
            $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
            $storage = null; // We are using default Cloud Storage

            $postImageJpeg2000Request = new CreateModifiedJpeg2000Request($inputStream, $comment, $codec, $fromScratch,
                $outPath, $storage);

            echo "Call CreateModifiedJpeg2000 with params: codec: ${codec}, comment: ${comment}" . PHP_EOL;

            try {
                $updatedImage = self::$imagingApi->createModifiedJpeg2000($postImageJpeg2000Request);
                $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
            } catch (Exception $ex) {
                echo $ex->getMessage() . PHP_EOL;
            }

            echo PHP_EOL;
        }
    }
}
