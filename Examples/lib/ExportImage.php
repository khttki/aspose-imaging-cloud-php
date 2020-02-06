<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExportImage.php">
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
use Aspose\Imaging\Model\Requests\CreateSavedImageAsRequest;
use Aspose\Imaging\Model\Requests\SaveImageAsRequest;
use Exception;


/**
 * Export image example.
 */
class ExportImage extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Export image example");
    }

    /**
     * Export an image to another format.
     * @constructor
     * @throws ApiException
     */
    public function SaveImageAsFromStorage()
    {
        echo "Export an image to another format" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Export(SaveAs)
        // for possible output formats
        $format = "pdf";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // Cloud Storage name

        $request = new SaveImageAsRequest($this->GetSampleImageFileName(), $format, $folder, $storage);

        echo "Call SaveImageAs with params: format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->saveImageAs($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, false, $format);
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
        return "ExportSampleImage.bmp";
    }

    /**
     * Export an image to another format.
     * @constructor
     * @throws ApiException
     */
    public function SaveImageAsAndUploadToStorage()
    {
        echo "Export an image to another format and upload to cloud storage" . PHP_EOL;

        $this->UploadSampleImageToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Export(SaveAs)
        // for possible output formats
        $format = "pdf";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // Cloud Storage name

        $request = new SaveImageAsRequest($this->GetSampleImageFileName(), $format, $folder, $storage);

        echo "Call SaveImageAs with params: format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->saveImageAs($request);
            $this->UploadImageToCloud($this->GetModifiedSampleImageFileName(false, $format), $updatedImage);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    /**
     * Export an image to another format. Image data is passed in a request stream.
     * @constructor
     */
    public function CreateSavedImageAsFromRequestBody()
    {
        echo "Export an image to another format. Image data is passed in a request body" . PHP_EOL;

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Export(SaveAs)
        // for possible output formats
        $format = "pdf";
        $outPath = null; // Path to updated file (if this is empty, response contains streamed image)
        $storage = null; // Cloud Storage name

        $inputStream = file_get_contents($this->GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $request = new CreateSavedImageAsRequest($inputStream, $format, $outPath, $storage);

        echo "Call CreateSavedImageAs with params: format: ${format}" . PHP_EOL;

        try {
            $updatedImage = self::$imagingApi->createSavedImageAs($request);
            $this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);
        } catch (Exception $ex) {
            echo $ex->getMessage() . PHP_EOL;
        }

        echo PHP_EOL;
    }

}

