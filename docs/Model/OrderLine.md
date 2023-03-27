# OrderLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Per account unique order line id | 
**ordertext** | **string** | Order line text | 
**amount** | **int** | Order line total amount including vat | 
**vat** | **float** | Order line vat percent | 
**quantity** | **int** | Order line quantity | 
**origin** | **string** | Order line origin, one of the following: &#x60;plan&#x60;, &#x60;add_on&#x60;, &#x60;ondemand&#x60;, &#x60;additional_cost&#x60;, &#x60;credit&#x60;, &#x60;discount&#x60;, &#x60;setup_fee&#x60;, &#x60;surcharge_fee&#x60; | 
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp from order line origin, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**discountedAmount** | **int** | Order line amount after potential discount has been deducted | [optional] 
**amountVat** | **int** | Order line total vat amount | 
**amountExVat** | **int** | Order line total amount without vat | 
**unitAmount** | **int** | Order line unit amount including vat | 
**unitAmountVat** | **int** | Order line unit vat amount | 
**unitAmountExVat** | **int** | Order line unit amount without vat | 
**amountDefinedInclVat** | **bool** | Whether the amount was defined including VAT. E.g. plan amount defined including VAT. | 
**originHandle** | **string** | Handle for additional cost, credit, plan or subscription discount in the case one of those are the origin | [optional] 
**periodFrom** | [**\DateTime**](\DateTime.md) | The start of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**periodTo** | [**\DateTime**](\DateTime.md) | The end of billing period if the order line is a plan order line for a specific billing period, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**discountPercentage** | **int** | The discount percentage for discount order lines that has a percentage discount | [optional] 
**discountedOrderLine** | **string** | For discount order lines a reference to the order line for which the order line is a discount | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

