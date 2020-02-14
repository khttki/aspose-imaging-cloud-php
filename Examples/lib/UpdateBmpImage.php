<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateBmpImage.php">
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
use Aspose\Imaging\Model\Requests\CreateModifiedBmpRequest;
use Aspose\Imaging\Model\Requests\ModifyBmpRequest;
use Exception;


/**
 *  Update BMP image example.
 */
class UpdateBmpImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update BMP image example");
    }

    /**
     * Update parameters of a BMP image. image is saved in the cloud.
     * @constructor
     * @throws ApiException
     */
    public function ModifyBmpFromStorage()
    {
        echo "Update parameters of a BMP image from cloud storage" . PHP_EOL;

        // Upload local image to Cloud Storage
        $this->UploadSampleImageToCloud();

        $bitsPerPixel = 32;
        $horizontalResolution = 300;
        $verticalResolution = 300;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new ModifyBmpRequest($this->GetSampleImageFileName(), $bitsPerPixel, $horizontalResolution,
            $verticalResolution, $fromScratch, $folder, $storage);

        echo "Call ModifyBmp with params: bits per pixel: ${bitsPerPixel}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyBmp($request);
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
        return "UpdateBmpSampleImage.bmp";
    }

    /**
     * Update parameters of a BMP image, and upload updated image to Cloud Storage.
     * @throws ApiException
     */
    public function ModifyBmpAndUploadToStorage()
    {
        echo "Update parameters of a BMP image and upload to cloud storage" . PHP_EOL;

        // Upload local image to Cloud Storage
        $this->UploadSampleImageToCloud();

        $bitsPerPixel = 32;
        $horizontalResolution = 300;
        $verticalResolution = 300;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new ModifyBmpRequest($this->GetSampleImageFileName(), $bitsPerPixel, $horizontalResolution,
            $verticalResolution, $fromScratch, $folder, $storage);

        echo "Call ModifyBmp with params: bits per pixel: ${bitsPerPixel}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyBmp($request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Update parameters of a BMP image. Image data is passed in a request stream
     * @constructor
     */
    public function CreateModifiedBmpFromRequestBody()
    {
        echo "Update parameters of a BMP image from request body" . PHP_EOL;

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        {
            $bitsPerPixel = 32;
            $horizontalResolution = 300;
            $verticalResolution = 300;
            $fromScratch = null;
            $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
            $storage = null; // We are using default Cloud Storage

            $request = new CreateModifiedBmpRequest($inputStream, $bitsPerPixel, $horizontalResolution,
                $verticalResolution, $fromScratch, $outPath, $storage);

            echo "Call CreateModifiedBmp with params: bits per pixel: ${bitsPerPixel}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution}" . PHP_EOL;

            try {
                $updatedImage = self::$imagingApi->createModifiedBmp($request);
                $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
            } catch (Exception $ex) {
                echo $ex->getMessage() . PHP_EOL;
            }

            echo PHP_EOL;
        }
    }
}
