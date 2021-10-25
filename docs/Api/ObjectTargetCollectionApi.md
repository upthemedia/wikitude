# OpenAPI\Client\ObjectTargetCollectionApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createObjectTargetCollection()**](ObjectTargetCollectionApi.md#createObjectTargetCollection) | **POST** /objectTargetCollection | Create Object Target Collection
[**deleteObjectTargetCollection()**](ObjectTargetCollectionApi.md#deleteObjectTargetCollection) | **DELETE** /objectTargetCollection/{tcId} | Delete Object Target Collection
[**generateWTO()**](ObjectTargetCollectionApi.md#generateWTO) | **POST** /objectTargetCollection/{tcId}/generation/wto | Generate WTO
[**getObjectTargetCollection()**](ObjectTargetCollectionApi.md#getObjectTargetCollection) | **GET** /objectTargetCollection/{tcId} | Get Object Target Collection
[**getObjectTargetCollectionStatus()**](ObjectTargetCollectionApi.md#getObjectTargetCollectionStatus) | **GET** /objectTargetCollection/{tcId}/jobs | Status - Get Object Target Collection jobs
[**getObjectTargetCollections()**](ObjectTargetCollectionApi.md#getObjectTargetCollections) | **GET** /objectTargetCollection | Get all Object Target Collections
[**getWTOStatus()**](ObjectTargetCollectionApi.md#getWTOStatus) | **GET** /objectTargetCollection/{tcId}/generation/wto/{generationId} | Status - Generate WTO
[**updateObjectTargetCollection()**](ObjectTargetCollectionApi.md#updateObjectTargetCollection) | **PUT** /objectTargetCollection/{tcId} | Update Object Target Collection


## `createObjectTargetCollection()`

```php
createObjectTargetCollection($x_version, $x_token, $content_type, $create_object_target_collection_body): \OpenAPI\Client\Model\ObjectTargetCollectionResponse
```

Create Object Target Collection

Create a new Object Target Collection in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$create_object_target_collection_body = new \OpenAPI\Client\Model\CreateObjectTargetCollectionBody(); // \OpenAPI\Client\Model\CreateObjectTargetCollectionBody

try {
    $result = $apiInstance->createObjectTargetCollection($x_version, $x_token, $content_type, $create_object_target_collection_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->createObjectTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **create_object_target_collection_body** | [**\OpenAPI\Client\Model\CreateObjectTargetCollectionBody**](../Model/CreateObjectTargetCollectionBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetCollectionResponse**](../Model/ObjectTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteObjectTargetCollection()`

```php
deleteObjectTargetCollection($x_version, $x_token, $tc_id)
```

Delete Object Target Collection

Delete a Object Target Collection and all its Object Targets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.

try {
    $apiInstance->deleteObjectTargetCollection($x_version, $x_token, $tc_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->deleteObjectTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |

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

## `generateWTO()`

```php
generateWTO($x_version, $x_token, $content_type, $tc_id, $generate_wto_body): \OpenAPI\Client\Model\ObjectTargetCollectionJobResponse
```

Generate WTO

Generate a WTO file containing the Object Target Collection and all its Object Targets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$generate_wto_body = new \OpenAPI\Client\Model\GenerateWTOBody(); // \OpenAPI\Client\Model\GenerateWTOBody

try {
    $result = $apiInstance->generateWTO($x_version, $x_token, $content_type, $tc_id, $generate_wto_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->generateWTO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **generate_wto_body** | [**\OpenAPI\Client\Model\GenerateWTOBody**](../Model/GenerateWTOBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetCollectionJobResponse**](../Model/ObjectTargetCollectionJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTargetCollection()`

```php
getObjectTargetCollection($x_version, $x_token, $tc_id): \OpenAPI\Client\Model\ObjectTargetCollectionResponse
```

Get Object Target Collection

Request a particular Object Target Collection from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.

try {
    $result = $apiInstance->getObjectTargetCollection($x_version, $x_token, $tc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->getObjectTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetCollectionResponse**](../Model/ObjectTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTargetCollectionStatus()`

```php
getObjectTargetCollectionStatus($x_version, $x_token, $tc_id, $skip, $limit, $source, $type): \OpenAPI\Client\Model\ObjectTargetJobResponse[]
```

Status - Get Object Target Collection jobs

Retrieves a list of asynchronous jobs sorted by creation date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$skip = 0; // int | Set 0 to start with first collection, set e.g. to 2 to skip first 2 collections. Default value: 0
$limit = 1000; // int | Use positive value to define the amount of entries to return [1, 20] per page. Default value: 10
$source = api; // string | filter the jobs by source. Available values (api, studio). Default value: api
$type = api; // string | filter the jobs by type.

try {
    $result = $apiInstance->getObjectTargetCollectionStatus($x_version, $x_token, $tc_id, $skip, $limit, $source, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->getObjectTargetCollectionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **skip** | **int**| Set 0 to start with first collection, set e.g. to 2 to skip first 2 collections. Default value: 0 | [optional]
 **limit** | **int**| Use positive value to define the amount of entries to return [1, 20] per page. Default value: 10 | [optional]
 **source** | **string**| filter the jobs by source. Available values (api, studio). Default value: api | [optional]
 **type** | **string**| filter the jobs by type. | [optional]

### Return type

[**\OpenAPI\Client\Model\ObjectTargetJobResponse[]**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTargetCollections()`

```php
getObjectTargetCollections($x_version, $x_token, $skip, $limit): \OpenAPI\Client\Model\ObjectTargetCollectionResponse[]
```

Get all Object Target Collections

Request all Object Target Collections from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$skip = 56; // int | Set 0 to start with first entry, set e.g. to 2 to skip first 2 entries. Default value: 0
$limit = 56; // int | Use positive value to define the amount of entries to return [1, 1000] per page. Default value: 1000

try {
    $result = $apiInstance->getObjectTargetCollections($x_version, $x_token, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->getObjectTargetCollections: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ObjectTargetCollectionResponse[]**](../Model/ObjectTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWTOStatus()`

```php
getWTOStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\ObjectTargetCollectionJobResponse
```

Status - Generate WTO

Retrieves information status about a particular scheduled wto generation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getWTOStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->getWTOStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **generation_id** | **string**| Unique identifier of the asynchronous job created by a generation endpoint. |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetCollectionJobResponse**](../Model/ObjectTargetCollectionJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateObjectTargetCollection()`

```php
updateObjectTargetCollection($x_version, $x_token, $content_type, $tc_id, $update_object_target_collection_body): \OpenAPI\Client\Model\ObjectTargetCollectionResponse
```

Update Object Target Collection

Updates an existing Object Target Collection in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$update_object_target_collection_body = new \OpenAPI\Client\Model\UpdateObjectTargetCollectionBody(); // \OpenAPI\Client\Model\UpdateObjectTargetCollectionBody

try {
    $result = $apiInstance->updateObjectTargetCollection($x_version, $x_token, $content_type, $tc_id, $update_object_target_collection_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetCollectionApi->updateObjectTargetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **update_object_target_collection_body** | [**\OpenAPI\Client\Model\UpdateObjectTargetCollectionBody**](../Model/UpdateObjectTargetCollectionBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetCollectionResponse**](../Model/ObjectTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
