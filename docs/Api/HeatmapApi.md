# OpenAPI\Client\HeatmapApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateHeatmap()**](HeatmapApi.md#generateHeatmap) | **POST** /heatmap | Generate Heatmap
[**getHeatmapStatus()**](HeatmapApi.md#getHeatmapStatus) | **GET** /heatmap/{generationId} | Status - Generate Heatmap


## `generateHeatmap()`

```php
generateHeatmap($x_version, $x_token, $content_type, $generate_heatmap_body): \OpenAPI\Client\Model\GenerateHeatmapResponse
```

Generate Heatmap

Generates a greyscale image out of the input image, where areas with recognition and tracking relevance are highlighted in color. This way one can better understand the rating of an image and see which areas have the highest importance for 2D recognition and tracking. Note that only JPG and non-transparent PNG files are accepted and the generated heatmap image is stored on a temporary folder which is deleted after 24 hours. Store the image on your own server in case you plan to use it in your user interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HeatmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$content_type = 'content_type_example'; // string | The Content Type of the body. Must be set to application/json.
$generate_heatmap_body = new \OpenAPI\Client\Model\GenerateHeatmapBody(); // \OpenAPI\Client\Model\GenerateHeatmapBody

try {
    $result = $apiInstance->generateHeatmap($x_version, $x_token, $content_type, $generate_heatmap_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeatmapApi->generateHeatmap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **content_type** | **string**| The Content Type of the body. Must be set to application/json. |
 **generate_heatmap_body** | [**\OpenAPI\Client\Model\GenerateHeatmapBody**](../Model/GenerateHeatmapBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\GenerateHeatmapResponse**](../Model/GenerateHeatmapResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeatmapStatus()`

```php
getHeatmapStatus($x_version, $x_token, $generation_id): \OpenAPI\Client\Model\GenerateHeatmapStatusResponse
```

Status - Generate Heatmap

Retrieves information status about a particular scheduled heatmap creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HeatmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$generation_id = 'generation_id_example'; // string | Unique identifier of the asynchronous job created by a generation endpoint.

try {
    $result = $apiInstance->getHeatmapStatus($x_version, $x_token, $generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeatmapApi->getHeatmapStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |
 **generation_id** | **string**| Unique identifier of the asynchronous job created by a generation endpoint. |

### Return type

[**\OpenAPI\Client\Model\GenerateHeatmapStatusResponse**](../Model/GenerateHeatmapStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
