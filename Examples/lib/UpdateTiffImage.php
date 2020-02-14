<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateTiffImage.php">
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
use Aspose\Imaging\Model\Requests\AppendTiffRequest;
use Aspose\Imaging\Model\Requests\ConvertTiffToFaxRequest;
use Aspose\Imaging\Model\Requests\CreateModifiedTiffRequest;
use Aspose\Imaging\Model\Requests\DownloadFileRequest;
use Aspose\Imaging\Model\Requests\ModifyTiffRequest;
use Exception;


/**
 *  TIFF image example.
 */
class UpdateTiffImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("TIFF image example");
    }

    /**
     *
     *Update parameters of TIFF image. The image is saved in the cloud
     * @constructor
     * @throws ApiException
     */
    public function ModifyTiffFromStorage()
    {
        echo "Update parameters of a TIFF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Update parameters of TIFF image
        $compression = "adobedeflate";
        $resolutionUnit = "inch";
        $bitDepth = 1;
        $horizontalResolution = 150.0;
        $verticalResolution = 150.0;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageTiffRequest =
            new ModifyTiffRequest($this->GetSampleImageFileName(), $bitDepth, $compression, $resolutionUnit,
                $horizontalResolution, $verticalResolution, $fromScratch, $folder, $storage);

        echo "Call ModifyTiff with params: compression: ${compression}, resolution unit: ${resolutionUnit}, bit depth: ${bitDepth}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution} " . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyTiff($getImageTiffRequest);
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
        return "TiffSampleImage.tiff";
    }

    /**
     *
     *Update parameters of TIFF image, and upload updated image to Cloud Storage
     * @constructor
     * @throws ApiException
     */
    public function ModifyTiffAndUploadToStorage()
    {
        echo "Update parameters of a TIFF image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Update parameters of TIFF image
        $compression = "adobedeflate";
        $resolutionUnit = "inch";
        $bitDepth = 1;
        $horizontalResolution = 150.0;
        $verticalResolution = 150.0;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getImageTiffRequest =
            new ModifyTiffRequest($this->GetSampleImageFileName(), $bitDepth, $compression, $resolutionUnit,
                $horizontalResolution, $verticalResolution, $fromScratch, $folder, $storage);

        echo "Call ModifyTiff with params: compression: ${compression}, resolution unit: ${resolutionUnit}, bit depth: ${bitDepth}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution} " . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->modifyTiff($getImageTiffRequest);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /// <summary>
    /// Update parameters of TIFF image.
    /// Image data is passed in a request stream.
    /// </summary>
    public function CreateModifiedTiffFromRequestBody()
    {
        echo "Update parameters of a TIFF image from request body" . PHP_EOL;

        $compression = "adobedeflate";
        $resolutionUnit = "inch";
        $bitDepth = 1;
        $horizontalResolution = 150.0;
        $verticalResolution = 150.0;
        $fromScratch = null;
        $outPath = null;
        $storage = null; // We are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $postImageTiffRequest = new CreateModifiedTiffRequest($inputStream, $bitDepth, $compression, $resolutionUnit,
            $horizontalResolution, $verticalResolution, $fromScratch, $outPath, $storage);

        echo "Call CreateModifiedTiff with params: compression: ${compression}, resolution unit: ${resolutionUnit}, bit depth: ${bitDepth}, horizontal resolution: ${horizontalResolution}, vertical resolution: ${verticalResolution} " . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createModifiedTiff($postImageTiffRequest);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }


        echo PHP_EOL;
    }

    /**
     *
     *Update parameters of TIFF image according to fax parameters
     * @constructor
     * @throws ApiException
     * @throws ApiException
     */
    public function ConvertTiffToFaxFromStorage()
    {
        echo "Update parameters of TIFF image according to fax parameters." . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Update TIFF Image parameters according to fax parameters
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $getTiffToFaxRequest = new ConvertTiffToFaxRequest($this->GetSampleImageFileName(), $storage, $folder);

        echo "Call ConvertTiffToFax" . PHP_EOL;

        $updatedImage = self::$imagingApi->convertTiffToFax($getTiffToFaxRequest);
        $this->SaveUpdatedImageToOutput("ConvertTiffToFax.tiff", $updatedImage);

        echo PHP_EOL;
    }

    /**
     *
     *Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images)
     * @constructor
     * @throws ApiException
     * @throws ApiException
     * @throws ApiException
     * @throws ApiException
     */
    public function AppendTiffFromStorage()
    {
        echo " Appends existing TIFF image to another existing TIFF image." . PHP_EOL;

        $appendFileName = "Append.tiff"; // Image file name to be appended to original one

        $this->UploadSampleImageToCloud();
        $localInputImage = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $appendFileName);
        $this->UploadImageToCloud($appendFileName, $localInputImage);


        // Update TIFF Image parameters according to fax parameters
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // We are using default Cloud Storage

        $appendRequest = new AppendTiffRequest($this->GetSampleImageFileName(), $appendFileName, $storage, $folder);

        echo "Call AppendTiff" . PHP_EOL;

        self::$imagingApi->appendTiff($appendRequest);

        // Download updated file to local storage
        $downloadRequest = new DownloadFileRequest($this->CloudPath . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName(),
            $storage);
        $updatedImage = self::$imagingApi->downloadFile($downloadRequest);
        $this->SaveUpdatedImageToOutput("AppendToTiff.tiff", $updatedImage);

        echo PHP_EOL;
    }
}

