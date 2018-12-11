<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="JpegExifData.php">
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
use \Aspose\Imaging\ObjectSerializer;

/*
 * JpegExifData
 *
 * @description Represents EXIF data for JPEG
 */
class JpegExifData extends ExifData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "JpegExifData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'artist' => 'string',
        'copyright' => 'string',
        'date_time' => 'string',
        'image_description' => 'string',
        'make' => 'string',
        'model' => 'string',
        'orientation' => 'string',
        'primary_chromaticities' => 'double[]',
        'reference_black_white' => 'double[]',
        'resolution_unit' => 'string',
        'software' => 'string',
        'transfer_function' => 'int[]',
        'x_resolution' => 'double',
        'y_cb_cr_coefficients' => 'double[]',
        'y_cb_cr_positioning' => 'string',
        'y_resolution' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'artist' => null,
        'copyright' => null,
        'date_time' => null,
        'image_description' => null,
        'make' => null,
        'model' => null,
        'orientation' => null,
        'primary_chromaticities' => 'double',
        'reference_black_white' => 'double',
        'resolution_unit' => null,
        'software' => null,
        'transfer_function' => null,
        'x_resolution' => 'double',
        'y_cb_cr_coefficients' => 'double',
        'y_cb_cr_positioning' => null,
        'y_resolution' => 'double'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'artist' => 'Artist',
        'copyright' => 'Copyright',
        'date_time' => 'DateTime',
        'image_description' => 'ImageDescription',
        'make' => 'Make',
        'model' => 'Model',
        'orientation' => 'Orientation',
        'primary_chromaticities' => 'PrimaryChromaticities',
        'reference_black_white' => 'ReferenceBlackWhite',
        'resolution_unit' => 'ResolutionUnit',
        'software' => 'Software',
        'transfer_function' => 'TransferFunction',
        'x_resolution' => 'XResolution',
        'y_cb_cr_coefficients' => 'YCbCrCoefficients',
        'y_cb_cr_positioning' => 'YCbCrPositioning',
        'y_resolution' => 'YResolution'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'artist' => 'setArtist',
        'copyright' => 'setCopyright',
        'date_time' => 'setDateTime',
        'image_description' => 'setImageDescription',
        'make' => 'setMake',
        'model' => 'setModel',
        'orientation' => 'setOrientation',
        'primary_chromaticities' => 'setPrimaryChromaticities',
        'reference_black_white' => 'setReferenceBlackWhite',
        'resolution_unit' => 'setResolutionUnit',
        'software' => 'setSoftware',
        'transfer_function' => 'setTransferFunction',
        'x_resolution' => 'setXResolution',
        'y_cb_cr_coefficients' => 'setYCbCrCoefficients',
        'y_cb_cr_positioning' => 'setYCbCrPositioning',
        'y_resolution' => 'setYResolution'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'artist' => 'getArtist',
        'copyright' => 'getCopyright',
        'date_time' => 'getDateTime',
        'image_description' => 'getImageDescription',
        'make' => 'getMake',
        'model' => 'getModel',
        'orientation' => 'getOrientation',
        'primary_chromaticities' => 'getPrimaryChromaticities',
        'reference_black_white' => 'getReferenceBlackWhite',
        'resolution_unit' => 'getResolutionUnit',
        'software' => 'getSoftware',
        'transfer_function' => 'getTransferFunction',
        'x_resolution' => 'getXResolution',
        'y_cb_cr_coefficients' => 'getYCbCrCoefficients',
        'y_cb_cr_positioning' => 'getYCbCrPositioning',
        'y_resolution' => 'getYResolution'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['artist'] = isset($data['artist']) ? $data['artist'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['image_description'] = isset($data['image_description']) ? $data['image_description'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['primary_chromaticities'] = isset($data['primary_chromaticities']) ? $data['primary_chromaticities'] : null;
        $this->container['reference_black_white'] = isset($data['reference_black_white']) ? $data['reference_black_white'] : null;
        $this->container['resolution_unit'] = isset($data['resolution_unit']) ? $data['resolution_unit'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['transfer_function'] = isset($data['transfer_function']) ? $data['transfer_function'] : null;
        $this->container['x_resolution'] = isset($data['x_resolution']) ? $data['x_resolution'] : null;
        $this->container['y_cb_cr_coefficients'] = isset($data['y_cb_cr_coefficients']) ? $data['y_cb_cr_coefficients'] : null;
        $this->container['y_cb_cr_positioning'] = isset($data['y_cb_cr_positioning']) ? $data['y_cb_cr_positioning'] : null;
        $this->container['y_resolution'] = isset($data['y_resolution']) ? $data['y_resolution'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /*
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

        return true;
    }


    /*
     * Gets artist
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /*
     * Sets artist
     *
     * @param string $artist Gets or sets the artist.
     *
     * @return $this
     */
    public function setArtist($artist)
    {
        $this->container['artist'] = $artist;

        return $this;
    }

    /*
     * Gets copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /*
     * Sets copyright
     *
     * @param string $copyright Gets or sets the copyright info.
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /*
     * Gets date_time
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /*
     * Sets date_time
     *
     * @param string $date_time Gets or sets the date and time.
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /*
     * Gets image_description
     *
     * @return string
     */
    public function getImageDescription()
    {
        return $this->container['image_description'];
    }

    /*
     * Sets image_description
     *
     * @param string $image_description Gets or sets the image description.
     *
     * @return $this
     */
    public function setImageDescription($image_description)
    {
        $this->container['image_description'] = $image_description;

        return $this;
    }

    /*
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /*
     * Sets make
     *
     * @param string $make Gets or sets the manufacturer.
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /*
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /*
     * Sets model
     *
     * @param string $model Gets or sets the model.
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /*
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /*
     * Sets orientation
     *
     * @param string $orientation Gets or sets the orientation.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /*
     * Gets primary_chromaticities
     *
     * @return double[]
     */
    public function getPrimaryChromaticities()
    {
        return $this->container['primary_chromaticities'];
    }

    /*
     * Sets primary_chromaticities
     *
     * @param double[] $primary_chromaticities Gets or sets the primary chromaticities.
     *
     * @return $this
     */
    public function setPrimaryChromaticities($primary_chromaticities)
    {
        $this->container['primary_chromaticities'] = $primary_chromaticities;

        return $this;
    }

    /*
     * Gets reference_black_white
     *
     * @return double[]
     */
    public function getReferenceBlackWhite()
    {
        return $this->container['reference_black_white'];
    }

    /*
     * Sets reference_black_white
     *
     * @param double[] $reference_black_white Gets or sets the reference black and white.
     *
     * @return $this
     */
    public function setReferenceBlackWhite($reference_black_white)
    {
        $this->container['reference_black_white'] = $reference_black_white;

        return $this;
    }

    /*
     * Gets resolution_unit
     *
     * @return string
     */
    public function getResolutionUnit()
    {
        return $this->container['resolution_unit'];
    }

    /*
     * Sets resolution_unit
     *
     * @param string $resolution_unit Gets or sets the resolution unit.
     *
     * @return $this
     */
    public function setResolutionUnit($resolution_unit)
    {
        $this->container['resolution_unit'] = $resolution_unit;

        return $this;
    }

    /*
     * Gets software
     *
     * @return string
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /*
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

    /*
     * Gets transfer_function
     *
     * @return int[]
     */
    public function getTransferFunction()
    {
        return $this->container['transfer_function'];
    }

    /*
     * Sets transfer_function
     *
     * @param int[] $transfer_function Gets or sets the transfer function.
     *
     * @return $this
     */
    public function setTransferFunction($transfer_function)
    {
        $this->container['transfer_function'] = $transfer_function;

        return $this;
    }

    /*
     * Gets x_resolution
     *
     * @return double
     */
    public function getXResolution()
    {
        return $this->container['x_resolution'];
    }

    /*
     * Sets x_resolution
     *
     * @param double $x_resolution Gets or sets the X resolution.
     *
     * @return $this
     */
    public function setXResolution($x_resolution)
    {
        $this->container['x_resolution'] = $x_resolution;

        return $this;
    }

    /*
     * Gets y_cb_cr_coefficients
     *
     * @return double[]
     */
    public function getYCbCrCoefficients()
    {
        return $this->container['y_cb_cr_coefficients'];
    }

    /*
     * Sets y_cb_cr_coefficients
     *
     * @param double[] $y_cb_cr_coefficients Gets or sets the YCbCr coefficients.
     *
     * @return $this
     */
    public function setYCbCrCoefficients($y_cb_cr_coefficients)
    {
        $this->container['y_cb_cr_coefficients'] = $y_cb_cr_coefficients;

        return $this;
    }

    /*
     * Gets y_cb_cr_positioning
     *
     * @return string
     */
    public function getYCbCrPositioning()
    {
        return $this->container['y_cb_cr_positioning'];
    }

    /*
     * Sets y_cb_cr_positioning
     *
     * @param string $y_cb_cr_positioning Gets or sets the YCbCr positioning.
     *
     * @return $this
     */
    public function setYCbCrPositioning($y_cb_cr_positioning)
    {
        $this->container['y_cb_cr_positioning'] = $y_cb_cr_positioning;

        return $this;
    }

    /*
     * Gets y_resolution
     *
     * @return double
     */
    public function getYResolution()
    {
        return $this->container['y_resolution'];
    }

    /*
     * Sets y_resolution
     *
     * @param double $y_resolution Gets or sets the Y resolution.
     *
     * @return $this
     */
    public function setYResolution($y_resolution)
    {
        $this->container['y_resolution'] = $y_resolution;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


