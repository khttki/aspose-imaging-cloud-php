<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateImageFeaturesRequest.php">
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
 * Request model for createImageFeatures operation.
 */
class CreateImageFeaturesRequest extends ImagingRequest
{
    /**
     * The search context identifier.
     *
     * @var string
     */
    public $search_context_id;
    
    /**
     * Input image
     *
     * @var string
     */
    public $image_data;
    
    /**
     * The image identifier.
     *
     * @var string
     */
    public $image_id;
    
    /**
     * Images source - a folder
     *
     * @var string
     */
    public $images_folder;
    
    /**
     * The folder.
     *
     * @var string
     */
    public $folder;
    
    /**
     * The storage.
     *
     * @var string
     */
    public $storage;
    
    /**
     * Initializes a new instance of the CreateImageFeaturesRequest class.
     *  
     * @param string $search_context_id The search context identifier.
     * @param string $image_data Input image
     * @param string $image_id The image identifier.
     * @param string $images_folder Images source - a folder
     * @param string $folder The folder.
     * @param string $storage The storage.
     */
    public function __construct($search_context_id, $image_data = null, $image_id = null, $images_folder = null, $folder = null, $storage = null)             
    {
        $this->search_context_id = $search_context_id;
        $this->image_data = $image_data;
        $this->image_id = $image_id;
        $this->images_folder = $images_folder;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * The search context identifier.
     *
     * @return string
     */
    public function get_search_context_id()
    {
        return $this->search_context_id;
    }

    /**
     * The search context identifier.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_search_context_id($value)
    {
        $this->search_context_id = $value;
        return $this;
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
     * The image identifier.
     *
     * @return string
     */
    public function get_image_id()
    {
        return $this->image_id;
    }

    /**
     * The image identifier.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_image_id($value)
    {
        $this->image_id = $value;
        return $this;
    }
    
    /**
     * Images source - a folder
     *
     * @return string
     */
    public function get_images_folder()
    {
        return $this->images_folder;
    }

    /**
     * Images source - a folder
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_images_folder($value)
    {
        $this->images_folder = $value;
        return $this;
    }
    
    /**
     * The folder.
     *
     * @return string
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * The folder.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    
    /**
     * The storage.
     *
     * @return string
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * The storage.
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
        // verify the required parameter 'search_context_id' is set
        if ($this->search_context_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search_context_id when calling createImageFeatures');
        }

        $resourcePath = '/imaging/ai/imageSearch/{searchContextId}/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->search_context_id !== null) {
            $localName = lcfirst('searchContextId');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->search_context_id), $resourcePath);
        }

        // query params
        if ($this->image_id !== null) {
            $localName = lcfirst('imageId');
            $localValue = is_bool($this->image_id) ? ($this->image_id ? 'true' : 'false') : $this->image_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->images_folder !== null) {
            $localName = lcfirst('imagesFolder');
            $localValue = is_bool($this->images_folder) ? ($this->images_folder ? 'true' : 'false') : $this->images_folder;
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

        // form params
        if ($this->image_data !== null) {
            $formParams[ObjectSerializer::toStandardName('image_data')] = ObjectSerializer::toFormValue($this->image_data);
        }
        // body params
        $httpBody = null;

        $headers = $this->selectHeaders(
            ['application/json'],
            ['multipart/form-data']
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
