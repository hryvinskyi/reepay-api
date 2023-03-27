# Reepay\PlanApi

All URIs are relative to *https://api.reepay.com/*

 Method                                                | HTTP request                          | Description               
-------------------------------------------------------|---------------------------------------|---------------------------
 [**createPlanJson**](PlanApi.md#createplanjson)       | **POST** /v1/plan                     | Create plan               
 [**deleteMetadata3**](PlanApi.md#deletemetadata3)     | **DELETE** /v1/plan/{handle}/metadata | Delete metadata           
 [**deletePlan**](PlanApi.md#deleteplan)               | **DELETE** /v1/plan/{handle}          | Delete plan               
 [**getCurrentPlan**](PlanApi.md#getcurrentplan)       | **GET** /v1/plan/{handle}/current     | Get plan                  
 [**getMetadata3**](PlanApi.md#getmetadata3)           | **GET** /v1/plan/{handle}/metadata    | Get metadata              
 [**getPlan**](PlanApi.md#getplan)                     | **GET** /v1/plan/{handle}/{version}   | Get plan version          
 [**getPlans**](PlanApi.md#getplans)                   | **GET** /v1/plan/{handle}             | Get list of plan versions 
 [**supersedePlanJson**](PlanApi.md#supersedeplanjson) | **POST** /v1/plan/{handle}            | Supersede plan            
 [**unDeletePlan**](PlanApi.md#undeleteplan)           | **POST** /v1/plan/{handle}/undelete   | Undelete plan             
 [**updateMetadata3**](PlanApi.md#updatemetadata3)     | **PUT** /v1/plan/{handle}/metadata    | Create or update metadata 
 [**updatePlanJson**](PlanApi.md#updateplanjson)       | **PUT** /v1/plan/{handle}             | Update plan               

# **createPlanJson**
> \Reepay\Model\Plan createPlanJson($body)

Create plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Reepay\Model\CreateSubscriptionPlan(); // \Reepay\Model\CreateSubscriptionPlan | 

try {
    $result = $apiInstance->createPlanJson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->createPlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Reepay\Model\CreateSubscriptionPlan**](../Model/CreateSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata3**
> deleteMetadata3($handle)

Delete metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle

try {
    $apiInstance->deleteMetadata3($handle);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->deleteMetadata3: ', $e->getMessage(), PHP_EOL;
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

# **deletePlan**
> \Reepay\Model\Plan deletePlan($handle)

Delete plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription plan handle

try {
    $result = $apiInstance->deletePlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription plan handle |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentPlan**
> \Reepay\Model\Plan getCurrentPlan($handle)

Get plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Plan handle

try {
    $result = $apiInstance->getCurrentPlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getCurrentPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata3**
> map[string,object] getMetadata3($handle)

Get metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle

try {
    $result = $apiInstance->getMetadata3($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getMetadata3: ', $e->getMessage(), PHP_EOL;
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

# **getPlan**
> \Reepay\Model\Plan getPlan($handle, $version)

Get plan version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Plan handle
$version = 56; // int | Plan version

try {
    $result = $apiInstance->getPlan($handle, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |
 **version** | **int**| Plan version |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlans**
> \Reepay\Model\Plan[] getPlans($handle)

Get list of plan versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Plan handle

try {
    $result = $apiInstance->getPlans($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->getPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |

### Return type

[**\Reepay\Model\Plan[]**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supersedePlanJson**
> \Reepay\Model\Plan supersedePlanJson($handle, $body)

Supersede plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Plan handle
$body = new \Reepay\Model\SupersedeSubscriptionPlan(); // \Reepay\Model\SupersedeSubscriptionPlan | 

try {
    $result = $apiInstance->supersedePlanJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->supersedePlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Plan handle |
 **body** | [**\Reepay\Model\SupersedeSubscriptionPlan**](../Model/SupersedeSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unDeletePlan**
> \Reepay\Model\Plan unDeletePlan($handle)

Undelete plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription plan handle

try {
    $result = $apiInstance->unDeletePlan($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->unDeletePlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription plan handle |

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata3**
> map[string,object] updateMetadata3($handle, $body)

Create or update metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Resource handle
$body = new \Reepay\Model\map(); // map[string,object] | 

try {
    $result = $apiInstance->updateMetadata3($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->updateMetadata3: ', $e->getMessage(), PHP_EOL;
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

# **updatePlanJson**
> \Reepay\Model\Plan updatePlanJson($handle, $body)

Update plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Reepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Reepay\Api\PlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Subscription handle
$body = new \Reepay\Model\UpdateSubscriptionPlan(); // \Reepay\Model\UpdateSubscriptionPlan | 

try {
    $result = $apiInstance->updatePlanJson($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->updatePlanJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Subscription handle |
 **body** | [**\Reepay\Model\UpdateSubscriptionPlan**](../Model/UpdateSubscriptionPlan.md)|  | [optional]

### Return type

[**\Reepay\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

