# OpenAPI\Client\CartApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cartSetCustomPriceOnItems()**](CartApi.md#cartSetCustomPriceOnItems) | **POST** /cart.Cart/SetCustomPriceOnItems |  |


## `cartSetCustomPriceOnItems()`

```php
cartSetCustomPriceOnItems($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartSetCustomPriceOnItemsRequest(); // \OpenAPI\Client\Model\CartSetCustomPriceOnItemsRequest

try {
    $result = $apiInstance->cartSetCustomPriceOnItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartSetCustomPriceOnItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartSetCustomPriceOnItemsRequest**](../Model/CartSetCustomPriceOnItemsRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
