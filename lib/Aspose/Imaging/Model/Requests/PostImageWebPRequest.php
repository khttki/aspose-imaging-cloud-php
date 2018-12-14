<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostImageWebPRequest.php">
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
 * Request model for postImageWebP operation.
 */
class PostImageWebPRequest extends ImagingRequest
{
    /**
     * Input image
     */
    public $image_data;
    
    /**
     * If WEBP is lossless.
     */
    public $loss_less;
    
    /**
     * Quality.
     */
    public $quality;
    
    /**
     * The animation loop count.
     */
    public $anim_loop_count;
    
    /**
     * Color of the animation background.
     */
    public $anim_background_color;
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     */
    public $from_scratch;
    
    /**
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public $out_path;
    
    /**
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
    /**
     * Initializes a new instance of the PostImageWebPRequest class.
     *  
     * @param \SplFileObject $image_data Input image
     * @param bool $loss_less If WEBP is lossless.
     * @param int $quality Quality.
     * @param int $anim_loop_count The animation loop count.
     * @param string $anim_background_color Color of the animation background.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($image_data, $loss_less, $quality, $anim_loop_count, $anim_background_color, $from_scratch = null, $out_path = null, $storage = null)             
    {
        parent::__construct();
        $this->image_data = $image_data;
        $this->loss_less = $loss_less;
        $this->quality = $quality;
        $this->anim_loop_count = $anim_loop_count;
        $this->anim_background_color = $anim_background_color;
        $this->from_scratch = $from_scratch;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /**
     * Input image
     */
    public function get_image_data()
    {
        return $this->image_data;
    }

    /**
     * Input image
     *
     * @return 
     */
    public function set_image_data($value)
    {
        $this->image_data = $value;
        return $this;
    }
    
    /**
     * If WEBP is lossless.
     */
    public function get_loss_less()
    {
        return $this->loss_less;
    }

    /**
     * If WEBP is lossless.
     *
     * @return 
     */
    public function set_loss_less($value)
    {
        $this->loss_less = $value;
        return $this;
    }
    
    /**
     * Quality.
     */
    public function get_quality()
    {
        return $this->quality;
    }

    /**
     * Quality.
     *
     * @return 
     */
    public function set_quality($value)
    {
        $this->quality = $value;
        return $this;
    }
    
    /**
     * The animation loop count.
     */
    public function get_anim_loop_count()
    {
        return $this->anim_loop_count;
    }

    /**
     * The animation loop count.
     *
     * @return 
     */
    public function set_anim_loop_count($value)
    {
        $this->anim_loop_count = $value;
        return $this;
    }
    
    /**
     * Color of the animation background.
     */
    public function get_anim_background_color()
    {
        return $this->anim_background_color;
    }

    /**
     * Color of the animation background.
     *
     * @return 
     */
    public function set_anim_background_color($value)
    {
        $this->anim_background_color = $value;
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
        // verify the required parameter 'image_data' is set
        if ($this->image_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $image_data when calling postImageWebP');
        }
        // verify the required parameter 'loss_less' is set
        if ($this->loss_less === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loss_less when calling postImageWebP');
        }
        // verify the required parameter 'quality' is set
        if ($this->quality === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quality when calling postImageWebP');
        }
        // verify the required parameter 'anim_loop_count' is set
        if ($this->anim_loop_count === null) {
            throw new \InvalidArgumentException('Missing the required parameter $anim_loop_count when calling postImageWebP');
        }
        // verify the required parameter 'anim_background_color' is set
        if ($this->anim_background_color === null) {
            throw new \InvalidArgumentException('Missing the required parameter $anim_background_color when calling postImageWebP');
        }

        $resourcePath = '/imaging/webp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

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

        // form params
        if ($this->image_data !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($this->image_data);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['image_data'] = $contents;
        }
        // body params
        $httpBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['multipart/form-data']
            );
        }
        
        list($httpInfo) = [$resourcePath, $formParams, $queryParams, $headerParams, $httpBody, $multipart];
        return $httpInfo;        
    }
}
