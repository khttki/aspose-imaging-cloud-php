<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeskewImage.php">
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
use Aspose\Imaging\Model\Requests\CreateDeskewedImageRequest;
use Aspose\Imaging\Model\Requests\DeskewImageRequest;


/**
 * Deskew image example.
 */
class DeskewImage extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "DeskewSampleImage.bmp";
    }


    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Deskew image example");
    }

    /**
     * Deskews the image from cloud storage.
     * @constructor
     * @throws ApiException
     */
    public function DeskewImageFromStorage()
    {
        echo "Deskews the image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $resizeProportionally = true;
        $bkColor = "green";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new DeskewImageRequest($this->GetSampleImageFileName(), $resizeProportionally, $bkColor, $folder,
            $storage);

        echo "Call DeskewImage with params: resizeProportionally: ${resizeProportionally}, bkColor: ${bkColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->deskewImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, "bmp");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     * Deskew an existing image, and upload updated image to Cloud Storage.
     * @constructor
     * @throws ApiException
     */
    public function DeskewImageAndUploadToStorage()
    {
        echo "Deskews the image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $resizeProportionally = true;
        $bkColor = "green";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new DeskewImageRequest($this->GetSampleImageFileName(), $resizeProportionally, $bkColor, $folder,
            $storage);

        echo "Call DeskewImage with params: resizeProportionally: ${resizeProportionally}, bkColor: ${bkColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->deskewImage($request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Deskew an image. Image data is passed in a request stream.
     * @constructor
     */
    public function CreateDeskewedImageFromRequestBody()
    {
        echo "Deskews the image from request body" . PHP_EOL;
        $resizeProportionally = true;
        $bkColor = "green";
        $outPath = null; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $request = new CreateDeskewedImageRequest($inputStream, $resizeProportionally, $bkColor, $outPath, $storage);

        echo "Call CreateDeskewedImage with params: resizeProportionally: ${resizeProportionally}, bkColor: ${bkColor}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createDeskewedImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true, "bmp");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}
