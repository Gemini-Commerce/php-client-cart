# GeminiCommerce\Cart\AddressesApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**setBillingAddress()**](AddressesApi.md#setBillingAddress) | **POST** /cart.Cart/SetBillingAddress | Set Billing Address |
| [**setShipmentAddress()**](AddressesApi.md#setShipmentAddress) | **POST** /cart.Cart/SetShipmentAddress | Set Shipment Address |


## `setBillingAddress()`

```php
setBillingAddress($body): object
```

Set Billing Address

Set billing address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Cart\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Cart\Model\CartSetBillingAddressRequest(); // \GeminiCommerce\Cart\Model\CartSetBillingAddressRequest

try {
    $result = $apiInstance->setBillingAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->setBillingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Cart\Model\CartSetBillingAddressRequest**](../Model/CartSetBillingAddressRequest.md)|  | |

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

## `setShipmentAddress()`

```php
setShipmentAddress($body): object
```

Set Shipment Address

Set shipment address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Cart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Cart\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Cart\Model\CartSetShipmentAddressRequest(); // \GeminiCommerce\Cart\Model\CartSetShipmentAddressRequest

try {
    $result = $apiInstance->setShipmentAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->setShipmentAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Cart\Model\CartSetShipmentAddressRequest**](../Model/CartSetShipmentAddressRequest.md)|  | |

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
