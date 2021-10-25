# OpenAPI\Client\AccountApi

All URIs are relative to https://api-eu.wikitude.com/cloudrecognition.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount()**](AccountApi.md#getAccount) | **GET** /account | Get account information


## `getAccount()`

```php
getAccount($x_version, $x_token): \OpenAPI\Client\Model\GetAccountInfoResponse
```

Get account information

Request information regarding your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.

try {
    $result = $apiInstance->getAccount($x_version, $x_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_version** | **string**| The version of the API to be used. Must be set to 3. |
 **x_token** | **string**| Your Manager Token. |

### Return type

[**\OpenAPI\Client\Model\GetAccountInfoResponse**](../Model/GetAccountInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
