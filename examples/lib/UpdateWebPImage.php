<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateWebPImage.php">
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
use Aspose\Imaging\Model\Requests\CreateModifiedWebPRequest;
use Aspose\Imaging\Model\Requests\ModifyWebPRequest;


/**
 *  WEBP image example.
 */
class UpdateWebPImage extends ImagingBase
{
    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "WEBPSampleImage.webp";
    }


    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update WEBP image example");
    }

    /**
     *
     *Update parameters of existing WEBP image. The image is saved in the cloud
     * @constructor
     * @throws ApiException
     */
    public function ModifyWebPFromStorage()
    {
        echo "Update parameters of a WEBP image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $lossless = true;
        $quality = 90;
        $animLoopCount = 5;
        $animBackgroundColor = "gray";
        // Specifies where additional parameters we do not support should be taken from.
        // If this is true – they will be taken from default values for standard image,
        // if it is false – they will be saved from current image. Default is false.
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageWebPRequest = new ModifyWebPRequest($this->GetSampleImageFileName(), $lossless, $quality,
            $animLoopCount, $animBackgroundColor, $fromScratch, $folder, $storage);

        echo "Call ModifyWebP with params: lossless: ${lossless}, quality: ${quality}, anim loop count: ${animLoopCount}, anim background color: ${animBackgroundColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyWebP($getImageWebPRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     *
     *Update parameters of existing WEBP image, and upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function ModifyWebPAndUploadToStorage()
    {
        echo "Update parameters of a WEBP image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $lossless = true;
        $quality = 90;
        $animLoopCount = 5;
        $animBackgroundColor = "gray";
        // Specifies where additional parameters we do not support should be taken from.
        // If this is true – they will be taken from default values for standard image,
        // if it is false – they will be saved from current image. Default is false.
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageWebPRequest = new ModifyWebPRequest($this->GetSampleImageFileName(), $lossless, $quality,
            $animLoopCount, $animBackgroundColor, $fromScratch, $folder, $storage);

        echo "Call ModifyWebP with params: lossless: ${lossless}, quality: ${quality}, anim loop count: ${animLoopCount}, anim background color: ${animBackgroundColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyWebP($getImageWebPRequest);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     *
     *Update parameters of existing Webp image. asposelogo.webpImage data is passed in a request stream
     * @constructor
     */
    public function CreateModifiedWebPFromRequestBody()
    {
        echo "Update parameters of a WEBP image from request body" . PHP_EOL;

        $lossless = true;
        $quality = 90;
        $animLoopCount = 5;
        $animBackgroundColor = "gray";
        $fromScratch = null;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $modifiedImageWebPRequest = new CreateModifiedWebPRequest($inputStream, $lossless, $quality, $animLoopCount,
            $animBackgroundColor, $fromScratch, $outPath, $storage);

        echo "Call CreateModifiedWebP with params: lossless: ${lossless}, quality: ${quality}, anim loop count: ${animLoopCount}, anim background color: ${animBackgroundColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createModifiedWebP($modifiedImageWebPRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}

