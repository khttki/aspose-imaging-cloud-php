# Aspose.Imaging Cloud PHP SDK
[Aspose.Imaging Cloud](https://products.aspose.cloud/imaging/cloud) is a true REST API that enables you to perform a wide range of image processing operations including creation, manipulation and conversion in the cloud, with zero initial costs. Our Cloud SDKs are wrappers around REST API in various programming languages, allowing you to process images in language of your choice quickly and easily, gaining all benefits of strong types and IDE highlights. 

This repository contains Aspose.Imaging Cloud PHP SDK source code. This SDK allows you to work with Aspose.Imaging Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

To use this SDK, you will need App SID and App Key which can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) (free registration in Aspose Cloud is required for this).

The solution is updated using [code generator](https://github.com/aspose-imaging-cloud/aspose-imaging-cloud-codegen).

# Features
### Image Formats Support
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

### Supported Imaging Operations
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

### Supported Imaging AI Operations
* Content-based image search
* Image duplicates search
* Image search by custom registered tags
* Image comparison and similarity detection
* Image features extraction (for now, AKAZE detector is supported)

# Storage API support
#### Since version 19.4, SDK includes support of storage operations for better user experience and unification, so now there's no need to use 2 different SDKs!

It gives you an ability to:
* Upload, download, copy, move and delete files, including versions handling (if you are using Cloud storage that supports this feature - true by default)
* Create, copy, move and delete folders
* Copy and move files and folders accross separate storages in scope of a single operation
* Check if certain file, folder or storage exists

# Usage
1. Please, add the following [Packagist package](https://packagist.org/packages/aspose/imaging-sdk-php) to your composer.json as a dependency.
```json
{
    "require": {
        "aspose/imaging-sdk-php": ">=19.4"
    }
}
```
2. Import the dependencies to your code as follows.
```php
use \Aspose\Imaging\ImagingApi;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
```

# Examples
Please, look at [Examples](EXAMPLES.md) document.

# Asynchronous API
Each API method has its' async version with *Async* postfix, using *\GuzzleHttp\Promise\PromiseInterface*.

# Tests
Tests are intended for internal usage only.

# Licensing
All Aspose.Imaging Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

# Contact Us
Your feedback is very important to us. Please feel free to contact via
+ [**Free Support Forum**](https://forum.aspose.cloud/c/imaging)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)

# Resources
+ [**Web API reference**](https://apireference.aspose.cloud/imaging/)
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/imaging/cloud)
+ [**Documentation**](https://docs.aspose.cloud/display/imagingcloud/Home)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose.imaging-cloud/)