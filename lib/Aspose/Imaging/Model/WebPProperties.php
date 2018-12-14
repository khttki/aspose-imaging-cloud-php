<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WebPProperties.php">
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
 * WebPProperties
 *
 * @description Represents information about image in WEBP format.
 */
class WebPProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WebPProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'lossless' => 'bool',
        'quality' => 'double',
        'anim_loop_count' => 'int',
        'anim_background_color' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'lossless' => null,
        'quality' => 'double',
        'anim_loop_count' => null,
        'anim_background_color' => 'int64'
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
        'lossless' => 'Lossless',
        'quality' => 'Quality',
        'anim_loop_count' => 'AnimLoopCount',
        'anim_background_color' => 'AnimBackgroundColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lossless' => 'setLossless',
        'quality' => 'setQuality',
        'anim_loop_count' => 'setAnimLoopCount',
        'anim_background_color' => 'setAnimBackgroundColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lossless' => 'getLossless',
        'quality' => 'getQuality',
        'anim_loop_count' => 'getAnimLoopCount',
        'anim_background_color' => 'getAnimBackgroundColor'
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
        $this->container['lossless'] = isset($data['lossless']) ? $data['lossless'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['anim_loop_count'] = isset($data['anim_loop_count']) ? $data['anim_loop_count'] : null;
        $this->container['anim_background_color'] = isset($data['anim_background_color']) ? $data['anim_background_color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lossless'] === null) {
            $invalidProperties[] = "'lossless' can't be null";
        }
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
        }
        if ($this->container['anim_loop_count'] === null) {
            $invalidProperties[] = "'anim_loop_count' can't be null";
        }
        if ($this->container['anim_background_color'] === null) {
            $invalidProperties[] = "'anim_background_color' can't be null";
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

        if ($this->container['lossless'] === null) {
            return false;
        }
        if ($this->container['quality'] === null) {
            return false;
        }
        if ($this->container['anim_loop_count'] === null) {
            return false;
        }
        if ($this->container['anim_background_color'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets lossless
     *
     * @return bool
     */
    public function getLossless()
    {
        return $this->container['lossless'];
    }

    /**
     * Sets lossless
     *
     * @param bool $lossless Gets or sets a value indicating whether these  is lossless.
     *
     * @return $this
     */
    public function setLossless($lossless)
    {
        $this->container['lossless'] = $lossless;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return double
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param double $quality Gets or sets the quality.
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets anim_loop_count
     *
     * @return int
     */
    public function getAnimLoopCount()
    {
        return $this->container['anim_loop_count'];
    }

    /**
     * Sets anim_loop_count
     *
     * @param int $anim_loop_count Gets or sets the animation loop count.
     *
     * @return $this
     */
    public function setAnimLoopCount($anim_loop_count)
    {
        $this->container['anim_loop_count'] = $anim_loop_count;

        return $this;
    }

    /**
     * Gets anim_background_color
     *
     * @return int
     */
    public function getAnimBackgroundColor()
    {
        return $this->container['anim_background_color'];
    }

    /**
     * Sets anim_background_color
     *
     * @param int $anim_background_color Gets or sets the color of the animation background.
     *
     * @return $this
     */
    public function setAnimBackgroundColor($anim_background_color)
    {
        $this->container['anim_background_color'] = $anim_background_color;

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


