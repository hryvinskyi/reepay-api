# Reepay\CouponApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCoupon**](CouponApi.md#createCoupon) | **POST** /v1/coupon | Create coupon
[**deleteCoupon**](CouponApi.md#deleteCoupon) | **DELETE** /v1/coupon/{handle} | Delete coupon
[**expireCoupon**](CouponApi.md#expireCoupon) | **POST** /v1/coupon/{handle}/expire | Expire coupon
[**getCoupon**](CouponApi.md#getCoupon) | **GET** /v1/coupon/{handle} | Get coupon
[**getCoupons**](CouponApi.md#getCoupons) | **GET** /v1/coupon | Get list of coupons
[**updateCoupon**](CouponApi.md#updateCoupon) | **PUT** /v1/coupon/{handle} | Update coupon
[**validateCode**](CouponApi.md#validateCode) | **GET** /v1/coupon/code/validate | Validate coupon


# **createCoupon**
> \Reepay\Model\Coupon createCoupon($body)

Create coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$body = new \Reepay\Model\CreateCoupon(); // \Reepay\Model\CreateCoupon | 

try {
    $result = $api_instance->createCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateCoupon**](../Model/\Reepay\Model\CreateCoupon.md)|  | [optional]

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCoupon**
> \Reepay\Model\Coupon deleteCoupon($handle)

Delete coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$handle = "handle_example"; // string | Coupon handle

try {
    $result = $api_instance->deleteCoupon($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Coupon handle |

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expireCoupon**
> \Reepay\Model\Coupon expireCoupon($handle)

Expire coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$handle = "handle_example"; // string | Coupon handle

try {
    $result = $api_instance->expireCoupon($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->expireCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Coupon handle |

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoupon**
> \Reepay\Model\Coupon getCoupon($handle)

Get coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$handle = "handle_example"; // string | Coupon handle

try {
    $result = $api_instance->getCoupon($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Coupon handle |

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoupons**
> \Reepay\Model\CouponSearch getCoupons($page, $size, $search)

Get list of coupons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$page = 1; // int | Page number to get
$size = 20; // int | Page size to use (default 20)
$search = "state:active"; // string | Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination

try {
    $result = $api_instance->getCoupons($page, $size, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number to get | [default to 1]
 **size** | **int**| Page size to use (default 20) | [default to 20]
 **search** | **string**| Optional search expression. See https://reference.reepay.com/api/#searching-and-pagination |

### Return type

[**\Reepay\Model\CouponSearch**](../Model/CouponSearch.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupon**
> \Reepay\Model\Coupon updateCoupon($handle, $body)

Update coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$handle = "handle_example"; // string | Coupon handle
$body = new \Reepay\Model\UpdateCoupon(); // \Reepay\Model\UpdateCoupon | 

try {
    $result = $api_instance->updateCoupon($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Coupon handle |
 **body** | [**\Reepay\Model\UpdateCoupon**](../Model/\Reepay\Model\UpdateCoupon.md)|  | [optional]

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateCode**
> \Reepay\Model\Coupon validateCode($code, $plan, $customer)

Validate coupon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\CouponApi();
$code = "code_example"; // string | Coupon code
$plan = "plan_example"; // string | Optional plan to validate against
$customer = "customer_example"; // string | Optional customer to validate against

try {
    $result = $api_instance->validateCode($code, $plan, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->validateCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Coupon code |
 **plan** | **string**| Optional plan to validate against | [optional]
 **customer** | **string**| Optional customer to validate against | [optional]

### Return type

[**\Reepay\Model\Coupon**](../Model/Coupon.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

