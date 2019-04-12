<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FolderApiTests.php">
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
 * Specific folder API tests for Storage.
 * 
 * @group Storage
 * @group Folder
 * @group v3.0
 */
class FolderApiTests extends StorageTester {

    /**
     * 
     * Create folder test
     * 
     * @test
     * 
     * @return void
     */
    public function createFolderTest() {
        $folder = self::$tempFolder . "/DummyFolder";
        try {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());

            self::$imagingApi->createFolderAsync(new Requests\CreateFolderRequest($folder, self::$testStorage))->wait();
            $this->assertTrue(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());
        } finally {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function copyFolderTest() {
        $folder = self::$tempFolder . "/Storage";
        try {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());

            self::$imagingApi->copyFolderAsync(new Requests\CopyFolderRequest(self::$originalDataFolder, $folder, self::$testStorage, self::$testStorage))->wait();
            $this->assertTrue(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());
            $originalFiles = self::$imagingApi
                    ->getFilesListAsync(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->wait()->getValue();
            $copiedFiles = self::$imagingApi->getFilesListAsync(new Requests\GetFilesListRequest($folder, self::$testStorage))
                    ->wait()->getValue();
            $this->assertTrue(sizeof($originalFiles) > 0);
            $this->assertTrue(sizeof($copiedFiles) > 0);
            $this->assertEquals(sizeof($originalFiles), sizeof($copiedFiles));
            $count = sizeof($originalFiles);
            for ($x = 0; $x < $count; $x++) {
                $this->assertEquals($originalFiles[$x]->getIsFolder(), $copiedFiles[$x]->getIsFolder());
                $this->assertEquals($originalFiles[$x]->getName(), $copiedFiles[$x]->getName());
                $this->assertEquals($originalFiles[$x]->getSize(), $copiedFiles[$x]->getSize());
            }
        } finally {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function moveFolderTest() {
        $tmpFolder = self::$tempFolder . "/Temp";
        $folder = self::$tempFolder . "/Storage";
        try {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($tmpFolder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($tmpFolder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(
                    self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($tmpFolder, self::$testStorage, null))->wait()->getExists());
            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());

            self::$imagingApi->copyFolderAsync(new Requests\CopyFolderRequest(self::$originalDataFolder, $tmpFolder, self::$testStorage, self::$testStorage))->wait();
            $this->assertTrue(
                    self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($tmpFolder, self::$testStorage, null))->wait()->getExists());

            self::$imagingApi->moveFolderAsync(new Requests\MoveFolderRequest($tmpFolder, $folder, self::$testStorage, self::$testStorage))->wait();
            $this->assertFalse(
                    self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($tmpFolder, self::$testStorage, null))->wait()->getExists());
            $this->assertTrue(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());

            $originalFiles = self::$imagingApi
                    ->getFilesListAsync(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->wait()->getValue();
            $copiedFiles = self::$imagingApi->getFilesListAsync(new Requests\GetFilesListRequest($folder, self::$testStorage))
                    ->wait()->getValue();
            $this->assertTrue(sizeof($originalFiles) > 0);
            $this->assertTrue(sizeof($copiedFiles) > 0);
            $this->assertEquals(sizeof($originalFiles), sizeof($copiedFiles));
            $count = sizeof($originalFiles);
            for ($x = 0; $x < $count; $x++) {
                $this->assertEquals($originalFiles[$x]->getIsFolder(), $copiedFiles[$x]->getIsFolder());
                $this->assertEquals($originalFiles[$x]->getName(), $copiedFiles[$x]->getName());
                $this->assertEquals($originalFiles[$x]->getSize(), $copiedFiles[$x]->getSize());
            }
        } finally {
            if (self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists()) {
                self::$imagingApi->deleteFolderAsync(new Requests\DeleteFolderRequest($folder, self::$testStorage, true))->wait();
            }

            $this->assertFalse(self::$imagingApi->objectExistsAsync(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->wait()->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function filesListTest() {
        $files = self::$imagingApi->getFilesListAsync(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))
                ->wait()->getValue();
        $this->assertEquals(3, sizeof($files));
        $folder1 = $this->getFileWithName($files, "Folder1");
        $this->assertNotNull($folder1);
        $this->assertTrue($folder1->getIsFolder());
        $this->assertTrue($this->endsWith(trim($folder1->getPath(), "/"), $folder1->getName()));
        $folder2 = $this->getFileWithName($files, "Folder2");
        $this->assertNotNull($folder2);
        $this->assertTrue($folder2->getIsFolder());
        $this->assertTrue($this->endsWith(trim($folder2->getPath(), "/"), $folder2->getName()));
        $storageFile = $this->getFileWithName($files, "Storage.txt");
        $this->assertNotNull($storageFile);
        $this->assertFalse($storageFile->getIsFolder());
        $this->assertTrue($this->endsWith(trim($storageFile->getPath(), "/"), $storageFile->getName()));
        $this->assertEquals($storageFile->getSize(),
                strlen(trim($storageFile->getPath(), "/")));

        $files = self::$imagingApi
                ->getFilesListAsync(new Requests\GetFilesListRequest(self::$originalDataFolder . "/" . $folder1->getName(), self::$testStorage))
                ->wait()->getValue();
        $this->assertEquals(1, sizeof($files));
        $folder1File = $this->getFileWithName($files, "Folder1.txt");
        $this->assertNotNull($folder1File);
        $this->assertFalse($folder1File->getIsFolder());
        $this->assertTrue($this->endsWith(trim($folder1File->getPath(), "/"), $folder1File->getName()));
        $this->assertEquals($folder1File->getSize(),
            strlen(trim($folder1File->getPath(), "/")));

        $files = self::$imagingApi
                ->getFilesListAsync(new Requests\GetFilesListRequest(self::$originalDataFolder . "/" . $folder2->getName(), self::$testStorage))
                ->wait()->getValue();
        $this->assertEquals(2, sizeof($files));
        $folder2File = $this->getFileWithName($files, "Folder2.txt");
        $this->assertNotNull($folder2File);
        $this->assertFalse($folder2File->getIsFolder());
        $this->assertTrue($this->endsWith(trim($folder2File->getPath(), "/"), $folder2File->getName()));
        $this->assertEquals($folder2File->getSize(),
          strlen(trim($folder1File->getPath(), "/")));
        $folder3 = $this->getFileWithName($files, "Folder3");
        $this->assertNotNull($folder3);
        $this->assertTrue($folder3->getIsFolder());
        $this->assertTrue($this->endsWith(trim($folder3->getPath(), "/"), $folder3->getName()));

        $files = self::$imagingApi
                ->getFilesListAsync(new Requests\GetFilesListRequest(
                        self::$originalDataFolder . "/" . $folder2->getName() . "/" . $folder3->getName(), self::$testStorage))
                ->wait()->getValue();
        $this->assertEquals(1, sizeof($files));
        $folder3File = $this->getFileWithName($files, "Folder3.txt");
        $this->assertNotNull($folder3File);
        $this->assertFalse($folder3File->getIsFolder());

        $this->assertTrue($this->endsWith(trim($folder3File->getPath(), "/"), $folder3File->getName()));
        $this->assertEquals($folder3File->getSize(),
                strlen(trim($folder3File->getPath(), "/")));
    }
}