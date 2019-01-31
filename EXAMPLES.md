### Imaging - Convert to another format (other operations are similar to use)
```php
// optional parameters are base URL, API version, authentication type and debug mode
// default base URL is https://api.aspose.cloud/
// default API version is v2
// default authentication type is OAuth2.0
// default debug mode is false

$imagingConfig = new Configuration();
$imagingConfig->setAppKey("yourAppKey");
$imagingConfig->setAppSid("yourAppSID");
$imagingApi = new ImagingApi($imagingConfig);

// this GET request converts image files
// optional parameters are output file path, input file folder and Aspose storage name (if you have more than one storage and want to use non-default one) 
// if output file path is not set, resulting image is returned as \Psr\Http\Message\StreamInterface; otherwise, it's saved at the specified path in the storage and null is returned
$getSaveRequest = new Requests\GetImageSaveAsRequest("inputImage.jpg", "png", "ResultFolder/resultImage.png", "InputFolder");

// returns null, saves result to storage
$imagingApi->getImageSaveAs($getSaveRequest);

$getStreamRequest = new Requests\GetImageSaveAsRequest("inputImage.jpg", "png", null, "InputFolder");

// returns resulting stream
$resultGetImageStream = $imagingApi->getImageSaveAs($getStreamRequest)
// process resulting stream

// another option is to use POST request and send image as raw data, if it's not present in your storage
$inputImageData = file_get_contents("D:\\test\\localInputImage.jpg");
$postSaveRequest = new Requests\PostImageSaveAsRequest($inputImageData, "png", "ResultFolder/resultImage.png");
	
// returns null, saves result to storage
$imagingApi->postImageSaveAs($postSaveRequest);

$postStreamRequest = new Requests\PostImageSaveAsRequest($inputImageData, "png");
	
// returns resulting \Psr\Http\Message\StreamInterface
$resultPostImageData = $imagingApi->postImageSaveAs($postStreamRequest);
// process resulting stream

// another Imaging requests typically follow the same principles
```

### Imaging.AI - Compare two images
```php
// optional parameters are base URL, API version, authentication type and debug mode
// default base URL is https://api.aspose.cloud/
// default API version is v2
// default authentication type is OAuth2.0
// default debug mode is false
$imagingConfig = new Configuration();
$imagingConfig->setAppKey("yourAppKey");
$imagingConfig->setAppSid("yourAppSID");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->postCreateSearchContext(new Requests\PostCreateSearchContextRequest());
$searchContextId = $apiResponse->getId();
 
// specify images for comparing (image ID is a path to image in storage)
$imageInStorage1 = "WorkFolder/Image1.jpg";
$imageInStorage2 = "WorkFolder/Image2.jpg";
  
// compare images
$response = $imagingApi->PostSearchContextCompareImages(
    new Requests\PostSearchContextCompareImagesRequest($searchContextId, $imageInStorage1, null, $imageInStorage2));
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
$imagingConfig->setAppKey("yourAppKey");
$imagingConfig->setAppSid("yourAppSID");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->postCreateSearchContext(new Requests\PostCreateSearchContextRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->postSearchContextExtractImageFeatures(
    new Requests\PostSearchContextExtractImageFeaturesRequest($searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getSearchContextStatus(new Requests\GetSearchContextStatusRequest($searchContextId))->getSearchStatus() !== "Idle")
{
    sleep(10);
}    
 
$imageFromStorage = true;
 
$results = null;
if ($imageFromStorage)
{
    // use search image from storage
    $storageImageId = "searchImage.jpg";
    $results = $imagingApi->getSearchContextFindSimilar(
        new Requests\GetSearchContextFindSimilarRequest($searchContextId, 90, 5, null, $storageImageId));
}
else
{
    // load search image data
    $imageData = file_get_contents("D:\\test\\localInputImage.jpg");     
    $results = $imagingApi->getSearchContextFindSimilar(
            new Requests\GetSearchContextFindSimilarRequest($searchContextId, 90, 5, $imageData));
}
             
// process search results
foreach ($results->getResults() as $searchResult)
{
   echo "ImageName: " . $searchResult->getImageId() . "; Similarity: " . $searchResult->getSimilarity() . "\r\n";
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
$imagingConfig->setAppKey("yourAppKey");
$imagingConfig->setAppSid("yourAppSID");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->postCreateSearchContext(new Requests\PostCreateSearchContextRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->postSearchContextExtractImageFeatures(
    new Requests\PostSearchContextExtractImageFeaturesRequest($searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getSearchContextStatus(new Requests\GetSearchContextStatusRequest($searchContextId))->getSearchStatus() !== "Idle")
{
    sleep(10);
}

// request finding duplicates
$response = $imagingApi->getSearchContextFindDuplicates(
    new Requests\GetSearchContextFindDuplicatesRequest($searchContextId, 90));
 
// process duplicates search results
foreach ($response->getDuplicates() as $duplicates)
{
    echo "Duplicates: \r\n";
    foreach ($duplicates->getDuplicateImages() as $duplicate)
    { 
        echo "ImageName: " . $duplicate->getImageId() . "; Similarity: " . $duplicate->getSimilarity() . "\r\n";
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
$imagingConfig->setAppKey("yourAppKey");
$imagingConfig->setAppSid("yourAppSID");
$imagingApi = new ImagingApi($imagingConfig);
 
// create search context or use existing search context ID if search context was created earlier
$apiResponse = $imagingApi->postCreateSearchContext(new Requests\PostCreateSearchContextRequest());
$searchContextId = $apiResponse->getId();
 
// extract images features if it was not done before
$imagingApi->postSearchContextExtractImageFeatures(
    new Requests\PostSearchContextExtractImageFeaturesRequest($searchContextId, null, null, "WorkFolder"))
 
// wait 'till image features extraction is completed
while ($imagingApi->getSearchContextStatus(new Requests\GetSearchContextStatusRequest($searchContextId))->getSearchStatus() !== "Idle")
{
    sleep(10);
} 
 
$tag = "MyTag";
// load tag image data
$tagImageData = file_get_contents("D:\\test\\tagImage.jpg");  
$imagingApi->postSearchContextAddTag(
        new Requests\PostSearchContextAddTagRequest($tagImageData, $searchContextId, $tag));
 
// serialize search tags collection to JSON
$searchTags = json_encode([$tag]);
 
// search images by tags
$response = $imagingApi->postSearchContextFindByTags(
    new Requests\PostSearchContextFindByTagsRequest($searchTags, $searchContextId, 90, 10));
 
// process search results
foreach ($response->getResults() as $searchResult)
{
    echo "ImageName: " . $searchResult->getImageId() . "; Similarity: " . $searchResult->getSimilarity() . "\r\n";
}
```

### Imaging.AI - Delete search context
```php
// search context is stored in the storage, and in case if search context is not needed anymore it should be removed
$imagingApi->deleteSearchContext(new Requests\DeleteSearchContextRequest($searchContextId));
```

### Exception handling and error codes
```php
try
{
    $imagingApi->deleteSearchContext(new Requests\DeleteSearchContextRequest($searchContextId));
}
catch (\Aspose\Imaging\ApiException $ex)
{
    echo "Code: " . ex->getCode() . "; Message: " $ex->getMessage() . "r\n";
}
```