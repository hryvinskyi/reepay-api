# Reepay\DefaultApi

All URIs are relative to *https://api.reepay.com/api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateConfiguration**](DefaultApi.md#createorupdateconfiguration) | **POST** /v1/risk/configuration | Create or update risk configuration
[**deleteConfiguration**](DefaultApi.md#deleteconfiguration) | **DELETE** /v1/risk/configuration | Delete risk configuration
[**getAccountData**](DefaultApi.md#getaccountdata) | **GET** /v1/checkout/account | 
[**getBlocklist**](DefaultApi.md#getblocklist) | **GET** /v1/blocklist | 
[**getConfiguration**](DefaultApi.md#getconfiguration) | **GET** /v1/risk/configuration | Get risk configuration
[**getErrorCodes**](DefaultApi.md#geterrorcodes) | **GET** /v1/error_codes | Get error codes
[**getSessionData**](DefaultApi.md#getsessiondata) | **GET** /v1/checkout/session | 
[**getSwaggerSpec**](DefaultApi.md#getswaggerspec) | **GET** /swagger.json | 

# **createOrUpdateConfiguration**
> \Reepay\Model\RiskConfiguration createOrUpdateConfiguration($body)

Create or update risk configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\RiskConfiguration(); // \Reepay\Model\RiskConfiguration | 

try {
    $result = $apiInstance->createOrUpdateConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrUpdateConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\RiskConfiguration**](../Model/RiskConfiguration.md)|  |

### Return type

[**\Reepay\Model\RiskConfiguration**](../Model/RiskConfiguration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConfiguration**
> deleteConfiguration()

Delete risk configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteConfiguration();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountData**
> \Reepay\Model\CheckoutAccountDataDto getAccountData()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccountData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccountData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\CheckoutAccountDataDto**](../Model/CheckoutAccountDataDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlocklist**
> string[] getBlocklist($date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = "date_example"; // string | 

try {
    $result = $apiInstance->getBlocklist($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBlocklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguration**
> \Reepay\Model\RiskConfiguration getConfiguration()

Get risk configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\RiskConfiguration**](../Model/RiskConfiguration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getErrorCodes**
> \Reepay\Model\ErrorCodeDto[] getErrorCodes()

Get error codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getErrorCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getErrorCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Reepay\Model\ErrorCodeDto[]**](../Model/ErrorCodeDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionData**
> \Reepay\Model\CheckoutSessionDataDto getSessionData($customer, $charge, $subscription, $card_on_file)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = "customer_example"; // string | 
$charge = "charge_example"; // string | 
$subscription = "subscription_example"; // string | 
$card_on_file = "card_on_file_example"; // string | 

try {
    $result = $apiInstance->getSessionData($customer, $charge, $subscription, $card_on_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSessionData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**|  | [optional]
 **charge** | **string**|  | [optional]
 **subscription** | **string**|  | [optional]
 **card_on_file** | **string**|  | [optional]

### Return type

[**\Reepay\Model\CheckoutSessionDataDto**](../Model/CheckoutSessionDataDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSwaggerSpec**
> string getSwaggerSpec()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Reepay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSwaggerSpec();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSwaggerSpec: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

