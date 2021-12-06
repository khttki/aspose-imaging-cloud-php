<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExportImage.php">
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


namespace Aspose\Imaging\Examples;

use Aspose\Imaging\Model\Requests\ConvertImageRequest;


/**
 * Load custom fonts example.
 */
class LoadCustomFonts extends ImagingBase
{
    function __construct($imagingApi)
    {
        parent::__construct($imagingApi);
        $this->PrintHeader("Load custom fonts example");
    }
    
    /**
     * Gets the name of the example image file.
     * @return string
     */
    protected function GetSampleImageFileName()
    {
        return "ImageWithCustomFonts.emz";
    }

    /**
     * Using custom fonts for vector image conversion example.
     */
    public function UsingCustomFontsForVectorImageConversion()
    {
        echo "Using custom fonts for vector image conversion" . PHP_EOL;

        $this->UploadSampleImageToCloud();
		
		// custom fonts should be loaded to storage to 'Fonts' folder
        // 'Fonts' folder should be placed to the root of the cloud storage
        $this->UploadFontsToCloud();

        // Please refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-Export(SaveAs)
        // for possible output formats
        $format = "png";
        $folder = $this->CloudPath; // Input file is saved at the Examples folder in the storage
        $storage = null; // Cloud Storage name

        $request = new ConvertImageRequest($this->GetSampleImageFileName(), $format, $folder, $storage);

        echo "Call Convert with params: format: ${format}" . PHP_EOL;

        $updatedImage = self::$imagingApi->convertImage($request);     
		$this->SaveUpdatedSampleImageToOutput($updatedImage, true, $format);

        echo PHP_EOL;
    }
	
	
   /**
	*    Uploads custom fonts to cloud.
	*/
	protected function UploadFontsToCloud()
	{
		$fontsFolder =  $this->ImagingBase::GetExampleImagesFolder() . DIRECTORY_SEPARATOR . "Fonts";
		echo "Fonts folder: $fontsFolder" . PHP_EOL;
		$fileList = glob($fontsFolder + "/*.ttf", GLOB_BRACE);
		foreach($fileList as $filename){
			 echo "File: $filename" . PHP_EOL;
		     $fontContent = file_get_contents($filename);
		     UploadToCloud("Fonts" . DIRECTORY_SEPARATOR . basename($filename), fontContent);
			 echo "Uploaded font" . PHP_EOL;
		}   
	}		
	

    /**
     * Uploads the file to cloud.
     * @param $fileName string Name of the file.
     * @param $file string The file.
     * @return void
     */
    protected function UploadFileToCloud($fileName, $file)
    {
        $request = new UploadFileRequest($this-> $fileName, $file);
        $response = self::$imagingApi->uploadFile($request);
        echo ($response->getErrors() == null || count($response->getErrors()) == 0) ?
            "File " . $fileName . " is uploaded to cloud storage" :
            "Uploading errors count: " . count($response->getErrors());
        echo PHP_EOL;
    }

}

