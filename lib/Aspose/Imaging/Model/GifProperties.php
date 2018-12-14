<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GifProperties.php">
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

namespace Aspose\Imaging\Model;

use \ArrayAccess;
use \Aspose\Imaging\ObjectSerializer;
use \Aspose\Imaging\SaaSposeResponse;

/**
 * GifProperties
 *
 * @description Represents information about image in GIF format.
 */
class GifProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "GifProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'background_color' => 'string',
        'has_background_color' => 'bool',
        'has_trailer' => 'bool',
        'pixel_aspect_ratio' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'background_color' => null,
        'has_background_color' => null,
        'has_trailer' => null,
        'pixel_aspect_ratio' => 'byte'
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
        'background_color' => 'BackgroundColor',
        'has_background_color' => 'HasBackgroundColor',
        'has_trailer' => 'HasTrailer',
        'pixel_aspect_ratio' => 'PixelAspectRatio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color' => 'setBackgroundColor',
        'has_background_color' => 'setHasBackgroundColor',
        'has_trailer' => 'setHasTrailer',
        'pixel_aspect_ratio' => 'setPixelAspectRatio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color' => 'getBackgroundColor',
        'has_background_color' => 'getHasBackgroundColor',
        'has_trailer' => 'getHasTrailer',
        'pixel_aspect_ratio' => 'getPixelAspectRatio'
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
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['has_background_color'] = isset($data['has_background_color']) ? $data['has_background_color'] : null;
        $this->container['has_trailer'] = isset($data['has_trailer']) ? $data['has_trailer'] : null;
        $this->container['pixel_aspect_ratio'] = isset($data['pixel_aspect_ratio']) ? $data['pixel_aspect_ratio'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['has_background_color'] === null) {
            $invalidProperties[] = "'has_background_color' can't be null";
        }
        if ($this->container['has_trailer'] === null) {
            $invalidProperties[] = "'has_trailer' can't be null";
        }
        if ($this->container['pixel_aspect_ratio'] === null) {
            $invalidProperties[] = "'pixel_aspect_ratio' can't be null";
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

        if ($this->container['has_background_color'] === null) {
            return false;
        }
        if ($this->container['has_trailer'] === null) {
            return false;
        }
        if ($this->container['pixel_aspect_ratio'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Gets or sets the background color.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets has_background_color
     *
     * @return bool
     */
    public function getHasBackgroundColor()
    {
        return $this->container['has_background_color'];
    }

    /**
     * Sets has_background_color
     *
     * @param bool $has_background_color Gets or sets a value indicating whether background color is used.
     *
     * @return $this
     */
    public function setHasBackgroundColor($has_background_color)
    {
        $this->container['has_background_color'] = $has_background_color;

        return $this;
    }

    /**
     * Gets has_trailer
     *
     * @return bool
     */
    public function getHasTrailer()
    {
        return $this->container['has_trailer'];
    }

    /**
     * Sets has_trailer
     *
     * @param bool $has_trailer Gets or sets a value indicating whether image has trailer.
     *
     * @return $this
     */
    public function setHasTrailer($has_trailer)
    {
        $this->container['has_trailer'] = $has_trailer;

        return $this;
    }

    /**
     * Gets pixel_aspect_ratio
     *
     * @return int
     */
    public function getPixelAspectRatio()
    {
        return $this->container['pixel_aspect_ratio'];
    }

    /**
     * Sets pixel_aspect_ratio
     *
     * @param int $pixel_aspect_ratio Gets or sets the pixel aspect ratio.
     *
     * @return $this
     */
    public function setPixelAspectRatio($pixel_aspect_ratio)
    {
        $this->container['pixel_aspect_ratio'] = $pixel_aspect_ratio;

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


