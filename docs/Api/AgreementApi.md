# Reepay\AgreementApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMpsAgreement**](AgreementApi.md#activateMpsAgreement) | **POST** /v1/agreement/{id}/mps_activate | Activate mps agreement by selecting provider
[**createApplepayAgreement**](AgreementApi.md#createApplepayAgreement) | **POST** /v1/agreement/applepay | Create ApplePay agreement
[**createCardGatewayAgreement**](AgreementApi.md#createCardGatewayAgreement) | **POST** /v1/agreement/card_gateway | Create card gateway agreement
[**createGooglepayAgreement**](AgreementApi.md#createGooglepayAgreement) | **POST** /v1/agreement/googlepay | Create GooglePay agreement
[**createKlarnaAgreement**](AgreementApi.md#createKlarnaAgreement) | **POST** /v1/agreement/klarna | Create Klarna agreement
[**createMpoAgreement**](AgreementApi.md#createMpoAgreement) | **POST** /v1/agreement/mpo | Create MobilePay Online agreement
[**createMpsAgreement**](AgreementApi.md#createMpsAgreement) | **POST** /v1/agreement/mps | Create pending MobilePay Subscriptions agreement
[**createPaypalAgreement**](AgreementApi.md#createPaypalAgreement) | **POST** /v1/agreement/paypal | Create PayPal agreement
[**createPgwAgreement**](AgreementApi.md#createPgwAgreement) | **POST** /v1/agreement/pgw | Create payment gateway agreement
[**createPproAgreement**](AgreementApi.md#createPproAgreement) | **POST** /v1/agreement/ppro | Create ppro agreement
[**createResursAgreement**](AgreementApi.md#createResursAgreement) | **POST** /v1/agreement/resurs | Create Resurs agreement
[**createSwishAgreement**](AgreementApi.md#createSwishAgreement) | **POST** /v1/agreement/swish | Create Swish agreement
[**createViabillAgreement**](AgreementApi.md#createViabillAgreement) | **POST** /v1/agreement/viabill | Create ViaBill agreement
[**createVippsAgreement**](AgreementApi.md#createVippsAgreement) | **POST** /v1/agreement/vipps | Create Vipps agreement
[**deleteGatewayAgreement**](AgreementApi.md#deleteGatewayAgreement) | **DELETE** /v1/agreement/{id} | Delete gateway agreement
[**disableGatewayAgreement**](AgreementApi.md#disableGatewayAgreement) | **POST** /v1/agreement/{id}/disable | Disable gateway agreement
[**enableGatewayAgreement**](AgreementApi.md#enableGatewayAgreement) | **POST** /v1/agreement/{id}/enable | Enable gateway agreement
[**getCardGatewayAgreements**](AgreementApi.md#getCardGatewayAgreements) | **GET** /v1/agreement/card_gateway | Get all card gateway agreements
[**getGatewayAgreement**](AgreementApi.md#getGatewayAgreement) | **GET** /v1/agreement/{id} | Get gateway agreement
[**getGatewayAgreements**](AgreementApi.md#getGatewayAgreements) | **GET** /v1/agreement | Get all agreements
[**updateApplepayAgreement**](AgreementApi.md#updateApplepayAgreement) | **PUT** /v1/agreement/applepay/{id} | Update ApplePay agreement
[**updateCardGatewayAgreement**](AgreementApi.md#updateCardGatewayAgreement) | **PUT** /v1/agreement/card_gateway/{id} | Update card gateway agreement
[**updateGooglepayAgreement**](AgreementApi.md#updateGooglepayAgreement) | **PUT** /v1/agreement/googlepay/{id} | Update GooglePay agreement
[**updateKlarnaAgreement**](AgreementApi.md#updateKlarnaAgreement) | **PUT** /v1/agreement/klarna/{id} | Update Klarna agreement
[**updateMpoAgreement**](AgreementApi.md#updateMpoAgreement) | **PUT** /v1/agreement/mpo/{id} | Update MobilePay Online agreement
[**updateMpsAgreement**](AgreementApi.md#updateMpsAgreement) | **PUT** /v1/agreement/mps/{id} | Update mps agreement
[**updatePaypalAgreement**](AgreementApi.md#updatePaypalAgreement) | **PUT** /v1/agreement/paypal/{id} | Update PayPal agreement
[**updatePgwAgreement**](AgreementApi.md#updatePgwAgreement) | **PUT** /v1/agreement/pgw/{id} | Update pgw agreement
[**updatePproAgreement**](AgreementApi.md#updatePproAgreement) | **PUT** /v1/agreement/ppro/{id} | Update ppro agreement
[**updateResursAgreement**](AgreementApi.md#updateResursAgreement) | **PUT** /v1/agreement/resurs/{id} | Update Resurs agreement
[**updateSwishAgreement**](AgreementApi.md#updateSwishAgreement) | **PUT** /v1/agreement/swish/{id} | Update Swish agreement
[**updateViabillAgreement**](AgreementApi.md#updateViabillAgreement) | **PUT** /v1/agreement/viabill/{id} | Update ViaBill agreement
[**updateVippsAgreement**](AgreementApi.md#updateVippsAgreement) | **PUT** /v1/agreement/vipps/{id} | Update Vipps agreement


# **activateMpsAgreement**
> \Reepay\Model\GatewayAgreement activateMpsAgreement($id, $body)

Activate mps agreement by selecting provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\ActivateMpsAgreement(); // \Reepay\Model\ActivateMpsAgreement | 

try {
    $result = $api_instance->activateMpsAgreement($id, $body);
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
 **body** | [**\Reepay\Model\ActivateMpsAgreement**](../Model/\Reepay\Model\ActivateMpsAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\ApplepayAgreement(); // \Reepay\Model\ApplepayAgreement | 

try {
    $result = $api_instance->createApplepayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createApplepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ApplepayAgreement**](../Model/\Reepay\Model\ApplepayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\CreateCardGatewayAgreement(); // \Reepay\Model\CreateCardGatewayAgreement | 

try {
    $result = $api_instance->createCardGatewayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createCardGatewayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCardGatewayAgreement**](../Model/\Reepay\Model\CreateCardGatewayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\GooglepayAgreement(); // \Reepay\Model\GooglepayAgreement | 

try {
    $result = $api_instance->createGooglepayAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createGooglepayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\GooglepayAgreement**](../Model/\Reepay\Model\GooglepayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\KlarnaAgreement(); // \Reepay\Model\KlarnaAgreement | 

try {
    $result = $api_instance->createKlarnaAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createKlarnaAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\KlarnaAgreement**](../Model/\Reepay\Model\KlarnaAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\MpoAgreement(); // \Reepay\Model\MpoAgreement | 

try {
    $result = $api_instance->createMpoAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createMpoAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\MpoAgreement**](../Model/\Reepay\Model\MpoAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\CreateMpsAgreement(); // \Reepay\Model\CreateMpsAgreement | 

try {
    $result = $api_instance->createMpsAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createMpsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateMpsAgreement**](../Model/\Reepay\Model\CreateMpsAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\PaypalAgreement(); // \Reepay\Model\PaypalAgreement | 

try {
    $result = $api_instance->createPaypalAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createPaypalAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PaypalAgreement**](../Model/\Reepay\Model\PaypalAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPgwAgreement**
> \Reepay\Model\GatewayAgreement createPgwAgreement($body)

Create payment gateway agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\PgwAgreement(); // \Reepay\Model\PgwAgreement | 

try {
    $result = $api_instance->createPgwAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createPgwAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PgwAgreement**](../Model/\Reepay\Model\PgwAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\PproAgreement(); // \Reepay\Model\PproAgreement | 

try {
    $result = $api_instance->createPproAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createPproAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\PproAgreement**](../Model/\Reepay\Model\PproAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\ResursAgreement(); // \Reepay\Model\ResursAgreement | 

try {
    $result = $api_instance->createResursAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createResursAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ResursAgreement**](../Model/\Reepay\Model\ResursAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\SwishAgreement(); // \Reepay\Model\SwishAgreement | 

try {
    $result = $api_instance->createSwishAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createSwishAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\SwishAgreement**](../Model/\Reepay\Model\SwishAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\ViabillAgreement(); // \Reepay\Model\ViabillAgreement | 

try {
    $result = $api_instance->createViabillAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createViabillAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\ViabillAgreement**](../Model/\Reepay\Model\ViabillAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$body = new \Reepay\Model\VippsAgreement(); // \Reepay\Model\VippsAgreement | 

try {
    $result = $api_instance->createVippsAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->createVippsAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\VippsAgreement**](../Model/\Reepay\Model\VippsAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $api_instance->deleteGatewayAgreement($id);
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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $api_instance->disableGatewayAgreement($id);
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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $api_instance->enableGatewayAgreement($id);
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
> \Reepay\Model\GatewayAgreement[] getCardGatewayAgreements($only_active, $non_deleted)

Get all card gateway agreements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$only_active = false; // bool | Get only active
$non_deleted = false; // bool | Get only non-deleted

try {
    $result = $api_instance->getCardGatewayAgreements($only_active, $non_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getCardGatewayAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_active** | **bool**| Get only active | [optional] [default to false]
 **non_deleted** | **bool**| Get only non-deleted | [optional] [default to false]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id

try {
    $result = $api_instance->getGatewayAgreement($id);
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
> \Reepay\Model\GatewayAgreement[] getGatewayAgreements($only_active, $non_deleted)

Get all agreements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$only_active = false; // bool | Get only active
$non_deleted = false; // bool | Get only non-deleted

try {
    $result = $api_instance->getGatewayAgreements($only_active, $non_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->getGatewayAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_active** | **bool**| Get only active | [optional] [default to false]
 **non_deleted** | **bool**| Get only non-deleted | [optional] [default to false]

### Return type

[**\Reepay\Model\GatewayAgreement[]**](../Model/GatewayAgreement.md)

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\ApplepayAgreement(); // \Reepay\Model\ApplepayAgreement | 

try {
    $result = $api_instance->updateApplepayAgreement($id, $body);
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
 **body** | [**\Reepay\Model\ApplepayAgreement**](../Model/\Reepay\Model\ApplepayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateCardGatewayAgreement(); // \Reepay\Model\UpdateCardGatewayAgreement | 

try {
    $result = $api_instance->updateCardGatewayAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateCardGatewayAgreement**](../Model/\Reepay\Model\UpdateCardGatewayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateGooglepayAgreement(); // \Reepay\Model\UpdateGooglepayAgreement | 

try {
    $result = $api_instance->updateGooglepayAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateGooglepayAgreement**](../Model/\Reepay\Model\UpdateGooglepayAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateKlarnaAgreement(); // \Reepay\Model\UpdateKlarnaAgreement | 

try {
    $result = $api_instance->updateKlarnaAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateKlarnaAgreement**](../Model/\Reepay\Model\UpdateKlarnaAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\MpoAgreement(); // \Reepay\Model\MpoAgreement | 

try {
    $result = $api_instance->updateMpoAgreement($id, $body);
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
 **body** | [**\Reepay\Model\MpoAgreement**](../Model/\Reepay\Model\MpoAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateMpsAgreement(); // \Reepay\Model\UpdateMpsAgreement | 

try {
    $result = $api_instance->updateMpsAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateMpsAgreement**](../Model/\Reepay\Model\UpdateMpsAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\PaypalAgreement(); // \Reepay\Model\PaypalAgreement | 

try {
    $result = $api_instance->updatePaypalAgreement($id, $body);
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
 **body** | [**\Reepay\Model\PaypalAgreement**](../Model/\Reepay\Model\PaypalAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePgwAgreement**
> \Reepay\Model\GatewayAgreement updatePgwAgreement($id, $body)

Update pgw agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdatePgwAgreement(); // \Reepay\Model\UpdatePgwAgreement | 

try {
    $result = $api_instance->updatePgwAgreement($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementApi->updatePgwAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Agreement id |
 **body** | [**\Reepay\Model\UpdatePgwAgreement**](../Model/\Reepay\Model\UpdatePgwAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdatePproAgreement(); // \Reepay\Model\UpdatePproAgreement | 

try {
    $result = $api_instance->updatePproAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdatePproAgreement**](../Model/\Reepay\Model\UpdatePproAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateResursAgreement(); // \Reepay\Model\UpdateResursAgreement | 

try {
    $result = $api_instance->updateResursAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateResursAgreement**](../Model/\Reepay\Model\UpdateResursAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\SwishAgreement(); // \Reepay\Model\SwishAgreement | 

try {
    $result = $api_instance->updateSwishAgreement($id, $body);
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
 **body** | [**\Reepay\Model\SwishAgreement**](../Model/\Reepay\Model\SwishAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\UpdateViabillAgreement(); // \Reepay\Model\UpdateViabillAgreement | 

try {
    $result = $api_instance->updateViabillAgreement($id, $body);
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
 **body** | [**\Reepay\Model\UpdateViabillAgreement**](../Model/\Reepay\Model\UpdateViabillAgreement.md)|  | [optional]

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
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AgreementApi();
$id = "id_example"; // string | Agreement id
$body = new \Reepay\Model\VippsAgreement(); // \Reepay\Model\VippsAgreement | 

try {
    $result = $api_instance->updateVippsAgreement($id, $body);
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
 **body** | [**\Reepay\Model\VippsAgreement**](../Model/\Reepay\Model\VippsAgreement.md)|  | [optional]

### Return type

[**\Reepay\Model\GatewayAgreement**](../Model/GatewayAgreement.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

