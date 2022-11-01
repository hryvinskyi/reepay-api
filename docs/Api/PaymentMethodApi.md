# Reepay\PaymentMethodApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePaymentMethodV2**](PaymentMethodApi.md#activatePaymentMethodV2) | **POST** /v1/payment_method/{id}/activate | Activate payment method
[**addPaymentMethodV2**](PaymentMethodApi.md#addPaymentMethodV2) | **POST** /v1/payment_method | Add payment method
[**cardVerification**](PaymentMethodApi.md#cardVerification) | **POST** /v1/payment_method/{id}/card/verify | Verify card validity
[**copyCardPaymentMethodV2**](PaymentMethodApi.md#copyCardPaymentMethodV2) | **POST** /v1/payment_method/{id}/card_copy | Copy card to customer
[**deletePaymentMethodV2**](PaymentMethodApi.md#deletePaymentMethodV2) | **DELETE** /v1/payment_method/{id} | Delete payment method
[**getPaymentMethodDetailsV2**](PaymentMethodApi.md#getPaymentMethodDetailsV2) | **GET** /v1/payment_method/{id}/details | Get payment method details
[**getPaymentMethodV2**](PaymentMethodApi.md#getPaymentMethodV2) | **GET** /v1/payment_method/{id} | Get payment method
[**inactivatePaymentMethodV2**](PaymentMethodApi.md#inactivatePaymentMethodV2) | **POST** /v1/payment_method/{id}/inactivate | Inactivate payment method
[**moveCardPaymentMethodV2**](PaymentMethodApi.md#moveCardPaymentMethodV2) | **POST** /v1/payment_method/{id}/card_move | Move card to other agreement
[**reactivateCardV2**](PaymentMethodApi.md#reactivateCardV2) | **POST** /v1/payment_method/{id}/card_reactivate | Reactivate failed card


# **activatePaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 activatePaymentMethodV2($id)

Activate payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Payment method id

try {
    $result = $apiInstance->activatePaymentMethodV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->activatePaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 addPaymentMethodV2($body)

Add payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\AddPaymentMethod(); // \Reepay\Model\AddPaymentMethod | 

try {
    $result = $apiInstance->addPaymentMethodV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->addPaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\AddPaymentMethod**](../Model/AddPaymentMethod.md)|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardVerification**
> \Reepay\Model\CardVerification cardVerification($id, $body)

Verify card validity



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Card id
$body = new \Reepay\Model\CardVerificationRequest(); // \Reepay\Model\CardVerificationRequest | 

try {
    $result = $apiInstance->cardVerification($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->cardVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card id |
 **body** | [**\Reepay\Model\CardVerificationRequest**](../Model/CardVerificationRequest.md)|  | [optional]

### Return type

[**\Reepay\Model\CardVerification**](../Model/CardVerification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyCardPaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 copyCardPaymentMethodV2($id, $body)

Copy card to customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Card id
$body = new \Reepay\Model\CopyCard(); // \Reepay\Model\CopyCard | 

try {
    $result = $apiInstance->copyCardPaymentMethodV2($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->copyCardPaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card id |
 **body** | [**\Reepay\Model\CopyCard**](../Model/CopyCard.md)|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 deletePaymentMethodV2($id)

Delete payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Payment method id

try {
    $result = $apiInstance->deletePaymentMethodV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->deletePaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethodDetailsV2**
> map[string,object] getPaymentMethodDetailsV2($id)

Get payment method details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Payment method id

try {
    $result = $apiInstance->getPaymentMethodDetailsV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->getPaymentMethodDetailsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment method id |

### Return type

**map[string,object]**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 getPaymentMethodV2($id)

Get payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Payment method id

try {
    $result = $apiInstance->getPaymentMethodV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->getPaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inactivatePaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 inactivatePaymentMethodV2($id)

Inactivate payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Payment method id

try {
    $result = $apiInstance->inactivatePaymentMethodV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->inactivatePaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveCardPaymentMethodV2**
> \Reepay\Model\PaymentMethodV2 moveCardPaymentMethodV2($id, $body)

Move card to other agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Card id
$body = new \Reepay\Model\MoveCard(); // \Reepay\Model\MoveCard | 

try {
    $result = $apiInstance->moveCardPaymentMethodV2($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->moveCardPaymentMethodV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card id |
 **body** | [**\Reepay\Model\MoveCard**](../Model/MoveCard.md)|  | [optional]

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateCardV2**
> \Reepay\Model\PaymentMethodV2 reactivateCardV2($id)

Reactivate failed card



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Card id

try {
    $result = $apiInstance->reactivateCardV2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->reactivateCardV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card id |

### Return type

[**\Reepay\Model\PaymentMethodV2**](../Model/PaymentMethodV2.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

