<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetImageCropRequest.php">
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
use Aspose\Imaging\Configuration;

/**
 * Request model for getImageCrop operation.
 */
class GetImageCropRequest extends ImagingRequest
{
    /**
     * Filename of an image.
     */
    public $name;
    
    /**
     * Resulting image format. Currently, BMP, PSD, JPG, TIFF, GIF, PNG, J2K and WEBP are supported.
     */
    public $format;
    
    /**
     * X position of start point for cropping rectangle.
     */
    public $x;
    
    /**
     * Y position of start point for cropping rectangle.
     */
    public $y;
    
    /**
     * Width of cropping rectangle
     */
    public $width;
    
    /**
     * Height of cropping rectangle.
     */
    public $height;
    
    /**
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public $out_path;
    
    /**
     * Folder with image to process.
     */
    public $folder;
    
    /**
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
    /**
     * Initializes a new instance of the GetImageCropRequest class.
     *  
     * @param string $name Filename of an image.
     * @param string $format Resulting image format. Currently, BMP, PSD, JPG, TIFF, GIF, PNG, J2K and WEBP are supported.
     * @param int $x X position of start point for cropping rectangle.
     * @param int $y Y position of start point for cropping rectangle.
     * @param int $width Width of cropping rectangle
     * @param int $height Height of cropping rectangle.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $format, $x, $y, $width, $height, $out_path = null, $folder = null, $storage = null)             
    {
        parent::__construct();
        $this->name = $name;
        $this->format = $format;
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
        $this->out_path = $out_path;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Filename of an image.
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of an image.
     *
     * @return 
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Resulting image format. Currently, BMP, PSD, JPG, TIFF, GIF, PNG, J2K and WEBP are supported.
     */
    public function get_format()
    {
        return $this->format;
    }

    /**
     * Resulting image format. Currently, BMP, PSD, JPG, TIFF, GIF, PNG, J2K and WEBP are supported.
     *
     * @return 
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }
    
    /**
     * X position of start point for cropping rectangle.
     */
    public function get_x()
    {
        return $this->x;
    }

    /**
     * X position of start point for cropping rectangle.
     *
     * @return 
     */
    public function set_x($value)
    {
        $this->x = $value;
        return $this;
    }
    
    /**
     * Y position of start point for cropping rectangle.
     */
    public function get_y()
    {
        return $this->y;
    }

    /**
     * Y position of start point for cropping rectangle.
     *
     * @return 
     */
    public function set_y($value)
    {
        $this->y = $value;
        return $this;
    }
    
    /**
     * Width of cropping rectangle
     */
    public function get_width()
    {
        return $this->width;
    }

    /**
     * Width of cropping rectangle
     *
     * @return 
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    
    /**
     * Height of cropping rectangle.
     */
    public function get_height()
    {
        return $this->height;
    }

    /**
     * Height of cropping rectangle.
     *
     * @return 
     */
    public function set_height($value)
    {
        $this->height = $value;
        return $this;
    }
    
    /**
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /**
     * Path to updated file (if this is empty, response contains streamed image).
     *
     * @return 
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
    
    /**
     * Folder with image to process.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * Folder with image to process.
     *
     * @return 
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    
    /**
     * Your Aspose Cloud Storage name.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * Your Aspose Cloud Storage name.
     *
     * @return 
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo(Configuration $config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getImageCrop');
        }
        // verify the required parameter 'format' is set
        if ($this->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getImageCrop');
        }
        // verify the required parameter 'x' is set
        if ($this->x === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x when calling getImageCrop');
        }
        // verify the required parameter 'y' is set
        if ($this->y === null) {
            throw new \InvalidArgumentException('Missing the required parameter $y when calling getImageCrop');
        }
        // verify the required parameter 'width' is set
        if ($this->width === null) {
            throw new \InvalidArgumentException('Missing the required parameter $width when calling getImageCrop');
        }
        // verify the required parameter 'height' is set
        if ($this->height === null) {
            throw new \InvalidArgumentException('Missing the required parameter $height when calling getImageCrop');
        }

        $resourcePath = '/imaging/{name}/crop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
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
        if ($this->out_path !== null) {
            $localName = lcfirst('outPath');
            $localValue = is_bool($this->out_path) ? ($this->out_path ? 'true' : 'false') : $this->out_path;
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
    
    
        $resourcePath = $this->parseURL($resourcePath, $queryParams, $config);

        // body params
        $httpBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }
        
        list($httpInfo) = [$resourcePath, $formParams, $queryParams, $headerParams, $httpBody, $multipart];
        return $httpInfo;        
    }
}
