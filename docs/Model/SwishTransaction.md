# SwishTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**refTransaction** | **string** | Id of a possible referenced transaction | [optional] 
**errorState** | **string** | Error state if failed: &#x60;pending&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60; | [optional] 
**acquirerMessage** | **string** | Acquirer message in case of error | [optional] 
**swishId** | **string** | Swish id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

