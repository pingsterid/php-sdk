# OpenAPI\Client\WppconnectApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**wppconnectControllerCheckSessionStatus()**](WppconnectApi.md#wppconnectControllerCheckSessionStatus) | **GET** /Wppconnect/session/{id}/status |  |
| [**wppconnectControllerCreateSession()**](WppconnectApi.md#wppconnectControllerCreateSession) | **POST** /Wppconnect/session/{id} |  |
| [**wppconnectControllerGetQRCode()**](WppconnectApi.md#wppconnectControllerGetQRCode) | **GET** /Wppconnect/qrcode/{id} |  |
| [**wppconnectControllerLogout()**](WppconnectApi.md#wppconnectControllerLogout) | **POST** /Wppconnect/logout/{id} |  |
| [**wppconnectControllerSendMessage()**](WppconnectApi.md#wppconnectControllerSendMessage) | **POST** /Wppconnect/send/{id} |  |


## `wppconnectControllerCheckSessionStatus()`

```php
wppconnectControllerCheckSessionStatus($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: secret-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-id', 'Bearer');

// Configure API key authorization: client-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WppconnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->wppconnectControllerCheckSessionStatus($id);
} catch (Exception $e) {
    echo 'Exception when calling WppconnectApi->wppconnectControllerCheckSessionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[secret-id](../../README.md#secret-id), [client-id](../../README.md#client-id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wppconnectControllerCreateSession()`

```php
wppconnectControllerCreateSession($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: secret-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-id', 'Bearer');

// Configure API key authorization: client-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WppconnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->wppconnectControllerCreateSession($id);
} catch (Exception $e) {
    echo 'Exception when calling WppconnectApi->wppconnectControllerCreateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[secret-id](../../README.md#secret-id), [client-id](../../README.md#client-id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wppconnectControllerGetQRCode()`

```php
wppconnectControllerGetQRCode($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: secret-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-id', 'Bearer');

// Configure API key authorization: client-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WppconnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->wppconnectControllerGetQRCode($id);
} catch (Exception $e) {
    echo 'Exception when calling WppconnectApi->wppconnectControllerGetQRCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[secret-id](../../README.md#secret-id), [client-id](../../README.md#client-id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wppconnectControllerLogout()`

```php
wppconnectControllerLogout($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: secret-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-id', 'Bearer');

// Configure API key authorization: client-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WppconnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->wppconnectControllerLogout($id);
} catch (Exception $e) {
    echo 'Exception when calling WppconnectApi->wppconnectControllerLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[secret-id](../../README.md#secret-id), [client-id](../../README.md#client-id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wppconnectControllerSendMessage()`

```php
wppconnectControllerSendMessage($id, $send_message_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: secret-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-id', 'Bearer');

// Configure API key authorization: client-id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WppconnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$send_message_dto = new \OpenAPI\Client\Model\SendMessageDto(); // \OpenAPI\Client\Model\SendMessageDto

try {
    $apiInstance->wppconnectControllerSendMessage($id, $send_message_dto);
} catch (Exception $e) {
    echo 'Exception when calling WppconnectApi->wppconnectControllerSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **send_message_dto** | [**\OpenAPI\Client\Model\SendMessageDto**](../Model/SendMessageDto.md)|  | |

### Return type

void (empty response body)

### Authorization

[secret-id](../../README.md#secret-id), [client-id](../../README.md#client-id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
