<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageApiTests.php">
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

namespace Aspose\Imaging\Tests\Api\Storage;

use \Aspose\Imaging\Model\Requests;

/**
 * Specific Storage API tests.
 * 
 * @group Storage
 * @group v3.0
 */
class StorageApiTests extends StorageApiTester {

    /**
     * @test
     * 
     * @return void
     */
    public function getDiscUsageTest()  {
        try {
            $discUsage = self::$imagingApi->getDiscUsageAsync(new Requests\GetDiscUsageRequest(self::$testStorage))->wait();
            $this->assertTrue($discUsage->getUsedSize() < $discUsage->getTotalSize());
            $this->assertTrue($discUsage->getTotalSize() > 0);
            $this->assertTrue($discUsage->getUsedSize() > 0);
        } catch (\Aspose\Imaging\ApiException $ex) {
            $this->assertTrue($ex->getCode() === 501);
        }
    }

    /**
     * @test
     * 
     * @return void
    */
    public function storageExistsTest()  {
        $storageExists = self::$imagingApi->storageExistsAsync(new Requests\StorageExistsRequest(self::$testStorage))->wait();
        $this->assertTrue($storageExists->getExists());
    }

    /**
     * @test
     * 
     * @return void
    */
    public function storageDoesNotExistTest()  {
        $storageExists = self::$imagingApi->storageExistsAsync(new Requests\StorageExistsRequest("NotExistingStorage"))->wait();
        $this->assertFalse($storageExists->getExists());
    }
}
