<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FindDuplicatesTest.php">
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

namespace Aspose\Imaging\Tests\Api\AI;

use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing image duplicates search
 * 
 * @group AI
 * @group v3.0
 */
class FindDuplicatesTest extends TestImagingAiBase
{
    /**
     * Comparable image
     *
     * @var string
     */
    private $comparableImage = "ComparableImage.jpg";

    /**
     * Comparable image with <15% similarity
     *
     * @var string
     */
    private $comparingImageSimilarLess15 = "ComparingImageSimilar15.jpg";

    /**
     * Comparable image with >75% similarity
     *
     * @var string
     */
    private $comparingImageSimilarMore75 = "ComparingImageSimilar75.jpg";

    /**
     * Tests image duplicates search
     *
     * @test
     * 
     * @return void
     */
    public function findDuplicatesTest()
    {
        $this->runTestWithLogging("findDuplicatesTest", function()
        {
            $this->addImageFeaturesToSearchContext(self::$originalDataFolder . "/FindSimilar", true);

            $image = $this->getStoragePath($this->comparableImage);
            $this->addImageFeaturesToSearchContext($image);

            $image = $this->getStoragePath($this->comparingImageSimilarLess15);
            $this->addImageFeaturesToSearchContext($image);

            $image = $this->getStoragePath($this->comparingImageSimilarMore75);
            $this->addImageFeaturesToSearchContext($image);

            $response = 
                self::$imagingApi->findImageDuplicatesAsync(
                    new Requests\FindImageDuplicatesRequest($this->searchContextId, 80, null, self::$testStorage))->wait();
            $this->assertEquals(1, count($response->getDuplicates()));
        });
    }
}