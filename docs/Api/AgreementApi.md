# Reepay\AgreementApi

All URIs are relative to *https://api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMpsAgreement**](AgreementApi.md#activateMpsAgreement) | **POST** /v1/agreement/{id}/mps_activate | Activate mps agreement by selecting provider
[**createAnydayAgreement**](AgreementApi.md#createAnydayAgreement) | **POST** /v1/agreement/anyday | Create Anyday agreement
[**createApplepayAgreement**](AgreementApi.md#createApplepayAgreement) | **POST** /v1/agreement/applepay | Create ApplePay agreement
[**createCardGatewayAgreement**](AgreementApi.md#createCardGatewayAgreement) | **POST** /v1/agreement/card_gateway | Create card gateway agreement
[**createGooglepayAgreement**](AgreementApi.md#createGooglepayAgreement) | **POST** /v1/agreement/googlepay | Create GooglePay agreement
[**createKlarnaAgreement**](AgreementApi.md#createKlarnaAgreement) | **POST** /v1/agreement/klarna | Create Klarna agreement
[**createMpoAgreement**](AgreementApi.md#createMpoAgreement) | **POST** /v1/agreement/mpo | Create MobilePay Online agreement
[**createMpsAgreement**](AgreementApi.md#createMpsAgreement) | **POST** /v1/agreement/mps | Create pending MobilePay Subscriptions agreement
[**createPaypalAgreement**](AgreementApi.md#createPaypalAgreement) | **POST** /v1/agreement/paypal | Create PayPal agreement
[**createPproAgreement**](AgreementApi.md#createPproAgreement) | **POST** /v1/agreement/ppro | Create ppro agreement
[**createResursAgreement**](AgreementApi.md#createResursAgreement) | **POST** /v1/agreement/resurs | Create Resurs agreement
[**createSwishAgreement**](AgreementApi.md#createSwishAgreement) | **POST** /v1/agreement/swish | Create Swish agreement
[**createViabillAgreement**](AgreementApi.md#createViabillAgreement) | **POST** /v1/agreement/viabill | Create ViaBill agreement
[**createVippsAgreement**](AgreementApi.md#createVippsAgreement) | **POST** /v1/agreement/vipps | Create Vipps agreement
[**createVippsRecurringAgreement**](AgreementApi.md#createVippsRecurringAgreement) | **POST** /v1/agreement/vipps_recurring | Create Vipps Recurring agreement
[**deleteGatewayAgreement**](AgreementApi.md#deleteGatewayAgreement) | **DELETE** /v1/agreement/{id} | Delete gateway agreement
[**disableGatewayAgreement**](AgreementApi.md#disableGatewayAgreement) | **POST** /v1/agreement/{id}/disable | Disable gateway agreement
[**enableGatewayAgreement**](AgreementApi.md#enableGatewayAgreement) | **POST** /v1/agreement/{id}/enable | Enable gateway agreement
[**getCardGatewayAgreements**](AgreementApi.md#getCardGatewayAgreements) | **GET** /v1/agreement/card_gateway | Get all card gateway agreements
[**getGatewayAgreement**](AgreementApi.md#getGatewayAgreement) | **GET** /v1/agreement/{id} | Get gateway agreement
[**getGatewayAgreements**](AgreementApi.md#getGatewayAgreements) | **GET** /v1/agreement | Get all agreements
[**updateAnydayAgreement**](AgreementApi.md#updateAnydayAgreement) | **PUT** /v1/agreement/anyday/{id} | Update Anyday agreement
[**updateApplepayAgreement**](AgreementApi.md#updateApplepayAgreement) | **PUT** /v1/agreement/applepay/{id} | Update ApplePay agreement
[**updateCardGatewayAgreement**](AgreementApi.md#updateCardGatewayAgreement) | **PUT** /v1/agreement/card_gateway/{id} | Update card gateway agreement
[**updateGooglepayAgreement**](AgreementApi.md#updateGooglepayAgreement) | **PUT** /v1/agreement/googlepay/{id} | Update GooglePay agreement
[**updateKlarnaAgreement**](AgreementApi.md#updateKlarnaAgreement) | **PUT** /v1/agreement/klarna/{id} | Update Klarna agreement
[**updateMpoAgreement**](AgreementApi.md#updateMpoAgreement) | **PUT** /v1/agreement/mpo/{id} | Update MobilePay Online agreement
[**updateMpsAgreement**](AgreementApi.md#updateMpsAgreement) | **PUT** /v1/agreement/mps/{id} | Update mps agreement
[**updatePaypalAgreement**](AgreementApi.md#updatePaypalAgreement) | **PUT** /v1/agreement/paypal/{id} | Update PayPal agreement
[**updatePproAgreement**](AgreementApi.md#updatePproAgreement) | **PUT** /v1/agreement/ppro/{id} | Update ppro agreement
[**updateResursAgreement**](AgreementApi.md#updateResursAgreement) | **PUT** /v1/agreement/resurs/{id} | Update Resurs agreement
[**updateSwishAgreement**](AgreementApi.md#updateSwishAgreement) | **PUT** /v1/agreement/swish/{id} | Update Swish agreement
[**updateViabillAgreement**](AgreementApi.md#updateViabillAgreement) | **PUT** /v1/agreement/viabill/{id} | Update ViaBill agreement
[**updateVippsAgreement**](AgreementApi.md#updateVippsAgreement) | **PUT** /v1/agreement/vipps/{id} | Update Vipps agreement
[**updateVippsRecurringAgreement**](AgreementApi.md#updateVippsRecurringAgreement) | **PUT** /v1/agreement/vipps_recurring/{id} | Update Vipps Recurring agreement


# **activateMpsAgreement**
> \Reepay\Model\GatewayAgreement activateMpsAgreement($id, $body)

Activate mps agreement by selecting provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\ActivateMpsAgreement(); // \Reepay\Model\ActivateMpsAgreement | 

try {
    $result = $apiInstance->activateMpsAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->activateMpsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\ActivateMpsAgreement**](../Model/ActivateMpsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnydayAgreement**
> \Reepay\Model\GatewayAgreement createAnydayAgreement($body)

Create Anyday agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\AnydayAgreement(); // \Reepay\Model\AnydayAgreement | 

try {
    $result = $apiInstance->createAnydayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createAnydayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\AnydayAgreement**](../Model/AnydayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApplepayAgreement**
> \Reepay\Model\GatewayAgreement createApplepayAgreement($body)

Create ApplePay agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\ApplepayAgreement(); // \Reepay\Model\ApplepayAgreement | 

try {
    $result = $apiInstance->createApplepayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createApplepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ApplepayAgreement**](../Model/ApplepayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCardGatewayAgreement**
> \Reepay\Model\GatewayAgreement createCardGatewayAgreement($body)

Create card gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateCardGatewayAgreement(); // \Reepay\Model\CreateCardGatewayAgreement | 

try {
    $result = $apiInstance->createCardGatewayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCardGatewayAgreement**](../Model/CreateCardGatewayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGooglepayAgreement**
> \Reepay\Model\GatewayAgreement createGooglepayAgreement($body)

Create GooglePay agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\GooglepayAgreement(); // \Reepay\Model\GooglepayAgreement | 

try {
    $result = $apiInstance->createGooglepayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createGooglepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\GooglepayAgreement**](../Model/GooglepayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKlarnaAgreement**
> \Reepay\Model\GatewayAgreement createKlarnaAgreement($body)

Create Klarna agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\KlarnaAgreement(); // \Reepay\Model\KlarnaAgreement | 

try {
    $result = $apiInstance->createKlarnaAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createKlarnaAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\KlarnaAgreement**](../Model/KlarnaAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMpoAgreement**
> \Reepay\Model\GatewayAgreement createMpoAgreement($body)

Create MobilePay Online agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\MpoAgreement(); // \Reepay\Model\MpoAgreement | 

try {
    $result = $apiInstance->createMpoAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createMpoAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\MpoAgreement**](../Model/MpoAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMpsAgreement**
> \Reepay\Model\GatewayAgreement createMpsAgreement($body)

Create pending MobilePay Subscriptions agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateMpsAgreement(); // \Reepay\Model\CreateMpsAgreement | 

try {
    $result = $apiInstance->createMpsAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createMpsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateMpsAgreement**](../Model/CreateMpsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaypalAgreement**
> \Reepay\Model\GatewayAgreement createPaypalAgreement($body)

Create PayPal agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\PaypalAgreement(); // \Reepay\Model\PaypalAgreement | 

try {
    $result = $apiInstance->createPaypalAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createPaypalAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PaypalAgreement**](../Model/PaypalAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPproAgreement**
> \Reepay\Model\GatewayAgreement createPproAgreement($body)

Create ppro agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\PproAgreement(); // \Reepay\Model\PproAgreement | 

try {
    $result = $apiInstance->createPproAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createPproAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PproAgreement**](../Model/PproAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResursAgreement**
> \Reepay\Model\GatewayAgreement createResursAgreement($body)

Create Resurs agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\ResursAgreement(); // \Reepay\Model\ResursAgreement | 

try {
    $result = $apiInstance->createResursAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createResursAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ResursAgreement**](../Model/ResursAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSwishAgreement**
> \Reepay\Model\GatewayAgreement createSwishAgreement($body)

Create Swish agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\SwishAgreement(); // \Reepay\Model\SwishAgreement | 

try {
    $result = $apiInstance->createSwishAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createSwishAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\SwishAgreement**](../Model/SwishAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createViabillAgreement**
> \Reepay\Model\GatewayAgreement createViabillAgreement($body)

Create ViaBill agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\ViabillAgreement(); // \Reepay\Model\ViabillAgreement | 

try {
    $result = $apiInstance->createViabillAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createViabillAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ViabillAgreement**](../Model/ViabillAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVippsAgreement**
> \Reepay\Model\GatewayAgreement createVippsAgreement($body)

Create Vipps agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\VippsAgreement(); // \Reepay\Model\VippsAgreement | 

try {
    $result = $apiInstance->createVippsAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createVippsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\VippsAgreement**](../Model/VippsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVippsRecurringAgreement**
> \Reepay\Model\GatewayAgreement createVippsRecurringAgreement($body)

Create Vipps Recurring agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\VippsRecurringAgreement(); // \Reepay\Model\VippsRecurringAgreement | 

try {
    $result = $apiInstance->createVippsRecurringAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createVippsRecurringAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\VippsRecurringAgreement**](../Model/VippsRecurringAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGatewayAgreement**
> \Reepay\Model\GatewayAgreement deleteGatewayAgreement($id)

Delete gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->deleteGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->deleteGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableGatewayAgreement**
> \Reepay\Model\GatewayAgreement disableGatewayAgreement($id)

Disable gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->disableGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->disableGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableGatewayAgreement**
> \Reepay\Model\GatewayAgreement enableGatewayAgreement($id)

Enable gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->enableGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->enableGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardGatewayAgreements**
> \Reepay\Model\GatewayAgreement[] getCardGatewayAgreements($onlyActive, $nonDeleted)

Get all card gateway agreements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$onlyActive = false; // bool | Get only active
$nonDeleted = false; // bool | Get only non-deleted

try {
    $result = $apiInstance->getCardGatewayAgreements($onlyActive, $nonDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getCardGatewayAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **onlyActive** | **bool**| Get only active | [optional] [default to false]
 **nonDeleted** | **bool**| Get only non-deleted | [optional] [default to false]

### Return type

[**\Reepay\Model\GatewayAgreement[]**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGatewayAgreement**
> \Reepay\Model\GatewayAgreement getGatewayAgreement($id)

Get gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id

try {
    $result = $apiInstance->getGatewayAgreement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGatewayAgreements**
> \Reepay\Model\GatewayAgreement[] getGatewayAgreements($onlyActive, $nonDeleted)

Get all agreements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$onlyActive = false; // bool | Get only active
$nonDeleted = false; // bool | Get only non-deleted

try {
    $result = $apiInstance->getGatewayAgreements($onlyActive, $nonDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getGatewayAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **onlyActive** | **bool**| Get only active | [optional] [default to false]
 **nonDeleted** | **bool**| Get only non-deleted | [optional] [default to false]

### Return type

[**\Reepay\Model\GatewayAgreement[]**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAnydayAgreement**
> \Reepay\Model\GatewayAgreement updateAnydayAgreement($id, $body)

Update Anyday agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\AnydayAgreement(); // \Reepay\Model\AnydayAgreement | 

try {
    $result = $apiInstance->updateAnydayAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateAnydayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\AnydayAgreement**](../Model/AnydayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApplepayAgreement**
> \Reepay\Model\GatewayAgreement updateApplepayAgreement($id, $body)

Update ApplePay agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\ApplepayAgreement(); // \Reepay\Model\ApplepayAgreement | 

try {
    $result = $apiInstance->updateApplepayAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateApplepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\ApplepayAgreement**](../Model/ApplepayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCardGatewayAgreement**
> \Reepay\Model\GatewayAgreement updateCardGatewayAgreement($id, $body)

Update card gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateCardGatewayAgreement(); // \Reepay\Model\UpdateCardGatewayAgreement | 

try {
    $result = $apiInstance->updateCardGatewayAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateCardGatewayAgreement**](../Model/UpdateCardGatewayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGooglepayAgreement**
> \Reepay\Model\GatewayAgreement updateGooglepayAgreement($id, $body)

Update GooglePay agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateGooglepayAgreement(); // \Reepay\Model\UpdateGooglepayAgreement | 

try {
    $result = $apiInstance->updateGooglepayAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateGooglepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateGooglepayAgreement**](../Model/UpdateGooglepayAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKlarnaAgreement**
> \Reepay\Model\GatewayAgreement updateKlarnaAgreement($id, $body)

Update Klarna agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateKlarnaAgreement(); // \Reepay\Model\UpdateKlarnaAgreement | 

try {
    $result = $apiInstance->updateKlarnaAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateKlarnaAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateKlarnaAgreement**](../Model/UpdateKlarnaAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMpoAgreement**
> \Reepay\Model\GatewayAgreement updateMpoAgreement($id, $body)

Update MobilePay Online agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\MpoAgreement(); // \Reepay\Model\MpoAgreement | 

try {
    $result = $apiInstance->updateMpoAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateMpoAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\MpoAgreement**](../Model/MpoAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMpsAgreement**
> \Reepay\Model\GatewayAgreement updateMpsAgreement($id, $body)

Update mps agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateMpsAgreement(); // \Reepay\Model\UpdateMpsAgreement | 

try {
    $result = $apiInstance->updateMpsAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateMpsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateMpsAgreement**](../Model/UpdateMpsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaypalAgreement**
> \Reepay\Model\GatewayAgreement updatePaypalAgreement($id, $body)

Update PayPal agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\PaypalAgreement(); // \Reepay\Model\PaypalAgreement | 

try {
    $result = $apiInstance->updatePaypalAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updatePaypalAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\PaypalAgreement**](../Model/PaypalAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePproAgreement**
> \Reepay\Model\GatewayAgreement updatePproAgreement($id, $body)

Update ppro agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdatePproAgreement(); // \Reepay\Model\UpdatePproAgreement | 

try {
    $result = $apiInstance->updatePproAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updatePproAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdatePproAgreement**](../Model/UpdatePproAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResursAgreement**
> \Reepay\Model\GatewayAgreement updateResursAgreement($id, $body)

Update Resurs agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateResursAgreement(); // \Reepay\Model\UpdateResursAgreement | 

try {
    $result = $apiInstance->updateResursAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateResursAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateResursAgreement**](../Model/UpdateResursAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSwishAgreement**
> \Reepay\Model\GatewayAgreement updateSwishAgreement($id, $body)

Update Swish agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\SwishAgreement(); // \Reepay\Model\SwishAgreement | 

try {
    $result = $apiInstance->updateSwishAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateSwishAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\SwishAgreement**](../Model/SwishAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateViabillAgreement**
> \Reepay\Model\GatewayAgreement updateViabillAgreement($id, $body)

Update ViaBill agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateViabillAgreement(); // \Reepay\Model\UpdateViabillAgreement | 

try {
    $result = $apiInstance->updateViabillAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateViabillAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdateViabillAgreement**](../Model/UpdateViabillAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVippsAgreement**
> \Reepay\Model\GatewayAgreement updateVippsAgreement($id, $body)

Update Vipps agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\VippsAgreement(); // \Reepay\Model\VippsAgreement | 

try {
    $result = $apiInstance->updateVippsAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateVippsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\VippsAgreement**](../Model/VippsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVippsRecurringAgreement**
> \Reepay\Model\GatewayAgreement updateVippsRecurringAgreement($id, $body)

Update Vipps Recurring agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\AgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\VippsRecurringAgreement(); // \Reepay\Model\VippsRecurringAgreement | 

try {
    $result = $apiInstance->updateVippsRecurringAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updateVippsRecurringAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\VippsRecurringAgreement**](../Model/VippsRecurringAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

