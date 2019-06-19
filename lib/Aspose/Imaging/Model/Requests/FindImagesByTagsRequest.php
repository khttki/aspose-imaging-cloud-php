<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FindImagesByTagsRequest.php">
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
 * Request model for findImagesByTags operation.
 */
class FindImagesByTagsRequest extends ImagingRequest
{
    /**
     * Tags array for searching
     *
     * @var string
     */
    public $tags;
    
    /**
     * The search context identifier.
     *
     * @var string
     */
    public $search_context_id;
    
    /**
     * The similarity threshold.
     *
     * @var double
     */
    public $similarity_threshold;
    
    /**
     * The maximum count.
     *
     * @var int
     */
    public $max_count;
    
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
     * Initializes a new instance of the FindImagesByTagsRequest class.
     *  
     * @param string $tags Tags array for searching
     * @param string $search_context_id The search context identifier.
     * @param double $similarity_threshold The similarity threshold.
     * @param int $max_count The maximum count.
     * @param string $folder The folder.
     * @param string $storage The storage.
     */
    public function __construct($tags, $search_context_id, $similarity_threshold, $max_count, $folder = null, $storage = null)             
    {
        $this->tags = $tags;
        $this->search_context_id = $search_context_id;
        $this->similarity_threshold = $similarity_threshold;
        $this->max_count = $max_count;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Tags array for searching
     *
     * @return string
     */
    public function get_tags()
    {
        return $this->tags;
    }

    /**
     * Tags array for searching
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_tags($value)
    {
        $this->tags = $value;
        return $this;
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
     * The similarity threshold.
     *
     * @return double
     */
    public function get_similarity_threshold()
    {
        return $this->similarity_threshold;
    }

    /**
     * The similarity threshold.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_similarity_threshold($value)
    {
        $this->similarity_threshold = $value;
        return $this;
    }
    
    /**
     * The maximum count.
     *
     * @return int
     */
    public function get_max_count()
    {
        return $this->max_count;
    }

    /**
     * The maximum count.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_max_count($value)
    {
        $this->max_count = $value;
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
        // verify the required parameter 'tags' is set
        if ($this->tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tags when calling findImagesByTags');
        }
        // verify the required parameter 'search_context_id' is set
        if ($this->search_context_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search_context_id when calling findImagesByTags');
        }
        // verify the required parameter 'similarity_threshold' is set
        if ($this->similarity_threshold === null) {
            throw new \InvalidArgumentException('Missing the required parameter $similarity_threshold when calling findImagesByTags');
        }
        // verify the required parameter 'max_count' is set
        if ($this->max_count === null) {
            throw new \InvalidArgumentException('Missing the required parameter $max_count when calling findImagesByTags');
        }

        $resourcePath = '/imaging/ai/imageSearch/{searchContextId}/findByTags';
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
        if ($this->similarity_threshold !== null) {
            $localName = lcfirst('similarityThreshold');
            $localValue = is_bool($this->similarity_threshold) ? ($this->similarity_threshold ? 'true' : 'false') : $this->similarity_threshold;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->max_count !== null) {
            $localName = lcfirst('maxCount');
            $localValue = is_bool($this->max_count) ? ($this->max_count ? 'true' : 'false') : $this->max_count;
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
        if ($this->tags !== null) {
            $formParams[ObjectSerializer::toStandardName('tags')] = ObjectSerializer::toFormValue($this->tags);
        }
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
