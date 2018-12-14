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

use GuzzleHttp\Client;
use GuzzleHttp\Stream;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Imaging\Model\Requests;

/**
 * Aspose.Imaging for Cloud APIs.
 */
class ImagingApi
{
    /**
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    private $client;

    /**
     * Stores configuration
     * @var Configuration configuration info
     */
    private $configuration;
  
    /**
     * Initialize a new instance of WordsApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(Configuration $config = null)
    {
        $this->client = new Client();
        $this->configuration = $config ?: new Configuration();
        $this->headerSelector = new HeaderSelector();
        $this->requestToken();
    }

    /**
     * Gets the configuration.
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->configuration;
    }
    
    /**
     * Deletes the search context.
     *
     * @param Requests\DeleteSearchContextRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function deleteSearchContext(Requests\DeleteSearchContextRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\DeleteSearchContextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextAsync(Requests\DeleteSearchContextRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\DeleteSearchContextImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function deleteSearchContextImage(Requests\DeleteSearchContextImageRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\DeleteSearchContextImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextImageAsync(Requests\DeleteSearchContextImageRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\DeleteSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SaaSposeResponse
     */
    public function deleteSearchContextImageFeatures(Requests\DeleteSearchContextImageFeaturesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'DELETE');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\DeleteSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSearchContextImageFeaturesAsync(Requests\DeleteSearchContextImageFeaturesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'DELETE');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageBmpRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageBmp(Requests\GetImageBmpRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageBmpRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageBmpAsync(Requests\GetImageBmpRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageCropRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageCrop(Requests\GetImageCropRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageCropRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageCropAsync(Requests\GetImageCropRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageDicomRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageDicom(Requests\GetImageDicomRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageDicomRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageDicomAsync(Requests\GetImageDicomRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageDngRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageDng(Requests\GetImageDngRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageDngRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageDngAsync(Requests\GetImageDngRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageEmfRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageEmf(Requests\GetImageEmfRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageEmfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageEmfAsync(Requests\GetImageEmfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageFrameRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageFrame(Requests\GetImageFrameRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageFrameRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFrameAsync(Requests\GetImageFrameRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageFramePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function getImageFrameProperties(Requests\GetImageFramePropertiesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageFramePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageFramePropertiesAsync(Requests\GetImageFramePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageGifRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageGif(Requests\GetImageGifRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageGifRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageGifAsync(Requests\GetImageGifRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageJpeg2000Request $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageJpeg2000(Requests\GetImageJpeg2000Request $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageJpeg2000Request $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageJpeg2000Async(Requests\GetImageJpeg2000Request $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageJpgRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageJpg(Requests\GetImageJpgRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageJpgRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageJpgAsync(Requests\GetImageJpgRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageOdgRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageOdg(Requests\GetImageOdgRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageOdgRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageOdgAsync(Requests\GetImageOdgRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImagePngRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImagePng(Requests\GetImagePngRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImagePngRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePngAsync(Requests\GetImagePngRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImagePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function getImageProperties(Requests\GetImagePropertiesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImagePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePropertiesAsync(Requests\GetImagePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImagePsdRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImagePsd(Requests\GetImagePsdRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImagePsdRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImagePsdAsync(Requests\GetImagePsdRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageResizeRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageResize(Requests\GetImageResizeRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageResizeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageResizeAsync(Requests\GetImageResizeRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageRotateFlipRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageRotateFlip(Requests\GetImageRotateFlipRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageRotateFlipRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageRotateFlipAsync(Requests\GetImageRotateFlipRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageSaveAsRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageSaveAs(Requests\GetImageSaveAsRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageSaveAsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageSaveAsAsync(Requests\GetImageSaveAsRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageTiffRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageTiff(Requests\GetImageTiffRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageTiffRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageTiffAsync(Requests\GetImageTiffRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageUpdateRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageUpdate(Requests\GetImageUpdateRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageUpdateRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageUpdateAsync(Requests\GetImageUpdateRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageWebPRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageWebP(Requests\GetImageWebPRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageWebPRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageWebPAsync(Requests\GetImageWebPRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetImageWmfRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getImageWmf(Requests\GetImageWmfRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetImageWmfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImageWmfAsync(Requests\GetImageWmfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextExtractImageFeaturesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getSearchContextExtractImageFeatures(Requests\GetSearchContextExtractImageFeaturesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImageFeatures';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextExtractImageFeaturesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextExtractImageFeaturesAsync(Requests\GetSearchContextExtractImageFeaturesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextFindDuplicatesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageDuplicatesSet
     */
    public function getSearchContextFindDuplicates(Requests\GetSearchContextFindDuplicatesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImageDuplicatesSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextFindDuplicatesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextFindDuplicatesAsync(Requests\GetSearchContextFindDuplicatesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageDuplicatesSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextFindSimilarRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function getSearchContextFindSimilar(Requests\GetSearchContextFindSimilarRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextFindSimilarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextFindSimilarAsync(Requests\GetSearchContextFindSimilarRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getSearchContextImage(Requests\GetSearchContextImageRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextImageAsync(Requests\GetSearchContextImageRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImageFeatures
     */
    public function getSearchContextImageFeatures(Requests\GetSearchContextImageFeaturesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImageFeatures';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextImageFeaturesAsync(Requests\GetSearchContextImageFeaturesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImageFeatures';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetSearchContextStatusRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function getSearchContextStatus(Requests\GetSearchContextStatusRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetSearchContextStatusRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchContextStatusAsync(Requests\GetSearchContextStatusRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\GetTiffToFaxRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function getTiffToFax(Requests\GetTiffToFaxRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'GET');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\GetTiffToFaxRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTiffToFaxAsync(Requests\GetTiffToFaxRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'GET');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostCreateSearchContextRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchContextStatus
     */
    public function postCreateSearchContext(Requests\PostCreateSearchContextRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostCreateSearchContextRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCreateSearchContextAsync(Requests\PostCreateSearchContextRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchContextStatus';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageBmpRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageBmp(Requests\PostImageBmpRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageBmpRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageBmpAsync(Requests\PostImageBmpRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageCropRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageCrop(Requests\PostImageCropRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageCropRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageCropAsync(Requests\PostImageCropRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageDicomRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageDicom(Requests\PostImageDicomRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageDicomRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageDicomAsync(Requests\PostImageDicomRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageDngRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageDng(Requests\PostImageDngRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageDngRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageDngAsync(Requests\PostImageDngRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageEmfRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageEmf(Requests\PostImageEmfRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageEmfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageEmfAsync(Requests\PostImageEmfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageFrameRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageFrame(Requests\PostImageFrameRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageFrameRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageFrameAsync(Requests\PostImageFrameRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageFramePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageFrameProperties(Requests\PostImageFramePropertiesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageFramePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageFramePropertiesAsync(Requests\PostImageFramePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageGifRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageGif(Requests\PostImageGifRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageGifRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageGifAsync(Requests\PostImageGifRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageJpeg2000Request $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageJpeg2000(Requests\PostImageJpeg2000Request $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageJpeg2000Request $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageJpeg2000Async(Requests\PostImageJpeg2000Request $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageJpgRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageJpg(Requests\PostImageJpgRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageJpgRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageJpgAsync(Requests\PostImageJpgRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageOdgRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageOdg(Requests\PostImageOdgRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageOdgRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageOdgAsync(Requests\PostImageOdgRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImagePngRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImagePng(Requests\PostImagePngRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImagePngRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePngAsync(Requests\PostImagePngRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImagePropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\ImagingResponse
     */
    public function postImageProperties(Requests\PostImagePropertiesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\ImagingResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImagePropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePropertiesAsync(Requests\PostImagePropertiesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\ImagingResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImagePsdRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImagePsd(Requests\PostImagePsdRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImagePsdRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImagePsdAsync(Requests\PostImagePsdRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageResizeRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageResize(Requests\PostImageResizeRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageResizeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageResizeAsync(Requests\PostImageResizeRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageRotateFlipRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageRotateFlip(Requests\PostImageRotateFlipRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageRotateFlipRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageRotateFlipAsync(Requests\PostImageRotateFlipRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageSaveAsRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageSaveAs(Requests\PostImageSaveAsRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageSaveAsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageSaveAsAsync(Requests\PostImageSaveAsRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageTiffRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageTiff(Requests\PostImageTiffRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageTiffRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageTiffAsync(Requests\PostImageTiffRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageUpdateRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageUpdate(Requests\PostImageUpdateRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageUpdateRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageUpdateAsync(Requests\PostImageUpdateRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageWebPRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageWebP(Requests\PostImageWebPRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageWebPRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageWebPAsync(Requests\PostImageWebPRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostImageWmfRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postImageWmf(Requests\PostImageWmfRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostImageWmfRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImageWmfAsync(Requests\PostImageWmfRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostSearchContextAddImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postSearchContextAddImage(Requests\PostSearchContextAddImageRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostSearchContextAddImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddImageAsync(Requests\PostSearchContextAddImageRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostSearchContextAddTagRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postSearchContextAddTag(Requests\PostSearchContextAddTagRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostSearchContextAddTagRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextAddTagAsync(Requests\PostSearchContextAddTagRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostSearchContextCompareImagesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextCompareImages(Requests\PostSearchContextCompareImagesRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostSearchContextCompareImagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextCompareImagesAsync(Requests\PostSearchContextCompareImagesRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostSearchContextExtractImageFeaturesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function postSearchContextExtractImageFeatures(Requests\PostSearchContextExtractImageFeaturesRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostSearchContextExtractImageFeaturesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextExtractImageFeaturesAsync(Requests\PostSearchContextExtractImageFeaturesRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostSearchContextFindByTagsRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SearchResultsSet
     */
    public function postSearchContextFindByTags(Requests\PostSearchContextFindByTagsRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostSearchContextFindByTagsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchContextFindByTagsAsync(Requests\PostSearchContextFindByTagsRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SearchResultsSet';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PostTiffAppendRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Imaging\Model\SaaSposeResponse
     */
    public function postTiffAppend(Requests\PostTiffAppendRequest $request)
    {
        try {
            $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
            $isBinary = false;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'POST');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PostTiffAppendRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTiffAppendAsync(Requests\PostTiffAppendRequest $request) 
    {
        $returnType = '\Aspose\Imaging\Model\SaaSposeResponse';
        $isBinary = false;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'POST');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PutSearchContextImageRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function putSearchContextImage(Requests\PutSearchContextImageRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'PUT');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PutSearchContextImageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageAsync(Requests\PutSearchContextImageRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param Requests\PutSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \Aspose\Imaging\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return GuzzleHttp\Stream\StreamInterface
     */
    public function putSearchContextImageFeatures(Requests\PutSearchContextImageFeaturesRequest $request)
    {
        try {
            $returnType = '\SplFileObject';
            $isBinary = true;
            $hasReturnType = true;
            $request = $this->getHttpRequest($request, 'PUT');
            $options = $this->createHttpClientOption();
            
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
     * @param Requests\PutSearchContextImageFeaturesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSearchContextImageFeaturesAsync(Requests\PutSearchContextImageFeaturesRequest $request) 
    {
        $returnType = '\SplFileObject';
        $isBinary = true;
        $hasReturnType = true;
        $request = $this->getHttpRequest($request, 'PUT');
        $options = $this->createHttpClientOption();

        return $this->client
            ->sendAsync($request, $options)
            ->then(
                function ($response) use ($hasReturnType, $returnType) {
                    return $this->processResponse($response, $hasReturnType, $returnType, $isBinary);
                },
                function ($exception) {
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
     * @param ImagingRequest $request Imaging request object for operation
     * @param string $httpMethod HTTP request method
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    private function getHttpRequest(ImagingRequest $imagingRequest, string $httpMethod)
    {
        $initialInfo = $imagingRequest->getHttpRequestInfo($this->configuration);
        $resourcePath = $initialInfo->resourcePath;
        $formParams = $initialInfo->formParams;
        $queryParams = $initialInfo->queryParams;
        $headerParams = $initialInfo->headerParams;
        $httpBody = "";
        $multipart = $initialInfo->multipart;

        // for model (json/xml)
        if (isset($initialInfo->httpBody)) {
            $httpBody = $initialInfo->httpBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
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
            $this->configuration->getApiBaseUrl() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->configuration->getDebug()) {
            $this->writeRequestLog($httpMethod, $this->configuration->getApiBaseUrl() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }
    
    /**
     * Processes Imaging API response
     *
     * @param Psr\Http\Message\ResponseInterface $response Imaging operation response
     * @param boolean $hasReturnType If response has a return type
     * @param string $returnType Return type of response
     * @param boolean $isBinary If response should be binary
     *
     * @throws Aspose\Imaging\ApiException
     * @throws Aspose\Imaging\RepeatRequestException
     * @return mixed
     */
    private function processResponse(Psr\Http\Message\ResponseInterface $response, boolean $hasReturnType, string $returnType, boolean $isBinary)
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
     * @param GuzzleHttp\Exception\RequestException $exception The initial exception
     *
     * @throws Aspose\Imaging\ApiException
     * @throws Aspose\Imaging\RepeatRequestException
     */
    private function processException(GuzzleHttp\Exception\RequestException $exception)
    {
        $response = $exception->getResponse();
        $statusCode = $response->getStatusCode();
          
        if ($exception instanceof RepeatRequestException) {
            $this->refreshToken();
            throw new RepeatRequestException("Request must be retried", $statusCode);
        }

        throw new ApiException(
            sprintf('[%d] Error connecting to the API (%s); Message: (%s)', $statusCode, $exception->getRequest()->getUri(), $exception->getMessage()), $statusCode
        );
    }
    
    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function createHttpClientOption() 
    {
        $options = [];
        if ($this->configuration->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->configuration->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->configuration->getDebugFile());
            }
        }

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
        $requestUrl = $this->configuration->getHost() . "/oauth2/token";
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
        $requestUrl = $this->configuration->getHost() . "/oauth2/token";
        $postData = "grant_type=refresh_token&refresh_token=" . $this->configuration->getRefreshToken();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->configuration->setAccessToken($result["access_token"]);
        $this->configuration->setRefreshToken($result["refresh_token"]);
    }
}
