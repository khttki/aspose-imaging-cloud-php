<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostImageGifRequest.php">
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
 * Request model for postImageGif operation.
 */
class PostImageGifRequest extends ImagingRequest
{
    /**
     * Input image
     *
     * @var string
     */
    public $image_data;
    
    /**
     * Index of the background color.
     *
     * @var int
     */
    public $background_color_index;
    
    /**
     * Color resolution.
     *
     * @var int
     */
    public $color_resolution;
    
    /**
     * Specifies if image has trailer.
     *
     * @var bool
     */
    public $has_trailer;
    
    /**
     * Specifies if image is interlaced.
     *
     * @var bool
     */
    public $interlaced;
    
    /**
     * Specifies if palette is sorted.
     *
     * @var bool
     */
    public $is_palette_sorted;
    
    /**
     * Pixel aspect ratio.
     *
     * @var int
     */
    public $pixel_aspect_ratio;
    
    /**
     * Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     *
     * @var bool
     */
    public $from_scratch;
    
    /**
     * Path to updated file (if this is empty, response contains streamed image).
     *
     * @var string
     */
    public $out_path;
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @var string
     */
    public $storage;
    
    /**
     * Initializes a new instance of the PostImageGifRequest class.
     *  
     * @param string $image_data Input image
     * @param int $background_color_index Index of the background color.
     * @param int $color_resolution Color resolution.
     * @param bool $has_trailer Specifies if image has trailer.
     * @param bool $interlaced Specifies if image is interlaced.
     * @param bool $is_palette_sorted Specifies if palette is sorted.
     * @param int $pixel_aspect_ratio Pixel aspect ratio.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($image_data, $background_color_index = null, $color_resolution = null, $has_trailer = null, $interlaced = null, $is_palette_sorted = null, $pixel_aspect_ratio = null, $from_scratch = null, $out_path = null, $storage = null)             
    {
        parent::__construct();
        $this->image_data = $image_data;
        $this->background_color_index = $background_color_index;
        $this->color_resolution = $color_resolution;
        $this->has_trailer = $has_trailer;
        $this->interlaced = $interlaced;
        $this->is_palette_sorted = $is_palette_sorted;
        $this->pixel_aspect_ratio = $pixel_aspect_ratio;
        $this->from_scratch = $from_scratch;
        $this->out_path = $out_path;
        $this->storage = $storage;
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
     * Index of the background color.
     *
     * @return int
     */
    public function get_background_color_index()
    {
        return $this->background_color_index;
    }

    /**
     * Index of the background color.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_background_color_index($value)
    {
        $this->background_color_index = $value;
        return $this;
    }
    
    /**
     * Color resolution.
     *
     * @return int
     */
    public function get_color_resolution()
    {
        return $this->color_resolution;
    }

    /**
     * Color resolution.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_color_resolution($value)
    {
        $this->color_resolution = $value;
        return $this;
    }
    
    /**
     * Specifies if image has trailer.
     *
     * @return bool
     */
    public function get_has_trailer()
    {
        return $this->has_trailer;
    }

    /**
     * Specifies if image has trailer.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_has_trailer($value)
    {
        $this->has_trailer = $value;
        return $this;
    }
    
    /**
     * Specifies if image is interlaced.
     *
     * @return bool
     */
    public function get_interlaced()
    {
        return $this->interlaced;
    }

    /**
     * Specifies if image is interlaced.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_interlaced($value)
    {
        $this->interlaced = $value;
        return $this;
    }
    
    /**
     * Specifies if palette is sorted.
     *
     * @return bool
     */
    public function get_is_palette_sorted()
    {
        return $this->is_palette_sorted;
    }

    /**
     * Specifies if palette is sorted.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_is_palette_sorted($value)
    {
        $this->is_palette_sorted = $value;
        return $this;
    }
    
    /**
     * Pixel aspect ratio.
     *
     * @return int
     */
    public function get_pixel_aspect_ratio()
    {
        return $this->pixel_aspect_ratio;
    }

    /**
     * Pixel aspect ratio.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_pixel_aspect_ratio($value)
    {
        $this->pixel_aspect_ratio = $value;
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
     * Path to updated file (if this is empty, response contains streamed image).
     *
     * @return string
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /**
     * Path to updated file (if this is empty, response contains streamed image).
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
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
        // verify the required parameter 'image_data' is set
        if ($this->image_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $image_data when calling postImageGif');
        }

        $resourcePath = '/imaging/gif';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        if ($this->background_color_index !== null) {
            $localName = lcfirst('backgroundColorIndex');
            $localValue = is_bool($this->background_color_index) ? ($this->background_color_index ? 'true' : 'false') : $this->background_color_index;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->color_resolution !== null) {
            $localName = lcfirst('colorResolution');
            $localValue = is_bool($this->color_resolution) ? ($this->color_resolution ? 'true' : 'false') : $this->color_resolution;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->has_trailer !== null) {
            $localName = lcfirst('hasTrailer');
            $localValue = is_bool($this->has_trailer) ? ($this->has_trailer ? 'true' : 'false') : $this->has_trailer;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->interlaced !== null) {
            $localName = lcfirst('interlaced');
            $localValue = is_bool($this->interlaced) ? ($this->interlaced ? 'true' : 'false') : $this->interlaced;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->is_palette_sorted !== null) {
            $localName = lcfirst('isPaletteSorted');
            $localValue = is_bool($this->is_palette_sorted) ? ($this->is_palette_sorted ? 'true' : 'false') : $this->is_palette_sorted;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->pixel_aspect_ratio !== null) {
            $localName = lcfirst('pixelAspectRatio');
            $localValue = is_bool($this->pixel_aspect_ratio) ? ($this->pixel_aspect_ratio ? 'true' : 'false') : $this->pixel_aspect_ratio;
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
            $formParams['image_data'] = ObjectSerializer::toFormValue($this->image_data);
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
        
        list($httpInfo) = [$resourcePath, $formParams, $queryParams, $headerParams, $headers, $httpBody, $multipart];
        return $httpInfo;        
    }
}
