<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.php">
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
 * Request model for copyFile operation.
 */
class CopyFileRequest extends ImagingRequest
{
    /**
     * Source file path e.g. '/folder/file.ext'
     *
     * @var string
     */
    public $src_path;
    
    /**
     * Destination file path
     *
     * @var string
     */
    public $dest_path;
    
    /**
     * Source storage name
     *
     * @var string
     */
    public $src_storage_name;
    
    /**
     * Destination storage name
     *
     * @var string
     */
    public $dest_storage_name;
    
    /**
     * File version ID to copy
     *
     * @var string
     */
    public $version_id;
    
    /**
     * Initializes a new instance of the CopyFileRequest class.
     *  
     * @param string $src_path Source file path e.g. '/folder/file.ext'
     * @param string $dest_path Destination file path
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     * @param string $version_id File version ID to copy
     */
    public function __construct($src_path, $dest_path, $src_storage_name = null, $dest_storage_name = null, $version_id = null)             
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
        $this->version_id = $version_id;
    }

    /**
     * Source file path e.g. '/folder/file.ext'
     *
     * @return string
     */
    public function get_src_path()
    {
        return $this->src_path;
    }

    /**
     * Source file path e.g. '/folder/file.ext'
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_src_path($value)
    {
        $this->src_path = $value;
        return $this;
    }
    
    /**
     * Destination file path
     *
     * @return string
     */
    public function get_dest_path()
    {
        return $this->dest_path;
    }

    /**
     * Destination file path
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_dest_path($value)
    {
        $this->dest_path = $value;
        return $this;
    }
    
    /**
     * Source storage name
     *
     * @return string
     */
    public function get_src_storage_name()
    {
        return $this->src_storage_name;
    }

    /**
     * Source storage name
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_src_storage_name($value)
    {
        $this->src_storage_name = $value;
        return $this;
    }
    
    /**
     * Destination storage name
     *
     * @return string
     */
    public function get_dest_storage_name()
    {
        return $this->dest_storage_name;
    }

    /**
     * Destination storage name
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_dest_storage_name($value)
    {
        $this->dest_storage_name = $value;
        return $this;
    }
    
    /**
     * File version ID to copy
     *
     * @return string
     */
    public function get_version_id()
    {
        return $this->version_id;
    }

    /**
     * File version ID to copy
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_version_id($value)
    {
        $this->version_id = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'src_path' is set
        if ($this->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling copyFile');
        }
        // verify the required parameter 'dest_path' is set
        if ($this->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling copyFile');
        }

        $resourcePath = '/imaging/storage/file/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->src_path), $resourcePath);
        }

        // query params
        if ($this->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($this->dest_path) ? ($this->dest_path ? 'true' : 'false') : $this->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($this->src_storage_name) ? ($this->src_storage_name ? 'true' : 'false') : $this->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($this->dest_storage_name) ? ($this->dest_storage_name ? 'true' : 'false') : $this->dest_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($this->version_id) ? ($this->version_id ? 'true' : 'false') : $this->version_id;
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