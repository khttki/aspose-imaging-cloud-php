<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FindSimilarImages.php">
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
use Aspose\Imaging\Model\Requests\CreateImageTagRequest;
use Aspose\Imaging\Model\Requests\FindImagesByTagsRequest;
use Aspose\Imaging\Model\Requests\FindSimilarImagesRequest;


class FindSimilarImages extends ImagingAiBase
{
    private static $ImageToFind = "4.jpg";

    private static $ImageToFindByTag = "ComparingImageSimilar75.jpg";

    private static $ImagesPath = "FindSimilar";

    /**
     * FindSimilarImages constructor.
     * @param $imagingApi ImagingApi The imaging api
     */
    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        echo "Find images example:" . PHP_EOL;
    }

    /**
     * Prepares the search context
     * @throws ApiException
     */
    public function PrepareSearchContext()
    {
        $this->CreateSearchContext();

        $images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg",
            "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg");

        foreach ($images as $imageName) $this->UploadImageToCloud($imageName, self::$ImagesPath);

        echo PHP_EOL;
    }

    /**
     * Finds the similar images
     * @throws ApiException
     */
    public function FindImagesSimilar()
    {
        echo "Finds the similar images";

        $findImageId = self::$ImagesPath . DIRECTORY_SEPARATOR . self::$ImageToFind;
        $similarityThreshold = 3;
        $maxCount = 3;
        $folder = self::$cloudPath;
        $storage = null; // We are using default Cloud Storage

        $request = new FindSimilarImagesRequest($this->searchContextId, $similarityThreshold, $maxCount, null,
            $findImageId, $folder, $storage);
        $response = self::$imagingApi->findSimilarImages($request);

        echo "Results count: " . count($response->getResults());
    }

    /**
     * Finds the images by tag
     * @throws ApiException
     */
    public function FindImagesByTag()
    {
        echo "Finds the images by tag";

        $fileName = self::$ImageToFindByTag;
        $tagName = "ImageTag";
        $similarityThreshold = 60;
        $maxCount = 5;
        $folder = null; // Path to input files
        $storage = null; // We are using default Cloud Storage

        $inputImage = file_get_contents(self::GetExampleImagesFolder() . DIRECTORY_SEPARATOR . $fileName);
        $createTagRequest = new CreateImageTagRequest($inputImage, $this->searchContextId, $tagName, $folder, $storage);
        self::$imagingApi->createImageTag($createTagRequest);

        $tags = json_encode(array($tagName));
        $findRequest = new FindImagesByTagsRequest($tags, $this->searchContextId, $similarityThreshold, $maxCount,
            $folder, $storage);

        echo "Call FindImagesByTags with params: similarity threshold: ${$similarityThreshold}, max count: ${$maxCount}, tags: ${$tags}";

        $findResponse = self::$imagingApi->findImagesByTags($findRequest);

        foreach ($findResponse->getResults() as $result) echo "Image name: " . $result->getImageId() . ", similarity: " . $result->getSimilarity();

        echo PHP_EOL;
    }
}