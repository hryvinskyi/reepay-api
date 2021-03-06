# Reepay\RefundApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](RefundApi.md#createRefund) | **POST** /v1/refund | Create refund
[**getRefund**](RefundApi.md#getRefund) | **GET** /v1/refund/{id} | Get refund


# **createRefund**
> \Reepay\Model\Refund createRefund($body)

Create refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\RefundApi();
$body = new \Reepay\Model\CreateRefund(); // \Reepay\Model\CreateRefund | 

try {
    $result = $api_instance->createRefund($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateRefund**](../Model/\Reepay\Model\CreateRefund.md)|  | [optional]

### Return type

[**\Reepay\Model\Refund**](../Model/Refund.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRefund**
> \Reepay\Model\Refund getRefund($id)

Get refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\RefundApi();
$id = "id_example"; // string | Refund id

try {
    $result = $api_instance->getRefund($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->getRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |

### Return type

[**\Reepay\Model\Refund**](../Model/Refund.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

