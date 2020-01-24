<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateJpegImage.php">
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
use Aspose\Imaging\Model\Requests\CreateModifiedJpegRequest;
use Aspose\Imaging\Model\Requests\ModifyJpegRequest;


/**
 *  Update JPEG image example.
 */
class UpdateJpegImage extends ImagingBase
{
    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "UpdateJPEGSampleImage.jpg";
    }


    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update JPEG image example");
    }

    /**
     *
     *Update parameters of existing JPEG image. The image is saved in the cloud
     * @constructor
     * @throws ApiException
     */
    public function ModifyJpegFromStorage()
    {
        echo "Update parameters of a JPEG image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $quality = 65;
        $compressionType = "progressive";
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $modifyJpegRequest = new ModifyJpegRequest($this->GetSampleImageFileName(), $quality, $compressionType,
            $fromScratch, $folder, $storage);

        echo "Call ModifyJpeg with params: quality: ${quality}, compression type: ${compressionType}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyJpeg($modifyJpegRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     *
     *Update parameters of existing JPEG image, and upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function ModifyJpegAndUploadToStorage()
    {
        echo "Update parameters of a JPEG image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $quality = 65;
        $compressionType = "progressive";
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $modifyJpegRequest =
            new ModifyJpegRequest($this->GetSampleImageFileName(), $quality, $compressionType, $fromScratch, $folder,
                $storage);

        echo "Call ModifyJpeg with params: quality: ${quality}, compression type: ${compressionType}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyJpeg($modifyJpegRequest);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     *
     *Update parameters of existing JPEG image. Image data is passed in a request stream
     * @constructor
     */
    public function CreateModifiedJpegFromRequestBody()
    {
        echo "Update parameters of a JPEG image from request body" . PHP_EOL;

        $quality = 65;
        $compressionType = "progressive";
        $fromScratch = null;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $modifiedJpgRequest =
            new CreateModifiedJpegRequest($inputStream, $quality, $compressionType, $fromScratch, $outPath, $storage);

        echo "Call CreateModifiedJpeg with params: quality: ${quality}, compression type: ${compressionType}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createModifiedJpeg($modifiedJpgRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}

