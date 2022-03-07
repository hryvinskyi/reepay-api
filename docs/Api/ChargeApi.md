# Reepay\ChargeApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCharge**](ChargeApi.md#cancelCharge) | **POST** /v1/charge/{handle}/cancel | Cancel charge
[**createCharge**](ChargeApi.md#createCharge) | **POST** /v1/charge | Create charge
[**deleteCreatedInvoice**](ChargeApi.md#deleteCreatedInvoice) | **DELETE** /v1/charge/{id} | Delete created charge
[**getCharge**](ChargeApi.md#getCharge) | **GET** /v1/charge/{handle} | Get charge
[**getCharges**](ChargeApi.md#getCharges) | **GET** /v1/charge | Get charges
[**prepareCharge**](ChargeApi.md#prepareCharge) | **POST** /v1/charge/prepare | Prepare charge
[**settleCharge**](ChargeApi.md#settleCharge) | **POST** /v1/charge/{handle}/settle | Settle charge


# **cancelCharge**
> \Reepay\Model\Charge cancelCharge($handle)

Cancel charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$handle = "handle_example"; // string | Charge handle

try {
    $result = $api_instance->cancelCharge($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->cancelCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Charge handle |

### Return type

[**\Reepay\Model\Charge**](../Model/Charge.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCharge**
> \Reepay\Model\Charge createCharge($body)

Create charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$body = new \Reepay\Model\CreateCharge(); // \Reepay\Model\CreateCharge | 

try {
    $result = $api_instance->createCharge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->createCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCharge**](../Model/\Reepay\Model\CreateCharge.md)|  | [optional]

### Return type

[**\Reepay\Model\Charge**](../Model/Charge.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCreatedInvoice**
> deleteCreatedInvoice($id)

Delete created charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $api_instance->deleteCreatedInvoice($id);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->deleteCreatedInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharge**
> \Reepay\Model\Charge getCharge($handle)

Get charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$handle = "handle_example"; // string | Charge handle

try {
    $result = $api_instance->getCharge($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Charge handle |

### Return type

[**\Reepay\Model\Charge**](../Model/Charge.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharges**
> \Reepay\Model\ChargeSearch getCharges($page, $size, $search, $created_from, $created_to, $created_interval)

Get charges



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination
$created_from = "2019-12-01"; // string | Limit by created from (inclusive). Recommended to speed up queries. Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` or `yyyy-MM-ddTHH:mm:ss`
$created_to = "2020-01-01"; // string | Limit by created to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` or `yyyy-MM-ddTHH:mm:ss`
$created_interval = "P1W"; // string | Limit by created from now and interval back in time. E.g. one week. Will take precedence over the other created limiters. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations

try {
    $result = $api_instance->getCharges($page, $size, $search, $created_from, $created_to, $created_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to get | [optional] [default to 1]
 **size** | **int**| Page size to use (default 20) | [optional] [default to 20]
 **search** | **string**| Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination | [optional]
 **created_from** | **string**| Limit by created from (inclusive). Recommended to speed up queries. Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **created_to** | **string**| Limit by created to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]
 **created_interval** | **string**| Limit by created from now and interval back in time. E.g. one week. Will take precedence over the other created limiters. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]

### Return type

[**\Reepay\Model\ChargeSearch**](../Model/ChargeSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepareCharge**
> \Reepay\Model\Charge prepareCharge($body)

Prepare charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$body = new \Reepay\Model\PrepareChargeDto(); // \Reepay\Model\PrepareChargeDto | 

try {
    $result = $api_instance->prepareCharge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->prepareCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PrepareChargeDto**](../Model/\Reepay\Model\PrepareChargeDto.md)|  | [optional]

### Return type

[**\Reepay\Model\Charge**](../Model/Charge.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settleCharge**
> \Reepay\Model\Charge settleCharge($handle, $body)

Settle charge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ChargeApi();
$handle = "handle_example"; // string | Charge handle
$body = new \Reepay\Model\SettleCharge(); // \Reepay\Model\SettleCharge | 

try {
    $result = $api_instance->settleCharge($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->settleCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Charge handle |
 **body** | [**\Reepay\Model\SettleCharge**](../Model/\Reepay\Model\SettleCharge.md)|  | [optional]

### Return type

[**\Reepay\Model\Charge**](../Model/Charge.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

