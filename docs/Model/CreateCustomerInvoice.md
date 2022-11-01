# CreateCustomerInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**handle** | **string** | Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@]. It is recommended to use a maximum of 20 characters as this will allow for the use of handle as reference on bank statements without truncation. | 
**settle** | [**\Reepay\Model\Settle**](Settle.md) | Optional settle to perform after creation | [optional] 
**metadata** | **map[string,object]** | Custom metadata. | [optional] 
**orderLines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Order lines for the invoice | 
**manualTransfer** | [**\Reepay\Model\ManualSettleTransfer**](ManualSettleTransfer.md) | Optional manual transfer to settle invoice with after creation. | [optional] 
**billingAddress** | [**\Reepay\Model\InvoiceBillingAddress**](InvoiceBillingAddress.md) | Optional billing address | [optional] 
**shippingAddress** | [**\Reepay\Model\InvoiceShippingAddress**](InvoiceShippingAddress.md) | Optional shipping address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


