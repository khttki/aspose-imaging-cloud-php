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
use \GuzzleHttp\Stream;
use \GuzzleHttp\ClientInterface;
use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Psr7\MultipartStream;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\RequestOptions;
use \Aspose\Imaging\Model\Requests;

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
     * Deletes the search context.
     *
     * @param \Aspose\Imaging\Model\Requests\DeleteSearchContextRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function deleteSearchContext($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return deleteSearchContext($request);
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
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return deleteSearchContextAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function deleteSearchContextImage($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return deleteSearchContextImage($request);
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
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return deleteSearchContextImageAsync($request);
                    } 
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
     * @return \Aspose\Imaging\Model\SaaSposeResponse
     */
    public function deleteSearchContextImageFeatures($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return deleteSearchContextImageFeatures($request);
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
        $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return deleteSearchContextImageFeaturesAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageBmp($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageBmp($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageBmpAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageCrop($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageCrop($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageCropAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize existing DICOM image to PNG using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageDicomRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageDicom($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageDicom($request);
        } 
    }

    /**
     * Rasterize existing DICOM image to PNG using given parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageDicomRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageDicomAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageDicomAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize existing DNG image to PNG using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageDngRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageDng($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageDng($request);
        } 
    }

    /**
     * Rasterize existing DNG image to PNG using given parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageDngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageDngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageDngAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize existing EMF image to PNG using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageEmf($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageEmf($request);
        } 
    }

    /**
     * Rasterize existing EMF image to PNG using given parameters.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageEmfAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageFrame($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageFrame($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageFrameAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageFrameProperties($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageFramePropertiesAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageGif($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageGif($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageGifAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageJpeg2000($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageJpeg2000($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageJpeg2000Async($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageJpg($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageJpg($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageJpgAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize existing ODG image to PNG using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageOdgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageOdg($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageOdg($request);
        } 
    }

    /**
     * Rasterize existing ODG image to PNG using given parameters.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageOdgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageOdgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageOdgAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of existing PNG image.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImagePngRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImagePng($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImagePng($request);
        } 
    }

    /**
     * Update parameters of existing PNG image.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImagePngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImagePngAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageProperties($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImagePropertiesAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImagePsd($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImagePsd($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImagePsdAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageResize($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageResize($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageResizeAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageRotateFlip($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageRotateFlip($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageRotateFlipAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageSaveAs($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageSaveAs($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageSaveAsAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageTiff($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageTiff($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageTiffAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageUpdate($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageUpdate($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageUpdateAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageWebP($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageWebP($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageWebPAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize existing WMF image to PNG using given parameters.
     *
     * @param \Aspose\Imaging\Model\Requests\GetImageWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function getImageWmf($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getImageWmf($request);
        } 
    }

    /**
     * Rasterize existing WMF image to PNG using given parameters.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getImageWmfAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Extract features from image without adding to search context.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getSearchContextExtractImageFeatures($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImageFeatures';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextExtractImageFeatures($request);
        } 
    }

    /**
     * Extract features from image without adding to search context.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextExtractImageFeaturesAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\ImageDuplicatesSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextFindDuplicates($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextFindDuplicatesAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Find similar images.
     *
     * @param \Aspose\Imaging\Model\Requests\GetSearchContextFindSimilarRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function getSearchContextFindSimilar($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextFindSimilar($request);
        } 
    }

    /**
     * Find similar images.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextFindSimilarAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getSearchContextImage($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextImage($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextImageAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\ImageFeatures';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextImageFeatures($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextImageFeaturesAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getSearchContextStatus($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getSearchContextStatusAsync($request);
                    } 
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
     * @return Psr\Http\Message\StreamInterface
     */
    public function getTiffToFax($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return getTiffToFax($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return getTiffToFaxAsync($request);
                    } 
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
        try {
            $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postCreateSearchContext($request);
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postCreateSearchContextAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of BMP image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageBmpRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageBmp($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageBmp($request);
        } 
    }

    /**
     * Update parameters of BMP image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageBmpAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Crop an image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageCropRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageCrop($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageCrop($request);
        } 
    }

    /**
     * Crop an image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageCropAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize DICOM image to PNG using given parameters. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageDicomRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageDicom($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageDicom($request);
        } 
    }

    /**
     * Rasterize DICOM image to PNG using given parameters. Image is passed in a request stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageDicomRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageDicomAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageDicomAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize DNG image to PNG using given parameters. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageDngRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageDng($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageDng($request);
        } 
    }

    /**
     * Rasterize DNG image to PNG using given parameters. Image is passed in a request stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageDngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageDngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageDngAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize EMF image to PNG using given parameters. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageEmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageEmf($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageEmf($request);
        } 
    }

    /**
     * Rasterize EMF image to PNG using given parameters. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageEmfAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Get separate frame from existing TIFF image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFrameRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageFrame($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageFrame($request);
        } 
    }

    /**
     * Get separate frame from existing TIFF image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageFrameAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Get separate frame properties of existing TIFF image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageFramePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageFrameProperties($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageFrameProperties($request);
        } 
    }

    /**
     * Get separate frame properties of existing TIFF image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageFramePropertiesAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of GIF image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageGifRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageGif($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageGif($request);
        } 
    }

    /**
     * Update parameters of GIF image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageGifAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of JPEG2000 image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageJpeg2000Request $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageJpeg2000($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageJpeg2000($request);
        } 
    }

    /**
     * Update parameters of JPEG2000 image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageJpeg2000Async($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of JPEG image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageJpgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageJpg($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageJpg($request);
        } 
    }

    /**
     * Update parameters of JPEG image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageJpgAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize ODG image to PNG using given parameters. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageOdgRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageOdg($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageOdg($request);
        } 
    }

    /**
     * Rasterize ODG image to PNG using given parameters. Image is passed in a request stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageOdgRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageOdgAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageOdgAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of PNG image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePngRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImagePng($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImagePng($request);
        } 
    }

    /**
     * Update parameters of PNG image. Image is passed in a request stream.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePngRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePngAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImagePngAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Get properties of an image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePropertiesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageProperties($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageProperties($request);
        } 
    }

    /**
     * Get properties of an image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImagePropertiesAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of PSD image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImagePsdRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImagePsd($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImagePsd($request);
        } 
    }

    /**
     * Update parameters of PSD image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImagePsdAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Resize an image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageResizeRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageResize($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageResize($request);
        } 
    }

    /**
     * Resize an image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageResizeAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rotate and/or flip an image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageRotateFlipRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageRotateFlip($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageRotateFlip($request);
        } 
    }

    /**
     * Rotate and/or flip an image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageRotateFlipAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Export existing image to another format. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageSaveAsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageSaveAs($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageSaveAs($request);
        } 
    }

    /**
     * Export existing image to another format. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageSaveAsAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of TIFF image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageTiffRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageTiff($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageTiff($request);
        } 
    }

    /**
     * Update parameters of TIFF image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageTiffAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Perform scaling, cropping and flipping of an image in a single request. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageUpdateRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageUpdate($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageUpdate($request);
        } 
    }

    /**
     * Perform scaling, cropping and flipping of an image in a single request. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageUpdateAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update parameters of WEBP image. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageWebPRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageWebP($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageWebP($request);
        } 
    }

    /**
     * Update parameters of WEBP image. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageWebPAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Rasterize WMF image to PNG using given parameters. Image is passed in a request stream.
     *
     * @param \Aspose\Imaging\Model\Requests\PostImageWmfRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postImageWmf($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postImageWmf($request);
        } 
    }

    /**
     * Rasterize WMF image to PNG using given parameters. Image is passed in a request stream.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postImageWmfAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Add image and images features to search context.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postSearchContextAddImage($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postSearchContextAddImage($request);
        } 
    }

    /**
     * Add image and images features to search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postSearchContextAddImageAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Add tag and reference image to search context.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddTagRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postSearchContextAddTag($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postSearchContextAddTag($request);
        } 
    }

    /**
     * Add tag and reference image to search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextAddTagRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddTagAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postSearchContextAddTagAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Compare two images.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextCompareImagesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextCompareImages($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postSearchContextCompareImages($request);
        } 
    }

    /**
     * Compare two images.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postSearchContextCompareImagesAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Extract images features and add them to search context
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return Psr\Http\Message\StreamInterface
     */
    public function postSearchContextExtractImageFeatures($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postSearchContextExtractImageFeatures($request);
        } 
    }

    /**
     * Extract images features and add them to search context
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextExtractImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextExtractImageFeaturesAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postSearchContextExtractImageFeaturesAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Find images by tag.
     *
     * @param \Aspose\Imaging\Model\Requests\PostSearchContextFindByTagsRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextFindByTags($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postSearchContextFindByTags($request);
        } 
    }

    /**
     * Find images by tag.
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
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postSearchContextFindByTagsAsync($request);
                    } 
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
     * @return \Aspose\Imaging\Model\SaaSposeResponse
     */
    public function postTiffAppend($request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return postTiffAppend($request);
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
        $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return postTiffAppendAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update image and images features in search context.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Psr\Http\Message\StreamInterface
     */
    public function putSearchContextImage($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'PUT');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return putSearchContextImage($request);
        } 
    }

    /**
     * Update image and images features in search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return putSearchContextImageAsync($request);
                    } 
                }
            );
    }
    
    /**
     * Update images features in search context.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \Aspose\Imaging\ApiException Throws on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Stream\StreamInterface
     */
    public function putSearchContextImageFeatures($request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'PUT');
            $options = $this->createHttpClientOptions();
            
            try {
                $response = $this->client->send($request, $options);
                return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
            } catch (RequestException $e) {
                $this->processException($e);
            }
        }
        catch(RepeatRequestException $e) {
            return putSearchContextImageFeatures($request);
        } 
    }

    /**
     * Update images features in search context.
     * Performs operation asynchronously.
     *
     * @param \Aspose\Imaging\Model\Requests\PutSearchContextImageFeaturesRequest $request Request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageFeaturesAsync($request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOptions();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType, $isBinary) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) use ($request) {
                    try 
                    {
                        $this->processException($exception);
                    }                   
                    catch(RepeatRequestException $e) {
                        return putSearchContextImageFeaturesAsync($request);
                    } 
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
        $multipart = $initialInfo['multipart'];

        // for model (json/xml)
        if (isset($initialHttpBody)) {
            $httpBody = $initialHttpBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart && count($formParams) > 1) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                        'headers' => [
                            'Content-Disposition' => 'form-data',
                            'Content-Type' => 'application/octet-stream',
                            'Content-Length' => strlen($formParamValue)
                        ]
                    ];
                }
                
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } else {
                // for HTTP post (form)
                $httpBody = reset($formParams);
            }
        }

        if (isset($httpBody))
        {
            $headers['Content-Length'] = strlen($httpBody);
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
     * @param \Psr\Http\Message\ResponseInterface $response Imaging operation response
     * @param bool $hasReturnType If response has a return type
     * @param string $returnType Return type of response
     * @param bool $isBinary If response should be binary
     *
     * @throws \Aspose\Imaging\ApiException
     * @throws \Aspose\Imaging\RepeatRequestException
     * @return mixed
     */
    private function processResponse($response, $hasReturnType, $returnType, $isBinary)
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            if ($statusCode === 401) {
                $this->requestToken();
                throw new RepeatRequestException("Request must be retried", $statusCode);
            }
          
            throw new ApiException(
                sprintf('[%d] Error connecting to the API (%s); Body: (%s)', $statusCode, $exception->getRequest()->getUri(), $response->getBody()), $statusCode
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
     * @throws \Aspose\Imaging\RepeatRequestException
     */
    private function processException($exception)
    {
        $response = $exception->getResponse();
        $statusCode = isset($response) ? $response->getStatusCode() : null;
          
        if ($exception instanceof RepeatRequestException) {
            $this->refreshToken();
            throw new RepeatRequestException("Request must be retried", $statusCode);
        }

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
        $requestUrl = $this->configuration->getBaseUrl() . "/oauth2/token";
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->configuration->getAppSid() . "&client_secret=" . $this->configuration->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
        $this->configuration->setRefreshToken($result["refresh_token"]);
    }
  
    /**
     * Refresh token. OBSOLETE WILL BE REMOVED SOON
     */
    private function refreshToken() 
    {
        $requestUrl = $this->configuration->getBaseUrl() . "/oauth2/token";
        $postData = "grant_type=refresh_token&refresh_token=" . $this->configuration->getRefreshToken();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
        $this->configuration->setRefreshToken($result["refresh_token"]);
    }
}
