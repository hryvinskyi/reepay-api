# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction id assigned by Reepay | 
**state** | **string** | State of the transaction, one of the following: &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;authorized&#x60;, &#x60;settled&#x60;, &#x60;refunded&#x60;, &#x60;failed&#x60;, &#x60;cancelled&#x60; | 
**invoice** | **string** | Invoice handle | 
**type** | **string** | Transaction type, one of the following: &#x60;settle&#x60;, &#x60;refund&#x60;, &#x60;authorization&#x60; | 
**amount** | **int** | The transaction amount | 
**settled** | [**\DateTime**](\DateTime.md) | When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**authorized** | [**\DateTime**](\DateTime.md) | When the transaction was authorized, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**refunded** | [**\DateTime**](\DateTime.md) | When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**payment_type** | **string** | Payment type for transaction, either: &#x60;card&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;, &#x60;swish&#x60;, &#x60;viabill&#x60;, &#x60;manual&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;paypal&#x60;, &#x60;klarna_pay_now&#x60;, &#x60;klarna_pay_later&#x60;, &#x60;klarna_slice_it&#x60;, &#x60;klarna_direct_bank_transfer&#x60;, &#x60;klarna_direct_debit&#x60;, &#x60;resurs&#x60; or &#x60;mobilepay_subscriptions&#x60; | 
**card_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of card transaction | [optional] 
**mpo_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of MobilePay Online transaction | [optional] 
**vipps_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of Vipps transaction | [optional] 
**applepay_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of ApplePay transaction | [optional] 
**googlepay_transaction** | [**\Reepay\Model\CardTransaction**](CardTransaction.md) | Specifics in case of GooglePay transaction | [optional] 
**manual_transaction** | [**\Reepay\Model\ManualTransaction**](ManualTransaction.md) | Specifics in case of manual transaction | [optional] 
**viabill_transaction** | [**\Reepay\Model\ViabillTransaction**](ViabillTransaction.md) | Specifics in case of ViaBill transaction | [optional] 
**resurs_transaction** | [**\Reepay\Model\ResursTransaction**](ResursTransaction.md) | Specifics in case of Resurs Bank transaction | [optional] 
**klarna_transaction** | [**\Reepay\Model\KlarnaTransaction**](KlarnaTransaction.md) | Specifics in case of Klarna transaction | [optional] 
**swish_transaction** | [**\Reepay\Model\SwishTransaction**](SwishTransaction.md) | Specifics in case of Swish transaction | [optional] 
**paypal_transaction** | [**\Reepay\Model\PaypalTransaction**](PaypalTransaction.md) | Specifics in case of PayPal transaction | [optional] 
**pgw_transaction** | [**\Reepay\Model\PgwTransaction**](PgwTransaction.md) | Specifics in case of generic payment gateway transaction | [optional] 
**blik_transaction** | [**\Reepay\Model\BlikTransaction**](BlikTransaction.md) | Specifics in case of BLIK transaction | [optional] 
**ideal_transaction** | [**\Reepay\Model\IdealTransaction**](IdealTransaction.md) | Specifics in case of IDEAL transaction | [optional] 
**p24_transaction** | [**\Reepay\Model\P24Transaction**](P24Transaction.md) | Specifics in case of P24 transaction | [optional] 
**mps_transaction** | [**\Reepay\Model\MpsTransaction**](MpsTransaction.md) | Specifics in case of MobilePay Subscriptions transaction | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


