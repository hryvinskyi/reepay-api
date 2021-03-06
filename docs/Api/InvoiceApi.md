# Reepay\InvoiceApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllDunningPending**](InvoiceApi.md#cancelAllDunningPending) | **POST** /v1/invoice/cancel_all_dunning_pending/subscription/{handle} | Cancel all dunning and pending
[**cancelInvoice**](InvoiceApi.md#cancelInvoice) | **POST** /v1/invoice/{id}/cancel | Cancel invoice
[**cancelSettleLater**](InvoiceApi.md#cancelSettleLater) | **POST** /v1/invoice/{id}/settle/cancel | Cancel settle later
[**cancelTransaction**](InvoiceApi.md#cancelTransaction) | **POST** /v1/invoice/{id}/transaction/{transaction}/cancel | Cancel transaction
[**createOrUpdateBillingAddress**](InvoiceApi.md#createOrUpdateBillingAddress) | **PUT** /v1/invoice/{id}/billing_address | Create or update invoice billing address
[**createOrUpdateShippingAddress**](InvoiceApi.md#createOrUpdateShippingAddress) | **PUT** /v1/invoice/{id}/shipping_address | Create or update invoice shipping address
[**deleteBillingAddress**](InvoiceApi.md#deleteBillingAddress) | **DELETE** /v1/invoice/{id}/billing_address | Delete invoice billing address
[**deleteMetadata2**](InvoiceApi.md#deleteMetadata2) | **DELETE** /v1/invoice/{handle}/metadata | Delete metadata
[**deleteShippingAddress**](InvoiceApi.md#deleteShippingAddress) | **DELETE** /v1/invoice/{id}/shipping_address | Delete invoice shipping address
[**detachFromSubscription**](InvoiceApi.md#detachFromSubscription) | **POST** /v1/invoice/{id}/detach | Detach from subscription
[**extendKAuthTransaction**](InvoiceApi.md#extendKAuthTransaction) | **POST** /v1/invoice/{id}/transaction/{transaction}/extend | Extend authorization transaction
[**extendKlarnaTransaction**](InvoiceApi.md#extendKlarnaTransaction) | **POST** /v1/invoice/{id}/transaction/{transaction}/extend_klarna | Extend Klarna authorization transaction
[**failInvoice**](InvoiceApi.md#failInvoice) | **POST** /v1/invoice/{id}/fail | Fail invoice
[**getInvoice**](InvoiceApi.md#getInvoice) | **GET** /v1/invoice/{id} | Get invoice
[**getInvoices**](InvoiceApi.md#getInvoices) | **GET** /v1/invoice | Get list of invoices
[**getMetadata2**](InvoiceApi.md#getMetadata2) | **GET** /v1/invoice/{handle}/metadata | Get metadata
[**manualSettle**](InvoiceApi.md#manualSettle) | **POST** /v1/invoice/{id}/manual_settle | Manual settle
[**reactivateInvoice**](InvoiceApi.md#reactivateInvoice) | **POST** /v1/invoice/{id}/reactivate | Reactivate invoice
[**settle**](InvoiceApi.md#settle) | **POST** /v1/invoice/{id}/settle | Settle
[**transaction**](InvoiceApi.md#transaction) | **GET** /v1/invoice/{id}/transaction/{transaction} | Get transaction
[**transactionDetails**](InvoiceApi.md#transactionDetails) | **GET** /v1/invoice/{id}/transaction/{transaction}/details | Get transaction details
[**transactionList**](InvoiceApi.md#transactionList) | **GET** /v1/invoice/{id}/transaction | Get transaction list
[**updateMetadata2**](InvoiceApi.md#updateMetadata2) | **PUT** /v1/invoice/{handle}/metadata | Create or update metadata


# **cancelAllDunningPending**
> \Reepay\Model\Invoice[] cancelAllDunningPending($handle)

Cancel all dunning and pending



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$handle = "handle_example"; // string | Subscription handle

try {
    $result = $api_instance->cancelAllDunningPending($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelAllDunningPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |

### Return type

[**\Reepay\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelInvoice**
> \Reepay\Model\Invoice cancelInvoice($id)

Cancel invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->cancelInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelSettleLater**
> \Reepay\Model\Invoice cancelSettleLater($id)

Cancel settle later



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->cancelSettleLater($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelSettleLater: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelTransaction**
> \Reepay\Model\Transaction cancelTransaction($id, $transaction)

Cancel transaction



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->cancelTransaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\Transaction**](../Model/Transaction.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateBillingAddress**
> \Reepay\Model\Invoice createOrUpdateBillingAddress($id, $body)

Create or update invoice billing address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\InvoiceBillingAddress(); // \Reepay\Model\InvoiceBillingAddress | 

try {
    $result = $api_instance->createOrUpdateBillingAddress($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createOrUpdateBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\InvoiceBillingAddress**](../Model/\Reepay\Model\InvoiceBillingAddress.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateShippingAddress**
> \Reepay\Model\Invoice createOrUpdateShippingAddress($id, $body)

Create or update invoice shipping address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\InvoiceShippingAddress(); // \Reepay\Model\InvoiceShippingAddress | 

try {
    $result = $api_instance->createOrUpdateShippingAddress($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createOrUpdateShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\InvoiceShippingAddress**](../Model/\Reepay\Model\InvoiceShippingAddress.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingAddress**
> \Reepay\Model\Invoice deleteBillingAddress($id)

Delete invoice billing address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->deleteBillingAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata2**
> deleteMetadata2($handle)

Delete metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$handle = "handle_example"; // string | Resource handle

try {
    $api_instance->deleteMetadata2($handle);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteMetadata2: ', $e->getMessage(), PHP_EOL;
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

# **deleteShippingAddress**
> \Reepay\Model\Invoice deleteShippingAddress($id)

Delete invoice shipping address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->deleteShippingAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachFromSubscription**
> \Reepay\Model\Invoice detachFromSubscription($id)

Detach from subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->detachFromSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->detachFromSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendKAuthTransaction**
> \Reepay\Model\ExtendAuthResponse extendKAuthTransaction($id, $transaction)

Extend authorization transaction



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->extendKAuthTransaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->extendKAuthTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\ExtendAuthResponse**](../Model/ExtendAuthResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendKlarnaTransaction**
> \Reepay\Model\ExtendKlarnaAuthResponse extendKlarnaTransaction($id, $transaction)

Extend Klarna authorization transaction



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->extendKlarnaTransaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->extendKlarnaTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\ExtendKlarnaAuthResponse**](../Model/ExtendKlarnaAuthResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **failInvoice**
> \Reepay\Model\Invoice failInvoice($id)

Fail invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->failInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->failInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \Reepay\Model\Invoice getInvoice($id)

Get invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \Reepay\Model\InvoiceSearch getInvoices($page, $size, $search, $created_from, $created_to, $created_interval)

Get list of invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination
$created_from = "2019-12-01"; // string | Limit by created from (inclusive). Recommended to speed up queries. Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` or `yyyy-MM-ddTHH:mm:ss`
$created_to = "2020-01-01"; // string | Limit by created to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` or `yyyy-MM-ddTHH:mm:ss`
$created_interval = "P1W"; // string | Limit by created from now and interval back in time. E.g. one week. Will take precedence over the other created limiters. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations

try {
    $result = $api_instance->getInvoices($page, $size, $search, $created_from, $created_to, $created_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
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

[**\Reepay\Model\InvoiceSearch**](../Model/InvoiceSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata2**
> map[string,object] getMetadata2($handle)

Get metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$handle = "handle_example"; // string | Resource handle

try {
    $result = $api_instance->getMetadata2($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getMetadata2: ', $e->getMessage(), PHP_EOL;
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

# **manualSettle**
> \Reepay\Model\Invoice manualSettle($id, $body)

Manual settle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\ManualSettleTransfer(); // \Reepay\Model\ManualSettleTransfer | 

try {
    $result = $api_instance->manualSettle($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->manualSettle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\ManualSettleTransfer**](../Model/\Reepay\Model\ManualSettleTransfer.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reactivateInvoice**
> \Reepay\Model\Invoice reactivateInvoice($id)

Reactivate invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle

try {
    $result = $api_instance->reactivateInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->reactivateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settle**
> \Reepay\Model\Invoice settle($id, $body)

Settle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$body = new \Reepay\Model\Settle(); // \Reepay\Model\Settle | 

try {
    $result = $api_instance->settle($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->settle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **body** | [**\Reepay\Model\Settle**](../Model/\Reepay\Model\Settle.md)|  | [optional]

### Return type

[**\Reepay\Model\Invoice**](../Model/Invoice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transaction**
> \Reepay\Model\Transaction transaction($id, $transaction)

Get transaction



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->transaction($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**\Reepay\Model\Transaction**](../Model/Transaction.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionDetails**
> map[string,object] transactionDetails($id, $transaction)

Get transaction details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$transaction = "transaction_example"; // string | Transaction id

try {
    $result = $api_instance->transactionDetails($id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transactionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **transaction** | **string**| Transaction id |

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionList**
> \Reepay\Model\TransactionSearch transactionList($id, $page, $size, $search)

Get transaction list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$id = "id_example"; // string | Invoice id or handle
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination

try {
    $result = $api_instance->transactionList($id, $page, $size, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->transactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice id or handle |
 **page** | **int**| Page number to get | [optional] [default to 1]
 **size** | **int**| Page size to use (default 20) | [optional] [default to 20]
 **search** | **string**| Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination | [optional]

### Return type

[**\Reepay\Model\TransactionSearch**](../Model/TransactionSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata2**
> map[string,object] updateMetadata2($handle, $body)

Create or update metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\InvoiceApi();
$handle = "handle_example"; // string | Resource handle
$body = NULL; // object | 

try {
    $result = $api_instance->updateMetadata2($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->updateMetadata2: ', $e->getMessage(), PHP_EOL;
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

