# OpenAPI\Client\BasicOperationsApi

All URIs are relative to https://cart.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProducts()**](BasicOperationsApi.md#addProducts) | **POST** /cart.Cart/AddProducts | Add Products |
| [**createCart()**](BasicOperationsApi.md#createCart) | **POST** /cart.Cart/CreateCart | Create Cart |
| [**getActiveCartByCustomer()**](BasicOperationsApi.md#getActiveCartByCustomer) | **POST** /cart.Cart/GetActiveCartByCustomer | Get Active Cart By Customer |
| [**getCart()**](BasicOperationsApi.md#getCart) | **POST** /cart.Cart/GetCart | Get Cart |
| [**listCarts()**](BasicOperationsApi.md#listCarts) | **POST** /cart.Cart/ListCarts | List Carts |
| [**mergeCarts()**](BasicOperationsApi.md#mergeCarts) | **POST** /cart.Cart/MergeCarts | Merge Carts |
| [**removeProducts()**](BasicOperationsApi.md#removeProducts) | **POST** /cart.Cart/RemoveProducts | Remove Products |
| [**setAdditionalInfo()**](BasicOperationsApi.md#setAdditionalInfo) | **POST** /cart.Cart/SetAdditionalInfo | Set Additional Info |
| [**setNotes()**](BasicOperationsApi.md#setNotes) | **POST** /cart.Cart/SetNotes | Set Notes |
| [**triggerRealignment()**](BasicOperationsApi.md#triggerRealignment) | **POST** /cart.Cart/TriggerRealignment | Trigger Realignment |
| [**updateCart()**](BasicOperationsApi.md#updateCart) | **POST** /cart.Cart/UpdateCart | Update Cart |
| [**updateProducts()**](BasicOperationsApi.md#updateProducts) | **POST** /cart.Cart/UpdateProducts | Update Products |


## `addProducts()`

```php
addProducts($body): \OpenAPI\Client\Model\CartAddProductsResponse
```

Add Products

This endpoint allows you to add products to a shopping cart. The AddProducts method enables you to specify the tenantId and cartId to identify the target shopping cart, and provide a list of items to be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartAddProductsRequest(); // \OpenAPI\Client\Model\CartAddProductsRequest

try {
    $result = $apiInstance->addProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->addProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartAddProductsRequest**](../Model/CartAddProductsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartAddProductsResponse**](../Model/CartAddProductsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCart()`

```php
createCart($body): \OpenAPI\Client\Model\CartCreateCartResponse
```

Create Cart

The CreateCart endpoint allows users to create a new cart for their shopping session. By making a request to this endpoint, users can initiate a new cart and obtain a unique identifier for future cart operations. This endpoint enables seamless cart management and provides a foundation for adding products and performing checkout operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartCreateCartRequest(); // \OpenAPI\Client\Model\CartCreateCartRequest

try {
    $result = $apiInstance->createCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->createCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartCreateCartRequest**](../Model/CartCreateCartRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartCreateCartResponse**](../Model/CartCreateCartResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveCartByCustomer()`

```php
getActiveCartByCustomer($body): \OpenAPI\Client\Model\CartGetActiveCartByCustomerResponse
```

Get Active Cart By Customer

Get the active cart by customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartGetActiveCartByCustomerRequest(); // \OpenAPI\Client\Model\CartGetActiveCartByCustomerRequest

try {
    $result = $apiInstance->getActiveCartByCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->getActiveCartByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartGetActiveCartByCustomerRequest**](../Model/CartGetActiveCartByCustomerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartGetActiveCartByCustomerResponse**](../Model/CartGetActiveCartByCustomerResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCart()`

```php
getCart($body): \OpenAPI\Client\Model\CartGetCartResponse
```

Get Cart

Get the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartGetCartRequest(); // \OpenAPI\Client\Model\CartGetCartRequest | Get cart request

try {
    $result = $apiInstance->getCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->getCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartGetCartRequest**](../Model/CartGetCartRequest.md)| Get cart request | |

### Return type

[**\OpenAPI\Client\Model\CartGetCartResponse**](../Model/CartGetCartResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCarts()`

```php
listCarts($body): \OpenAPI\Client\Model\CartListCartsResponse
```

List Carts

List all carts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartListCartsRequest(); // \OpenAPI\Client\Model\CartListCartsRequest

try {
    $result = $apiInstance->listCarts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->listCarts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartListCartsRequest**](../Model/CartListCartsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartListCartsResponse**](../Model/CartListCartsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeCarts()`

```php
mergeCarts($body): \OpenAPI\Client\Model\CartMergeCartsResponse
```

Merge Carts

Merge carts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartMergeCartsRequest(); // \OpenAPI\Client\Model\CartMergeCartsRequest

try {
    $result = $apiInstance->mergeCarts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->mergeCarts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartMergeCartsRequest**](../Model/CartMergeCartsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartMergeCartsResponse**](../Model/CartMergeCartsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProducts()`

```php
removeProducts($body): object
```

Remove Products

Remove products from the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartRemoveProductsRequest(); // \OpenAPI\Client\Model\CartRemoveProductsRequest

try {
    $result = $apiInstance->removeProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->removeProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartRemoveProductsRequest**](../Model/CartRemoveProductsRequest.md)|  | |

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

## `setAdditionalInfo()`

```php
setAdditionalInfo($body): object
```

Set Additional Info

Set additional info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartSetAdditionalInfoRequest(); // \OpenAPI\Client\Model\CartSetAdditionalInfoRequest

try {
    $result = $apiInstance->setAdditionalInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->setAdditionalInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartSetAdditionalInfoRequest**](../Model/CartSetAdditionalInfoRequest.md)|  | |

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

## `setNotes()`

```php
setNotes($body): object
```

Set Notes

Set notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartSetNotesRequest(); // \OpenAPI\Client\Model\CartSetNotesRequest

try {
    $result = $apiInstance->setNotes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->setNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartSetNotesRequest**](../Model/CartSetNotesRequest.md)|  | |

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

## `triggerRealignment()`

```php
triggerRealignment($body): \OpenAPI\Client\Model\CartTriggerRealignmentResponse
```

Trigger Realignment

Trigger realignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartTriggerRealignmentRequest(); // \OpenAPI\Client\Model\CartTriggerRealignmentRequest

try {
    $result = $apiInstance->triggerRealignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->triggerRealignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartTriggerRealignmentRequest**](../Model/CartTriggerRealignmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartTriggerRealignmentResponse**](../Model/CartTriggerRealignmentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCart()`

```php
updateCart($body): object
```

Update Cart

Update the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartUpdateCartRequest(); // \OpenAPI\Client\Model\CartUpdateCartRequest

try {
    $result = $apiInstance->updateCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->updateCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartUpdateCartRequest**](../Model/CartUpdateCartRequest.md)|  | |

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

## `updateProducts()`

```php
updateProducts($body): object
```

Update Products

Update products in the cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CartUpdateProductsRequest(); // \OpenAPI\Client\Model\CartUpdateProductsRequest

try {
    $result = $apiInstance->updateProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->updateProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CartUpdateProductsRequest**](../Model/CartUpdateProductsRequest.md)|  | |

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
