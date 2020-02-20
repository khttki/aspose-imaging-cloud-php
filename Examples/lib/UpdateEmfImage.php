<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateEmfImage.php">
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

use Aspose\Imaging\Model\Requests\CreateModifiedEmfRequest;
use Aspose\Imaging\Model\Requests\ModifyEmfRequest;


/**
 *  Update EMF image example.
 */
class UpdateEmfImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Update EMF image example");
    }

    /**
     * Modifies the EMF from storage
     */
    public function ModifyEmfFromStorage()
    {
        echo "Update parameters of a EMF image" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $format = "png";
        // Specifies where additional parameters we do not support should be taken from.
        // If this is true – they will be taken from default values for standard image,
        // if it is false – they will be saved from current image. Default is false.
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // As we are using default Cloud Storage

        $request = new ModifyEmfRequest($this->GetSampleImageFileName(), $bkColor, $pageWidth, $pageHeight, $borderX,
            $borderY, $fromScratch, $folder, $storage, $format);

        echo "Call ModifyEmf with params: background color: ${bkColor}, width: ${pageWidth}, height: ${pageHeight}, border x: ${borderX}, border y: ${borderY}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyEmf($request);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, false, $format);

        echo PHP_EOL;
    }

    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "UpdateEMFSampleImage.emf";
    }

    /**
     * Process existing EMF image using given parameters, and upload updated image to Cloud Storage
     */
    public function ModifyEmfAndUploadToStorage()
    {
        echo "Update parameters of a EMF image and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $format = "png";
        // Specifies where additional parameters we do not support should be taken from.
        // If this is true – they will be taken from default values for standard image,
        // if it is false – they will be saved from current image. Default is false.
        $fromScratch = null;
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // As we are using default Cloud Storage

        $request = new ModifyEmfRequest($this->GetSampleImageFileName(), $bkColor, $pageWidth, $pageHeight, $borderX,
            $borderY, $fromScratch, $folder, $storage, $format);

        echo "Call ModifyEmf with params: background color: ${bkColor}, width: ${pageWidth}, height: ${pageHeight}, border x: ${borderX}, border y: ${borderY}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->modifyEmf($request);
        $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false, $format), $updatedImage);

        echo PHP_EOL;
    }

    /**
     * Rasterize EMF image to PNG using given parameters. Image data is passed in a request stream.
     */
    public function CreateModifiedEmfFromRequestBody()
    {
        echo "Update parameters of a EMF image from request body" . PHP_EOL;

        $bkColor = "gray";
        $pageWidth = 300;
        $pageHeight = 300;
        $borderX = 50;
        $borderY = 50;
        $format = "png";
        $fromScratch = null;
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
        $storage = null; // As we are using default Cloud Storage

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $request = new CreateModifiedEmfRequest($inputStream, $bkColor, $pageWidth, $pageHeight, $borderX, $borderY,
            $fromScratch, $outPath, $storage, $format);

        echo "Call CreateModifiedEmf with params: background color: ${bkColor}, width: ${pageWidth}, height: ${pageHeight}, border x: ${borderX}, border y: ${borderY}, $format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->createModifiedEmf($request);
        $this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);

        echo PHP_EOL;
    }
}
