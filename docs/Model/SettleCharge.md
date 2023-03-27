# SettleCharge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Optional idempotency key. Only one settle can be performed for the same handle. If two settle attempts are attempted and the first succeeds the second will fail because charge is already settled or authorized. An idempotency key identifies uniquely the request and multiple requests with the same key will yield the same result. In case of networking errors the same request with same key can safely be retried. | [optional] 
**amount** | **int** | Optional amount different from authorized amount to settle. Must be less than or equal to the authorized amount. Either &#x60;amount&#x60; or &#x60;order_lines&#x60; can be provided. If multiple partial settles are performed the total settled amount cannot exceed the authorized amount. If partial settles are used a subsequent settle with no amount will settle the remaining amount up to the authorized amount. | [optional] 
**ordertext** | **string** | Optional alternative order text to use in conjunction with &#x60;amount&#x60;. Ignored if &#x60;order_lines&#x60; is provided. If new &#x60;amount&#x60; is provided either &#x60;ordertext&#x60; or &#x60;order_lines&#x60; must be provided, otherwise order lines will default to a single empty line. | [optional] 
**orderLines** | [**\Reepay\Model\CreateOrderLine[]**](CreateOrderLine.md) | Optional new order lines to replace old order lines for the charge. The order lines controls the amount. The new amount must be less than or equal to the authorized amount. See &#x60;amount&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

