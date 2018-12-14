<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffOptions.php">
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
 * TiffOptions
 *
 * @description Represents options for TIFF frame.
 */
class TiffOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TiffOptions";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_valid' => 'bool',
        'artist' => 'string',
        'byte_order' => 'string',
        'bits_per_sample' => 'int[]',
        'compression' => 'string',
        'copyright' => 'string',
        'color_map' => 'int[]',
        'date_time' => 'string',
        'document_name' => 'string',
        'alpha_storage' => 'string',
        'fill_order' => 'string',
        'half_tone_hints' => 'int[]',
        'image_description' => 'string',
        'ink_names' => 'string',
        'scanner_manufacturer' => 'string',
        'max_sample_value' => 'int[]',
        'min_sample_value' => 'int[]',
        'scanner_model' => 'string',
        'page_name' => 'string',
        'orientation' => 'string',
        'page_number' => 'int[]',
        'photometric' => 'string',
        'planar_configuration' => 'string',
        'resolution_unit' => 'string',
        'rows_per_strip' => 'int',
        'sample_format' => 'string[]',
        'samples_per_pixel' => 'int',
        'smax_sample_value' => 'int[]',
        'smin_sample_value' => 'int[]',
        'software_type' => 'string',
        'strip_byte_counts' => 'int[]',
        'strip_offsets' => 'int[]',
        'sub_file_type' => 'string',
        'target_printer' => 'string',
        'threshholding' => 'string',
        'total_pages' => 'int',
        'xposition' => 'double',
        'xresolution' => 'double',
        'yposition' => 'double',
        'yresolution' => 'double',
        'fax_t4_options' => 'string',
        'predictor' => 'string',
        'image_length' => 'int',
        'image_width' => 'int',
        'valid_tag_count' => 'int',
        'bits_per_pixel' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_valid' => null,
        'artist' => null,
        'byte_order' => null,
        'bits_per_sample' => null,
        'compression' => null,
        'copyright' => null,
        'color_map' => null,
        'date_time' => null,
        'document_name' => null,
        'alpha_storage' => null,
        'fill_order' => null,
        'half_tone_hints' => null,
        'image_description' => null,
        'ink_names' => null,
        'scanner_manufacturer' => null,
        'max_sample_value' => null,
        'min_sample_value' => null,
        'scanner_model' => null,
        'page_name' => null,
        'orientation' => null,
        'page_number' => null,
        'photometric' => null,
        'planar_configuration' => null,
        'resolution_unit' => null,
        'rows_per_strip' => 'int64',
        'sample_format' => null,
        'samples_per_pixel' => null,
        'smax_sample_value' => 'int64',
        'smin_sample_value' => 'int64',
        'software_type' => null,
        'strip_byte_counts' => 'int64',
        'strip_offsets' => 'int64',
        'sub_file_type' => null,
        'target_printer' => null,
        'threshholding' => null,
        'total_pages' => null,
        'xposition' => 'double',
        'xresolution' => 'double',
        'yposition' => 'double',
        'yresolution' => 'double',
        'fax_t4_options' => null,
        'predictor' => null,
        'image_length' => 'int64',
        'image_width' => 'int64',
        'valid_tag_count' => 'int32',
        'bits_per_pixel' => 'int32'
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
        'is_valid' => 'IsValid',
        'artist' => 'Artist',
        'byte_order' => 'ByteOrder',
        'bits_per_sample' => 'BitsPerSample',
        'compression' => 'Compression',
        'copyright' => 'Copyright',
        'color_map' => 'ColorMap',
        'date_time' => 'DateTime',
        'document_name' => 'DocumentName',
        'alpha_storage' => 'AlphaStorage',
        'fill_order' => 'FillOrder',
        'half_tone_hints' => 'HalfToneHints',
        'image_description' => 'ImageDescription',
        'ink_names' => 'InkNames',
        'scanner_manufacturer' => 'ScannerManufacturer',
        'max_sample_value' => 'MaxSampleValue',
        'min_sample_value' => 'MinSampleValue',
        'scanner_model' => 'ScannerModel',
        'page_name' => 'PageName',
        'orientation' => 'Orientation',
        'page_number' => 'PageNumber',
        'photometric' => 'Photometric',
        'planar_configuration' => 'PlanarConfiguration',
        'resolution_unit' => 'ResolutionUnit',
        'rows_per_strip' => 'RowsPerStrip',
        'sample_format' => 'SampleFormat',
        'samples_per_pixel' => 'SamplesPerPixel',
        'smax_sample_value' => 'SmaxSampleValue',
        'smin_sample_value' => 'SminSampleValue',
        'software_type' => 'SoftwareType',
        'strip_byte_counts' => 'StripByteCounts',
        'strip_offsets' => 'StripOffsets',
        'sub_file_type' => 'SubFileType',
        'target_printer' => 'TargetPrinter',
        'threshholding' => 'Threshholding',
        'total_pages' => 'TotalPages',
        'xposition' => 'Xposition',
        'xresolution' => 'Xresolution',
        'yposition' => 'Yposition',
        'yresolution' => 'Yresolution',
        'fax_t4_options' => 'FaxT4Options',
        'predictor' => 'Predictor',
        'image_length' => 'ImageLength',
        'image_width' => 'ImageWidth',
        'valid_tag_count' => 'ValidTagCount',
        'bits_per_pixel' => 'BitsPerPixel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_valid' => 'setIsValid',
        'artist' => 'setArtist',
        'byte_order' => 'setByteOrder',
        'bits_per_sample' => 'setBitsPerSample',
        'compression' => 'setCompression',
        'copyright' => 'setCopyright',
        'color_map' => 'setColorMap',
        'date_time' => 'setDateTime',
        'document_name' => 'setDocumentName',
        'alpha_storage' => 'setAlphaStorage',
        'fill_order' => 'setFillOrder',
        'half_tone_hints' => 'setHalfToneHints',
        'image_description' => 'setImageDescription',
        'ink_names' => 'setInkNames',
        'scanner_manufacturer' => 'setScannerManufacturer',
        'max_sample_value' => 'setMaxSampleValue',
        'min_sample_value' => 'setMinSampleValue',
        'scanner_model' => 'setScannerModel',
        'page_name' => 'setPageName',
        'orientation' => 'setOrientation',
        'page_number' => 'setPageNumber',
        'photometric' => 'setPhotometric',
        'planar_configuration' => 'setPlanarConfiguration',
        'resolution_unit' => 'setResolutionUnit',
        'rows_per_strip' => 'setRowsPerStrip',
        'sample_format' => 'setSampleFormat',
        'samples_per_pixel' => 'setSamplesPerPixel',
        'smax_sample_value' => 'setSmaxSampleValue',
        'smin_sample_value' => 'setSminSampleValue',
        'software_type' => 'setSoftwareType',
        'strip_byte_counts' => 'setStripByteCounts',
        'strip_offsets' => 'setStripOffsets',
        'sub_file_type' => 'setSubFileType',
        'target_printer' => 'setTargetPrinter',
        'threshholding' => 'setThreshholding',
        'total_pages' => 'setTotalPages',
        'xposition' => 'setXposition',
        'xresolution' => 'setXresolution',
        'yposition' => 'setYposition',
        'yresolution' => 'setYresolution',
        'fax_t4_options' => 'setFaxT4Options',
        'predictor' => 'setPredictor',
        'image_length' => 'setImageLength',
        'image_width' => 'setImageWidth',
        'valid_tag_count' => 'setValidTagCount',
        'bits_per_pixel' => 'setBitsPerPixel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_valid' => 'getIsValid',
        'artist' => 'getArtist',
        'byte_order' => 'getByteOrder',
        'bits_per_sample' => 'getBitsPerSample',
        'compression' => 'getCompression',
        'copyright' => 'getCopyright',
        'color_map' => 'getColorMap',
        'date_time' => 'getDateTime',
        'document_name' => 'getDocumentName',
        'alpha_storage' => 'getAlphaStorage',
        'fill_order' => 'getFillOrder',
        'half_tone_hints' => 'getHalfToneHints',
        'image_description' => 'getImageDescription',
        'ink_names' => 'getInkNames',
        'scanner_manufacturer' => 'getScannerManufacturer',
        'max_sample_value' => 'getMaxSampleValue',
        'min_sample_value' => 'getMinSampleValue',
        'scanner_model' => 'getScannerModel',
        'page_name' => 'getPageName',
        'orientation' => 'getOrientation',
        'page_number' => 'getPageNumber',
        'photometric' => 'getPhotometric',
        'planar_configuration' => 'getPlanarConfiguration',
        'resolution_unit' => 'getResolutionUnit',
        'rows_per_strip' => 'getRowsPerStrip',
        'sample_format' => 'getSampleFormat',
        'samples_per_pixel' => 'getSamplesPerPixel',
        'smax_sample_value' => 'getSmaxSampleValue',
        'smin_sample_value' => 'getSminSampleValue',
        'software_type' => 'getSoftwareType',
        'strip_byte_counts' => 'getStripByteCounts',
        'strip_offsets' => 'getStripOffsets',
        'sub_file_type' => 'getSubFileType',
        'target_printer' => 'getTargetPrinter',
        'threshholding' => 'getThreshholding',
        'total_pages' => 'getTotalPages',
        'xposition' => 'getXposition',
        'xresolution' => 'getXresolution',
        'yposition' => 'getYposition',
        'yresolution' => 'getYresolution',
        'fax_t4_options' => 'getFaxT4Options',
        'predictor' => 'getPredictor',
        'image_length' => 'getImageLength',
        'image_width' => 'getImageWidth',
        'valid_tag_count' => 'getValidTagCount',
        'bits_per_pixel' => 'getBitsPerPixel'
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
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['artist'] = isset($data['artist']) ? $data['artist'] : null;
        $this->container['byte_order'] = isset($data['byte_order']) ? $data['byte_order'] : null;
        $this->container['bits_per_sample'] = isset($data['bits_per_sample']) ? $data['bits_per_sample'] : null;
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['color_map'] = isset($data['color_map']) ? $data['color_map'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['document_name'] = isset($data['document_name']) ? $data['document_name'] : null;
        $this->container['alpha_storage'] = isset($data['alpha_storage']) ? $data['alpha_storage'] : null;
        $this->container['fill_order'] = isset($data['fill_order']) ? $data['fill_order'] : null;
        $this->container['half_tone_hints'] = isset($data['half_tone_hints']) ? $data['half_tone_hints'] : null;
        $this->container['image_description'] = isset($data['image_description']) ? $data['image_description'] : null;
        $this->container['ink_names'] = isset($data['ink_names']) ? $data['ink_names'] : null;
        $this->container['scanner_manufacturer'] = isset($data['scanner_manufacturer']) ? $data['scanner_manufacturer'] : null;
        $this->container['max_sample_value'] = isset($data['max_sample_value']) ? $data['max_sample_value'] : null;
        $this->container['min_sample_value'] = isset($data['min_sample_value']) ? $data['min_sample_value'] : null;
        $this->container['scanner_model'] = isset($data['scanner_model']) ? $data['scanner_model'] : null;
        $this->container['page_name'] = isset($data['page_name']) ? $data['page_name'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['photometric'] = isset($data['photometric']) ? $data['photometric'] : null;
        $this->container['planar_configuration'] = isset($data['planar_configuration']) ? $data['planar_configuration'] : null;
        $this->container['resolution_unit'] = isset($data['resolution_unit']) ? $data['resolution_unit'] : null;
        $this->container['rows_per_strip'] = isset($data['rows_per_strip']) ? $data['rows_per_strip'] : null;
        $this->container['sample_format'] = isset($data['sample_format']) ? $data['sample_format'] : null;
        $this->container['samples_per_pixel'] = isset($data['samples_per_pixel']) ? $data['samples_per_pixel'] : null;
        $this->container['smax_sample_value'] = isset($data['smax_sample_value']) ? $data['smax_sample_value'] : null;
        $this->container['smin_sample_value'] = isset($data['smin_sample_value']) ? $data['smin_sample_value'] : null;
        $this->container['software_type'] = isset($data['software_type']) ? $data['software_type'] : null;
        $this->container['strip_byte_counts'] = isset($data['strip_byte_counts']) ? $data['strip_byte_counts'] : null;
        $this->container['strip_offsets'] = isset($data['strip_offsets']) ? $data['strip_offsets'] : null;
        $this->container['sub_file_type'] = isset($data['sub_file_type']) ? $data['sub_file_type'] : null;
        $this->container['target_printer'] = isset($data['target_printer']) ? $data['target_printer'] : null;
        $this->container['threshholding'] = isset($data['threshholding']) ? $data['threshholding'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['xposition'] = isset($data['xposition']) ? $data['xposition'] : null;
        $this->container['xresolution'] = isset($data['xresolution']) ? $data['xresolution'] : null;
        $this->container['yposition'] = isset($data['yposition']) ? $data['yposition'] : null;
        $this->container['yresolution'] = isset($data['yresolution']) ? $data['yresolution'] : null;
        $this->container['fax_t4_options'] = isset($data['fax_t4_options']) ? $data['fax_t4_options'] : null;
        $this->container['predictor'] = isset($data['predictor']) ? $data['predictor'] : null;
        $this->container['image_length'] = isset($data['image_length']) ? $data['image_length'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['valid_tag_count'] = isset($data['valid_tag_count']) ? $data['valid_tag_count'] : null;
        $this->container['bits_per_pixel'] = isset($data['bits_per_pixel']) ? $data['bits_per_pixel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_valid'] === null) {
            $invalidProperties[] = "'is_valid' can't be null";
        }
        if ($this->container['rows_per_strip'] === null) {
            $invalidProperties[] = "'rows_per_strip' can't be null";
        }
        if ($this->container['samples_per_pixel'] === null) {
            $invalidProperties[] = "'samples_per_pixel' can't be null";
        }
        if ($this->container['total_pages'] === null) {
            $invalidProperties[] = "'total_pages' can't be null";
        }
        if ($this->container['xposition'] === null) {
            $invalidProperties[] = "'xposition' can't be null";
        }
        if ($this->container['xresolution'] === null) {
            $invalidProperties[] = "'xresolution' can't be null";
        }
        if ($this->container['yposition'] === null) {
            $invalidProperties[] = "'yposition' can't be null";
        }
        if ($this->container['yresolution'] === null) {
            $invalidProperties[] = "'yresolution' can't be null";
        }
        if ($this->container['image_length'] === null) {
            $invalidProperties[] = "'image_length' can't be null";
        }
        if ($this->container['image_width'] === null) {
            $invalidProperties[] = "'image_width' can't be null";
        }
        if ($this->container['valid_tag_count'] === null) {
            $invalidProperties[] = "'valid_tag_count' can't be null";
        }
        if ($this->container['bits_per_pixel'] === null) {
            $invalidProperties[] = "'bits_per_pixel' can't be null";
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

        if ($this->container['is_valid'] === null) {
            return false;
        }
        if ($this->container['rows_per_strip'] === null) {
            return false;
        }
        if ($this->container['samples_per_pixel'] === null) {
            return false;
        }
        if ($this->container['total_pages'] === null) {
            return false;
        }
        if ($this->container['xposition'] === null) {
            return false;
        }
        if ($this->container['xresolution'] === null) {
            return false;
        }
        if ($this->container['yposition'] === null) {
            return false;
        }
        if ($this->container['yresolution'] === null) {
            return false;
        }
        if ($this->container['image_length'] === null) {
            return false;
        }
        if ($this->container['image_width'] === null) {
            return false;
        }
        if ($this->container['valid_tag_count'] === null) {
            return false;
        }
        if ($this->container['bits_per_pixel'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid Gets or sets a value indicating whether TIFF image has valid data.
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets artist
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /**
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

    /**
     * Gets byte_order
     *
     * @return string
     */
    public function getByteOrder()
    {
        return $this->container['byte_order'];
    }

    /**
     * Sets byte_order
     *
     * @param string $byte_order Gets or sets the byte order.
     *
     * @return $this
     */
    public function setByteOrder($byte_order)
    {
        $this->container['byte_order'] = $byte_order;

        return $this;
    }

    /**
     * Gets bits_per_sample
     *
     * @return int[]
     */
    public function getBitsPerSample()
    {
        return $this->container['bits_per_sample'];
    }

    /**
     * Sets bits_per_sample
     *
     * @param int[] $bits_per_sample Gets or sets the bits per sample.
     *
     * @return $this
     */
    public function setBitsPerSample($bits_per_sample)
    {
        $this->container['bits_per_sample'] = $bits_per_sample;

        return $this;
    }

    /**
     * Gets compression
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param string $compression Gets or sets the compression.
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $this->container['compression'] = $compression;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
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

    /**
     * Gets color_map
     *
     * @return int[]
     */
    public function getColorMap()
    {
        return $this->container['color_map'];
    }

    /**
     * Sets color_map
     *
     * @param int[] $color_map Gets or sets the color map.
     *
     * @return $this
     */
    public function setColorMap($color_map)
    {
        $this->container['color_map'] = $color_map;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
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

    /**
     * Gets document_name
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     *
     * @param string $document_name Gets or sets the document name.
     *
     * @return $this
     */
    public function setDocumentName($document_name)
    {
        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets alpha_storage
     *
     * @return string
     */
    public function getAlphaStorage()
    {
        return $this->container['alpha_storage'];
    }

    /**
     * Sets alpha_storage
     *
     * @param string $alpha_storage Gets or sets the alpha storage.
     *
     * @return $this
     */
    public function setAlphaStorage($alpha_storage)
    {
        $this->container['alpha_storage'] = $alpha_storage;

        return $this;
    }

    /**
     * Gets fill_order
     *
     * @return string
     */
    public function getFillOrder()
    {
        return $this->container['fill_order'];
    }

    /**
     * Sets fill_order
     *
     * @param string $fill_order Gets or sets the fill order.
     *
     * @return $this
     */
    public function setFillOrder($fill_order)
    {
        $this->container['fill_order'] = $fill_order;

        return $this;
    }

    /**
     * Gets half_tone_hints
     *
     * @return int[]
     */
    public function getHalfToneHints()
    {
        return $this->container['half_tone_hints'];
    }

    /**
     * Sets half_tone_hints
     *
     * @param int[] $half_tone_hints Gets or sets the half-tone hints.
     *
     * @return $this
     */
    public function setHalfToneHints($half_tone_hints)
    {
        $this->container['half_tone_hints'] = $half_tone_hints;

        return $this;
    }

    /**
     * Gets image_description
     *
     * @return string
     */
    public function getImageDescription()
    {
        return $this->container['image_description'];
    }

    /**
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

    /**
     * Gets ink_names
     *
     * @return string
     */
    public function getInkNames()
    {
        return $this->container['ink_names'];
    }

    /**
     * Sets ink_names
     *
     * @param string $ink_names Gets or sets the ink names.
     *
     * @return $this
     */
    public function setInkNames($ink_names)
    {
        $this->container['ink_names'] = $ink_names;

        return $this;
    }

    /**
     * Gets scanner_manufacturer
     *
     * @return string
     */
    public function getScannerManufacturer()
    {
        return $this->container['scanner_manufacturer'];
    }

    /**
     * Sets scanner_manufacturer
     *
     * @param string $scanner_manufacturer Gets or sets the scanner manufacturer.
     *
     * @return $this
     */
    public function setScannerManufacturer($scanner_manufacturer)
    {
        $this->container['scanner_manufacturer'] = $scanner_manufacturer;

        return $this;
    }

    /**
     * Gets max_sample_value
     *
     * @return int[]
     */
    public function getMaxSampleValue()
    {
        return $this->container['max_sample_value'];
    }

    /**
     * Sets max_sample_value
     *
     * @param int[] $max_sample_value Gets or sets the max sample value.
     *
     * @return $this
     */
    public function setMaxSampleValue($max_sample_value)
    {
        $this->container['max_sample_value'] = $max_sample_value;

        return $this;
    }

    /**
     * Gets min_sample_value
     *
     * @return int[]
     */
    public function getMinSampleValue()
    {
        return $this->container['min_sample_value'];
    }

    /**
     * Sets min_sample_value
     *
     * @param int[] $min_sample_value Gets or sets the min sample value.
     *
     * @return $this
     */
    public function setMinSampleValue($min_sample_value)
    {
        $this->container['min_sample_value'] = $min_sample_value;

        return $this;
    }

    /**
     * Gets scanner_model
     *
     * @return string
     */
    public function getScannerModel()
    {
        return $this->container['scanner_model'];
    }

    /**
     * Sets scanner_model
     *
     * @param string $scanner_model Gets or sets the scanner model.
     *
     * @return $this
     */
    public function setScannerModel($scanner_model)
    {
        $this->container['scanner_model'] = $scanner_model;

        return $this;
    }

    /**
     * Gets page_name
     *
     * @return string
     */
    public function getPageName()
    {
        return $this->container['page_name'];
    }

    /**
     * Sets page_name
     *
     * @param string $page_name Gets or sets the page name.
     *
     * @return $this
     */
    public function setPageName($page_name)
    {
        $this->container['page_name'] = $page_name;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
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

    /**
     * Gets page_number
     *
     * @return int[]
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int[] $page_number Gets or sets the page number.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets photometric
     *
     * @return string
     */
    public function getPhotometric()
    {
        return $this->container['photometric'];
    }

    /**
     * Sets photometric
     *
     * @param string $photometric Gets or sets the photometric interpretation.
     *
     * @return $this
     */
    public function setPhotometric($photometric)
    {
        $this->container['photometric'] = $photometric;

        return $this;
    }

    /**
     * Gets planar_configuration
     *
     * @return string
     */
    public function getPlanarConfiguration()
    {
        return $this->container['planar_configuration'];
    }

    /**
     * Sets planar_configuration
     *
     * @param string $planar_configuration Gets or sets the planar configuration.
     *
     * @return $this
     */
    public function setPlanarConfiguration($planar_configuration)
    {
        $this->container['planar_configuration'] = $planar_configuration;

        return $this;
    }

    /**
     * Gets resolution_unit
     *
     * @return string
     */
    public function getResolutionUnit()
    {
        return $this->container['resolution_unit'];
    }

    /**
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

    /**
     * Gets rows_per_strip
     *
     * @return int
     */
    public function getRowsPerStrip()
    {
        return $this->container['rows_per_strip'];
    }

    /**
     * Sets rows_per_strip
     *
     * @param int $rows_per_strip Gets or sets the rows per strip.
     *
     * @return $this
     */
    public function setRowsPerStrip($rows_per_strip)
    {
        $this->container['rows_per_strip'] = $rows_per_strip;

        return $this;
    }

    /**
     * Gets sample_format
     *
     * @return string[]
     */
    public function getSampleFormat()
    {
        return $this->container['sample_format'];
    }

    /**
     * Sets sample_format
     *
     * @param string[] $sample_format Gets or sets the sample format.
     *
     * @return $this
     */
    public function setSampleFormat($sample_format)
    {
        $this->container['sample_format'] = $sample_format;

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
     * @param int $samples_per_pixel Gets or sets the samples per pixel.
     *
     * @return $this
     */
    public function setSamplesPerPixel($samples_per_pixel)
    {
        $this->container['samples_per_pixel'] = $samples_per_pixel;

        return $this;
    }

    /**
     * Gets smax_sample_value
     *
     * @return int[]
     */
    public function getSmaxSampleValue()
    {
        return $this->container['smax_sample_value'];
    }

    /**
     * Sets smax_sample_value
     *
     * @param int[] $smax_sample_value Gets or sets the Smax sample value.
     *
     * @return $this
     */
    public function setSmaxSampleValue($smax_sample_value)
    {
        $this->container['smax_sample_value'] = $smax_sample_value;

        return $this;
    }

    /**
     * Gets smin_sample_value
     *
     * @return int[]
     */
    public function getSminSampleValue()
    {
        return $this->container['smin_sample_value'];
    }

    /**
     * Sets smin_sample_value
     *
     * @param int[] $smin_sample_value Gets or sets the Smin sample value.
     *
     * @return $this
     */
    public function setSminSampleValue($smin_sample_value)
    {
        $this->container['smin_sample_value'] = $smin_sample_value;

        return $this;
    }

    /**
     * Gets software_type
     *
     * @return string
     */
    public function getSoftwareType()
    {
        return $this->container['software_type'];
    }

    /**
     * Sets software_type
     *
     * @param string $software_type Gets or sets the software type.
     *
     * @return $this
     */
    public function setSoftwareType($software_type)
    {
        $this->container['software_type'] = $software_type;

        return $this;
    }

    /**
     * Gets strip_byte_counts
     *
     * @return int[]
     */
    public function getStripByteCounts()
    {
        return $this->container['strip_byte_counts'];
    }

    /**
     * Sets strip_byte_counts
     *
     * @param int[] $strip_byte_counts Gets or sets the strip byte counts.
     *
     * @return $this
     */
    public function setStripByteCounts($strip_byte_counts)
    {
        $this->container['strip_byte_counts'] = $strip_byte_counts;

        return $this;
    }

    /**
     * Gets strip_offsets
     *
     * @return int[]
     */
    public function getStripOffsets()
    {
        return $this->container['strip_offsets'];
    }

    /**
     * Sets strip_offsets
     *
     * @param int[] $strip_offsets Gets or sets the strip offsets.
     *
     * @return $this
     */
    public function setStripOffsets($strip_offsets)
    {
        $this->container['strip_offsets'] = $strip_offsets;

        return $this;
    }

    /**
     * Gets sub_file_type
     *
     * @return string
     */
    public function getSubFileType()
    {
        return $this->container['sub_file_type'];
    }

    /**
     * Sets sub_file_type
     *
     * @param string $sub_file_type Gets or sets the subfile type.
     *
     * @return $this
     */
    public function setSubFileType($sub_file_type)
    {
        $this->container['sub_file_type'] = $sub_file_type;

        return $this;
    }

    /**
     * Gets target_printer
     *
     * @return string
     */
    public function getTargetPrinter()
    {
        return $this->container['target_printer'];
    }

    /**
     * Sets target_printer
     *
     * @param string $target_printer Gets or sets the target printer.
     *
     * @return $this
     */
    public function setTargetPrinter($target_printer)
    {
        $this->container['target_printer'] = $target_printer;

        return $this;
    }

    /**
     * Gets threshholding
     *
     * @return string
     */
    public function getThreshholding()
    {
        return $this->container['threshholding'];
    }

    /**
     * Sets threshholding
     *
     * @param string $threshholding Gets or sets the threshholding.
     *
     * @return $this
     */
    public function setThreshholding($threshholding)
    {
        $this->container['threshholding'] = $threshholding;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages Gets or sets the total pages count.
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets xposition
     *
     * @return double
     */
    public function getXposition()
    {
        return $this->container['xposition'];
    }

    /**
     * Sets xposition
     *
     * @param double $xposition Gets or sets the X position.
     *
     * @return $this
     */
    public function setXposition($xposition)
    {
        $this->container['xposition'] = $xposition;

        return $this;
    }

    /**
     * Gets xresolution
     *
     * @return double
     */
    public function getXresolution()
    {
        return $this->container['xresolution'];
    }

    /**
     * Sets xresolution
     *
     * @param double $xresolution Gets or sets the X resolution.
     *
     * @return $this
     */
    public function setXresolution($xresolution)
    {
        $this->container['xresolution'] = $xresolution;

        return $this;
    }

    /**
     * Gets yposition
     *
     * @return double
     */
    public function getYposition()
    {
        return $this->container['yposition'];
    }

    /**
     * Sets yposition
     *
     * @param double $yposition Gets or sets the Y position.
     *
     * @return $this
     */
    public function setYposition($yposition)
    {
        $this->container['yposition'] = $yposition;

        return $this;
    }

    /**
     * Gets yresolution
     *
     * @return double
     */
    public function getYresolution()
    {
        return $this->container['yresolution'];
    }

    /**
     * Sets yresolution
     *
     * @param double $yresolution Gets or sets the Y resolution.
     *
     * @return $this
     */
    public function setYresolution($yresolution)
    {
        $this->container['yresolution'] = $yresolution;

        return $this;
    }

    /**
     * Gets fax_t4_options
     *
     * @return string
     */
    public function getFaxT4Options()
    {
        return $this->container['fax_t4_options'];
    }

    /**
     * Sets fax_t4_options
     *
     * @param string $fax_t4_options Gets or sets the FaxT4 Options.
     *
     * @return $this
     */
    public function setFaxT4Options($fax_t4_options)
    {
        $this->container['fax_t4_options'] = $fax_t4_options;

        return $this;
    }

    /**
     * Gets predictor
     *
     * @return string
     */
    public function getPredictor()
    {
        return $this->container['predictor'];
    }

    /**
     * Sets predictor
     *
     * @param string $predictor Gets or sets the predictor (a mathematical operator that is applied to the image data before an encoding scheme is applied).
     *
     * @return $this
     */
    public function setPredictor($predictor)
    {
        $this->container['predictor'] = $predictor;

        return $this;
    }

    /**
     * Gets image_length
     *
     * @return int
     */
    public function getImageLength()
    {
        return $this->container['image_length'];
    }

    /**
     * Sets image_length
     *
     * @param int $image_length Gets or sets the image length.
     *
     * @return $this
     */
    public function setImageLength($image_length)
    {
        $this->container['image_length'] = $image_length;

        return $this;
    }

    /**
     * Gets image_width
     *
     * @return int
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /**
     * Sets image_width
     *
     * @param int $image_width Gets or sets the image width.
     *
     * @return $this
     */
    public function setImageWidth($image_width)
    {
        $this->container['image_width'] = $image_width;

        return $this;
    }

    /**
     * Gets valid_tag_count
     *
     * @return int
     */
    public function getValidTagCount()
    {
        return $this->container['valid_tag_count'];
    }

    /**
     * Sets valid_tag_count
     *
     * @param int $valid_tag_count Gets or sets the valid tag count.
     *
     * @return $this
     */
    public function setValidTagCount($valid_tag_count)
    {
        $this->container['valid_tag_count'] = $valid_tag_count;

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
     * @param int $bits_per_pixel Gets or sets the bits per pixel.
     *
     * @return $this
     */
    public function setBitsPerPixel($bits_per_pixel)
    {
        $this->container['bits_per_pixel'] = $bits_per_pixel;

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


