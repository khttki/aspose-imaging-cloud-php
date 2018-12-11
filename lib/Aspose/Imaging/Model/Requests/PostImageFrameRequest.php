<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostImageFrameRequest.php">
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

namespace Aspose\Imaging\Model\Requests;

use \InvalidArgumentException;
use Aspose\Imaging\Configuration;

/*
 * Request model for postImageFrame operation.
 */
class PostImageFrameRequest extends ImagingRequest
{
    /*
     * Input image
     */
    public $image_data;
	
    /*
     * Number of a frame.
     */
    public $frame_id;
	
    /*
     * New width.
     */
    public $new_width;
	
    /*
     * New height.
     */
    public $new_height;
	
    /*
     * X position of start point for cropping rectangle.
     */
    public $x;
	
    /*
     * Y position of start point for cropping rectangle.
     */
    public $y;
	
    /*
     * Width of cropping rectangle.
     */
    public $rect_width;
	
    /*
     * Height of cropping rectangle.
     */
    public $rect_height;
	
    /*
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     */
    public $rotate_flip_method;
	
    /*
     * If result will include all other frames or just a specified frame.
     */
    public $save_other_frames;
	
    /*
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public $out_path;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
    /*
     * Initializes a new instance of the PostImageFrameRequest class.
     *  
     * @param \SplFileObject $image_data Input image
     * @param int $frame_id Number of a frame.
     * @param int $new_width New width.
     * @param int $new_height New height.
     * @param int $x X position of start point for cropping rectangle.
     * @param int $y Y position of start point for cropping rectangle.
     * @param int $rect_width Width of cropping rectangle.
     * @param int $rect_height Height of cropping rectangle.
     * @param string $rotate_flip_method RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     * @param bool $save_other_frames If result will include all other frames or just a specified frame.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed image).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($image_data, $frame_id, $new_width = null, $new_height = null, $x = null, $y = null, $rect_width = null, $rect_height = null, $rotate_flip_method = null, $save_other_frames = null, $out_path = null, $storage = null)             
    {
        parent::__construct();
        $this->image_data = $image_data;
        $this->frame_id = $frame_id;
        $this->new_width = $new_width;
        $this->new_height = $new_height;
        $this->x = $x;
        $this->y = $y;
        $this->rect_width = $rect_width;
        $this->rect_height = $rect_height;
        $this->rotate_flip_method = $rotate_flip_method;
        $this->save_other_frames = $save_other_frames;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /*
     * Input image
     */
    public function get_image_data()
    {
        return $this->image_data;
    }

    /*
     * Input image
     */
    public function set_image_data($value)
    {
        $this->image_data = $value;
        return $this;
    }
	
    /*
     * Number of a frame.
     */
    public function get_frame_id()
    {
        return $this->frame_id;
    }

    /*
     * Number of a frame.
     */
    public function set_frame_id($value)
    {
        $this->frame_id = $value;
        return $this;
    }
	
    /*
     * New width.
     */
    public function get_new_width()
    {
        return $this->new_width;
    }

    /*
     * New width.
     */
    public function set_new_width($value)
    {
        $this->new_width = $value;
        return $this;
    }
	
    /*
     * New height.
     */
    public function get_new_height()
    {
        return $this->new_height;
    }

    /*
     * New height.
     */
    public function set_new_height($value)
    {
        $this->new_height = $value;
        return $this;
    }
	
    /*
     * X position of start point for cropping rectangle.
     */
    public function get_x()
    {
        return $this->x;
    }

    /*
     * X position of start point for cropping rectangle.
     */
    public function set_x($value)
    {
        $this->x = $value;
        return $this;
    }
	
    /*
     * Y position of start point for cropping rectangle.
     */
    public function get_y()
    {
        return $this->y;
    }

    /*
     * Y position of start point for cropping rectangle.
     */
    public function set_y($value)
    {
        $this->y = $value;
        return $this;
    }
	
    /*
     * Width of cropping rectangle.
     */
    public function get_rect_width()
    {
        return $this->rect_width;
    }

    /*
     * Width of cropping rectangle.
     */
    public function set_rect_width($value)
    {
        $this->rect_width = $value;
        return $this;
    }
	
    /*
     * Height of cropping rectangle.
     */
    public function get_rect_height()
    {
        return $this->rect_height;
    }

    /*
     * Height of cropping rectangle.
     */
    public function set_rect_height($value)
    {
        $this->rect_height = $value;
        return $this;
    }
	
    /*
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     */
    public function get_rotate_flip_method()
    {
        return $this->rotate_flip_method;
    }

    /*
     * RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone.
     */
    public function set_rotate_flip_method($value)
    {
        $this->rotate_flip_method = $value;
        return $this;
    }
	
    /*
     * If result will include all other frames or just a specified frame.
     */
    public function get_save_other_frames()
    {
        return $this->save_other_frames;
    }

    /*
     * If result will include all other frames or just a specified frame.
     */
    public function set_save_other_frames($value)
    {
        $this->save_other_frames = $value;
        return $this;
    }
	
    /*
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path to updated file (if this is empty, response contains streamed image).
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Your Aspose Cloud Storage name.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }

    /*
     * Prepares initial info for HTTP request
     *
     * @param Configuration $config Imaging API configuration.
     */
    public function getHttpRequestInfo(Configuration $config)
    {
        // verify the required parameter 'image_data' is set
        if ($this->image_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $image_data when calling postImageFrame');
        }
        // verify the required parameter 'frame_id' is set
        if ($this->frame_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $frame_id when calling postImageFrame');
        }

        $resourcePath = '/imaging/frames/{frameId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    
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
        if ($this->out_path !== null) {
            $localName = lcfirst('outPath');
            $localValue = is_bool($this->out_path) ? ($this->out_path ? 'true' : 'false') : $this->out_path;
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
    
    
        $resourcePath = $this->parseURL($resourcePath, $queryParams, $config);

        // form params
        if ($this->image_data !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($this->image_data);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['image_data'] = $contents;
        }
        // body params
        $httpBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['multipart/form-data']
            );
        }
        
        list($httpInfo) = [$resourcePath, $formParams, $queryParams, $headerParams, $httpBody, $multipart];
        return $httpInfo;        
    }
}
