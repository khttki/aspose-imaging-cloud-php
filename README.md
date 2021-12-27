# Aspose.Imaging Cloud PHP SDK
[Aspose.Imaging Cloud](https://products.aspose.cloud/imaging) is a true [REST API](https://apireference.aspose.cloud/imaging/) that enables you to perform a wide range of image processing operations including creation, manipulation and conversion in the cloud, with zero initial costs. Our Cloud SDKs are wrappers around REST API in various programming languages, allowing you to process images in language of your choice quickly and easily, gaining all benefits of strong types and IDE highlights. 

This repository contains [Aspose.Imaging Cloud PHP SDK](https://products.aspose.cloud/imaging/php) source code. This SDK allows you to work with Aspose.Imaging Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

To use this SDK, you will need Client ID and Client Secret which can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) (free registration in Aspose Cloud is required for this).

## Key Features
#### Image Formats Support
Export the following images to various formats (generally supported ones are BMP, PSD, JPEG, TIFF, GIF, PNG, JPEG2000, WEBP and PDF):
* BMP
* GIF
* DJVU
* WMF
* EMF
* JPEG
* JPEG2000
* PSD
* TIFF
* WEBP
* PNG
* DICOM
* CDR
* ODG
* OTG
* DNG
* SVG
* CMX

Process options, change and return images in the same format:
* PSD
* JPEG
* TIFF
* GIF
* BMP
* JPEG2000
* WEBP

Process options, change and return images in any supported export format:
* EMF
* WMF

#### Supported Imaging Operations
* Export 
* Resize
* Crop
* Rotate and Flip
* TIFF frames extraction
* TIFF frames manipulation
* TIFF concatenation
* TIFF conversion to fax-friendly format
* Retrieve & update image properties
* Conversion to and from PSD format

#### Supported Imaging AI Operations
* Content-based image search
* Image duplicates search
* Image search by custom registered tags
* Image comparison and similarity detection
* Image features extraction (for now, AKAZE detector is supported)

For the complete list of use-cases, please refer to the [format support document](https://docs.aspose.cloud/display/imagingcloud/Supported+File+Formats) to see what you can achieve!

#### Storage API support
Since version 19.4, SDK includes support of storage operations for better user experience and unification, so now there's no need to use 2 different SDKs!

It gives you an ability to:
* Upload, download, copy, move and delete files, including versions handling (if you are using Cloud storage that supports this feature - true by default)
* Create, copy, move and delete folders
* Copy and move files and folders accross separate storages in scope of a single operation
* Check if certain file, folder or storage exists

Detalied official documentation can be found at the [following link](https://docs.aspose.cloud/display/imagingcloud).

## Getting Started
1. **Sign Up**. Before you begin, you need to sign up for an account on our [Dashboard](https://dashboard.aspose.cloud/) and retrieve your [credentials](https://dashboard.aspose.cloud/#/apps).
2. **Minimum requirements**. This SDK requires [PHP 5.6 or later](https://www.php.net/releases/).
3. **Install Aspose.Imaging Cloud PHP SDK**. Please, add the following [Packagist package](https://packagist.org/packages/aspose/aspose-imaging-cloud) to your project.

Please, add the following  to your composer.json as a dependency.
```json
{
    "require": {
        "aspose/aspose-imaging-cloud": ">=21.12"
    }
}
```
Import the dependencies to your code as follows.
```php
use \Aspose\Imaging\ImagingApi;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
```
4. **Using the SDK**. The best way to become familiar with how to use the SDK is to read the [Developer Guide](https://docs.aspose.cloud/display/imagingcloud/Developer+Guide). The [Getting Started Guide](https://docs.aspose.cloud/display/imagingcloud/Getting+Started) will help you to become familiar with the common concepts.

## Quick Examples
Please, look at [Examples](EXAMPLES.md) document for basic usage or use the [Examples](Examples) folder for more sophisticated scenarios.

#### Aspose Cloud-hosted service VS on-premise deployment (*experimental feature*)
Starting from v19.7, you can choose either to use Aspose Cloud-hosted image processing service (the standard way) or the Docker image from Docker Hub deployed on-premise to serve the requests.
The details about key differences and deployment process will be described on the dedicated Docker Hub page as soon as it's released.

To succeed with your on-premise service usage by the SDK, you need to:
1. Set the *baseUrl* parameter according to your on-premise deployment, *isMetered* parameter to *true* and use optional API version and debug mode parameters if needed.
```php
$imagingConfig = new Imaging\Configuration();
$imagingConfig->setBaseUrl("yourServiceUrl");
$imagingConfig->setOnPremise(true);
$imagingApi = new Imaging\ImagingApi($imagingConfig);
```
2. Set *storage* or *storageName* parameters for each request where they're present (mandatory!).

## Content
You may check our full [API endpoints list](docs/API_README.md#documentation-for-api-endpoints) or [models available](docs/API_README.md#documentation-for-models) in the SDK.

## Dependencies
* [PHP 5.6 or later](https://www.php.net/releases/)

## Licensing
All Aspose.Imaging Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

## Contact Us
Your feedback is very important to us. Please feel free to contact via
+ [**Free Support Forum**](https://forum.aspose.cloud/c/imaging)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)

## Resources
+ [**Web API reference**](https://apireference.aspose.cloud/imaging/)
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/imaging)
+ [**Documentation**](https://docs.aspose.cloud/display/imagingcloud/Home)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose.imaging-cloud/)

## Other languages
We generate our SDKs in different languages so you may check if yours is available in our [repository](https://github.com/aspose-imaging-cloud). If you don't find your language in the list, feel free to request it from us, or use raw REST API requests as you can find it [here](https://products.aspose.cloud/imaging/curl).

## Code generator
The solution is updated using [code generator](https://github.com/aspose-imaging-cloud/aspose-imaging-cloud-codegen).
