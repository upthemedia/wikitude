# OpenAPI\Client\ImageTargetCollectionApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImageTargetCollection()**](ImageTargetCollectionApi.md#createImageTargetCollection) | **POST** /targetCollection | Create Image Target Collection
[**deleteImageTargetCollection()**](ImageTargetCollectionApi.md#deleteImageTargetCollection) | **DELETE** /targetCollection/{tcId} | Delete Image Target Collection
[**generateCloudArchive()**](ImageTargetCollectionApi.md#generateCloudArchive) | **POST** /targetCollection/{tcId}/generation/cloudarchive | Generate Cloud Archive
[**generateWTC()**](ImageTargetCollectionApi.md#generateWTC) | **POST** /targetCollection/{tcId}/generation/wtc | Generate WTC
[**getCloudArchiveStatus()**](ImageTargetCollectionApi.md#getCloudArchiveStatus) | **GET** /targetCollection/{tcId}/generation/cloudarchive/{generationId} | Status - Generate Cloud Archive
[**getImageTargetCollection()**](ImageTargetCollectionApi.md#getImageTargetCollection) | **GET** /targetCollection/{tcId} | Get Image Target Collection
[**getImageTargetCollections()**](ImageTargetCollectionApi.md#getImageTargetCollections) | **GET** /targetCollection | Get all Image Target Collections
[**getSimilarityCheckStatus()**](ImageTargetCollectionApi.md#getSimilarityCheckStatus) | **GET** /targetCollection/{tcId}/similarity/{generationId} | Status - Similarity Check
[**getWTCStatus()**](ImageTargetCollectionApi.md#getWTCStatus) | **GET** /targetCollection/{tcId}/generation/wtc/{generationId} | Status - Generate WTC
[**similarityCheck()**](ImageTargetCollectionApi.md#similarityCheck) | **POST** /targetCollection/{tcId}/similarity | Similarity Check
[**updateImageTargetCollection()**](ImageTargetCollectionApi.md#updateImageTargetCollection) | **POST** /targetCollection/{tcId} | Update Image Target Collection


## `createImageTargetCollection()`

```php
createImageTargetCollection($x_version, $x_token, $content_type, $create_image_target_collection_body): \OpenAPI\Client\Model\ImageTargetCollectionResponse
```

Create Image Target Collection

Create a new target collection in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$create_image_target_collection_body = new \OpenAPI\Client\Model\CreateImageTargetCollectionBody(); // \OpenAPI\Client\Model\CreateImageTargetCollectionBody

try {
    $result = $apiInstance->createImageTargetCollection($x_version, $x_token, $content_type, $create_image_target_collection_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->createImageTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **create_image_target_collection_body** | [**\OpenAPI\Client\Model\CreateImageTargetCollectionBody**](../Model/CreateImageTargetCollectionBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageTargetCollectionResponse**](../Model/ImageTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImageTargetCollection()`

```php
deleteImageTargetCollection($x_version, $x_token, $tc_id)
```

Delete Image Target Collection

Delete a particular target collection from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.

try {
    $apiInstance->deleteImageTargetCollection($x_version, $x_token, $tc_id);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->deleteImageTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCloudArchive()`

```php
generateCloudArchive($x_version, $x_token, $tc_id): \OpenAPI\Client\Model\CloudArchiveGenerationResponse
```

Generate Cloud Archive

DEPRECATED - Generate a Cloud Archive from an existing Target Collection. The call is asynchronous and contains a path in the response header (Location) from which the status of the generation can be requested (see Status - Generate Cloud Archive). As of release 4.0.0 this endpoint will return error TARGET_COLLECTION_IS_UP_TO_DATE with status code 412, since the archive will be generated automatically in the background in the future. This endpoint is marked as \"deprecated\" since the behaviour will slightly change. However, this endpoint will still exist in version 3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.

try {
    $result = $apiInstance->generateCloudArchive($x_version, $x_token, $tc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->generateCloudArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |

### Return type

[**\OpenAPI\Client\Model\CloudArchiveGenerationResponse**](../Model/CloudArchiveGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateWTC()`

```php
generateWTC($x_version, $x_token, $content_type, $tc_id, $generate_wtc_body): \OpenAPI\Client\Model\GenerateWTCStatusResponse
```

Generate WTC

Generates a WTC file out of an existing Target Collection with up to 1000 targets. The call is asynchronous and contains a path in the response header (Location) from which the status of the generation can be requested (see Status - Generate WTC).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$generate_wtc_body = new \OpenAPI\Client\Model\GenerateWTCBody(); // \OpenAPI\Client\Model\GenerateWTCBody

try {
    $result = $apiInstance->generateWTC($x_version, $x_token, $content_type, $tc_id, $generate_wtc_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->generateWTC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **generate_wtc_body** | [**\OpenAPI\Client\Model\GenerateWTCBody**](../Model/GenerateWTCBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\GenerateWTCStatusResponse**](../Model/GenerateWTCStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudArchiveStatus()`

```php
getCloudArchiveStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\CloudArchiveGenerationResponse
```

Status - Generate Cloud Archive

Retrieves information status about a particular scheduled cloud archive generation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getCloudArchiveStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->getCloudArchiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **generation_id** | **string**| Unique identifier of the asynchronous job created by a generation endpoint. |

### Return type

[**\OpenAPI\Client\Model\CloudArchiveGenerationResponse**](../Model/CloudArchiveGenerationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImageTargetCollection()`

```php
getImageTargetCollection($x_version, $x_token, $tc_id): \OpenAPI\Client\Model\ImageTargetCollectionResponse
```

Get Image Target Collection

Request a particular target collection from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.

try {
    $result = $apiInstance->getImageTargetCollection($x_version, $x_token, $tc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->getImageTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |

### Return type

[**\OpenAPI\Client\Model\ImageTargetCollectionResponse**](../Model/ImageTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImageTargetCollections()`

```php
getImageTargetCollections($x_version, $x_token, $skip, $limit): \OpenAPI\Client\Model\ImageTargetCollectionResponse[]
```

Get all Image Target Collections

Request all target collections from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$skip = 56; // int | Set 0 to start with first entry, set e.g. to 2 to skip first 2 entries. Default value: 0
$limit = 56; // int | Use positive value to define the amount of entries to return [1, 1000] per page. Default value: 1000

try {
    $result = $apiInstance->getImageTargetCollections($x_version, $x_token, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->getImageTargetCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **skip** | **int**| Set 0 to start with first entry, set e.g. to 2 to skip first 2 entries. Default value: 0 | [optional]
 **limit** | **int**| Use positive value to define the amount of entries to return [1, 1000] per page. Default value: 1000 | [optional]

### Return type

[**\OpenAPI\Client\Model\ImageTargetCollectionResponse[]**](../Model/ImageTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimilarityCheckStatus()`

```php
getSimilarityCheckStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\SimilarityCheckStatusResponse
```

Status - Similarity Check

Retrieves information status of a particular scheduled \"Similarity Check\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getSimilarityCheckStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->getSimilarityCheckStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **generation_id** | **string**| Unique identifier of the asynchronous job created by a generation endpoint. |

### Return type

[**\OpenAPI\Client\Model\SimilarityCheckStatusResponse**](../Model/SimilarityCheckStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWTCStatus()`

```php
getWTCStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\GenerateWTCStatusResponse
```

Status - Generate WTC

Retrieves information status about a particular scheduled WTC file generation. Once the status is completed, the WTC information can be retrieved from the Target Collection (see Get Target Collection).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getWTCStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->getWTCStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **generation_id** | **string**| Unique identifier of the asynchronous job created by a generation endpoint. |

### Return type

[**\OpenAPI\Client\Model\GenerateWTCStatusResponse**](../Model/GenerateWTCStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `similarityCheck()`

```php
similarityCheck($x_version, $x_token, $content_type, $tc_id, $similarity_check_body): \OpenAPI\Client\Model\SimilarityCheckResponse
```

Similarity Check

Pass up to 10 items pointing to PNG or JPEG images hosted via https in the body. In order to find out whether an image is similar to an existing Target in terms of recognition and tracking behaviour a check is performed per passed image item. The Target Collection must be published and have an active Cloud Archive in place. Up to 5 (default: 1) so called \"candidates\" with a similarity \"score\" are returned per image. Image must be hosted via https and be of type PNG or JPEG. Use \"maxCandidates\" to define the maximum amount of candidates to return for an image. Response header value \"Location\" directly points to the right \"Status - Similarity Check\" endpoint. Best practice is to trigger \"Similarity Check\", wait for \"estimatedLatency\" milliseconds and poll \"Status - Similarity Check\" endpoint every 5 seconds until its \"status\" is \"COMPLETED\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$similarity_check_body = new \OpenAPI\Client\Model\SimilarityCheckBody(); // \OpenAPI\Client\Model\SimilarityCheckBody

try {
    $result = $apiInstance->similarityCheck($x_version, $x_token, $content_type, $tc_id, $similarity_check_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->similarityCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **similarity_check_body** | [**\OpenAPI\Client\Model\SimilarityCheckBody**](../Model/SimilarityCheckBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SimilarityCheckResponse**](../Model/SimilarityCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImageTargetCollection()`

```php
updateImageTargetCollection($x_version, $x_token, $content_type, $tc_id, $update_image_target_collection_body): \OpenAPI\Client\Model\ImageTargetCollectionResponse
```

Update Image Target Collection

Update a target collection from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$update_image_target_collection_body = new \OpenAPI\Client\Model\UpdateImageTargetCollectionBody(); // \OpenAPI\Client\Model\UpdateImageTargetCollectionBody

try {
    $result = $apiInstance->updateImageTargetCollection($x_version, $x_token, $content_type, $tc_id, $update_image_target_collection_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetCollectionApi->updateImageTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **update_image_target_collection_body** | [**\OpenAPI\Client\Model\UpdateImageTargetCollectionBody**](../Model/UpdateImageTargetCollectionBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageTargetCollectionResponse**](../Model/ImageTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
