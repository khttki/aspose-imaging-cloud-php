<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageApiTester.php">
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

use \Aspose\Imaging\Tests\Base\ApiTester;

/**
 * Storage API tester.
 */
class StorageApiTester extends ApiTester
{

	/**
     * The original data folder
     * 
     * @var string 
     */
	protected static $originalDataFolder = "ImagingIntegrationTestData/Storage";

	/**
     * The cloud test folder prefix
     * 
     * @var string 
     */
	protected static $cloudTestFolderPrefix = "ImagingStorageCloudTestDotNet";

	/**
     * Get file with name
	 * 
     * @param \Aspose\Imaging\Model\StorageFile[] $files
     * @param string $name
     * @return \Aspose\Imaging\Model\StorageFile
     */
	protected function getFileWithName($files, $name)
	{
		$result = null;

		foreach ($files as $file) {
			if ($file->getName() === $name) {
				$result = $file;
				break;
			}
		}

		return $result;
	}

	/**
     * Get file version
	 * 
     * @param \Aspose\Imaging\Model\FileVersion[] $versions
     * @param bool $recent
     * @return \Aspose\Imaging\Model\FileVersion
     */
	protected function getFileVersion($versions, $recent)
	{
		$result = null;

		foreach ($versions as $version) {
				if ($version->getIsLatest() === $recent) {
					$result = $version;
					break;
				}
			}

		return $result;
	}

	/**
     * If string starts with certain chars
	 * 
     * @param string $haystack
     * @param bool $needle
     * @return bool
     */
	protected function startsWith($haystack, $needle)
	{
		return strncmp($haystack, $needle, strlen($needle)) === 0;
	}

	/**
     * If string ends with certain chars
	 * 
     * @param string $haystack
     * @param bool $needle
     * @return bool
     */
	protected function endsWith($haystack, $needle)
	{
		return $needle === '' || substr_compare($haystack, $needle, -strlen($needle)) === 0;
	}
}
