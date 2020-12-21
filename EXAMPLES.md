### Imaging - Save as: convert image from storage to another format
```php
// optional parameters are base URL, API version and debug mode
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);

try {
    // get local image
    $localInputImage = file_get_contents("test.png");

    // upload local image to storage
    $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/inputImage.png",
        $localInputImage);
    $result = $imagingApi->uploadFile($uploadFileRequest);
    // inspect $result->getErrors() list if there were any
    // inspect $result->getUploaded() list for uploaded file names

    // convert image from storage to JPEG
    $saveAsRequest = new Requests\SaveImageAsRequest("inputImage.png", "jpg",
        "ExampleFolderNet");

    $convertedImage = $imagingApi->saveImageAs($saveAsRequest)->getContents();

    // process resulting image
    // for example, save it to storage
    $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/resultImage.jpg",
        $convertedImage);
    $result = $imagingApi->uploadFile($uploadFileRequest);
} finally {
    // remove file from storage
    $imagingApi->deleteFile(new Requests\DeleteFileRequest("ExampleFolderNet/resultImage.jpg"));
}

// other Imaging requests typically follow the same principles regarding stream/storage relations
```

### Imaging - Save as: convert image from request stream to another format
```php
// optional parameters are base URL, API version and debug mode
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);

try {
    // get local image
    $localInputImage = file_get_contents("test.png");

    // upload local image to storage
    $uploadFileRequest = new Requests\UploadFileRequest("ExampleFolderNet/inputImage.png",
        $localInputImage);
    $result = $imagingApi->uploadFile($uploadFileRequest);
    // inspect $result->getErrors() list if there were any
    // inspect $result->getUploaded() list for uploaded file names

    // convert image from request stream to JPEG and save it to storage
    // please, use outPath parameter for saving the result to storage
    $saveAsToStorageRequest = new Requests\CreateSavedImageAsRequest($localInputImage, "jpg",
        "ExampleFolderNet/resultImage.jpg");

    $imagingApi->createSavedImageAs($saveAsToStorageRequest);

    // download saved image from storage and process it
    $savedFile = $imagingApi->downloadFile(
        new Requests\DownloadFileRequest("ExampleFolderNet/resultImage.jpg"))->getContents();

    // convert image from request stream to JPEG and read it from resulting stream
    // please, set outPath parameter as null to return result in request stream
    // instead of saving to storage
    $saveAsToStreamRequest = new Requests\CreateSavedImageAsRequest($localInputImage, "jpg");

    // process resulting image from response stream
    $convertedImage = $imagingApi->createSavedImageAs($saveAsToStreamRequest)->getContents();
} finally {
    // remove file from storage
    $imagingApi->deleteFile(new Requests\DeleteFileRequest("ExampleFolderNet/resultImage.jpg"));
}

// other Imaging requests typically follow the same principles regarding stream/storage relations
```

### Imaging.AI - Compare two images
```php
// optional parameters are base URL, API version and debug mode
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->createImageSearch(new Requests\CreateImageSearchRequest());
$searchContextId = $apiResponse->getId();
 
// specify images for comparing (image ID is a path to image in storage)
$imageInStorage1 = "WorkFolder/Image1.jpg";
$imageInStorage2 = "WorkFolder/Image2.jpg";
  
// compare images
$response = $imagingApi->CompareImages(
    new Requests\CompareImagesRequest($searchContextId, 
    $imageInStorage1, null, $imageInStorage2));
$similarity = $response->getResults()[0]->getSimilarity();
```

### Imaging.AI - Find similar images
```php
// optional parameters are base URL, API version, authentication type and debug mode
// default base URL is https://api.aspose.cloud/
// default API version is v2
// default authentication type is OAuth2.0
// default debug mode is false
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->createImageSearch(new Requests\CreateImageSearchRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->createImageFeatures(
    new Requests\CreateImageFeaturesRequest(
    $searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getImageSearchStatus(
    new Requests\GetImageSearchStatusRequest($searchContextId))
    ->getSearchStatus() !== "Idle")
{
    sleep(10);
}    
 
$imageFromStorage = true;
 
$results = null;
if ($imageFromStorage)
{
    // use search image from storage
    $storageImageId = "searchImage.jpg";
    $results = $imagingApi->findSimilarImages(
        new Requests\FindSimilarImagesRequest(
        $searchContextId, 90, 5, null, $storageImageId));
}
else
{
    // load search image data
    $imageData = file_get_contents("D:\\test\\localInputImage.jpg");     
    $results = $imagingApi->findSimilarImages(
            new Requests\FindSimilarImagesRequest($searchContextId, 90, 5, $imageData));
}
             
// process search results
foreach ($results->getResults() as $searchResult)
{
   echo "ImageName: " . $searchResult->getImageId() . "; Similarity: " 
       . $searchResult->getSimilarity() . "\r\n";
}
```

### Imaging.AI - Find duplicate images
```php
// optional parameters are base URL, API version, authentication type and debug mode
// default base URL is https://api.aspose.cloud/
// default API version is v2
// default authentication type is OAuth2.0
// default debug mode is false
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->createImageSearch(new Requests\CreateImageSearchRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->createImageFeatures(
    new Requests\CreateImageFeaturesRequest(
    $searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getImageSearchStatus(
    new Requests\GetImageSearchStatusRequest($searchContextId))->getSearchStatus() !== "Idle")
{
    sleep(10);
}

// request finding duplicates
$response = $imagingApi->findImageDuplicates(
    new Requests\FindImageDuplicatesRequest($searchContextId, 90));
 
// process duplicates search results
foreach ($response->getDuplicates() as $duplicates)
{
    echo "Duplicates: \r\n";
    foreach ($duplicates->getDuplicateImages() as $duplicate)
    { 
        echo "ImageName: " . $duplicate->getImageId() . "; Similarity: " 
        . $duplicate->getSimilarity() . "\r\n";
    }
}
```

### Imaging.AI - Search images by tags
```php
// optional parameters are base URL, API version, authentication type and debug mode
// default base URL is https://api.aspose.cloud/
// default API version is v2
// default authentication type is OAuth2.0
// default debug mode is false
$imagingConfig = new Configuration();
$imagingConfig->setClientSecret("ClientSecret");
$imagingConfig->setClientId("ClientId");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->createImageSearch(new Requests\CreateImageSearchRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->createImageFeatures(
    new Requests\CreateImageFeaturesRequest(
    $searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getImageSearchStatus(
    new Requests\GetImageSearchStatusRequest($searchContextId))->getSearchStatus() !== "Idle")
{
    sleep(10);
} 
 
$tag = "MyTag";
// load tag image data
$tagImageData = file_get_contents("D:\\test\\tagImage.jpg");  
$imagingApi->createImageTag(
        new Requests\CreateImageTagRequest($tagImageData, $searchContextId, $tag));
 
// serialize search tags collection to JSON
$searchTags = json_encode([$tag]);
 
// search images by tags
$response = $imagingApi->findImagesByTags(
    new Requests\FindImagesByTagsRequest($searchTags, $searchContextId, 90, 10));
 
// process search results
foreach ($response->getResults() as $searchResult)
{
    echo "ImageName: " . $searchResult->getImageId() .
    "; Similarity: " . $searchResult->getSimilarity() . "\r\n";
}
```

### Imaging.AI - Delete search context
```php
// search context is stored in the storage, and in case if search context is not needed anymore it should be removed
$imagingApi->deleteImageSearch(
    new Requests\DeleteImageSearchRequest($searchContextId));
```

### Exception handling and error codes
```php
try
{
    $imagingApi->deleteImageSearch(
        new Requests\DeleteImageSearchRequest($searchContextId));
}
catch (\Aspose\Imaging\ApiException $ex)
{
    echo var_dump($ex) . "r\n";
}
```