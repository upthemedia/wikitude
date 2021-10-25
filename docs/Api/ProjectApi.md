# OpenAPI\Client\ProjectApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProjects()**](ProjectApi.md#getProjects) | **GET** /projects | Get all projects


## `getProjects()`

```php
getProjects($x_version, $x_token, $skip, $limit): AnyOfImageTargetCollectionResponseObjectTargetCollectionResponse[]
```

Get all projects

Request all projects from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.
$skip = 56; // int | Set 0 to start with first entry, set e.g. to 2 to skip first 2 entries. Default value: 0
$limit = 56; // int | Use positive value to define the amount of entries to return [1, 1000] per page. Default value: 1000

try {
    $result = $apiInstance->getProjects($x_version, $x_token, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjects: ', $e->getMessage(), PHP_EOL;
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

[**AnyOfImageTargetCollectionResponseObjectTargetCollectionResponse[]**](../Model/AnyOfImageTargetCollectionResponseObjectTargetCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
