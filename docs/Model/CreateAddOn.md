# CreateAddOn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of add-on. Will be used as order line text. | 
**description** | **string** | Optional description of add-on | [optional] 
**amount** | **int** | Add-on amount | 
**vat** | **float** | Optional vat for add-on. Account default is used if none given. | [optional] 
**handle** | **string** | Per account unique handle for the add-on | 
**type** | **string** | Add-on type &#x60;on_off&#x60; or &#x60;quantity&#x60;. An &#x60;on_off&#x60; type cannot be given a quantity when attached to subscription. For &#x60;quantity&#x60; type it is possible. | 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**amount_incl_vat** | **bool** | Whether the amount is including VAT. Default true. | [optional] 
**all_plans** | **bool** | Whether all plans are eligible for this add-on. Defaults to false. | [optional] 
**eligible_plans** | **string[]** | If not &#x60;all_plans&#x60; are set to true, then the set of eligible plan handles must be defined. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


