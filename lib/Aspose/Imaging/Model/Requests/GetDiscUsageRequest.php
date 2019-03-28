<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetDiscUsageRequest.php">
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
 * Request model for getDiscUsage operation.
 */
class GetDiscUsageRequest extends ImagingRequest
{
    /**
     * Storage name
     *
     * @var string
     */
    public $storage_name;
    
    /**
     * Initializes a new instance of the GetDiscUsageRequest class.
     *  
     * @param string $storage_name Storage name
     */
    public function __construct($storage_name = null)             
    {
        $this->storage_name = $storage_name;
    }

    /**
     * Storage name
     *
     * @return string
     */
    public function get_storage_name()
    {
        return $this->storage_name;
    }

    /**
     * Storage name
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_storage_name($value)
    {
        $this->storage_name = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {

        $resourcePath = '/imaging/storage/disc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    

        // query params
        if ($this->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($this->storage_name) ? ($this->storage_name ? 'true' : 'false') : $this->storage_name;
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
