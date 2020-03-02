<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GrayscaleImage.php">
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
use Aspose\Imaging\Model\Requests\CreateGrayscaledImageRequest;
use Aspose\Imaging\Model\Requests\GrayscaleImageRequest;


/**
 * Grayscale image example.
 */
class GrayscaleImage extends ImagingBase
{

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "GrayscaleSampleImage.bmp";
    }


    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Grayscale image example");
    }

    /**
     * Grayscales the image from cloud storage.
     * @constructor
     * @throws ApiException
     */
    public function GrayscaleImageFromStorage()
    {
        echo "Grayscales the image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new GrayscaleImageRequest($this->GetSampleImageFileName(), $folder,
            $storage);

        echo "Call GrayscaleImage" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->grayscaleImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, "bmp");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     * Grayscale an existing image, and upload updated image to Cloud Storage.
     * @constructor
     * @throws ApiException
     */
    public function GrayscaleImageAndUploadToStorage()
    {
        echo "Grayscales the image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $request = new GrayscaleImageRequest($this->GetSampleImageFileName(), $folder,
            $storage);

        echo "Call GrayscaleImage" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->grayscaleImage($request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Grayscale an image. Image data is passed in a request stream.
     * @constructor
     */
    public function CreateGrayscaledImageFromRequestBody()
    {
        echo "Grayscales the image from request body" . PHP_EOL;
        $outPath = null; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $request = new CreateGrayscaledImageRequest($inputStream, $outPath, $storage);

        echo "Call CreateGrayscaledImage" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createGrayscaledImage($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true, "bmp");
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }
}
