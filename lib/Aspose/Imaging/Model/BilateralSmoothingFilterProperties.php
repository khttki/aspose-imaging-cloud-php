<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BilateralSmoothingFilterProperties.php">
 *   Copyright (c) 2018-2020 Aspose Pty Ltd. All rights reserved.
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
use \Aspose\Imaging\ObjectSerializer;

/**
 * BilateralSmoothingFilterProperties
 *
 * @description The Bilateral Smoothing Filter Options.
 */
class BilateralSmoothingFilterProperties extends FilterPropertiesBase 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BilateralSmoothingFilterProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'size' => 'int',
        'spatial_factor' => 'double',
        'spatial_power' => 'double',
        'color_factor' => 'double',
        'color_power' => 'double'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'size' => 'int32',
        'spatial_factor' => 'double',
        'spatial_power' => 'double',
        'color_factor' => 'double',
        'color_power' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'size' => 'Size',
        'spatial_factor' => 'SpatialFactor',
        'spatial_power' => 'SpatialPower',
        'color_factor' => 'ColorFactor',
        'color_power' => 'ColorPower'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'size' => 'setSize',
        'spatial_factor' => 'setSpatialFactor',
        'spatial_power' => 'setSpatialPower',
        'color_factor' => 'setColorFactor',
        'color_power' => 'setColorPower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'size' => 'getSize',
        'spatial_factor' => 'getSpatialFactor',
        'spatial_power' => 'getSpatialPower',
        'color_factor' => 'getColorFactor',
        'color_power' => 'getColorPower'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['spatial_factor'] = isset($data['spatial_factor']) ? $data['spatial_factor'] : null;
        $this->container['spatial_power'] = isset($data['spatial_power']) ? $data['spatial_power'] : null;
        $this->container['color_factor'] = isset($data['color_factor']) ? $data['color_factor'] : null;
        $this->container['color_power'] = isset($data['color_power']) ? $data['color_power'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['spatial_factor'] === null) {
            $invalidProperties[] = "'spatial_factor' can't be null";
        }
        if ($this->container['spatial_power'] === null) {
            $invalidProperties[] = "'spatial_power' can't be null";
        }
        if ($this->container['color_factor'] === null) {
            $invalidProperties[] = "'color_factor' can't be null";
        }
        if ($this->container['color_power'] === null) {
            $invalidProperties[] = "'color_power' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['spatial_factor'] === null) {
            return false;
        }
        if ($this->container['spatial_power'] === null) {
            return false;
        }
        if ($this->container['color_factor'] === null) {
            return false;
        }
        if ($this->container['color_power'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Gets or sets the size of the kernel.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets spatial_factor
     *
     * @return double
     */
    public function getSpatialFactor()
    {
        return $this->container['spatial_factor'];
    }

    /**
     * Sets spatial_factor
     *
     * @param double $spatial_factor Gets or sets the spatial factor.
     *
     * @return $this
     */
    public function setSpatialFactor($spatial_factor)
    {
        $this->container['spatial_factor'] = $spatial_factor;

        return $this;
    }

    /**
     * Gets spatial_power
     *
     * @return double
     */
    public function getSpatialPower()
    {
        return $this->container['spatial_power'];
    }

    /**
     * Sets spatial_power
     *
     * @param double $spatial_power Gets or sets the spatial power.
     *
     * @return $this
     */
    public function setSpatialPower($spatial_power)
    {
        $this->container['spatial_power'] = $spatial_power;

        return $this;
    }

    /**
     * Gets color_factor
     *
     * @return double
     */
    public function getColorFactor()
    {
        return $this->container['color_factor'];
    }

    /**
     * Sets color_factor
     *
     * @param double $color_factor Gets or sets the color factor.
     *
     * @return $this
     */
    public function setColorFactor($color_factor)
    {
        $this->container['color_factor'] = $color_factor;

        return $this;
    }

    /**
     * Gets color_power
     *
     * @return double
     */
    public function getColorPower()
    {
        return $this->container['color_power'];
    }

    /**
     * Sets color_power
     *
     * @param double $color_power Gets or sets the color power.
     *
     * @return $this
     */
    public function setColorPower($color_power)
    {
        $this->container['color_power'] = $color_power;

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


