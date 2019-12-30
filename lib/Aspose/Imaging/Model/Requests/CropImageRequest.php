<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CropImageRequest.php">
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

namespace Aspose\Imaging\Model\Requests;

use \InvalidArgumentException;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\ObjectSerializer;
use \Aspose\Imaging\Model\Requests\ImagingRequest;

/**
 * Request model for cropImage operation.
 */
class CropImageRequest extends ImagingRequest
{
    /**
     * Filename of an image.
     *
     * @var string
     */
    public $name;
    
    /**
     * X position of start point for cropping rectangle.
     *
     * @var int
     */
    public $x;
    
    /**
     * Y position of start point for cropping rectangle.
     *
     * @var int
     */
    public $y;
    
    /**
     * Width of cropping rectangle
     *
     * @var int
     */
    public $width;
    
    /**
     * Height of cropping rectangle.
     *
     * @var int
     */
    public $height;
    
    /**
     * Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @var string
     */
    public $format;
    
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
     * Initializes a new instance of the CropImageRequest class.
     *  
     * @param string $name Filename of an image.
     * @param int $x X position of start point for cropping rectangle.
     * @param int $y Y position of start point for cropping rectangle.
     * @param int $width Width of cropping rectangle
     * @param int $height Height of cropping rectangle.
     * @param string $format Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $x, $y, $width, $height, $format = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Filename of an image.
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of an image.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * X position of start point for cropping rectangle.
     *
     * @return int
     */
    public function get_x()
    {
        return $this->x;
    }

    /**
     * X position of start point for cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_x($value)
    {
        $this->x = $value;
        return $this;
    }
    
    /**
     * Y position of start point for cropping rectangle.
     *
     * @return int
     */
    public function get_y()
    {
        return $this->y;
    }

    /**
     * Y position of start point for cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_y($value)
    {
        $this->y = $value;
        return $this;
    }
    
    /**
     * Width of cropping rectangle
     *
     * @return int
     */
    public function get_width()
    {
        return $this->width;
    }

    /**
     * Width of cropping rectangle
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    
    /**
     * Height of cropping rectangle.
     *
     * @return int
     */
    public function get_height()
    {
        return $this->height;
    }

    /**
     * Height of cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_height($value)
    {
        $this->height = $value;
        return $this;
    }
    
    /**
     * Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @return string
     */
    public function get_format()
    {
        return $this->format;
    }

    /**
     * Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_format($value)
    {
        $this->format = $value;
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
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling cropImage');
        }
        // verify the required parameter 'x' is set
        if ($this->x === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x when calling cropImage');
        }
        // verify the required parameter 'y' is set
        if ($this->y === null) {
            throw new \InvalidArgumentException('Missing the required parameter $y when calling cropImage');
        }
        // verify the required parameter 'width' is set
        if ($this->width === null) {
            throw new \InvalidArgumentException('Missing the required parameter $width when calling cropImage');
        }
        // verify the required parameter 'height' is set
        if ($this->height === null) {
            throw new \InvalidArgumentException('Missing the required parameter $height when calling cropImage');
        }

        $resourcePath = '/imaging/{name}/crop';
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
        if ($this->x !== null) {
            $localName = lcfirst('x');
            $localValue = is_bool($this->x) ? ($this->x ? 'true' : 'false') : $this->x;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->y !== null) {
            $localName = lcfirst('y');
            $localValue = is_bool($this->y) ? ($this->y ? 'true' : 'false') : $this->y;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->width !== null) {
            $localName = lcfirst('width');
            $localValue = is_bool($this->width) ? ($this->width ? 'true' : 'false') : $this->width;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->height !== null) {
            $localName = lcfirst('height');
            $localValue = is_bool($this->height) ? ($this->height ? 'true' : 'false') : $this->height;
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
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // body params
        $httpBody = null;

        $headers = $this->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        
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
