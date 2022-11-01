# CopyCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Optional reference given to the created payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
**customer** | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) | Optional create customer object. An alternative to using a reference to an already created customer by the &#x60;customer_handle&#x60; parameter. If this object is provided and the customer already exists, the existing customer will be used. | [optional] 
**agreement** | **string** | Optional agreement id to define acquirer agreement to be used. | [optional] 
**currency** | **string** | Optional currency code to control agreement selection | [optional] 
**customerHandle** | **string** | Customer reference to an existing customer. Either this argument or &#x60;customer&#x60; must be provided. | [optional] 
**cardType** | **string** | Optional card type control agreement selection: &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

