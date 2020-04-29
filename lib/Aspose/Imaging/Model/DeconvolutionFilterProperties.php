<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeconvolutionFilterProperties.php">
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
 * DeconvolutionFilterProperties
 *
 * @description Deconvolution Filter Options, abstract class
 */
class DeconvolutionFilterProperties extends FilterPropertiesBase 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DeconvolutionFilterProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'snr' => 'double',
        'brightness' => 'double',
        'grayscale' => 'bool',
        'is_partial_loaded' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'snr' => 'double',
        'brightness' => 'double',
        'grayscale' => null,
        'is_partial_loaded' => null
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
        'snr' => 'Snr',
        'brightness' => 'Brightness',
        'grayscale' => 'Grayscale',
        'is_partial_loaded' => 'IsPartialLoaded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'snr' => 'setSnr',
        'brightness' => 'setBrightness',
        'grayscale' => 'setGrayscale',
        'is_partial_loaded' => 'setIsPartialLoaded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'snr' => 'getSnr',
        'brightness' => 'getBrightness',
        'grayscale' => 'getGrayscale',
        'is_partial_loaded' => 'getIsPartialLoaded'
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

        $this->container['snr'] = isset($data['snr']) ? $data['snr'] : null;
        $this->container['brightness'] = isset($data['brightness']) ? $data['brightness'] : null;
        $this->container['grayscale'] = isset($data['grayscale']) ? $data['grayscale'] : null;
        $this->container['is_partial_loaded'] = isset($data['is_partial_loaded']) ? $data['is_partial_loaded'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['snr'] === null) {
            $invalidProperties[] = "'snr' can't be null";
        }
        if ($this->container['brightness'] === null) {
            $invalidProperties[] = "'brightness' can't be null";
        }
        if ($this->container['grayscale'] === null) {
            $invalidProperties[] = "'grayscale' can't be null";
        }
        if ($this->container['is_partial_loaded'] === null) {
            $invalidProperties[] = "'is_partial_loaded' can't be null";
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

        if ($this->container['snr'] === null) {
            return false;
        }
        if ($this->container['brightness'] === null) {
            return false;
        }
        if ($this->container['grayscale'] === null) {
            return false;
        }
        if ($this->container['is_partial_loaded'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets snr
     *
     * @return double
     */
    public function getSnr()
    {
        return $this->container['snr'];
    }

    /**
     * Sets snr
     *
     * @param double $snr Gets or sets the SNR(signal-to-noise ratio) recommended range 0.002 - 0.009, default value = 0.007
     *
     * @return $this
     */
    public function setSnr($snr)
    {
        $this->container['snr'] = $snr;

        return $this;
    }

    /**
     * Gets brightness
     *
     * @return double
     */
    public function getBrightness()
    {
        return $this->container['brightness'];
    }

    /**
     * Sets brightness
     *
     * @param double $brightness Gets or sets the brightness. recommended range 1 - 1.5 default value = 1.15
     *
     * @return $this
     */
    public function setBrightness($brightness)
    {
        $this->container['brightness'] = $brightness;

        return $this;
    }

    /**
     * Gets grayscale
     *
     * @return bool
     */
    public function getGrayscale()
    {
        return $this->container['grayscale'];
    }

    /**
     * Sets grayscale
     *
     * @param bool $grayscale Gets or sets a value indicating whether this DeconvolutionFilterProperties is grayscale. Return grayscale mode or RGB mode.
     *
     * @return $this
     */
    public function setGrayscale($grayscale)
    {
        $this->container['grayscale'] = $grayscale;

        return $this;
    }

    /**
     * Gets is_partial_loaded
     *
     * @return bool
     */
    public function getIsPartialLoaded()
    {
        return $this->container['is_partial_loaded'];
    }

    /**
     * Sets is_partial_loaded
     *
     * @param bool $is_partial_loaded Gets a value indicating whether this instance is partial loaded.
     *
     * @return $this
     */
    public function setIsPartialLoaded($is_partial_loaded)
    {
        $this->container['is_partial_loaded'] = $is_partial_loaded;

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


