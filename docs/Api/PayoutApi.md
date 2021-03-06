# Reepay\PayoutApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayout**](PayoutApi.md#createPayout) | **POST** /v1/payout | Create payout
[**getPayout**](PayoutApi.md#getPayout) | **GET** /v1/payout/{handle} | Get payout
[**transactionDetails1**](PayoutApi.md#transactionDetails1) | **GET** /v1/payout/{id}/transaction/{transaction}/details | Get transaction details


# **createPayout**
> \Reepay\Model\Payout createPayout($body)

Create payout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\PayoutApi();
$body = new \Reepay\Model\CreatePayout(); // \Reepay\Model\CreatePayout | 

try {
    $result = $api_instance->createPayout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->createPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreatePayout**](../Model/\Reepay\Model\CreatePayout.md)|  | [optional]

### Return type

[**\Reepay\Model\Payout**](../Model/Payout.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayout**
> \Reepay\Model\Payout getPayout($handle)

Get payout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\PayoutApi();
$handle = "handle_example"; // string | Payout handle

try {
    $result = $api_instance->getPayout($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Payout handle |

### Return type

[**\Reepay\Model\Payout**](../Model/Payout.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionDetails1**
> map[string,object] transactionDetails1($id, $transaction)

Get transaction details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\PayoutApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->transactionDetails1($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->transactionDetails1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

