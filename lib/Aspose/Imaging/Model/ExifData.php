<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExifData.php">
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

/*
 * ExifData
 *
 * @description Represents common EXIF data section.
 */
class ExifData implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ExifData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'aperture_value' => 'double',
        'body_serial_number' => 'string',
        'brightness_value' => 'double',
        'cfa_pattern' => 'string',
        'camera_owner_name' => 'string',
        'color_space' => 'string',
        'components_configuration' => 'string',
        'compressed_bits_per_pixel' => 'double',
        'contrast' => 'string',
        'custom_rendered' => 'string',
        'date_time_digitized' => 'string',
        'date_time_original' => 'string',
        'device_setting_description' => 'string',
        'digital_zoom_ratio' => 'double',
        'exif_version' => 'string',
        'exposure_bias_value' => 'double',
        'exposure_index' => 'double',
        'exposure_mode' => 'string',
        'exposure_program' => 'string',
        'exposure_time' => 'double',
        'f_number' => 'double',
        'file_source' => 'string',
        'flash' => 'string',
        'flash_energy' => 'double',
        'flashpix_version' => 'string',
        'focal_length' => 'double',
        'focal_length_in35_mm_film' => 'int',
        'focal_plane_resolution_unit' => 'string',
        'focal_plane_x_resolution' => 'double',
        'focal_plane_y_resolution' => 'double',
        'gps_altitude' => 'double',
        'gps_altitude_ref' => 'string',
        'gps_area_information' => 'string',
        'gpsdop' => 'double',
        'gps_dest_bearing' => 'double',
        'gps_dest_bearing_ref' => 'string',
        'gps_dest_distance' => 'double',
        'gps_dest_distance_ref' => 'string',
        'gps_dest_latitude' => 'double[]',
        'gps_dest_latitude_ref' => 'string',
        'gps_dest_longitude' => 'double[]',
        'gps_dest_longitude_ref' => 'string',
        'gps_differential' => 'int',
        'gps_img_direction' => 'double',
        'gps_img_direction_ref' => 'string',
        'gps_date_stamp' => 'string',
        'gps_latitude' => 'double[]',
        'gps_latitude_ref' => 'string',
        'gps_longitude' => 'double[]',
        'gps_longitude_ref' => 'string',
        'gps_map_datum' => 'string',
        'gps_measure_mode' => 'string',
        'gps_processing_method' => 'string',
        'gps_satellites' => 'string',
        'gps_speed' => 'double',
        'gps_speed_ref' => 'string',
        'gps_status' => 'string',
        'gps_timestamp' => 'double[]',
        'gps_track' => 'string',
        'gps_track_ref' => 'string',
        'gps_version_id' => 'string',
        'gain_control' => 'string',
        'gamma' => 'double',
        'iso_speed' => 'int',
        'iso_speed_latitude_yyy' => 'int',
        'iso_speed_latitude_zzz' => 'int',
        'photographic_sensitivity' => 'int',
        'image_unique_id' => 'string',
        'lens_make' => 'string',
        'lens_model' => 'string',
        'lens_serial_number' => 'string',
        'lens_specification' => 'double[]',
        'light_source' => 'string',
        'maker_note_raw_data' => 'string',
        'max_aperture_value' => 'double',
        'metering_mode' => 'string',
        'oecf' => 'string',
        'pixel_x_dimension' => 'int',
        'pixel_y_dimension' => 'int',
        'recommended_exposure_index' => 'int',
        'related_sound_file' => 'string',
        'saturation' => 'string',
        'scene_capture_type' => 'string',
        'scene_type' => 'int',
        'sensing_method' => 'string',
        'sensitivity_type' => 'int',
        'sharpness' => 'int',
        'shutter_speed_value' => 'double',
        'spatial_frequency_response' => 'string',
        'spectral_sensitivity' => 'string',
        'standard_output_sensitivity' => 'int',
        'subject_area' => 'int[]',
        'subject_distance' => 'double',
        'subject_distance_range' => 'string',
        'subject_location' => 'int[]',
        'subsec_time' => 'string',
        'subsec_time_digitized' => 'string',
        'subsec_time_original' => 'string',
        'user_comment' => 'string',
        'white_balance' => 'string',
        'white_point' => 'double[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'aperture_value' => 'double',
        'body_serial_number' => null,
        'brightness_value' => 'double',
        'cfa_pattern' => 'byte',
        'camera_owner_name' => null,
        'color_space' => null,
        'components_configuration' => 'byte',
        'compressed_bits_per_pixel' => 'double',
        'contrast' => null,
        'custom_rendered' => null,
        'date_time_digitized' => null,
        'date_time_original' => null,
        'device_setting_description' => 'byte',
        'digital_zoom_ratio' => 'double',
        'exif_version' => 'byte',
        'exposure_bias_value' => 'double',
        'exposure_index' => 'double',
        'exposure_mode' => null,
        'exposure_program' => null,
        'exposure_time' => 'double',
        'f_number' => 'double',
        'file_source' => null,
        'flash' => null,
        'flash_energy' => 'double',
        'flashpix_version' => 'byte',
        'focal_length' => 'double',
        'focal_length_in35_mm_film' => null,
        'focal_plane_resolution_unit' => null,
        'focal_plane_x_resolution' => 'double',
        'focal_plane_y_resolution' => 'double',
        'gps_altitude' => 'double',
        'gps_altitude_ref' => null,
        'gps_area_information' => 'byte',
        'gpsdop' => 'double',
        'gps_dest_bearing' => 'double',
        'gps_dest_bearing_ref' => null,
        'gps_dest_distance' => 'double',
        'gps_dest_distance_ref' => null,
        'gps_dest_latitude' => 'double',
        'gps_dest_latitude_ref' => null,
        'gps_dest_longitude' => 'double',
        'gps_dest_longitude_ref' => null,
        'gps_differential' => null,
        'gps_img_direction' => 'double',
        'gps_img_direction_ref' => null,
        'gps_date_stamp' => null,
        'gps_latitude' => 'double',
        'gps_latitude_ref' => null,
        'gps_longitude' => 'double',
        'gps_longitude_ref' => null,
        'gps_map_datum' => null,
        'gps_measure_mode' => null,
        'gps_processing_method' => 'byte',
        'gps_satellites' => null,
        'gps_speed' => 'double',
        'gps_speed_ref' => null,
        'gps_status' => null,
        'gps_timestamp' => 'double',
        'gps_track' => null,
        'gps_track_ref' => null,
        'gps_version_id' => 'byte',
        'gain_control' => null,
        'gamma' => 'double',
        'iso_speed' => 'int64',
        'iso_speed_latitude_yyy' => 'int64',
        'iso_speed_latitude_zzz' => 'int64',
        'photographic_sensitivity' => 'int64',
        'image_unique_id' => null,
        'lens_make' => null,
        'lens_model' => null,
        'lens_serial_number' => null,
        'lens_specification' => 'double',
        'light_source' => null,
        'maker_note_raw_data' => 'byte',
        'max_aperture_value' => 'double',
        'metering_mode' => null,
        'oecf' => 'byte',
        'pixel_x_dimension' => 'int64',
        'pixel_y_dimension' => 'int64',
        'recommended_exposure_index' => 'int64',
        'related_sound_file' => null,
        'saturation' => null,
        'scene_capture_type' => null,
        'scene_type' => 'byte',
        'sensing_method' => null,
        'sensitivity_type' => null,
        'sharpness' => null,
        'shutter_speed_value' => 'double',
        'spatial_frequency_response' => 'byte',
        'spectral_sensitivity' => null,
        'standard_output_sensitivity' => 'int64',
        'subject_area' => null,
        'subject_distance' => 'double',
        'subject_distance_range' => null,
        'subject_location' => null,
        'subsec_time' => null,
        'subsec_time_digitized' => null,
        'subsec_time_original' => null,
        'user_comment' => null,
        'white_balance' => null,
        'white_point' => 'double'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aperture_value' => 'ApertureValue',
        'body_serial_number' => 'BodySerialNumber',
        'brightness_value' => 'BrightnessValue',
        'cfa_pattern' => 'CFAPattern',
        'camera_owner_name' => 'CameraOwnerName',
        'color_space' => 'ColorSpace',
        'components_configuration' => 'ComponentsConfiguration',
        'compressed_bits_per_pixel' => 'CompressedBitsPerPixel',
        'contrast' => 'Contrast',
        'custom_rendered' => 'CustomRendered',
        'date_time_digitized' => 'DateTimeDigitized',
        'date_time_original' => 'DateTimeOriginal',
        'device_setting_description' => 'DeviceSettingDescription',
        'digital_zoom_ratio' => 'DigitalZoomRatio',
        'exif_version' => 'ExifVersion',
        'exposure_bias_value' => 'ExposureBiasValue',
        'exposure_index' => 'ExposureIndex',
        'exposure_mode' => 'ExposureMode',
        'exposure_program' => 'ExposureProgram',
        'exposure_time' => 'ExposureTime',
        'f_number' => 'FNumber',
        'file_source' => 'FileSource',
        'flash' => 'Flash',
        'flash_energy' => 'FlashEnergy',
        'flashpix_version' => 'FlashpixVersion',
        'focal_length' => 'FocalLength',
        'focal_length_in35_mm_film' => 'FocalLengthIn35MmFilm',
        'focal_plane_resolution_unit' => 'FocalPlaneResolutionUnit',
        'focal_plane_x_resolution' => 'FocalPlaneXResolution',
        'focal_plane_y_resolution' => 'FocalPlaneYResolution',
        'gps_altitude' => 'GPSAltitude',
        'gps_altitude_ref' => 'GPSAltitudeRef',
        'gps_area_information' => 'GPSAreaInformation',
        'gpsdop' => 'GPSDOP',
        'gps_dest_bearing' => 'GPSDestBearing',
        'gps_dest_bearing_ref' => 'GPSDestBearingRef',
        'gps_dest_distance' => 'GPSDestDistance',
        'gps_dest_distance_ref' => 'GPSDestDistanceRef',
        'gps_dest_latitude' => 'GPSDestLatitude',
        'gps_dest_latitude_ref' => 'GPSDestLatitudeRef',
        'gps_dest_longitude' => 'GPSDestLongitude',
        'gps_dest_longitude_ref' => 'GPSDestLongitudeRef',
        'gps_differential' => 'GPSDifferential',
        'gps_img_direction' => 'GPSImgDirection',
        'gps_img_direction_ref' => 'GPSImgDirectionRef',
        'gps_date_stamp' => 'GPSDateStamp',
        'gps_latitude' => 'GPSLatitude',
        'gps_latitude_ref' => 'GPSLatitudeRef',
        'gps_longitude' => 'GPSLongitude',
        'gps_longitude_ref' => 'GPSLongitudeRef',
        'gps_map_datum' => 'GPSMapDatum',
        'gps_measure_mode' => 'GPSMeasureMode',
        'gps_processing_method' => 'GPSProcessingMethod',
        'gps_satellites' => 'GPSSatellites',
        'gps_speed' => 'GPSSpeed',
        'gps_speed_ref' => 'GPSSpeedRef',
        'gps_status' => 'GPSStatus',
        'gps_timestamp' => 'GPSTimestamp',
        'gps_track' => 'GPSTrack',
        'gps_track_ref' => 'GPSTrackRef',
        'gps_version_id' => 'GPSVersionID',
        'gain_control' => 'GainControl',
        'gamma' => 'Gamma',
        'iso_speed' => 'ISOSpeed',
        'iso_speed_latitude_yyy' => 'ISOSpeedLatitudeYYY',
        'iso_speed_latitude_zzz' => 'ISOSpeedLatitudeZZZ',
        'photographic_sensitivity' => 'PhotographicSensitivity',
        'image_unique_id' => 'ImageUniqueID',
        'lens_make' => 'LensMake',
        'lens_model' => 'LensModel',
        'lens_serial_number' => 'LensSerialNumber',
        'lens_specification' => 'LensSpecification',
        'light_source' => 'LightSource',
        'maker_note_raw_data' => 'MakerNoteRawData',
        'max_aperture_value' => 'MaxApertureValue',
        'metering_mode' => 'MeteringMode',
        'oecf' => 'OECF',
        'pixel_x_dimension' => 'PixelXDimension',
        'pixel_y_dimension' => 'PixelYDimension',
        'recommended_exposure_index' => 'RecommendedExposureIndex',
        'related_sound_file' => 'RelatedSoundFile',
        'saturation' => 'Saturation',
        'scene_capture_type' => 'SceneCaptureType',
        'scene_type' => 'SceneType',
        'sensing_method' => 'SensingMethod',
        'sensitivity_type' => 'SensitivityType',
        'sharpness' => 'Sharpness',
        'shutter_speed_value' => 'ShutterSpeedValue',
        'spatial_frequency_response' => 'SpatialFrequencyResponse',
        'spectral_sensitivity' => 'SpectralSensitivity',
        'standard_output_sensitivity' => 'StandardOutputSensitivity',
        'subject_area' => 'SubjectArea',
        'subject_distance' => 'SubjectDistance',
        'subject_distance_range' => 'SubjectDistanceRange',
        'subject_location' => 'SubjectLocation',
        'subsec_time' => 'SubsecTime',
        'subsec_time_digitized' => 'SubsecTimeDigitized',
        'subsec_time_original' => 'SubsecTimeOriginal',
        'user_comment' => 'UserComment',
        'white_balance' => 'WhiteBalance',
        'white_point' => 'WhitePoint'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aperture_value' => 'setApertureValue',
        'body_serial_number' => 'setBodySerialNumber',
        'brightness_value' => 'setBrightnessValue',
        'cfa_pattern' => 'setCfaPattern',
        'camera_owner_name' => 'setCameraOwnerName',
        'color_space' => 'setColorSpace',
        'components_configuration' => 'setComponentsConfiguration',
        'compressed_bits_per_pixel' => 'setCompressedBitsPerPixel',
        'contrast' => 'setContrast',
        'custom_rendered' => 'setCustomRendered',
        'date_time_digitized' => 'setDateTimeDigitized',
        'date_time_original' => 'setDateTimeOriginal',
        'device_setting_description' => 'setDeviceSettingDescription',
        'digital_zoom_ratio' => 'setDigitalZoomRatio',
        'exif_version' => 'setExifVersion',
        'exposure_bias_value' => 'setExposureBiasValue',
        'exposure_index' => 'setExposureIndex',
        'exposure_mode' => 'setExposureMode',
        'exposure_program' => 'setExposureProgram',
        'exposure_time' => 'setExposureTime',
        'f_number' => 'setFNumber',
        'file_source' => 'setFileSource',
        'flash' => 'setFlash',
        'flash_energy' => 'setFlashEnergy',
        'flashpix_version' => 'setFlashpixVersion',
        'focal_length' => 'setFocalLength',
        'focal_length_in35_mm_film' => 'setFocalLengthIn35MmFilm',
        'focal_plane_resolution_unit' => 'setFocalPlaneResolutionUnit',
        'focal_plane_x_resolution' => 'setFocalPlaneXResolution',
        'focal_plane_y_resolution' => 'setFocalPlaneYResolution',
        'gps_altitude' => 'setGpsAltitude',
        'gps_altitude_ref' => 'setGpsAltitudeRef',
        'gps_area_information' => 'setGpsAreaInformation',
        'gpsdop' => 'setGpsdop',
        'gps_dest_bearing' => 'setGpsDestBearing',
        'gps_dest_bearing_ref' => 'setGpsDestBearingRef',
        'gps_dest_distance' => 'setGpsDestDistance',
        'gps_dest_distance_ref' => 'setGpsDestDistanceRef',
        'gps_dest_latitude' => 'setGpsDestLatitude',
        'gps_dest_latitude_ref' => 'setGpsDestLatitudeRef',
        'gps_dest_longitude' => 'setGpsDestLongitude',
        'gps_dest_longitude_ref' => 'setGpsDestLongitudeRef',
        'gps_differential' => 'setGpsDifferential',
        'gps_img_direction' => 'setGpsImgDirection',
        'gps_img_direction_ref' => 'setGpsImgDirectionRef',
        'gps_date_stamp' => 'setGpsDateStamp',
        'gps_latitude' => 'setGpsLatitude',
        'gps_latitude_ref' => 'setGpsLatitudeRef',
        'gps_longitude' => 'setGpsLongitude',
        'gps_longitude_ref' => 'setGpsLongitudeRef',
        'gps_map_datum' => 'setGpsMapDatum',
        'gps_measure_mode' => 'setGpsMeasureMode',
        'gps_processing_method' => 'setGpsProcessingMethod',
        'gps_satellites' => 'setGpsSatellites',
        'gps_speed' => 'setGpsSpeed',
        'gps_speed_ref' => 'setGpsSpeedRef',
        'gps_status' => 'setGpsStatus',
        'gps_timestamp' => 'setGpsTimestamp',
        'gps_track' => 'setGpsTrack',
        'gps_track_ref' => 'setGpsTrackRef',
        'gps_version_id' => 'setGpsVersionId',
        'gain_control' => 'setGainControl',
        'gamma' => 'setGamma',
        'iso_speed' => 'setIsoSpeed',
        'iso_speed_latitude_yyy' => 'setIsoSpeedLatitudeYyy',
        'iso_speed_latitude_zzz' => 'setIsoSpeedLatitudeZzz',
        'photographic_sensitivity' => 'setPhotographicSensitivity',
        'image_unique_id' => 'setImageUniqueId',
        'lens_make' => 'setLensMake',
        'lens_model' => 'setLensModel',
        'lens_serial_number' => 'setLensSerialNumber',
        'lens_specification' => 'setLensSpecification',
        'light_source' => 'setLightSource',
        'maker_note_raw_data' => 'setMakerNoteRawData',
        'max_aperture_value' => 'setMaxApertureValue',
        'metering_mode' => 'setMeteringMode',
        'oecf' => 'setOecf',
        'pixel_x_dimension' => 'setPixelXDimension',
        'pixel_y_dimension' => 'setPixelYDimension',
        'recommended_exposure_index' => 'setRecommendedExposureIndex',
        'related_sound_file' => 'setRelatedSoundFile',
        'saturation' => 'setSaturation',
        'scene_capture_type' => 'setSceneCaptureType',
        'scene_type' => 'setSceneType',
        'sensing_method' => 'setSensingMethod',
        'sensitivity_type' => 'setSensitivityType',
        'sharpness' => 'setSharpness',
        'shutter_speed_value' => 'setShutterSpeedValue',
        'spatial_frequency_response' => 'setSpatialFrequencyResponse',
        'spectral_sensitivity' => 'setSpectralSensitivity',
        'standard_output_sensitivity' => 'setStandardOutputSensitivity',
        'subject_area' => 'setSubjectArea',
        'subject_distance' => 'setSubjectDistance',
        'subject_distance_range' => 'setSubjectDistanceRange',
        'subject_location' => 'setSubjectLocation',
        'subsec_time' => 'setSubsecTime',
        'subsec_time_digitized' => 'setSubsecTimeDigitized',
        'subsec_time_original' => 'setSubsecTimeOriginal',
        'user_comment' => 'setUserComment',
        'white_balance' => 'setWhiteBalance',
        'white_point' => 'setWhitePoint'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aperture_value' => 'getApertureValue',
        'body_serial_number' => 'getBodySerialNumber',
        'brightness_value' => 'getBrightnessValue',
        'cfa_pattern' => 'getCfaPattern',
        'camera_owner_name' => 'getCameraOwnerName',
        'color_space' => 'getColorSpace',
        'components_configuration' => 'getComponentsConfiguration',
        'compressed_bits_per_pixel' => 'getCompressedBitsPerPixel',
        'contrast' => 'getContrast',
        'custom_rendered' => 'getCustomRendered',
        'date_time_digitized' => 'getDateTimeDigitized',
        'date_time_original' => 'getDateTimeOriginal',
        'device_setting_description' => 'getDeviceSettingDescription',
        'digital_zoom_ratio' => 'getDigitalZoomRatio',
        'exif_version' => 'getExifVersion',
        'exposure_bias_value' => 'getExposureBiasValue',
        'exposure_index' => 'getExposureIndex',
        'exposure_mode' => 'getExposureMode',
        'exposure_program' => 'getExposureProgram',
        'exposure_time' => 'getExposureTime',
        'f_number' => 'getFNumber',
        'file_source' => 'getFileSource',
        'flash' => 'getFlash',
        'flash_energy' => 'getFlashEnergy',
        'flashpix_version' => 'getFlashpixVersion',
        'focal_length' => 'getFocalLength',
        'focal_length_in35_mm_film' => 'getFocalLengthIn35MmFilm',
        'focal_plane_resolution_unit' => 'getFocalPlaneResolutionUnit',
        'focal_plane_x_resolution' => 'getFocalPlaneXResolution',
        'focal_plane_y_resolution' => 'getFocalPlaneYResolution',
        'gps_altitude' => 'getGpsAltitude',
        'gps_altitude_ref' => 'getGpsAltitudeRef',
        'gps_area_information' => 'getGpsAreaInformation',
        'gpsdop' => 'getGpsdop',
        'gps_dest_bearing' => 'getGpsDestBearing',
        'gps_dest_bearing_ref' => 'getGpsDestBearingRef',
        'gps_dest_distance' => 'getGpsDestDistance',
        'gps_dest_distance_ref' => 'getGpsDestDistanceRef',
        'gps_dest_latitude' => 'getGpsDestLatitude',
        'gps_dest_latitude_ref' => 'getGpsDestLatitudeRef',
        'gps_dest_longitude' => 'getGpsDestLongitude',
        'gps_dest_longitude_ref' => 'getGpsDestLongitudeRef',
        'gps_differential' => 'getGpsDifferential',
        'gps_img_direction' => 'getGpsImgDirection',
        'gps_img_direction_ref' => 'getGpsImgDirectionRef',
        'gps_date_stamp' => 'getGpsDateStamp',
        'gps_latitude' => 'getGpsLatitude',
        'gps_latitude_ref' => 'getGpsLatitudeRef',
        'gps_longitude' => 'getGpsLongitude',
        'gps_longitude_ref' => 'getGpsLongitudeRef',
        'gps_map_datum' => 'getGpsMapDatum',
        'gps_measure_mode' => 'getGpsMeasureMode',
        'gps_processing_method' => 'getGpsProcessingMethod',
        'gps_satellites' => 'getGpsSatellites',
        'gps_speed' => 'getGpsSpeed',
        'gps_speed_ref' => 'getGpsSpeedRef',
        'gps_status' => 'getGpsStatus',
        'gps_timestamp' => 'getGpsTimestamp',
        'gps_track' => 'getGpsTrack',
        'gps_track_ref' => 'getGpsTrackRef',
        'gps_version_id' => 'getGpsVersionId',
        'gain_control' => 'getGainControl',
        'gamma' => 'getGamma',
        'iso_speed' => 'getIsoSpeed',
        'iso_speed_latitude_yyy' => 'getIsoSpeedLatitudeYyy',
        'iso_speed_latitude_zzz' => 'getIsoSpeedLatitudeZzz',
        'photographic_sensitivity' => 'getPhotographicSensitivity',
        'image_unique_id' => 'getImageUniqueId',
        'lens_make' => 'getLensMake',
        'lens_model' => 'getLensModel',
        'lens_serial_number' => 'getLensSerialNumber',
        'lens_specification' => 'getLensSpecification',
        'light_source' => 'getLightSource',
        'maker_note_raw_data' => 'getMakerNoteRawData',
        'max_aperture_value' => 'getMaxApertureValue',
        'metering_mode' => 'getMeteringMode',
        'oecf' => 'getOecf',
        'pixel_x_dimension' => 'getPixelXDimension',
        'pixel_y_dimension' => 'getPixelYDimension',
        'recommended_exposure_index' => 'getRecommendedExposureIndex',
        'related_sound_file' => 'getRelatedSoundFile',
        'saturation' => 'getSaturation',
        'scene_capture_type' => 'getSceneCaptureType',
        'scene_type' => 'getSceneType',
        'sensing_method' => 'getSensingMethod',
        'sensitivity_type' => 'getSensitivityType',
        'sharpness' => 'getSharpness',
        'shutter_speed_value' => 'getShutterSpeedValue',
        'spatial_frequency_response' => 'getSpatialFrequencyResponse',
        'spectral_sensitivity' => 'getSpectralSensitivity',
        'standard_output_sensitivity' => 'getStandardOutputSensitivity',
        'subject_area' => 'getSubjectArea',
        'subject_distance' => 'getSubjectDistance',
        'subject_distance_range' => 'getSubjectDistanceRange',
        'subject_location' => 'getSubjectLocation',
        'subsec_time' => 'getSubsecTime',
        'subsec_time_digitized' => 'getSubsecTimeDigitized',
        'subsec_time_original' => 'getSubsecTimeOriginal',
        'user_comment' => 'getUserComment',
        'white_balance' => 'getWhiteBalance',
        'white_point' => 'getWhitePoint'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['aperture_value'] = isset($data['aperture_value']) ? $data['aperture_value'] : null;
        $this->container['body_serial_number'] = isset($data['body_serial_number']) ? $data['body_serial_number'] : null;
        $this->container['brightness_value'] = isset($data['brightness_value']) ? $data['brightness_value'] : null;
        $this->container['cfa_pattern'] = isset($data['cfa_pattern']) ? $data['cfa_pattern'] : null;
        $this->container['camera_owner_name'] = isset($data['camera_owner_name']) ? $data['camera_owner_name'] : null;
        $this->container['color_space'] = isset($data['color_space']) ? $data['color_space'] : null;
        $this->container['components_configuration'] = isset($data['components_configuration']) ? $data['components_configuration'] : null;
        $this->container['compressed_bits_per_pixel'] = isset($data['compressed_bits_per_pixel']) ? $data['compressed_bits_per_pixel'] : null;
        $this->container['contrast'] = isset($data['contrast']) ? $data['contrast'] : null;
        $this->container['custom_rendered'] = isset($data['custom_rendered']) ? $data['custom_rendered'] : null;
        $this->container['date_time_digitized'] = isset($data['date_time_digitized']) ? $data['date_time_digitized'] : null;
        $this->container['date_time_original'] = isset($data['date_time_original']) ? $data['date_time_original'] : null;
        $this->container['device_setting_description'] = isset($data['device_setting_description']) ? $data['device_setting_description'] : null;
        $this->container['digital_zoom_ratio'] = isset($data['digital_zoom_ratio']) ? $data['digital_zoom_ratio'] : null;
        $this->container['exif_version'] = isset($data['exif_version']) ? $data['exif_version'] : null;
        $this->container['exposure_bias_value'] = isset($data['exposure_bias_value']) ? $data['exposure_bias_value'] : null;
        $this->container['exposure_index'] = isset($data['exposure_index']) ? $data['exposure_index'] : null;
        $this->container['exposure_mode'] = isset($data['exposure_mode']) ? $data['exposure_mode'] : null;
        $this->container['exposure_program'] = isset($data['exposure_program']) ? $data['exposure_program'] : null;
        $this->container['exposure_time'] = isset($data['exposure_time']) ? $data['exposure_time'] : null;
        $this->container['f_number'] = isset($data['f_number']) ? $data['f_number'] : null;
        $this->container['file_source'] = isset($data['file_source']) ? $data['file_source'] : null;
        $this->container['flash'] = isset($data['flash']) ? $data['flash'] : null;
        $this->container['flash_energy'] = isset($data['flash_energy']) ? $data['flash_energy'] : null;
        $this->container['flashpix_version'] = isset($data['flashpix_version']) ? $data['flashpix_version'] : null;
        $this->container['focal_length'] = isset($data['focal_length']) ? $data['focal_length'] : null;
        $this->container['focal_length_in35_mm_film'] = isset($data['focal_length_in35_mm_film']) ? $data['focal_length_in35_mm_film'] : null;
        $this->container['focal_plane_resolution_unit'] = isset($data['focal_plane_resolution_unit']) ? $data['focal_plane_resolution_unit'] : null;
        $this->container['focal_plane_x_resolution'] = isset($data['focal_plane_x_resolution']) ? $data['focal_plane_x_resolution'] : null;
        $this->container['focal_plane_y_resolution'] = isset($data['focal_plane_y_resolution']) ? $data['focal_plane_y_resolution'] : null;
        $this->container['gps_altitude'] = isset($data['gps_altitude']) ? $data['gps_altitude'] : null;
        $this->container['gps_altitude_ref'] = isset($data['gps_altitude_ref']) ? $data['gps_altitude_ref'] : null;
        $this->container['gps_area_information'] = isset($data['gps_area_information']) ? $data['gps_area_information'] : null;
        $this->container['gpsdop'] = isset($data['gpsdop']) ? $data['gpsdop'] : null;
        $this->container['gps_dest_bearing'] = isset($data['gps_dest_bearing']) ? $data['gps_dest_bearing'] : null;
        $this->container['gps_dest_bearing_ref'] = isset($data['gps_dest_bearing_ref']) ? $data['gps_dest_bearing_ref'] : null;
        $this->container['gps_dest_distance'] = isset($data['gps_dest_distance']) ? $data['gps_dest_distance'] : null;
        $this->container['gps_dest_distance_ref'] = isset($data['gps_dest_distance_ref']) ? $data['gps_dest_distance_ref'] : null;
        $this->container['gps_dest_latitude'] = isset($data['gps_dest_latitude']) ? $data['gps_dest_latitude'] : null;
        $this->container['gps_dest_latitude_ref'] = isset($data['gps_dest_latitude_ref']) ? $data['gps_dest_latitude_ref'] : null;
        $this->container['gps_dest_longitude'] = isset($data['gps_dest_longitude']) ? $data['gps_dest_longitude'] : null;
        $this->container['gps_dest_longitude_ref'] = isset($data['gps_dest_longitude_ref']) ? $data['gps_dest_longitude_ref'] : null;
        $this->container['gps_differential'] = isset($data['gps_differential']) ? $data['gps_differential'] : null;
        $this->container['gps_img_direction'] = isset($data['gps_img_direction']) ? $data['gps_img_direction'] : null;
        $this->container['gps_img_direction_ref'] = isset($data['gps_img_direction_ref']) ? $data['gps_img_direction_ref'] : null;
        $this->container['gps_date_stamp'] = isset($data['gps_date_stamp']) ? $data['gps_date_stamp'] : null;
        $this->container['gps_latitude'] = isset($data['gps_latitude']) ? $data['gps_latitude'] : null;
        $this->container['gps_latitude_ref'] = isset($data['gps_latitude_ref']) ? $data['gps_latitude_ref'] : null;
        $this->container['gps_longitude'] = isset($data['gps_longitude']) ? $data['gps_longitude'] : null;
        $this->container['gps_longitude_ref'] = isset($data['gps_longitude_ref']) ? $data['gps_longitude_ref'] : null;
        $this->container['gps_map_datum'] = isset($data['gps_map_datum']) ? $data['gps_map_datum'] : null;
        $this->container['gps_measure_mode'] = isset($data['gps_measure_mode']) ? $data['gps_measure_mode'] : null;
        $this->container['gps_processing_method'] = isset($data['gps_processing_method']) ? $data['gps_processing_method'] : null;
        $this->container['gps_satellites'] = isset($data['gps_satellites']) ? $data['gps_satellites'] : null;
        $this->container['gps_speed'] = isset($data['gps_speed']) ? $data['gps_speed'] : null;
        $this->container['gps_speed_ref'] = isset($data['gps_speed_ref']) ? $data['gps_speed_ref'] : null;
        $this->container['gps_status'] = isset($data['gps_status']) ? $data['gps_status'] : null;
        $this->container['gps_timestamp'] = isset($data['gps_timestamp']) ? $data['gps_timestamp'] : null;
        $this->container['gps_track'] = isset($data['gps_track']) ? $data['gps_track'] : null;
        $this->container['gps_track_ref'] = isset($data['gps_track_ref']) ? $data['gps_track_ref'] : null;
        $this->container['gps_version_id'] = isset($data['gps_version_id']) ? $data['gps_version_id'] : null;
        $this->container['gain_control'] = isset($data['gain_control']) ? $data['gain_control'] : null;
        $this->container['gamma'] = isset($data['gamma']) ? $data['gamma'] : null;
        $this->container['iso_speed'] = isset($data['iso_speed']) ? $data['iso_speed'] : null;
        $this->container['iso_speed_latitude_yyy'] = isset($data['iso_speed_latitude_yyy']) ? $data['iso_speed_latitude_yyy'] : null;
        $this->container['iso_speed_latitude_zzz'] = isset($data['iso_speed_latitude_zzz']) ? $data['iso_speed_latitude_zzz'] : null;
        $this->container['photographic_sensitivity'] = isset($data['photographic_sensitivity']) ? $data['photographic_sensitivity'] : null;
        $this->container['image_unique_id'] = isset($data['image_unique_id']) ? $data['image_unique_id'] : null;
        $this->container['lens_make'] = isset($data['lens_make']) ? $data['lens_make'] : null;
        $this->container['lens_model'] = isset($data['lens_model']) ? $data['lens_model'] : null;
        $this->container['lens_serial_number'] = isset($data['lens_serial_number']) ? $data['lens_serial_number'] : null;
        $this->container['lens_specification'] = isset($data['lens_specification']) ? $data['lens_specification'] : null;
        $this->container['light_source'] = isset($data['light_source']) ? $data['light_source'] : null;
        $this->container['maker_note_raw_data'] = isset($data['maker_note_raw_data']) ? $data['maker_note_raw_data'] : null;
        $this->container['max_aperture_value'] = isset($data['max_aperture_value']) ? $data['max_aperture_value'] : null;
        $this->container['metering_mode'] = isset($data['metering_mode']) ? $data['metering_mode'] : null;
        $this->container['oecf'] = isset($data['oecf']) ? $data['oecf'] : null;
        $this->container['pixel_x_dimension'] = isset($data['pixel_x_dimension']) ? $data['pixel_x_dimension'] : null;
        $this->container['pixel_y_dimension'] = isset($data['pixel_y_dimension']) ? $data['pixel_y_dimension'] : null;
        $this->container['recommended_exposure_index'] = isset($data['recommended_exposure_index']) ? $data['recommended_exposure_index'] : null;
        $this->container['related_sound_file'] = isset($data['related_sound_file']) ? $data['related_sound_file'] : null;
        $this->container['saturation'] = isset($data['saturation']) ? $data['saturation'] : null;
        $this->container['scene_capture_type'] = isset($data['scene_capture_type']) ? $data['scene_capture_type'] : null;
        $this->container['scene_type'] = isset($data['scene_type']) ? $data['scene_type'] : null;
        $this->container['sensing_method'] = isset($data['sensing_method']) ? $data['sensing_method'] : null;
        $this->container['sensitivity_type'] = isset($data['sensitivity_type']) ? $data['sensitivity_type'] : null;
        $this->container['sharpness'] = isset($data['sharpness']) ? $data['sharpness'] : null;
        $this->container['shutter_speed_value'] = isset($data['shutter_speed_value']) ? $data['shutter_speed_value'] : null;
        $this->container['spatial_frequency_response'] = isset($data['spatial_frequency_response']) ? $data['spatial_frequency_response'] : null;
        $this->container['spectral_sensitivity'] = isset($data['spectral_sensitivity']) ? $data['spectral_sensitivity'] : null;
        $this->container['standard_output_sensitivity'] = isset($data['standard_output_sensitivity']) ? $data['standard_output_sensitivity'] : null;
        $this->container['subject_area'] = isset($data['subject_area']) ? $data['subject_area'] : null;
        $this->container['subject_distance'] = isset($data['subject_distance']) ? $data['subject_distance'] : null;
        $this->container['subject_distance_range'] = isset($data['subject_distance_range']) ? $data['subject_distance_range'] : null;
        $this->container['subject_location'] = isset($data['subject_location']) ? $data['subject_location'] : null;
        $this->container['subsec_time'] = isset($data['subsec_time']) ? $data['subsec_time'] : null;
        $this->container['subsec_time_digitized'] = isset($data['subsec_time_digitized']) ? $data['subsec_time_digitized'] : null;
        $this->container['subsec_time_original'] = isset($data['subsec_time_original']) ? $data['subsec_time_original'] : null;
        $this->container['user_comment'] = isset($data['user_comment']) ? $data['user_comment'] : null;
        $this->container['white_balance'] = isset($data['white_balance']) ? $data['white_balance'] : null;
        $this->container['white_point'] = isset($data['white_point']) ? $data['white_point'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aperture_value'] === null) {
            $invalidProperties[] = "'aperture_value' can't be null";
        }
        if ($this->container['brightness_value'] === null) {
            $invalidProperties[] = "'brightness_value' can't be null";
        }
        if (!is_null($this->container['cfa_pattern']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['cfa_pattern'])) {
            $invalidProperties[] = "invalid value for 'cfa_pattern', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['components_configuration']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['components_configuration'])) {
            $invalidProperties[] = "invalid value for 'components_configuration', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['compressed_bits_per_pixel'] === null) {
            $invalidProperties[] = "'compressed_bits_per_pixel' can't be null";
        }
        if (!is_null($this->container['device_setting_description']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['device_setting_description'])) {
            $invalidProperties[] = "invalid value for 'device_setting_description', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['digital_zoom_ratio'] === null) {
            $invalidProperties[] = "'digital_zoom_ratio' can't be null";
        }
        if (!is_null($this->container['exif_version']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['exif_version'])) {
            $invalidProperties[] = "invalid value for 'exif_version', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['exposure_bias_value'] === null) {
            $invalidProperties[] = "'exposure_bias_value' can't be null";
        }
        if ($this->container['exposure_index'] === null) {
            $invalidProperties[] = "'exposure_index' can't be null";
        }
        if ($this->container['exposure_time'] === null) {
            $invalidProperties[] = "'exposure_time' can't be null";
        }
        if ($this->container['f_number'] === null) {
            $invalidProperties[] = "'f_number' can't be null";
        }
        if ($this->container['flash_energy'] === null) {
            $invalidProperties[] = "'flash_energy' can't be null";
        }
        if (!is_null($this->container['flashpix_version']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['flashpix_version'])) {
            $invalidProperties[] = "invalid value for 'flashpix_version', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['focal_length'] === null) {
            $invalidProperties[] = "'focal_length' can't be null";
        }
        if ($this->container['focal_length_in35_mm_film'] === null) {
            $invalidProperties[] = "'focal_length_in35_mm_film' can't be null";
        }
        if ($this->container['focal_plane_x_resolution'] === null) {
            $invalidProperties[] = "'focal_plane_x_resolution' can't be null";
        }
        if ($this->container['focal_plane_y_resolution'] === null) {
            $invalidProperties[] = "'focal_plane_y_resolution' can't be null";
        }
        if ($this->container['gps_altitude'] === null) {
            $invalidProperties[] = "'gps_altitude' can't be null";
        }
        if (!is_null($this->container['gps_area_information']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_area_information'])) {
            $invalidProperties[] = "invalid value for 'gps_area_information', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['gpsdop'] === null) {
            $invalidProperties[] = "'gpsdop' can't be null";
        }
        if ($this->container['gps_dest_bearing'] === null) {
            $invalidProperties[] = "'gps_dest_bearing' can't be null";
        }
        if ($this->container['gps_dest_distance'] === null) {
            $invalidProperties[] = "'gps_dest_distance' can't be null";
        }
        if ($this->container['gps_differential'] === null) {
            $invalidProperties[] = "'gps_differential' can't be null";
        }
        if ($this->container['gps_img_direction'] === null) {
            $invalidProperties[] = "'gps_img_direction' can't be null";
        }
        if (!is_null($this->container['gps_processing_method']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_processing_method'])) {
            $invalidProperties[] = "invalid value for 'gps_processing_method', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['gps_speed'] === null) {
            $invalidProperties[] = "'gps_speed' can't be null";
        }
        if (!is_null($this->container['gps_version_id']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_version_id'])) {
            $invalidProperties[] = "invalid value for 'gps_version_id', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['gamma'] === null) {
            $invalidProperties[] = "'gamma' can't be null";
        }
        if ($this->container['iso_speed'] === null) {
            $invalidProperties[] = "'iso_speed' can't be null";
        }
        if ($this->container['iso_speed_latitude_yyy'] === null) {
            $invalidProperties[] = "'iso_speed_latitude_yyy' can't be null";
        }
        if ($this->container['iso_speed_latitude_zzz'] === null) {
            $invalidProperties[] = "'iso_speed_latitude_zzz' can't be null";
        }
        if ($this->container['photographic_sensitivity'] === null) {
            $invalidProperties[] = "'photographic_sensitivity' can't be null";
        }
        if (!is_null($this->container['maker_note_raw_data']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['maker_note_raw_data'])) {
            $invalidProperties[] = "invalid value for 'maker_note_raw_data', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['max_aperture_value'] === null) {
            $invalidProperties[] = "'max_aperture_value' can't be null";
        }
        if (!is_null($this->container['oecf']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['oecf'])) {
            $invalidProperties[] = "invalid value for 'oecf', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['pixel_x_dimension'] === null) {
            $invalidProperties[] = "'pixel_x_dimension' can't be null";
        }
        if ($this->container['pixel_y_dimension'] === null) {
            $invalidProperties[] = "'pixel_y_dimension' can't be null";
        }
        if ($this->container['recommended_exposure_index'] === null) {
            $invalidProperties[] = "'recommended_exposure_index' can't be null";
        }
        if ($this->container['scene_type'] === null) {
            $invalidProperties[] = "'scene_type' can't be null";
        }
        if ($this->container['sensitivity_type'] === null) {
            $invalidProperties[] = "'sensitivity_type' can't be null";
        }
        if ($this->container['sharpness'] === null) {
            $invalidProperties[] = "'sharpness' can't be null";
        }
        if ($this->container['shutter_speed_value'] === null) {
            $invalidProperties[] = "'shutter_speed_value' can't be null";
        }
        if (!is_null($this->container['spatial_frequency_response']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['spatial_frequency_response'])) {
            $invalidProperties[] = "invalid value for 'spatial_frequency_response', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['standard_output_sensitivity'] === null) {
            $invalidProperties[] = "'standard_output_sensitivity' can't be null";
        }
        if ($this->container['subject_distance'] === null) {
            $invalidProperties[] = "'subject_distance' can't be null";
        }
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

        if ($this->container['aperture_value'] === null) {
            return false;
        }
        if ($this->container['brightness_value'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['cfa_pattern'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['components_configuration'])) {
            return false;
        }
        if ($this->container['compressed_bits_per_pixel'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['device_setting_description'])) {
            return false;
        }
        if ($this->container['digital_zoom_ratio'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['exif_version'])) {
            return false;
        }
        if ($this->container['exposure_bias_value'] === null) {
            return false;
        }
        if ($this->container['exposure_index'] === null) {
            return false;
        }
        if ($this->container['exposure_time'] === null) {
            return false;
        }
        if ($this->container['f_number'] === null) {
            return false;
        }
        if ($this->container['flash_energy'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['flashpix_version'])) {
            return false;
        }
        if ($this->container['focal_length'] === null) {
            return false;
        }
        if ($this->container['focal_length_in35_mm_film'] === null) {
            return false;
        }
        if ($this->container['focal_plane_x_resolution'] === null) {
            return false;
        }
        if ($this->container['focal_plane_y_resolution'] === null) {
            return false;
        }
        if ($this->container['gps_altitude'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_area_information'])) {
            return false;
        }
        if ($this->container['gpsdop'] === null) {
            return false;
        }
        if ($this->container['gps_dest_bearing'] === null) {
            return false;
        }
        if ($this->container['gps_dest_distance'] === null) {
            return false;
        }
        if ($this->container['gps_differential'] === null) {
            return false;
        }
        if ($this->container['gps_img_direction'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_processing_method'])) {
            return false;
        }
        if ($this->container['gps_speed'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['gps_version_id'])) {
            return false;
        }
        if ($this->container['gamma'] === null) {
            return false;
        }
        if ($this->container['iso_speed'] === null) {
            return false;
        }
        if ($this->container['iso_speed_latitude_yyy'] === null) {
            return false;
        }
        if ($this->container['iso_speed_latitude_zzz'] === null) {
            return false;
        }
        if ($this->container['photographic_sensitivity'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['maker_note_raw_data'])) {
            return false;
        }
        if ($this->container['max_aperture_value'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['oecf'])) {
            return false;
        }
        if ($this->container['pixel_x_dimension'] === null) {
            return false;
        }
        if ($this->container['pixel_y_dimension'] === null) {
            return false;
        }
        if ($this->container['recommended_exposure_index'] === null) {
            return false;
        }
        if ($this->container['scene_type'] === null) {
            return false;
        }
        if ($this->container['sensitivity_type'] === null) {
            return false;
        }
        if ($this->container['sharpness'] === null) {
            return false;
        }
        if ($this->container['shutter_speed_value'] === null) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['spatial_frequency_response'])) {
            return false;
        }
        if ($this->container['standard_output_sensitivity'] === null) {
            return false;
        }
        if ($this->container['subject_distance'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets aperture_value
     *
     * @return double
     */
    public function getApertureValue()
    {
        return $this->container['aperture_value'];
    }

    /*
     * Sets aperture_value
     *
     * @param double $aperture_value Gets or sets the aperture.
     *
     * @return $this
     */
    public function setApertureValue($aperture_value)
    {
        $this->container['aperture_value'] = $aperture_value;

        return $this;
    }

    /*
     * Gets body_serial_number
     *
     * @return string
     */
    public function getBodySerialNumber()
    {
        return $this->container['body_serial_number'];
    }

    /*
     * Sets body_serial_number
     *
     * @param string $body_serial_number Gets or sets the body serial number.
     *
     * @return $this
     */
    public function setBodySerialNumber($body_serial_number)
    {
        $this->container['body_serial_number'] = $body_serial_number;

        return $this;
    }

    /*
     * Gets brightness_value
     *
     * @return double
     */
    public function getBrightnessValue()
    {
        return $this->container['brightness_value'];
    }

    /*
     * Sets brightness_value
     *
     * @param double $brightness_value Gets or sets the brightness.
     *
     * @return $this
     */
    public function setBrightnessValue($brightness_value)
    {
        $this->container['brightness_value'] = $brightness_value;

        return $this;
    }

    /*
     * Gets cfa_pattern
     *
     * @return string
     */
    public function getCfaPattern()
    {
        return $this->container['cfa_pattern'];
    }

    /*
     * Sets cfa_pattern
     *
     * @param string $cfa_pattern Gets or sets the CFA pattern.
     *
     * @return $this
     */
    public function setCfaPattern($cfa_pattern)
    {

        if (!is_null($cfa_pattern) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $cfa_pattern))) {
            throw new \InvalidArgumentException("invalid value for $cfa_pattern when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['cfa_pattern'] = $cfa_pattern;

        return $this;
    }

    /*
     * Gets camera_owner_name
     *
     * @return string
     */
    public function getCameraOwnerName()
    {
        return $this->container['camera_owner_name'];
    }

    /*
     * Sets camera_owner_name
     *
     * @param string $camera_owner_name Gets or sets the camera owner name.
     *
     * @return $this
     */
    public function setCameraOwnerName($camera_owner_name)
    {
        $this->container['camera_owner_name'] = $camera_owner_name;

        return $this;
    }

    /*
     * Gets color_space
     *
     * @return string
     */
    public function getColorSpace()
    {
        return $this->container['color_space'];
    }

    /*
     * Sets color_space
     *
     * @param string $color_space Gets or sets the color space.
     *
     * @return $this
     */
    public function setColorSpace($color_space)
    {
        $this->container['color_space'] = $color_space;

        return $this;
    }

    /*
     * Gets components_configuration
     *
     * @return string
     */
    public function getComponentsConfiguration()
    {
        return $this->container['components_configuration'];
    }

    /*
     * Sets components_configuration
     *
     * @param string $components_configuration Gets or sets the components configuration.
     *
     * @return $this
     */
    public function setComponentsConfiguration($components_configuration)
    {

        if (!is_null($components_configuration) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $components_configuration))) {
            throw new \InvalidArgumentException("invalid value for $components_configuration when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['components_configuration'] = $components_configuration;

        return $this;
    }

    /*
     * Gets compressed_bits_per_pixel
     *
     * @return double
     */
    public function getCompressedBitsPerPixel()
    {
        return $this->container['compressed_bits_per_pixel'];
    }

    /*
     * Sets compressed_bits_per_pixel
     *
     * @param double $compressed_bits_per_pixel Gets or sets the compressed bits per pixel.
     *
     * @return $this
     */
    public function setCompressedBitsPerPixel($compressed_bits_per_pixel)
    {
        $this->container['compressed_bits_per_pixel'] = $compressed_bits_per_pixel;

        return $this;
    }

    /*
     * Gets contrast
     *
     * @return string
     */
    public function getContrast()
    {
        return $this->container['contrast'];
    }

    /*
     * Sets contrast
     *
     * @param string $contrast Gets or sets the contrast.
     *
     * @return $this
     */
    public function setContrast($contrast)
    {
        $this->container['contrast'] = $contrast;

        return $this;
    }

    /*
     * Gets custom_rendered
     *
     * @return string
     */
    public function getCustomRendered()
    {
        return $this->container['custom_rendered'];
    }

    /*
     * Sets custom_rendered
     *
     * @param string $custom_rendered Gets or sets the value indincating if custom rendering is performed.
     *
     * @return $this
     */
    public function setCustomRendered($custom_rendered)
    {
        $this->container['custom_rendered'] = $custom_rendered;

        return $this;
    }

    /*
     * Gets date_time_digitized
     *
     * @return string
     */
    public function getDateTimeDigitized()
    {
        return $this->container['date_time_digitized'];
    }

    /*
     * Sets date_time_digitized
     *
     * @param string $date_time_digitized Gets or sets date and time when image was digitized.
     *
     * @return $this
     */
    public function setDateTimeDigitized($date_time_digitized)
    {
        $this->container['date_time_digitized'] = $date_time_digitized;

        return $this;
    }

    /*
     * Gets date_time_original
     *
     * @return string
     */
    public function getDateTimeOriginal()
    {
        return $this->container['date_time_original'];
    }

    /*
     * Sets date_time_original
     *
     * @param string $date_time_original Gets or sets date and time of the original image.
     *
     * @return $this
     */
    public function setDateTimeOriginal($date_time_original)
    {
        $this->container['date_time_original'] = $date_time_original;

        return $this;
    }

    /*
     * Gets device_setting_description
     *
     * @return string
     */
    public function getDeviceSettingDescription()
    {
        return $this->container['device_setting_description'];
    }

    /*
     * Sets device_setting_description
     *
     * @param string $device_setting_description Gets or sets the device setting description.
     *
     * @return $this
     */
    public function setDeviceSettingDescription($device_setting_description)
    {

        if (!is_null($device_setting_description) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $device_setting_description))) {
            throw new \InvalidArgumentException("invalid value for $device_setting_description when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['device_setting_description'] = $device_setting_description;

        return $this;
    }

    /*
     * Gets digital_zoom_ratio
     *
     * @return double
     */
    public function getDigitalZoomRatio()
    {
        return $this->container['digital_zoom_ratio'];
    }

    /*
     * Sets digital_zoom_ratio
     *
     * @param double $digital_zoom_ratio Gets or sets the digital zoom ratio.
     *
     * @return $this
     */
    public function setDigitalZoomRatio($digital_zoom_ratio)
    {
        $this->container['digital_zoom_ratio'] = $digital_zoom_ratio;

        return $this;
    }

    /*
     * Gets exif_version
     *
     * @return string
     */
    public function getExifVersion()
    {
        return $this->container['exif_version'];
    }

    /*
     * Sets exif_version
     *
     * @param string $exif_version Gets or sets EXIF version.
     *
     * @return $this
     */
    public function setExifVersion($exif_version)
    {

        if (!is_null($exif_version) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $exif_version))) {
            throw new \InvalidArgumentException("invalid value for $exif_version when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['exif_version'] = $exif_version;

        return $this;
    }

    /*
     * Gets exposure_bias_value
     *
     * @return double
     */
    public function getExposureBiasValue()
    {
        return $this->container['exposure_bias_value'];
    }

    /*
     * Sets exposure_bias_value
     *
     * @param double $exposure_bias_value Gets or sets the exposure bias.
     *
     * @return $this
     */
    public function setExposureBiasValue($exposure_bias_value)
    {
        $this->container['exposure_bias_value'] = $exposure_bias_value;

        return $this;
    }

    /*
     * Gets exposure_index
     *
     * @return double
     */
    public function getExposureIndex()
    {
        return $this->container['exposure_index'];
    }

    /*
     * Sets exposure_index
     *
     * @param double $exposure_index Gets or sets the exposure index.
     *
     * @return $this
     */
    public function setExposureIndex($exposure_index)
    {
        $this->container['exposure_index'] = $exposure_index;

        return $this;
    }

    /*
     * Gets exposure_mode
     *
     * @return string
     */
    public function getExposureMode()
    {
        return $this->container['exposure_mode'];
    }

    /*
     * Sets exposure_mode
     *
     * @param string $exposure_mode Gets or sets the exposure mode.
     *
     * @return $this
     */
    public function setExposureMode($exposure_mode)
    {
        $this->container['exposure_mode'] = $exposure_mode;

        return $this;
    }

    /*
     * Gets exposure_program
     *
     * @return string
     */
    public function getExposureProgram()
    {
        return $this->container['exposure_program'];
    }

    /*
     * Sets exposure_program
     *
     * @param string $exposure_program Gets or sets the exposure program.
     *
     * @return $this
     */
    public function setExposureProgram($exposure_program)
    {
        $this->container['exposure_program'] = $exposure_program;

        return $this;
    }

    /*
     * Gets exposure_time
     *
     * @return double
     */
    public function getExposureTime()
    {
        return $this->container['exposure_time'];
    }

    /*
     * Sets exposure_time
     *
     * @param double $exposure_time Gets or sets the exposure time.
     *
     * @return $this
     */
    public function setExposureTime($exposure_time)
    {
        $this->container['exposure_time'] = $exposure_time;

        return $this;
    }

    /*
     * Gets f_number
     *
     * @return double
     */
    public function getFNumber()
    {
        return $this->container['f_number'];
    }

    /*
     * Sets f_number
     *
     * @param double $f_number Gets or sets the focal number.
     *
     * @return $this
     */
    public function setFNumber($f_number)
    {
        $this->container['f_number'] = $f_number;

        return $this;
    }

    /*
     * Gets file_source
     *
     * @return string
     */
    public function getFileSource()
    {
        return $this->container['file_source'];
    }

    /*
     * Sets file_source
     *
     * @param string $file_source Gets or sets the file source.
     *
     * @return $this
     */
    public function setFileSource($file_source)
    {
        $this->container['file_source'] = $file_source;

        return $this;
    }

    /*
     * Gets flash
     *
     * @return string
     */
    public function getFlash()
    {
        return $this->container['flash'];
    }

    /*
     * Sets flash
     *
     * @param string $flash Gets or sets the flash.
     *
     * @return $this
     */
    public function setFlash($flash)
    {
        $this->container['flash'] = $flash;

        return $this;
    }

    /*
     * Gets flash_energy
     *
     * @return double
     */
    public function getFlashEnergy()
    {
        return $this->container['flash_energy'];
    }

    /*
     * Sets flash_energy
     *
     * @param double $flash_energy Gets or sets the flash energy.
     *
     * @return $this
     */
    public function setFlashEnergy($flash_energy)
    {
        $this->container['flash_energy'] = $flash_energy;

        return $this;
    }

    /*
     * Gets flashpix_version
     *
     * @return string
     */
    public function getFlashpixVersion()
    {
        return $this->container['flashpix_version'];
    }

    /*
     * Sets flashpix_version
     *
     * @param string $flashpix_version Gets or sets the Flashpix version.
     *
     * @return $this
     */
    public function setFlashpixVersion($flashpix_version)
    {

        if (!is_null($flashpix_version) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $flashpix_version))) {
            throw new \InvalidArgumentException("invalid value for $flashpix_version when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['flashpix_version'] = $flashpix_version;

        return $this;
    }

    /*
     * Gets focal_length
     *
     * @return double
     */
    public function getFocalLength()
    {
        return $this->container['focal_length'];
    }

    /*
     * Sets focal_length
     *
     * @param double $focal_length Gets or sets the focal length.
     *
     * @return $this
     */
    public function setFocalLength($focal_length)
    {
        $this->container['focal_length'] = $focal_length;

        return $this;
    }

    /*
     * Gets focal_length_in35_mm_film
     *
     * @return int
     */
    public function getFocalLengthIn35MmFilm()
    {
        return $this->container['focal_length_in35_mm_film'];
    }

    /*
     * Sets focal_length_in35_mm_film
     *
     * @param int $focal_length_in35_mm_film Gets or sets the focal length in 35mm film.
     *
     * @return $this
     */
    public function setFocalLengthIn35MmFilm($focal_length_in35_mm_film)
    {
        $this->container['focal_length_in35_mm_film'] = $focal_length_in35_mm_film;

        return $this;
    }

    /*
     * Gets focal_plane_resolution_unit
     *
     * @return string
     */
    public function getFocalPlaneResolutionUnit()
    {
        return $this->container['focal_plane_resolution_unit'];
    }

    /*
     * Sets focal_plane_resolution_unit
     *
     * @param string $focal_plane_resolution_unit Gets or sets the focal plane resolution unit.
     *
     * @return $this
     */
    public function setFocalPlaneResolutionUnit($focal_plane_resolution_unit)
    {
        $this->container['focal_plane_resolution_unit'] = $focal_plane_resolution_unit;

        return $this;
    }

    /*
     * Gets focal_plane_x_resolution
     *
     * @return double
     */
    public function getFocalPlaneXResolution()
    {
        return $this->container['focal_plane_x_resolution'];
    }

    /*
     * Sets focal_plane_x_resolution
     *
     * @param double $focal_plane_x_resolution Gets or sets the focal plane X resolution.
     *
     * @return $this
     */
    public function setFocalPlaneXResolution($focal_plane_x_resolution)
    {
        $this->container['focal_plane_x_resolution'] = $focal_plane_x_resolution;

        return $this;
    }

    /*
     * Gets focal_plane_y_resolution
     *
     * @return double
     */
    public function getFocalPlaneYResolution()
    {
        return $this->container['focal_plane_y_resolution'];
    }

    /*
     * Sets focal_plane_y_resolution
     *
     * @param double $focal_plane_y_resolution Gets or sets the focal plane Y resolution.
     *
     * @return $this
     */
    public function setFocalPlaneYResolution($focal_plane_y_resolution)
    {
        $this->container['focal_plane_y_resolution'] = $focal_plane_y_resolution;

        return $this;
    }

    /*
     * Gets gps_altitude
     *
     * @return double
     */
    public function getGpsAltitude()
    {
        return $this->container['gps_altitude'];
    }

    /*
     * Sets gps_altitude
     *
     * @param double $gps_altitude Gets or sets the GPS altitude.
     *
     * @return $this
     */
    public function setGpsAltitude($gps_altitude)
    {
        $this->container['gps_altitude'] = $gps_altitude;

        return $this;
    }

    /*
     * Gets gps_altitude_ref
     *
     * @return string
     */
    public function getGpsAltitudeRef()
    {
        return $this->container['gps_altitude_ref'];
    }

    /*
     * Sets gps_altitude_ref
     *
     * @param string $gps_altitude_ref Gets or sets the GPS altitude reference (if it's above or below sea level).
     *
     * @return $this
     */
    public function setGpsAltitudeRef($gps_altitude_ref)
    {
        $this->container['gps_altitude_ref'] = $gps_altitude_ref;

        return $this;
    }

    /*
     * Gets gps_area_information
     *
     * @return string
     */
    public function getGpsAreaInformation()
    {
        return $this->container['gps_area_information'];
    }

    /*
     * Sets gps_area_information
     *
     * @param string $gps_area_information Gets or sets the GPS area information.
     *
     * @return $this
     */
    public function setGpsAreaInformation($gps_area_information)
    {

        if (!is_null($gps_area_information) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $gps_area_information))) {
            throw new \InvalidArgumentException("invalid value for $gps_area_information when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['gps_area_information'] = $gps_area_information;

        return $this;
    }

    /*
     * Gets gpsdop
     *
     * @return double
     */
    public function getGpsdop()
    {
        return $this->container['gpsdop'];
    }

    /*
     * Sets gpsdop
     *
     * @param double $gpsdop Gets or sets the GPS DOP (data degree of precision).
     *
     * @return $this
     */
    public function setGpsdop($gpsdop)
    {
        $this->container['gpsdop'] = $gpsdop;

        return $this;
    }

    /*
     * Gets gps_dest_bearing
     *
     * @return double
     */
    public function getGpsDestBearing()
    {
        return $this->container['gps_dest_bearing'];
    }

    /*
     * Sets gps_dest_bearing
     *
     * @param double $gps_dest_bearing Gets or sets the GPS bearing of the destination.
     *
     * @return $this
     */
    public function setGpsDestBearing($gps_dest_bearing)
    {
        $this->container['gps_dest_bearing'] = $gps_dest_bearing;

        return $this;
    }

    /*
     * Gets gps_dest_bearing_ref
     *
     * @return string
     */
    public function getGpsDestBearingRef()
    {
        return $this->container['gps_dest_bearing_ref'];
    }

    /*
     * Sets gps_dest_bearing_ref
     *
     * @param string $gps_dest_bearing_ref Gets or sets the GPS reference unit for bearing of the destination.
     *
     * @return $this
     */
    public function setGpsDestBearingRef($gps_dest_bearing_ref)
    {
        $this->container['gps_dest_bearing_ref'] = $gps_dest_bearing_ref;

        return $this;
    }

    /*
     * Gets gps_dest_distance
     *
     * @return double
     */
    public function getGpsDestDistance()
    {
        return $this->container['gps_dest_distance'];
    }

    /*
     * Sets gps_dest_distance
     *
     * @param double $gps_dest_distance Gets or sets the GPS destination distance.
     *
     * @return $this
     */
    public function setGpsDestDistance($gps_dest_distance)
    {
        $this->container['gps_dest_distance'] = $gps_dest_distance;

        return $this;
    }

    /*
     * Gets gps_dest_distance_ref
     *
     * @return string
     */
    public function getGpsDestDistanceRef()
    {
        return $this->container['gps_dest_distance_ref'];
    }

    /*
     * Sets gps_dest_distance_ref
     *
     * @param string $gps_dest_distance_ref Gets or sets the GPS reference unit for destination distance.
     *
     * @return $this
     */
    public function setGpsDestDistanceRef($gps_dest_distance_ref)
    {
        $this->container['gps_dest_distance_ref'] = $gps_dest_distance_ref;

        return $this;
    }

    /*
     * Gets gps_dest_latitude
     *
     * @return double[]
     */
    public function getGpsDestLatitude()
    {
        return $this->container['gps_dest_latitude'];
    }

    /*
     * Sets gps_dest_latitude
     *
     * @param double[] $gps_dest_latitude Gets or sets the GPS destination latitude.
     *
     * @return $this
     */
    public function setGpsDestLatitude($gps_dest_latitude)
    {
        $this->container['gps_dest_latitude'] = $gps_dest_latitude;

        return $this;
    }

    /*
     * Gets gps_dest_latitude_ref
     *
     * @return string
     */
    public function getGpsDestLatitudeRef()
    {
        return $this->container['gps_dest_latitude_ref'];
    }

    /*
     * Sets gps_dest_latitude_ref
     *
     * @param string $gps_dest_latitude_ref Gets or sets the GPS reference destination latitude (north or south).
     *
     * @return $this
     */
    public function setGpsDestLatitudeRef($gps_dest_latitude_ref)
    {
        $this->container['gps_dest_latitude_ref'] = $gps_dest_latitude_ref;

        return $this;
    }

    /*
     * Gets gps_dest_longitude
     *
     * @return double[]
     */
    public function getGpsDestLongitude()
    {
        return $this->container['gps_dest_longitude'];
    }

    /*
     * Sets gps_dest_longitude
     *
     * @param double[] $gps_dest_longitude Gets or sets the GPS destination longtitude.
     *
     * @return $this
     */
    public function setGpsDestLongitude($gps_dest_longitude)
    {
        $this->container['gps_dest_longitude'] = $gps_dest_longitude;

        return $this;
    }

    /*
     * Gets gps_dest_longitude_ref
     *
     * @return string
     */
    public function getGpsDestLongitudeRef()
    {
        return $this->container['gps_dest_longitude_ref'];
    }

    /*
     * Sets gps_dest_longitude_ref
     *
     * @param string $gps_dest_longitude_ref Gets or sets the GPS reference destination longtitude (east or west).
     *
     * @return $this
     */
    public function setGpsDestLongitudeRef($gps_dest_longitude_ref)
    {
        $this->container['gps_dest_longitude_ref'] = $gps_dest_longitude_ref;

        return $this;
    }

    /*
     * Gets gps_differential
     *
     * @return int
     */
    public function getGpsDifferential()
    {
        return $this->container['gps_differential'];
    }

    /*
     * Sets gps_differential
     *
     * @param int $gps_differential Gets or sets the GPS differential.
     *
     * @return $this
     */
    public function setGpsDifferential($gps_differential)
    {
        $this->container['gps_differential'] = $gps_differential;

        return $this;
    }

    /*
     * Gets gps_img_direction
     *
     * @return double
     */
    public function getGpsImgDirection()
    {
        return $this->container['gps_img_direction'];
    }

    /*
     * Sets gps_img_direction
     *
     * @param double $gps_img_direction Gets or sets the GPS image direction.
     *
     * @return $this
     */
    public function setGpsImgDirection($gps_img_direction)
    {
        $this->container['gps_img_direction'] = $gps_img_direction;

        return $this;
    }

    /*
     * Gets gps_img_direction_ref
     *
     * @return string
     */
    public function getGpsImgDirectionRef()
    {
        return $this->container['gps_img_direction_ref'];
    }

    /*
     * Sets gps_img_direction_ref
     *
     * @param string $gps_img_direction_ref Gets or sets the GPS reference image direction.
     *
     * @return $this
     */
    public function setGpsImgDirectionRef($gps_img_direction_ref)
    {
        $this->container['gps_img_direction_ref'] = $gps_img_direction_ref;

        return $this;
    }

    /*
     * Gets gps_date_stamp
     *
     * @return string
     */
    public function getGpsDateStamp()
    {
        return $this->container['gps_date_stamp'];
    }

    /*
     * Sets gps_date_stamp
     *
     * @param string $gps_date_stamp Gets or sets the GPS date stamp.
     *
     * @return $this
     */
    public function setGpsDateStamp($gps_date_stamp)
    {
        $this->container['gps_date_stamp'] = $gps_date_stamp;

        return $this;
    }

    /*
     * Gets gps_latitude
     *
     * @return double[]
     */
    public function getGpsLatitude()
    {
        return $this->container['gps_latitude'];
    }

    /*
     * Sets gps_latitude
     *
     * @param double[] $gps_latitude Gets or sets the GPS latitude.
     *
     * @return $this
     */
    public function setGpsLatitude($gps_latitude)
    {
        $this->container['gps_latitude'] = $gps_latitude;

        return $this;
    }

    /*
     * Gets gps_latitude_ref
     *
     * @return string
     */
    public function getGpsLatitudeRef()
    {
        return $this->container['gps_latitude_ref'];
    }

    /*
     * Sets gps_latitude_ref
     *
     * @param string $gps_latitude_ref Gets or sets the GPS latitude reference (north or south).
     *
     * @return $this
     */
    public function setGpsLatitudeRef($gps_latitude_ref)
    {
        $this->container['gps_latitude_ref'] = $gps_latitude_ref;

        return $this;
    }

    /*
     * Gets gps_longitude
     *
     * @return double[]
     */
    public function getGpsLongitude()
    {
        return $this->container['gps_longitude'];
    }

    /*
     * Sets gps_longitude
     *
     * @param double[] $gps_longitude Gets or sets the GPS longitude.
     *
     * @return $this
     */
    public function setGpsLongitude($gps_longitude)
    {
        $this->container['gps_longitude'] = $gps_longitude;

        return $this;
    }

    /*
     * Gets gps_longitude_ref
     *
     * @return string
     */
    public function getGpsLongitudeRef()
    {
        return $this->container['gps_longitude_ref'];
    }

    /*
     * Sets gps_longitude_ref
     *
     * @param string $gps_longitude_ref Gets or sets the GPS longitude reference (east or west).
     *
     * @return $this
     */
    public function setGpsLongitudeRef($gps_longitude_ref)
    {
        $this->container['gps_longitude_ref'] = $gps_longitude_ref;

        return $this;
    }

    /*
     * Gets gps_map_datum
     *
     * @return string
     */
    public function getGpsMapDatum()
    {
        return $this->container['gps_map_datum'];
    }

    /*
     * Sets gps_map_datum
     *
     * @param string $gps_map_datum Gets or sets the geodetic survey data used by the GPS receiver.
     *
     * @return $this
     */
    public function setGpsMapDatum($gps_map_datum)
    {
        $this->container['gps_map_datum'] = $gps_map_datum;

        return $this;
    }

    /*
     * Gets gps_measure_mode
     *
     * @return string
     */
    public function getGpsMeasureMode()
    {
        return $this->container['gps_measure_mode'];
    }

    /*
     * Sets gps_measure_mode
     *
     * @param string $gps_measure_mode Gets or sets the GPS measure mode.
     *
     * @return $this
     */
    public function setGpsMeasureMode($gps_measure_mode)
    {
        $this->container['gps_measure_mode'] = $gps_measure_mode;

        return $this;
    }

    /*
     * Gets gps_processing_method
     *
     * @return string
     */
    public function getGpsProcessingMethod()
    {
        return $this->container['gps_processing_method'];
    }

    /*
     * Sets gps_processing_method
     *
     * @param string $gps_processing_method Gets or setsthe GPS processing method.
     *
     * @return $this
     */
    public function setGpsProcessingMethod($gps_processing_method)
    {

        if (!is_null($gps_processing_method) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $gps_processing_method))) {
            throw new \InvalidArgumentException("invalid value for $gps_processing_method when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['gps_processing_method'] = $gps_processing_method;

        return $this;
    }

    /*
     * Gets gps_satellites
     *
     * @return string
     */
    public function getGpsSatellites()
    {
        return $this->container['gps_satellites'];
    }

    /*
     * Sets gps_satellites
     *
     * @param string $gps_satellites Gets or sets the GPS satellites info.
     *
     * @return $this
     */
    public function setGpsSatellites($gps_satellites)
    {
        $this->container['gps_satellites'] = $gps_satellites;

        return $this;
    }

    /*
     * Gets gps_speed
     *
     * @return double
     */
    public function getGpsSpeed()
    {
        return $this->container['gps_speed'];
    }

    /*
     * Sets gps_speed
     *
     * @param double $gps_speed Gets or sets the GPS speed.
     *
     * @return $this
     */
    public function setGpsSpeed($gps_speed)
    {
        $this->container['gps_speed'] = $gps_speed;

        return $this;
    }

    /*
     * Gets gps_speed_ref
     *
     * @return string
     */
    public function getGpsSpeedRef()
    {
        return $this->container['gps_speed_ref'];
    }

    /*
     * Sets gps_speed_ref
     *
     * @param string $gps_speed_ref Gets or sets the GPS speed reference unit.
     *
     * @return $this
     */
    public function setGpsSpeedRef($gps_speed_ref)
    {
        $this->container['gps_speed_ref'] = $gps_speed_ref;

        return $this;
    }

    /*
     * Gets gps_status
     *
     * @return string
     */
    public function getGpsStatus()
    {
        return $this->container['gps_status'];
    }

    /*
     * Sets gps_status
     *
     * @param string $gps_status Gets or sets the GPS status.
     *
     * @return $this
     */
    public function setGpsStatus($gps_status)
    {
        $this->container['gps_status'] = $gps_status;

        return $this;
    }

    /*
     * Gets gps_timestamp
     *
     * @return double[]
     */
    public function getGpsTimestamp()
    {
        return $this->container['gps_timestamp'];
    }

    /*
     * Sets gps_timestamp
     *
     * @param double[] $gps_timestamp Gets or sets the GPS times tamp.
     *
     * @return $this
     */
    public function setGpsTimestamp($gps_timestamp)
    {
        $this->container['gps_timestamp'] = $gps_timestamp;

        return $this;
    }

    /*
     * Gets gps_track
     *
     * @return string
     */
    public function getGpsTrack()
    {
        return $this->container['gps_track'];
    }

    /*
     * Sets gps_track
     *
     * @param string $gps_track Gets or sets the GPS track.
     *
     * @return $this
     */
    public function setGpsTrack($gps_track)
    {
        $this->container['gps_track'] = $gps_track;

        return $this;
    }

    /*
     * Gets gps_track_ref
     *
     * @return string
     */
    public function getGpsTrackRef()
    {
        return $this->container['gps_track_ref'];
    }

    /*
     * Sets gps_track_ref
     *
     * @param string $gps_track_ref Gets or sets the GPS track reference.
     *
     * @return $this
     */
    public function setGpsTrackRef($gps_track_ref)
    {
        $this->container['gps_track_ref'] = $gps_track_ref;

        return $this;
    }

    /*
     * Gets gps_version_id
     *
     * @return string
     */
    public function getGpsVersionId()
    {
        return $this->container['gps_version_id'];
    }

    /*
     * Sets gps_version_id
     *
     * @param string $gps_version_id Gets or sets the GPS version ID.
     *
     * @return $this
     */
    public function setGpsVersionId($gps_version_id)
    {

        if (!is_null($gps_version_id) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $gps_version_id))) {
            throw new \InvalidArgumentException("invalid value for $gps_version_id when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['gps_version_id'] = $gps_version_id;

        return $this;
    }

    /*
     * Gets gain_control
     *
     * @return string
     */
    public function getGainControl()
    {
        return $this->container['gain_control'];
    }

    /*
     * Sets gain_control
     *
     * @param string $gain_control Gets or sets the gain control.
     *
     * @return $this
     */
    public function setGainControl($gain_control)
    {
        $this->container['gain_control'] = $gain_control;

        return $this;
    }

    /*
     * Gets gamma
     *
     * @return double
     */
    public function getGamma()
    {
        return $this->container['gamma'];
    }

    /*
     * Sets gamma
     *
     * @param double $gamma Gets or sets the gamma.
     *
     * @return $this
     */
    public function setGamma($gamma)
    {
        $this->container['gamma'] = $gamma;

        return $this;
    }

    /*
     * Gets iso_speed
     *
     * @return int
     */
    public function getIsoSpeed()
    {
        return $this->container['iso_speed'];
    }

    /*
     * Sets iso_speed
     *
     * @param int $iso_speed Gets or sets the ISO speed.
     *
     * @return $this
     */
    public function setIsoSpeed($iso_speed)
    {
        $this->container['iso_speed'] = $iso_speed;

        return $this;
    }

    /*
     * Gets iso_speed_latitude_yyy
     *
     * @return int
     */
    public function getIsoSpeedLatitudeYyy()
    {
        return $this->container['iso_speed_latitude_yyy'];
    }

    /*
     * Sets iso_speed_latitude_yyy
     *
     * @param int $iso_speed_latitude_yyy Gets or sets the ISO speed latitude YYY value.
     *
     * @return $this
     */
    public function setIsoSpeedLatitudeYyy($iso_speed_latitude_yyy)
    {
        $this->container['iso_speed_latitude_yyy'] = $iso_speed_latitude_yyy;

        return $this;
    }

    /*
     * Gets iso_speed_latitude_zzz
     *
     * @return int
     */
    public function getIsoSpeedLatitudeZzz()
    {
        return $this->container['iso_speed_latitude_zzz'];
    }

    /*
     * Sets iso_speed_latitude_zzz
     *
     * @param int $iso_speed_latitude_zzz Gets or sets the ISO speed latitude ZZZ value.
     *
     * @return $this
     */
    public function setIsoSpeedLatitudeZzz($iso_speed_latitude_zzz)
    {
        $this->container['iso_speed_latitude_zzz'] = $iso_speed_latitude_zzz;

        return $this;
    }

    /*
     * Gets photographic_sensitivity
     *
     * @return int
     */
    public function getPhotographicSensitivity()
    {
        return $this->container['photographic_sensitivity'];
    }

    /*
     * Sets photographic_sensitivity
     *
     * @param int $photographic_sensitivity Gets or sets the photographic sensitivity.
     *
     * @return $this
     */
    public function setPhotographicSensitivity($photographic_sensitivity)
    {
        $this->container['photographic_sensitivity'] = $photographic_sensitivity;

        return $this;
    }

    /*
     * Gets image_unique_id
     *
     * @return string
     */
    public function getImageUniqueId()
    {
        return $this->container['image_unique_id'];
    }

    /*
     * Sets image_unique_id
     *
     * @param string $image_unique_id Gets or sets the image unique ID.
     *
     * @return $this
     */
    public function setImageUniqueId($image_unique_id)
    {
        $this->container['image_unique_id'] = $image_unique_id;

        return $this;
    }

    /*
     * Gets lens_make
     *
     * @return string
     */
    public function getLensMake()
    {
        return $this->container['lens_make'];
    }

    /*
     * Sets lens_make
     *
     * @param string $lens_make Gets or sets the lens manufacturer.
     *
     * @return $this
     */
    public function setLensMake($lens_make)
    {
        $this->container['lens_make'] = $lens_make;

        return $this;
    }

    /*
     * Gets lens_model
     *
     * @return string
     */
    public function getLensModel()
    {
        return $this->container['lens_model'];
    }

    /*
     * Sets lens_model
     *
     * @param string $lens_model Gets or sets the lens model.
     *
     * @return $this
     */
    public function setLensModel($lens_model)
    {
        $this->container['lens_model'] = $lens_model;

        return $this;
    }

    /*
     * Gets lens_serial_number
     *
     * @return string
     */
    public function getLensSerialNumber()
    {
        return $this->container['lens_serial_number'];
    }

    /*
     * Sets lens_serial_number
     *
     * @param string $lens_serial_number Gets or sets the lens serial number.
     *
     * @return $this
     */
    public function setLensSerialNumber($lens_serial_number)
    {
        $this->container['lens_serial_number'] = $lens_serial_number;

        return $this;
    }

    /*
     * Gets lens_specification
     *
     * @return double[]
     */
    public function getLensSpecification()
    {
        return $this->container['lens_specification'];
    }

    /*
     * Sets lens_specification
     *
     * @param double[] $lens_specification Gets or sets the lens specification.
     *
     * @return $this
     */
    public function setLensSpecification($lens_specification)
    {
        $this->container['lens_specification'] = $lens_specification;

        return $this;
    }

    /*
     * Gets light_source
     *
     * @return string
     */
    public function getLightSource()
    {
        return $this->container['light_source'];
    }

    /*
     * Sets light_source
     *
     * @param string $light_source Gets or sets the light source.
     *
     * @return $this
     */
    public function setLightSource($light_source)
    {
        $this->container['light_source'] = $light_source;

        return $this;
    }

    /*
     * Gets maker_note_raw_data
     *
     * @return string
     */
    public function getMakerNoteRawData()
    {
        return $this->container['maker_note_raw_data'];
    }

    /*
     * Sets maker_note_raw_data
     *
     * @param string $maker_note_raw_data Gets or sets the maker note raw data.
     *
     * @return $this
     */
    public function setMakerNoteRawData($maker_note_raw_data)
    {

        if (!is_null($maker_note_raw_data) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $maker_note_raw_data))) {
            throw new \InvalidArgumentException("invalid value for $maker_note_raw_data when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['maker_note_raw_data'] = $maker_note_raw_data;

        return $this;
    }

    /*
     * Gets max_aperture_value
     *
     * @return double
     */
    public function getMaxApertureValue()
    {
        return $this->container['max_aperture_value'];
    }

    /*
     * Sets max_aperture_value
     *
     * @param double $max_aperture_value Gets or sets the max aperture.
     *
     * @return $this
     */
    public function setMaxApertureValue($max_aperture_value)
    {
        $this->container['max_aperture_value'] = $max_aperture_value;

        return $this;
    }

    /*
     * Gets metering_mode
     *
     * @return string
     */
    public function getMeteringMode()
    {
        return $this->container['metering_mode'];
    }

    /*
     * Sets metering_mode
     *
     * @param string $metering_mode Gets or sets the metering mode.
     *
     * @return $this
     */
    public function setMeteringMode($metering_mode)
    {
        $this->container['metering_mode'] = $metering_mode;

        return $this;
    }

    /*
     * Gets oecf
     *
     * @return string
     */
    public function getOecf()
    {
        return $this->container['oecf'];
    }

    /*
     * Sets oecf
     *
     * @param string $oecf Gets or sets the OECF (Opto-Electric Conversion Function).
     *
     * @return $this
     */
    public function setOecf($oecf)
    {

        if (!is_null($oecf) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $oecf))) {
            throw new \InvalidArgumentException("invalid value for $oecf when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['oecf'] = $oecf;

        return $this;
    }

    /*
     * Gets pixel_x_dimension
     *
     * @return int
     */
    public function getPixelXDimension()
    {
        return $this->container['pixel_x_dimension'];
    }

    /*
     * Sets pixel_x_dimension
     *
     * @param int $pixel_x_dimension Gets or sets the pixel X dimension.
     *
     * @return $this
     */
    public function setPixelXDimension($pixel_x_dimension)
    {
        $this->container['pixel_x_dimension'] = $pixel_x_dimension;

        return $this;
    }

    /*
     * Gets pixel_y_dimension
     *
     * @return int
     */
    public function getPixelYDimension()
    {
        return $this->container['pixel_y_dimension'];
    }

    /*
     * Sets pixel_y_dimension
     *
     * @param int $pixel_y_dimension Gets or sets the pixel Y dimension.
     *
     * @return $this
     */
    public function setPixelYDimension($pixel_y_dimension)
    {
        $this->container['pixel_y_dimension'] = $pixel_y_dimension;

        return $this;
    }

    /*
     * Gets recommended_exposure_index
     *
     * @return int
     */
    public function getRecommendedExposureIndex()
    {
        return $this->container['recommended_exposure_index'];
    }

    /*
     * Sets recommended_exposure_index
     *
     * @param int $recommended_exposure_index Gets or sets the recommended exposure index.
     *
     * @return $this
     */
    public function setRecommendedExposureIndex($recommended_exposure_index)
    {
        $this->container['recommended_exposure_index'] = $recommended_exposure_index;

        return $this;
    }

    /*
     * Gets related_sound_file
     *
     * @return string
     */
    public function getRelatedSoundFile()
    {
        return $this->container['related_sound_file'];
    }

    /*
     * Sets related_sound_file
     *
     * @param string $related_sound_file Gets or sets the related sound file.
     *
     * @return $this
     */
    public function setRelatedSoundFile($related_sound_file)
    {
        $this->container['related_sound_file'] = $related_sound_file;

        return $this;
    }

    /*
     * Gets saturation
     *
     * @return string
     */
    public function getSaturation()
    {
        return $this->container['saturation'];
    }

    /*
     * Sets saturation
     *
     * @param string $saturation Gets or sets the saturation.
     *
     * @return $this
     */
    public function setSaturation($saturation)
    {
        $this->container['saturation'] = $saturation;

        return $this;
    }

    /*
     * Gets scene_capture_type
     *
     * @return string
     */
    public function getSceneCaptureType()
    {
        return $this->container['scene_capture_type'];
    }

    /*
     * Sets scene_capture_type
     *
     * @param string $scene_capture_type Gets or sets the scene capture type.
     *
     * @return $this
     */
    public function setSceneCaptureType($scene_capture_type)
    {
        $this->container['scene_capture_type'] = $scene_capture_type;

        return $this;
    }

    /*
     * Gets scene_type
     *
     * @return int
     */
    public function getSceneType()
    {
        return $this->container['scene_type'];
    }

    /*
     * Sets scene_type
     *
     * @param int $scene_type Gets or sets the scene type.
     *
     * @return $this
     */
    public function setSceneType($scene_type)
    {
        $this->container['scene_type'] = $scene_type;

        return $this;
    }

    /*
     * Gets sensing_method
     *
     * @return string
     */
    public function getSensingMethod()
    {
        return $this->container['sensing_method'];
    }

    /*
     * Sets sensing_method
     *
     * @param string $sensing_method Gets or sets the sensing method.
     *
     * @return $this
     */
    public function setSensingMethod($sensing_method)
    {
        $this->container['sensing_method'] = $sensing_method;

        return $this;
    }

    /*
     * Gets sensitivity_type
     *
     * @return int
     */
    public function getSensitivityType()
    {
        return $this->container['sensitivity_type'];
    }

    /*
     * Sets sensitivity_type
     *
     * @param int $sensitivity_type Gets or sets the sensitivity type.
     *
     * @return $this
     */
    public function setSensitivityType($sensitivity_type)
    {
        $this->container['sensitivity_type'] = $sensitivity_type;

        return $this;
    }

    /*
     * Gets sharpness
     *
     * @return int
     */
    public function getSharpness()
    {
        return $this->container['sharpness'];
    }

    /*
     * Sets sharpness
     *
     * @param int $sharpness Gets or sets the sharpness.
     *
     * @return $this
     */
    public function setSharpness($sharpness)
    {
        $this->container['sharpness'] = $sharpness;

        return $this;
    }

    /*
     * Gets shutter_speed_value
     *
     * @return double
     */
    public function getShutterSpeedValue()
    {
        return $this->container['shutter_speed_value'];
    }

    /*
     * Sets shutter_speed_value
     *
     * @param double $shutter_speed_value Gets or sets the shutter speed.
     *
     * @return $this
     */
    public function setShutterSpeedValue($shutter_speed_value)
    {
        $this->container['shutter_speed_value'] = $shutter_speed_value;

        return $this;
    }

    /*
     * Gets spatial_frequency_response
     *
     * @return string
     */
    public function getSpatialFrequencyResponse()
    {
        return $this->container['spatial_frequency_response'];
    }

    /*
     * Sets spatial_frequency_response
     *
     * @param string $spatial_frequency_response Gets or sets the spatial frequency response.
     *
     * @return $this
     */
    public function setSpatialFrequencyResponse($spatial_frequency_response)
    {

        if (!is_null($spatial_frequency_response) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $spatial_frequency_response))) {
            throw new \InvalidArgumentException("invalid value for $spatial_frequency_response when calling ExifData., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['spatial_frequency_response'] = $spatial_frequency_response;

        return $this;
    }

    /*
     * Gets spectral_sensitivity
     *
     * @return string
     */
    public function getSpectralSensitivity()
    {
        return $this->container['spectral_sensitivity'];
    }

    /*
     * Sets spectral_sensitivity
     *
     * @param string $spectral_sensitivity Gets or sets the spectral sensitivity.
     *
     * @return $this
     */
    public function setSpectralSensitivity($spectral_sensitivity)
    {
        $this->container['spectral_sensitivity'] = $spectral_sensitivity;

        return $this;
    }

    /*
     * Gets standard_output_sensitivity
     *
     * @return int
     */
    public function getStandardOutputSensitivity()
    {
        return $this->container['standard_output_sensitivity'];
    }

    /*
     * Sets standard_output_sensitivity
     *
     * @param int $standard_output_sensitivity Gets or sets the standard output sensitivity.
     *
     * @return $this
     */
    public function setStandardOutputSensitivity($standard_output_sensitivity)
    {
        $this->container['standard_output_sensitivity'] = $standard_output_sensitivity;

        return $this;
    }

    /*
     * Gets subject_area
     *
     * @return int[]
     */
    public function getSubjectArea()
    {
        return $this->container['subject_area'];
    }

    /*
     * Sets subject_area
     *
     * @param int[] $subject_area Gets or sets the subject area.
     *
     * @return $this
     */
    public function setSubjectArea($subject_area)
    {
        $this->container['subject_area'] = $subject_area;

        return $this;
    }

    /*
     * Gets subject_distance
     *
     * @return double
     */
    public function getSubjectDistance()
    {
        return $this->container['subject_distance'];
    }

    /*
     * Sets subject_distance
     *
     * @param double $subject_distance Gets or sets the subject distance.
     *
     * @return $this
     */
    public function setSubjectDistance($subject_distance)
    {
        $this->container['subject_distance'] = $subject_distance;

        return $this;
    }

    /*
     * Gets subject_distance_range
     *
     * @return string
     */
    public function getSubjectDistanceRange()
    {
        return $this->container['subject_distance_range'];
    }

    /*
     * Sets subject_distance_range
     *
     * @param string $subject_distance_range Gets or sets the subject distance range.
     *
     * @return $this
     */
    public function setSubjectDistanceRange($subject_distance_range)
    {
        $this->container['subject_distance_range'] = $subject_distance_range;

        return $this;
    }

    /*
     * Gets subject_location
     *
     * @return int[]
     */
    public function getSubjectLocation()
    {
        return $this->container['subject_location'];
    }

    /*
     * Sets subject_location
     *
     * @param int[] $subject_location Gets or sets the subject location.
     *
     * @return $this
     */
    public function setSubjectLocation($subject_location)
    {
        $this->container['subject_location'] = $subject_location;

        return $this;
    }

    /*
     * Gets subsec_time
     *
     * @return string
     */
    public function getSubsecTime()
    {
        return $this->container['subsec_time'];
    }

    /*
     * Sets subsec_time
     *
     * @param string $subsec_time Gets or sets the fractions of seconds for the DateTime tag.
     *
     * @return $this
     */
    public function setSubsecTime($subsec_time)
    {
        $this->container['subsec_time'] = $subsec_time;

        return $this;
    }

    /*
     * Gets subsec_time_digitized
     *
     * @return string
     */
    public function getSubsecTimeDigitized()
    {
        return $this->container['subsec_time_digitized'];
    }

    /*
     * Sets subsec_time_digitized
     *
     * @param string $subsec_time_digitized Gets or sets the fractions of seconds for the DateTimeDigitized tag.
     *
     * @return $this
     */
    public function setSubsecTimeDigitized($subsec_time_digitized)
    {
        $this->container['subsec_time_digitized'] = $subsec_time_digitized;

        return $this;
    }

    /*
     * Gets subsec_time_original
     *
     * @return string
     */
    public function getSubsecTimeOriginal()
    {
        return $this->container['subsec_time_original'];
    }

    /*
     * Sets subsec_time_original
     *
     * @param string $subsec_time_original Gets or sets the fractions of seconds for the DateTimeOriginal tag.
     *
     * @return $this
     */
    public function setSubsecTimeOriginal($subsec_time_original)
    {
        $this->container['subsec_time_original'] = $subsec_time_original;

        return $this;
    }

    /*
     * Gets user_comment
     *
     * @return string
     */
    public function getUserComment()
    {
        return $this->container['user_comment'];
    }

    /*
     * Sets user_comment
     *
     * @param string $user_comment Gets or sets the user comment.
     *
     * @return $this
     */
    public function setUserComment($user_comment)
    {
        $this->container['user_comment'] = $user_comment;

        return $this;
    }

    /*
     * Gets white_balance
     *
     * @return string
     */
    public function getWhiteBalance()
    {
        return $this->container['white_balance'];
    }

    /*
     * Sets white_balance
     *
     * @param string $white_balance Gets or sets the white balance.
     *
     * @return $this
     */
    public function setWhiteBalance($white_balance)
    {
        $this->container['white_balance'] = $white_balance;

        return $this;
    }

    /*
     * Gets white_point
     *
     * @return double[]
     */
    public function getWhitePoint()
    {
        return $this->container['white_point'];
    }

    /*
     * Sets white_point
     *
     * @param double[] $white_point Gets or sets the white point.
     *
     * @return $this
     */
    public function setWhitePoint($white_point)
    {
        $this->container['white_point'] = $white_point;

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


