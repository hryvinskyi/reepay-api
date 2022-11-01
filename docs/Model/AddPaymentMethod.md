# AddPaymentMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Optional reference given to the created payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
**customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) | Optional create customer object. An alternative to using a reference to an already created customer by the &#x60;customer_handle&#x60; parameter. If this object is provided and the customer already exists, the existing customer will be used. | [optional] 
**source** | **string** | The payment method source, e.g. a one-time card token &#x60;ct_...&#x60;. | 
**customerHandle** | **string** | Customer reference to an existing customer. Either this argument or &#x60;customer&#x60; must be provided. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

