# CreateCustomer

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
**handle** | **string** | Per account unique handle for the customer. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. Must be provided if generate_handle is not defined. | [optional] 
**test** | **bool** | Test flag. If given it will be verified that the account state matches the intended create state. | [optional] 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**firstName** | **string** | Customer first name | [optional] 
**lastName** | **string** | Customer last name | [optional] 
**postalCode** | **string** | Customer postal code | [optional] 
**generateHandle** | **bool** | Auto generate handle on the form cust-[sequence_number] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


