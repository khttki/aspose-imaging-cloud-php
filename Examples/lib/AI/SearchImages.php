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

use Aspose\Imaging\Model\Requests\CreateWebSiteImageFeaturesRequest;
use Aspose\Imaging\Model\Requests\GetImageFeaturesRequest;

class SearchImages extends ImagingAiBase
{
    public function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        echo "Search images example:" . PHP_EOL;
    }

    /**
     * Prepares the search context
     * @throws ApiException
     */
    public function PrepareSearchContext()
    {
        $this->CreateSearchContext();
    }

    public function SearchImageFromWebSource()
    {
        echo "Searches for images from a web source:" . PHP_EOL;

        $folder = self::$cloudPath;
        $storage = null; // We are using default Cloud Storage

        $image_source_url = urlencode("https://www.f1news.ru/interview/hamilton/140909.shtml");
        self::$imagingApi->createWebSiteImageFeatures(new CreateWebSiteImageFeaturesRequest($this->searchContextId, $image_source_url, $folder, $storage));

        $this->WaitIdle($this->searchContextId);

        $image_url = urlencode("https://cdn.f1ne.ws/userfiles/hamilton/140909.jpg");
        $response = self::$imagingApi->getImageFeatures(new GetImageFeaturesRequest($this->searchContextId, $image_url, $folder, $storage));

        echo "Image features found: " + $response->getFeaturesCount() .  PHP_EOL;
    }
}