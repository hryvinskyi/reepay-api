# Reepay\WebhookApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableWebhooks**](WebhookApi.md#disableWebhooks) | **POST** /v1/webhook/disable | Disable webhooks
[**getWebhook**](WebhookApi.md#getWebhook) | **GET** /v1/webhook/{id} | Get webhooks
[**getWebhookRequests**](WebhookApi.md#getWebhookRequests) | **GET** /v1/webhook/{id}/request | Get webhook requests
[**getWebhooks**](WebhookApi.md#getWebhooks) | **GET** /v1/webhook | Get list of webhooks
[**resendJson**](WebhookApi.md#resendJson) | **POST** /v1/webhook/resend | Re-send webhooks
[**updateWebhooks**](WebhookApi.md#updateWebhooks) | **POST** /v1/webhook/update | Update and resend webhooks


# **disableWebhooks**
> \Reepay\Model\Webhook[] disableWebhooks($body)

Disable webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookDisableRequest(); // \Reepay\Model\WebhookDisableRequest | 

try {
    $result = $api_instance->disableWebhooks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->disableWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookDisableRequest**](../Model/\Reepay\Model\WebhookDisableRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \Reepay\Model\Webhook[] getWebhook($id)

Get webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$id = "id_example"; // string | Webhook id or event id

try {
    $result = $api_instance->getWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook id or event id |

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookRequests**
> \Reepay\Model\WebhookRequest[] getWebhookRequests($id)

Get webhook requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$id = "id_example"; // string | Webhook id

try {
    $result = $api_instance->getWebhookRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook id |

### Return type

[**\Reepay\Model\WebhookRequest[]**](../Model/WebhookRequest.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Reepay\Model\Webhook[] getWebhooks($created_before, $size, $state, $created_after)

Get list of webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$created_before = "2015-06-14T08:12:19.558+00:00"; // string | Get webhooks created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page.
$size = 100; // int | Page size. A maximum of 100 is allowed.
$state = "pending"; // string | Optional state to filter on, one of the following: `pending`, `retrying`, `disabled`, `failed`, `completed`
$created_after = "2010-06-14T08:12:19.558+00:00"; // string | Get webhooks created after this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page.

try {
    $result = $api_instance->getWebhooks($created_before, $size, $state, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_before** | **string**| Get webhooks created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page. |
 **size** | **int**| Page size. A maximum of 100 is allowed. | [optional] [default to 100]
 **state** | **string**| Optional state to filter on, one of the following: &#x60;pending&#x60;, &#x60;retrying&#x60;, &#x60;disabled&#x60;, &#x60;failed&#x60;, &#x60;completed&#x60; | [optional]
 **created_after** | **string**| Get webhooks created after this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page. | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendJson**
> \Reepay\Model\Webhook[] resendJson($body)

Re-send webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookResendRequest(); // \Reepay\Model\WebhookResendRequest | 

try {
    $result = $api_instance->resendJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->resendJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookResendRequest**](../Model/\Reepay\Model\WebhookResendRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhooks**
> \Reepay\Model\Webhook[] updateWebhooks($body)

Update and resend webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\WebhookApi();
$body = new \Reepay\Model\WebhookUpdateRequest(); // \Reepay\Model\WebhookUpdateRequest | 

try {
    $result = $api_instance->updateWebhooks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\WebhookUpdateRequest**](../Model/\Reepay\Model\WebhookUpdateRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

