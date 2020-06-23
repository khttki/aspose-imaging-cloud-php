## Documentation for API endpoints

All URIs are relative to *https://api.aspose.cloud/v3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ImagingApi* | [**addSearchImage**](ImagingApi.md#addsearchimage) | **POST** /imaging/ai/imageSearch/{searchContextId}/image | Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**addSearchImageAsync**](ImagingApi.md#addsearchimageasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/image | Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**appendTiff**](ImagingApi.md#appendtiff) | **POST** /imaging/tiff/{name}/appendTiff | Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).
*ImagingApi* | [**appendTiffAsync**](ImagingApi.md#appendtiffasync) | **POST** /imaging/tiff/{name}/appendTiff | Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).
*ImagingApi* | [**compareImages**](ImagingApi.md#compareimages) | **POST** /imaging/ai/imageSearch/{searchContextId}/compare | Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**compareImagesAsync**](ImagingApi.md#compareimagesasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/compare | Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**convertImage**](ImagingApi.md#convertimage) | **GET** /imaging/{name}/convert | Convert existing image to another format.
*ImagingApi* | [**convertImageAsync**](ImagingApi.md#convertimageasync) | **GET** /imaging/{name}/convert | Convert existing image to another format.
*ImagingApi* | [**convertTiffToFax**](ImagingApi.md#converttifftofax) | **GET** /imaging/tiff/{name}/toFax | Update parameters of existing TIFF image accordingly to fax parameters.
*ImagingApi* | [**convertTiffToFaxAsync**](ImagingApi.md#converttifftofaxasync) | **GET** /imaging/tiff/{name}/toFax | Update parameters of existing TIFF image accordingly to fax parameters.
*ImagingApi* | [**copyFile**](ImagingApi.md#copyfile) | **PUT** /imaging/storage/file/copy/{srcPath} | Copy file
*ImagingApi* | [**copyFileAsync**](ImagingApi.md#copyfileasync) | **PUT** /imaging/storage/file/copy/{srcPath} | Copy file
*ImagingApi* | [**copyFolder**](ImagingApi.md#copyfolder) | **PUT** /imaging/storage/folder/copy/{srcPath} | Copy folder
*ImagingApi* | [**copyFolderAsync**](ImagingApi.md#copyfolderasync) | **PUT** /imaging/storage/folder/copy/{srcPath} | Copy folder
*ImagingApi* | [**createConvertedImage**](ImagingApi.md#createconvertedimage) | **POST** /imaging/convert | Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createConvertedImageAsync**](ImagingApi.md#createconvertedimageasync) | **POST** /imaging/convert | Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createCroppedImage**](ImagingApi.md#createcroppedimage) | **POST** /imaging/crop | Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createCroppedImageAsync**](ImagingApi.md#createcroppedimageasync) | **POST** /imaging/crop | Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createDeskewedImage**](ImagingApi.md#createdeskewedimage) | **POST** /imaging/deskew | Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createDeskewedImageAsync**](ImagingApi.md#createdeskewedimageasync) | **POST** /imaging/deskew | Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createFaxTiff**](ImagingApi.md#createfaxtiff) | **POST** /imaging/tiff/toFax | Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createFaxTiffAsync**](ImagingApi.md#createfaxtiffasync) | **POST** /imaging/tiff/toFax | Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createFolder**](ImagingApi.md#createfolder) | **PUT** /imaging/storage/folder/{path} | Create the folder
*ImagingApi* | [**createFolderAsync**](ImagingApi.md#createfolderasync) | **PUT** /imaging/storage/folder/{path} | Create the folder
*ImagingApi* | [**createGrayscaledImage**](ImagingApi.md#creategrayscaledimage) | **POST** /imaging/grayscale | Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createGrayscaledImageAsync**](ImagingApi.md#creategrayscaledimageasync) | **POST** /imaging/grayscale | Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFeatures**](ImagingApi.md#createimagefeatures) | **POST** /imaging/ai/imageSearch/{searchContextId}/features | Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFeaturesAsync**](ImagingApi.md#createimagefeaturesasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/features | Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFrame**](ImagingApi.md#createimageframe) | **POST** /imaging/frames/{frameId} | Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFrameAsync**](ImagingApi.md#createimageframeasync) | **POST** /imaging/frames/{frameId} | Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFrameRange**](ImagingApi.md#createimageframerange) | **POST** /imaging/frames/range | Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageFrameRangeAsync**](ImagingApi.md#createimageframerangeasync) | **POST** /imaging/frames/range | Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageSearch**](ImagingApi.md#createimagesearch) | **POST** /imaging/ai/imageSearch/create | Create new search context.
*ImagingApi* | [**createImageSearchAsync**](ImagingApi.md#createimagesearchasync) | **POST** /imaging/ai/imageSearch/create | Create new search context.
*ImagingApi* | [**createImageTag**](ImagingApi.md#createimagetag) | **POST** /imaging/ai/imageSearch/{searchContextId}/addTag | Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createImageTagAsync**](ImagingApi.md#createimagetagasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/addTag | Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedBmp**](ImagingApi.md#createmodifiedbmp) | **POST** /imaging/bmp | Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedBmpAsync**](ImagingApi.md#createmodifiedbmpasync) | **POST** /imaging/bmp | Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedEmf**](ImagingApi.md#createmodifiedemf) | **POST** /imaging/emf | Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedEmfAsync**](ImagingApi.md#createmodifiedemfasync) | **POST** /imaging/emf | Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedGif**](ImagingApi.md#createmodifiedgif) | **POST** /imaging/gif | Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedGifAsync**](ImagingApi.md#createmodifiedgifasync) | **POST** /imaging/gif | Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedJpeg**](ImagingApi.md#createmodifiedjpeg) | **POST** /imaging/jpg | Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedJpegAsync**](ImagingApi.md#createmodifiedjpegasync) | **POST** /imaging/jpg | Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedJpeg2000**](ImagingApi.md#createmodifiedjpeg2000) | **POST** /imaging/jpg2000 | Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedJpeg2000Async**](ImagingApi.md#createmodifiedjpeg2000async) | **POST** /imaging/jpg2000 | Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedPsd**](ImagingApi.md#createmodifiedpsd) | **POST** /imaging/psd | Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedPsdAsync**](ImagingApi.md#createmodifiedpsdasync) | **POST** /imaging/psd | Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedSvg**](ImagingApi.md#createmodifiedsvg) | **POST** /imaging/svg | Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedSvgAsync**](ImagingApi.md#createmodifiedsvgasync) | **POST** /imaging/svg | Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedTiff**](ImagingApi.md#createmodifiedtiff) | **POST** /imaging/tiff | Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedTiffAsync**](ImagingApi.md#createmodifiedtiffasync) | **POST** /imaging/tiff | Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedWebP**](ImagingApi.md#createmodifiedwebp) | **POST** /imaging/webp | Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedWebPAsync**](ImagingApi.md#createmodifiedwebpasync) | **POST** /imaging/webp | Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedWmf**](ImagingApi.md#createmodifiedwmf) | **POST** /imaging/wmf | Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createModifiedWmfAsync**](ImagingApi.md#createmodifiedwmfasync) | **POST** /imaging/wmf | Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createObjectBounds**](ImagingApi.md#createobjectbounds) | **POST** /imaging/ai/objectdetection/bounds | Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createObjectBoundsAsync**](ImagingApi.md#createobjectboundsasync) | **POST** /imaging/ai/objectdetection/bounds | Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createResizedImage**](ImagingApi.md#createresizedimage) | **POST** /imaging/resize | Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createResizedImageAsync**](ImagingApi.md#createresizedimageasync) | **POST** /imaging/resize | Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createRotateFlippedImage**](ImagingApi.md#createrotateflippedimage) | **POST** /imaging/rotateflip | Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createRotateFlippedImageAsync**](ImagingApi.md#createrotateflippedimageasync) | **POST** /imaging/rotateflip | Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createSavedImageAs**](ImagingApi.md#createsavedimageas) | **POST** /imaging/saveAs | Export existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createSavedImageAsAsync**](ImagingApi.md#createsavedimageasasync) | **POST** /imaging/saveAs | Export existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createUpdatedImage**](ImagingApi.md#createupdatedimage) | **POST** /imaging/updateImage | Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createUpdatedImageAsync**](ImagingApi.md#createupdatedimageasync) | **POST** /imaging/updateImage | Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**createVisualObjectBounds**](ImagingApi.md#createvisualobjectbounds) | **POST** /imaging/ai/objectdetection/visualbounds | Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream
*ImagingApi* | [**createVisualObjectBoundsAsync**](ImagingApi.md#createvisualobjectboundsasync) | **POST** /imaging/ai/objectdetection/visualbounds | Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream
*ImagingApi* | [**createWebSiteImageFeatures**](ImagingApi.md#createwebsiteimagefeatures) | **POST** /imaging/ai/imageSearch/{searchContextId}/features/web | Extract images features from web page and add them to search context
*ImagingApi* | [**createWebSiteImageFeaturesAsync**](ImagingApi.md#createwebsiteimagefeaturesasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/features/web | Extract images features from web page and add them to search context
*ImagingApi* | [**cropImage**](ImagingApi.md#cropimage) | **GET** /imaging/{name}/crop | Crop an existing image.
*ImagingApi* | [**cropImageAsync**](ImagingApi.md#cropimageasync) | **GET** /imaging/{name}/crop | Crop an existing image.
*ImagingApi* | [**deleteFile**](ImagingApi.md#deletefile) | **DELETE** /imaging/storage/file/{path} | Delete file
*ImagingApi* | [**deleteFileAsync**](ImagingApi.md#deletefileasync) | **DELETE** /imaging/storage/file/{path} | Delete file
*ImagingApi* | [**deleteFolder**](ImagingApi.md#deletefolder) | **DELETE** /imaging/storage/folder/{path} | Delete folder
*ImagingApi* | [**deleteFolderAsync**](ImagingApi.md#deletefolderasync) | **DELETE** /imaging/storage/folder/{path} | Delete folder
*ImagingApi* | [**deleteImageFeatures**](ImagingApi.md#deleteimagefeatures) | **DELETE** /imaging/ai/imageSearch/{searchContextId}/features | Deletes image features from search context.
*ImagingApi* | [**deleteImageFeaturesAsync**](ImagingApi.md#deleteimagefeaturesasync) | **DELETE** /imaging/ai/imageSearch/{searchContextId}/features | Deletes image features from search context.
*ImagingApi* | [**deleteImageSearch**](ImagingApi.md#deleteimagesearch) | **DELETE** /imaging/ai/imageSearch/{searchContextId} | Deletes the search context.
*ImagingApi* | [**deleteImageSearchAsync**](ImagingApi.md#deleteimagesearchasync) | **DELETE** /imaging/ai/imageSearch/{searchContextId} | Deletes the search context.
*ImagingApi* | [**deleteSearchImage**](ImagingApi.md#deletesearchimage) | **DELETE** /imaging/ai/imageSearch/{searchContextId}/image | Delete image and images features from search context
*ImagingApi* | [**deleteSearchImageAsync**](ImagingApi.md#deletesearchimageasync) | **DELETE** /imaging/ai/imageSearch/{searchContextId}/image | Delete image and images features from search context
*ImagingApi* | [**deskewImage**](ImagingApi.md#deskewimage) | **GET** /imaging/{name}/deskew | Deskew an existing image.
*ImagingApi* | [**deskewImageAsync**](ImagingApi.md#deskewimageasync) | **GET** /imaging/{name}/deskew | Deskew an existing image.
*ImagingApi* | [**downloadFile**](ImagingApi.md#downloadfile) | **GET** /imaging/storage/file/{path} | Download file
*ImagingApi* | [**downloadFileAsync**](ImagingApi.md#downloadfileasync) | **GET** /imaging/storage/file/{path} | Download file
*ImagingApi* | [**extractImageFeatures**](ImagingApi.md#extractimagefeatures) | **GET** /imaging/ai/imageSearch/{searchContextId}/image2features | Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**extractImageFeaturesAsync**](ImagingApi.md#extractimagefeaturesasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/image2features | Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**extractImageFrameProperties**](ImagingApi.md#extractimageframeproperties) | **POST** /imaging/frames/{frameId}/properties | Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**extractImageFramePropertiesAsync**](ImagingApi.md#extractimageframepropertiesasync) | **POST** /imaging/frames/{frameId}/properties | Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**extractImageProperties**](ImagingApi.md#extractimageproperties) | **POST** /imaging/properties | Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**extractImagePropertiesAsync**](ImagingApi.md#extractimagepropertiesasync) | **POST** /imaging/properties | Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**filterEffectImage**](ImagingApi.md#filtereffectimage) | **PUT** /imaging/{name}/filterEffect | Apply filtering effects to an existing image.
*ImagingApi* | [**filterEffectImageAsync**](ImagingApi.md#filtereffectimageasync) | **PUT** /imaging/{name}/filterEffect | Apply filtering effects to an existing image.
*ImagingApi* | [**findImageDuplicates**](ImagingApi.md#findimageduplicates) | **GET** /imaging/ai/imageSearch/{searchContextId}/findDuplicates | Find images duplicates.
*ImagingApi* | [**findImageDuplicatesAsync**](ImagingApi.md#findimageduplicatesasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/findDuplicates | Find images duplicates.
*ImagingApi* | [**findImagesByTags**](ImagingApi.md#findimagesbytags) | **POST** /imaging/ai/imageSearch/{searchContextId}/findByTags | Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**findImagesByTagsAsync**](ImagingApi.md#findimagesbytagsasync) | **POST** /imaging/ai/imageSearch/{searchContextId}/findByTags | Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**findSimilarImages**](ImagingApi.md#findsimilarimages) | **GET** /imaging/ai/imageSearch/{searchContextId}/findSimilar | Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**findSimilarImagesAsync**](ImagingApi.md#findsimilarimagesasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/findSimilar | Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**getDiscUsage**](ImagingApi.md#getdiscusage) | **GET** /imaging/storage/disc | Get disc usage
*ImagingApi* | [**getDiscUsageAsync**](ImagingApi.md#getdiscusageasync) | **GET** /imaging/storage/disc | Get disc usage
*ImagingApi* | [**getFileVersions**](ImagingApi.md#getfileversions) | **GET** /imaging/storage/version/{path} | Get file versions
*ImagingApi* | [**getFileVersionsAsync**](ImagingApi.md#getfileversionsasync) | **GET** /imaging/storage/version/{path} | Get file versions
*ImagingApi* | [**getFilesList**](ImagingApi.md#getfileslist) | **GET** /imaging/storage/folder/{path} | Get all files and folders within a folder
*ImagingApi* | [**getFilesListAsync**](ImagingApi.md#getfileslistasync) | **GET** /imaging/storage/folder/{path} | Get all files and folders within a folder
*ImagingApi* | [**getImageFeatures**](ImagingApi.md#getimagefeatures) | **GET** /imaging/ai/imageSearch/{searchContextId}/features | Gets image features from search context.
*ImagingApi* | [**getImageFeaturesAsync**](ImagingApi.md#getimagefeaturesasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/features | Gets image features from search context.
*ImagingApi* | [**getImageFrame**](ImagingApi.md#getimageframe) | **GET** /imaging/{name}/frames/{frameId} | Get separate frame from existing image.
*ImagingApi* | [**getImageFrameAsync**](ImagingApi.md#getimageframeasync) | **GET** /imaging/{name}/frames/{frameId} | Get separate frame from existing image.
*ImagingApi* | [**getImageFrameProperties**](ImagingApi.md#getimageframeproperties) | **GET** /imaging/{name}/frames/{frameId}/properties | Get separate frame properties of existing image.
*ImagingApi* | [**getImageFramePropertiesAsync**](ImagingApi.md#getimageframepropertiesasync) | **GET** /imaging/{name}/frames/{frameId}/properties | Get separate frame properties of existing image.
*ImagingApi* | [**getImageFrameRange**](ImagingApi.md#getimageframerange) | **GET** /imaging/{name}/frames/range | Get frames range from existing image.
*ImagingApi* | [**getImageFrameRangeAsync**](ImagingApi.md#getimageframerangeasync) | **GET** /imaging/{name}/frames/range | Get frames range from existing image.
*ImagingApi* | [**getImageProperties**](ImagingApi.md#getimageproperties) | **GET** /imaging/{name}/properties | Get properties of an image.
*ImagingApi* | [**getImagePropertiesAsync**](ImagingApi.md#getimagepropertiesasync) | **GET** /imaging/{name}/properties | Get properties of an image.
*ImagingApi* | [**getImageSearchStatus**](ImagingApi.md#getimagesearchstatus) | **GET** /imaging/ai/imageSearch/{searchContextId}/status | Gets the search context status.
*ImagingApi* | [**getImageSearchStatusAsync**](ImagingApi.md#getimagesearchstatusasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/status | Gets the search context status.
*ImagingApi* | [**getObjectBounds**](ImagingApi.md#getobjectbounds) | **GET** /imaging/ai/objectdetection/{name}/bounds | Detects objects&#39; bounds
*ImagingApi* | [**getObjectBoundsAsync**](ImagingApi.md#getobjectboundsasync) | **GET** /imaging/ai/objectdetection/{name}/bounds | Detects objects&#39; bounds
*ImagingApi* | [**getSearchImage**](ImagingApi.md#getsearchimage) | **GET** /imaging/ai/imageSearch/{searchContextId}/image | Get image from search context
*ImagingApi* | [**getSearchImageAsync**](ImagingApi.md#getsearchimageasync) | **GET** /imaging/ai/imageSearch/{searchContextId}/image | Get image from search context
*ImagingApi* | [**getVisualObjectBounds**](ImagingApi.md#getvisualobjectbounds) | **GET** /imaging/ai/objectdetection/{name}/visualbounds | Detects objects bounds and draw them on the original image
*ImagingApi* | [**getVisualObjectBoundsAsync**](ImagingApi.md#getvisualobjectboundsasync) | **GET** /imaging/ai/objectdetection/{name}/visualbounds | Detects objects bounds and draw them on the original image
*ImagingApi* | [**grayscaleImage**](ImagingApi.md#grayscaleimage) | **GET** /imaging/{name}/grayscale | Grayscale an existing image.
*ImagingApi* | [**grayscaleImageAsync**](ImagingApi.md#grayscaleimageasync) | **GET** /imaging/{name}/grayscale | Grayscale an existing image.
*ImagingApi* | [**modifyBmp**](ImagingApi.md#modifybmp) | **GET** /imaging/{name}/bmp | Update parameters of existing BMP image.
*ImagingApi* | [**modifyBmpAsync**](ImagingApi.md#modifybmpasync) | **GET** /imaging/{name}/bmp | Update parameters of existing BMP image.
*ImagingApi* | [**modifyEmf**](ImagingApi.md#modifyemf) | **GET** /imaging/{name}/emf | Process existing EMF imaging using given parameters.
*ImagingApi* | [**modifyEmfAsync**](ImagingApi.md#modifyemfasync) | **GET** /imaging/{name}/emf | Process existing EMF imaging using given parameters.
*ImagingApi* | [**modifyGif**](ImagingApi.md#modifygif) | **GET** /imaging/{name}/gif | Update parameters of existing GIF image.
*ImagingApi* | [**modifyGifAsync**](ImagingApi.md#modifygifasync) | **GET** /imaging/{name}/gif | Update parameters of existing GIF image.
*ImagingApi* | [**modifyJpeg**](ImagingApi.md#modifyjpeg) | **GET** /imaging/{name}/jpg | Update parameters of existing JPEG image.
*ImagingApi* | [**modifyJpegAsync**](ImagingApi.md#modifyjpegasync) | **GET** /imaging/{name}/jpg | Update parameters of existing JPEG image.
*ImagingApi* | [**modifyJpeg2000**](ImagingApi.md#modifyjpeg2000) | **GET** /imaging/{name}/jpg2000 | Update parameters of existing JPEG2000 image.
*ImagingApi* | [**modifyJpeg2000Async**](ImagingApi.md#modifyjpeg2000async) | **GET** /imaging/{name}/jpg2000 | Update parameters of existing JPEG2000 image.
*ImagingApi* | [**modifyPsd**](ImagingApi.md#modifypsd) | **GET** /imaging/{name}/psd | Update parameters of existing PSD image.
*ImagingApi* | [**modifyPsdAsync**](ImagingApi.md#modifypsdasync) | **GET** /imaging/{name}/psd | Update parameters of existing PSD image.
*ImagingApi* | [**modifySvg**](ImagingApi.md#modifysvg) | **GET** /imaging/{name}/svg | Update parameters of existing SVG image.
*ImagingApi* | [**modifySvgAsync**](ImagingApi.md#modifysvgasync) | **GET** /imaging/{name}/svg | Update parameters of existing SVG image.
*ImagingApi* | [**modifyTiff**](ImagingApi.md#modifytiff) | **GET** /imaging/{name}/tiff | Update parameters of existing TIFF image.
*ImagingApi* | [**modifyTiffAsync**](ImagingApi.md#modifytiffasync) | **GET** /imaging/{name}/tiff | Update parameters of existing TIFF image.
*ImagingApi* | [**modifyWebP**](ImagingApi.md#modifywebp) | **GET** /imaging/{name}/webp | Update parameters of existing WEBP image.
*ImagingApi* | [**modifyWebPAsync**](ImagingApi.md#modifywebpasync) | **GET** /imaging/{name}/webp | Update parameters of existing WEBP image.
*ImagingApi* | [**modifyWmf**](ImagingApi.md#modifywmf) | **GET** /imaging/{name}/wmf | Process existing WMF image using given parameters.
*ImagingApi* | [**modifyWmfAsync**](ImagingApi.md#modifywmfasync) | **GET** /imaging/{name}/wmf | Process existing WMF image using given parameters.
*ImagingApi* | [**moveFile**](ImagingApi.md#movefile) | **PUT** /imaging/storage/file/move/{srcPath} | Move file
*ImagingApi* | [**moveFileAsync**](ImagingApi.md#movefileasync) | **PUT** /imaging/storage/file/move/{srcPath} | Move file
*ImagingApi* | [**moveFolder**](ImagingApi.md#movefolder) | **PUT** /imaging/storage/folder/move/{srcPath} | Move folder
*ImagingApi* | [**moveFolderAsync**](ImagingApi.md#movefolderasync) | **PUT** /imaging/storage/folder/move/{srcPath} | Move folder
*ImagingApi* | [**objectExists**](ImagingApi.md#objectexists) | **GET** /imaging/storage/exist/{path} | Check if file or folder exists
*ImagingApi* | [**objectExistsAsync**](ImagingApi.md#objectexistsasync) | **GET** /imaging/storage/exist/{path} | Check if file or folder exists
*ImagingApi* | [**resizeImage**](ImagingApi.md#resizeimage) | **GET** /imaging/{name}/resize | Resize an existing image.
*ImagingApi* | [**resizeImageAsync**](ImagingApi.md#resizeimageasync) | **GET** /imaging/{name}/resize | Resize an existing image.
*ImagingApi* | [**rotateFlipImage**](ImagingApi.md#rotateflipimage) | **GET** /imaging/{name}/rotateflip | Rotate and/or flip an existing image.
*ImagingApi* | [**rotateFlipImageAsync**](ImagingApi.md#rotateflipimageasync) | **GET** /imaging/{name}/rotateflip | Rotate and/or flip an existing image.
*ImagingApi* | [**saveImageAs**](ImagingApi.md#saveimageas) | **GET** /imaging/{name}/saveAs | Export existing image to another format.
*ImagingApi* | [**saveImageAsAsync**](ImagingApi.md#saveimageasasync) | **GET** /imaging/{name}/saveAs | Export existing image to another format.
*ImagingApi* | [**storageExists**](ImagingApi.md#storageexists) | **GET** /imaging/storage/{storageName}/exist | Check if storage exists
*ImagingApi* | [**storageExistsAsync**](ImagingApi.md#storageexistsasync) | **GET** /imaging/storage/{storageName}/exist | Check if storage exists
*ImagingApi* | [**updateImage**](ImagingApi.md#updateimage) | **GET** /imaging/{name}/updateImage | Perform scaling, cropping and flipping of an existing image in a single request.
*ImagingApi* | [**updateImageAsync**](ImagingApi.md#updateimageasync) | **GET** /imaging/{name}/updateImage | Perform scaling, cropping and flipping of an existing image in a single request.
*ImagingApi* | [**updateImageFeatures**](ImagingApi.md#updateimagefeatures) | **PUT** /imaging/ai/imageSearch/{searchContextId}/features | Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**updateImageFeaturesAsync**](ImagingApi.md#updateimagefeaturesasync) | **PUT** /imaging/ai/imageSearch/{searchContextId}/features | Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**updateSearchImage**](ImagingApi.md#updatesearchimage) | **PUT** /imaging/ai/imageSearch/{searchContextId}/image | Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**updateSearchImageAsync**](ImagingApi.md#updatesearchimageasync) | **PUT** /imaging/ai/imageSearch/{searchContextId}/image | Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
*ImagingApi* | [**uploadFile**](ImagingApi.md#uploadfile) | **PUT** /imaging/storage/file/{path} | Upload file
*ImagingApi* | [**uploadFileAsync**](ImagingApi.md#uploadfileasync) | **PUT** /imaging/storage/file/{path} | Upload file


## Documentation for Models

 - [Aspose\Imaging\Model\BmpProperties](BmpProperties.md)
 - [Aspose\Imaging\Model\DetectedObject](DetectedObject.md)
 - [Aspose\Imaging\Model\DetectedObjectList](DetectedObjectList.md)
 - [Aspose\Imaging\Model\DicomProperties](DicomProperties.md)
 - [Aspose\Imaging\Model\DiscUsage](DiscUsage.md)
 - [Aspose\Imaging\Model\DjvuProperties](DjvuProperties.md)
 - [Aspose\Imaging\Model\DngProperties](DngProperties.md)
 - [Aspose\Imaging\Model\Error](Error.md)
 - [Aspose\Imaging\Model\ErrorDetails](ErrorDetails.md)
 - [Aspose\Imaging\Model\ExifData](ExifData.md)
 - [Aspose\Imaging\Model\FileVersions](FileVersions.md)
 - [Aspose\Imaging\Model\FilesList](FilesList.md)
 - [Aspose\Imaging\Model\FilesUploadResult](FilesUploadResult.md)
 - [Aspose\Imaging\Model\FilterPropertiesBase](FilterPropertiesBase.md)
 - [Aspose\Imaging\Model\GifProperties](GifProperties.md)
 - [Aspose\Imaging\Model\ImageDuplicates](ImageDuplicates.md)
 - [Aspose\Imaging\Model\ImageDuplicatesSet](ImageDuplicatesSet.md)
 - [Aspose\Imaging\Model\ImageFeatures](ImageFeatures.md)
 - [Aspose\Imaging\Model\ImagingResponse](ImagingResponse.md)
 - [Aspose\Imaging\Model\JfifData](JfifData.md)
 - [Aspose\Imaging\Model\Jpeg2000Properties](Jpeg2000Properties.md)
 - [Aspose\Imaging\Model\JpegProperties](JpegProperties.md)
 - [Aspose\Imaging\Model\ObjectExist](ObjectExist.md)
 - [Aspose\Imaging\Model\OdgMetadata](OdgMetadata.md)
 - [Aspose\Imaging\Model\OdgPage](OdgPage.md)
 - [Aspose\Imaging\Model\OdgProperties](OdgProperties.md)
 - [Aspose\Imaging\Model\PngProperties](PngProperties.md)
 - [Aspose\Imaging\Model\PsdProperties](PsdProperties.md)
 - [Aspose\Imaging\Model\Rectangle](Rectangle.md)
 - [Aspose\Imaging\Model\SearchContextStatus](SearchContextStatus.md)
 - [Aspose\Imaging\Model\SearchResult](SearchResult.md)
 - [Aspose\Imaging\Model\SearchResultsSet](SearchResultsSet.md)
 - [Aspose\Imaging\Model\StorageExist](StorageExist.md)
 - [Aspose\Imaging\Model\StorageFile](StorageFile.md)
 - [Aspose\Imaging\Model\SvgProperties](SvgProperties.md)
 - [Aspose\Imaging\Model\TiffFrame](TiffFrame.md)
 - [Aspose\Imaging\Model\TiffOptions](TiffOptions.md)
 - [Aspose\Imaging\Model\TiffProperties](TiffProperties.md)
 - [Aspose\Imaging\Model\WebPProperties](WebPProperties.md)
 - [Aspose\Imaging\Model\BigRectangularFilterProperties](BigRectangularFilterProperties.md)
 - [Aspose\Imaging\Model\BilateralSmoothingFilterProperties](BilateralSmoothingFilterProperties.md)
 - [Aspose\Imaging\Model\ConvolutionFilterProperties](ConvolutionFilterProperties.md)
 - [Aspose\Imaging\Model\DeconvolutionFilterProperties](DeconvolutionFilterProperties.md)
 - [Aspose\Imaging\Model\FileVersion](FileVersion.md)
 - [Aspose\Imaging\Model\JpegExifData](JpegExifData.md)
 - [Aspose\Imaging\Model\MedianFilterProperties](MedianFilterProperties.md)
 - [Aspose\Imaging\Model\SmallRectangularFilterProperties](SmallRectangularFilterProperties.md)
 - [Aspose\Imaging\Model\GaussWienerFilterProperties](GaussWienerFilterProperties.md)
 - [Aspose\Imaging\Model\GaussianBlurFilterProperties](GaussianBlurFilterProperties.md)
 - [Aspose\Imaging\Model\MotionWienerFilterProperties](MotionWienerFilterProperties.md)
 - [Aspose\Imaging\Model\SharpenFilterProperties](SharpenFilterProperties.md)

