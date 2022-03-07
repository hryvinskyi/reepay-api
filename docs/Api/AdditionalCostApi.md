# Reepay\AdditionalCostApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAdditionalCost**](AdditionalCostApi.md#cancelAdditionalCost) | **POST** /v1/additional_cost/{handle}/cancel | Cancel pending additional cost
[**createAdditionalCostJson**](AdditionalCostApi.md#createAdditionalCostJson) | **POST** /v1/additional_cost | Create additional cost
[**getAdditionalCost**](AdditionalCostApi.md#getAdditionalCost) | **GET** /v1/additional_cost/{handle} | Get additional cost
[**getAdditionalCosts**](AdditionalCostApi.md#getAdditionalCosts) | **GET** /v1/additional_cost/subscription/{handle} | Get additional costs for subscription


# **cancelAdditionalCost**
> \Reepay\Model\AdditionalCost cancelAdditionalCost($handle)

Cancel pending additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Additonal cost handle

try {
    $result = $api_instance->cancelAdditionalCost($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->cancelAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Additonal cost handle |

### Return type

[**\Reepay\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAdditionalCostJson**
> \Reepay\Model\AdditionalCost createAdditionalCostJson($body)

Create additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AdditionalCostApi();
$body = new \Reepay\Model\CreateAdditionalCost(); // \Reepay\Model\CreateAdditionalCost | 

try {
    $result = $api_instance->createAdditionalCostJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->createAdditionalCostJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateAdditionalCost**](../Model/\Reepay\Model\CreateAdditionalCost.md)|  | [optional]

### Return type

[**\Reepay\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalCost**
> \Reepay\Model\AdditionalCost getAdditionalCost($handle)

Get additional cost



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Additonal cost handle

try {
    $result = $api_instance->getAdditionalCost($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->getAdditionalCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Additonal cost handle |

### Return type

[**\Reepay\Model\AdditionalCost**](../Model/AdditionalCost.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalCosts**
> \Reepay\Model\AdditionalCost[] getAdditionalCosts($handle)

Get additional costs for subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AdditionalCostApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $api_instance->getAdditionalCosts($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalCostApi->getAdditionalCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\AdditionalCost[]**](../Model/AdditionalCost.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

