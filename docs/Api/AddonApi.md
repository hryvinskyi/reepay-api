# Reepay\AddonApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddOn**](AddonApi.md#createAddOn) | **POST** /v1/add_on | Create add-on
[**deleteAddOn**](AddonApi.md#deleteAddOn) | **DELETE** /v1/add_on/{handle} | Delete add-on
[**deleteMetadata**](AddonApi.md#deleteMetadata) | **DELETE** /v1/add_on/{handle}/metadata | Delete metadata
[**getAddOn**](AddonApi.md#getAddOn) | **GET** /v1/add_on/{handle} | Get add-on
[**getAddOns**](AddonApi.md#getAddOns) | **GET** /v1/add_on | Get list of add-ons
[**getMetadata**](AddonApi.md#getMetadata) | **GET** /v1/add_on/{handle}/metadata | Get metadata
[**undeleteAddOn**](AddonApi.md#undeleteAddOn) | **POST** /v1/add_on/{handle}/undelete | Un-delete add-on
[**updateAddOn**](AddonApi.md#updateAddOn) | **PUT** /v1/add_on/{handle} | Update add-on
[**updateMetadata**](AddonApi.md#updateMetadata) | **PUT** /v1/add_on/{handle}/metadata | Create or update metadata


# **createAddOn**
> \Reepay\Model\AddOn createAddOn($body)

Create add-on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$body = new \Reepay\Model\CreateAddOn(); // \Reepay\Model\CreateAddOn | 

try {
    $result = $api_instance->createAddOn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateAddOn**](../Model/\Reepay\Model\CreateAddOn.md)|  | [optional]

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddOn**
> \Reepay\Model\AddOn deleteAddOn($handle)

Delete add-on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $api_instance->deleteAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->deleteAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata**
> deleteMetadata($handle)

Delete metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Resource handle

try {
    $api_instance->deleteMetadata($handle);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->deleteMetadata: ', $e->getMessage(), PHP_EOL;
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

# **getAddOn**
> \Reepay\Model\AddOn getAddOn($handle)

Get add-on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $api_instance->getAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->getAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddOns**
> \Reepay\Model\AddOnSearch getAddOns($page, $size, $search)

Get list of add-ons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination

try {
    $result = $api_instance->getAddOns($page, $size, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->getAddOns: ', $e->getMessage(), PHP_EOL;
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

[**\Reepay\Model\AddOnSearch**](../Model/AddOnSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> map[string,object] getMetadata($handle)

Get metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Resource handle

try {
    $result = $api_instance->getMetadata($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->getMetadata: ', $e->getMessage(), PHP_EOL;
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

# **undeleteAddOn**
> \Reepay\Model\AddOn undeleteAddOn($handle)

Un-delete add-on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Add-on handle

try {
    $result = $api_instance->undeleteAddOn($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->undeleteAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddOn**
> \Reepay\Model\AddOn updateAddOn($handle, $body)

Update add-on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Add-on handle
$body = new \Reepay\Model\UpdateAddOn(); // \Reepay\Model\UpdateAddOn | 

try {
    $result = $api_instance->updateAddOn($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Add-on handle |
 **body** | [**\Reepay\Model\UpdateAddOn**](../Model/\Reepay\Model\UpdateAddOn.md)|  | [optional]

### Return type

[**\Reepay\Model\AddOn**](../Model/AddOn.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata**
> map[string,object] updateMetadata($handle, $body)

Create or update metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\AddonApi();
$handle = "handle_example"; // string | Resource handle
$body = NULL; // object | 

try {
    $result = $api_instance->updateMetadata($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonApi->updateMetadata: ', $e->getMessage(), PHP_EOL;
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

