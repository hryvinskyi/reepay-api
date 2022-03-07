# SubscriptionChangeJournal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change** | [**\Reepay\Model\SubscriptionChange**](SubscriptionChange.md) | Subscription change object applied, if null the change has no impact | [optional] 
**invoice** | [**\Reepay\Model\Invoice**](Invoice.md) | New invoice the change resulted in | [optional] 
**new_plan** | [**\Reepay\Model\Plan**](Plan.md) | Subscription plan object if change resulted in a new plan | [optional] 
**compensation_amount** | **int** | If compensation the compensation amount | [optional] 
**compensation_invoice** | [**\Reepay\Model\Invoice**](Invoice.md) | If compensation the credited or refunded invoice. The latest credit note gives details on the crediting. | [optional] 
**changed_period_start_date** | [**\DateTime**](\DateTime.md) | If the change resulted in a new billing cycle this is the start date used | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


