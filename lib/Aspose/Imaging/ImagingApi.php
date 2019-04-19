<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImagingApi.php">
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

        $this->requestToken();
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
     * Deletes the search context.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchContext($request)
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
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchContextImage($request)
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
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextImageAsync($request) 
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
     * Deletes image features from search context.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteSearchContextImageFeatures($request)
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
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextImageFeaturesAsync($request) 
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
     * Update parameters of existing BMP image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageBmpRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageBmp($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageBmpAsync($request) 
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
     * Crop an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageCropRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageCrop($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageCropRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageCropAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageEmf($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageEmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageEmfAsync($request) 
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
     * Get separate frame from existing TIFF image.
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
     * Get separate frame from existing TIFF image.
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
     * Get separate frame properties of existing TIFF image.
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
     * Get separate frame properties of existing TIFF image.
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
     * Update parameters of existing GIF image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageGifRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageGif($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageGifAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageJpeg2000($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageJpeg2000Async($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageJpgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageJpg($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageJpgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageJpgAsync($request) 
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
     * Update parameters of existing PSD image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImagePsdRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImagePsd($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImagePsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePsdAsync($request) 
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
     * Resize an existing image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageResizeRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageResize($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageResizeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageResizeAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageRotateFlipRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageRotateFlip($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageRotateFlipRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageRotateFlipAsync($request) 
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
     * Export existing image to another format.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageSaveAsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageSaveAs($request)
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
     * Export existing image to another format.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageSaveAsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageSaveAsAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageTiff($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageTiffAsync($request) 
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
     * Perform scaling, cropping and flipping of an existing image in a single request.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageUpdateRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageUpdate($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageUpdateRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageUpdateAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageWebPRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageWebP($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageWebPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageWebPAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetImageWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getImageWmf($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetImageWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageWmfAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getSearchContextExtractImageFeatures($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextExtractImageFeaturesAsync($request) 
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
     * Find images duplicates.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextFindDuplicatesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageDuplicatesSet
     */
    public function getSearchContextFindDuplicates($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextFindDuplicatesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextFindDuplicatesAsync($request) 
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
     * Find similar images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextFindSimilarRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function getSearchContextFindSimilar($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextFindSimilarRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextFindSimilarAsync($request) 
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
     * Get image from search context
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getSearchContextImage($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextImageAsync($request) 
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
     * Gets image features from search context.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getSearchContextImageFeatures($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextImageFeaturesAsync($request) 
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
     * Gets the search context status.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextStatusRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function getSearchContextStatus($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextStatusRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextStatusAsync($request) 
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
     * Update parameters of existing TIFF image accordingly to fax parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetTiffToFaxRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getTiffToFax($request)
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
     * @param \Aspose\Imaging\Model\Requests\GetTiffToFaxRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTiffToFaxAsync($request) 
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
     * Create new search context.
     *
     * @param \Aspose\Imaging\Model\Requests\PostCreateSearchContextRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function postCreateSearchContext($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostCreateSearchContextRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCreateSearchContextAsync($request) 
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
     * Update parameters of BMP image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageBmpRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageBmp($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageBmpRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageBmpAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageCropRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageCrop($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageCropRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageCropAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageEmf($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageEmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageEmfAsync($request) 
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
     * Get separate frame from existing TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFrameRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageFrame($request)
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
     * Get separate frame from existing TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFrameRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageFrameAsync($request) 
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
     * Get separate frame properties of existing TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageFrameProperties($request)
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
     * Get separate frame properties of existing TIFF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageFramePropertiesAsync($request) 
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
     * Update parameters of GIF image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageGifRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageGif($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageGifRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageGifAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageJpeg2000($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageJpeg2000Request $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageJpeg2000Async($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageJpgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageJpg($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageJpgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageJpgAsync($request) 
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
     * Get properties of an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageProperties($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImagePropertiesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePropertiesAsync($request) 
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
     * Update parameters of PSD image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePsdRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImagePsd($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImagePsdRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePsdAsync($request) 
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
     * Resize an image. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageResizeRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageResize($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageResizeRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageResizeAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageRotateFlipRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageRotateFlip($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageRotateFlipRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageRotateFlipAsync($request) 
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
     * Export existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageSaveAsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageSaveAs($request)
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
     * Export existing image to another format. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageSaveAsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageSaveAsAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageTiff($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageTiffRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageTiffAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageUpdateRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageUpdate($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageUpdateRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageUpdateAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageWebPRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageWebP($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageWebPRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageWebPAsync($request) 
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
     * @param \Aspose\Imaging\Model\Requests\PostImageWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function postImageWmf($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostImageWmfRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageWmfAsync($request) 
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
     * Add image and images features to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postSearchContextAddImage($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddImageAsync($request) 
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
     * Add tag and reference image to search context. Image data is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddTagRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postSearchContextAddTag($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddTagRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddTagAsync($request) 
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
     * Compare two images. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextCompareImagesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextCompareImages($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextCompareImagesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextCompareImagesAsync($request) 
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
     * Extract images features and add them to search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postSearchContextExtractImageFeatures($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextExtractImageFeaturesAsync($request) 
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
     * Find images by tags. Tags JSON string is passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextFindByTagsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextFindByTags($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextFindByTagsRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextFindByTagsAsync($request) 
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
     * Appends existing TIFF image to another existing TIFF image (i.e. merges TIFF images).
     *
     * @param \Aspose\Imaging\Model\Requests\PostTiffAppendRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postTiffAppend($request)
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
     * @param \Aspose\Imaging\Model\Requests\PostTiffAppendRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTiffAppendAsync($request) 
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
     * Update image and images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function putSearchContextImage($request)
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
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageAsync($request) 
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
     * Update images features in search context. Image data may be passed as zero-indexed multipart/form-data content or as raw body stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function putSearchContextImageFeatures($request)
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
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageFeaturesAsync($request) 
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
        
        if ($this->configuration->getAccessToken() !== null) {
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
        $requestUrl = $this->configuration->getBaseUrl() . "/connect/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->configuration->getAppSid() . "&client_secret=" . $this->configuration->getAppKey();
        $headers = [];
        $headers['Content-Type'] = "application/x-www-form-urlencoded";
        $headers['Content-Length'] = strlen($postData);
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
    }
}
