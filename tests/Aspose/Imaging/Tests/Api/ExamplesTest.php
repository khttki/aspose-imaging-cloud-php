<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExamplesTests.php">
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

namespace Aspose\Imaging\Tests\Api;

use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging;
use \Aspose\Imaging\Model\Requests;

/**
 * Tests that correspond with examples code.
 * 
 * @group v3.0
 * @group Examples
 */
class ExamplesTests extends ApiTester {

    /**
     * Convert from storage example test.
     * 
     * @test
     */
    public function convertFromStorageExampleTest() {
        $imagingConfig = self::$imagingApi->getConfig();
        $imagingApi = new Imaging\ImagingApi($imagingConfig);

        try {
            // get local image
            $localInputImage = file_get_contents(ApiTester::LocalTestFolder . "\\test.png");

            // upload local image to storage
            $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/inputImage.png",
                $localInputImage, $imagingConfig->getOnPremise() ? self::$testStorage : null);
            $result = $imagingApi->uploadFile($uploadFileRequest);
            // inspect $result->getErrors() list if there were any
            // inspect $result->getUploaded() list for uploaded file names

            // convert image from storage to JPEG
            $getConvertRequest = new Requests\ConvertImageRequest("inputImage.png", "jpg",
                    "ExampleFolderNet", $imagingConfig->getOnPremise() ? self::$testStorage : null);

            $convertedImage = $imagingApi->convertImage($getConvertRequest)->getContents();

            // process resulting image
            // for example, save it to storage
            $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/resultImage.jpg",
                $convertedImage, $imagingConfig->getOnPremise() ? self::$testStorage : null);
            $result = $imagingApi->uploadFile($uploadFileRequest);
        } finally {
            // remove files from storage
            $imagingApi->deleteFile(new Requests\DeleteFileRequest("ExampleFolderNet/inputImage.png", 
                $imagingConfig->getOnPremise() ? self::$testStorage : null));
            $imagingApi->deleteFile(new Requests\DeleteFileRequest("ExampleFolderNet/resultImage.jpg", 
                $imagingConfig->getOnPremise() ? self::$testStorage : null));
        }
    }

    /**
     * Convert from stream example test.
     * 
     * @test
     */
    public function convertFromStreamExampleTest() {
        $imagingConfig = self::$imagingApi->getConfig();
        $imagingApi = new Imaging\ImagingApi($imagingConfig);

        try {
            // get local image
            $localInputImage = file_get_contents(ApiTester::LocalTestFolder . "\\test.png");

            // upload local image to storage
            $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/inputImage.png",
                $localInputImage, $imagingConfig->getOnPremise() ? self::$testStorage : null);
            $result = $imagingApi->uploadFile($uploadFileRequest);
            // inspect $result->getErrors() list if there were any
            // inspect $result->getUploaded() list for uploaded file names

            // convert image from request stream to JPEG and save it to storage
            // please, use outPath parameter for saving the result to storage
            $postSaveToStorageRequest = new Requests\CreateConvertedImageRequest($localInputImage, "jpg",
                    "ExampleFolderNet/resultImage.jpg", $imagingConfig->getOnPremise() ? self::$testStorage : null);

            $imagingApi->createConvertedImage($postSaveToStorageRequest);

            // download saved image from storage and process it
            $savedFile = $imagingApi->downloadFile(new Requests\DownloadFileRequest("ExampleFolderNet/resultImage.jpg", 
                $imagingConfig->getOnPremise() ? self::$testStorage : null))->getContents();

            // convert image from request stream to JPEG and read it from resulting stream
            // please, set outPath parameter as null to return result in request stream
            // instead of saving to storage
            $postSaveToStreamRequest = new Requests\CreateConvertedImageRequest($localInputImage, "jpg", null, 
                $imagingConfig->getOnPremise() ? self::$testStorage : null);

            // process resulting image from response stream
            $resultPostImageStream = $imagingApi->createConvertdedImage($postSaveToStreamRequest)->getContents();
        } finally {
            // remove file from storage
            $imagingApi->deleteFile(new Requests\DeleteFileRequest("ExampleFolderNet/resultImage.jpg", 
                $imagingConfig->getOnPremise() ? self::$testStorage : null));
        }
    }
}
