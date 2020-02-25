<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateWmfImage.php">
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

use Aspose\Imaging\Model\Requests\CreateModifiedWmfRequest;
use Aspose\Imaging\Model\Requests\ModifyWmfRequest;


/**
 *  WMF image example.
 */
class UpdateWmfImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update WMF image example");
    }

    /**
     * Process existing WMF image using given parameters.
     * The image is saved in the cloud.
     */
    public function ModifyWmfFromStorage()
    {
        echo "Update parameters of a WMF image from cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage

        $storage = null; // We are using default Cloud Storage
        $exportFormat = "png";

        $getImageWmfRequest =
            new ModifyWmfRequest($this->GetSampleImageFileName(), $bkColor, $pageWidth, $pageHeight, $borderX, $borderY,
                $fromScratch, $folder, $storage, $exportFormat);

        echo "Call ModifyWmf with params: background color: ${bkColor}, page width: ${pageWidth}, page height: ${pageHeight}, border X: ${borderX}, border Y: ${borderY}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyWmf($getImageWmfRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "WMFSampleImage.wmf";
    }

    /**
     * Process existing WMF image using given parameters, and upload updated image to Cloud Storage
     */
    public function ModifyWmfAndUploadToStorage()
    {
        echo "Update parameters of a WMF image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage

        $storage = null; // We are using default Cloud Storage
        $exportFormat = "png";

        $getImageWmfRequest =
            new ModifyWmfRequest($this->GetSampleImageFileName(), $bkColor, $pageWidth, $pageHeight, $borderX, $borderY,
                $fromScratch, $folder, $storage, $exportFormat);

        echo "Call ModifyWmf with params: background color: ${bkColor}, page width: ${pageWidth}, page height: ${pageHeight}, border X: ${borderX}, border Y: ${borderY}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyWmf($getImageWmfRequest);
        $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false), $updatedImage);

        echo PHP_EOL;
    }

    /// <summary>
    /// Process existing WMF image using given parameters.
    /// Image data is passed in a request stream.
    /// </summary>
    public function CreateModifiedWmfFromRequestBody()
    {
        echo "Update parameters of a WMF image from request body" . PHP_EOL;

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $fromScratch = null;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image).
        $storage = null; // We are using default Cloud Storage
        $exportFormat = "png";

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $postImageWmfRequest =
            new CreateModifiedWmfRequest($inputStream, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY,
                $fromScratch, $outPath, $storage, $exportFormat);

        echo "Call CreateModifiedWmf with params: background color: ${bkColor}, page width: ${pageWidth}, page height: ${pageHeight}, border X: ${borderX}, border Y: ${borderY}" . PHP_EOL;

        $updatedImage = self::$imagingApi->createModifiedWmf($postImageWmfRequest);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, true);

        echo PHP_EOL;
    }
}

