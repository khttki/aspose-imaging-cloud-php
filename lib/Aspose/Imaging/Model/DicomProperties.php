<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DicomProperties.php">
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
 * DicomProperties
 *
 * @description Represents information about image in dicom format.
 */
class DicomProperties implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DicomProperties";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'planar_configuration' => 'int',
        'reds' => 'string',
        'greens' => 'string',
        'blues' => 'string',
        'dicom_header_info_by_bytes' => 'string',
        'signed_image' => 'bool',
        'dicom_info' => 'string[]',
        'samples_per_pixel' => 'int',
        'bits_allocated' => 'int',
        'photo_interpretation' => 'string',
        'width_tag_found' => 'bool',
        'height_tag_found' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'window_centre' => 'double',
        'window_width' => 'double',
        'pixel_representation' => 'int',
        'rescale_intercept' => 'double',
        'rescale_slope' => 'double',
        'number_of_frames' => 'int',
        'length_value' => 'int',
        'is_little_endian' => 'bool',
        'offset' => 'int',
        'dicom_found' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'planar_configuration' => 'int32',
        'reds' => 'byte',
        'greens' => 'byte',
        'blues' => 'byte',
        'dicom_header_info_by_bytes' => 'byte',
        'signed_image' => null,
        'dicom_info' => null,
        'samples_per_pixel' => 'int32',
        'bits_allocated' => 'int32',
        'photo_interpretation' => null,
        'width_tag_found' => null,
        'height_tag_found' => null,
        'width' => 'int32',
        'height' => 'int32',
        'window_centre' => 'double',
        'window_width' => 'double',
        'pixel_representation' => 'int32',
        'rescale_intercept' => 'double',
        'rescale_slope' => 'double',
        'number_of_frames' => 'int32',
        'length_value' => 'int32',
        'is_little_endian' => null,
        'offset' => 'int32',
        'dicom_found' => null
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
        'planar_configuration' => 'PlanarConfiguration',
        'reds' => 'Reds',
        'greens' => 'Greens',
        'blues' => 'Blues',
        'dicom_header_info_by_bytes' => 'DicomHeaderInfoByBytes',
        'signed_image' => 'SignedImage',
        'dicom_info' => 'DicomInfo',
        'samples_per_pixel' => 'SamplesPerPixel',
        'bits_allocated' => 'BitsAllocated',
        'photo_interpretation' => 'PhotoInterpretation',
        'width_tag_found' => 'WidthTagFound',
        'height_tag_found' => 'HeightTagFound',
        'width' => 'Width',
        'height' => 'Height',
        'window_centre' => 'WindowCentre',
        'window_width' => 'WindowWidth',
        'pixel_representation' => 'PixelRepresentation',
        'rescale_intercept' => 'RescaleIntercept',
        'rescale_slope' => 'RescaleSlope',
        'number_of_frames' => 'NumberOfFrames',
        'length_value' => 'LengthValue',
        'is_little_endian' => 'IsLittleEndian',
        'offset' => 'Offset',
        'dicom_found' => 'DicomFound'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planar_configuration' => 'setPlanarConfiguration',
        'reds' => 'setReds',
        'greens' => 'setGreens',
        'blues' => 'setBlues',
        'dicom_header_info_by_bytes' => 'setDicomHeaderInfoByBytes',
        'signed_image' => 'setSignedImage',
        'dicom_info' => 'setDicomInfo',
        'samples_per_pixel' => 'setSamplesPerPixel',
        'bits_allocated' => 'setBitsAllocated',
        'photo_interpretation' => 'setPhotoInterpretation',
        'width_tag_found' => 'setWidthTagFound',
        'height_tag_found' => 'setHeightTagFound',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'window_centre' => 'setWindowCentre',
        'window_width' => 'setWindowWidth',
        'pixel_representation' => 'setPixelRepresentation',
        'rescale_intercept' => 'setRescaleIntercept',
        'rescale_slope' => 'setRescaleSlope',
        'number_of_frames' => 'setNumberOfFrames',
        'length_value' => 'setLengthValue',
        'is_little_endian' => 'setIsLittleEndian',
        'offset' => 'setOffset',
        'dicom_found' => 'setDicomFound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planar_configuration' => 'getPlanarConfiguration',
        'reds' => 'getReds',
        'greens' => 'getGreens',
        'blues' => 'getBlues',
        'dicom_header_info_by_bytes' => 'getDicomHeaderInfoByBytes',
        'signed_image' => 'getSignedImage',
        'dicom_info' => 'getDicomInfo',
        'samples_per_pixel' => 'getSamplesPerPixel',
        'bits_allocated' => 'getBitsAllocated',
        'photo_interpretation' => 'getPhotoInterpretation',
        'width_tag_found' => 'getWidthTagFound',
        'height_tag_found' => 'getHeightTagFound',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'window_centre' => 'getWindowCentre',
        'window_width' => 'getWindowWidth',
        'pixel_representation' => 'getPixelRepresentation',
        'rescale_intercept' => 'getRescaleIntercept',
        'rescale_slope' => 'getRescaleSlope',
        'number_of_frames' => 'getNumberOfFrames',
        'length_value' => 'getLengthValue',
        'is_little_endian' => 'getIsLittleEndian',
        'offset' => 'getOffset',
        'dicom_found' => 'getDicomFound'
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
        $this->container['planar_configuration'] = isset($data['planar_configuration']) ? $data['planar_configuration'] : null;
        $this->container['reds'] = isset($data['reds']) ? $data['reds'] : null;
        $this->container['greens'] = isset($data['greens']) ? $data['greens'] : null;
        $this->container['blues'] = isset($data['blues']) ? $data['blues'] : null;
        $this->container['dicom_header_info_by_bytes'] = isset($data['dicom_header_info_by_bytes']) ? $data['dicom_header_info_by_bytes'] : null;
        $this->container['signed_image'] = isset($data['signed_image']) ? $data['signed_image'] : null;
        $this->container['dicom_info'] = isset($data['dicom_info']) ? $data['dicom_info'] : null;
        $this->container['samples_per_pixel'] = isset($data['samples_per_pixel']) ? $data['samples_per_pixel'] : null;
        $this->container['bits_allocated'] = isset($data['bits_allocated']) ? $data['bits_allocated'] : null;
        $this->container['photo_interpretation'] = isset($data['photo_interpretation']) ? $data['photo_interpretation'] : null;
        $this->container['width_tag_found'] = isset($data['width_tag_found']) ? $data['width_tag_found'] : null;
        $this->container['height_tag_found'] = isset($data['height_tag_found']) ? $data['height_tag_found'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['window_centre'] = isset($data['window_centre']) ? $data['window_centre'] : null;
        $this->container['window_width'] = isset($data['window_width']) ? $data['window_width'] : null;
        $this->container['pixel_representation'] = isset($data['pixel_representation']) ? $data['pixel_representation'] : null;
        $this->container['rescale_intercept'] = isset($data['rescale_intercept']) ? $data['rescale_intercept'] : null;
        $this->container['rescale_slope'] = isset($data['rescale_slope']) ? $data['rescale_slope'] : null;
        $this->container['number_of_frames'] = isset($data['number_of_frames']) ? $data['number_of_frames'] : null;
        $this->container['length_value'] = isset($data['length_value']) ? $data['length_value'] : null;
        $this->container['is_little_endian'] = isset($data['is_little_endian']) ? $data['is_little_endian'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['dicom_found'] = isset($data['dicom_found']) ? $data['dicom_found'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['planar_configuration'] === null) {
            $invalidProperties[] = "'planar_configuration' can't be null";
        }
        if (!is_null($this->container['reds']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['reds'])) {
            $invalidProperties[] = "invalid value for 'reds', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['greens']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['greens'])) {
            $invalidProperties[] = "invalid value for 'greens', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['blues']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['blues'])) {
            $invalidProperties[] = "invalid value for 'blues', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['dicom_header_info_by_bytes']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['dicom_header_info_by_bytes'])) {
            $invalidProperties[] = "invalid value for 'dicom_header_info_by_bytes', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['signed_image'] === null) {
            $invalidProperties[] = "'signed_image' can't be null";
        }
        if ($this->container['samples_per_pixel'] === null) {
            $invalidProperties[] = "'samples_per_pixel' can't be null";
        }
        if ($this->container['bits_allocated'] === null) {
            $invalidProperties[] = "'bits_allocated' can't be null";
        }
        if ($this->container['width_tag_found'] === null) {
            $invalidProperties[] = "'width_tag_found' can't be null";
        }
        if ($this->container['height_tag_found'] === null) {
            $invalidProperties[] = "'height_tag_found' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['window_centre'] === null) {
            $invalidProperties[] = "'window_centre' can't be null";
        }
        if ($this->container['window_width'] === null) {
            $invalidProperties[] = "'window_width' can't be null";
        }
        if ($this->container['pixel_representation'] === null) {
            $invalidProperties[] = "'pixel_representation' can't be null";
        }
        if ($this->container['rescale_intercept'] === null) {
            $invalidProperties[] = "'rescale_intercept' can't be null";
        }
        if ($this->container['rescale_slope'] === null) {
            $invalidProperties[] = "'rescale_slope' can't be null";
        }
        if ($this->container['number_of_frames'] === null) {
            $invalidProperties[] = "'number_of_frames' can't be null";
        }
        if ($this->container['length_value'] === null) {
            $invalidProperties[] = "'length_value' can't be null";
        }
        if ($this->container['is_little_endian'] === null) {
            $invalidProperties[] = "'is_little_endian' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['dicom_found'] === null) {
            $invalidProperties[] = "'dicom_found' can't be null";
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

        if ($this->container['planar_configuration'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['reds'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['greens'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['blues'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['dicom_header_info_by_bytes'])) {
            return false;
        }
        if ($this->container['signed_image'] === null) {
            return false;
        }
        if ($this->container['samples_per_pixel'] === null) {
            return false;
        }
        if ($this->container['bits_allocated'] === null) {
            return false;
        }
        if ($this->container['width_tag_found'] === null) {
            return false;
        }
        if ($this->container['height_tag_found'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['window_centre'] === null) {
            return false;
        }
        if ($this->container['window_width'] === null) {
            return false;
        }
        if ($this->container['pixel_representation'] === null) {
            return false;
        }
        if ($this->container['rescale_intercept'] === null) {
            return false;
        }
        if ($this->container['rescale_slope'] === null) {
            return false;
        }
        if ($this->container['number_of_frames'] === null) {
            return false;
        }
        if ($this->container['length_value'] === null) {
            return false;
        }
        if ($this->container['is_little_endian'] === null) {
            return false;
        }
        if ($this->container['offset'] === null) {
            return false;
        }
        if ($this->container['dicom_found'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets planar_configuration
     *
     * @return int
     */
    public function getPlanarConfiguration()
    {
        return $this->container['planar_configuration'];
    }

    /**
     * Sets planar_configuration
     *
     * @param int $planar_configuration Gets or sets the planar configuration.
     *
     * @return $this
     */
    public function setPlanarConfiguration($planar_configuration)
    {
        $this->container['planar_configuration'] = $planar_configuration;

        return $this;
    }

    /**
     * Gets reds
     *
     * @return string
     */
    public function getReds()
    {
        return $this->container['reds'];
    }

    /**
     * Sets reds
     *
     * @param string $reds Gets or sets the array of red colors.
     *
     * @return $this
     */
    public function setReds($reds)
    {

        if (!is_null($reds) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $reds))) {
            throw new \InvalidArgumentException("invalid value for $reds when calling DicomProperties., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['reds'] = $reds;

        return $this;
    }

    /**
     * Gets greens
     *
     * @return string
     */
    public function getGreens()
    {
        return $this->container['greens'];
    }

    /**
     * Sets greens
     *
     * @param string $greens Gets or sets the array of green colors.
     *
     * @return $this
     */
    public function setGreens($greens)
    {

        if (!is_null($greens) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $greens))) {
            throw new \InvalidArgumentException("invalid value for $greens when calling DicomProperties., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['greens'] = $greens;

        return $this;
    }

    /**
     * Gets blues
     *
     * @return string
     */
    public function getBlues()
    {
        return $this->container['blues'];
    }

    /**
     * Sets blues
     *
     * @param string $blues Gets or sets the array of blue colors.
     *
     * @return $this
     */
    public function setBlues($blues)
    {

        if (!is_null($blues) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $blues))) {
            throw new \InvalidArgumentException("invalid value for $blues when calling DicomProperties., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['blues'] = $blues;

        return $this;
    }

    /**
     * Gets dicom_header_info_by_bytes
     *
     * @return string
     */
    public function getDicomHeaderInfoByBytes()
    {
        return $this->container['dicom_header_info_by_bytes'];
    }

    /**
     * Sets dicom_header_info_by_bytes
     *
     * @param string $dicom_header_info_by_bytes Gets or sets the header information by bytes.
     *
     * @return $this
     */
    public function setDicomHeaderInfoByBytes($dicom_header_info_by_bytes)
    {

        if (!is_null($dicom_header_info_by_bytes) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $dicom_header_info_by_bytes))) {
            throw new \InvalidArgumentException("invalid value for $dicom_header_info_by_bytes when calling DicomProperties., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['dicom_header_info_by_bytes'] = $dicom_header_info_by_bytes;

        return $this;
    }

    /**
     * Gets signed_image
     *
     * @return bool
     */
    public function getSignedImage()
    {
        return $this->container['signed_image'];
    }

    /**
     * Sets signed_image
     *
     * @param bool $signed_image Gets or sets a value indicating whether it's a signed image.
     *
     * @return $this
     */
    public function setSignedImage($signed_image)
    {
        $this->container['signed_image'] = $signed_image;

        return $this;
    }

    /**
     * Gets dicom_info
     *
     * @return string[]
     */
    public function getDicomInfo()
    {
        return $this->container['dicom_info'];
    }

    /**
     * Sets dicom_info
     *
     * @param string[] $dicom_info Gets or sets the header information of the DICOM file.
     *
     * @return $this
     */
    public function setDicomInfo($dicom_info)
    {
        $this->container['dicom_info'] = $dicom_info;

        return $this;
    }

    /**
     * Gets samples_per_pixel
     *
     * @return int
     */
    public function getSamplesPerPixel()
    {
        return $this->container['samples_per_pixel'];
    }

    /**
     * Sets samples_per_pixel
     *
     * @param int $samples_per_pixel Gets or sets samples per pixel count.
     *
     * @return $this
     */
    public function setSamplesPerPixel($samples_per_pixel)
    {
        $this->container['samples_per_pixel'] = $samples_per_pixel;

        return $this;
    }

    /**
     * Gets bits_allocated
     *
     * @return int
     */
    public function getBitsAllocated()
    {
        return $this->container['bits_allocated'];
    }

    /**
     * Sets bits_allocated
     *
     * @param int $bits_allocated Gets or sets allocated bits count.
     *
     * @return $this
     */
    public function setBitsAllocated($bits_allocated)
    {
        $this->container['bits_allocated'] = $bits_allocated;

        return $this;
    }

    /**
     * Gets photo_interpretation
     *
     * @return string
     */
    public function getPhotoInterpretation()
    {
        return $this->container['photo_interpretation'];
    }

    /**
     * Sets photo_interpretation
     *
     * @param string $photo_interpretation Gets or sets the photo interpretation.
     *
     * @return $this
     */
    public function setPhotoInterpretation($photo_interpretation)
    {
        $this->container['photo_interpretation'] = $photo_interpretation;

        return $this;
    }

    /**
     * Gets width_tag_found
     *
     * @return bool
     */
    public function getWidthTagFound()
    {
        return $this->container['width_tag_found'];
    }

    /**
     * Sets width_tag_found
     *
     * @param bool $width_tag_found Gets or sets a value indicating whether width tag found.
     *
     * @return $this
     */
    public function setWidthTagFound($width_tag_found)
    {
        $this->container['width_tag_found'] = $width_tag_found;

        return $this;
    }

    /**
     * Gets height_tag_found
     *
     * @return bool
     */
    public function getHeightTagFound()
    {
        return $this->container['height_tag_found'];
    }

    /**
     * Sets height_tag_found
     *
     * @param bool $height_tag_found Gets or sets a value indicating whether height tag found.
     *
     * @return $this
     */
    public function setHeightTagFound($height_tag_found)
    {
        $this->container['height_tag_found'] = $height_tag_found;

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
     * @param int $width Gets or sets the width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
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
     * @param int $height Gets or sets the height.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets window_centre
     *
     * @return double
     */
    public function getWindowCentre()
    {
        return $this->container['window_centre'];
    }

    /**
     * Sets window_centre
     *
     * @param double $window_centre Gets or sets the window centre.
     *
     * @return $this
     */
    public function setWindowCentre($window_centre)
    {
        $this->container['window_centre'] = $window_centre;

        return $this;
    }

    /**
     * Gets window_width
     *
     * @return double
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width
     *
     * @param double $window_width Gets or sets the width of the window.
     *
     * @return $this
     */
    public function setWindowWidth($window_width)
    {
        $this->container['window_width'] = $window_width;

        return $this;
    }

    /**
     * Gets pixel_representation
     *
     * @return int
     */
    public function getPixelRepresentation()
    {
        return $this->container['pixel_representation'];
    }

    /**
     * Sets pixel_representation
     *
     * @param int $pixel_representation Gets or sets data representation of the pixel samples.
     *
     * @return $this
     */
    public function setPixelRepresentation($pixel_representation)
    {
        $this->container['pixel_representation'] = $pixel_representation;

        return $this;
    }

    /**
     * Gets rescale_intercept
     *
     * @return double
     */
    public function getRescaleIntercept()
    {
        return $this->container['rescale_intercept'];
    }

    /**
     * Sets rescale_intercept
     *
     * @param double $rescale_intercept Gets or sets a value of the rescale intercept.
     *
     * @return $this
     */
    public function setRescaleIntercept($rescale_intercept)
    {
        $this->container['rescale_intercept'] = $rescale_intercept;

        return $this;
    }

    /**
     * Gets rescale_slope
     *
     * @return double
     */
    public function getRescaleSlope()
    {
        return $this->container['rescale_slope'];
    }

    /**
     * Sets rescale_slope
     *
     * @param double $rescale_slope Gets or sets a value of the rescale slope.
     *
     * @return $this
     */
    public function setRescaleSlope($rescale_slope)
    {
        $this->container['rescale_slope'] = $rescale_slope;

        return $this;
    }

    /**
     * Gets number_of_frames
     *
     * @return int
     */
    public function getNumberOfFrames()
    {
        return $this->container['number_of_frames'];
    }

    /**
     * Sets number_of_frames
     *
     * @param int $number_of_frames Gets or sets the number of frames.
     *
     * @return $this
     */
    public function setNumberOfFrames($number_of_frames)
    {
        $this->container['number_of_frames'] = $number_of_frames;

        return $this;
    }

    /**
     * Gets length_value
     *
     * @return int
     */
    public function getLengthValue()
    {
        return $this->container['length_value'];
    }

    /**
     * Sets length_value
     *
     * @param int $length_value Gets or sets the length of element.
     *
     * @return $this
     */
    public function setLengthValue($length_value)
    {
        $this->container['length_value'] = $length_value;

        return $this;
    }

    /**
     * Gets is_little_endian
     *
     * @return bool
     */
    public function getIsLittleEndian()
    {
        return $this->container['is_little_endian'];
    }

    /**
     * Sets is_little_endian
     *
     * @param bool $is_little_endian Indicates if DICOM image has little endian byte order.
     *
     * @return $this
     */
    public function setIsLittleEndian($is_little_endian)
    {
        $this->container['is_little_endian'] = $is_little_endian;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset Gets or sets the offset.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets dicom_found
     *
     * @return bool
     */
    public function getDicomFound()
    {
        return $this->container['dicom_found'];
    }

    /**
     * Sets dicom_found
     *
     * @param bool $dicom_found Gets or sets a value indicating whether \"DICOM\" data is found.
     *
     * @return $this
     */
    public function setDicomFound($dicom_found)
    {
        $this->container['dicom_found'] = $dicom_found;

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


