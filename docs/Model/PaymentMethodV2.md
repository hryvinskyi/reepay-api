# PaymentMethodV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id for payment method | 
**state** | **string** | State of the payment method: &#x60;active&#x60;, &#x60;inactivated&#x60;, &#x60;failed&#x60;, &#x60;pending&#x60; or &#x60;deleted&#x60; | 
**customer** | **string** | Customer by handle | 
**reference** | **string** | Optional reference provided when creating the payment method. For payment methods created with Reepay Checkout the reference will correspond to the session id for the Checkout session that created the payment method. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | Date when the payment method failed. In ISO-8601 extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the payment method was created. In ISO-8601 extended offset date-time format. | 
**card** | [**\Reepay\Model\CardV2**](CardV2.md) | Card object in case of card payment method | [optional] 
**applepay** | [**\Reepay\Model\CardV2**](CardV2.md) | Card object in case of Apple Pay payment method | [optional] 
**paymentType** | **string** | Payment type for saved payment method, either: &#x60;card&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60; or &#x60;mobilepay_subscriptions&#x60; | 
**mpsSubscription** | [**\Reepay\Model\MpsSubscriptionV2**](MpsSubscriptionV2.md) | MPS subscription object in case of MPS payment method | [optional] 
**vippsRecurringSubscription** | [**\Reepay\Model\VippsRecurringSubscriptionDto**](VippsRecurringSubscriptionDto.md) | Vipps Recurring subscription object in case of Vipps Recurring payment method | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


