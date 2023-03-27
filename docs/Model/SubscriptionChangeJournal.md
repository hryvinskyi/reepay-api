# SubscriptionChangeJournal

## Properties
 Name                       | Type                                                          | Description                                                               | Notes      
----------------------------|---------------------------------------------------------------|---------------------------------------------------------------------------|------------
 **change**                 | [**\Reepay\Model\SubscriptionChange**](SubscriptionChange.md) |                                                                           | [optional] 
 **invoice**                | [**\Reepay\Model\Invoice**](Invoice.md)                       |                                                                           | [optional] 
 **newPlan**                | [**\Reepay\Model\Plan**](Plan.md)                             |                                                                           | [optional] 
 **compensationAmount**     | **int**                                                       | If compensation the compensation amount                                   | [optional] 
 **compensationInvoice**    | [**\Reepay\Model\Invoice**](Invoice.md)                       |                                                                           | [optional] 
 **changedPeriodStartDate** | [**\DateTime**](\DateTime.md)                                 | If the change resulted in a new billing cycle this is the start date used | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

