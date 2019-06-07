<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateModifiedTiffRequest.php">
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
 * Request model for createModifiedTiff operation.
 */
class CreateModifiedTiffRequest extends ImagingRequest
{
    /**
     * Input image
     *
     * @var string
     */
    public $image_data;
    
    /**
     * Bit depth.
     *
     * @var int
     */
    public $bit_depth;
    
    /**
     * Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values.
     *
     * @var string
     */
    public $compression;
    
    /**
     * New resolution unit (none - the default one, inch or centimeter).
     *
     * @var string
     */
    public $resolution_unit;
    
    /**
     * New horizontal resolution.
     *
     * @var double
     */
    public $horizontal_resolution;
    
    /**
     * New vertical resolution.
     *
     * @var double
     */
    public $vertical_resolution;
    
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
     * Initializes a new instance of the CreateModifiedTiffRequest class.
     *  
     * @param string $image_data Input image
     * @param int $bit_depth Bit depth.
     * @param string $compression Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values.
     * @param string $resolution_unit New resolution unit (none - the default one, inch or centimeter).
     * @param double $horizontal_resolution New horizontal resolution.
     * @param double $vertical_resolution New vertical resolution.
     * @param bool $from_scratch Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($image_data, $bit_depth, $compression = null, $resolution_unit = null, $horizontal_resolution = null, $vertical_resolution = null, $from_scratch = null, $out_path = null, $storage = null)             
    {
        $this->image_data = $image_data;
        $this->bit_depth = $bit_depth;
        $this->compression = $compression;
        $this->resolution_unit = $resolution_unit;
        $this->horizontal_resolution = $horizontal_resolution;
        $this->vertical_resolution = $vertical_resolution;
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
     * Bit depth.
     *
     * @return int
     */
    public function get_bit_depth()
    {
        return $this->bit_depth;
    }

    /**
     * Bit depth.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_bit_depth($value)
    {
        $this->bit_depth = $value;
        return $this;
    }
    
    /**
     * Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values.
     *
     * @return string
     */
    public function get_compression()
    {
        return $this->compression;
    }

    /**
     * Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_compression($value)
    {
        $this->compression = $value;
        return $this;
    }
    
    /**
     * New resolution unit (none - the default one, inch or centimeter).
     *
     * @return string
     */
    public function get_resolution_unit()
    {
        return $this->resolution_unit;
    }

    /**
     * New resolution unit (none - the default one, inch or centimeter).
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_resolution_unit($value)
    {
        $this->resolution_unit = $value;
        return $this;
    }
    
    /**
     * New horizontal resolution.
     *
     * @return double
     */
    public function get_horizontal_resolution()
    {
        return $this->horizontal_resolution;
    }

    /**
     * New horizontal resolution.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_horizontal_resolution($value)
    {
        $this->horizontal_resolution = $value;
        return $this;
    }
    
    /**
     * New vertical resolution.
     *
     * @return double
     */
    public function get_vertical_resolution()
    {
        return $this->vertical_resolution;
    }

    /**
     * New vertical resolution.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_vertical_resolution($value)
    {
        $this->vertical_resolution = $value;
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
            throw new \InvalidArgumentException('Missing the required parameter $image_data when calling createModifiedTiff');
        }
        // verify the required parameter 'bit_depth' is set
        if ($this->bit_depth === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bit_depth when calling createModifiedTiff');
        }

        $resourcePath = '/imaging/tiff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    

        // query params
        if ($this->bit_depth !== null) {
            $localName = lcfirst('bitDepth');
            $localValue = is_bool($this->bit_depth) ? ($this->bit_depth ? 'true' : 'false') : $this->bit_depth;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->compression !== null) {
            $localName = lcfirst('compression');
            $localValue = is_bool($this->compression) ? ($this->compression ? 'true' : 'false') : $this->compression;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->resolution_unit !== null) {
            $localName = lcfirst('resolutionUnit');
            $localValue = is_bool($this->resolution_unit) ? ($this->resolution_unit ? 'true' : 'false') : $this->resolution_unit;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->horizontal_resolution !== null) {
            $localName = lcfirst('horizontalResolution');
            $localValue = is_bool($this->horizontal_resolution) ? ($this->horizontal_resolution ? 'true' : 'false') : $this->horizontal_resolution;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->vertical_resolution !== null) {
            $localName = lcfirst('verticalResolution');
            $localValue = is_bool($this->vertical_resolution) ? ($this->vertical_resolution ? 'true' : 'false') : $this->vertical_resolution;
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
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // form params
        if ($this->image_data !== null) {
            $formParams[ObjectSerializer::toStandardName('image_data')] = ObjectSerializer::toFormValue($this->image_data);
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
