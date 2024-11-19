# OpenAPI\Client\PaymentsApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPaymentMethods()**](PaymentsApi.md#listPaymentMethods) | **POST** /cart.Cart/ListPaymentMethods | List Payment Methods |
| [**setSetPayments()**](PaymentsApi.md#setSetPayments) | **POST** /cart.Cart/SetPayments | Set SetPayments |


## `listPaymentMethods()`

```php
listPaymentMethods($body): \OpenAPI\Client\Model\CartListPaymentMethodsResponse
```

List Payment Methods

List payment methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartListPaymentMethodsRequest(); // \OpenAPI\Client\Model\CartListPaymentMethodsRequest

try {
    $result = $apiInstance->listPaymentMethods($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartListPaymentMethodsRequest**](../Model/CartListPaymentMethodsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartListPaymentMethodsResponse**](../Model/CartListPaymentMethodsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setSetPayments()`

```php
setSetPayments($body): \OpenAPI\Client\Model\CartSetPaymentsResponse
```

Set SetPayments

Set SetPayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartSetPaymentsRequest(); // \OpenAPI\Client\Model\CartSetPaymentsRequest

try {
    $result = $apiInstance->setSetPayments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->setSetPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartSetPaymentsRequest**](../Model/CartSetPaymentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartSetPaymentsResponse**](../Model/CartSetPaymentsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
