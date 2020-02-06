<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FindDuplicateImages.php">
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
use Aspose\Imaging\Model\Requests\FindImageDuplicatesRequest;

class FindDuplicateImages extends ImagingAiBase
{
    private static $ComparableImage = "ComparableImage.jpg";

    private static $ComparingImageSimilarLess15 = "ComparingImageSimilar15.jpg";

    private static $ComparingImageSimilarMore75 = "ComparingImageSimilar75.jpg";

    /**
     * FindDuplicateImages constructor.
     * @param $imagingApi ImagingApi The imaging api
     */
    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        echo "Find duplicate images example:" . PHP_EOL;
    }

    /**
     * Prepares the search context
     * @throws ApiException
     */
    public function PrepareSearchContext()
    {
        $this->CreateSearchContext();

        $images = array(self::$ComparableImage, self::$ComparingImageSimilarLess15, self::$ComparingImageSimilarMore75);
        foreach ($images as $imageName) $this->UploadImageToCloud($imageName);


        $this->CreateImageFeatures(self::$ComparableImage, false);
        $this->CreateImageFeatures(self::$ComparingImageSimilarMore75, false);
        $this->CreateImageFeatures(self::$ComparingImageSimilarLess15, false);

        echo PHP_EOL;
    }

    /**
     * Finds the image duplicates
     * @throws ApiException
     */
    public function FindImageDuplicates()
    {
        echo "Finds the image duplicates" . PHP_EOL;

        $similarityThreshold = 70;
        $folder = self::$cloudPath;
        $storage = null; // We are using default Cloud Storage

        $request = new FindImageDuplicatesRequest($this->searchContextId, $similarityThreshold, $folder, $storage);
        $response = self::$imagingApi->findImageDuplicates($request);

        echo "Duplicates count: " . count($response->getDuplicates());
    }
}