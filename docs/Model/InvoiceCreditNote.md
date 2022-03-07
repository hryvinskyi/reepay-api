# InvoiceCreditNote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Credit note id | 
**invoice** | **string** | Invoice credited by this note | 
**transaction** | **string** | Refund transaction id if credit note has an associated refund | [optional] 
**credit** | **string** | Credit reference if the credit note relates to a subscription credit | [optional] 
**amount** | **int** | Credit note amount | 
**created** | [**\DateTime**](\DateTime.md) | Creation date for note, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**credit_note_lines** | [**\Reepay\Model\CreditNoteLine[]**](CreditNoteLine.md) | Credit note lines | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


