# ImportMpsPaymentMethodRequest

## Properties

 Name                  | Type                                                  | Description                                                                                                      | Notes      
-----------------------|-------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|------------
 **reference**         | **string**                                            | Optional reference given to the created payment method. Max length 64 with allowable characters [a-zA-Z0-9_.-@]. | [optional] 
 **customer**          | [**\Reepay\Model\CreateCustomer**](CreateCustomer.md) |                                                                                                                  | [optional] 
 **customerHandle**    | **string**                                            | Customer reference to an existing customer. Either this argument or &#x60;customer&#x60; must be provided.       | [optional] 
 **mobilePayId**       | **string**                                            |                                                                                                                  | [optional] 
 **cancelRedirectUrl** | **string**                                            |                                                                                                                  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
