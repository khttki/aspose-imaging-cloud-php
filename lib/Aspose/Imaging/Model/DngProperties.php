<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DngProperties.php">
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
use \Aspose\Imaging\Model\SaaSposeResponse;

/**
 * DngProperties
 *
 * @description Represents information about image in DNG format.
 */
class DngProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DngProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'dng_version' => 'int',
        'description' => 'string',
        'model' => 'string',
        'camera_manufacturer' => 'string',
        'is_foveon' => 'int',
        'software' => 'string',
        'raw_count' => 'int',
        'filters' => 'int',
        'colors_count' => 'int',
        'xmp_data' => 'string',
        'translation_cfa_dng' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'dng_version' => 'int64',
        'description' => null,
        'model' => null,
        'camera_manufacturer' => null,
        'is_foveon' => 'int64',
        'software' => null,
        'raw_count' => 'int64',
        'filters' => 'int64',
        'colors_count' => 'int32',
        'xmp_data' => null,
        'translation_cfa_dng' => null
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
        'dng_version' => 'DngVersion',
        'description' => 'Description',
        'model' => 'Model',
        'camera_manufacturer' => 'CameraManufacturer',
        'is_foveon' => 'IsFoveon',
        'software' => 'Software',
        'raw_count' => 'RawCount',
        'filters' => 'Filters',
        'colors_count' => 'ColorsCount',
        'xmp_data' => 'XmpData',
        'translation_cfa_dng' => 'TranslationCfaDng'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dng_version' => 'setDngVersion',
        'description' => 'setDescription',
        'model' => 'setModel',
        'camera_manufacturer' => 'setCameraManufacturer',
        'is_foveon' => 'setIsFoveon',
        'software' => 'setSoftware',
        'raw_count' => 'setRawCount',
        'filters' => 'setFilters',
        'colors_count' => 'setColorsCount',
        'xmp_data' => 'setXmpData',
        'translation_cfa_dng' => 'setTranslationCfaDng'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dng_version' => 'getDngVersion',
        'description' => 'getDescription',
        'model' => 'getModel',
        'camera_manufacturer' => 'getCameraManufacturer',
        'is_foveon' => 'getIsFoveon',
        'software' => 'getSoftware',
        'raw_count' => 'getRawCount',
        'filters' => 'getFilters',
        'colors_count' => 'getColorsCount',
        'xmp_data' => 'getXmpData',
        'translation_cfa_dng' => 'getTranslationCfaDng'
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
        $this->container['dng_version'] = isset($data['dng_version']) ? $data['dng_version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['camera_manufacturer'] = isset($data['camera_manufacturer']) ? $data['camera_manufacturer'] : null;
        $this->container['is_foveon'] = isset($data['is_foveon']) ? $data['is_foveon'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['raw_count'] = isset($data['raw_count']) ? $data['raw_count'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['colors_count'] = isset($data['colors_count']) ? $data['colors_count'] : null;
        $this->container['xmp_data'] = isset($data['xmp_data']) ? $data['xmp_data'] : null;
        $this->container['translation_cfa_dng'] = isset($data['translation_cfa_dng']) ? $data['translation_cfa_dng'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dng_version'] === null) {
            $invalidProperties[] = "'dng_version' can't be null";
        }
        if ($this->container['is_foveon'] === null) {
            $invalidProperties[] = "'is_foveon' can't be null";
        }
        if ($this->container['raw_count'] === null) {
            $invalidProperties[] = "'raw_count' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['colors_count'] === null) {
            $invalidProperties[] = "'colors_count' can't be null";
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

        if ($this->container['dng_version'] === null) {
            return false;
        }
        if ($this->container['is_foveon'] === null) {
            return false;
        }
        if ($this->container['raw_count'] === null) {
            return false;
        }
        if ($this->container['filters'] === null) {
            return false;
        }
        if ($this->container['colors_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets dng_version
     *
     * @return int
     */
    public function getDngVersion()
    {
        return $this->container['dng_version'];
    }

    /**
     * Sets dng_version
     *
     * @param int $dng_version Gets or sets the DNG version.
     *
     * @return $this
     */
    public function setDngVersion($dng_version)
    {
        $this->container['dng_version'] = $dng_version;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Gets or sets the description of colors (RGBG, RGBE, GMCY or GBTG).
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model Gets or sets the camera model.
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets camera_manufacturer
     *
     * @return string
     */
    public function getCameraManufacturer()
    {
        return $this->container['camera_manufacturer'];
    }

    /**
     * Sets camera_manufacturer
     *
     * @param string $camera_manufacturer Gets or sets the camera manufacturer.
     *
     * @return $this
     */
    public function setCameraManufacturer($camera_manufacturer)
    {
        $this->container['camera_manufacturer'] = $camera_manufacturer;

        return $this;
    }

    /**
     * Gets is_foveon
     *
     * @return int
     */
    public function getIsFoveon()
    {
        return $this->container['is_foveon'];
    }

    /**
     * Sets is_foveon
     *
     * @param int $is_foveon Gets or sets the value indicating whether it's a Foveon matrix.
     *
     * @return $this
     */
    public function setIsFoveon($is_foveon)
    {
        $this->container['is_foveon'] = $is_foveon;

        return $this;
    }

    /**
     * Gets software
     *
     * @return string
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param string $software Gets or sets the software.
     *
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets raw_count
     *
     * @return int
     */
    public function getRawCount()
    {
        return $this->container['raw_count'];
    }

    /**
     * Sets raw_count
     *
     * @param int $raw_count Gets or sets the number of RAW images in file (0 means that the file has not been recognized).
     *
     * @return $this
     */
    public function setRawCount($raw_count)
    {
        $this->container['raw_count'] = $raw_count;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return int
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param int $filters Gets or sets the bit mask describing the order of color pixels in the matrix.
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets colors_count
     *
     * @return int
     */
    public function getColorsCount()
    {
        return $this->container['colors_count'];
    }

    /**
     * Sets colors_count
     *
     * @param int $colors_count Gets or sets the colors count.
     *
     * @return $this
     */
    public function setColorsCount($colors_count)
    {
        $this->container['colors_count'] = $colors_count;

        return $this;
    }

    /**
     * Gets xmp_data
     *
     * @return string
     */
    public function getXmpData()
    {
        return $this->container['xmp_data'];
    }

    /**
     * Sets xmp_data
     *
     * @param string $xmp_data Gets or sets the XMP data.
     *
     * @return $this
     */
    public function setXmpData($xmp_data)
    {
        $this->container['xmp_data'] = $xmp_data;

        return $this;
    }

    /**
     * Gets translation_cfa_dng
     *
     * @return string[]
     */
    public function getTranslationCfaDng()
    {
        return $this->container['translation_cfa_dng'];
    }

    /**
     * Sets translation_cfa_dng
     *
     * @param string[] $translation_cfa_dng Gets or sets the translation array for CFA mosaic of DNG format.
     *
     * @return $this
     */
    public function setTranslationCfaDng($translation_cfa_dng)
    {
        $this->container['translation_cfa_dng'] = $translation_cfa_dng;

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


