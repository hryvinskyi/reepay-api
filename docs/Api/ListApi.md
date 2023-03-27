# Reepay\ListApi

All URIs are relative to *https://api.reepay.com/*

 Method                                                      | HTTP request                    | Description                 
-------------------------------------------------------------|---------------------------------|-----------------------------
 [**getAddOnList**](ListApi.md#getaddonlist)                 | **GET** /v1/list/add_on         | Get list of add-ons         
 [**getChargeList**](ListApi.md#getchargelist)               | **GET** /v1/list/charge         | Get list of charges         
 [**getCouponList**](ListApi.md#getcouponlist)               | **GET** /v1/list/coupon         | Get list of coupons         
 [**getCustomerList**](ListApi.md#getcustomerlist)           | **GET** /v1/list/customer       | Get list of customers       
 [**getDiscountList**](ListApi.md#getdiscountlist)           | **GET** /v1/list/discount       | Get list of discounts       
 [**getInvoiceList**](ListApi.md#getinvoicelist)             | **GET** /v1/list/invoice        | Get list of invoices        
 [**getPaymentMethodList**](ListApi.md#getpaymentmethodlist) | **GET** /v1/list/payment_method | Get list of payment methods 
 [**getPayoutList**](ListApi.md#getpayoutlist)               | **GET** /v1/list/payout         | Get list of payouts         
 [**getPlanList**](ListApi.md#getplanlist)                   | **GET** /v1/list/plan           | Get list of plans           
 [**getSubscriptionList**](ListApi.md#getsubscriptionlist)   | **GET** /v1/list/subscription   | Get list of subscriptions   
 [**getTransactionList**](ListApi.md#gettransactionlist)     | **GET** /v1/list/transaction    | Get list of transactions    

# **getAddOnList**
> \Reepay\Model\AddOnList getAddOnList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $type, $name, $description, $amount, $amountInclVat, $allPlans)

Get list of add-ons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can be `created` or `deleted`
$handle = "handle_example"; // string | Add-on handle prefix
$state = "active"; // string | Add-on state. Accepted values `active` or `deleted`
$type = "type_example"; // string | Type of add-on. Accepted values: `on_off` or `quantity`. An on_off type cannot be given a quantity when attached to subscription. For quantity type it is possible.`
$name = "name_example"; // string | Name of add-on. Used as order line text.
$description = "description_example"; // string | Optional description of add-on
$amount = "amount_example"; // string | Add-on amount interval. See documentation of intervals.
$amountInclVat = "amountInclVat_example"; // string | Amount incl vat flag. Values: `true` or `false`
$allPlans = "allPlans_example"; // string | Amount incl vat test flag. Values: `true` or `false`

try {
    $result = $apiInstance->getAddOnList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $type, $name, $description, $amount, $amountInclVat, $allPlans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getAddOnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Can be &#x60;created&#x60; or &#x60;deleted&#x60; | [optional] [default to created]
 **handle** | **string**| Add-on handle prefix | [optional]
 **state** | **string**| Add-on state. Accepted values &#x60;active&#x60; or &#x60;deleted&#x60; | [optional] [default to active]
 **type** | **string**| Type of add-on. Accepted values: &#x60;on_off&#x60; or &#x60;quantity&#x60;. An on_off type cannot be given a quantity when attached to subscription. For quantity type it is possible.&#x60; | [optional]
 **name** | **string**| Name of add-on. Used as order line text. | [optional]
 **description** | **string**| Optional description of add-on | [optional]
 **amount** | **string**| Add-on amount interval. See documentation of intervals. | [optional]
 **amountInclVat** | **string**| Amount incl vat flag. Values: &#x60;true&#x60; or &#x60;false&#x60; | [optional]
 **allPlans** | **string**| Amount incl vat test flag. Values: &#x60;true&#x60; or &#x60;false&#x60; | [optional]

### Return type

[**\Reepay\Model\AddOnList**](../Model/AddOnList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChargeList**
> \Reepay\Model\ChargeList getChargeList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $state, $excludeState, $customer, $amount, $refundedAmount, $authorizedAmount, $currency, $partialSettled)

Get list of charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `settled`. Default is `created`.
$handle = "handle_example"; // string | Invoice handle prefix
$handleContains = "handleContains_example"; // string | Invoice handle contains
$state = array("state_example"); // string[] | Invoice state, multiple can be defined
$excludeState = array("excludeState_example"); // string[] | Invoice state to exclude, multiple can be defined
$customer = "customer_example"; // string | Invoices for customer by customer handle
$amount = "amount_example"; // string | Amount in minor unit interval. See documentation of intervals.
$refundedAmount = "refundedAmount_example"; // string | Refunded amount in minor unit interval. See documentation of intervals.
$authorizedAmount = "authorizedAmount_example"; // string | Authorized amount in minor unit interval. See documentation of intervals.
$currency = array("currency_example"); // string[] | Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$partialSettled = true; // bool | Filter invoices based on partial settled. If `true` invoices where `authorized_amount < settled_amount` is returned. If `false` invoices where `settled_amount = authorized_amount` is returned.

try {
    $result = $apiInstance->getChargeList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $state, $excludeState, $customer, $amount, $refundedAmount, $authorizedAmount, $currency, $partialSettled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getChargeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;settled&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Invoice handle prefix | [optional]
 **handleContains** | **string**| Invoice handle contains | [optional]
 **state** | [**string[]**](../Model/string.md)| Invoice state, multiple can be defined | [optional]
 **excludeState** | [**string[]**](../Model/string.md)| Invoice state to exclude, multiple can be defined | [optional]
 **customer** | **string**| Invoices for customer by customer handle | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **refundedAmount** | **string**| Refunded amount in minor unit interval. See documentation of intervals. | [optional]
 **authorizedAmount** | **string**| Authorized amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **partialSettled** | **bool**| Filter invoices based on partial settled. If &#x60;true&#x60; invoices where &#x60;authorized_amount &lt; settled_amount&#x60; is returned. If &#x60;false&#x60; invoices where &#x60;settled_amount &#x3D; authorized_amount&#x60; is returned. | [optional]

### Return type

[**\Reepay\Model\ChargeList**](../Model/ChargeList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponList**
> \Reepay\Model\CouponList getCouponList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $type, $expireReason, $discountHandle, $code, $name, $allPlans, $maxRedemptions, $redemptions, $validUntil)

Get list of coupons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can be the `created` or `expired`
$handle = "handle_example"; // string | Coupon handle prefix
$type = "type_example"; // string | Type of coupon. Accepted values: `single` or `set`
$expireReason = array("expireReason_example"); // string[] | The expire reason if expired, multiple can be defined. Possible values: `early`, `valid_until` or `max`
$discountHandle = "discountHandle_example"; // string | Handle of discount to use for coupon
$code = "code_example"; // string | The coupon code. Maximum 128 characters.
$name = "name_example"; // string | Internal name for the coupon.
$allPlans = "allPlans_example"; // string | Whether all plans are eligible for this coupon. Values: `true` or `false`
$maxRedemptions = "maxRedemptions_example"; // string | Optional maximum number of times this coupon can be redeemed.
$redemptions = "redemptions_example"; // string | Number of times the coupon has been redeemed.
$validUntil = "validUntil_example"; // string | Valid-until period date interval

try {
    $result = $apiInstance->getCouponList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $type, $expireReason, $discountHandle, $code, $name, $allPlans, $maxRedemptions, $redemptions, $validUntil);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getCouponList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Can be the &#x60;created&#x60; or &#x60;expired&#x60; | [optional] [default to created]
 **handle** | **string**| Coupon handle prefix | [optional]
 **type** | **string**| Type of coupon. Accepted values: &#x60;single&#x60; or &#x60;set&#x60; | [optional]
 **expireReason** | [**string[]**](../Model/string.md)| The expire reason if expired, multiple can be defined. Possible values: &#x60;early&#x60;, &#x60;valid_until&#x60; or &#x60;max&#x60; | [optional]
 **discountHandle** | **string**| Handle of discount to use for coupon | [optional]
 **code** | **string**| The coupon code. Maximum 128 characters. | [optional]
 **name** | **string**| Internal name for the coupon. | [optional]
 **allPlans** | **string**| Whether all plans are eligible for this coupon. Values: &#x60;true&#x60; or &#x60;false&#x60; | [optional]
 **maxRedemptions** | **string**| Optional maximum number of times this coupon can be redeemed. | [optional]
 **redemptions** | **string**| Number of times the coupon has been redeemed. | [optional]
 **validUntil** | **string**| Valid-until period date interval | [optional]

### Return type

[**\Reepay\Model\CouponList**](../Model/CouponList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerList**
> \Reepay\Model\CustomerList getCustomerList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $name, $email, $emailPrefix, $firstName, $lastName, $address, $address2, $postalCode, $city, $country, $phone, $company, $vat)

Get list of customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can only be the default `created`
$handle = "handle_example"; // string | Customer handle prefix
$handleContains = "handleContains_example"; // string | Customer handle contains
$name = "name_example"; // string | Search for name contained in first name concatenated with last name
$email = "email_example"; // string | Customer email
$emailPrefix = "emailPrefix_example"; // string | Customer email prefix
$firstName = "firstName_example"; // string | Contained in customer first name
$lastName = "lastName_example"; // string | Contained in customer last name
$address = "address_example"; // string | Contained in customer address
$address2 = "address2_example"; // string | Contained in customer address2
$postalCode = "postalCode_example"; // string | Contained in customer postal code
$city = "city_example"; // string | Contained in customer city
$country = "country_example"; // string | Customer country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
$phone = "phone_example"; // string | Contained in customer phone
$company = "company_example"; // string | Contained in customer company
$vat = "vat_example"; // string | Contained in customer vat code

try {
    $result = $apiInstance->getCustomerList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $name, $email, $emailPrefix, $firstName, $lastName, $address, $address2, $postalCode, $city, $country, $phone, $company, $vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getCustomerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Can only be the default &#x60;created&#x60; | [optional] [default to created]
 **handle** | **string**| Customer handle prefix | [optional]
 **handleContains** | **string**| Customer handle contains | [optional]
 **name** | **string**| Search for name contained in first name concatenated with last name | [optional]
 **email** | **string**| Customer email | [optional]
 **emailPrefix** | **string**| Customer email prefix | [optional]
 **firstName** | **string**| Contained in customer first name | [optional]
 **lastName** | **string**| Contained in customer last name | [optional]
 **address** | **string**| Contained in customer address | [optional]
 **address2** | **string**| Contained in customer address2 | [optional]
 **postalCode** | **string**| Contained in customer postal code | [optional]
 **city** | **string**| Contained in customer city | [optional]
 **country** | **string**| Customer country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) | [optional]
 **phone** | **string**| Contained in customer phone | [optional]
 **company** | **string**| Contained in customer company | [optional]
 **vat** | **string**| Contained in customer vat code | [optional]

### Return type

[**\Reepay\Model\CustomerList**](../Model/CustomerList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountList**
> \Reepay\Model\DiscountList getDiscountList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $applyTo, $name, $description, $amount, $percentage, $fixedCount)

Get list of discounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute for time limit. Can be `created` or `deleted`
$handle = "handle_example"; // string | Discount handle prefix
$state = "state_example"; // string | State of discount. States: `active` or `deleted`
$applyTo = array("applyTo_example"); // string[] | Which order lines the discount is applicable to: `all`, `setup_fee`, `plan`, `additional_cost`, `add_on` and `ondemand`. Multiple can be defined.
$name = "name_example"; // string | Name of discount. Used as order line text.
$description = "description_example"; // string | Optional description of discount
$amount = "amount_example"; // string | Fixed amount discount deducted from order line amounts including VAT.
$percentage = "percentage_example"; // string | Percentage discount applied to each applicable order line.
$fixedCount = "fixedCount_example"; // string | Apply discount to a fixed number of invoices

try {
    $result = $apiInstance->getDiscountList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $applyTo, $name, $description, $amount, $percentage, $fixedCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getDiscountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute for time limit. Can be &#x60;created&#x60; or &#x60;deleted&#x60; | [optional] [default to created]
 **handle** | **string**| Discount handle prefix | [optional]
 **state** | **string**| State of discount. States: &#x60;active&#x60; or &#x60;deleted&#x60; | [optional]
 **applyTo** | [**string[]**](../Model/string.md)| Which order lines the discount is applicable to: &#x60;all&#x60;, &#x60;setup_fee&#x60;, &#x60;plan&#x60;, &#x60;additional_cost&#x60;, &#x60;add_on&#x60; and &#x60;ondemand&#x60;. Multiple can be defined. | [optional]
 **name** | **string**| Name of discount. Used as order line text. | [optional]
 **description** | **string**| Optional description of discount | [optional]
 **amount** | **string**| Fixed amount discount deducted from order line amounts including VAT. | [optional]
 **percentage** | **string**| Percentage discount applied to each applicable order line. | [optional]
 **fixedCount** | **string**| Apply discount to a fixed number of invoices | [optional]

### Return type

[**\Reepay\Model\DiscountList**](../Model/DiscountList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceList**
> \Reepay\Model\InvoiceList getInvoiceList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $state, $excludeState, $customer, $amount, $refundedAmount, $authorizedAmount, $currency, $partialSettled, $type, $subscription, $plan, $dunningStart, $dunningSuccess, $number, $due)

Get list of invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `settled`. Default is `created`.
$handle = "handle_example"; // string | Invoice handle prefix
$handleContains = "handleContains_example"; // string | Invoice handle contains
$state = array("state_example"); // string[] | Invoice state, multiple can be defined
$excludeState = array("excludeState_example"); // string[] | Invoice state to exclude, multiple can be defined
$customer = "customer_example"; // string | Invoices for customer by customer handle
$amount = "amount_example"; // string | Amount in minor unit interval. See documentation of intervals.
$refundedAmount = "refundedAmount_example"; // string | Refunded amount in minor unit interval. See documentation of intervals.
$authorizedAmount = "authorizedAmount_example"; // string | Authorized amount in minor unit interval. See documentation of intervals.
$currency = array("currency_example"); // string[] | Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$partialSettled = true; // bool | Filter invoices based on partial settled. If `true` invoices where `authorized_amount < settled_amount` is returned. If `false` invoices where `settled_amount = authorized_amount` is returned.
$type = array("type_example"); // string[] | Invoice type, multiple can be defined. `s` - subscription recurring, `so` - subscription one-time, `soi` - subscription one-time instant, `co` - customer one-time, `ch` - charge
$subscription = "subscription_example"; // string | Invoices for subscription by subscription handle
$plan = "plan_example"; // string | Invoices for subscription plan by subscription plan handle
$dunningStart = "dunningStart_example"; // string | Dunning start date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals.
$dunningSuccess = "dunningSuccess_example"; // string | Dunning success date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals.
$number = 56; // int | Invoice number if subscription invoice
$due = "due_example"; // string | Due date if due date defined for subscription invoice

try {
    $result = $apiInstance->getInvoiceList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $state, $excludeState, $customer, $amount, $refundedAmount, $authorizedAmount, $currency, $partialSettled, $type, $subscription, $plan, $dunningStart, $dunningSuccess, $number, $due);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getInvoiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;settled&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Invoice handle prefix | [optional]
 **handleContains** | **string**| Invoice handle contains | [optional]
 **state** | [**string[]**](../Model/string.md)| Invoice state, multiple can be defined | [optional]
 **excludeState** | [**string[]**](../Model/string.md)| Invoice state to exclude, multiple can be defined | [optional]
 **customer** | **string**| Invoices for customer by customer handle | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **refundedAmount** | **string**| Refunded amount in minor unit interval. See documentation of intervals. | [optional]
 **authorizedAmount** | **string**| Authorized amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **partialSettled** | **bool**| Filter invoices based on partial settled. If &#x60;true&#x60; invoices where &#x60;authorized_amount &lt; settled_amount&#x60; is returned. If &#x60;false&#x60; invoices where &#x60;settled_amount &#x3D; authorized_amount&#x60; is returned. | [optional]
 **type** | [**string[]**](../Model/string.md)| Invoice type, multiple can be defined. &#x60;s&#x60; - subscription recurring, &#x60;so&#x60; - subscription one-time, &#x60;soi&#x60; - subscription one-time instant, &#x60;co&#x60; - customer one-time, &#x60;ch&#x60; - charge | [optional]
 **subscription** | **string**| Invoices for subscription by subscription handle | [optional]
 **plan** | **string**| Invoices for subscription plan by subscription plan handle | [optional]
 **dunningStart** | **string**| Dunning start date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals. | [optional]
 **dunningSuccess** | **string**| Dunning success date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals. | [optional]
 **number** | **int**| Invoice number if subscription invoice | [optional]
 **due** | **string**| Due date if due date defined for subscription invoice | [optional]

### Return type

[**\Reepay\Model\InvoiceList**](../Model/InvoiceList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentMethodList**
> \Reepay\Model\PaymentMethodList getPaymentMethodList($from, $to, $interval, $size, $nextPageToken, $range, $id, $state, $paymentType, $customer, $subscription, $reference, $failed, $cardType, $transactionCardType, $cardPrefix, $cardPostfix, $cardFingerprint, $cardCountry, $cardGateway, $cardAgreement, $mpsExternalId)

Get list of payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can only be the default `created`
$id = "id_example"; // string | Payment method id
$state = array("state_example"); // string[] | Payment state, multiple can be defined. States: `pending`, `active`, `inactivated`, `failed` and `deleted`
$paymentType = array("paymentType_example"); // string[] | Payment method payment type, multiple can be defined. `card`, `mobilepay`, `vipps`, `swish`, `viabill`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `ideal`, `p24`, `blik`, `bancontact`, `giropay`, `sepa`, `verkkopankki` or `mobilepay_subscriptions`
$customer = "customer_example"; // string | Customer owning payment method
$subscription = "subscription_example"; // string | Payment methods for subscription
$reference = "reference_example"; // string | Payment method reference
$failed = "failed_example"; // string | Failed date interval
$cardType = array("cardType_example"); // string[] | Card payment methods with card type. Multiple can be defined. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
$transactionCardType = array("transactionCardType_example"); // string[] | Card payment methods with transaction card type. Multiple can be defined. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
$cardPrefix = "cardPrefix_example"; // string | Card payment methods with card with prefix
$cardPostfix = "cardPostfix_example"; // string | Card payment methods with card number postfix
$cardFingerprint = "cardFingerprint_example"; // string | Card payment methods with card number postfix
$cardCountry = array("cardCountry_example"); // string[] | Card payment methods with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
$cardGateway = "cardGateway_example"; // string | Card payment methods tied to card gateway
$cardAgreement = "cardAgreement_example"; // string | Card payment methods tied to card agreement with id
$mpsExternalId = "mpsExternalId_example"; // string | MobilePay Subscription external id

try {
    $result = $apiInstance->getPaymentMethodList($from, $to, $interval, $size, $nextPageToken, $range, $id, $state, $paymentType, $customer, $subscription, $reference, $failed, $cardType, $transactionCardType, $cardPrefix, $cardPostfix, $cardFingerprint, $cardCountry, $cardGateway, $cardAgreement, $mpsExternalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPaymentMethodList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Can only be the default &#x60;created&#x60; | [optional] [default to created]
 **id** | **string**| Payment method id | [optional]
 **state** | [**string[]**](../Model/string.md)| Payment state, multiple can be defined. States: &#x60;pending&#x60;, &#x60;active&#x60;, &#x60;inactivated&#x60;, &#x60;failed&#x60; and &#x60;deleted&#x60; | [optional]
 **paymentType** | [**string[]**](../Model/string.md)| Payment method payment type, multiple can be defined. &#x60;card&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60;, &#x60;ideal&#x60;, &#x60;p24&#x60;, &#x60;blik&#x60;, &#x60;bancontact&#x60;, &#x60;giropay&#x60;, &#x60;sepa&#x60;, &#x60;verkkopankki&#x60; or &#x60;mobilepay_subscriptions&#x60; | [optional]
 **customer** | **string**| Customer owning payment method | [optional]
 **subscription** | **string**| Payment methods for subscription | [optional]
 **reference** | **string**| Payment method reference | [optional]
 **failed** | **string**| Failed date interval | [optional]
 **cardType** | [**string[]**](../Model/string.md)| Card payment methods with card type. Multiple can be defined. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional]
 **transactionCardType** | [**string[]**](../Model/string.md)| Card payment methods with transaction card type. Multiple can be defined. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional]
 **cardPrefix** | **string**| Card payment methods with card with prefix | [optional]
 **cardPostfix** | **string**| Card payment methods with card number postfix | [optional]
 **cardFingerprint** | **string**| Card payment methods with card number postfix | [optional]
 **cardCountry** | [**string[]**](../Model/string.md)| Card payment methods with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
 **cardGateway** | **string**| Card payment methods tied to card gateway | [optional]
 **cardAgreement** | **string**| Card payment methods tied to card agreement with id | [optional]
 **mpsExternalId** | **string**| MobilePay Subscription external id | [optional]

### Return type

[**\Reepay\Model\PaymentMethodList**](../Model/PaymentMethodList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutList**
> \Reepay\Model\PayoutList getPayoutList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $customer, $state, $amount, $currency, $card, $cardType, $cardPrefix, $cardPostfix, $cardFingerprint)

Get list of payouts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `paid`. Default is `created`.
$handle = "handle_example"; // string | Payout handle prefix
$handleContains = "handleContains_example"; // string | Payout handle contains
$customer = "customer_example"; // string | Payouts for customer by customer handle
$state = array("state_example"); // string[] | Payout transaction state, multiple can be defined
$amount = "amount_example"; // string | Amount in minor unit interval. See documentation of intervals.
$currency = array("currency_example"); // string[] | Payout currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$card = "card_example"; // string | Payouts for saved card
$cardType = "cardType_example"; // string | Payouts for card type
$cardPrefix = "cardPrefix_example"; // string | Payouts for card with prefix
$cardPostfix = "cardPostfix_example"; // string | Payouts for card with postfix
$cardFingerprint = "cardFingerprint_example"; // string | Payouts for card with postfix

try {
    $result = $apiInstance->getPayoutList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $customer, $state, $amount, $currency, $card, $cardType, $cardPrefix, $cardPostfix, $cardFingerprint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPayoutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;paid&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Payout handle prefix | [optional]
 **handleContains** | **string**| Payout handle contains | [optional]
 **customer** | **string**| Payouts for customer by customer handle | [optional]
 **state** | [**string[]**](../Model/string.md)| Payout transaction state, multiple can be defined | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Payout currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **card** | **string**| Payouts for saved card | [optional]
 **cardType** | **string**| Payouts for card type | [optional]
 **cardPrefix** | **string**| Payouts for card with prefix | [optional]
 **cardPostfix** | **string**| Payouts for card with postfix | [optional]
 **cardFingerprint** | **string**| Payouts for card with postfix | [optional]

### Return type

[**\Reepay\Model\PayoutList**](../Model/PayoutList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanList**
> \Reepay\Model\PlanList getPlanList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $scheduleType, $partialPeriodHandling, $setupFeeHandling, $fixedLifeTimeUnit, $trialIntervalUnit, $dunningPlanHandle, $name, $description, $setupFeeText, $amount, $quantity, $fixedCount, $fixedLifeTimeLength, $trialIntervalLength, $intervalLength, $scheduleFixedDay, $renewalReminderEmailDays, $trialReminderEmailDays, $baseMonth, $noticePeriods, $minimumProratedAmount, $fixationPeriods, $setupFee, $amountInclVat, $noticePeriodsAfterCurrent, $fixationPeriodsFull, $includeZeroAmount, $partialProrationDays, $fixedTrialDays)

Get list of plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute for time limit. Accepted value `created`
$handle = "handle_example"; // string | Plan handle prefix
$state = array("state_example"); // string[] | State of the subscription plan, one of the following: `active`, `superseded` or `deleted`. Multiple can be defined.
$scheduleType = array("scheduleType_example"); // string[] | Scheduling type, one of the following: `manual`, `daily`, `weekly_fixedday`, `month_startdate`, `month_fixedday`, `month_lastday`. Multiple can be defined.
$partialPeriodHandling = array("partialPeriodHandling_example"); // string[] | The way to bill initial (not full) period. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`. Multiple can be defined.
$setupFeeHandling = array("setupFeeHandling_example"); // string[] | How the billing of the setup fee should be done. Accepted values: `first`, `separate`, `separate_conditional`. Multiple can be defined.
$fixedLifeTimeUnit = array("fixedLifeTimeUnit_example"); // string[] | Time unit use for fixed life time. Accepted units: `days` or `months`
$trialIntervalUnit = array("trialIntervalUnit_example"); // string[] | Time unit for free trial period. Accepted units: `days` or `months`
$dunningPlanHandle = "dunningPlanHandle_example"; // string | Dunning plan handle
$name = "name_example"; // string | Name of plan. Used as order line text.
$description = "description_example"; // string | Optional description of plan
$setupFeeText = "setupFeeText_example"; // string | Optional invoice order text for the setup fee
$amount = "amount_example"; // string | Fixed amount plan deducted from order line amounts including VAT.
$quantity = "quantity_example"; // string | Optional default quantity of the subscription plan product for new subscriptions. Default is 1.
$fixedCount = "fixedCount_example"; // string | Fixed number of renewals for subscriptions using this plan. Equals the number of scheduled invoices.
$fixedLifeTimeLength = "fixedLifeTimeLength_example"; // string | The number of days/months for which the subscription is live.
$trialIntervalLength = "trialIntervalLength_example"; // string | The number of days/months for how long the free trial period lasts
$intervalLength = "intervalLength_example"; // string | The length of subscription intervals. E.g. every second month or every 14 days.
$scheduleFixedDay = "scheduleFixedDay_example"; // string | The number of day for `weekly_fixedday` and `month_fixedday` schedule types. For months the allowed values are 1-28 for weeks 1-7
$renewalReminderEmailDays = "renewalReminderEmailDays_example"; // string | Number of days before next billing to send a reminder email.
$trialReminderEmailDays = "trialReminderEmailDays_example"; // string | Number of days before end of trial to send a reminder email.
$baseMonth = "baseMonth_example"; // string | Base month for fixed month schedule type
$noticePeriods = "noticePeriods_example"; // string | Number of notice periods before a cancellation.
$minimumProratedAmount = "minimumProratedAmount_example"; // string | Minimum amount for prorated invoice. If the amount is less, 0 is charged
$fixationPeriods = "fixationPeriods_example"; // string | Number of paid periods before expiring after a cancellation.
$setupFee = "setupFee_example"; // string | Optional one-time setup fee billed with the first invoice.
$amountInclVat = "amountInclVat_example"; // string | Whether the amount is including VAT. Values: `true` or `false`
$noticePeriodsAfterCurrent = "noticePeriodsAfterCurrent_example"; // string | Is cancelled flag. Values: `true` or `false`
$fixationPeriodsFull = "fixationPeriodsFull_example"; // string | If fixation periods are defined, and the subscription can have a partial prorated first period,this parameter controls if the the last period should be full, or partial. Values: `true` or `false`
$includeZeroAmount = "includeZeroAmount_example"; // string | Whether to add a zero amount order line to subscription invoices. Values: `true` or `false`
$partialProrationDays = "partialProrationDays_example"; // string | If proration should be day based (instead of minute). Values: `true` or `false`
$fixedTrialDays = "fixedTrialDays_example"; // string | Controls if trial expires at midnight or it's down to the minute. Values: `true` or `false`

try {
    $result = $apiInstance->getPlanList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $state, $scheduleType, $partialPeriodHandling, $setupFeeHandling, $fixedLifeTimeUnit, $trialIntervalUnit, $dunningPlanHandle, $name, $description, $setupFeeText, $amount, $quantity, $fixedCount, $fixedLifeTimeLength, $trialIntervalLength, $intervalLength, $scheduleFixedDay, $renewalReminderEmailDays, $trialReminderEmailDays, $baseMonth, $noticePeriods, $minimumProratedAmount, $fixationPeriods, $setupFee, $amountInclVat, $noticePeriodsAfterCurrent, $fixationPeriodsFull, $includeZeroAmount, $partialProrationDays, $fixedTrialDays);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPlanList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name                          | Type                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Notes                           
-------------------------------|------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------
 **from**                      | **string**                         | Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]                      
 **to**                        | **string**                         | Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now.                                                                                                                                                                                                                 | [optional]                      
 **interval**                  | **string**                         | Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations                                                                                                                                                                                                                                                                              | [optional]                      
 **size**                      | **int**                            | Page size between 10 and 100 (default 20)                                                                                                                                                                                                                                                                                                                                                                                                                                       | [optional] [default to 20]      
 **nextPageToken**             | **string**                         | Next page token from previous response to get next page                                                                                                                                                                                                                                                                                                                                                                                                                         | [optional]                      
 **range**                     | **string**                         | Time and date attribute for time limit. Accepted value &#x60;created&#x60;                                                                                                                                                                                                                                                                                                                                                                                                      | [optional] [default to created] 
 **handle**                    | **string**                         | Plan handle prefix                                                                                                                                                                                                                                                                                                                                                                                                                                                              | [optional]                      
 **state**                     | [**string[]**](../Model/string.md) | State of the subscription plan, one of the following: &#x60;active&#x60;, &#x60;superseded&#x60; or &#x60;deleted&#x60;. Multiple can be defined.                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **scheduleType**              | [**string[]**](../Model/string.md) | Scheduling type, one of the following: &#x60;manual&#x60;, &#x60;daily&#x60;, &#x60;weekly_fixedday&#x60;, &#x60;month_startdate&#x60;, &#x60;month_fixedday&#x60;, &#x60;month_lastday&#x60;. Multiple can be defined.                                                                                                                                                                                                                                                         | [optional]                      
 **partialPeriodHandling**     | [**string[]**](../Model/string.md) | The way to bill initial (not full) period. Options: &#x60;bill_full&#x60;, &#x60;bill_prorated&#x60;, &#x60;bill_zero_amount&#x60;, &#x60;no_bill&#x60;. Multiple can be defined.                                                                                                                                                                                                                                                                                               | [optional]                      
 **setupFeeHandling**          | [**string[]**](../Model/string.md) | How the billing of the setup fee should be done. Accepted values: &#x60;first&#x60;, &#x60;separate&#x60;, &#x60;separate_conditional&#x60;. Multiple can be defined.                                                                                                                                                                                                                                                                                                           | [optional]                      
 **fixedLifeTimeUnit**         | [**string[]**](../Model/string.md) | Time unit use for fixed life time. Accepted units: &#x60;days&#x60; or &#x60;months&#x60;                                                                                                                                                                                                                                                                                                                                                                                       | [optional]                      
 **trialIntervalUnit**         | [**string[]**](../Model/string.md) | Time unit for free trial period. Accepted units: &#x60;days&#x60; or &#x60;months&#x60;                                                                                                                                                                                                                                                                                                                                                                                         | [optional]                      
 **dunningPlanHandle**         | **string**                         | Dunning plan handle                                                                                                                                                                                                                                                                                                                                                                                                                                                             | [optional]                      
 **name**                      | **string**                         | Name of plan. Used as order line text.                                                                                                                                                                                                                                                                                                                                                                                                                                          | [optional]                      
 **description**               | **string**                         | Optional description of plan                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **setupFeeText**              | **string**                         | Optional invoice order text for the setup fee                                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      
 **amount**                    | **string**                         | Fixed amount plan deducted from order line amounts including VAT.                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **quantity**                  | **string**                         | Optional default quantity of the subscription plan product for new subscriptions. Default is 1.                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **fixedCount**                | **string**                         | Fixed number of renewals for subscriptions using this plan. Equals the number of scheduled invoices.                                                                                                                                                                                                                                                                                                                                                                            | [optional]                      
 **fixedLifeTimeLength**       | **string**                         | The number of days/months for which the subscription is live.                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      
 **trialIntervalLength**       | **string**                         | The number of days/months for how long the free trial period lasts                                                                                                                                                                                                                                                                                                                                                                                                              | [optional]                      
 **intervalLength**            | **string**                         | The length of subscription intervals. E.g. every second month or every 14 days.                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **scheduleFixedDay**          | **string**                         | The number of day for &#x60;weekly_fixedday&#x60; and &#x60;month_fixedday&#x60; schedule types. For months the allowed values are 1-28 for weeks 1-7                                                                                                                                                                                                                                                                                                                           | [optional]                      
 **renewalReminderEmailDays**  | **string**                         | Number of days before next billing to send a reminder email.                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **trialReminderEmailDays**    | **string**                         | Number of days before end of trial to send a reminder email.                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **baseMonth**                 | **string**                         | Base month for fixed month schedule type                                                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **noticePeriods**             | **string**                         | Number of notice periods before a cancellation.                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **minimumProratedAmount**     | **string**                         | Minimum amount for prorated invoice. If the amount is less, 0 is charged                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **fixationPeriods**           | **string**                         | Number of paid periods before expiring after a cancellation.                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **setupFee**                  | **string**                         | Optional one-time setup fee billed with the first invoice.                                                                                                                                                                                                                                                                                                                                                                                                                      | [optional]                      
 **amountInclVat**             | **string**                         | Whether the amount is including VAT. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                              | [optional]                      
 **noticePeriodsAfterCurrent** | **string**                         | Is cancelled flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **fixationPeriodsFull**       | **string**                         | If fixation periods are defined, and the subscription can have a partial prorated first period,this parameter controls if the the last period should be full, or partial. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                         | [optional]                      
 **includeZeroAmount**         | **string**                         | Whether to add a zero amount order line to subscription invoices. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **partialProrationDays**      | **string**                         | If proration should be day based (instead of minute). Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                             | [optional]                      
 **fixedTrialDays**            | **string**                         | Controls if trial expires at midnight or it&#x27;s down to the minute. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                            | [optional]                      

### Return type

[**\Reepay\Model\PlanList**](../Model/PlanList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionList**

> \Reepay\Model\SubscriptionList getSubscriptionList($from, $to, $interval, $size, $nextPageToken, $range, $handle,
> $handleContains, $customer, $plan, $state, $amount, $quantity, $activated, $cancelledDate, $reactivated, $created,
> $renewing, $planVersion, $amountInclVat, $startDate, $endDate, $graceDuration, $currentPeriodStart, $nextPeriodStart,
> $firstPeriodStart, $lastPeriodStart, $trialStart, $trialEnd, $inTrial, $hasStarted, $renewalCount, $expiredDate,
> $expireReason, $onHoldDate, $onHoldReason, $paymentMethodAdded, $reminderEmailSent, $failedInvoices, $failedAmount,
> $cancelledInvoices, $cancelledAmount, $pendingInvoices, $pendingAmount, $dunningInvoices, $dunningAmount,
> $settledInvoices, $settledAmount, $refundedAmount, $pendingAdditionalCosts, $pendingAdditionalCostAmount,
> $transferredAdditionalCosts, $transferredAdditionalCostAmount, $pendingCredits, $pendingCreditAmount,
> $transferredCredits, $transferredCreditAmount, $subscriptionAddOnHandle, $addOnHandle, $subscriptionDiscountHandle,
> $discountHandle, $couponHandle)

Get list of subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can be the `created`, `activated`, `expired`, `cancelled`, `on_hold` or `reactivated`
$handle = "handle_example"; // string | Subscription handle prefix
$handleContains = "handleContains_example"; // string | Subscription handle contains
$customer = "customer_example"; // string | Customer owning subscription
$plan = "plan_example"; // string | Plan owning subscription
$state = array("state_example"); // string[] | Subscription state, multiple can be defined. States: `active`, `expired`, `on_hold` or `pending`
$amount = "amount_example"; // string | Custom amount in minor unit interval. See documentation of intervals.
$quantity = "quantity_example"; // string | Quantity. See documentation of intervals.
$activated = "activated_example"; // string | Activated date interval
$cancelledDate = "cancelledDate_example"; // string | Cancelled date interval
$reactivated = "reactivated_example"; // string | Reactivated date interval
$created = "created_example"; // string | Created date interval
$renewing = "renewing_example"; // string | Renewing flag. Values: `true` or `false`
$planVersion = 56; // int | Plan version
$amountInclVat = "amountInclVat_example"; // string | Amount incl vat test flag. Values: `true` or `false`
$startDate = "startDate_example"; // string | Start date interval
$endDate = "endDate_example"; // string | End date interval
$graceDuration = "graceDuration_example"; // string | Grace duration in seconds. See documentation of intervals.
$currentPeriodStart = "currentPeriodStart_example"; // string | Current period start date interval
$nextPeriodStart = "nextPeriodStart_example"; // string | Next period start date interval
$firstPeriodStart = "firstPeriodStart_example"; // string | First period start date interval
$lastPeriodStart = "lastPeriodStart_example"; // string | Last period start date interval
$trialStart = "trialStart_example"; // string | Trial period start date interval
$trialEnd = "trialEnd_example"; // string | Trial period end date interval
$inTrial = "inTrial_example"; // string | In trial flag. Values: `true` or `false`
$hasStarted = "hasStarted_example"; // string | Has started flag. Values: `true` or `false`
$renewalCount = "renewalCount_example"; // string | Renewal Count. See documentation of intervals.
$expiredDate = "expiredDate_example"; // string | Expired period date interval
$expireReason = array("expireReason_example"); // string[] | On hold reason, multiple can be defined. Types: `dunning`, `cancelled`,`ondemand`, and `fixed`
$onHoldDate = "onHoldDate_example"; // string | On hold period date interval
$onHoldReason = array("onHoldReason_example"); // string[] | On hold reason, multiple can be defined. Types: `ondemand`, and `dunning`
$paymentMethodAdded = "paymentMethodAdded_example"; // string | Payment method added flag. Values: `true` or `false`
$reminderEmailSent = "reminderEmailSent_example"; // string | Reminder email sent period date interval
$failedInvoices = "failedInvoices_example"; // string | Failed invoices. See documentation of intervals.
$failedAmount = "failedAmount_example"; // string | Failed amount. See documentation of intervals.
$cancelledInvoices = "cancelledInvoices_example"; // string | Cancelled invoices. See documentation of intervals.
$cancelledAmount = "cancelledAmount_example"; // string | Cancelled amount. See documentation of intervals.
$pendingInvoices = "pendingInvoices_example"; // string | Pending invoices. See documentation of intervals.
$pendingAmount = "pendingAmount_example"; // string | Pending amount invoices. See documentation of intervals.
$dunningInvoices = "dunningInvoices_example"; // string | Dunning invoices. See documentation of intervals.
$dunningAmount = "dunningAmount_example"; // string | Dunning amount. See documentation of intervals.
$settledInvoices = "settledInvoices_example"; // string | Settled invoices. See documentation of intervals.
$settledAmount = "settledAmount_example"; // string | Settled amount. See documentation of intervals.
$refundedAmount = "refundedAmount_example"; // string | Refunded amount. See documentation of intervals.
$pendingAdditionalCosts = "pendingAdditionalCosts_example"; // string | Pending additional costs. See documentation of intervals.
$pendingAdditionalCostAmount = "pendingAdditionalCostAmount_example"; // string | Pending additional cost amount. See documentation of intervals.
$transferredAdditionalCosts = "transferredAdditionalCosts_example"; // string | Transferred additional costs. See documentation of intervals.
$transferredAdditionalCostAmount = "transferredAdditionalCostAmount_example"; // string | Transferred additional cost amount. See documentation of intervals.
$pendingCredits = "pendingCredits_example"; // string | Pending credits. See documentation of intervals.
$pendingCreditAmount = "pendingCreditAmount_example"; // string | Pending credit amount. See documentation of intervals.
$transferredCredits = "transferredCredits_example"; // string | Transferred credits. See documentation of intervals.
$transferredCreditAmount = "transferredCreditAmount_example"; // string | Transferred credit amount. See documentation of intervals.
$subscriptionAddOnHandle = "subscriptionAddOnHandle_example"; // string | Subscription add-on handle
$addOnHandle = "addOnHandle_example"; // string | Add-on handle
$subscriptionDiscountHandle = "subscriptionDiscountHandle_example"; // string | Subscription discount handle
$discountHandle = "discountHandle_example"; // string | Discount handle
$couponHandle = "couponHandle_example"; // string | Coupon handle

try {
    $result = $apiInstance->getSubscriptionList($from, $to, $interval, $size, $nextPageToken, $range, $handle, $handleContains, $customer, $plan, $state, $amount, $quantity, $activated, $cancelledDate, $reactivated, $created, $renewing, $planVersion, $amountInclVat, $startDate, $endDate, $graceDuration, $currentPeriodStart, $nextPeriodStart, $firstPeriodStart, $lastPeriodStart, $trialStart, $trialEnd, $inTrial, $hasStarted, $renewalCount, $expiredDate, $expireReason, $onHoldDate, $onHoldReason, $paymentMethodAdded, $reminderEmailSent, $failedInvoices, $failedAmount, $cancelledInvoices, $cancelledAmount, $pendingInvoices, $pendingAmount, $dunningInvoices, $dunningAmount, $settledInvoices, $settledAmount, $refundedAmount, $pendingAdditionalCosts, $pendingAdditionalCostAmount, $transferredAdditionalCosts, $transferredAdditionalCostAmount, $pendingCredits, $pendingCreditAmount, $transferredCredits, $transferredCreditAmount, $subscriptionAddOnHandle, $addOnHandle, $subscriptionDiscountHandle, $discountHandle, $couponHandle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getSubscriptionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

 Name                                | Type                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Notes                           
-------------------------------------|------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------
 **from**                            | **string**                         | Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]                      
 **to**                              | **string**                         | Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now.                                                                                                                                                                                                                 | [optional]                      
 **interval**                        | **string**                         | Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations                                                                                                                                                                                                                                                                              | [optional]                      
 **size**                            | **int**                            | Page size between 10 and 100 (default 20)                                                                                                                                                                                                                                                                                                                                                                                                                                       | [optional] [default to 20]      
 **nextPageToken**                   | **string**                         | Next page token from previous response to get next page                                                                                                                                                                                                                                                                                                                                                                                                                         | [optional]                      
 **range**                           | **string**                         | Time and date attribute to time limit. Can be the &#x60;created&#x60;, &#x60;activated&#x60;, &#x60;expired&#x60;, &#x60;cancelled&#x60;, &#x60;on_hold&#x60; or &#x60;reactivated&#x60;                                                                                                                                                                                                                                                                                        | [optional] [default to created] 
 **handle**                          | **string**                         | Subscription handle prefix                                                                                                                                                                                                                                                                                                                                                                                                                                                      | [optional]                      
 **handleContains**                  | **string**                         | Subscription handle contains                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **customer**                        | **string**                         | Customer owning subscription                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **plan**                            | **string**                         | Plan owning subscription                                                                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **state**                           | [**string[]**](../Model/string.md) | Subscription state, multiple can be defined. States: &#x60;active&#x60;, &#x60;expired&#x60;, &#x60;on_hold&#x60; or &#x60;pending&#x60;                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **amount**                          | **string**                         | Custom amount in minor unit interval. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                           | [optional]                      
 **quantity**                        | **string**                         | Quantity. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                       | [optional]                      
 **activated**                       | **string**                         | Activated date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                         | [optional]                      
 **cancelledDate**                   | **string**                         | Cancelled date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                         | [optional]                      
 **reactivated**                     | **string**                         | Reactivated date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                       | [optional]                      
 **created**                         | **string**                         | Created date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                           | [optional]                      
 **renewing**                        | **string**                         | Renewing flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **planVersion**                     | **int**                            | Plan version                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **amountInclVat**                   | **string**                         | Amount incl vat test flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **startDate**                       | **string**                         | Start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                             | [optional]                      
 **endDate**                         | **string**                         | End date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **graceDuration**                   | **string**                         | Grace duration in seconds. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                      | [optional]                      
 **currentPeriodStart**              | **string**                         | Current period start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                              | [optional]                      
 **nextPeriodStart**                 | **string**                         | Next period start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **firstPeriodStart**                | **string**                         | First period start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **lastPeriodStart**                 | **string**                         | Last period start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **trialStart**                      | **string**                         | Trial period start date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **trialEnd**                        | **string**                         | Trial period end date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                  | [optional]                      
 **inTrial**                         | **string**                         | In trial flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **hasStarted**                      | **string**                         | Has started flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **renewalCount**                    | **string**                         | Renewal Count. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                  | [optional]                      
 **expiredDate**                     | **string**                         | Expired period date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **expireReason**                    | [**string[]**](../Model/string.md) | On hold reason, multiple can be defined. Types: &#x60;dunning&#x60;, &#x60;cancelled&#x60;,&#x60;ondemand&#x60;, and &#x60;fixed&#x60;                                                                                                                                                                                                                                                                                                                                          | [optional]                      
 **onHoldDate**                      | **string**                         | On hold period date interval                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **onHoldReason**                    | [**string[]**](../Model/string.md) | On hold reason, multiple can be defined. Types: &#x60;ondemand&#x60;, and &#x60;dunning&#x60;                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      
 **paymentMethodAdded**              | **string**                         | Payment method added flag. Values: &#x60;true&#x60; or &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **reminderEmailSent**               | **string**                         | Reminder email sent period date interval                                                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **failedInvoices**                  | **string**                         | Failed invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **failedAmount**                    | **string**                         | Failed amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                  | [optional]                      
 **cancelledInvoices**               | **string**                         | Cancelled invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                             | [optional]                      
 **cancelledAmount**                 | **string**                         | Cancelled amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **pendingInvoices**                 | **string**                         | Pending invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **pendingAmount**                   | **string**                         | Pending amount invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                        | [optional]                      
 **dunningInvoices**                 | **string**                         | Dunning invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **dunningAmount**                   | **string**                         | Dunning amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **settledInvoices**                 | **string**                         | Settled invoices. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                               | [optional]                      
 **settledAmount**                   | **string**                         | Settled amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **refundedAmount**                  | **string**                         | Refunded amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **pendingAdditionalCosts**          | **string**                         | Pending additional costs. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                       | [optional]                      
 **pendingAdditionalCostAmount**     | **string**                         | Pending additional cost amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **transferredAdditionalCosts**      | **string**                         | Transferred additional costs. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      
 **transferredAdditionalCostAmount** | **string**                         | Transferred additional cost amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                             | [optional]                      
 **pendingCredits**                  | **string**                         | Pending credits. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                                | [optional]                      
 **pendingCreditAmount**             | **string**                         | Pending credit amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                          | [optional]                      
 **transferredCredits**              | **string**                         | Transferred credits. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                            | [optional]                      
 **transferredCreditAmount**         | **string**                         | Transferred credit amount. See documentation of intervals.                                                                                                                                                                                                                                                                                                                                                                                                                      | [optional]                      
 **subscriptionAddOnHandle**         | **string**                         | Subscription add-on handle                                                                                                                                                                                                                                                                                                                                                                                                                                                      | [optional]                      
 **addOnHandle**                     | **string**                         | Add-on handle                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      
 **subscriptionDiscountHandle**      | **string**                         | Subscription discount handle                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [optional]                      
 **discountHandle**                  | **string**                         | Discount handle                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | [optional]                      
 **couponHandle**                    | **string**                         | Coupon handle                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional]                      

### Return type

[**\Reepay\Model\SubscriptionList**](../Model/SubscriptionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionList**
> \Reepay\Model\TransactionList getTransactionList($from, $to, $interval, $size, $nextPageToken, $range, $type, $state, $paymentType, $invoice, $currency, $amount, $cardType, $transactionCardType, $cardPrefix, $cardPostfix, $cardFingerprint, $cardCountry, $cardGateway, $paymentMethod, $cardAcquirerCode, $cardErrorState, $cardError, $paymentContext, $cardAcquirerReference)

Get list of transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "to_example"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "interval_example"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$nextPageToken = "nextPageToken_example"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created`, `settled`, `authorized`, `refunded` or `failed`. Default is `created`.
$type = array("type_example"); // string[] | Transaction type, multiple can be defined. Types: `settle`, `refund` and `authorization`
$state = array("state_example"); // string[] | Transaction state, multiple can be defined. States: `pending`, `authorized`, `processing`, `settled`, `refunded`, `failed` and `cancelled`
$paymentType = array("paymentType_example"); // string[] | Transaction payment type, multiple can be defined. `card`, `mobilepay`, `vipps`, `swish`, `viabill`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `ideal`, `p24`, `blik`, `bancontact`, `giropay`, `sepa`, `verkkopankki` or `mobilepay_subscriptions`
$invoice = "invoice_example"; // string | Transactions for invoice by invoice handle
$currency = array("currency_example"); // string[] | Currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$amount = "amount_example"; // string | Amount in minor unit interval. See documentation of intervals.
$cardType = array("cardType_example"); // string[] | Transactions for card type. Multiple can be defined. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
$transactionCardType = array("transactionCardType_example"); // string[] | Transactions with transaction card type. Multiple can be defined. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
$cardPrefix = "cardPrefix_example"; // string | Transactions for card with prefix
$cardPostfix = "cardPostfix_example"; // string | Transactions for card with postfix
$cardFingerprint = "cardFingerprint_example"; // string | Transactions for card with postfix
$cardCountry = array("cardCountry_example"); // string[] | Transactions with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
$cardGateway = "cardGateway_example"; // string | Transactions with card gateway.
$paymentMethod = "paymentMethod_example"; // string | Transactions using saved payment method
$cardAcquirerCode = "cardAcquirerCode_example"; // string | Transaction using card acquirer code
$cardErrorState = "cardErrorState_example"; // string | Transactions with card error state. `pending`, `accepted`, `soft_declined`, `hard_declined`, or `processing_error`
$cardError = "cardError_example"; // string | Transactions with card error state. `credit_card_expired`, `insufficient_funds`, `declined_by_acquirer`, `acquirer_communication_error`, `acquirer_error`, `acquirer_integration_error`, `acquirer_authentication_error`, `acquirer_configuration_error`, `acquirer_rejected_error`, `card_identifier_not_found`, `refund_amount_too_high`, `credit_card_lost_or_stolen`, `credit_card_suspected_fraud`, `authorization_expired`, `authorization_amount_exceeded`, `authorization_voided`, `settle_blocked`, `sca_required`, `risk_filter_block`, or `fraud_block`
$paymentContext = "paymentContext_example"; // string | Transaction payment context: cit - customer initiated, cit-cof customer initiated using stored information or mit - merchant initiated
$cardAcquirerReference = "cardAcquirerReference_example"; // string | Transaction with card acquirer reference

try {
    $result = $apiInstance->getTransactionList($from, $to, $interval, $size, $nextPageToken, $range, $type, $state, $paymentType, $invoice, $currency, $amount, $cardType, $transactionCardType, $cardPrefix, $cardPostfix, $cardFingerprint, $cardCountry, $cardGateway, $paymentMethod, $cardAcquirerCode, $cardErrorState, $cardError, $paymentContext, $cardAcquirerReference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Time range from (inclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Default from if no &#x60;interval&#x60; is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before &#x60;to&#x60; | [optional]
 **to** | **string**| Time range to (exclusive). Local date and time (according to account timezone) on the form &#x60;yyyy-MM-dd&#x60;, &#x60;yyyyMMdd&#x60;, &#x60;yyyy-MM-ddTHH:mm&#x60;, &#x60;yyyy-MM-ddTHH:mm:ss&#x60; or &#x60;yyyy-MM-ddTHH:mm:ss.SSS&#x60;. Defaults to now. | [optional]
 **interval** | **string**| Limit from &#x60;to&#x60; and interval back in time. E.g. one week. Will take precedence over &#x60;from&#x60;. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations | [optional]
 **size** | **int**| Page size between 10 and 100 (default 20) | [optional] [default to 20]
 **nextPageToken** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60;, &#x60;settled&#x60;, &#x60;authorized&#x60;, &#x60;refunded&#x60; or &#x60;failed&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **type** | [**string[]**](../Model/string.md)| Transaction type, multiple can be defined. Types: &#x60;settle&#x60;, &#x60;refund&#x60; and &#x60;authorization&#x60; | [optional]
 **state** | [**string[]**](../Model/string.md)| Transaction state, multiple can be defined. States: &#x60;pending&#x60;, &#x60;authorized&#x60;, &#x60;processing&#x60;, &#x60;settled&#x60;, &#x60;refunded&#x60;, &#x60;failed&#x60; and &#x60;cancelled&#x60; | [optional]
 **paymentType** | [**string[]**](../Model/string.md)| Transaction payment type, multiple can be defined. &#x60;card&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60;, &#x60;ideal&#x60;, &#x60;p24&#x60;, &#x60;blik&#x60;, &#x60;bancontact&#x60;, &#x60;giropay&#x60;, &#x60;sepa&#x60;, &#x60;verkkopankki&#x60; or &#x60;mobilepay_subscriptions&#x60; | [optional]
 **invoice** | **string**| Transactions for invoice by invoice handle | [optional]
 **currency** | [**string[]**](../Model/string.md)| Currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **cardType** | [**string[]**](../Model/string.md)| Transactions for card type. Multiple can be defined. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional]
 **transactionCardType** | [**string[]**](../Model/string.md)| Transactions with transaction card type. Multiple can be defined. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional]
 **cardPrefix** | **string**| Transactions for card with prefix | [optional]
 **cardPostfix** | **string**| Transactions for card with postfix | [optional]
 **cardFingerprint** | **string**| Transactions for card with postfix | [optional]
 **cardCountry** | [**string[]**](../Model/string.md)| Transactions with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
 **cardGateway** | **string**| Transactions with card gateway. | [optional]
 **paymentMethod** | **string**| Transactions using saved payment method | [optional]
 **cardAcquirerCode** | **string**| Transaction using card acquirer code | [optional]
 **cardErrorState** | **string**| Transactions with card error state. &#x60;pending&#x60;, &#x60;accepted&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60;, or &#x60;processing_error&#x60; | [optional]
 **cardError** | **string**| Transactions with card error state. &#x60;credit_card_expired&#x60;, &#x60;insufficient_funds&#x60;, &#x60;declined_by_acquirer&#x60;, &#x60;acquirer_communication_error&#x60;, &#x60;acquirer_error&#x60;, &#x60;acquirer_integration_error&#x60;, &#x60;acquirer_authentication_error&#x60;, &#x60;acquirer_configuration_error&#x60;, &#x60;acquirer_rejected_error&#x60;, &#x60;card_identifier_not_found&#x60;, &#x60;refund_amount_too_high&#x60;, &#x60;credit_card_lost_or_stolen&#x60;, &#x60;credit_card_suspected_fraud&#x60;, &#x60;authorization_expired&#x60;, &#x60;authorization_amount_exceeded&#x60;, &#x60;authorization_voided&#x60;, &#x60;settle_blocked&#x60;, &#x60;sca_required&#x60;, &#x60;risk_filter_block&#x60;, or &#x60;fraud_block&#x60; | [optional]
 **paymentContext** | **string**| Transaction payment context: cit - customer initiated, cit-cof customer initiated using stored information or mit - merchant initiated | [optional]
 **cardAcquirerReference** | **string**| Transaction with card acquirer reference | [optional]

### Return type

[**\Reepay\Model\TransactionList**](../Model/TransactionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

