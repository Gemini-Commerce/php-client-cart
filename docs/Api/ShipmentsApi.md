# GeminiCommerce\Cart\ShipmentsApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listShipmentMethods()**](ShipmentsApi.md#listShipmentMethods) | **POST** /cart.Cart/ListShipmentMethods | List Shipment Methods |
| [**setShipments()**](ShipmentsApi.md#setShipments) | **POST** /cart.Cart/SetShipments | Set Shipments |


## `listShipmentMethods()`

```php
listShipmentMethods($body): \GeminiCommerce\Cart\Model\CartListShipmentMethodsResponse
```

List Shipment Methods

List shipment methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Cart\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Cart\Model\CartListShipmentMethodsRequest(); // \GeminiCommerce\Cart\Model\CartListShipmentMethodsRequest

try {
    $result = $apiInstance->listShipmentMethods($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipmentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Cart\Model\CartListShipmentMethodsRequest**](../Model/CartListShipmentMethodsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Cart\Model\CartListShipmentMethodsResponse**](../Model/CartListShipmentMethodsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setShipments()`

```php
setShipments($body): object
```

Set Shipments

Set shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Cart\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Cart\Model\CartSetShipmentsRequest(); // \GeminiCommerce\Cart\Model\CartSetShipmentsRequest

try {
    $result = $apiInstance->setShipments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->setShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Cart\Model\CartSetShipmentsRequest**](../Model/CartSetShipmentsRequest.md)|  | |

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
