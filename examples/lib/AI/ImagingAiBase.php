<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingAiBase.php">
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
use Aspose\Imaging\Model\Requests\CreateImageFeaturesRequest;
use Aspose\Imaging\Model\Requests\CreateImageSearchRequest;
use Aspose\Imaging\Model\Requests\DeleteImageSearchRequest;
use Aspose\Imaging\Model\Requests\GetImageSearchStatusRequest;
use Aspose\Imaging\Model\Requests\UploadFileRequest;

/**
 * Base class for AI operations with images
 */
class ImagingAiBase
{
    /**
     * ImagingAiBase constructor.
     * @param $imagingApi
     */
    public function __construct($imagingApi)
    {
        self::$imagingApi = $imagingApi;
    }

    /**
     * The example images folder path
     * @return string
     */
    protected static function GetExampleImagesFolder()
    {
        return dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . "Images" . DIRECTORY_SEPARATOR . "AI";
    }

    /**
     * The cloud path.
     * @var string
     */
    protected static $cloudPath = "Examples" . DIRECTORY_SEPARATOR . "AI";

    /**
     * Aspose.Imaging API
     * @var ImagingApi
     */
    protected static $imagingApi;

    /**
     * The search context ID
     * @var
     */
    protected $searchContextId;

    /**
     * Deletes the image search context
     * @throws ApiException
     */
    public function DeleteSearchContext()
    {
        $folder = null; // File will be saved at the root of the storage
        $storage = null; // We are using default Cloud Storage

        $request = new DeleteImageSearchRequest($this->searchContextId, $folder, $storage);
        self::$imagingApi->deleteImageSearch($request);

        echo "Deleted new Search context with SearchContextId: {$this->searchContextId}" . PHP_EOL;
    }

    /**
     * Creates the image search
     * @throws ApiException
     */
    protected function CreateSearchContext()
    {
        $detector = "akaze";
        $matchingAlgorithm = "randomBinaryTree";
        $folder = null; // File will be saved at the root of the storage
        $storage = null; // We are using default Cloud Storage

        $request = new CreateImageSearchRequest($detector, $matchingAlgorithm, $folder, $storage);
        $status = self::$imagingApi->createImageSearch($request);

        $this->searchContextId = $status->getId();

        echo "Created new Search context with SearchContextId: " . $this->searchContextId . PHP_EOL;
    }

    /**
     * Extract images features and add them to search context
     * @param $sourcePath string The storage source path.
     * @param $isFolder bool If set to true - is folder
     * @throws ApiException
     */
    protected function CreateImageFeatures($sourcePath, $isFolder)
    {
        $folder = null; // File will be saved at the root of the storage
        $storage = null; // We are using default Cloud Storage

        $request = $isFolder ? new CreateImageFeaturesRequest($this->searchContextId, null, null,
            self::$cloudPath . DIRECTORY_SEPARATOR . $sourcePath, $folder, $storage) :
            new CreateImageFeaturesRequest($this->searchContextId, null,
                self::$cloudPath . DIRECTORY_SEPARATOR . $sourcePath, null, $folder, $storage);

        self::$imagingApi->createImageFeatures($request);

        if ($isFolder) {
            echo "Creating Search context image features ... ";
            $this->WaitIdle($this->searchContextId);
        } else
            echo "Created Search context image features for ${$sourcePath}";
    }

    /**
     * Update images features in search context
     * @param string $imageName Name of the image
     * @param string $subFolder Name of the subfolder (if a subfolder)
     * @throws ApiException
     */
    protected function UploadImageToCloud($imageName, $subFolder = null)
    {
        $folder = is_null($subFolder) ? self::GetExampleImagesFolder() :
            self::GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $subFolder;

        $localInputImage = $folder . DIRECTORY_SEPARATOR . $imageName;
        $request = new UploadFileRequest(self::$cloudPath . DIRECTORY_SEPARATOR . $imageName, $localInputImage);
        self::$imagingApi->uploadFile($request);

        echo "Image " . $imageName . " was uploaded to cloud storage" . PHP_EOL;
    }

    /**
     * Waits the idle
     * @param $searchContextId string The search context ID
     * @throws ApiException
     */
    private function WaitIdle($searchContextId)
    {
        $folder = null; // File will be saved at the root of the storage
        $storage = null; // We are using default Cloud Storage

        while (self::$imagingApi->getImageSearchStatus(new GetImageSearchStatusRequest($searchContextId, $folder,
                $storage))->getSearchStatus() != "Idle")
            sleep(1);
    }
}