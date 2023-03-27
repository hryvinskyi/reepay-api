# Reepay\SubscriptionApi

All URIs are relative to *https://api.reepay.com/*

 Method                                                                                            | HTTP request                                                | Description                                                                                                                                 
---------------------------------------------------------------------------------------------------|-------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------
 [**activate**](SubscriptionApi.md#activate)                                                       | **POST** /v1/subscription/{handle}/activate                 | Activate pending subscription                                                                                                               
 [**cancelSubscription**](SubscriptionApi.md#cancelsubscription)                                   | **POST** /v1/subscription/{handle}/cancel                   | Cancel subscription                                                                                                                         
 [**changeNextPeriodStartJson**](SubscriptionApi.md#changenextperiodstartjson)                     | **POST** /v1/subscription/{handle}/change_next_period_start | Change next renewal date                                                                                                                    
 [**changeSubscription**](SubscriptionApi.md#changesubscription)                                   | **PUT** /v1/subscription/{handle}                           | Change subscription                                                                                                                         
 [**createSubscriptionDiscount**](SubscriptionApi.md#createsubscriptiondiscount)                   | **POST** /v1/subscription/{handle}/discount                 | Add subscription discount                                                                                                                   
 [**createSubscriptionInvoice**](SubscriptionApi.md#createsubscriptioninvoice)                     | **POST** /v1/subscription/{handle}/invoice                  | Create invoice ondemand for subscription                                                                                                    
 [**createSubscriptionJson**](SubscriptionApi.md#createsubscriptionjson)                           | **POST** /v1/subscription                                   | Create subscription                                                                                                                         
 [**deleteMetadata4**](SubscriptionApi.md#deletemetadata4)                                         | **DELETE** /v1/subscription/{handle}/metadata               | Delete metadata                                                                                                                             
 [**deletePending**](SubscriptionApi.md#deletepending)                                             | **DELETE** /v1/subscription/{handle}                        | Delete pending subscription. A pending subscription can only be deleted if no transactions has been made for the potential initial invoice. 
 [**deleteSubscriptionDiscount**](SubscriptionApi.md#deletesubscriptiondiscount)                   | **DELETE** /v1/subscription/{handle}/discount/{sdHandle}    | Delete subscription discount                                                                                                                
 [**expire**](SubscriptionApi.md#expire)                                                           | **POST** /v1/subscription/{handle}/expire                   | Expire subscription                                                                                                                         
 [**getMetadata4**](SubscriptionApi.md#getmetadata4)                                               | **GET** /v1/subscription/{handle}/metadata                  | Get metadata                                                                                                                                
 [**getPayableInvoice**](SubscriptionApi.md#getpayableinvoice)                                     | **GET** /v1/subscription/{handle}/invoice                   | Get most relevant payable invoice for subscription                                                                                          
 [**getSubscription**](SubscriptionApi.md#getsubscription)                                         | **GET** /v1/subscription/{handle}                           | Get subscription                                                                                                                            
 [**getSubscriptionAddOn**](SubscriptionApi.md#getsubscriptionaddon)                               | **GET** /v1/subscription/{handle}/add_on/{saHandle}         | Get subscription add-on                                                                                                                     
 [**getSubscriptionAddOns**](SubscriptionApi.md#getsubscriptionaddons)                             | **GET** /v1/subscription/{handle}/add_on                    | Get subscription add-ons                                                                                                                    
 [**getSubscriptionDiscount**](SubscriptionApi.md#getsubscriptiondiscount)                         | **GET** /v1/subscription/{handle}/discount/{sdHandle}       | Get subscription discount                                                                                                                   
 [**getSubscriptionDiscounts**](SubscriptionApi.md#getsubscriptiondiscounts)                       | **GET** /v1/subscription/{handle}/discount                  | Get subscription discounts                                                                                                                  
 [**getSubscriptionPaymentMethod**](SubscriptionApi.md#getsubscriptionpaymentmethod)               | **GET** /v1/subscription/{handle}/pm                        | Get payment method                                                                                                                          
 [**getSubscriptionPeriodBalance**](SubscriptionApi.md#getsubscriptionperiodbalance)               | **GET** /v1/subscription/{handle}/period_balance            | Get the period balance for subscription                                                                                                     
 [**intervalAmount**](SubscriptionApi.md#intervalamount)                                           | **GET** /v1/subscription/{handle}/interval_amount           | Calculate interval amount                                                                                                                   
 [**onHold**](SubscriptionApi.md#onhold)                                                           | **POST** /v1/subscription/{handle}/on_hold                  | Subscription on hold                                                                                                                        
 [**prepareSubscription**](SubscriptionApi.md#preparesubscription)                                 | **POST** /v1/subscription/prepare                           | Prepare pending subscription                                                                                                                
 [**previewChangeSubscription**](SubscriptionApi.md#previewchangesubscription)                     | **PUT** /v1/subscription/{handle}/preview                   | Preview change subscription                                                                                                                 
 [**previewSubscription**](SubscriptionApi.md#previewsubscription)                                 | **POST** /v1/subscription/preview                           | Preview subscription                                                                                                                        
 [**reactivateSubscription**](SubscriptionApi.md#reactivatesubscription)                           | **POST** /v1/subscription/{handle}/reactivate               | Reactivate subscription on hold                                                                                                             
 [**redeemCouponCode**](SubscriptionApi.md#redeemcouponcode)                                       | **POST** /v1/subscription/{handle}/coupon                   | Redeem coupon code for subscription                                                                                                         
 [**removeAllSubscriptionPaymentMethods**](SubscriptionApi.md#removeallsubscriptionpaymentmethods) | **DELETE** /v1/subscription/{handle}/pm                     | Remove all payment methods                                                                                                                  
 [**removeSubscriptionPaymentMethod**](SubscriptionApi.md#removesubscriptionpaymentmethod)         | **DELETE** /v1/subscription/{handle}/pm/{method_id}         | Remove payment method                                                                                                                       
 [**setSubscriptionPaymentMethod**](SubscriptionApi.md#setsubscriptionpaymentmethod)               | **POST** /v1/subscription/{handle}/pm                       | Set payment method                                                                                                                          
 [**uncancel**](SubscriptionApi.md#uncancel)                                                       | **POST** /v1/subscription/{handle}/uncancel                 | Uncancel subscription                                                                                                                       
 [**updateMetadata4**](SubscriptionApi.md#updatemetadata4)                                         | **PUT** /v1/subscription/{handle}/metadata                  | Create or update metadata                                                                                                                   

# **activate**
> \Reepay\Model\Subscription activate($handle, $body)

Activate pending subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ActivateSubscription(); // \Reepay\Model\ActivateSubscription | 

try {
    $result = $apiInstance->activate($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->activate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ActivateSubscription**](../Model/ActivateSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSubscription**
> \Reepay\Model\Subscription cancelSubscription($handle, $body)

Cancel subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CancelSubscription(); // \Reepay\Model\CancelSubscription | 

try {
    $result = $apiInstance->cancelSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CancelSubscription**](../Model/CancelSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeNextPeriodStartJson**
> \Reepay\Model\Subscription changeNextPeriodStartJson($handle, $body)

Change next renewal date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ChangeNextPeriodStart(); // \Reepay\Model\ChangeNextPeriodStart | 

try {
    $result = $apiInstance->changeNextPeriodStartJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->changeNextPeriodStartJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ChangeNextPeriodStart**](../Model/ChangeNextPeriodStart.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeSubscription**
> \Reepay\Model\Subscription changeSubscription($handle, $body)

Change subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ChangeSubscription(); // \Reepay\Model\ChangeSubscription | 

try {
    $result = $apiInstance->changeSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->changeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ChangeSubscription**](../Model/ChangeSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount createSubscriptionDiscount($handle, $body)

Add subscription discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CreateSubscriptionDiscount(); // \Reepay\Model\CreateSubscriptionDiscount | 

try {
    $result = $apiInstance->createSubscriptionDiscount($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CreateSubscriptionDiscount**](../Model/CreateSubscriptionDiscount.md)|  | [optional]

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionInvoice**
> \Reepay\Model\Invoice createSubscriptionInvoice($handle, $body)

Create invoice ondemand for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\CreateSubscriptionInvoice(); // \Reepay\Model\CreateSubscriptionInvoice | 

try {
    $result = $apiInstance->createSubscriptionInvoice($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\CreateSubscriptionInvoice**](../Model/CreateSubscriptionInvoice.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptionJson**
> \Reepay\Model\Subscription createSubscriptionJson($body)

Create subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateSubscription(); // \Reepay\Model\CreateSubscription | 

try {
    $result = $apiInstance->createSubscriptionJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscriptionJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSubscription**](../Model/CreateSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata4**
> deleteMetadata4($handle)

Delete metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle

try {
    $apiInstance->deleteMetadata4($handle);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteMetadata4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Resource handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePending**
> deletePending($handle)

Delete pending subscription. A pending subscription can only be deleted if no transactions has been made for the potential initial invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $apiInstance->deletePending($handle);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deletePending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount deleteSubscriptionDiscount($handle, $sdHandle)

Delete subscription discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$sdHandle = "sdHandle_example"; // string | Subscription discount handle

try {
    $result = $apiInstance->deleteSubscriptionDiscount($handle, $sdHandle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **sdHandle** | **string**| Subscription discount handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expire**
> \Reepay\Model\Subscription expire($handle, $body)

Expire subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ExpireSubscription(); // \Reepay\Model\ExpireSubscription | 

try {
    $result = $apiInstance->expire($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->expire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ExpireSubscription**](../Model/ExpireSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata4**
> map[string,object] getMetadata4($handle)

Get metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle

try {
    $result = $apiInstance->getMetadata4($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getMetadata4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Resource handle |

### Return type

**map[string,object]**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayableInvoice**
> \Reepay\Model\Invoice getPayableInvoice($handle)

Get most relevant payable invoice for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getPayableInvoice($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getPayableInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \Reepay\Model\Subscription getSubscription($handle)

Get subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscription($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionAddOn**
> \Reepay\Model\SubscriptionAddOn getSubscriptionAddOn($handle, $saHandle)

Get subscription add-on

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$saHandle = "saHandle_example"; // string | Subscription add-on handle

try {
    $result = $apiInstance->getSubscriptionAddOn($handle, $saHandle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **saHandle** | **string**| Subscription add-on handle |

### Return type

[**\Reepay\Model\SubscriptionAddOn**](../Model/SubscriptionAddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionAddOns**
> \Reepay\Model\SubscriptionAddOn[] getSubscriptionAddOns($handle)

Get subscription add-ons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionAddOns($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionAddOns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\SubscriptionAddOn[]**](../Model/SubscriptionAddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionDiscount**
> \Reepay\Model\SubscriptionDiscount getSubscriptionDiscount($handle, $sdHandle)

Get subscription discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$sdHandle = "sdHandle_example"; // string | Subscription discount handle

try {
    $result = $apiInstance->getSubscriptionDiscount($handle, $sdHandle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **sdHandle** | **string**| Subscription discount handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount**](../Model/SubscriptionDiscount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionDiscounts**
> \Reepay\Model\SubscriptionDiscount[] getSubscriptionDiscounts($handle)

Get subscription discounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionDiscounts($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\SubscriptionDiscount[]**](../Model/SubscriptionDiscount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionPaymentMethod**
> \Reepay\Model\PaymentMethodV2[] getSubscriptionPaymentMethod($handle)

Get payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->getSubscriptionPaymentMethod($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\PaymentMethodV2[]**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionPeriodBalance**
> \Reepay\Model\SubscriptionPeriodBalance getSubscriptionPeriodBalance($handle, $date)

Get the period balance for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$date = "date_example"; // string | Optional period date (default now) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`

try {
    $result = $apiInstance->getSubscriptionPeriodBalance($handle, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionPeriodBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **date** | **string**| Optional period date (default now) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60; and &#x60;yyyy-MM-ddTHH:mm:ss&#x60; | [optional]

### Return type

[**\Reepay\Model\SubscriptionPeriodBalance**](../Model/SubscriptionPeriodBalance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intervalAmount**
> \Reepay\Model\IntervalAmount intervalAmount($handle, $from, $to)

Calculate interval amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$from = "from_example"; // string | From date on the form yyyy-MM-dd
$to = "to_example"; // string | To date on the form yyyy-MM-dd

try {
    $result = $apiInstance->intervalAmount($handle, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->intervalAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **from** | **string**| From date on the form yyyy-MM-dd |
 **to** | **string**| To date on the form yyyy-MM-dd |

### Return type

[**\Reepay\Model\IntervalAmount**](../Model/IntervalAmount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onHold**
> \Reepay\Model\Subscription onHold($handle, $body)

Subscription on hold

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\OnHoldSubscription(); // \Reepay\Model\OnHoldSubscription | 

try {
    $result = $apiInstance->onHold($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->onHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\OnHoldSubscription**](../Model/OnHoldSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepareSubscription**
> \Reepay\Model\PreparedSubscription prepareSubscription($body)

Prepare pending subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreatePreparedSubscription(); // \Reepay\Model\CreatePreparedSubscription | 

try {
    $result = $apiInstance->prepareSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->prepareSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreatePreparedSubscription**](../Model/CreatePreparedSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\PreparedSubscription**](../Model/PreparedSubscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewChangeSubscription**
> \Reepay\Model\ChangedSubscription previewChangeSubscription($handle, $body)

Preview change subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ChangeSubscription(); // \Reepay\Model\ChangeSubscription | 

try {
    $result = $apiInstance->previewChangeSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->previewChangeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ChangeSubscription**](../Model/ChangeSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\ChangedSubscription**](../Model/ChangedSubscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewSubscription**
> \Reepay\Model\PreparedSubscription previewSubscription($body)

Preview subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreatePreparedSubscription(); // \Reepay\Model\CreatePreparedSubscription | 

try {
    $result = $apiInstance->previewSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->previewSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreatePreparedSubscription**](../Model/CreatePreparedSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\PreparedSubscription**](../Model/PreparedSubscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateSubscription**
> \Reepay\Model\Subscription reactivateSubscription($handle, $body)

Reactivate subscription on hold

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\ReactivateSubscription(); // \Reepay\Model\ReactivateSubscription | 

try {
    $result = $apiInstance->reactivateSubscription($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->reactivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\ReactivateSubscription**](../Model/ReactivateSubscription.md)|  | [optional]

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redeemCouponCode**
> \Reepay\Model\CouponRedemption redeemCouponCode($handle, $body)

Redeem coupon code for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\RedeemCouponCode(); // \Reepay\Model\RedeemCouponCode | 

try {
    $result = $apiInstance->redeemCouponCode($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->redeemCouponCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\RedeemCouponCode**](../Model/RedeemCouponCode.md)|  | [optional]

### Return type

[**\Reepay\Model\CouponRedemption**](../Model/CouponRedemption.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAllSubscriptionPaymentMethods**
> \Reepay\Model\PaymentMethodV2[] removeAllSubscriptionPaymentMethods($handle)

Remove all payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->removeAllSubscriptionPaymentMethods($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->removeAllSubscriptionPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\PaymentMethodV2[]**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSubscriptionPaymentMethod**
> \Reepay\Model\PaymentMethodV2[] removeSubscriptionPaymentMethod($handle, $methodId)

Remove payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$methodId = "methodId_example"; // string | Payment method id

try {
    $result = $apiInstance->removeSubscriptionPaymentMethod($handle, $methodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->removeSubscriptionPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **methodId** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethodV2[]**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSubscriptionPaymentMethod**
> \Reepay\Model\PaymentMethodV2[] setSubscriptionPaymentMethod($handle, $body)

Set payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\SetPaymentMethod(); // \Reepay\Model\SetPaymentMethod | 

try {
    $result = $apiInstance->setSubscriptionPaymentMethod($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->setSubscriptionPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\SetPaymentMethod**](../Model/SetPaymentMethod.md)|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethodV2[]**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uncancel**
> \Reepay\Model\Subscription uncancel($handle)

Uncancel subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $apiInstance->uncancel($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->uncancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Subscription**](../Model/Subscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata4**
> map[string,object] updateMetadata4($handle, $body)

Create or update metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle
$body = new \Reepay\Model\map(); // map[string,object] | 

try {
    $result = $apiInstance->updateMetadata4($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->updateMetadata4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name       | Type                                      | Description     | Notes      
------------|-------------------------------------------|-----------------|------------
 **handle** | **string**                                | Resource handle |
 **body**   | [**map[string,object]**](../Model/map.md) |                 | [optional] 

### Return type

**map[string,object]**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: */*
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

