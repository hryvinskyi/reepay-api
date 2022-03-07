# Reepay\CustomerApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePaymentMethod**](CustomerApi.md#activatePaymentMethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/activate | Activate payment method
[**addCardJson**](CustomerApi.md#addCardJson) | **POST** /v1/customer/{handle}/payment_method/card | Add card payment method
[**cardCopy**](CustomerApi.md#cardCopy) | **POST** /v1/customer/{handle}/payment_method/card_copy | Copy card payment method
[**createCustomerInvoice**](CustomerApi.md#createCustomerInvoice) | **POST** /v1/customer/{handle}/invoice | Create invoice for customer
[**createCustomerJson**](CustomerApi.md#createCustomerJson) | **POST** /v1/customer | Create customer
[**createCustomerNoteJson**](CustomerApi.md#createCustomerNoteJson) | **POST** /v1/customer/{handle}/note | Create customer note
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /v1/customer/{handle} | Delete customer
[**deleteMetadata1**](CustomerApi.md#deleteMetadata1) | **DELETE** /v1/customer/{handle}/metadata | Delete metadata
[**deletePaymentMethod**](CustomerApi.md#deletePaymentMethod) | **DELETE** /v1/customer/{handle}/payment_method/{method_id} | Delete payment method
[**getCard**](CustomerApi.md#getCard) | **GET** /v1/customer/{handle}/payment_method/card/{id} | Get card
[**getCardDetails**](CustomerApi.md#getCardDetails) | **GET** /v1/customer/{handle}/payment_method/card/{id}/details | Get gateway card details
[**getCustomer**](CustomerApi.md#getCustomer) | **GET** /v1/customer/{handle} | Get customer
[**getCustomerNotes**](CustomerApi.md#getCustomerNotes) | **GET** /v1/customer/{handle}/note | Get customer notes
[**getCustomerPaymentMethods**](CustomerApi.md#getCustomerPaymentMethods) | **GET** /v1/customer/{handle}/payment_method | Get payment methods
[**getCustomers**](CustomerApi.md#getCustomers) | **GET** /v1/customer | Get list of customers
[**getMetadata1**](CustomerApi.md#getMetadata1) | **GET** /v1/customer/{handle}/metadata | Get metadata
[**getMpsDetails**](CustomerApi.md#getMpsDetails) | **GET** /v1/customer/{handle}/payment_method/mps/{id}/details | Get MobilePay Subscriptions agreement details
[**getMpsSubscription**](CustomerApi.md#getMpsSubscription) | **GET** /v1/customer/{handle}/payment_method/mps/{id} | Get MobilePay Subscriptions agreement
[**importCardJson**](CustomerApi.md#importCardJson) | **POST** /v1/customer/{handle}/payment_method/card_import | Import card payment method
[**inactivatePaymentMethod**](CustomerApi.md#inactivatePaymentMethod) | **POST** /v1/customer/{handle}/payment_method/{method_id}/inactivate | Inactivate payment method
[**reactivateCard**](CustomerApi.md#reactivateCard) | **POST** /v1/customer/{handle}/payment_method/{card_id}/card_reactivate | Reactivate failed card
[**updateCustomerJson**](CustomerApi.md#updateCustomerJson) | **PUT** /v1/customer/{handle} | Update customer
[**updateMetadata1**](CustomerApi.md#updateMetadata1) | **PUT** /v1/customer/{handle}/metadata | Create or update metadata


# **activatePaymentMethod**
> \Reepay\Model\PaymentMethods activatePaymentMethod($handle, $method_id)

Activate payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $api_instance->activatePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->activatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCardJson**
> \Reepay\Model\Card addCardJson($handle, $body)

Add card payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CardToken(); // \Reepay\Model\CardToken | 

try {
    $result = $api_instance->addCardJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->addCardJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CardToken**](../Model/\Reepay\Model\CardToken.md)|  | [optional]

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardCopy**
> \Reepay\Model\Card cardCopy($handle, $body)

Copy card payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CardCopy(); // \Reepay\Model\CardCopy | 

try {
    $result = $api_instance->cardCopy($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->cardCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CardCopy**](../Model/\Reepay\Model\CardCopy.md)|  | [optional]

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerInvoice**
> \Reepay\Model\Invoice createCustomerInvoice($handle, $body)

Create invoice for customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CreateCustomerInvoice(); // \Reepay\Model\CreateCustomerInvoice | 

try {
    $result = $api_instance->createCustomerInvoice($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CreateCustomerInvoice**](../Model/\Reepay\Model\CreateCustomerInvoice.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerJson**
> \Reepay\Model\Customer createCustomerJson($body)

Create customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$body = new \Reepay\Model\CreateCustomer(); // \Reepay\Model\CreateCustomer | 

try {
    $result = $api_instance->createCustomerJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCustomer**](../Model/\Reepay\Model\CreateCustomer.md)|  | [optional]

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerNoteJson**
> \Reepay\Model\CustomerNote createCustomerNoteJson($handle, $body)

Create customer note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | 
$body = new \Reepay\Model\CreateCustomerNote(); // \Reepay\Model\CreateCustomerNote | 

try {
    $result = $api_instance->createCustomerNoteJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomerNoteJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |
 **body** | [**\Reepay\Model\CreateCustomerNote**](../Model/\Reepay\Model\CreateCustomerNote.md)|  | [optional]

### Return type

[**\Reepay\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \Reepay\Model\Customer deleteCustomer($handle)

Delete customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $api_instance->deleteCustomer($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata1**
> deleteMetadata1($handle)

Delete metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Resource handle

try {
    $api_instance->deleteMetadata1($handle);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteMetadata1: ', $e->getMessage(), PHP_EOL;
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

# **deletePaymentMethod**
> \Reepay\Model\PaymentMethods deletePaymentMethod($handle, $method_id)

Delete payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $api_instance->deletePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCard**
> \Reepay\Model\Card getCard($handle, $id)

Get card



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Card id

try {
    $result = $api_instance->getCard($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Card id |

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCardDetails**
> map[string,object] getCardDetails($handle, $id)

Get gateway card details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Card id

try {
    $result = $api_instance->getCardDetails($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCardDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Card id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Reepay\Model\Customer getCustomer($handle)

Get customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $api_instance->getCustomer($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerNotes**
> \Reepay\Model\CustomerNote[] getCustomerNotes($handle)

Get customer notes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle

try {
    $result = $api_instance->getCustomerNotes($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |

### Return type

[**\Reepay\Model\CustomerNote[]**](../Model/CustomerNote.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentMethods**
> \Reepay\Model\PaymentMethods getCustomerPaymentMethods($handle, $only_active)

Get payment methods



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$only_active = false; // bool | Get only active

try {
    $result = $api_instance->getCustomerPaymentMethods($handle, $only_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **only_active** | **bool**| Get only active | [optional] [default to false]

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \Reepay\Model\CustomerSearch getCustomers($page, $size, $search)

Get list of customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination

try {
    $result = $api_instance->getCustomers($page, $size, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to get | [optional] [default to 1]
 **size** | **int**| Page size to use (default 20) | [optional] [default to 20]
 **search** | **string**| Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination | [optional]

### Return type

[**\Reepay\Model\CustomerSearch**](../Model/CustomerSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata1**
> map[string,object] getMetadata1($handle)

Get metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Resource handle

try {
    $result = $api_instance->getMetadata1($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getMetadata1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Resource handle |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMpsDetails**
> map[string,object] getMpsDetails($handle, $id)

Get MobilePay Subscriptions agreement details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Mps subscription id

try {
    $result = $api_instance->getMpsDetails($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getMpsDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Mps subscription id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMpsSubscription**
> \Reepay\Model\MpsSubscription getMpsSubscription($handle, $id)

Get MobilePay Subscriptions agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$id = "id_example"; // string | Mps subscription id

try {
    $result = $api_instance->getMpsSubscription($handle, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getMpsSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **id** | **string**| Mps subscription id |

### Return type

[**\Reepay\Model\MpsSubscription**](../Model/MpsSubscription.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCardJson**
> \Reepay\Model\Card importCardJson($handle, $body)

Import card payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\CardImport(); // \Reepay\Model\CardImport | 

try {
    $result = $api_instance->importCardJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->importCardJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\CardImport**](../Model/\Reepay\Model\CardImport.md)|  | [optional]

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inactivatePaymentMethod**
> \Reepay\Model\PaymentMethods inactivatePaymentMethod($handle, $method_id)

Inactivate payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$method_id = "method_id_example"; // string | Payment method id

try {
    $result = $api_instance->inactivatePaymentMethod($handle, $method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->inactivatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **method_id** | **string**| Payment method id |

### Return type

[**\Reepay\Model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateCard**
> \Reepay\Model\Card reactivateCard($handle, $card_id)

Reactivate failed card



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$card_id = "card_id_example"; // string | Card id

try {
    $result = $api_instance->reactivateCard($handle, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->reactivateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **card_id** | **string**| Card id |

### Return type

[**\Reepay\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerJson**
> \Reepay\Model\Customer updateCustomerJson($handle, $body)

Update customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Customer handle
$body = new \Reepay\Model\UpdateCustomer(); // \Reepay\Model\UpdateCustomer | 

try {
    $result = $api_instance->updateCustomerJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomerJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Customer handle |
 **body** | [**\Reepay\Model\UpdateCustomer**](../Model/\Reepay\Model\UpdateCustomer.md)|  | [optional]

### Return type

[**\Reepay\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata1**
> map[string,object] updateMetadata1($handle, $body)

Create or update metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CustomerApi();
$handle = "handle_example"; // string | Resource handle
$body = NULL; // object | 

try {
    $result = $api_instance->updateMetadata1($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateMetadata1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Resource handle |
 **body** | **object**|  | [optional]

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

