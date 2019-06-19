<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ModifyWebPRequest.php">
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
 * Request model for modifyWebP operation.
 */
class ModifyWebPRequest extends ImagingRequest
{
    /**
     * Filename of image.
     *
     * @var string
     */
    public $name;
    
    /**
     * If WEBP should be in lossless format.
     *
     * @var bool
     */
    public $loss_less;
    
    /**
     * Quality (0-100).
     *
     * @var int
     */
    public $quality;
    
    /**
     * The animation loop count.
     *
     * @var int
     */
    public $anim_loop_count;
    
    /**
     * Color of the animation background.
     *
     * @var string
     */
    public $anim_background_color;
    
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
     * Initializes a new instance of the ModifyWebPRequest class.
     *  
     * @param string $name Filename of image.
     * @param bool $loss_less If WEBP should be in lossless format.
     * @param int $quality Quality (0-100).
     * @param int $anim_loop_count The animation loop count.
     * @param string $anim_background_color Color of the animation background.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $loss_less, $quality, $anim_loop_count, $anim_background_color, $from_scratch = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->loss_less = $loss_less;
        $this->quality = $quality;
        $this->anim_loop_count = $anim_loop_count;
        $this->anim_background_color = $anim_background_color;
        $this->from_scratch = $from_scratch;
        $this->folder = $folder;
        $this->storage = $storage;
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
     * If WEBP should be in lossless format.
     *
     * @return bool
     */
    public function get_loss_less()
    {
        return $this->loss_less;
    }

    /**
     * If WEBP should be in lossless format.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_loss_less($value)
    {
        $this->loss_less = $value;
        return $this;
    }
    
    /**
     * Quality (0-100).
     *
     * @return int
     */
    public function get_quality()
    {
        return $this->quality;
    }

    /**
     * Quality (0-100).
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_quality($value)
    {
        $this->quality = $value;
        return $this;
    }
    
    /**
     * The animation loop count.
     *
     * @return int
     */
    public function get_anim_loop_count()
    {
        return $this->anim_loop_count;
    }

    /**
     * The animation loop count.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_anim_loop_count($value)
    {
        $this->anim_loop_count = $value;
        return $this;
    }
    
    /**
     * Color of the animation background.
     *
     * @return string
     */
    public function get_anim_background_color()
    {
        return $this->anim_background_color;
    }

    /**
     * Color of the animation background.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_anim_background_color($value)
    {
        $this->anim_background_color = $value;
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
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling modifyWebP');
        }
        // verify the required parameter 'loss_less' is set
        if ($this->loss_less === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loss_less when calling modifyWebP');
        }
        // verify the required parameter 'quality' is set
        if ($this->quality === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quality when calling modifyWebP');
        }
        // verify the required parameter 'anim_loop_count' is set
        if ($this->anim_loop_count === null) {
            throw new \InvalidArgumentException('Missing the required parameter $anim_loop_count when calling modifyWebP');
        }
        // verify the required parameter 'anim_background_color' is set
        if ($this->anim_background_color === null) {
            throw new \InvalidArgumentException('Missing the required parameter $anim_background_color when calling modifyWebP');
        }

        $resourcePath = '/imaging/{name}/webp';
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
        if ($this->loss_less !== null) {
            $localName = lcfirst('lossLess');
            $localValue = is_bool($this->loss_less) ? ($this->loss_less ? 'true' : 'false') : $this->loss_less;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
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
        if ($this->anim_loop_count !== null) {
            $localName = lcfirst('animLoopCount');
            $localValue = is_bool($this->anim_loop_count) ? ($this->anim_loop_count ? 'true' : 'false') : $this->anim_loop_count;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->anim_background_color !== null) {
            $localName = lcfirst('animBackgroundColor');
            $localValue = is_bool($this->anim_background_color) ? ($this->anim_background_color ? 'true' : 'false') : $this->anim_background_color;
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
