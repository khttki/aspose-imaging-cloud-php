<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FileApiTests.php">
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
 * Specific file API tests for Storage.
 * 
 * @group Storage
 * @group File
 * @group v3.0
 */
class FileApiTests extends StorageApiTester {
    
    /**
     * @test
     * 
     * @return void
     */
    public function copyDownloadFileTest() {
        $folder = self::$tempFolder . "/Storage";
        $file = "Storage.txt";
        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file, $folder . "/" . $file, self::$testStorage,
                    self::$testStorage, null));
            $existResponse = self::$imagingApi
                    ->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertNotNull($existResponse);
            $this->assertFalse($existResponse->getIsFolder());
            $this->assertTrue($existResponse->getExists());

            $originalFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->getValue(), $file);
            $copiedFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest($folder, self::$testStorage))->getValue(), $file);
            $this->assertEquals($originalFileInfo->getSize(), $copiedFileInfo->getSize());

            $originalFile = self::$imagingApi
                    ->downloadFile(new Requests\DownloadFileRequest(self::$originalDataFolder . "/" . $file, self::$testStorage, null))->getContents();
            $copiedFile = self::$imagingApi
                    ->downloadFile(new Requests\DownloadFileRequest($folder . "/" . $file, self::$testStorage, null))->getContents();
            $this->assertEquals($originalFile, $copiedFile);
            $this->assertEquals($originalFile, trim($originalFileInfo->getPath(), "/"));
            $this->assertEquals(str_replace(self::$originalDataFolder, $folder, $originalFile),
                trim($copiedFileInfo->getPath(), "/"));
        } finally {
            self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null))
                    ->getExists());

            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function moveFileTest() {
        $folder = self::$tempFolder . "/Storage";
        $file = "Storage.txt";
        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file, $folder . "/" . $file . ".copied",
                    self::$testStorage, self::$testStorage, null));
            $existResponse = self::$imagingApi
                    ->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file . ".copied", self::$testStorage, null));
            $this->assertNotNull($existResponse);
            $this->assertFalse($existResponse->getIsFolder());
            $this->assertTrue($existResponse->getExists());

            self::$imagingApi->moveFile(new Requests\MoveFileRequest($folder . "/" . $file . ".copied", $folder . "/" . $file, self::$testStorage,
                    self::$testStorage, null));
            $this->assertFalse(
                    self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file . ".copied", self::$testStorage, null))
                            ->getExists());
            $existResponse = self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertNotNull($existResponse);
            $this->assertFalse($existResponse->getIsFolder());
            $this->assertTrue($existResponse->getExists());

            $originalFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->getValue(), $file);
            $movedFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest($folder, self::$testStorage))->getValue(), $file);
            $this->assertEquals($originalFileInfo->getSize(), $movedFileInfo->getSize());

            $originalFile = self::$imagingApi
                    ->downloadFile(new Requests\DownloadFileRequest(self::$originalDataFolder . "/" . $file, self::$testStorage, null))->getContents();
            $movedFile = self::$imagingApi->downloadFile(new Requests\DownloadFileRequest($folder . "/" . $file, self::$testStorage, null))->getContents();
            $this->assertEquals($originalFile, $movedFile);
            $this->assertEquals($originalFile, trim($originalFileInfo->getPath(), "/"));
            $this->assertEquals(str_replace(self::$originalDataFolder, $folder, $originalFile),
                trim($movedFileInfo->getPath(), "/"));
        } finally {
            self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null))
                    ->getExists());

            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function uploadFileTest() {
        $folder = self::$tempFolder . "/Storage";
        $file = "Storage.txt";
        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            $originalFile = self::$imagingApi
                    ->downloadFile(new Requests\DownloadFileRequest(self::$originalDataFolder . "/" . $file, self::$testStorage, null))->getContents();
            $result = self::$imagingApi
                    ->uploadFile(new Requests\UploadFileRequest($folder . "/" . $file, $originalFile, self::$testStorage));
            $this->assertNotNull($result);
            $this->assertTrue($result->getErrors() === null || sizeof($result->getErrors()) === 0);
            $this->assertNotNull($result->getUploaded());
            $this->assertEquals(1, sizeof($result->getUploaded()));
            $this->assertEquals($file, $result->getUploaded()[0]);

            $existResponse = self::$imagingApi
                    ->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertNotNull($existResponse);
            $this->assertFalse($existResponse->getIsFolder());
            $this->assertTrue($existResponse->getExists());

            $originalFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->getValue(), $file);
            $uploadedFileInfo = $this->getFileWithName(
                    self::$imagingApi->getFilesList(new Requests\GetFilesListRequest($folder, self::$testStorage))->getValue(), $file);
            $this->assertEquals($originalFileInfo->getSize(), $uploadedFileInfo->getSize());

            $uploadedFile = self::$imagingApi
                    ->downloadFile(new Requests\DownloadFileRequest($folder . "/" . $file, self::$testStorage, null))->getContents();
            $this->assertEquals(strlen($originalFile), $originalFileInfo->getSize());
            $this->assertEquals($originalFile, $uploadedFile);
            $this->assertEquals($originalFile, trim($originalFileInfo->getPath(), "/"));
            $this->assertEquals(str_replace(self::$originalDataFolder, $folder, $originalFile),
                trim($uploadedFileInfo->getPath(), "/"));

        } finally {
            self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($folder . "/" . $file, self::$testStorage, null));
            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file, self::$testStorage, null))
                    ->getExists());

            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function fileVersionsCreateTest() {
        $folder = self::$tempFolder . "/Storage";
        $file1 = "Storage.txt";
        $file2 = "Folder1/Folder1.txt";

        $file1Size = $this->getFileWithName(
                self::$imagingApi->getFilesList(new Requests\GetFilesListRequest(self::$originalDataFolder, self::$testStorage))->getValue(), $file1)
                        ->getSize();
        $file2Size = $this->getFileWithName(self::$imagingApi
                ->getFilesList(new Requests\GetFilesListRequest(self::$originalDataFolder . "/Folder1", self::$testStorage))->getValue(),
                "Folder1.txt")->getSize();

        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))->getValue();
            $this->assertEquals(2, sizeof($versions));
            $recentVersion = $this->getFileVersion($versions, true);
            $oldVersion = $this->getFileVersion($versions, false);
            $recentVersionSize = $recentVersion->getSize();
            $oldVersionSize = $oldVersion->getSize();
            $this->assertNotEquals($recentVersionSize, $oldVersionSize);
            $this->assertEquals($oldVersionSize, $file1Size);
            $this->assertEquals($recentVersionSize, $file2Size);
        } finally {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }
        }
    }
    
    /**
     * @test
     * 
     * @return void
     */
    public function fileVersionsDownloadTest() {
        $folder = self::$tempFolder . "/Storage";
        $file1 = "Storage.txt";
        $file2 = "Folder1/Folder1.txt";

        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))->getValue();
            $recentVersion = $this->getFileVersion($versions, true);
            $oldVersion = $this->getFileVersion($versions, false);
            $recentVersionSize = $recentVersion->getSize();
            $oldVersionSize = $oldVersion->getSize();

            $oldFile = self::$imagingApi->downloadFile(
                    new Requests\DownloadFileRequest($folder . "/" . $file1, self::$testStorage, $oldVersion->getVersionId()))->getContents();
            $this->assertEquals($oldVersionSize, strlen($oldFile));

            $recentFile = self::$imagingApi->downloadFile(
                    new Requests\DownloadFileRequest($folder . "/" . $file1, self::$testStorage, $recentVersion->getVersionId()))->getContents();
            $this->assertEquals($recentVersionSize, strlen($recentFile));
        } finally {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function fileVersionsCopyTest() {
        $folder = self::$tempFolder . "/Storage";
        $file1 = "Storage.txt";
        $file2 = "Folder1/Folder1.txt";

        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))->getValue();
            $recentVersion = $this->getFileVersion($versions, true);
            $oldVersion = $this->getFileVersion($versions, false);

            self::$imagingApi->copyFile(new Requests\CopyFileRequest($folder . "/" . $file1, $folder . "/" . $file1 . ".recent", self::$testStorage,
                    self::$testStorage, $recentVersion->getVersionId()));
            $copiedVersions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1 . ".recent", self::$testStorage))
                    ->getValue();
            $this->assertEquals(1, sizeof($copiedVersions));
            $this->assertTrue($copiedVersions[0]->getIsLatest());
            $this->assertEquals($recentVersion->getSize(), $copiedVersions[0]->getSize());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest($folder . "/" . $file1, $folder . "/" . $file1 . ".old", self::$testStorage,
                    self::$testStorage, $oldVersion->getVersionId()));
            $copiedVersions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1 . ".old", self::$testStorage))->getValue();
            $this->assertEquals(1, sizeof($copiedVersions));
            $this->assertTrue($copiedVersions[0]->getIsLatest());
            $this->assertEquals($oldVersion->getSize(), $copiedVersions[0]->getSize());
        } finally {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function fileVersionsMoveTest() {
        $folder = self::$tempFolder . "/Storage";
        $file1 = "Storage.txt";
        $file2 = "Folder1/Folder1.txt";

        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))->getValue();
            $recentVersion = $this->getFileVersion($versions, true);

            self::$imagingApi->moveFile(new Requests\MoveFileRequest($folder . "/" . $file1, $folder . "/" . $file1 . ".recent", self::$testStorage,
                    self::$testStorage, $recentVersion->getVersionId()));
            $copiedVersions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1 . ".recent", self::$testStorage))
                    ->getValue();
            $this->assertEquals(1, sizeof($copiedVersions));
            $this->assertTrue($copiedVersions[0]->getIsLatest());
            $this->assertEquals($recentVersion->getSize(), $copiedVersions[0]->getSize());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))
                    ->getValue();
            $oldVersion = $this->getFileVersion($versions, false);
            self::$imagingApi->moveFile(new Requests\MoveFileRequest($folder . "/" . $file1, $folder . "/" . $file1 . ".old", self::$testStorage,
                    self::$testStorage, $oldVersion->getVersionId()));
            $copiedVersions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1 . ".old", self::$testStorage))->getValue();
            $this->assertEquals(1, sizeof($copiedVersions));
            $this->assertTrue($copiedVersions[0]->getIsLatest());
            $this->assertEquals($oldVersion->getSize(), $copiedVersions[0]->getSize());
        } finally {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }
        }
    }

    /**
     * @test
     * 
     * @return void
     */
    public function fileVersionsDeleteTest() {
        $folder = self::$tempFolder . "/Storage";
        $file1 = "Storage.txt";
        $file2 = "Folder1/Folder1.txt";

        try {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }

            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists());

            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file1, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            self::$imagingApi->copyFile(new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $file2, $folder . "/" . $file1, self::$testStorage,
                    self::$testStorage, null));
            $versions = self::$imagingApi
                    ->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))->getValue();
            $recentVersion = $this->getFileVersion($versions, true);
            $oldVersion = $this->getFileVersion($versions, false);
            $this->assertTrue(self::$imagingApi
                    ->objectExists(
                            new Requests\ObjectExistsRequest($folder . "/" . $file1, self::$testStorage, $recentVersion->getVersionId()))
                    ->getExists());
            $this->assertTrue(self::$imagingApi
                    ->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file1, self::$testStorage, $oldVersion->getVersionId()))
                    ->getExists());

            self::$imagingApi
                    ->deleteFile(new Requests\DeleteFileRequest($folder . "/" . $file1, self::$testStorage, $recentVersion->getVersionId()));
            $versions = self::$imagingApi->getFileVersions(new Requests\GetFileVersionsRequest($folder . "/" . $file1, self::$testStorage))
                    ->getValue();
            $this->assertFalse(self::$imagingApi
                    ->objectExists(
                            new Requests\ObjectExistsRequest($folder . "/" . $file1, self::$testStorage, $recentVersion->getVersionId()))
                    ->getExists());
            $this->assertTrue(self::$imagingApi
                    ->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file1, self::$testStorage, $oldVersion->getVersionId()))
                    ->getExists());
            $this->assertEquals(1, sizeof($versions));
            $this->assertEquals($oldVersion->getSize(), $versions[0]->getSize());

            self::$imagingApi->deleteFile(new Requests\DeleteFileRequest($folder . "/" . $file1, self::$testStorage, $oldVersion->getVersionId()));
            $this->assertFalse(self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $file1, self::$testStorage, null))
                    ->getExists());
        } finally {
            if (self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder, self::$testStorage, null))->getExists()) {
                self::$imagingApi->deleteFolder(new Requests\DeleteFolderRequest($folder, self::$testStorage, true));
            }
        }
    }
}
