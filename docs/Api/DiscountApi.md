# Reepay\DiscountApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDiscount**](DiscountApi.md#createDiscount) | **POST** /v1/discount | Create discount
[**deleteDiscount**](DiscountApi.md#deleteDiscount) | **DELETE** /v1/discount/{handle} | Delete discount
[**getDiscount**](DiscountApi.md#getDiscount) | **GET** /v1/discount/{handle} | Get discount
[**undeleteDiscount**](DiscountApi.md#undeleteDiscount) | **POST** /v1/discount/{handle}/undelete | Undelete discount
[**updateDiscount**](DiscountApi.md#updateDiscount) | **PUT** /v1/discount/{handle} | Update discount


# **createDiscount**
> \Reepay\Model\Discount createDiscount($body)

Create discount



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateDiscount(); // \Reepay\Model\CreateDiscount | 

try {
    $result = $apiInstance->createDiscount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->createDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateDiscount**](../Model/CreateDiscount.md)|  | [optional]

### Return type

[**\Reepay\Model\Discount**](../Model/Discount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiscount**
> \Reepay\Model\Discount deleteDiscount($handle)

Delete discount



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Discount handle

try {
    $result = $apiInstance->deleteDiscount($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->deleteDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Discount handle |

### Return type

[**\Reepay\Model\Discount**](../Model/Discount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscount**
> \Reepay\Model\Discount getDiscount($handle)

Get discount



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Discount handle

try {
    $result = $apiInstance->getDiscount($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->getDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Discount handle |

### Return type

[**\Reepay\Model\Discount**](../Model/Discount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undeleteDiscount**
> \Reepay\Model\Discount undeleteDiscount($handle)

Undelete discount



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Discount handle

try {
    $result = $apiInstance->undeleteDiscount($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->undeleteDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Discount handle |

### Return type

[**\Reepay\Model\Discount**](../Model/Discount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDiscount**
> \Reepay\Model\Discount updateDiscount($handle, $body)

Update discount



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Discount handle
$body = new \Reepay\Model\UpdateDiscount(); // \Reepay\Model\UpdateDiscount | 

try {
    $result = $apiInstance->updateDiscount($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->updateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Discount handle |
 **body** | [**\Reepay\Model\UpdateDiscount**](../Model/UpdateDiscount.md)|  | [optional]

### Return type

[**\Reepay\Model\Discount**](../Model/Discount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

