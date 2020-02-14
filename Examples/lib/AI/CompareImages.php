<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompareImages.php">
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
use Aspose\Imaging\Model\Requests\CompareImagesRequest;

class CompareImages extends ImagingAiBase
{
    private static $ComparableImage = "ComparableImage.jpg";

    private static $ComparingImageSimilarLess15 = "ComparingImageSimilar15.jpg";

    private static $ComparingImageSimilarMore75 = "ComparingImageSimilar75.jpg";

    /**
     * CompareImages constructor.
     * @param $imagingApi ImagingApi The imaging api
     */
    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        echo "Compare images example:" . PHP_EOL;
    }

    /**
     * Prepares the search context
     * @throws ApiException
     */
    public function PrepareSearchContext()
    {
        $this->CreateSearchContext();

        $images = array(self::$ComparableImage, self::$ComparingImageSimilarMore75);
        foreach ($images as $imageName) $this->UploadImageToCloud($imageName);


        $this->CreateImageFeatures(self::$ComparableImage, false);
        $this->CreateImageFeatures(self::$ComparingImageSimilarMore75, false);

        echo PHP_EOL;
    }

    /**
     * Compares the two images in cloud
     * @throws ApiException
     */
    public function CompareTwoImagesInCloud()
    {
        echo "Compares the two images in cloud storage:" . PHP_EOL;

        // Compare two images
        $folder = self::$cloudPath; // Folder with image to process
        $storage = null; // We are using default Cloud Storage

        echo "Call CompareImages with params: image1: " . self::$ComparableImage . " image2: " . self::$ComparingImageSimilarMore75 . PHP_EOL;

        $request = new CompareImagesRequest($this->searchContextId, self::$ComparableImage, null,
            self::$ComparingImageSimilarMore75, $folder, $storage);
        $searchResults = self::$imagingApi->compareImages($request);

        $similarity = $searchResults->getResults()[0]->getSimilarity();
        echo "Images Similarity: " . $similarity . PHP_EOL;
    }

    /**
     * Compares the loaded image to image in cloud
     * @throws ApiException
     */
    public function CompareLoadedImageToImageInCloud()
    {
        echo "Compares the loaded image to the image in cloud storage:" . PHP_EOL;

        $inputImage = file_get_contents(self::GetExampleImagesFolder() . DIRECTORY_SEPARATOR . self::$ComparingImageSimilarLess15);
        $request = new CompareImagesRequest($this->searchContextId, self::$ComparableImage, $inputImage);

        echo "Call CompareImages with params: image: " . self::$ComparableImage;

        $searchResults = self::$imagingApi->compareImages($request);
        $similarity = $searchResults->getResults()[0]->getSimilarity();
        echo "Images Similarity: " . $similarity;
    }
}