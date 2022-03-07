# Reepay\PaymentmethodApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardVerification**](PaymentmethodApi.md#cardVerification) | **POST** /v1/payment_method/{id}/card/verify | Verify card validity


# **cardVerification**
> \Reepay\Model\CardVerification cardVerification($id, $body)

Verify card validity



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\PaymentmethodApi();
$id = "id_example"; // string | Card id
$body = new \Reepay\Model\CardVerificationRequest(); // \Reepay\Model\CardVerificationRequest | 

try {
    $result = $api_instance->cardVerification($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodApi->cardVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card id |
 **body** | [**\Reepay\Model\CardVerificationRequest**](../Model/\Reepay\Model\CardVerificationRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\CardVerification**](../Model/CardVerification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

