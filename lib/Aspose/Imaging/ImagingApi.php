<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingApi.php">
 *   Copyright (c) 2018-2020 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\Imaging;

use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Psr7\MultipartStream;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\RequestOptions;
use \Aspose\Imaging\ObjectSerializer;

/**
 * Aspose.Imaging Cloud APIs.
 */
class ImagingApi
{
    /**
     * Stores client instance
     *
     * @var \GuzzleHttp\ClientInterface client for calling the API
     */
    private $client;

    /**
     * Stores configuration
     *
     * @var \Aspose\Imaging\Configuration Configuration info
     */
    private $configuration;
  
    /**
     * Initialize a new instance of ImagingApi
     *
     * @param \Aspose\Imaging\Configuration   $config Configuration info
     * @param \GuzzleHttp\ClientInterface   $client PSR-7 compliant HTTP client
     */
    public function __construct($config = null, $client = null)
    {
        $this->client = $client ?: new Client();
        $this->configuration = $config ?: new Configuration();
        $execTime = (int)ini_get('max_execution_time');
        if ($execTime > 0 && $execTime < 500)
        {
            set_time_limit(500);
        }

        if (!$config->getOnPremise())
        {
            $this->requestToken();
        }
    }

    /**
     * Gets the configuration.
     * @return \Aspose\Imaging\Configuration
     */
    public function getConfig() 
    {
        return $this->configuration;
    }
    
    /**
     * Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\AddSearchImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addSearchImage($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\AddSearchImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSearchImageAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).
     *
     * @param \Aspose\Imaging\Model\Requests\AppendTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function appendTiff($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\AppendTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendTiffAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CompareImagesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function compareImages($request)
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CompareImagesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function compareImagesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Convert existing image to another format.
     *
     * @param \Aspose\Imaging\Model\Requests\ConvertImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function convertImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Convert existing image to another format.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ConvertImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing TIFF image accordingly to fax parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\ConvertTiffToFaxRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function convertTiffToFax($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing TIFF image accordingly to fax parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ConvertTiffToFaxRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertTiffToFaxAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Copy file
     *
     * @param \Aspose\Imaging\Model\Requests\CopyFileRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Copy file
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CopyFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Copy folder
     *
     * @param \Aspose\Imaging\Model\Requests\CopyFolderRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Copy folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CopyFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateConvertedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createConvertedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Convert existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateConvertedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createConvertedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateCroppedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createCroppedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Crop an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateCroppedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCroppedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateDeskewedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createDeskewedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Deskew an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateDeskewedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDeskewedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateFaxTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createFaxTiff($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of TIFF image accordingly to fax parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateFaxTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFaxTiffAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Create the folder
     *
     * @param \Aspose\Imaging\Model\Requests\CreateFolderRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Create the folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateGrayscaledImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createGrayscaledImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Grayscales an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateGrayscaledImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGrayscaledImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createImageFeatures($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createImageFeaturesAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFrameRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createImageFrame($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get separate frame from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFrameRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createImageFrameAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFrameRangeRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createImageFrameRange($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get frames range from existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageFrameRangeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createImageFrameRangeAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Create new search context.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageSearchRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function createImageSearch($request)
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Create new search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageSearchRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createImageSearchAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageTagRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createImageTag($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateImageTagRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createImageTagAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedBmpRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedBmp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedBmpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedEmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Process existing EMF imaging using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedEmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedEmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedGifRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedGif($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedGifAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedJpegRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedJpeg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of JPEG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedJpegRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedJpegAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedJpeg2000($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of JPEG2000 image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedJpeg2000Async($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedPsdRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedPsd($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedPsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedPsdAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedSvgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedSvg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of SVG image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedSvgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedSvgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedTiff($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedTiffAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedWebPRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedWebP($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of WEBP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedWebPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedWebPAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createModifiedWmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Process existing WMF image using given parameters. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateModifiedWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createModifiedWmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateObjectBoundsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\DetectedObjectList
     */
    public function createObjectBounds($request)
    {
        $returnType = '\Aspose\Imaging\Model\DetectedObjectList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Detects objects bounds. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateObjectBoundsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createObjectBoundsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\DetectedObjectList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateResizedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createResizedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateResizedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createResizedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateRotateFlippedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createRotateFlippedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Rotate and/or flip an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateRotateFlippedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRotateFlippedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateUpdatedImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createUpdatedImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Perform scaling, cropping and flipping of an image in a single request. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateUpdatedImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUpdatedImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream
     *
     * @param \Aspose\Imaging\Model\Requests\CreateVisualObjectBoundsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createVisualObjectBounds($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Detects objects bounds and draw them on the original image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateVisualObjectBoundsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVisualObjectBoundsAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Extract images features from web page and add them to search context
     *
     * @param \Aspose\Imaging\Model\Requests\CreateWebSiteImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createWebSiteImageFeatures($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Extract images features from web page and add them to search context
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CreateWebSiteImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createWebSiteImageFeaturesAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Crop an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\CropImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function cropImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Crop an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\CropImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cropImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Delete file
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteFileRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Delete file
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Delete folder
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteFolderRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Delete folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Deletes image features from search context.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteImageFeatures($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Deletes image features from search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteImageFeaturesAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Deletes the search context.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteImageSearchRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteImageSearch($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Deletes the search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteImageSearchRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteImageSearchAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Delete image and images features from search context
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchImage($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Delete image and images features from search context
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchImageAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Deskew an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\DeskewImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function deskewImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Deskew an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DeskewImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deskewImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Download file
     *
     * @param \Aspose\Imaging\Model\Requests\DownloadFileRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function downloadFile($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Download file
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\DownloadFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function extractImageFeatures($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Extract features from image without adding to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function extractImageFeaturesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function extractImageFrameProperties($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get separate frame properties of existing image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function extractImageFramePropertiesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImagePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function extractImageProperties($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ExtractImagePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function extractImagePropertiesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Apply filtering effects to an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\FilterEffectImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function filterEffectImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Apply filtering effects to an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\FilterEffectImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function filterEffectImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Find images duplicates.
     *
     * @param \Aspose\Imaging\Model\Requests\FindImageDuplicatesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageDuplicatesSet
     */
    public function findImageDuplicates($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImageDuplicatesSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Find images duplicates.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\FindImageDuplicatesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findImageDuplicatesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageDuplicatesSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\FindImagesByTagsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function findImagesByTags($request)
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\FindImagesByTagsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findImagesByTagsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\FindSimilarImagesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function findSimilarImages($request)
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\FindSimilarImagesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findSimilarImagesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get disc usage
     *
     * @param \Aspose\Imaging\Model\Requests\GetDiscUsageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\DiscUsage
     */
    public function getDiscUsage($request)
    {
        $returnType = '\Aspose\Imaging\Model\DiscUsage';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get disc usage
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetDiscUsageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\DiscUsage';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get file versions
     *
     * @param \Aspose\Imaging\Model\Requests\GetFileVersionsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\FileVersions
     */
    public function getFileVersions($request)
    {
        $returnType = '\Aspose\Imaging\Model\FileVersions';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get file versions
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetFileVersionsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\FileVersions';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get all files and folders within a folder
     *
     * @param \Aspose\Imaging\Model\Requests\GetFilesListRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\FilesList
     */
    public function getFilesList($request)
    {
        $returnType = '\Aspose\Imaging\Model\FilesList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get all files and folders within a folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetFilesListRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\FilesList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Gets image features from search context.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getImageFeatures($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Gets image features from search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFeaturesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get separate frame from existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFrameRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageFrame($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get separate frame from existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFrameRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFrameAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get separate frame properties of existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function getImageFrameProperties($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get separate frame properties of existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFramePropertiesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get frames range from existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFrameRangeRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageFrameRange($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get frames range from existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageFrameRangeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFrameRangeAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get properties of an image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImagePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function getImageProperties($request)
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get properties of an image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImagePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePropertiesAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Gets the search context status.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageSearchStatusRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function getImageSearchStatus($request)
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Gets the search context status.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageSearchStatusRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageSearchStatusAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Detects objects' bounds
     *
     * @param \Aspose\Imaging\Model\Requests\GetObjectBoundsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\DetectedObjectList
     */
    public function getObjectBounds($request)
    {
        $returnType = '\Aspose\Imaging\Model\DetectedObjectList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Detects objects' bounds
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetObjectBoundsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getObjectBoundsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\DetectedObjectList';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Get image from search context
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getSearchImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Get image from search context
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Detects objects bounds and draw them on the original image
     *
     * @param \Aspose\Imaging\Model\Requests\GetVisualObjectBoundsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getVisualObjectBounds($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Detects objects bounds and draw them on the original image
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetVisualObjectBoundsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVisualObjectBoundsAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Grayscale an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GrayscaleImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function grayscaleImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Grayscale an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GrayscaleImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function grayscaleImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing BMP image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyBmpRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyBmp($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing BMP image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyBmpAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Process existing EMF imaging using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyEmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Process existing EMF imaging using given parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyEmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyEmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing GIF image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyGifRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyGif($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing GIF image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyGifAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing JPEG image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyJpegRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyJpeg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing JPEG image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyJpegRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyJpegAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing JPEG2000 image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyJpeg2000($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing JPEG2000 image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyJpeg2000Async($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing PSD image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyPsdRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyPsd($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing PSD image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyPsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyPsdAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing SVG image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifySvgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifySvg($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing SVG image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifySvgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifySvgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing TIFF image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyTiff($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing TIFF image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyTiffAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update parameters of existing WEBP image.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyWebPRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyWebP($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update parameters of existing WEBP image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyWebPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyWebPAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Process existing WMF image using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function modifyWmf($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Process existing WMF image using given parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ModifyWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyWmfAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Move file
     *
     * @param \Aspose\Imaging\Model\Requests\MoveFileRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFile($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Move file
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\MoveFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Move folder
     *
     * @param \Aspose\Imaging\Model\Requests\MoveFolderRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFolder($request)
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Move folder
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\MoveFolderRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsync($request) 
    {
        $returnType = '';
        $isBinary = false;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Check if file or folder exists
     *
     * @param \Aspose\Imaging\Model\Requests\ObjectExistsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ObjectExist
     */
    public function objectExists($request)
    {
        $returnType = '\Aspose\Imaging\Model\ObjectExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Check if file or folder exists
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ObjectExistsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\ObjectExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Resize an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\ResizeImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function resizeImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Resize an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\ResizeImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resizeImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Rotate and/or flip an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\RotateFlipImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function rotateFlipImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Rotate and/or flip an existing image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\RotateFlipImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rotateFlipImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Check if storage exists
     *
     * @param \Aspose\Imaging\Model\Requests\StorageExistsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\StorageExist
     */
    public function storageExists($request)
    {
        $returnType = '\Aspose\Imaging\Model\StorageExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Check if storage exists
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\StorageExistsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\StorageExist';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Perform scaling, cropping and flipping of an existing image in a single request.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function updateImage($request)
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Perform scaling, cropping and flipping of an existing image in a single request.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateImageFeatures($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateImageFeaturesAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateSearchImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateSearchImage($request)
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\UpdateSearchImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateSearchImageAsync($request) 
    {
        $returnType = '';
        $isBinary = true;
        $hasReturnType = false;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Upload file
     *
     * @param \Aspose\Imaging\Model\Requests\UploadFileRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\FilesUploadResult
     */
    public function uploadFile($request)
    {
        $returnType = '\Aspose\Imaging\Model\FilesUploadResult';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();
            
        try {
            $response = $this->client->send($request, $options);
            return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
        } catch (RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * Upload file
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\UploadFileRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync($request) 
    {
        $returnType = '\Aspose\Imaging\Model\FilesUploadResult';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($request, $hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($request, $response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    $this->processException($exception);
                }
            );
    }
    
    /**
     * Prepares HTTP request for Imaging API operation
     *
     * @param \Aspose\Imaging\Model\Requests\ImagingRequest $request Imaging request object for operation
     * @param string $httpMethod HTTP request method
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    private function getHttpRequest($imagingRequest, $httpMethod)
    {
        $initialInfo = $imagingRequest->getHttpRequestInfo($this->configuration);
        $resourcePath = $initialInfo['resourcePath'];
        $formParams = $initialInfo['formParams'];
        $queryParams = $initialInfo['queryParams'];
        $headerParams = $initialInfo['headerParams'];
        $headers = $initialInfo['headers'];
        $initialHttpBody = $initialInfo['httpBody'];
        $httpBody = '';

        // for model (json/xml)
        if (isset($initialHttpBody)) {
            $httpBody = $initialHttpBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValue) {
                $multipartContents[] = [
                    'name' => $formParamName,
                    'contents' => $formParamValue,
                    'filename' => $formParamName,
                    'headers' => [
                        'Content-Type' => 'application/octet-stream',
                        'Content-Length' => strlen($formParamValue)
                    ]
                ];
            }
            
            $boundary = sha1(uniqid('', true));
            $headers['Content-Type'] = "multipart/form-data; boundary=" . $boundary;
            $httpBody = new MultipartStream($multipartContents, $boundary);
        }
        
        if (!$this->configuration->getOnPremise() && $this->configuration->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->configuration->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->configuration->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->configuration->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->configuration->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            $httpMethod,
            $this->configuration->getApiBaseUrl() . "/" . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->configuration->getDebug()) {
            $this->writeRequestLog($httpMethod, $this->configuration->getApiBaseUrl() . "/" . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }
    
    /**
     * Processes Imaging API response
     *
     * @param \GuzzleHttp\Psr7\Request $request Imaging operation request
     * @param \Psr\Http\Message\ResponseInterface $response Imaging operation response
     * @param bool $hasReturnType If response has a return type
     * @param string $returnType Return type of response
     * @param bool $isBinary If response should be binary
     *
     * @throws \Aspose\Imaging\ApiException
     * @return mixed
     */
    private function processResponse($request, $response, $hasReturnType, $returnType, $isBinary)
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $body = $response->getBody();
            $error = null;
            if (isset($body)) {
                try {
                    $error = ObjectSerializer::deserialize($body->getContents(), '\Aspose\Imaging\Model\Error', []);
                } catch (\Throwable $th) {
                    // suppress exception
                }
            }

            throw new ApiException(
                sprintf('[%d] Error connecting to the API (%s); Body: (%s)', $statusCode, $request->getUri(), $response->getBody()), $statusCode, $error
            );
        }
        
        $result = null;

        if ($hasReturnType)
        {
            $responseBody = $response->getBody();
            if ($isBinary) {
                return $responseBody;
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            $result = ObjectSerializer::deserialize($content, $returnType, []);
            
            if ($this->configuration->getDebug()) {
                $this->writeResponseLog($statusCode, $response->getHeaders(), $result);
            }
        }
        
        return $result;
    }
    
    /**
     * Processes the exception caught during request execution
     *
     * @param \GuzzleHttp\Exception\RequestException $exception The initial exception
     *
     * @throws \Aspose\Imaging\ApiException
     */
    private function processException($exception)
    {
        $response = $exception->getResponse();
        $statusCode = isset($response) ? $response->getStatusCode() : null;

        throw new ApiException(
            sprintf('[%d] Error connecting to the API (%s); Message: (%s)', $statusCode, $exception->getRequest()->getUri(), $exception->getMessage()), $statusCode
        );
    }
    
    /**
     * Create http client options
     *
     * @throws \RuntimeException Throws on file opening failure
     * @return array HTTP client options
     */
    private function createHttpClientOptions() 
    {
        $options = [];
        if ($this->configuration->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->configuration->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->configuration->getDebugFile());
            }
        }
        
        $options[RequestOptions::TIMEOUT] = 1200;
        $options[RequestOptions::READ_TIMEOUT] = 1200;
        $options[RequestOptions::CONNECT_TIMEOUT] = 1200;
        return $options;
    }
    
    /**
     * Executes response logging
     */
    private function writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
    
    /**
     * Executes request logging
     */
    private function writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
    
    /**
     * Executes header and boy formatting
     */
    private function writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }
  
    /**
     * Gets a request token from server
     */
    private function requestToken() 
    {
        $requestUrl = $this->configuration->getBaseUrl() . "connect/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->configuration->getAppSid() . "&client_secret=" . $this->configuration->getAppKey();
        $headers = [];
        $headers['Content-Type'] = "application/x-www-form-urlencoded";
        $headers['Content-Length'] = strlen($postData);
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
    }
}
