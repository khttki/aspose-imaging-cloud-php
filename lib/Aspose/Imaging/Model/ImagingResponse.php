<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingResponse.php">
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

namespace Aspose\Imaging\Model;

use \ArrayAccess;
use \Aspose\Imaging\ObjectSerializer;

/**
 * ImagingResponse
 *
 * @description Represents information about image.
 */
class ImagingResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImagingResponse";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'int',
        'width' => 'int',
        'bits_per_pixel' => 'int',
        'bmp_properties' => '\Aspose\Imaging\Model\BmpProperties',
        'gif_properties' => '\Aspose\Imaging\Model\GifProperties',
        'jpeg_properties' => '\Aspose\Imaging\Model\JpegProperties',
        'png_properties' => '\Aspose\Imaging\Model\PngProperties',
        'tiff_properties' => '\Aspose\Imaging\Model\TiffProperties',
        'psd_properties' => '\Aspose\Imaging\Model\PsdProperties',
        'djvu_properties' => '\Aspose\Imaging\Model\DjvuProperties',
        'web_p_properties' => '\Aspose\Imaging\Model\WebPProperties',
        'jpeg2000_properties' => '\Aspose\Imaging\Model\Jpeg2000Properties',
        'dicom_properties' => '\Aspose\Imaging\Model\DicomProperties',
        'dng_properties' => '\Aspose\Imaging\Model\DngProperties',
        'odg_properties' => '\Aspose\Imaging\Model\OdgProperties',
        'horizontal_resolution' => 'double',
        'vertical_resolution' => 'double',
        'is_cached' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => 'int32',
        'width' => 'int32',
        'bits_per_pixel' => 'int32',
        'bmp_properties' => null,
        'gif_properties' => null,
        'jpeg_properties' => null,
        'png_properties' => null,
        'tiff_properties' => null,
        'psd_properties' => null,
        'djvu_properties' => null,
        'web_p_properties' => null,
        'jpeg2000_properties' => null,
        'dicom_properties' => null,
        'dng_properties' => null,
        'odg_properties' => null,
        'horizontal_resolution' => 'double',
        'vertical_resolution' => 'double',
        'is_cached' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'height' => 'Height',
        'width' => 'Width',
        'bits_per_pixel' => 'BitsPerPixel',
        'bmp_properties' => 'BmpProperties',
        'gif_properties' => 'GifProperties',
        'jpeg_properties' => 'JpegProperties',
        'png_properties' => 'PngProperties',
        'tiff_properties' => 'TiffProperties',
        'psd_properties' => 'PsdProperties',
        'djvu_properties' => 'DjvuProperties',
        'web_p_properties' => 'WebPProperties',
        'jpeg2000_properties' => 'Jpeg2000Properties',
        'dicom_properties' => 'DicomProperties',
        'dng_properties' => 'DngProperties',
        'odg_properties' => 'OdgProperties',
        'horizontal_resolution' => 'HorizontalResolution',
        'vertical_resolution' => 'VerticalResolution',
        'is_cached' => 'IsCached'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'width' => 'setWidth',
        'bits_per_pixel' => 'setBitsPerPixel',
        'bmp_properties' => 'setBmpProperties',
        'gif_properties' => 'setGifProperties',
        'jpeg_properties' => 'setJpegProperties',
        'png_properties' => 'setPngProperties',
        'tiff_properties' => 'setTiffProperties',
        'psd_properties' => 'setPsdProperties',
        'djvu_properties' => 'setDjvuProperties',
        'web_p_properties' => 'setWebPProperties',
        'jpeg2000_properties' => 'setJpeg2000Properties',
        'dicom_properties' => 'setDicomProperties',
        'dng_properties' => 'setDngProperties',
        'odg_properties' => 'setOdgProperties',
        'horizontal_resolution' => 'setHorizontalResolution',
        'vertical_resolution' => 'setVerticalResolution',
        'is_cached' => 'setIsCached'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'width' => 'getWidth',
        'bits_per_pixel' => 'getBitsPerPixel',
        'bmp_properties' => 'getBmpProperties',
        'gif_properties' => 'getGifProperties',
        'jpeg_properties' => 'getJpegProperties',
        'png_properties' => 'getPngProperties',
        'tiff_properties' => 'getTiffProperties',
        'psd_properties' => 'getPsdProperties',
        'djvu_properties' => 'getDjvuProperties',
        'web_p_properties' => 'getWebPProperties',
        'jpeg2000_properties' => 'getJpeg2000Properties',
        'dicom_properties' => 'getDicomProperties',
        'dng_properties' => 'getDngProperties',
        'odg_properties' => 'getOdgProperties',
        'horizontal_resolution' => 'getHorizontalResolution',
        'vertical_resolution' => 'getVerticalResolution',
        'is_cached' => 'getIsCached'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['bits_per_pixel'] = isset($data['bits_per_pixel']) ? $data['bits_per_pixel'] : null;
        $this->container['bmp_properties'] = isset($data['bmp_properties']) ? $data['bmp_properties'] : null;
        $this->container['gif_properties'] = isset($data['gif_properties']) ? $data['gif_properties'] : null;
        $this->container['jpeg_properties'] = isset($data['jpeg_properties']) ? $data['jpeg_properties'] : null;
        $this->container['png_properties'] = isset($data['png_properties']) ? $data['png_properties'] : null;
        $this->container['tiff_properties'] = isset($data['tiff_properties']) ? $data['tiff_properties'] : null;
        $this->container['psd_properties'] = isset($data['psd_properties']) ? $data['psd_properties'] : null;
        $this->container['djvu_properties'] = isset($data['djvu_properties']) ? $data['djvu_properties'] : null;
        $this->container['web_p_properties'] = isset($data['web_p_properties']) ? $data['web_p_properties'] : null;
        $this->container['jpeg2000_properties'] = isset($data['jpeg2000_properties']) ? $data['jpeg2000_properties'] : null;
        $this->container['dicom_properties'] = isset($data['dicom_properties']) ? $data['dicom_properties'] : null;
        $this->container['dng_properties'] = isset($data['dng_properties']) ? $data['dng_properties'] : null;
        $this->container['odg_properties'] = isset($data['odg_properties']) ? $data['odg_properties'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
        $this->container['is_cached'] = isset($data['is_cached']) ? $data['is_cached'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['bits_per_pixel'] === null) {
            $invalidProperties[] = "'bits_per_pixel' can't be null";
        }
        if ($this->container['horizontal_resolution'] === null) {
            $invalidProperties[] = "'horizontal_resolution' can't be null";
        }
        if ($this->container['vertical_resolution'] === null) {
            $invalidProperties[] = "'vertical_resolution' can't be null";
        }
        if ($this->container['is_cached'] === null) {
            $invalidProperties[] = "'is_cached' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['bits_per_pixel'] === null) {
            return false;
        }
        if ($this->container['horizontal_resolution'] === null) {
            return false;
        }
        if ($this->container['vertical_resolution'] === null) {
            return false;
        }
        if ($this->container['is_cached'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Gets or sets the height of image.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Gets or sets the width of image.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets bits_per_pixel
     *
     * @return int
     */
    public function getBitsPerPixel()
    {
        return $this->container['bits_per_pixel'];
    }

    /**
     * Sets bits_per_pixel
     *
     * @param int $bits_per_pixel Gets or sets the bits per pixel for image.
     *
     * @return $this
     */
    public function setBitsPerPixel($bits_per_pixel)
    {
        $this->container['bits_per_pixel'] = $bits_per_pixel;

        return $this;
    }

    /**
     * Gets bmp_properties
     *
     * @return \Aspose\Imaging\Model\BmpProperties
     */
    public function getBmpProperties()
    {
        return $this->container['bmp_properties'];
    }

    /**
     * Sets bmp_properties
     *
     * @param \Aspose\Imaging\Model\BmpProperties $bmp_properties Gets or sets the BMP properties.
     *
     * @return $this
     */
    public function setBmpProperties($bmp_properties)
    {
        $this->container['bmp_properties'] = $bmp_properties;

        return $this;
    }

    /**
     * Gets gif_properties
     *
     * @return \Aspose\Imaging\Model\GifProperties
     */
    public function getGifProperties()
    {
        return $this->container['gif_properties'];
    }

    /**
     * Sets gif_properties
     *
     * @param \Aspose\Imaging\Model\GifProperties $gif_properties Gets or sets the GIF properties.
     *
     * @return $this
     */
    public function setGifProperties($gif_properties)
    {
        $this->container['gif_properties'] = $gif_properties;

        return $this;
    }

    /**
     * Gets jpeg_properties
     *
     * @return \Aspose\Imaging\Model\JpegProperties
     */
    public function getJpegProperties()
    {
        return $this->container['jpeg_properties'];
    }

    /**
     * Sets jpeg_properties
     *
     * @param \Aspose\Imaging\Model\JpegProperties $jpeg_properties Gets or sets the JPEG properties.
     *
     * @return $this
     */
    public function setJpegProperties($jpeg_properties)
    {
        $this->container['jpeg_properties'] = $jpeg_properties;

        return $this;
    }

    /**
     * Gets png_properties
     *
     * @return \Aspose\Imaging\Model\PngProperties
     */
    public function getPngProperties()
    {
        return $this->container['png_properties'];
    }

    /**
     * Sets png_properties
     *
     * @param \Aspose\Imaging\Model\PngProperties $png_properties Gets or sets the PNG properties.
     *
     * @return $this
     */
    public function setPngProperties($png_properties)
    {
        $this->container['png_properties'] = $png_properties;

        return $this;
    }

    /**
     * Gets tiff_properties
     *
     * @return \Aspose\Imaging\Model\TiffProperties
     */
    public function getTiffProperties()
    {
        return $this->container['tiff_properties'];
    }

    /**
     * Sets tiff_properties
     *
     * @param \Aspose\Imaging\Model\TiffProperties $tiff_properties Gets or sets the TIFF properties.
     *
     * @return $this
     */
    public function setTiffProperties($tiff_properties)
    {
        $this->container['tiff_properties'] = $tiff_properties;

        return $this;
    }

    /**
     * Gets psd_properties
     *
     * @return \Aspose\Imaging\Model\PsdProperties
     */
    public function getPsdProperties()
    {
        return $this->container['psd_properties'];
    }

    /**
     * Sets psd_properties
     *
     * @param \Aspose\Imaging\Model\PsdProperties $psd_properties Gets or sets the PSD properties.
     *
     * @return $this
     */
    public function setPsdProperties($psd_properties)
    {
        $this->container['psd_properties'] = $psd_properties;

        return $this;
    }

    /**
     * Gets djvu_properties
     *
     * @return \Aspose\Imaging\Model\DjvuProperties
     */
    public function getDjvuProperties()
    {
        return $this->container['djvu_properties'];
    }

    /**
     * Sets djvu_properties
     *
     * @param \Aspose\Imaging\Model\DjvuProperties $djvu_properties Gets or sets the DJVU properties.
     *
     * @return $this
     */
    public function setDjvuProperties($djvu_properties)
    {
        $this->container['djvu_properties'] = $djvu_properties;

        return $this;
    }

    /**
     * Gets web_p_properties
     *
     * @return \Aspose\Imaging\Model\WebPProperties
     */
    public function getWebPProperties()
    {
        return $this->container['web_p_properties'];
    }

    /**
     * Sets web_p_properties
     *
     * @param \Aspose\Imaging\Model\WebPProperties $web_p_properties Gets or sets the WEBP properties.
     *
     * @return $this
     */
    public function setWebPProperties($web_p_properties)
    {
        $this->container['web_p_properties'] = $web_p_properties;

        return $this;
    }

    /**
     * Gets jpeg2000_properties
     *
     * @return \Aspose\Imaging\Model\Jpeg2000Properties
     */
    public function getJpeg2000Properties()
    {
        return $this->container['jpeg2000_properties'];
    }

    /**
     * Sets jpeg2000_properties
     *
     * @param \Aspose\Imaging\Model\Jpeg2000Properties $jpeg2000_properties Gets or sets the JPEG2000 properties.
     *
     * @return $this
     */
    public function setJpeg2000Properties($jpeg2000_properties)
    {
        $this->container['jpeg2000_properties'] = $jpeg2000_properties;

        return $this;
    }

    /**
     * Gets dicom_properties
     *
     * @return \Aspose\Imaging\Model\DicomProperties
     */
    public function getDicomProperties()
    {
        return $this->container['dicom_properties'];
    }

    /**
     * Sets dicom_properties
     *
     * @param \Aspose\Imaging\Model\DicomProperties $dicom_properties Gets or sets the DICOM properties.
     *
     * @return $this
     */
    public function setDicomProperties($dicom_properties)
    {
        $this->container['dicom_properties'] = $dicom_properties;

        return $this;
    }

    /**
     * Gets dng_properties
     *
     * @return \Aspose\Imaging\Model\DngProperties
     */
    public function getDngProperties()
    {
        return $this->container['dng_properties'];
    }

    /**
     * Sets dng_properties
     *
     * @param \Aspose\Imaging\Model\DngProperties $dng_properties Gets or sets the DNG properties.
     *
     * @return $this
     */
    public function setDngProperties($dng_properties)
    {
        $this->container['dng_properties'] = $dng_properties;

        return $this;
    }

    /**
     * Gets odg_properties
     *
     * @return \Aspose\Imaging\Model\OdgProperties
     */
    public function getOdgProperties()
    {
        return $this->container['odg_properties'];
    }

    /**
     * Sets odg_properties
     *
     * @param \Aspose\Imaging\Model\OdgProperties $odg_properties Gets or sets the the ODG properties.
     *
     * @return $this
     */
    public function setOdgProperties($odg_properties)
    {
        $this->container['odg_properties'] = $odg_properties;

        return $this;
    }

    /**
     * Gets horizontal_resolution
     *
     * @return double
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /**
     * Sets horizontal_resolution
     *
     * @param double $horizontal_resolution Gets or sets the horizontal resolution of an image.
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;

        return $this;
    }

    /**
     * Gets vertical_resolution
     *
     * @return double
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /**
     * Sets vertical_resolution
     *
     * @param double $vertical_resolution Gets or sets the vertical resolution of an image.
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;

        return $this;
    }

    /**
     * Gets is_cached
     *
     * @return bool
     */
    public function getIsCached()
    {
        return $this->container['is_cached'];
    }

    /**
     * Sets is_cached
     *
     * @param bool $is_cached Gets or sets a value indicating whether image is cached.
     *
     * @return $this
     */
    public function setIsCached($is_cached)
    {
        $this->container['is_cached'] = $is_cached;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


