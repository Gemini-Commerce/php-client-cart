# OpenAPI\Client\PromotionsApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCoupons()**](PromotionsApi.md#applyCoupons) | **POST** /cart.Cart/ApplyCoupons | Apply Coupons |
| [**removeCoupons()**](PromotionsApi.md#removeCoupons) | **POST** /cart.Cart/RemoveCoupons | Remove Coupons |


## `applyCoupons()`

```php
applyCoupons($body): object
```

Apply Coupons

Apply coupons to the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartApplyCouponsRequest(); // \OpenAPI\Client\Model\CartApplyCouponsRequest

try {
    $result = $apiInstance->applyCoupons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->applyCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartApplyCouponsRequest**](../Model/CartApplyCouponsRequest.md)|  | |

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

## `removeCoupons()`

```php
removeCoupons($body): object
```

Remove Coupons

Remove coupons from the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartRemoveCouponsRequest(); // \OpenAPI\Client\Model\CartRemoveCouponsRequest

try {
    $result = $apiInstance->removeCoupons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->removeCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartRemoveCouponsRequest**](../Model/CartRemoveCouponsRequest.md)|  | |

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
