# Reepay\ListApi

All URIs are relative to *https://api.reepay.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChargeList**](ListApi.md#getChargeList) | **GET** /v1/list/charge | Get list of charges
[**getCustomerList**](ListApi.md#getCustomerList) | **GET** /v1/list/customer | Get list of customers
[**getInvoiceList**](ListApi.md#getInvoiceList) | **GET** /v1/list/invoice | Get list of invoices
[**getPayoutList**](ListApi.md#getPayoutList) | **GET** /v1/list/payout | Get list of payouts
[**getTransactionList**](ListApi.md#getTransactionList) | **GET** /v1/list/transaction | Get list of transactions


# **getChargeList**
> \Reepay\Model\ChargeList getChargeList($from, $to, $interval, $size, $next_page_token, $range, $handle, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled)

Get list of charges



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ListApi();
$from = "2019-12-01"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "2020-01-01"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "P1W"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$next_page_token = "MTYzMjkxNDc4NTAwMDoxMA"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `settled`. Default is `created`.
$handle = "inv-1234"; // string | Invoice handle prefix
$state = array("pending"); // string[] | Invoice state, multiple can be defined
$exclude_state = array("created"); // string[] | Invoice state to exclude, multiple can be defined
$customer = "cust-0002"; // string | Invoices for customer by customer handle
$amount = "[10000;20000)"; // string | Amount in minor unit interval. See documentation of intervals.
$refunded_amount = "(0;)"; // string | Refunded amount in minor unit interval. See documentation of intervals.
$authorized_amount = "(0;)"; // string | Authorized amount in minor unit interval. See documentation of intervals.
$currency = array("USD"); // string[] | Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$partial_settled = true; // bool | Filter invoices based on partial settled. If `true` invoices where `authorized_amount < settled_amount` is returned. If `false` invoices where `settled_amount = authorized_amount` is returned.

try {
    $result = $api_instance->getChargeList($from, $to, $interval, $size, $next_page_token, $range, $handle, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled);
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
 **next_page_token** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;settled&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Invoice handle prefix | [optional]
 **state** | [**string[]**](../Model/string.md)| Invoice state, multiple can be defined | [optional]
 **exclude_state** | [**string[]**](../Model/string.md)| Invoice state to exclude, multiple can be defined | [optional]
 **customer** | **string**| Invoices for customer by customer handle | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **refunded_amount** | **string**| Refunded amount in minor unit interval. See documentation of intervals. | [optional]
 **authorized_amount** | **string**| Authorized amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **partial_settled** | **bool**| Filter invoices based on partial settled. If &#x60;true&#x60; invoices where &#x60;authorized_amount &lt; settled_amount&#x60; is returned. If &#x60;false&#x60; invoices where &#x60;settled_amount &#x3D; authorized_amount&#x60; is returned. | [optional]

### Return type

[**\Reepay\Model\ChargeList**](../Model/ChargeList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerList**
> \Reepay\Model\CustomerList getCustomerList($from, $to, $interval, $size, $next_page_token, $range, $handle, $name, $email, $first_name, $last_name, $address, $address2, $postal_code, $city, $country, $phone, $company, $vat)

Get list of customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ListApi();
$from = "2019-12-01"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "2020-01-01"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "P1W"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$next_page_token = "MTYzMjkxNDc4NTAwMDoxMA"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Can only be the default `created`
$handle = "cust-1234"; // string | Customer handle prefix
$name = "John Doe"; // string | Search for name contained in first name concatenated with last name
$email = "mail@example.com"; // string | Customer email
$first_name = "Max"; // string | Contained in customer first name
$last_name = "Power"; // string | Contained in customer last name
$address = "Some street"; // string | Contained in customer address
$address2 = "Some apartment"; // string | Contained in customer address2
$postal_code = "Some apartment"; // string | Contained in customer postal code
$city = "Some City"; // string | Contained in customer city
$country = "US"; // string | Customer country in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
$phone = "+4531313131"; // string | Contained in customer phone
$company = "Acme"; // string | Contained in customer company
$vat = "22334455"; // string | Contained in customer vat code

try {
    $result = $api_instance->getCustomerList($from, $to, $interval, $size, $next_page_token, $range, $handle, $name, $email, $first_name, $last_name, $address, $address2, $postal_code, $city, $country, $phone, $company, $vat);
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
 **next_page_token** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Can only be the default &#x60;created&#x60; | [optional] [default to created]
 **handle** | **string**| Customer handle prefix | [optional]
 **name** | **string**| Search for name contained in first name concatenated with last name | [optional]
 **email** | **string**| Customer email | [optional]
 **first_name** | **string**| Contained in customer first name | [optional]
 **last_name** | **string**| Contained in customer last name | [optional]
 **address** | **string**| Contained in customer address | [optional]
 **address2** | **string**| Contained in customer address2 | [optional]
 **postal_code** | **string**| Contained in customer postal code | [optional]
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

# **getInvoiceList**
> \Reepay\Model\InvoiceList getInvoiceList($from, $to, $interval, $size, $next_page_token, $range, $handle, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $type, $subscription, $plan, $dunning_start, $dunning_success, $number, $due)

Get list of invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ListApi();
$from = "2019-12-01"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "2020-01-01"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "P1W"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$next_page_token = "MTYzMjkxNDc4NTAwMDoxMA"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `settled`. Default is `created`.
$handle = "inv-1234"; // string | Invoice handle prefix
$state = array("pending"); // string[] | Invoice state, multiple can be defined
$exclude_state = array("created"); // string[] | Invoice state to exclude, multiple can be defined
$customer = "cust-0002"; // string | Invoices for customer by customer handle
$amount = "[10000;20000)"; // string | Amount in minor unit interval. See documentation of intervals.
$refunded_amount = "(0;)"; // string | Refunded amount in minor unit interval. See documentation of intervals.
$authorized_amount = "(0;)"; // string | Authorized amount in minor unit interval. See documentation of intervals.
$currency = array("USD"); // string[] | Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$partial_settled = true; // bool | Filter invoices based on partial settled. If `true` invoices where `authorized_amount < settled_amount` is returned. If `false` invoices where `settled_amount = authorized_amount` is returned.
$type = array("s"); // string[] | Invoice type, multiple can be defined. `s` - subscription recurring, `so` - subscription one-time, `soi` - subscription one-time instant, `co` - customer one-time, `ch` - charge
$subscription = "sub-0005"; // string | Invoices for subscription by subscription handle
$plan = "plan-023123"; // string | Invoices for subscription plan by subscription plan handle
$dunning_start = "[2021-09-01T00:00:00;2021-10-01T00:00:00)"; // string | Dunning start date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals.
$dunning_success = "[2021-09-01;2021-10-01)"; // string | Dunning success date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals.
$number = 102; // int | Invoice number if subscription invoice
$due = "[2021-09-01;2021-10-01)"; // string | Due date if due date defined for subscription invoice

try {
    $result = $api_instance->getInvoiceList($from, $to, $interval, $size, $next_page_token, $range, $handle, $state, $exclude_state, $customer, $amount, $refunded_amount, $authorized_amount, $currency, $partial_settled, $type, $subscription, $plan, $dunning_start, $dunning_success, $number, $due);
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
 **next_page_token** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;settled&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Invoice handle prefix | [optional]
 **state** | [**string[]**](../Model/string.md)| Invoice state, multiple can be defined | [optional]
 **exclude_state** | [**string[]**](../Model/string.md)| Invoice state to exclude, multiple can be defined | [optional]
 **customer** | **string**| Invoices for customer by customer handle | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **refunded_amount** | **string**| Refunded amount in minor unit interval. See documentation of intervals. | [optional]
 **authorized_amount** | **string**| Authorized amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Invoice currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **partial_settled** | **bool**| Filter invoices based on partial settled. If &#x60;true&#x60; invoices where &#x60;authorized_amount &lt; settled_amount&#x60; is returned. If &#x60;false&#x60; invoices where &#x60;settled_amount &#x3D; authorized_amount&#x60; is returned. | [optional]
 **type** | [**string[]**](../Model/string.md)| Invoice type, multiple can be defined. &#x60;s&#x60; - subscription recurring, &#x60;so&#x60; - subscription one-time, &#x60;soi&#x60; - subscription one-time instant, &#x60;co&#x60; - customer one-time, &#x60;ch&#x60; - charge | [optional]
 **subscription** | **string**| Invoices for subscription by subscription handle | [optional]
 **plan** | **string**| Invoices for subscription plan by subscription plan handle | [optional]
 **dunning_start** | **string**| Dunning start date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals. | [optional]
 **dunning_success** | **string**| Dunning success date and time in local date time interval for account timezone. Date time given in ISO-8601 local date or local date time. See documentation of intervals. | [optional]
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

# **getPayoutList**
> \Reepay\Model\PayoutList getPayoutList($from, $to, $interval, $size, $next_page_token, $range, $handle, $customer, $state, $amount, $currency, $card, $card_type, $card_prefix, $card_postfix, $card_fingerprint)

Get list of payouts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ListApi();
$from = "2019-12-01"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "2020-01-01"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "P1W"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$next_page_token = "MTYzMjkxNDc4NTAwMDoxMA"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created` or `paid`. Default is `created`.
$handle = "payout-1234"; // string | Payout handle prefix
$customer = "cust-0002"; // string | Payouts for customer by customer handle
$state = array("paid"); // string[] | Payout transaction state, multiple can be defined
$amount = "[10000;20000)"; // string | Amount in minor unit interval. See documentation of intervals.
$currency = array("USD"); // string[] | Payout currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$card = "ca_20bce64ffee54a33aecb49bddf5b9d3c"; // string | Payouts for saved card
$card_type = "visa"; // string | Payouts for card type
$card_prefix = "457100"; // string | Payouts for card with prefix
$card_postfix = "0123"; // string | Payouts for card with postfix
$card_fingerprint = "0123"; // string | Payouts for card with postfix

try {
    $result = $api_instance->getPayoutList($from, $to, $interval, $size, $next_page_token, $range, $handle, $customer, $state, $amount, $currency, $card, $card_type, $card_prefix, $card_postfix, $card_fingerprint);
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
 **next_page_token** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60; or &#x60;paid&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **handle** | **string**| Payout handle prefix | [optional]
 **customer** | **string**| Payouts for customer by customer handle | [optional]
 **state** | [**string[]**](../Model/string.md)| Payout transaction state, multiple can be defined | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Payout currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **card** | **string**| Payouts for saved card | [optional]
 **card_type** | **string**| Payouts for card type | [optional]
 **card_prefix** | **string**| Payouts for card with prefix | [optional]
 **card_postfix** | **string**| Payouts for card with postfix | [optional]
 **card_fingerprint** | **string**| Payouts for card with postfix | [optional]

### Return type

[**\Reepay\Model\PayoutList**](../Model/PayoutList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionList**
> \Reepay\Model\TransactionList getTransactionList($from, $to, $interval, $size, $next_page_token, $range, $type, $state, $payment_type, $invoice, $currency, $amount, $card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $payment_method)

Get list of transactions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Reepay\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Reepay\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Reepay\Api\ListApi();
$from = "2019-12-01"; // string | Time range from (inclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Default from if no `interval` is given depends on the query. If the query limits on relation e.g. customer and/or subscription, the default from will be epoch 1970-01-01, otherwise one month before `to`
$to = "2020-01-01"; // string | Time range to (exclusive). Local date and time (according to account timezone) on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm`, `yyyy-MM-ddTHH:mm:ss` or `yyyy-MM-ddTHH:mm:ss.SSS`. Defaults to now.
$interval = "P1W"; // string | Limit from `to` and interval back in time. E.g. one week. Will take precedence over `from`. Defined in ISO 8601 duration. See https://en.wikipedia.org/wiki/ISO_8601#Durations
$size = 20; // int | Page size between 10 and 100 (default 20)
$next_page_token = "MTYzMjkxNDc4NTAwMDoxMA"; // string | Next page token from previous response to get next page
$range = "created"; // string | Time and date attribute to time limit. Either `created`, `settled`, `authorized`, `refunded` or `failed`. Default is `created`.
$type = array("settle"); // string[] | Transaction type, multiple can be defined. Types: `settle`, `refund` and `authorization`
$state = array("authorized"); // string[] | Transaction state, multiple can be defined. States: `pending`, `authorized`, `processing`, `settled`, `refunded`, `failed` and `cancelled`
$payment_type = array("card"); // string[] | Transaction payment type, multiple can be defined. `card`, `mobilepay`, `vipps`, `swish`, `viabill`, `manual`, `applepay`, `googlepay`, `paypal`, `klarna_pay_now`, `klarna_pay_later`, `klarna_slice_it`, `klarna_direct_bank_transfer`, `klarna_direct_debit`, `resurs`, `ideal`, `p24`, `blik` or `mobilepay_subscriptions`
$invoice = "inv-0002"; // string | Transactions for invoice by invoice handle
$currency = array("USD"); // string[] | Currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined.
$amount = "[10000;20000)"; // string | Amount in minor unit interval. See documentation of intervals.
$card_type = array("visa"); // string[] | Transactions for card type. Multiple can be defined. `unknown`, `visa`, `mc`, `dankort`, `visa_dk`, `ffk`, `visa_elec`, `maestro`, `laser`, `amex`, `diners`, `discover` or `jcb`
$card_prefix = "457100"; // string | Transactions for card with prefix
$card_postfix = "0123"; // string | Transactions for card with postfix
$card_fingerprint = "0123"; // string | Transactions for card with postfix
$card_country = array("DK"); // string[] | Transactions with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
$card_gateway = "nets"; // string | Transactions with card gateway.
$payment_method = "ca_20bce64ffee54a33aecb49bddf5b9d3c"; // string | Transactions using saved payment method

try {
    $result = $api_instance->getTransactionList($from, $to, $interval, $size, $next_page_token, $range, $type, $state, $payment_type, $invoice, $currency, $amount, $card_type, $card_prefix, $card_postfix, $card_fingerprint, $card_country, $card_gateway, $payment_method);
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
 **next_page_token** | **string**| Next page token from previous response to get next page | [optional]
 **range** | **string**| Time and date attribute to time limit. Either &#x60;created&#x60;, &#x60;settled&#x60;, &#x60;authorized&#x60;, &#x60;refunded&#x60; or &#x60;failed&#x60;. Default is &#x60;created&#x60;. | [optional] [default to created]
 **type** | [**string[]**](../Model/string.md)| Transaction type, multiple can be defined. Types: &#x60;settle&#x60;, &#x60;refund&#x60; and &#x60;authorization&#x60; | [optional]
 **state** | [**string[]**](../Model/string.md)| Transaction state, multiple can be defined. States: &#x60;pending&#x60;, &#x60;authorized&#x60;, &#x60;processing&#x60;, &#x60;settled&#x60;, &#x60;refunded&#x60;, &#x60;failed&#x60; and &#x60;cancelled&#x60; | [optional]
 **payment_type** | [**string[]**](../Model/string.md)| Transaction payment type, multiple can be defined. &#x60;card&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60;, &#x60;ideal&#x60;, &#x60;p24&#x60;, &#x60;blik&#x60; or &#x60;mobilepay_subscriptions&#x60; | [optional]
 **invoice** | **string**| Transactions for invoice by invoice handle | [optional]
 **currency** | [**string[]**](../Model/string.md)| Currency in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code. Multiple can be defined. | [optional]
 **amount** | **string**| Amount in minor unit interval. See documentation of intervals. | [optional]
 **card_type** | [**string[]**](../Model/string.md)| Transactions for card type. Multiple can be defined. &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional]
 **card_prefix** | **string**| Transactions for card with prefix | [optional]
 **card_postfix** | **string**| Transactions for card with postfix | [optional]
 **card_fingerprint** | **string**| Transactions for card with postfix | [optional]
 **card_country** | [**string[]**](../Model/string.md)| Transactions with card country. Multiple can be defined. In  in [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
 **card_gateway** | **string**| Transactions with card gateway. | [optional]
 **payment_method** | **string**| Transactions using saved payment method | [optional]

### Return type

[**\Reepay\Model\TransactionList**](../Model/TransactionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

