<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetImageWmfRequest.php">
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

namespace Aspose\Imaging\Model\Requests;

use \InvalidArgumentException;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\ObjectSerializer;
use \Aspose\Imaging\Model\Requests\ImagingRequest;

/**
 * Request model for getImageWmf operation.
 */
class GetImageWmfRequest extends ImagingRequest
{
    /**
     * Filename of image.
     *
     * @var string
     */
    public $name;
    
    /**
     * Color of the background.
     *
     * @var string
     */
    public $bk_color;
    
    /**
     * Width of the page.
     *
     * @var int
     */
    public $page_width;
    
    /**
     * Height of the page.
     *
     * @var int
     */
    public $page_height;
    
    /**
     * Border width.
     *
     * @var int
     */
    public $border_x;
    
    /**
     * Border height.
     *
     * @var int
     */
    public $border_y;
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     *
     * @var bool
     */
    public $from_scratch;
    
    /**
     * Folder with image to process.
     *
     * @var string
     */
    public $folder;
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @var string
     */
    public $storage;
    
    /**
     * Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @var string
     */
    public $format;
    
    /**
     * Initializes a new instance of the GetImageWmfRequest class.
     *  
     * @param string $name Filename of image.
     * @param string $bk_color Color of the background.
     * @param int $page_width Width of the page.
     * @param int $page_height Height of the page.
     * @param int $border_x Border width.
     * @param int $border_y Border height.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     * @param string $format Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     */
    public function __construct($name, $bk_color, $page_width, $page_height, $border_x, $border_y, $from_scratch = null, $folder = null, $storage = null, $format = null)             
    {
        $this->name = $name;
        $this->bk_color = $bk_color;
        $this->page_width = $page_width;
        $this->page_height = $page_height;
        $this->border_x = $border_x;
        $this->border_y = $border_y;
        $this->from_scratch = $from_scratch;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->format = $format;
    }

    /**
     * Filename of image.
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of image.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Color of the background.
     *
     * @return string
     */
    public function get_bk_color()
    {
        return $this->bk_color;
    }

    /**
     * Color of the background.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_bk_color($value)
    {
        $this->bk_color = $value;
        return $this;
    }
    
    /**
     * Width of the page.
     *
     * @return int
     */
    public function get_page_width()
    {
        return $this->page_width;
    }

    /**
     * Width of the page.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_page_width($value)
    {
        $this->page_width = $value;
        return $this;
    }
    
    /**
     * Height of the page.
     *
     * @return int
     */
    public function get_page_height()
    {
        return $this->page_height;
    }

    /**
     * Height of the page.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_page_height($value)
    {
        $this->page_height = $value;
        return $this;
    }
    
    /**
     * Border width.
     *
     * @return int
     */
    public function get_border_x()
    {
        return $this->border_x;
    }

    /**
     * Border width.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_border_x($value)
    {
        $this->border_x = $value;
        return $this;
    }
    
    /**
     * Border height.
     *
     * @return int
     */
    public function get_border_y()
    {
        return $this->border_y;
    }

    /**
     * Border height.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_border_y($value)
    {
        $this->border_y = $value;
        return $this;
    }
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     *
     * @return bool
     */
    public function get_from_scratch()
    {
        return $this->from_scratch;
    }

    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_from_scratch($value)
    {
        $this->from_scratch = $value;
        return $this;
    }
    
    /**
     * Folder with image to process.
     *
     * @return string
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * Folder with image to process.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @return string
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * Your Aspose Cloud Storage name.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    
    /**
     * Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @return string
     */
    public function get_format()
    {
        return $this->format;
    }

    /**
     * Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getImageWmf');
        }
        // verify the required parameter 'bk_color' is set
        if ($this->bk_color === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bk_color when calling getImageWmf');
        }
        // verify the required parameter 'page_width' is set
        if ($this->page_width === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page_width when calling getImageWmf');
        }
        // verify the required parameter 'page_height' is set
        if ($this->page_height === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page_height when calling getImageWmf');
        }
        // verify the required parameter 'border_x' is set
        if ($this->border_x === null) {
            throw new \InvalidArgumentException('Missing the required parameter $border_x when calling getImageWmf');
        }
        // verify the required parameter 'border_y' is set
        if ($this->border_y === null) {
            throw new \InvalidArgumentException('Missing the required parameter $border_y when calling getImageWmf');
        }

        $resourcePath = '/imaging/{name}/wmf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }

        // query params
        if ($this->bk_color !== null) {
            $localName = lcfirst('bkColor');
            $localValue = is_bool($this->bk_color) ? ($this->bk_color ? 'true' : 'false') : $this->bk_color;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->page_width !== null) {
            $localName = lcfirst('pageWidth');
            $localValue = is_bool($this->page_width) ? ($this->page_width ? 'true' : 'false') : $this->page_width;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->page_height !== null) {
            $localName = lcfirst('pageHeight');
            $localValue = is_bool($this->page_height) ? ($this->page_height ? 'true' : 'false') : $this->page_height;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->border_x !== null) {
            $localName = lcfirst('borderX');
            $localValue = is_bool($this->border_x) ? ($this->border_x ? 'true' : 'false') : $this->border_x;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->border_y !== null) {
            $localName = lcfirst('borderY');
            $localValue = is_bool($this->border_y) ? ($this->border_y ? 'true' : 'false') : $this->border_y;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->from_scratch !== null) {
            $localName = lcfirst('fromScratch');
            $localValue = is_bool($this->from_scratch) ? ($this->from_scratch ? 'true' : 'false') : $this->from_scratch;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->folder !== null) {
            $localName = lcfirst('folder');
            $localValue = is_bool($this->folder) ? ($this->folder ? 'true' : 'false') : $this->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->storage !== null) {
            $localName = lcfirst('storage');
            $localValue = is_bool($this->storage) ? ($this->storage ? 'true' : 'false') : $this->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->format !== null) {
            $localName = lcfirst('format');
            $localValue = is_bool($this->format) ? ($this->format ? 'true' : 'false') : $this->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // body params
        $httpBody = null;
        
        $httpInfo = array(
            "resourcePath" => $resourcePath,
            "queryParams" => $queryParams,
            "headerParams" => $headerParams,
            "headers" => $headers,
            "httpBody" => $httpBody,
            "formParams" => $formParams,
        );
        
        return $httpInfo;        
    }
}
