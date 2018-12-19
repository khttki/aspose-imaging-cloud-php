<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostImageFramePropertiesRequest.php">
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
 * Request model for postImageFrameProperties operation.
 */
class PostImageFramePropertiesRequest extends ImagingRequest
{
    /**
     * Input image
     *
     * @var string
     */
    public $image_data;
    
    /**
     * Number of a frame.
     *
     * @var int
     */
    public $frame_id;
    
    /**
     * Initializes a new instance of the PostImageFramePropertiesRequest class.
     *  
     * @param string $image_data Input image
     * @param int $frame_id Number of a frame.
     */
    public function __construct($image_data, $frame_id)             
    {
        $this->image_data = $image_data;
        $this->frame_id = $frame_id;
    }

    /**
     * Input image
     *
     * @return string
     */
    public function get_image_data()
    {
        return $this->image_data;
    }

    /**
     * Input image
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_image_data($value)
    {
        $this->image_data = $value;
        return $this;
    }
    
    /**
     * Number of a frame.
     *
     * @return int
     */
    public function get_frame_id()
    {
        return $this->frame_id;
    }

    /**
     * Number of a frame.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_frame_id($value)
    {
        $this->frame_id = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'image_data' is set
        if ($this->image_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $image_data when calling postImageFrameProperties');
        }
        // verify the required parameter 'frame_id' is set
        if ($this->frame_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $frame_id when calling postImageFrameProperties');
        }

        $resourcePath = '/imaging/frames/{frameId}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    
        // path params
        if ($this->frame_id !== null) {
            $localName = lcfirst('frameId');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->frame_id), $resourcePath);
        }

    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // form params
        if ($this->image_data !== null) {
            $multipart = true;
            $formParams[ObjectSerializer::toStandardName('image_data')] = ObjectSerializer::toFormValue($this->image_data);
        }
        // body params
        $httpBody = null;

        if ($multipart) {
            $headers['Content-Type'] = 'multipart/form-data';
        } else {
            $headers['Content-Type'] = 'application/json';
        }
        
        $httpInfo = array(
            "resourcePath" => $resourcePath,
            "queryParams" => $queryParams,
            "headerParams" => $headerParams,
            "headers" => $headers,
            "httpBody" => $httpBody,
            "multipart" => $multipart,
            "formParams" => $formParams
        );
        
        return $httpInfo;        
    }
}
