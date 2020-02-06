<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingBase.php">
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
use Aspose\Imaging\ImagingApi;
use Aspose\Imaging\Model\ImagingResponse;
use Aspose\Imaging\Model\Requests\UploadFileRequest;

/**
 * Modify image example
 */
abstract class ImagingBase
{
    /**
     * Aspose.Imaging API
     *
     * @var ImagingApi
     */
    protected static $imagingApi;
    /**
     * The cloud path.
     */
    protected $CloudPath = "Examples";

    /**
     * ImagingBase constructor.
     * @param $imagingApi
     */
    public function __construct($imagingApi)
    {
        self::$imagingApi = $imagingApi;
    }

    /**
     * Uploads the example image to cloud.
     * @return void
     * @throws ApiException
     *
     */
    protected function UploadSampleImageToCloud()
    {
        $inputImage = file_get_contents(ImagingBase::GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $this->GetSampleImageFileName());
        $this->UploadImageToCloud($this->GetSampleImageFileName(), $inputImage);
    }

    /**
     * Gets the example images folder path
     * @return string
     */
    public static function GetExampleImagesFolder()
    {
        return dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "Images";
    }

    /**
     * Gets the name of the example image file.
     *
     * @return string
     */
    protected abstract function GetSampleImageFileName();

    /**
     * Uploads the image to cloud.
     * @param $imageName string Name of the image.
     * @param $image string The image.
     * @return void
     * @throws ApiException
     */
    protected function UploadImageToCloud($imageName, $image)
    {
        $request = new UploadFileRequest($this->CloudPath . DIRECTORY_SEPARATOR . $imageName,
            $image);
        $response = self::$imagingApi->uploadFile($request);
        echo ($response->getErrors() == null || count($response->getErrors()) == 0) ?
            "Image " . $imageName . " is uploaded to cloud storage" :
            "Uploading errors count: " . count($response->getErrors());
        echo PHP_EOL;
    }

    /**
     * Saves the updated image to local output folder.
     * @param $updatedImage string The updated image.
     * @param $fromRequest bool If set to true - created from request.
     * @param string $newFormatExtension The new format extension.
     */
    protected function SaveUpdatedSampleImageToOutput($updatedImage, $fromRequest, $newFormatExtension = null)
    {
        $newFileName = $this->GetModifiedSampleImageFileName($fromRequest, $newFormatExtension);
        $this->SaveUpdatedImageToOutput($newFileName, $updatedImage);
    }

    /**
     * Gets the name of the modified sample image file.
     * @param bool $fromRequest If set to true - created from request.
     * @param string $newFormatExtension The new format extension.
     *
     * @return string The name of the modified sample image file.
     */
    protected function GetModifiedSampleImageFileName($fromRequest = false, $newFormatExtension = null)
    {
        $nameWithNewExtension = $newFormatExtension != null ? substr($this->GetSampleImageFileName(), 0,
                strrpos($this->GetSampleImageFileName(),
                    ".") + 1) . $newFormatExtension : $this->GetSampleImageFileName();
        return $fromRequest ? "ModifiedFromRequest" . $nameWithNewExtension : "Modified" . $nameWithNewExtension;
    }

    /**
     * Saves the updated image to output folder.
     * @param $imageName string Name of the image.
     * @param $updatedImage string The updated image.
     * @return void
     */
    protected function SaveUpdatedImageToOutput($imageName, $updatedImage)
    {
        $path = ImagingBase::GetOutputFolder() . DIRECTORY_SEPARATOR . $imageName;
        file_put_contents($path, $updatedImage);
        echo "Image " . $imageName . " is saved to " . dirname($path);
    }

    /**
     * Gets the output folder path
     * @return string
     */
    public static function GetOutputFolder()
    {
        return dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "Output";
    }

    /**
     * @param $fileName string
     * @param $imagingResponse ImagingResponse
     * @return void
     */
    protected function OutputPropertiesToFile($fileName, $imagingResponse)
    {
        $path = ImagingBase::GetOutputFolder() . $fileName;

        $properties = "Width: " . $imagingResponse->getWidth() . PHP_EOL;
        $properties .= "Height: " . $imagingResponse->getHeight() . PHP_EOL;
        $properties .= "Horizontal resolution: " . $imagingResponse->getHorizontalResolution() . PHP_EOL;
        $properties .= "Vertical resolution: " . $imagingResponse->getVerticalResolution() . PHP_EOL;
        $properties .= "Bits per pixel: " . $imagingResponse->getBitsPerPixel() . PHP_EOL;

        if ($imagingResponse->getTiffProperties() != null) {
            $properties .= "Tiff properties:" . PHP_EOL;
            $properties .= "Frames count: " . count($imagingResponse->getTiffProperties()->getFrames()) . PHP_EOL;
            $properties .= "Camera owner name: " . ($imagingResponse->getTiffProperties()->getExifData() != null ?
                    $imagingResponse->getTiffProperties()->getExifData()->getCameraOwnerName() : "") . PHP_EOL;
            $properties .= "Byte order: " . $imagingResponse->getTiffProperties()->getByteOrder();
        }

        file_put_contents($path, $properties);
    }

    /**
     * @param $header string
     * @return void
     */
    protected function PrintHeader($header)
    {
        echo $header . PHP_EOL;
    }
}