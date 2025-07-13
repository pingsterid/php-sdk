# Pingster\AuthUUIDApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authuuidControllerRegister()**](AuthUUIDApi.md#authuuidControllerRegister) | **POST** /authuuid/register | Register client ID &amp; secret ID |


## `authuuidControllerRegister()`

```php
authuuidControllerRegister($register_client_dto): \Pingster\Model\RegisterClientResponseDto
```

Register client ID & secret ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Pingster\Api\AuthUUIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_client_dto = new \Pingster\Model\RegisterClientDto(); // \Pingster\Model\RegisterClientDto

try {
    $result = $apiInstance->authuuidControllerRegister($register_client_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthUUIDApi->authuuidControllerRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_client_dto** | [**\Pingster\Model\RegisterClientDto**](../Model/RegisterClientDto.md)|  | |

### Return type

[**\Pingster\Model\RegisterClientResponseDto**](../Model/RegisterClientResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
