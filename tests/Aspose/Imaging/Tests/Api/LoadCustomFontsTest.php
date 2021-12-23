<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LoadCustomFontsTest.php">
 *   Copyright (c) 2018-2021 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\Imaging\Tests\Api;

use \Aspose\Imaging\Tests\Base\ApiTester;
use \Aspose\Imaging\Model\Requests;

/**
 * Class for testing using custom fonts.
 * 
 * @group Imaging
 * @group v3.0
 * @group LoadCustomFonts
 */
class LoadCustomFontsTests extends ApiTester
{
	/**
     * Original test data folder
     * 
     * @var string 
     */
    protected static $originalDataFolder = "ImagingIntegrationTestData/UseCases";
	
	/**
	 * Test UsingCustomFontsForVectorImage.
	 *  
	 * @test
	 */    
    public function usingCustomFontsForVectorImageTest()
    {
        $name = "image.emz";
        $folder = self::$tempFolder;
        $storage = self::$testStorage;
        $format = "png";       
		
		$this->copyInputFileToTestFolder($name, $folder, $storage);
		
		$this->getRequestTestInternal(
			"usingCustomFontsForVectorImageTest", 
			"Input image: " . $name . "; Output format: " . $format,
			$name,
			function() use ($name, $format, $folder, $storage)
			{
				$request = new Requests\ConvertImageRequest($name, $format, $folder, $storage);
				return self::$imagingApi->convertImageAsync($request)->wait();
			},
			function($originalProperties, $resultProperties, $resultStream)
			{
				$this->assertLessThan(100, abs($resultStream.Length - 11454));
			},
			$folder,
			$storage);			          
    }   
	
	 /**
     * Checks if input file exists.
     *
     * @param string $inputFileName Name of the input file.
     * @return bool
     */
    protected function checkInputFileExists($inputFileName)
    {
		if ($inputFileName == "image.emz") {
			return true;
		}
		
		return false;
	}
	
	/**
     * Copies original input file to test folder in cloud
     * @param string $inputFileName The input file name
     * @param string $folder The folder
     * @param string $storage The storage
     */
    protected function copyInputFileToTestFolder($inputFileName, $folder, $storage)
    {   
        if (!self::$imagingApi->objectExists(new Requests\ObjectExistsRequest($folder . "/" . $inputFileName, $storage))->getExists())
        {
            self::$imagingApi->copyFile(
                new Requests\CopyFileRequest(self::$originalDataFolder . "/" . $inputFileName, $folder . "/" . $inputFileName, $storage, $storage));
        }
    }
}
