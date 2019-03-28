<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FindImagesTest.php">
 *   Copyright (c) 2019 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\Imaging\Tests\Api\AI;

use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing image search
 * 
 * @group AI
 * @group v3.0
 */
class FindImagesTest extends TestImagingAiBase
{
    /**
     * Image to find
     *
     * @var string
     */
    private $imageToFind = "4.jpg";

    /**
     * Image to find by tag
     *
     * @var string
     */
    private $imageToFindByTag = "ComparingImageSimilar75.jpg";

    /**
     * Tests similar images search
     *
     * @test
     * 
     * @return void
     */
    public function findSimilarImagesTest()
    {
        $this->runTestWithLogging("findSimilarImagesTest", function()
        {
            $this->addImageFeaturesToSearchContext(self::$originalDataFolder . "/FindSimilar", true);

            $findImageId = self::$originalDataFolder . "/FindSimilar/" . $this->imageToFind;

            $response = self::$asyncMode ?
                self::$imagingApi->getSearchContextFindSimilarAsync(
                    new Requests\GetSearchContextFindSimilarRequest($this->searchContextId, 3, 3, null, $findImageId, null, self::$testStorage))->wait() :
                self::$imagingApi->getSearchContextFindSimilar(
                    new Requests\GetSearchContextFindSimilarRequest($this->searchContextId, 3, 3, null, $findImageId, null, self::$testStorage));       

            $this->assertGreaterThanOrEqual(1, count($response->getResults()));
        });
    }

    /**
     * Tests tagged image search
     *
     * @test
     * 
     * @return void
     */
    public function findSimilarImagesByTagTest()
    {
        $this->runTestWithLogging("findSimilarImagesByTagTest", function()
        {
            $this->addImageFeaturesToSearchContext(self::$originalDataFolder . "/FindSimilar", true);

            $tag = "TestTag";

            $storagePath = self::$originalDataFolder . "/" . $this->imageToFindByTag;

            $tagImageStream = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($storagePath, self::$testStorage));
            $this->assertNotNull($tagImageStream);
            $imageContents = $tagImageStream->getContents();

            self::$asyncMode ? self::$imagingApi->postSearchContextAddTagAsync(new Requests\PostSearchContextAddTagRequest(
                             $imageContents, $this->searchContextId, $tag, null, self::$testStorage))->wait() :
                             self::$imagingApi->postSearchContextAddTag(new Requests\PostSearchContextAddTagRequest(
                                $imageContents, $this->searchContextId, $tag, null, self::$testStorage));

            $tags = json_encode([$tag]);
            
            $response = self::$asyncMode ? 
                self::$imagingApi->postSearchContextFindByTagsAsync(
                    new Requests\PostSearchContextFindByTagsRequest($tags, $this->searchContextId, 60, 5, null, self::$testStorage))->wait() :
                self::$imagingApi->postSearchContextFindByTags(
                    new Requests\PostSearchContextFindByTagsRequest($tags, $this->searchContextId, 60, 5, null, self::$testStorage));

            $this->assertEquals(1, count($response->getResults()));
            $this->assertRegExp('/\b2\\.jpg\b/', $response->getResults()[0]->getImageId());
        });
    }
}