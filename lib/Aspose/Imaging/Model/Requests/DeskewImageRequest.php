<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeskewImageRequest.php">
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
 * Request model for deskewImage operation.
 */
class DeskewImageRequest extends ImagingRequest
{
    /**
     * Image file name.
     *
     * @var string
     */
    public $name;
    
    /**
     * Resize proportionally
     *
     * @var bool
     */
    public $resize_proportionally;
    
    /**
     * Background color
     *
     * @var string
     */
    public $bk_color;
    
    /**
     * Folder
     *
     * @var string
     */
    public $folder;
    
    /**
     * Storage
     *
     * @var string
     */
    public $storage;
    
    /**
     * Initializes a new instance of the DeskewImageRequest class.
     *  
     * @param string $name Image file name.
     * @param bool $resize_proportionally Resize proportionally
     * @param string $bk_color Background color
     * @param string $folder Folder
     * @param string $storage Storage
     */
    public function __construct($name, $resize_proportionally, $bk_color = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->resize_proportionally = $resize_proportionally;
        $this->bk_color = $bk_color;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Image file name.
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Image file name.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Resize proportionally
     *
     * @return bool
     */
    public function get_resize_proportionally()
    {
        return $this->resize_proportionally;
    }

    /**
     * Resize proportionally
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_resize_proportionally($value)
    {
        $this->resize_proportionally = $value;
        return $this;
    }
    
    /**
     * Background color
     *
     * @return string
     */
    public function get_bk_color()
    {
        return $this->bk_color;
    }

    /**
     * Background color
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_bk_color($value)
    {
        $this->bk_color = $value;
        return $this;
    }
    
    /**
     * Folder
     *
     * @return string
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * Folder
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    
    /**
     * Storage
     *
     * @return string
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * Storage
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deskewImage');
        }
        // verify the required parameter 'resize_proportionally' is set
        if ($this->resize_proportionally === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resize_proportionally when calling deskewImage');
        }

        $resourcePath = '/imaging/{name}/deskew';
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
        if ($this->resize_proportionally !== null) {
            $localName = lcfirst('resizeProportionally');
            $localValue = is_bool($this->resize_proportionally) ? ($this->resize_proportionally ? 'true' : 'false') : $this->resize_proportionally;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
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
