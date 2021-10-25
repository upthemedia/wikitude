# OpenAPI\Client\ImageTargetApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImageTargets()**](ImageTargetApi.md#createImageTargets) | **POST** /targetCollection/{tcId}/targets | Create Image Targets
[**deleteImageTarget()**](ImageTargetApi.md#deleteImageTarget) | **DELETE** /targetCollection/{tcId}/target/{targetId} | Delete Image Target
[**getImageTarget()**](ImageTargetApi.md#getImageTarget) | **GET** /targetCollection/{tcId}/target/{targetId} | Get Image Target
[**getImageTargetStatus()**](ImageTargetApi.md#getImageTargetStatus) | **GET** /targetCollection/{tcId}/generation/targets/{generationId} | Status - Image Targets Creation
[**getImageTargets()**](ImageTargetApi.md#getImageTargets) | **GET** /targetCollection/{tcId}/target | Get Image Targets
[**updateImageTarget()**](ImageTargetApi.md#updateImageTarget) | **POST** /targetCollection/{tcId}/target/{targetId} | Update Image Target


## `createImageTargets()`

```php
createImageTargets($x_version, $x_token, $content_type, $tc_id, $create_image_targets_body): \OpenAPI\Client\Model\CreateImageTargetsResponse
```

Create Image Targets

Create a set of up to 10 new Targets in a Target Collection in your account. The task to create the listed Targets is scheduled. The response body contains the initial job status. \"Location\"-header is the url to the GET endpoint that returns current job status information. It is recommended to query this endpoint after \"estimatedLatency\" milliseconds, and poll it afterwards every 10 seconds in case job status is still not \"COMPLETED\". Once job status is \"COMPLETED\" each item holds a \"target\" attribute of the created target or an \"error\" attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$create_image_targets_body = array(new \OpenAPI\Client\Model\CreateImageTargetsBody()); // \OpenAPI\Client\Model\CreateImageTargetsBody[]

try {
    $result = $apiInstance->createImageTargets($x_version, $x_token, $content_type, $tc_id, $create_image_targets_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->createImageTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **create_image_targets_body** | [**\OpenAPI\Client\Model\CreateImageTargetsBody[]**](../Model/CreateImageTargetsBody.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateImageTargetsResponse**](../Model/CreateImageTargetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImageTarget()`

```php
deleteImageTarget($x_version, $x_token, $tc_id, $target_id)
```

Delete Image Target

Delete a particular Target from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Image Target.

try {
    $apiInstance->deleteImageTarget($x_version, $x_token, $tc_id, $target_id);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->deleteImageTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **target_id** | **string**| Unique identifier of the Image Target. |

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

## `getImageTarget()`

```php
getImageTarget($x_version, $x_token, $tc_id, $target_id): \OpenAPI\Client\Model\ImageTargetResponse
```

Get Image Target

Request a particular Image Target in a particular Target Collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Image Target.

try {
    $result = $apiInstance->getImageTarget($x_version, $x_token, $tc_id, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->getImageTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **target_id** | **string**| Unique identifier of the Image Target. |

### Return type

[**\OpenAPI\Client\Model\ImageTargetResponse**](../Model/ImageTargetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImageTargetStatus()`

```php
getImageTargetStatus($x_version, $x_token, $tc_id, $generation_id): \OpenAPI\Client\Model\CreateImageTargetsResponse
```

Status - Image Targets Creation

Retrieves information status about a particular scheduled targets creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getImageTargetStatus($x_version, $x_token, $tc_id, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->getImageTargetStatus: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\CreateImageTargetsResponse**](../Model/CreateImageTargetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImageTargets()`

```php
getImageTargets($x_version, $x_token, $tc_id, $sortby, $sortorder, $skip, $limit, $s, $add_has_augmentations): \OpenAPI\Client\Model\ImageTargetResponse[]
```

Get Image Targets

Request all Image Targets in a Target Collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$sortby = 'sortby_example'; // string | Targets may be sorted by 'name', 'creDat', 'modDat', 'rating'. Default value: 'creDat'
$sortorder = 'sortorder_example'; // string | Targets may be sorted ascending ('asc') or descending ('desc'). Default value: 'desc'
$skip = 3.4; // float | Set 0 to start with first target, set e.g. to 2 to skip first 2 targets. Default value: 0
$limit = 3.4; // float | Set to 0 for 'all targets' or use positive value to define max. amount of targets to return. Default value: 0
$s = 's_example'; // string | The search string to look for in target names.
$add_has_augmentations = True; // bool | Add the hasAugmentations property.

try {
    $result = $apiInstance->getImageTargets($x_version, $x_token, $tc_id, $sortby, $sortorder, $skip, $limit, $s, $add_has_augmentations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->getImageTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **sortby** | **string**| Targets may be sorted by &#39;name&#39;, &#39;creDat&#39;, &#39;modDat&#39;, &#39;rating&#39;. Default value: &#39;creDat&#39; | [optional]
 **sortorder** | **string**| Targets may be sorted ascending (&#39;asc&#39;) or descending (&#39;desc&#39;). Default value: &#39;desc&#39; | [optional]
 **skip** | **float**| Set 0 to start with first target, set e.g. to 2 to skip first 2 targets. Default value: 0 | [optional]
 **limit** | **float**| Set to 0 for &#39;all targets&#39; or use positive value to define max. amount of targets to return. Default value: 0 | [optional]
 **s** | **string**| The search string to look for in target names. | [optional]
 **add_has_augmentations** | **bool**| Add the hasAugmentations property. | [optional]

### Return type

[**\OpenAPI\Client\Model\ImageTargetResponse[]**](../Model/ImageTargetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImageTarget()`

```php
updateImageTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $update_image_target_body): \OpenAPI\Client\Model\ImageTargetResponse
```

Update Image Target

Updates properties of a particular Target in your account. Currently following properties are supported: physicalHeight, metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$tc_id = 'tc_id_example'; // string | Unique identifier of the Image Target Collection.
$target_id = 'target_id_example'; // string | Unique identifier of the Image Target.
$update_image_target_body = new \OpenAPI\Client\Model\UpdateImageTargetBody(); // \OpenAPI\Client\Model\UpdateImageTargetBody

try {
    $result = $apiInstance->updateImageTarget($x_version, $x_token, $content_type, $tc_id, $target_id, $update_image_target_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageTargetApi->updateImageTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **tc_id** | **string**| Unique identifier of the Image Target Collection. |
 **target_id** | **string**| Unique identifier of the Image Target. |
 **update_image_target_body** | [**\OpenAPI\Client\Model\UpdateImageTargetBody**](../Model/UpdateImageTargetBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\ImageTargetResponse**](../Model/ImageTargetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
