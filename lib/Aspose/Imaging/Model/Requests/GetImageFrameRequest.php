<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetImageFrameRequest.php">
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

namespace Aspose\Imaging\Model\Requests;

use \InvalidArgumentException;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\ObjectSerializer;
use \Aspose\Imaging\Model\Requests\ImagingRequest;

/**
 * Request model for getImageFrame operation.
 */
class GetImageFrameRequest extends ImagingRequest
{
    /**
     * Filename of image.
     *
     * @var string
     */
    public $name;
    
    /**
     * Number of a frame.
     *
     * @var int
     */
    public $frame_id;
    
    /**
     * New width.
     *
     * @var int
     */
    public $new_width;
    
    /**
     * New height.
     *
     * @var int
     */
    public $new_height;
    
    /**
     * X position of start point for cropping rectangle.
     *
     * @var int
     */
    public $x;
    
    /**
     * Y position of start point for cropping rectangle.
     *
     * @var int
     */
    public $y;
    
    /**
     * Width of cropping rectangle.
     *
     * @var int
     */
    public $rect_width;
    
    /**
     * Height of cropping rectangle.
     *
     * @var int
     */
    public $rect_height;
    
    /**
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     *
     * @var string
     */
    public $rotate_flip_method;
    
    /**
     * If result will include all other frames or just a specified frame.
     *
     * @var bool
     */
    public $save_other_frames;
    
    /**
     * Folder with image to process.
     *
     * @var string
     */
    public $folder;
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @var string
     */
    public $storage;
    
    /**
     * Initializes a new instance of the GetImageFrameRequest class.
     *  
     * @param string $name Filename of image.
     * @param int $frame_id Number of a frame.
     * @param int $new_width New width.
     * @param int $new_height New height.
     * @param int $x X position of start point for cropping rectangle.
     * @param int $y Y position of start point for cropping rectangle.
     * @param int $rect_width Width of cropping rectangle.
     * @param int $rect_height Height of cropping rectangle.
     * @param string $rotate_flip_method RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     * @param bool $save_other_frames If result will include all other frames or just a specified frame.
     * @param string $folder Folder with image to process.
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($name, $frame_id, $new_width = null, $new_height = null, $x = null, $y = null, $rect_width = null, $rect_height = null, $rotate_flip_method = null, $save_other_frames = null, $folder = null, $storage = null)             
    {
        $this->name = $name;
        $this->frame_id = $frame_id;
        $this->new_width = $new_width;
        $this->new_height = $new_height;
        $this->x = $x;
        $this->y = $y;
        $this->rect_width = $rect_width;
        $this->rect_height = $rect_height;
        $this->rotate_flip_method = $rotate_flip_method;
        $this->save_other_frames = $save_other_frames;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * Filename of image.
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Filename of image.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Number of a frame.
     *
     * @return int
     */
    public function get_frame_id()
    {
        return $this->frame_id;
    }

    /**
     * Number of a frame.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_frame_id($value)
    {
        $this->frame_id = $value;
        return $this;
    }
    
    /**
     * New width.
     *
     * @return int
     */
    public function get_new_width()
    {
        return $this->new_width;
    }

    /**
     * New width.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_new_width($value)
    {
        $this->new_width = $value;
        return $this;
    }
    
    /**
     * New height.
     *
     * @return int
     */
    public function get_new_height()
    {
        return $this->new_height;
    }

    /**
     * New height.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_new_height($value)
    {
        $this->new_height = $value;
        return $this;
    }
    
    /**
     * X position of start point for cropping rectangle.
     *
     * @return int
     */
    public function get_x()
    {
        return $this->x;
    }

    /**
     * X position of start point for cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_x($value)
    {
        $this->x = $value;
        return $this;
    }
    
    /**
     * Y position of start point for cropping rectangle.
     *
     * @return int
     */
    public function get_y()
    {
        return $this->y;
    }

    /**
     * Y position of start point for cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_y($value)
    {
        $this->y = $value;
        return $this;
    }
    
    /**
     * Width of cropping rectangle.
     *
     * @return int
     */
    public function get_rect_width()
    {
        return $this->rect_width;
    }

    /**
     * Width of cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_rect_width($value)
    {
        $this->rect_width = $value;
        return $this;
    }
    
    /**
     * Height of cropping rectangle.
     *
     * @return int
     */
    public function get_rect_height()
    {
        return $this->rect_height;
    }

    /**
     * Height of cropping rectangle.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_rect_height($value)
    {
        $this->rect_height = $value;
        return $this;
    }
    
    /**
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     *
     * @return string
     */
    public function get_rotate_flip_method()
    {
        return $this->rotate_flip_method;
    }

    /**
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_rotate_flip_method($value)
    {
        $this->rotate_flip_method = $value;
        return $this;
    }
    
    /**
     * If result will include all other frames or just a specified frame.
     *
     * @return bool
     */
    public function get_save_other_frames()
    {
        return $this->save_other_frames;
    }

    /**
     * If result will include all other frames or just a specified frame.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_save_other_frames($value)
    {
        $this->save_other_frames = $value;
        return $this;
    }
    
    /**
     * Folder with image to process.
     *
     * @return string
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /**
     * Folder with image to process.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    
    /**
     * Your Aspose Cloud Storage name.
     *
     * @return string
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /**
     * Your Aspose Cloud Storage name.
     *
     * @return \Aspose\Imaging\Model\Requests\Request
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }

    /**
     * Prepares initial info for HTTP request
     *
     * @param \Aspose\Imaging\Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo($config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getImageFrame');
        }
        // verify the required parameter 'frame_id' is set
        if ($this->frame_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $frame_id when calling getImageFrame');
        }

        $resourcePath = '/imaging/{name}/frames/{frameId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $headers = [];
    
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        // path params
        if ($this->frame_id !== null) {
            $localName = lcfirst('frameId');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->frame_id), $resourcePath);
        }

        // query params
        if ($this->new_width !== null) {
            $localName = lcfirst('newWidth');
            $localValue = is_bool($this->new_width) ? ($this->new_width ? 'true' : 'false') : $this->new_width;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->new_height !== null) {
            $localName = lcfirst('newHeight');
            $localValue = is_bool($this->new_height) ? ($this->new_height ? 'true' : 'false') : $this->new_height;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->x !== null) {
            $localName = lcfirst('x');
            $localValue = is_bool($this->x) ? ($this->x ? 'true' : 'false') : $this->x;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->y !== null) {
            $localName = lcfirst('y');
            $localValue = is_bool($this->y) ? ($this->y ? 'true' : 'false') : $this->y;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->rect_width !== null) {
            $localName = lcfirst('rectWidth');
            $localValue = is_bool($this->rect_width) ? ($this->rect_width ? 'true' : 'false') : $this->rect_width;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->rect_height !== null) {
            $localName = lcfirst('rectHeight');
            $localValue = is_bool($this->rect_height) ? ($this->rect_height ? 'true' : 'false') : $this->rect_height;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->rotate_flip_method !== null) {
            $localName = lcfirst('rotateFlipMethod');
            $localValue = is_bool($this->rotate_flip_method) ? ($this->rotate_flip_method ? 'true' : 'false') : $this->rotate_flip_method;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->save_other_frames !== null) {
            $localName = lcfirst('saveOtherFrames');
            $localValue = is_bool($this->save_other_frames) ? ($this->save_other_frames ? 'true' : 'false') : $this->save_other_frames;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->folder !== null) {
            $localName = lcfirst('folder');
            $localValue = is_bool($this->folder) ? ($this->folder ? 'true' : 'false') : $this->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->storage !== null) {
            $localName = lcfirst('storage');
            $localValue = is_bool($this->storage) ? ($this->storage ? 'true' : 'false') : $this->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = trim($resourcePath, "/") . "?" . http_build_query($queryParams);

        // body params
        $httpBody = null;
        
        $httpInfo = array(
            "resourcePath" => $resourcePath,
            "queryParams" => $queryParams,
            "headerParams" => $headerParams,
            "headers" => $headers,
            "httpBody" => $httpBody,
            "formParams" => $formParams,
        );
        
        return $httpInfo;        
    }
}
