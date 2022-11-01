# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Customer email. Validated against RFC 822. | [optional] 
**address** | **string** | Customer address | [optional] 
**address2** | **string** | Customer address2 | [optional] 
**city** | **string** | Customer city | [optional] 
**country** | **string** | Customer country in ISO 3166-1 alpha-2 | [optional] 
**phone** | **string** | Customer phone number | [optional] 
**company** | **string** | Customer company | [optional] 
**vat** | **string** | Customer vat number | [optional] 
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. | 
**test** | **bool** | Test flag | [optional] 
**subscriptions** | **int** | Number of active subscriptions for this customer (deprecated, will be removed in a later version, use active_subscriptions) | 
**created** | [**\DateTime**](\DateTime.md) | Date when the customer was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**deleted** | [**\DateTime**](\DateTime.md) | Date when the customer was deleted. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**firstName** | **string** | Customer first name | [optional] 
**lastName** | **string** | Customer last name | [optional] 
**postalCode** | **string** | Customer postal code | [optional] 
**activeSubscriptions** | **int** | Number of active subscriptions for this customer | 
**trialActiveSubscriptions** | **int** | Number of active subscriptions in trial for this customer. Also counts subscription to enter trial at a future start date. | 
**trialCancelledSubscriptions** | **int** | Number of cancelled subscriptions in trial for this customer | 
**expiredSubscriptions** | **int** | Number of expired subscription for this customer | 
**onHoldSubscriptions** | **int** | Number of subscription on hold for this customer | 
**cancelledSubscriptions** | **int** | Number of cancelled subscription for this customer | 
**nonRenewingSubscriptions** | **int** | Number of non renewing (active subscriptions not renewing at billing period end) subscriptions for this customer | 
**failedInvoices** | **int** | Number of failed subscription invoices for this customer | 
**failedAmount** | **int** | Summed amount for failed subscription invoices | 
**cancelledInvoices** | **int** | Number of cancelled subscription invoices for this customer | 
**cancelledAmount** | **int** | Summed amount for cancelled subscription invoices | 
**pendingInvoices** | **int** | Number of pending subscription invoices for this customer | 
**pendingAmount** | **int** | Summed amount for pending subscription invoices | 
**dunningInvoices** | **int** | Number of dunning subscription invoices for this customer | 
**dunningAmount** | **int** | Summed amount for dunning subscription invoices | 
**settledInvoices** | **int** | Number of settled subscription invoices for this customer | 
**settledAmount** | **int** | Summed settled subscription amount | 
**refundedAmount** | **int** | Summed refunded subscription amount | 
**pendingAdditionalCosts** | **int** | Number of pending additional costs | 
**pendingAdditionalCostAmount** | **int** | Summed amount of pending additional costs incl vat | 
**transferredAdditionalCosts** | **int** | Number of additional costs that have been applied to invoices | 
**transferredAdditionalCostAmount** | **int** | Summed amount of additional costs that have been applied to invoices | 
**pendingCredits** | **int** | Number of credits that have not fully been applied to invoices | 
**pendingCreditAmount** | **int** | Summed credit amount not yet applied to invoices | 
**transferredCredits** | **int** | Number of credits that have fully been applied to invoices | 
**transferredCreditAmount** | **int** | Summed credit amount that have been applied to invoices | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


