# OpenAPI\Client\ObjectTargetApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createObjectTargetFromImages()**](ObjectTargetApi.md#createObjectTargetFromImages) | **POST** /objectTargetCollection/{tcId}/target/images | Create Object Target from Images
[**createObjectTargetFromWTO()**](ObjectTargetApi.md#createObjectTargetFromWTO) | **POST** /objectTargetCollection/{tcId}/target/wto | Create Object Target from WTO
[**deleteObjectTarget()**](ObjectTargetApi.md#deleteObjectTarget) | **DELETE** /objectTargetCollection/{tcId}/target/{targetId} | Delete Object Target
[**extendObjectTarget()**](ObjectTargetApi.md#extendObjectTarget) | **PUT** /objectTargetCollection/{tcId}/target/{targetId} | Extend Object Target
[**getObjectTarget()**](ObjectTargetApi.md#getObjectTarget) | **GET** /objectTargetCollection/{tcId}/target/{targetId} | Get Object Target
[**getObjectTargetStatus()**](ObjectTargetApi.md#getObjectTargetStatus) | **GET** /objectTargetCollection/{tcId}/generation/targets/{generationId} | Status - Object Target Generation Information
[**getObjectTargets()**](ObjectTargetApi.md#getObjectTargets) | **GET** /objectTargetCollection/{tcId}/target | Get Object Targets
[**renameObjectTarget()**](ObjectTargetApi.md#renameObjectTarget) | **PUT** /objectTargetCollection/{tcId}/target/{targetId}/name | Rename Object Target


## `createObjectTargetFromImages()`

```php
createObjectTargetFromImages($x_version, $x_token, $content_type, $tc_id, $create_object_target_images_body): \OpenAPI\Client\Model\ObjectTargetJobResponse
```

Create Object Target from Images

Create a new Object Target in an Object Target Collection from at least two Image files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$create_object_target_images_body = new \OpenAPI\Client\Model\CreateObjectTargetImagesBody(); // \OpenAPI\Client\Model\CreateObjectTargetImagesBody

try {
    $result = $apiInstance->createObjectTargetFromImages($x_version, $x_token, $content_type, $tc_id, $create_object_target_images_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->createObjectTargetFromImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **create_object_target_images_body** | [**\OpenAPI\Client\Model\CreateObjectTargetImagesBody**](../Model/CreateObjectTargetImagesBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetJobResponse**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createObjectTargetFromWTO()`

```php
createObjectTargetFromWTO($x_version, $x_token, $content_type, $tc_id, $create_object_target_wto_body): \OpenAPI\Client\Model\ObjectTargetJobResponse
```

Create Object Target from WTO

Create a new Object Target in an Object Target Collection from a WTO file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$create_object_target_wto_body = new \OpenAPI\Client\Model\CreateObjectTargetWTOBody(); // \OpenAPI\Client\Model\CreateObjectTargetWTOBody

try {
    $result = $apiInstance->createObjectTargetFromWTO($x_version, $x_token, $content_type, $tc_id, $create_object_target_wto_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->createObjectTargetFromWTO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **create_object_target_wto_body** | [**\OpenAPI\Client\Model\CreateObjectTargetWTOBody**](../Model/CreateObjectTargetWTOBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetJobResponse**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteObjectTarget()`

```php
deleteObjectTarget($x_version, $x_token, $tc_id, $target_id)
```

Delete Object Target

Delete a particular Object Target from your Object Target Collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Object Target.

try {
    $apiInstance->deleteObjectTarget($x_version, $x_token, $tc_id, $target_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->deleteObjectTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **target_id** | **string**| Unique identifier of the Object Target. |

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

## `extendObjectTarget()`

```php
extendObjectTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $extend_object_target_body): \OpenAPI\Client\Model\ObjectTargetJobResponse
```

Extend Object Target

Add source images to an existing target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Object Target.
$extend_object_target_body = new \OpenAPI\Client\Model\ExtendObjectTargetBody(); // \OpenAPI\Client\Model\ExtendObjectTargetBody

try {
    $result = $apiInstance->extendObjectTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $extend_object_target_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->extendObjectTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **target_id** | **string**| Unique identifier of the Object Target. |
 **extend_object_target_body** | [**\OpenAPI\Client\Model\ExtendObjectTargetBody**](../Model/ExtendObjectTargetBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetJobResponse**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTarget()`

```php
getObjectTarget($x_version, $x_token, $tc_id, $target_id): \OpenAPI\Client\Model\ObjectTargetResponse
```

Get Object Target

Request a specific Object Targets from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Object Target.

try {
    $result = $apiInstance->getObjectTarget($x_version, $x_token, $tc_id, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->getObjectTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **target_id** | **string**| Unique identifier of the Object Target. |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetResponse**](../Model/ObjectTargetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTargetStatus()`

```php
getObjectTargetStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\ObjectTargetJobResponse
```

Status - Object Target Generation Information

Retrieves information status about a particular scheduled Object Target creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getObjectTargetStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->getObjectTargetStatus: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ObjectTargetJobResponse**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTargets()`

```php
getObjectTargets($x_version, $x_token, $tc_id): \OpenAPI\Client\Model\ObjectTargetResponse[]
```

Get Object Targets

Request all Object Targets in a Target Collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.

try {
    $result = $apiInstance->getObjectTargets($x_version, $x_token, $tc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->getObjectTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetResponse[]**](../Model/ObjectTargetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameObjectTarget()`

```php
renameObjectTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $rename_object_target_body): \OpenAPI\Client\Model\ObjectTargetJobResponse
```

Rename Object Target

Rename an existing target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ObjectTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Object Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Object Target.
$rename_object_target_body = new \OpenAPI\Client\Model\RenameObjectTargetBody(); // \OpenAPI\Client\Model\RenameObjectTargetBody

try {
    $result = $apiInstance->renameObjectTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $rename_object_target_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTargetApi->renameObjectTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Object Target Collection. |
 **target_id** | **string**| Unique identifier of the Object Target. |
 **rename_object_target_body** | [**\OpenAPI\Client\Model\RenameObjectTargetBody**](../Model/RenameObjectTargetBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ObjectTargetJobResponse**](../Model/ObjectTargetJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
