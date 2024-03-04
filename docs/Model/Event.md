# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique event id assigned by Reepay | 
**customer** | **string** | Customer handle | [optional] 
**subscription** | **string** | Subscription handle | [optional] 
**invoice** | **string** | Invoice id | [optional] 
**principal** | **string** | Principal id. Only given for principal type user | [optional] 
**created** | [**\DateTime**](\DateTime.md) | When the event happened, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**event_type** | **string** | The event type (see documentation) | 
**principal_type** | **string** | Principal type &#x60;api&#x60; or &#x60;user&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

