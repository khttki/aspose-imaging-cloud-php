<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingExamples.php">
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

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/ImagingBase.php';
require_once __DIR__ . '/CropImage.php';
require_once __DIR__ . '/ExportImage.php';
require_once __DIR__ . '/ImageProperties.php';
require_once __DIR__ . '/ResizeImage.php';
require_once __DIR__ . '/RotateFlipImage.php';
require_once __DIR__ . '/TiffFrames.php';
require_once __DIR__ . '/UpdateBmpImage.php';
require_once __DIR__ . '/UpdateEmfImage.php';
require_once __DIR__ . '/UpdateGifImage.php';
require_once __DIR__ . '/UpdateImage.php';
require_once __DIR__ . '/UpdateJpeg2000Image.php';
require_once __DIR__ . '/UpdateJpegImage.php';
require_once __DIR__ . '/UpdatePsdImage.php';
require_once __DIR__ . '/UpdateTiffImage.php';
require_once __DIR__ . '/UpdateWebPImage.php';
require_once __DIR__ . '/UpdateWmfImage.php';
require_once __DIR__ . '/AI/ImagingAiBase.php';
require_once __DIR__ . '/AI/CompareImages.php';
require_once __DIR__ . '/AI/FindDuplicateImages.php';
require_once __DIR__ . '/AI/FindSimilarImages.php';

use Aspose\Imaging\Configuration;
use Aspose\Imaging\ImagingApi;

error_reporting(1);

$appKey = null;
$appSid = null;
$baseUrl = null;
processArguments($argv, $appKey, $appSid, $baseUrl);

try {
    $imagingConfig = new Configuration();
    $imagingConfig->setAppKey($appKey);
    $imagingConfig->setAppSid($appSid);
    $imagingConfig->setBaseUrl($baseUrl);
    $imagingApi = new ImagingApi($imagingConfig);

    if (file_exists(ImagingBase::GetOutputFolder()))
        deleteDir(ImagingBase::GetOutputFolder());
    mkdir(ImagingBase::GetOutputFolder());

    echo "Running Imaging Cloud examples:" . PHP_EOL;

    // Update parameters of existing BMP image
    $bmpImage = new UpdateBmpImage($imagingApi);
    $bmpImage->ModifyBmpFromStorage();
    $bmpImage->ModifyBmpAndUploadToStorage();
    $bmpImage->CreateModifiedBmpFromRequestBody();

    // Crop an existing image
    $cropImage = new CropImage($imagingApi);
    $cropImage->CropImageFromStorage();
    $cropImage->CropImageAndUploadToStorage();
    $cropImage->CreateCroppedImageFromRequestBody();

    // Process existing EMF imaging using given parameters
    $updateEMFImage = new UpdateEmfImage($imagingApi);
    $updateEMFImage->ModifyEmfFromStorage();
    $updateEMFImage->ModifyEmfAndUploadToStorage();
    $updateEMFImage->CreateModifiedEmfFromRequestBody();

    // Export existing image to another format
    $exportImage = new ExportImage($imagingApi);
    $exportImage->SaveImageAsFromStorage();
    $exportImage->SaveImageAsAndUploadToStorage();
    $exportImage->CreateSavedImageAsFromRequestBody();

    // Get properties of an image
    $imageProperties = new ImageProperties($imagingApi);
    $imageProperties->GetImagePropertiesFromStorage();
    $imageProperties->ExtractImagePropertiesFromRequestBody();

    // Resize an existing image
    $resizeImage = new ResizeImage($imagingApi);
    $resizeImage->ResizeImageFromStorage();
    $resizeImage->ResizeImageAndUploadToStorage();
    $resizeImage->CreateResizedImageFromRequestBody();

    // Rotate and/or flip an existing image
    $rotateFlipImage = new RotateFlipImage($imagingApi);
    $rotateFlipImage->RotateFlipImageFromStorage();
    $rotateFlipImage->RotateFlipImageAndUploadToStorage();
    $rotateFlipImage->CreateRotateFlippedImageFromRequestBody();

    // TIFF Frames
    $tiffFrames = new TIFFFrames($imagingApi);
    // Get a specified frame from existing TIFF image
    $tiffFrames->GetImageFrameFromStorage();
    // Get a specified frame from existing TIFF image, and upload the frame to Cloud Storage
    $tiffFrames->GetImageFrameAndUploadToStorage();
    // Resize a TIFF frame
    $tiffFrames->ResizeImageFrameFromStorage();
    // Crop a TIFF frame
    $tiffFrames->CropImageFrameFromStorage();
    // RotateFlip a TIFF frame
    $tiffFrames->RotateFlipImageFrameFromStorage();
    // Get other frames from existing TIFF image
    $tiffFrames->GetAllImageFramesFromStorage();
    // Get separate frame from existing TIFF image.
    // Image data is passed as zero-indexed multipart/form-data content or as raw body stream
    $tiffFrames->CreateImageFrameFromRequestBody();
    // Get separate frame properties of existing TIFF image
    $tiffFrames->GetImageFramePropertiesFromStorage();
    // Get separate frame properties of existing TIFF image.
    // Image data is passed as zero-indexed multipart/form-data content or as raw body stream
    $tiffFrames->ExtractImageFramePropertiesFromRequestBody();

    // Update parameters of existing TIFF image
    $tiffImage = new UpdateTiffImage($imagingApi);
    $tiffImage->ModifyTiffFromStorage();
    $tiffImage->ModifyTiffAndUploadToStorage();
    $tiffImage->CreateModifiedTiffFromRequestBody();
    $tiffImage->ConvertTiffToFaxFromStorage();
    $tiffImage->AppendTiffFromStorage();

    // Update parameters of existing GIF image
    $updateGIFImage = new UpdateGifImage($imagingApi);
    $updateGIFImage->ModifyGifFromStorage();
    $updateGIFImage->ModifyGifAndUploadToStorage();
    $updateGIFImage->CreateModifiedGifFromRequestBody();

    // Perform scaling, cropping and flipping of an existing image in a single request
    $updateImage = new UpdateImage($imagingApi);
    $updateImage->UpdateImageFromStorage();
    $updateImage->UpdateImageAndUploadToStorage();
    $updateImage->CreateUpdatedImageFromRequestBody();

    // Update parameters of existing JPEG2000 image
    $updateJPEG2000Image = new UpdateJpeg2000Image($imagingApi);
    $updateJPEG2000Image->ModifyJpeg2000FromStorage();
    $updateJPEG2000Image->ModifyJpeg2000AndUploadToStorage();
    $updateJPEG2000Image->CreateModifiedJpeg2000FromRequestBody();

    // Update parameters of existing JPEG image
    $updateJPEGImage = new UpdateJpegImage($imagingApi);
    $updateJPEGImage->ModifyJpegFromStorage();
    $updateJPEGImage->ModifyJpegAndUploadToStorage();
    $updateJPEGImage->CreateModifiedJpegFromRequestBody();

    // Update parameters of existing PSD image
    $updatePSDImage = new UpdatePsdImage($imagingApi);
    $updatePSDImage->ModifyPsdFromStorage();
    $updatePSDImage->ModifyPsdAndUploadToStorage();
    $updatePSDImage->CreateModifiedPsdFromRequestBody();

    // Update parameters of existing WEBP image
    $webpImage = new UpdateWebPImage($imagingApi);
    $webpImage->ModifyWebPFromStorage();
    $webpImage->ModifyWebPAndUploadToStorage();
    $webpImage->CreateModifiedWebPFromRequestBody();

    // Process existing WMF image using given parameters
    $wmfImage = new UpdateWmfImage($imagingApi);
    $wmfImage->ModifyWmfFromStorage();
    $wmfImage->ModifyWmfAndUploadToStorage();
    $wmfImage->CreateModifiedWmfFromRequestBody();

    // Update parameters of existing BMP image
    $bmpImage = new UpdateBmpImage($imagingApi);
    $bmpImage->ModifyBmpFromStorage();
    $bmpImage->ModifyBmpAndUploadToStorage();
    $bmpImage->CreateModifiedBmpFromRequestBody();

    // AI APIs
    echo "Running AI examples:" . PHP_EOL;

    // Compare two images
    $compareImages = new CompareImages($imagingApi);
    $compareImages->PrepareSearchContext();
    $compareImages->CompareTwoImagesInCloud();
    $compareImages->CompareLoadedImageToImageInCloud();
    $compareImages->DeleteSearchContext();

    // Find duplicate images
    $findDuplicateImages = new FindDuplicateImages($imagingApi);
    $findDuplicateImages->PrepareSearchContext();
    $findDuplicateImages->FindImageDuplicates();
    $findDuplicateImages->DeleteSearchContext();

    // Find similar images
    $findSimilarImages = new FindSimilarImages($imagingApi);
    $findSimilarImages->PrepareSearchContext();
    $findSimilarImages->FindImagesSimilar();
    $findSimilarImages->FindImagesByTag();
    $findSimilarImages->DeleteSearchContext();
} catch (\Exception $exception) {
    echo "Something goes wrong: " . $exception . PHP_EOL;
}

function deleteDir($path)
{
    if (empty($path)) {
        return false;
    }
    return is_file($path) ?
        @unlink($path) :
        array_map(__FUNCTION__, glob($path . '/*')) == @rmdir($path);
}

function processArguments($args, &$appKey, &$appSid, &$baseUrl)
{
    $errors = array();

    $appKey = processArgument($args, "--appKey", "app key", $errors);
    $appSid = processArgument($args, "--appSid", "app sid", $errors);
    $baseUrl = processArgument($args, "--baseUrl", "base url", $errors, "https://api.aspose.cloud/");

    if (count($errors) == 0)
        return;

    echo("Failed to launch examples: " . PHP_EOL . join(PHP_EOL, $errors));
    exit(1);
}

function processArgument($args, $key, $description, &$errors, $defaultValue = null)
{
    $argumentValue = null;
    for ($i = 0; $i < count($args); $i++) {
        if (substr($args[$i], 0, strlen($key . "=")) === ($key . "=")) {
            $argumentValue = substr($args[$i], strpos($args[$i], "=") + 1);
        } else if ($args[$i] === $key && $i < count($args) - 1)
            $argumentValue = $args[$i + 1];
    }

    if ($argumentValue != null)
        return $argumentValue;

    if ($defaultValue == null)
        array_push($errors, "Please, provide {$description}: '{$key} <value>' or '{$key}=<value>'");
    else
        $argumentValue = $defaultValue;

    return $argumentValue;
}