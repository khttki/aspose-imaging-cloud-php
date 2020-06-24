# Aspose\Imaging\ImagingApi

<a name="addsearchimage"></a>
# **addSearchImage**
> addSearchImage($addSearchImageRequest)

Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

void (empty response body)

<a name="addsearchimageasync"></a>
# **addSearchImageAsync**
> addSearchImageAsync($addSearchImageRequest)

Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **AddSearchImageRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $image_data, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| Search context identifier. |
 **image_id** | **string**| Image identifier. |
 **image_data** | **string**| Input image | [optional]
 **folder** | **string**| Folder. | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="appendtiff"></a>
# **appendTiff**
> appendTiff($appendTiffRequest)

Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).

### Return type

void (empty response body)

<a name="appendtiffasync"></a>
# **appendTiffAsync**
> appendTiffAsync($appendTiffRequest)

Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **AppendTiffRequest** Parameters
```php
__construct(
    $name, 
    $append_file, 
    $storage, 
    $folder)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Original image file name. |
 **append_file** | **string**| Image file name to be appended to original one. |
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **folder** | **string**| Folder with images to process. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="compareimages"></a>
# **compareImages**
> compareImages($compareImagesRequest)

Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\SearchResultsSet**](SearchResultsSet.md)

<a name="compareimagesasync"></a>
# **compareImagesAsync**
> compareImagesAsync($compareImagesRequest)

Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CompareImagesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id1, 
    $image_data, 
    $image_id2, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_id1** | **string**| The first image Id in storage. |
 **image_data** | **string**| Input image | [optional]
 **image_id2** | **string**| The second image Id in storage or null (if image loading in request). | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="convertimage"></a>
# **convertImage**
> convertImage($convertImageRequest)

Convert existing image to another format.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="convertimageasync"></a>
# **convertImageAsync**
> convertImageAsync($convertImageRequest)

Convert existing image to another format.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ConvertImageRequest** Parameters
```php
__construct(
    $name, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. |
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="converttifftofax"></a>
# **convertTiffToFax**
> convertTiffToFax($convertTiffToFaxRequest)

Update parameters of existing TIFF image accordingly to fax parameters.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="converttifftofaxasync"></a>
# **convertTiffToFaxAsync**
> convertTiffToFaxAsync($convertTiffToFaxRequest)

Update parameters of existing TIFF image accordingly to fax parameters.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ConvertTiffToFaxRequest** Parameters
```php
__construct(
    $name, 
    $storage, 
    $folder)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="copyfile"></a>
# **copyFile**
> copyFile($copyFileRequest)

Copy file

### Return type

void (empty response body)

<a name="copyfileasync"></a>
# **copyFileAsync**
> copyFileAsync($copyFileRequest)

Copy file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CopyFileRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="copyfolder"></a>
# **copyFolder**
> copyFolder($copyFolderRequest)

Copy folder

### Return type

void (empty response body)

<a name="copyfolderasync"></a>
# **copyFolderAsync**
> copyFolderAsync($copyFolderRequest)

Copy folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CopyFolderRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createconvertedimage"></a>
# **createConvertedImage**
> createConvertedImage($createConvertedImageRequest)

Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createconvertedimageasync"></a>
# **createConvertedImageAsync**
> createConvertedImageAsync($createConvertedImageRequest)

Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateConvertedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createcroppedimage"></a>
# **createCroppedImage**
> createCroppedImage($createCroppedImageRequest)

Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createcroppedimageasync"></a>
# **createCroppedImageAsync**
> createCroppedImageAsync($createCroppedImageRequest)

Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateCroppedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $x, 
    $y, 
    $width, 
    $height, 
    $format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **x** | **int**| X position of start point for cropping rectangle. |
 **y** | **int**| Y position of start point for cropping rectangle. |
 **width** | **int**| Width of cropping rectangle. |
 **height** | **int**| Height of cropping rectangle. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createdeskewedimage"></a>
# **createDeskewedImage**
> createDeskewedImage($createDeskewedImageRequest)

Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createdeskewedimageasync"></a>
# **createDeskewedImageAsync**
> createDeskewedImageAsync($createDeskewedImageRequest)

Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateDeskewedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $resize_proportionally, 
    $bk_color, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **resize_proportionally** | **bool**| Resize proportionally |
 **bk_color** | **string**| Background color | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image) | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createfaxtiff"></a>
# **createFaxTiff**
> createFaxTiff($createFaxTiffRequest)

Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createfaxtiffasync"></a>
# **createFaxTiffAsync**
> createFaxTiffAsync($createFaxTiffRequest)

Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateFaxTiffRequest** Parameters
```php
__construct(
    $image_data, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createfolder"></a>
# **createFolder**
> createFolder($createFolderRequest)

Create the folder

### Return type

void (empty response body)

<a name="createfolderasync"></a>
# **createFolderAsync**
> createFolderAsync($createFolderRequest)

Create the folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateFolderRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="creategrayscaledimage"></a>
# **createGrayscaledImage**
> createGrayscaledImage($createGrayscaledImageRequest)

Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="creategrayscaledimageasync"></a>
# **createGrayscaledImageAsync**
> createGrayscaledImageAsync($createGrayscaledImageRequest)

Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateGrayscaledImageRequest** Parameters
```php
__construct(
    $image_data, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image) | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createimagefeatures"></a>
# **createImageFeatures**
> createImageFeatures($createImageFeaturesRequest)

Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

void (empty response body)

<a name="createimagefeaturesasync"></a>
# **createImageFeaturesAsync**
> createImageFeaturesAsync($createImageFeaturesRequest)

Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_data, 
    $image_id, 
    $images_folder, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_data** | **string**| Input image | [optional]
 **image_id** | **string**| The image identifier. | [optional]
 **images_folder** | **string**| Images source - a folder | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createimageframe"></a>
# **createImageFrame**
> createImageFrame($createImageFrameRequest)

Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createimageframeasync"></a>
# **createImageFrameAsync**
> createImageFrameAsync($createImageFrameRequest)

Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateImageFrameRequest** Parameters
```php
__construct(
    $image_data, 
    $frame_id, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $save_other_frames, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **frame_id** | **int**| Number of a frame. |
 **new_width** | **int**| New width. | [optional]
 **new_height** | **int**| New height. | [optional]
 **x** | **int**| X position of start point for cropping rectangle. | [optional]
 **y** | **int**| Y position of start point for cropping rectangle. | [optional]
 **rect_width** | **int**| Width of cropping rectangle. | [optional]
 **rect_height** | **int**| Height of cropping rectangle. | [optional]
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. | [optional]
 **save_other_frames** | **bool**| If result will include all other frames or just a specified frame. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createimageframerange"></a>
# **createImageFrameRange**
> createImageFrameRange($createImageFrameRangeRequest)

Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createimageframerangeasync"></a>
# **createImageFrameRangeAsync**
> createImageFrameRangeAsync($createImageFrameRangeRequest)

Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateImageFrameRangeRequest** Parameters
```php
__construct(
    $image_data, 
    $start_frame_id, 
    $end_frame_id, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $save_other_frames, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **start_frame_id** | **int**| Index of the first frame in range. |
 **end_frame_id** | **int**| Index of the last frame in range. |
 **new_width** | **int**| New width. | [optional]
 **new_height** | **int**| New height. | [optional]
 **x** | **int**| X position of start point for cropping rectangle. | [optional]
 **y** | **int**| Y position of start point for cropping rectangle. | [optional]
 **rect_width** | **int**| Width of cropping rectangle. | [optional]
 **rect_height** | **int**| Height of cropping rectangle. | [optional]
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. | [optional]
 **save_other_frames** | **bool**| If result will include all other frames or just a specified frame. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createimagesearch"></a>
# **createImageSearch**
> createImageSearch($createImageSearchRequest)

Create new search context.

### Return type

[**\Aspose\Imaging\Model\SearchContextStatus**](SearchContextStatus.md)

<a name="createimagesearchasync"></a>
# **createImageSearchAsync**
> createImageSearchAsync($createImageSearchRequest)

Create new search context.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateImageSearchRequest** Parameters
```php
__construct(
    $detector, 
    $matching_algorithm, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **detector** | **string**| The image features detector. | [optional] [default to akaze]
 **matching_algorithm** | **string**| The matching algorithm. | [optional] [default to randomBinaryTree]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createimagetag"></a>
# **createImageTag**
> createImageTag($createImageTagRequest)

Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

void (empty response body)

<a name="createimagetagasync"></a>
# **createImageTagAsync**
> createImageTagAsync($createImageTagRequest)

Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateImageTagRequest** Parameters
```php
__construct(
    $image_data, 
    $search_context_id, 
    $tag_name, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **search_context_id** | **string**| The search context identifier. |
 **tag_name** | **string**| The tag. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedbmp"></a>
# **createModifiedBmp**
> createModifiedBmp($createModifiedBmpRequest)

Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedbmpasync"></a>
# **createModifiedBmpAsync**
> createModifiedBmpAsync($createModifiedBmpRequest)

Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedBmpRequest** Parameters
```php
__construct(
    $image_data, 
    $bits_per_pixel, 
    $horizontal_resolution, 
    $vertical_resolution, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **bits_per_pixel** | **int**| Color depth. |
 **horizontal_resolution** | **int**| New horizontal resolution. |
 **vertical_resolution** | **int**| New vertical resolution. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedemf"></a>
# **createModifiedEmf**
> createModifiedEmf($createModifiedEmfRequest)

Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedemfasync"></a>
# **createModifiedEmfAsync**
> createModifiedEmfAsync($createModifiedEmfRequest)

Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedEmfRequest** Parameters
```php
__construct(
    $image_data, 
    $bk_color, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $from_scratch, 
    $out_path, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **bk_color** | **string**| Color of the background. |
 **page_width** | **int**| Width of the page. |
 **page_height** | **int**| Height of the page. |
 **border_x** | **int**| Border width. |
 **border_y** | **int**| Border height. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to png]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedgif"></a>
# **createModifiedGif**
> createModifiedGif($createModifiedGifRequest)

Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedgifasync"></a>
# **createModifiedGifAsync**
> createModifiedGifAsync($createModifiedGifRequest)

Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedGifRequest** Parameters
```php
__construct(
    $image_data, 
    $background_color_index, 
    $color_resolution, 
    $has_trailer, 
    $interlaced, 
    $is_palette_sorted, 
    $pixel_aspect_ratio, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **background_color_index** | **int**| Index of the background color. | [optional] [default to 32]
 **color_resolution** | **int**| Color resolution. | [optional] [default to 3]
 **has_trailer** | **bool**| Specifies if image has trailer. | [optional] [default to true]
 **interlaced** | **bool**| Specifies if image is interlaced. | [optional] [default to true]
 **is_palette_sorted** | **bool**| Specifies if palette is sorted. | [optional] [default to false]
 **pixel_aspect_ratio** | **int**| Pixel aspect ratio. | [optional] [default to 3]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to true]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedjpeg"></a>
# **createModifiedJpeg**
> createModifiedJpeg($createModifiedJpegRequest)

Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedjpegasync"></a>
# **createModifiedJpegAsync**
> createModifiedJpegAsync($createModifiedJpegRequest)

Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedJpegRequest** Parameters
```php
__construct(
    $image_data, 
    $quality, 
    $compression_type, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **quality** | **int**| Quality of an image from 0 to 100. Default is 75. | [optional] [default to 75]
 **compression_type** | **string**| Compression type: baseline (default), progressive, lossless or jpegls. | [optional] [default to baseline]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedjpeg2000"></a>
# **createModifiedJpeg2000**
> createModifiedJpeg2000($createModifiedJpeg2000Request)

Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedjpeg2000async"></a>
# **createModifiedJpeg2000Async**
> createModifiedJpeg2000Async($createModifiedJpeg2000Request)

Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedJpeg2000Request** Parameters
```php
__construct(
    $image_data, 
    $comment, 
    $codec, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **comment** | **string**| The comment (can be either single or comma-separated). |
 **codec** | **string**| The codec (j2k or jp2). | [optional] [default to j2k]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedpsd"></a>
# **createModifiedPsd**
> createModifiedPsd($createModifiedPsdRequest)

Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedpsdasync"></a>
# **createModifiedPsdAsync**
> createModifiedPsdAsync($createModifiedPsdRequest)

Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedPsdRequest** Parameters
```php
__construct(
    $image_data, 
    $channels_count, 
    $compression_method, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **channels_count** | **int**| Count of color channels. | [optional] [default to 4]
 **compression_method** | **string**| Compression method (for now, raw and RLE are supported). | [optional] [default to rle]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedsvg"></a>
# **createModifiedSvg**
> createModifiedSvg($createModifiedSvgRequest)

Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedsvgasync"></a>
# **createModifiedSvgAsync**
> createModifiedSvgAsync($createModifiedSvgRequest)

Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedSvgRequest** Parameters
```php
__construct(
    $image_data, 
    $color_type, 
    $text_as_shapes, 
    $scale_x, 
    $scale_y, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $bk_color, 
    $from_scratch, 
    $out_path, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **color_type** | **string**| Color type for SVG image. Only RGB is supported for now. | [optional] [default to Rgb]
 **text_as_shapes** | **bool**| Whether text must be converted as shapes. true if all text is turned into SVG shapes in the convertion; otherwise, false | [optional] [default to false]
 **scale_x** | **double**| Scale X. | [optional] [default to 0.0]
 **scale_y** | **double**| Scale Y. | [optional] [default to 0.0]
 **page_width** | **int**| Width of the page. | [optional]
 **page_height** | **int**| Height of the page. | [optional]
 **border_x** | **int**| Border width. Only 0 is supported for now. | [optional]
 **border_y** | **int**| Border height. Only 0 is supported for now. | [optional]
 **bk_color** | **string**| Background color (Default is white). | [optional] [default to white]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to png]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedtiff"></a>
# **createModifiedTiff**
> createModifiedTiff($createModifiedTiffRequest)

Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedtiffasync"></a>
# **createModifiedTiffAsync**
> createModifiedTiffAsync($createModifiedTiffRequest)

Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedTiffRequest** Parameters
```php
__construct(
    $image_data, 
    $bit_depth, 
    $compression, 
    $resolution_unit, 
    $horizontal_resolution, 
    $vertical_resolution, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **bit_depth** | **int**| Bit depth. |
 **compression** | **string**| Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values. | [optional]
 **resolution_unit** | **string**| New resolution unit (none - the default one, inch or centimeter). | [optional]
 **horizontal_resolution** | **double**| New horizontal resolution. | [optional] [default to 0.0]
 **vertical_resolution** | **double**| New vertical resolution. | [optional] [default to 0.0]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedwebp"></a>
# **createModifiedWebP**
> createModifiedWebP($createModifiedWebPRequest)

Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedwebpasync"></a>
# **createModifiedWebPAsync**
> createModifiedWebPAsync($createModifiedWebPRequest)

Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedWebPRequest** Parameters
```php
__construct(
    $image_data, 
    $loss_less, 
    $quality, 
    $anim_loop_count, 
    $anim_background_color, 
    $from_scratch, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **loss_less** | **bool**| If WEBP should be in lossless format. |
 **quality** | **int**| Quality (0-100). |
 **anim_loop_count** | **int**| The animation loop count. |
 **anim_background_color** | **string**| Color of the animation background. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createmodifiedwmf"></a>
# **createModifiedWmf**
> createModifiedWmf($createModifiedWmfRequest)

Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createmodifiedwmfasync"></a>
# **createModifiedWmfAsync**
> createModifiedWmfAsync($createModifiedWmfRequest)

Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateModifiedWmfRequest** Parameters
```php
__construct(
    $image_data, 
    $bk_color, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $from_scratch, 
    $out_path, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **bk_color** | **string**| Color of the background. |
 **page_width** | **int**| Width of the page. |
 **page_height** | **int**| Height of the page. |
 **border_x** | **int**| Border width. |
 **border_y** | **int**| Border height. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to png]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createobjectbounds"></a>
# **createObjectBounds**
> createObjectBounds($createObjectBoundsRequest)

Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\DetectedObjectList**](DetectedObjectList.md)

<a name="createobjectboundsasync"></a>
# **createObjectBoundsAsync**
> createObjectBoundsAsync($createObjectBoundsRequest)

Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateObjectBoundsRequest** Parameters
```php
__construct(
    $image_data, 
    $method, 
    $threshold, 
    $include_label, 
    $include_score, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **method** | **string**| Object detection method | [optional] [default to ssd]
 **threshold** | **int**| Object detection probability threshold in percents | [optional] [default to 50]
 **include_label** | **bool**| Draw detected objects labels | [optional] [default to false]
 **include_score** | **bool**| Draw detected objects scores | [optional] [default to false]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image) | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createresizedimage"></a>
# **createResizedImage**
> createResizedImage($createResizedImageRequest)

Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createresizedimageasync"></a>
# **createResizedImageAsync**
> createResizedImageAsync($createResizedImageRequest)

Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateResizedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $new_width, 
    $new_height, 
    $format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **new_width** | **int**| New width. |
 **new_height** | **int**| New height. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createrotateflippedimage"></a>
# **createRotateFlippedImage**
> createRotateFlippedImage($createRotateFlippedImageRequest)

Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createrotateflippedimageasync"></a>
# **createRotateFlippedImageAsync**
> createRotateFlippedImageAsync($createRotateFlippedImageRequest)

Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateRotateFlippedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $method, 
    $format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createupdatedimage"></a>
# **createUpdatedImage**
> createUpdatedImage($createUpdatedImageRequest)

Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createupdatedimageasync"></a>
# **createUpdatedImageAsync**
> createUpdatedImageAsync($createUpdatedImageRequest)

Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateUpdatedImageRequest** Parameters
```php
__construct(
    $image_data, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $format, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **new_width** | **int**| New width of the scaled image. |
 **new_height** | **int**| New height of the scaled image. |
 **x** | **int**| X position of start point for cropping rectangle. |
 **y** | **int**| Y position of start point for cropping rectangle. |
 **rect_width** | **int**| Width of cropping rectangle. |
 **rect_height** | **int**| Height of cropping rectangle. |
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image). | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createvisualobjectbounds"></a>
# **createVisualObjectBounds**
> createVisualObjectBounds($createVisualObjectBoundsRequest)

Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="createvisualobjectboundsasync"></a>
# **createVisualObjectBoundsAsync**
> createVisualObjectBoundsAsync($createVisualObjectBoundsRequest)

Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateVisualObjectBoundsRequest** Parameters
```php
__construct(
    $image_data, 
    $method, 
    $threshold, 
    $include_label, 
    $include_score, 
    $color, 
    $out_path, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **method** | **string**| Object detection method | [optional] [default to ssd]
 **threshold** | **int**| Object detection probability threshold in percents | [optional] [default to 50]
 **include_label** | **bool**| Draw detected objects classes | [optional] [default to false]
 **include_score** | **bool**| Draw detected objects scores | [optional] [default to false]
 **color** | **string**| Bounds, labels, and scores text color | [optional]
 **out_path** | **string**| Path to updated file (if this is empty, response contains streamed image) | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="createwebsiteimagefeatures"></a>
# **createWebSiteImageFeatures**
> createWebSiteImageFeatures($createWebSiteImageFeaturesRequest)

Extract images features from web page and add them to search context

### Return type

void (empty response body)

<a name="createwebsiteimagefeaturesasync"></a>
# **createWebSiteImageFeaturesAsync**
> createWebSiteImageFeaturesAsync($createWebSiteImageFeaturesRequest)

Extract images features from web page and add them to search context

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CreateWebSiteImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $images_source, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **images_source** | **string**| Images source - a web page |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="cropimage"></a>
# **cropImage**
> cropImage($cropImageRequest)

Crop an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="cropimageasync"></a>
# **cropImageAsync**
> cropImageAsync($cropImageRequest)

Crop an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **CropImageRequest** Parameters
```php
__construct(
    $name, 
    $x, 
    $y, 
    $width, 
    $height, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **x** | **int**| X position of start point for cropping rectangle. |
 **y** | **int**| Y position of start point for cropping rectangle. |
 **width** | **int**| Width of cropping rectangle |
 **height** | **int**| Height of cropping rectangle. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deletefile"></a>
# **deleteFile**
> deleteFile($deleteFileRequest)

Delete file

### Return type

void (empty response body)

<a name="deletefileasync"></a>
# **deleteFileAsync**
> deleteFileAsync($deleteFileRequest)

Delete file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteFileRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deletefolder"></a>
# **deleteFolder**
> deleteFolder($deleteFolderRequest)

Delete folder

### Return type

void (empty response body)

<a name="deletefolderasync"></a>
# **deleteFolderAsync**
> deleteFolderAsync($deleteFolderRequest)

Delete folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteFolderRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $recursive)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deleteimagefeatures"></a>
# **deleteImageFeatures**
> deleteImageFeatures($deleteImageFeaturesRequest)

Deletes image features from search context.

### Return type

void (empty response body)

<a name="deleteimagefeaturesasync"></a>
# **deleteImageFeaturesAsync**
> deleteImageFeaturesAsync($deleteImageFeaturesRequest)

Deletes image features from search context.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_id** | **string**| The image identifier. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deleteimagesearch"></a>
# **deleteImageSearch**
> deleteImageSearch($deleteImageSearchRequest)

Deletes the search context.

### Return type

void (empty response body)

<a name="deleteimagesearchasync"></a>
# **deleteImageSearchAsync**
> deleteImageSearchAsync($deleteImageSearchRequest)

Deletes the search context.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteImageSearchRequest** Parameters
```php
__construct(
    $search_context_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deletesearchimage"></a>
# **deleteSearchImage**
> deleteSearchImage($deleteSearchImageRequest)

Delete image and images features from search context

### Return type

void (empty response body)

<a name="deletesearchimageasync"></a>
# **deleteSearchImageAsync**
> deleteSearchImageAsync($deleteSearchImageRequest)

Delete image and images features from search context

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeleteSearchImageRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| Search context identifier. |
 **image_id** | **string**| Image identifier. |
 **folder** | **string**| Folder. | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="deskewimage"></a>
# **deskewImage**
> deskewImage($deskewImageRequest)

Deskew an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="deskewimageasync"></a>
# **deskewImageAsync**
> deskewImageAsync($deskewImageRequest)

Deskew an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DeskewImageRequest** Parameters
```php
__construct(
    $name, 
    $resize_proportionally, 
    $bk_color, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Image file name. |
 **resize_proportionally** | **bool**| Resize proportionally |
 **bk_color** | **string**| Background color | [optional]
 **folder** | **string**| Folder | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="downloadfile"></a>
# **downloadFile**
> downloadFile($downloadFileRequest)

Download file

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="downloadfileasync"></a>
# **downloadFileAsync**
> downloadFileAsync($downloadFileRequest)

Download file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **DownloadFileRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="extractimagefeatures"></a>
# **extractImageFeatures**
> extractImageFeatures($extractImageFeaturesRequest)

Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\ImageFeatures**](ImageFeatures.md)

<a name="extractimagefeaturesasync"></a>
# **extractImageFeaturesAsync**
> extractImageFeaturesAsync($extractImageFeaturesRequest)

Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ExtractImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $image_data, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_id** | **string**| The image identifier. |
 **image_data** | **string**| Input image | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="extractimageframeproperties"></a>
# **extractImageFrameProperties**
> extractImageFrameProperties($extractImageFramePropertiesRequest)

Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\ImagingResponse**](ImagingResponse.md)

<a name="extractimageframepropertiesasync"></a>
# **extractImageFramePropertiesAsync**
> extractImageFramePropertiesAsync($extractImageFramePropertiesRequest)

Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ExtractImageFramePropertiesRequest** Parameters
```php
__construct(
    $image_data, 
    $frame_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |
 **frame_id** | **int**| Number of a frame. |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="extractimageproperties"></a>
# **extractImageProperties**
> extractImageProperties($extractImagePropertiesRequest)

Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\ImagingResponse**](ImagingResponse.md)

<a name="extractimagepropertiesasync"></a>
# **extractImagePropertiesAsync**
> extractImagePropertiesAsync($extractImagePropertiesRequest)

Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ExtractImagePropertiesRequest** Parameters
```php
__construct(
    $image_data)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_data** | **string**| Input image |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="filtereffectimage"></a>
# **filterEffectImage**
> filterEffectImage($filterEffectImageRequest)

Apply filtering effects to an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="filtereffectimageasync"></a>
# **filterEffectImageAsync**
> filterEffectImageAsync($filterEffectImageRequest)

Apply filtering effects to an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **FilterEffectImageRequest** Parameters
```php
__construct(
    $name, 
    $filter_type, 
    $filter_properties, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **filter_type** | **string**| Filter type (BigRectangular, SmallRectangular, Median, GaussWiener, MotionWiener, GaussianBlur, Sharpen, BilateralSmoothing). |
 **filter_properties** | [**\Aspose\Imaging\Model\FilterPropertiesBase**](FilterPropertiesBase.md)| Filter properties. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="findimageduplicates"></a>
# **findImageDuplicates**
> findImageDuplicates($findImageDuplicatesRequest)

Find images duplicates.

### Return type

[**\Aspose\Imaging\Model\ImageDuplicatesSet**](ImageDuplicatesSet.md)

<a name="findimageduplicatesasync"></a>
# **findImageDuplicatesAsync**
> findImageDuplicatesAsync($findImageDuplicatesRequest)

Find images duplicates.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **FindImageDuplicatesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $similarity_threshold, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **similarity_threshold** | **double**| The similarity threshold. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="findimagesbytags"></a>
# **findImagesByTags**
> findImagesByTags($findImagesByTagsRequest)

Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\SearchResultsSet**](SearchResultsSet.md)

<a name="findimagesbytagsasync"></a>
# **findImagesByTagsAsync**
> findImagesByTagsAsync($findImagesByTagsRequest)

Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **FindImagesByTagsRequest** Parameters
```php
__construct(
    $tags, 
    $search_context_id, 
    $similarity_threshold, 
    $max_count, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | **string**| Tags array for searching |
 **search_context_id** | **string**| The search context identifier. |
 **similarity_threshold** | **double**| The similarity threshold. |
 **max_count** | **int**| The maximum count. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="findsimilarimages"></a>
# **findSimilarImages**
> findSimilarImages($findSimilarImagesRequest)

Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

[**\Aspose\Imaging\Model\SearchResultsSet**](SearchResultsSet.md)

<a name="findsimilarimagesasync"></a>
# **findSimilarImagesAsync**
> findSimilarImagesAsync($findSimilarImagesRequest)

Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **FindSimilarImagesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $similarity_threshold, 
    $max_count, 
    $image_data, 
    $image_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **similarity_threshold** | **double**| The similarity threshold. |
 **max_count** | **int**| The maximum count. |
 **image_data** | **string**| Input image | [optional]
 **image_id** | **string**| The search image identifier. | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getdiscusage"></a>
# **getDiscUsage**
> getDiscUsage($getDiscUsageRequest)

Get disc usage

### Return type

[**\Aspose\Imaging\Model\DiscUsage**](DiscUsage.md)

<a name="getdiscusageasync"></a>
# **getDiscUsageAsync**
> getDiscUsageAsync($getDiscUsageRequest)

Get disc usage

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetDiscUsageRequest** Parameters
```php
__construct(
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getfileversions"></a>
# **getFileVersions**
> getFileVersions($getFileVersionsRequest)

Get file versions

### Return type

[**\Aspose\Imaging\Model\FileVersions**](FileVersions.md)

<a name="getfileversionsasync"></a>
# **getFileVersionsAsync**
> getFileVersionsAsync($getFileVersionsRequest)

Get file versions

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetFileVersionsRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getfileslist"></a>
# **getFilesList**
> getFilesList($getFilesListRequest)

Get all files and folders within a folder

### Return type

[**\Aspose\Imaging\Model\FilesList**](FilesList.md)

<a name="getfileslistasync"></a>
# **getFilesListAsync**
> getFilesListAsync($getFilesListRequest)

Get all files and folders within a folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetFilesListRequest** Parameters
```php
__construct(
    $path, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimagefeatures"></a>
# **getImageFeatures**
> getImageFeatures($getImageFeaturesRequest)

Gets image features from search context.

### Return type

[**\Aspose\Imaging\Model\ImageFeatures**](ImageFeatures.md)

<a name="getimagefeaturesasync"></a>
# **getImageFeaturesAsync**
> getImageFeaturesAsync($getImageFeaturesRequest)

Gets image features from search context.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_id** | **string**| The image identifier. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimageframe"></a>
# **getImageFrame**
> getImageFrame($getImageFrameRequest)

Get separate frame from existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getimageframeasync"></a>
# **getImageFrameAsync**
> getImageFrameAsync($getImageFrameRequest)

Get separate frame from existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImageFrameRequest** Parameters
```php
__construct(
    $name, 
    $frame_id, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $save_other_frames, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **frame_id** | **int**| Number of a frame. |
 **new_width** | **int**| New width. | [optional]
 **new_height** | **int**| New height. | [optional]
 **x** | **int**| X position of start point for cropping rectangle. | [optional]
 **y** | **int**| Y position of start point for cropping rectangle. | [optional]
 **rect_width** | **int**| Width of cropping rectangle. | [optional]
 **rect_height** | **int**| Height of cropping rectangle. | [optional]
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. | [optional]
 **save_other_frames** | **bool**| If result will include all other frames or just a specified frame. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimageframeproperties"></a>
# **getImageFrameProperties**
> getImageFrameProperties($getImageFramePropertiesRequest)

Get separate frame properties of existing image.

### Return type

[**\Aspose\Imaging\Model\ImagingResponse**](ImagingResponse.md)

<a name="getimageframepropertiesasync"></a>
# **getImageFramePropertiesAsync**
> getImageFramePropertiesAsync($getImageFramePropertiesRequest)

Get separate frame properties of existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImageFramePropertiesRequest** Parameters
```php
__construct(
    $name, 
    $frame_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename with image. |
 **frame_id** | **int**| Number of a frame. |
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimageframerange"></a>
# **getImageFrameRange**
> getImageFrameRange($getImageFrameRangeRequest)

Get frames range from existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getimageframerangeasync"></a>
# **getImageFrameRangeAsync**
> getImageFrameRangeAsync($getImageFrameRangeRequest)

Get frames range from existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImageFrameRangeRequest** Parameters
```php
__construct(
    $name, 
    $start_frame_id, 
    $end_frame_id, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $save_other_frames, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **start_frame_id** | **int**| Index of the first frame in range. |
 **end_frame_id** | **int**| Index of the last frame in range. |
 **new_width** | **int**| New width. | [optional]
 **new_height** | **int**| New height. | [optional]
 **x** | **int**| X position of start point for cropping rectangle. | [optional]
 **y** | **int**| Y position of start point for cropping rectangle. | [optional]
 **rect_width** | **int**| Width of cropping rectangle. | [optional]
 **rect_height** | **int**| Height of cropping rectangle. | [optional]
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. | [optional]
 **save_other_frames** | **bool**| If result will include all other frames or just a specified frame. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimageproperties"></a>
# **getImageProperties**
> getImageProperties($getImagePropertiesRequest)

Get properties of an image.

### Return type

[**\Aspose\Imaging\Model\ImagingResponse**](ImagingResponse.md)

<a name="getimagepropertiesasync"></a>
# **getImagePropertiesAsync**
> getImagePropertiesAsync($getImagePropertiesRequest)

Get properties of an image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImagePropertiesRequest** Parameters
```php
__construct(
    $name, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getimagesearchstatus"></a>
# **getImageSearchStatus**
> getImageSearchStatus($getImageSearchStatusRequest)

Gets the search context status.

### Return type

[**\Aspose\Imaging\Model\SearchContextStatus**](SearchContextStatus.md)

<a name="getimagesearchstatusasync"></a>
# **getImageSearchStatusAsync**
> getImageSearchStatusAsync($getImageSearchStatusRequest)

Gets the search context status.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetImageSearchStatusRequest** Parameters
```php
__construct(
    $search_context_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getobjectbounds"></a>
# **getObjectBounds**
> getObjectBounds($getObjectBoundsRequest)

Detects objects' bounds

### Return type

[**\Aspose\Imaging\Model\DetectedObjectList**](DetectedObjectList.md)

<a name="getobjectboundsasync"></a>
# **getObjectBoundsAsync**
> getObjectBoundsAsync($getObjectBoundsRequest)

Detects objects' bounds

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetObjectBoundsRequest** Parameters
```php
__construct(
    $name, 
    $method, 
    $threshold, 
    $include_label, 
    $include_score, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Image file name. |
 **method** | **string**| Object detection method | [optional] [default to ssd]
 **threshold** | **int**| Object detection probability threshold in percents | [optional] [default to 50]
 **include_label** | **bool**| Return detected objects labels | [optional] [default to false]
 **include_score** | **bool**| Return detected objects score | [optional] [default to false]
 **folder** | **string**| Folder | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getsearchimage"></a>
# **getSearchImage**
> getSearchImage($getSearchImageRequest)

Get image from search context

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getsearchimageasync"></a>
# **getSearchImageAsync**
> getSearchImageAsync($getSearchImageRequest)

Get image from search context

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetSearchImageRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| Search context identifier. |
 **image_id** | **string**| Image identifier. |
 **folder** | **string**| Folder. | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="getvisualobjectbounds"></a>
# **getVisualObjectBounds**
> getVisualObjectBounds($getVisualObjectBoundsRequest)

Detects objects bounds and draw them on the original image

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="getvisualobjectboundsasync"></a>
# **getVisualObjectBoundsAsync**
> getVisualObjectBoundsAsync($getVisualObjectBoundsRequest)

Detects objects bounds and draw them on the original image

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GetVisualObjectBoundsRequest** Parameters
```php
__construct(
    $name, 
    $method, 
    $threshold, 
    $include_label, 
    $include_score, 
    $color, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The image features detector. |
 **method** | **string**| Object detection method | [optional] [default to ssd]
 **threshold** | **int**| Object detection probability threshold in percents | [optional] [default to 50]
 **include_label** | **bool**| Draw detected objects labels | [optional] [default to false]
 **include_score** | **bool**| Draw detected objects scores | [optional] [default to false]
 **color** | **string**| Bounds, labels, and scores text color | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="grayscaleimage"></a>
# **grayscaleImage**
> grayscaleImage($grayscaleImageRequest)

Grayscale an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="grayscaleimageasync"></a>
# **grayscaleImageAsync**
> grayscaleImageAsync($grayscaleImageRequest)

Grayscale an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **GrayscaleImageRequest** Parameters
```php
__construct(
    $name, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Image file name. |
 **folder** | **string**| Folder | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifybmp"></a>
# **modifyBmp**
> modifyBmp($modifyBmpRequest)

Update parameters of existing BMP image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifybmpasync"></a>
# **modifyBmpAsync**
> modifyBmpAsync($modifyBmpRequest)

Update parameters of existing BMP image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyBmpRequest** Parameters
```php
__construct(
    $name, 
    $bits_per_pixel, 
    $horizontal_resolution, 
    $vertical_resolution, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **bits_per_pixel** | **int**| Color depth. |
 **horizontal_resolution** | **int**| New horizontal resolution. |
 **vertical_resolution** | **int**| New vertical resolution. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifyemf"></a>
# **modifyEmf**
> modifyEmf($modifyEmfRequest)

Process existing EMF imaging using given parameters.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifyemfasync"></a>
# **modifyEmfAsync**
> modifyEmfAsync($modifyEmfRequest)

Process existing EMF imaging using given parameters.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyEmfRequest** Parameters
```php
__construct(
    $name, 
    $bk_color, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $from_scratch, 
    $folder, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **bk_color** | **string**| Color of the background. |
 **page_width** | **int**| Width of the page. |
 **page_height** | **int**| Height of the page. |
 **border_x** | **int**| Border width. |
 **border_y** | **int**| Border height. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to png]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifygif"></a>
# **modifyGif**
> modifyGif($modifyGifRequest)

Update parameters of existing GIF image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifygifasync"></a>
# **modifyGifAsync**
> modifyGifAsync($modifyGifRequest)

Update parameters of existing GIF image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyGifRequest** Parameters
```php
__construct(
    $name, 
    $background_color_index, 
    $color_resolution, 
    $has_trailer, 
    $interlaced, 
    $is_palette_sorted, 
    $pixel_aspect_ratio, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **background_color_index** | **int**| Index of the background color. | [optional] [default to 32]
 **color_resolution** | **int**| Color resolution. | [optional] [default to 3]
 **has_trailer** | **bool**| Specifies if image has trailer. | [optional] [default to true]
 **interlaced** | **bool**| Specifies if image is interlaced. | [optional] [default to true]
 **is_palette_sorted** | **bool**| Specifies if palette is sorted. | [optional] [default to false]
 **pixel_aspect_ratio** | **int**| Pixel aspect ratio. | [optional] [default to 3]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to true]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifyjpeg"></a>
# **modifyJpeg**
> modifyJpeg($modifyJpegRequest)

Update parameters of existing JPEG image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifyjpegasync"></a>
# **modifyJpegAsync**
> modifyJpegAsync($modifyJpegRequest)

Update parameters of existing JPEG image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyJpegRequest** Parameters
```php
__construct(
    $name, 
    $quality, 
    $compression_type, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **quality** | **int**| Quality of an image from 0 to 100. Default is 75. | [optional] [default to 75]
 **compression_type** | **string**| Compression type: baseline (default), progressive, lossless or jpegls. | [optional] [default to baseline]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifyjpeg2000"></a>
# **modifyJpeg2000**
> modifyJpeg2000($modifyJpeg2000Request)

Update parameters of existing JPEG2000 image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifyjpeg2000async"></a>
# **modifyJpeg2000Async**
> modifyJpeg2000Async($modifyJpeg2000Request)

Update parameters of existing JPEG2000 image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyJpeg2000Request** Parameters
```php
__construct(
    $name, 
    $comment, 
    $codec, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **comment** | **string**| The comment (can be either single or comma-separated). |
 **codec** | **string**| The codec (j2k or jp2). | [optional] [default to j2k]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifypsd"></a>
# **modifyPsd**
> modifyPsd($modifyPsdRequest)

Update parameters of existing PSD image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifypsdasync"></a>
# **modifyPsdAsync**
> modifyPsdAsync($modifyPsdRequest)

Update parameters of existing PSD image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyPsdRequest** Parameters
```php
__construct(
    $name, 
    $channels_count, 
    $compression_method, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **channels_count** | **int**| Count of color channels. | [optional] [default to 4]
 **compression_method** | **string**| Compression method (for now, raw and RLE are supported). | [optional] [default to rle]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifysvg"></a>
# **modifySvg**
> modifySvg($modifySvgRequest)

Update parameters of existing SVG image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifysvgasync"></a>
# **modifySvgAsync**
> modifySvgAsync($modifySvgRequest)

Update parameters of existing SVG image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifySvgRequest** Parameters
```php
__construct(
    $name, 
    $color_type, 
    $text_as_shapes, 
    $scale_x, 
    $scale_y, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $bk_color, 
    $from_scratch, 
    $folder, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **color_type** | **string**| Color type for SVG image. Only RGB is supported for now. | [optional] [default to Rgb]
 **text_as_shapes** | **bool**| Whether text must be converted as shapes. true if all text is turned into SVG shapes in the convertion; otherwise, false | [optional] [default to false]
 **scale_x** | **double**| Scale X. | [optional] [default to 0.0]
 **scale_y** | **double**| Scale Y. | [optional] [default to 0.0]
 **page_width** | **int**| Width of the page. | [optional]
 **page_height** | **int**| Height of the page. | [optional]
 **border_x** | **int**| Border width. Only 0 is supported for now. | [optional]
 **border_y** | **int**| Border height. Only 0 is supported for now. | [optional]
 **bk_color** | **string**| Background color (Default is white). | [optional] [default to white]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to svg]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifytiff"></a>
# **modifyTiff**
> modifyTiff($modifyTiffRequest)

Update parameters of existing TIFF image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifytiffasync"></a>
# **modifyTiffAsync**
> modifyTiffAsync($modifyTiffRequest)

Update parameters of existing TIFF image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyTiffRequest** Parameters
```php
__construct(
    $name, 
    $bit_depth, 
    $compression, 
    $resolution_unit, 
    $horizontal_resolution, 
    $vertical_resolution, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **bit_depth** | **int**| Bit depth. |
 **compression** | **string**| Compression (none is default). Please, refer to https://apireference.aspose.com/net/imaging/aspose.imaging.fileformats.tiff.enums/tiffcompressions for all possible values. | [optional]
 **resolution_unit** | **string**| New resolution unit (none - the default one, inch or centimeter). | [optional]
 **horizontal_resolution** | **double**| New horizontal resolution. | [optional] [default to 0.0]
 **vertical_resolution** | **double**| New vertical resolution. | [optional] [default to 0.0]
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifywebp"></a>
# **modifyWebP**
> modifyWebP($modifyWebPRequest)

Update parameters of existing WEBP image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifywebpasync"></a>
# **modifyWebPAsync**
> modifyWebPAsync($modifyWebPRequest)

Update parameters of existing WEBP image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyWebPRequest** Parameters
```php
__construct(
    $name, 
    $loss_less, 
    $quality, 
    $anim_loop_count, 
    $anim_background_color, 
    $from_scratch, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **loss_less** | **bool**| If WEBP should be in lossless format. |
 **quality** | **int**| Quality (0-100). |
 **anim_loop_count** | **int**| The animation loop count. |
 **anim_background_color** | **string**| Color of the animation background. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="modifywmf"></a>
# **modifyWmf**
> modifyWmf($modifyWmfRequest)

Process existing WMF image using given parameters.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="modifywmfasync"></a>
# **modifyWmfAsync**
> modifyWmfAsync($modifyWmfRequest)

Process existing WMF image using given parameters.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ModifyWmfRequest** Parameters
```php
__construct(
    $name, 
    $bk_color, 
    $page_width, 
    $page_height, 
    $border_x, 
    $border_y, 
    $from_scratch, 
    $folder, 
    $storage, 
    $format)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of image. |
 **bk_color** | **string**| Color of the background. |
 **page_width** | **int**| Width of the page. |
 **page_height** | **int**| Height of the page. |
 **border_x** | **int**| Border width. |
 **border_y** | **int**| Border height. |
 **from_scratch** | **bool**| Specifies where additional parameters we do not support should be taken from. If this is true – they will be taken from default values for standard image, if it is false – they will be saved from current image. Default is false. | [optional] [default to false]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]
 **format** | **string**| Export format (PNG is the default one). Please, refer to the export table from https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional] [default to png]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="movefile"></a>
# **moveFile**
> moveFile($moveFileRequest)

Move file

### Return type

void (empty response body)

<a name="movefileasync"></a>
# **moveFileAsync**
> moveFileAsync($moveFileRequest)

Move file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **MoveFileRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="movefolder"></a>
# **moveFolder**
> moveFolder($moveFolderRequest)

Move folder

### Return type

void (empty response body)

<a name="movefolderasync"></a>
# **moveFolderAsync**
> moveFolderAsync($moveFolderRequest)

Move folder

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **MoveFolderRequest** Parameters
```php
__construct(
    $src_path, 
    $dest_path, 
    $src_storage_name, 
    $dest_storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="objectexists"></a>
# **objectExists**
> objectExists($objectExistsRequest)

Check if file or folder exists

### Return type

[**\Aspose\Imaging\Model\ObjectExist**](ObjectExist.md)

<a name="objectexistsasync"></a>
# **objectExistsAsync**
> objectExistsAsync($objectExistsRequest)

Check if file or folder exists

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ObjectExistsRequest** Parameters
```php
__construct(
    $path, 
    $storage_name, 
    $version_id)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="resizeimage"></a>
# **resizeImage**
> resizeImage($resizeImageRequest)

Resize an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="resizeimageasync"></a>
# **resizeImageAsync**
> resizeImageAsync($resizeImageRequest)

Resize an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **ResizeImageRequest** Parameters
```php
__construct(
    $name, 
    $new_width, 
    $new_height, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **new_width** | **int**| New width. |
 **new_height** | **int**| New height. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="rotateflipimage"></a>
# **rotateFlipImage**
> rotateFlipImage($rotateFlipImageRequest)

Rotate and/or flip an existing image.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="rotateflipimageasync"></a>
# **rotateFlipImageAsync**
> rotateFlipImageAsync($rotateFlipImageRequest)

Rotate and/or flip an existing image.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **RotateFlipImageRequest** Parameters
```php
__construct(
    $name, 
    $method, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="storageexists"></a>
# **storageExists**
> storageExists($storageExistsRequest)

Check if storage exists

### Return type

[**\Aspose\Imaging\Model\StorageExist**](StorageExist.md)

<a name="storageexistsasync"></a>
# **storageExistsAsync**
> storageExistsAsync($storageExistsRequest)

Check if storage exists

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **StorageExistsRequest** Parameters
```php
__construct(
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="updateimage"></a>
# **updateImage**
> updateImage($updateImageRequest)

Perform scaling, cropping and flipping of an existing image in a single request.

### Return type

**\Psr\Http\Message\StreamInterface**

<a name="updateimageasync"></a>
# **updateImageAsync**
> updateImageAsync($updateImageRequest)

Perform scaling, cropping and flipping of an existing image in a single request.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **UpdateImageRequest** Parameters
```php
__construct(
    $name, 
    $new_width, 
    $new_height, 
    $x, 
    $y, 
    $rect_width, 
    $rect_height, 
    $rotate_flip_method, 
    $format, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename of an image. |
 **new_width** | **int**| New width of the scaled image. |
 **new_height** | **int**| New height of the scaled image. |
 **x** | **int**| X position of start point for cropping rectangle. |
 **y** | **int**| Y position of start point for cropping rectangle. |
 **rect_width** | **int**| Width of cropping rectangle. |
 **rect_height** | **int**| Height of cropping rectangle. |
 **rotate_flip_method** | **string**| RotateFlip method (Rotate180FlipNone, Rotate180FlipX, Rotate180FlipXY, Rotate180FlipY, Rotate270FlipNone, Rotate270FlipX, Rotate270FlipXY, Rotate270FlipY, Rotate90FlipNone, Rotate90FlipX, Rotate90FlipXY, Rotate90FlipY, RotateNoneFlipNone, RotateNoneFlipX, RotateNoneFlipXY, RotateNoneFlipY). Default is RotateNoneFlipNone. |
 **format** | **string**| Resulting image format. Please, refer to https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats#SupportedFileFormats-CommonOperationsFormatSupportMap for possible use-cases. | [optional]
 **folder** | **string**| Folder with image to process. | [optional]
 **storage** | **string**| Your Aspose Cloud Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="updateimagefeatures"></a>
# **updateImageFeatures**
> updateImageFeatures($updateImageFeaturesRequest)

Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

void (empty response body)

<a name="updateimagefeaturesasync"></a>
# **updateImageFeaturesAsync**
> updateImageFeaturesAsync($updateImageFeaturesRequest)

Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **UpdateImageFeaturesRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $image_data, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| The search context identifier. |
 **image_id** | **string**| The image identifier. |
 **image_data** | **string**| Input image | [optional]
 **folder** | **string**| The folder. | [optional]
 **storage** | **string**| The storage. | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="updatesearchimage"></a>
# **updateSearchImage**
> updateSearchImage($updateSearchImageRequest)

Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

### Return type

void (empty response body)

<a name="updatesearchimageasync"></a>
# **updateSearchImageAsync**
> updateSearchImageAsync($updateSearchImageRequest)

Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **UpdateSearchImageRequest** Parameters
```php
__construct(
    $search_context_id, 
    $image_id, 
    $image_data, 
    $folder, 
    $storage)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_context_id** | **string**| Search context identifier. |
 **image_id** | **string**| Image identifier. |
 **image_data** | **string**| Input image | [optional]
 **folder** | **string**| Folder. | [optional]
 **storage** | **string**| Storage | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)

<a name="uploadfile"></a>
# **uploadFile**
> uploadFile($uploadFileRequest)

Upload file

### Return type

[**\Aspose\Imaging\Model\FilesUploadResult**](FilesUploadResult.md)

<a name="uploadfileasync"></a>
# **uploadFileAsync**
> uploadFileAsync($uploadFileRequest)

Upload file

Performs operation asynchronously.

### Return type

**\GuzzleHttp\Promise\PromiseInterface**

### **UploadFileRequest** Parameters
```php
__construct(
    $path, 
    $file, 
    $storage_name)
```

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. |
 **file** | **string**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](API_README.md#documentation-for-api-endpoints) [[Back to Model list]](API_README.md#documentation-for-models) [[Back to API_README]](API_README.md)



