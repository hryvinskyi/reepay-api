# GatewayAgreement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Agreement id | 
**state** | **string** | Agreement state: &#x60;active&#x60;, &#x60;disabled&#x60;, &#x60;pending&#x60; or &#x60;deleted&#x60; | 
**type** | **string** | Agreement type: &#x60;card&#x60;, &#x60;viabill&#x60;, &#x60;resurs&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;mobilepay&#x60;, &#x60;mobilepay_subscriptions&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;paypal&#x60;, &#x60;pp_blik&#x60;, &#x60;pp_ideal&#x60;, &#x60;pp_p24&#x60;. | 
**usage** | **string** | Agreement payment type usage: &#x60;single&#x60;, &#x60;reusable&#x60;, &#x60;subscription&#x60; | 
**test** | **bool** | Test agreement or not | 
**created** | [**\DateTime**](\DateTime.md) | Date when the agreement was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**card_gateway_agreement** | [**\Reepay\Model\CardGatewayAgreement**](CardGatewayAgreement.md) | Card gateway agreement details in case of card gateway | [optional] 
**pgw_agreement** | [**\Reepay\Model\PgwAgreement**](PgwAgreement.md) | Payment gateway in case of payment gateway | [optional] 
**mpo_agreement** | [**\Reepay\Model\MpoAgreement**](MpoAgreement.md) | MobilePay online agreement details | [optional] 
**vipps_agreement** | [**\Reepay\Model\VippsAgreement**](VippsAgreement.md) | Vipps agreement details | [optional] 
**viabill_agreement** | [**\Reepay\Model\ViabillAgreement**](ViabillAgreement.md) | ViaBill agreement details | [optional] 
**resurs_agreement** | [**\Reepay\Model\ResursAgreement**](ResursAgreement.md) | Resurs Bank agreement details | [optional] 
**klarna_agreement** | [**\Reepay\Model\KlarnaAgreement**](KlarnaAgreement.md) | Klarna agreement details | [optional] 
**swish** | [**\Reepay\Model\SwishAgreement**](SwishAgreement.md) | Swish agreement details | [optional] 
**applepay_agreement** | [**\Reepay\Model\ApplepayAgreement**](ApplepayAgreement.md) | ApplePay agreement details | [optional] 
**googlepay_agreement** | [**\Reepay\Model\GooglepayAgreement**](GooglepayAgreement.md) | GooglePay agreement details | [optional] 
**paypal_agreement** | [**\Reepay\Model\PaypalAgreement**](PaypalAgreement.md) | PayPal agreement details | [optional] 
**mps_agreement** | [**\Reepay\Model\MpsAgreement**](MpsAgreement.md) | MobilePay Subscriptions agreement details in case of MobilePay Subscriptions | [optional] 
**ppro_agreement** | [**\Reepay\Model\PproAgreement**](PproAgreement.md) | Local payment methods agreement details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


