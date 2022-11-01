# CreateCardGatewayAgreement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currencies** | **string[]** | Set of currencies supported by agreement. Each currency in [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) three letter alpha code. | 
**surcharge** | **bool** | Add acquirer surcharge fee if possible | [optional] 
**provider** | **string** | Card gateway provider type | 
**cardTypes** | **string[]** | Card types supported by agreement | [optional] 
**paymentTypes** | **string[]** | Set of supported payment types for agreement: &#x60;card&#x60;, &#x60;applepay&#x60;, &#x60;googlepay&#x60;, &#x60;mobilepay&#x60;, &#x60;vipps&#x60;. If not defined defaults to all. | [optional] 
**providerSettings** | **map[string,object]** | Key value map of provider settings | [optional] 
**feeConfiguration** | [**map[string,object][]**](map.md) | Prioritized list of fee configuration entries | [optional] 
**threedSecure** | **bool** | Use 3DSecure for non-recurring payments (if supported by provider) | [optional] 
**threedSecureRecurring** | **bool** | Use 3DSecure for recurring payments (if supported by provider) | [optional] 
**securedByNets** | **bool** | Use Secured By Nets for non-recurring payments (if supported by provider) | [optional] 
**securedByNetsRecurring** | **bool** | Use Secured By Nets for recurring payments (if supported by provider) | [optional] 
**defaultRequireSca** | **bool** | Default behaviour if no specific SCA handing is defined in payment sessions. If enabled SCA will be required and un-enrolled cards will be declined. | [optional] 
**disallowThreedSecureAttempted** | **bool** | Disallow 3D Secure status attempted which means that card issuer does not support 3D Secure so authentication could not be performed. An attempted 3D Secure flow normally results in liability shift. | [optional] 
**payout** | **bool** | Use agreement for payout (if supported by provider) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


