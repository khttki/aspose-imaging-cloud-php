<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetImageJpgRequest.php">
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
 * Request model for getImageJpg operation.
 */
class GetImageJpgRequest extends ImagingRequest
{
    /**
     * Filename of image.
     */
    public $name;
    
    /**
     * Quality of an image from 0 to 100. Default is 75.
     */
    public $quality;
    
    /**
     * Compression type.
     */
    public $compression_type;
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     */
    public $from_scratch;
    
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
     * Initializes a new instance of the GetImageJpgRequest class.
     *  
     * @param string $name Filename of image.
     * @param int $quality Quality of an image from 0 to 100. Default is 75.
     * @param string $compression_type Compression type.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $quality = null, $compression_type = null, $from_scratch = null, $out_path = null, $folder = null, $storage = null)             
    {
        parent::__construct();
        $this->name = $name;
        $this->quality = $quality;
        $this->compression_type = $compression_type;
        $this->from_scratch = $from_scratch;
        $this->out_path = $out_path;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Filename of image.
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of image.
     *
     * @return 
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Quality of an image from 0 to 100. Default is 75.
     */
    public function get_quality()
    {
        return $this->quality;
    }

    /**
     * Quality of an image from 0 to 100. Default is 75.
     *
     * @return 
     */
    public function set_quality($value)
    {
        $this->quality = $value;
        return $this;
    }
    
    /**
     * Compression type.
     */
    public function get_compression_type()
    {
        return $this->compression_type;
    }

    /**
     * Compression type.
     *
     * @return 
     */
    public function set_compression_type($value)
    {
        $this->compression_type = $value;
        return $this;
    }
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     */
    public function get_from_scratch()
    {
        return $this->from_scratch;
    }

    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     *
     * @return 
     */
    public function set_from_scratch($value)
    {
        $this->from_scratch = $value;
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getImageJpg');
        }

        $resourcePath = '/imaging/{name}/jpg';
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
        if ($this->quality !== null) {
            $localName = lcfirst('quality');
            $localValue = is_bool($this->quality) ? ($this->quality ? 'true' : 'false') : $this->quality;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->compression_type !== null) {
            $localName = lcfirst('compressionType');
            $localValue = is_bool($this->compression_type) ? ($this->compression_type ? 'true' : 'false') : $this->compression_type;
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
