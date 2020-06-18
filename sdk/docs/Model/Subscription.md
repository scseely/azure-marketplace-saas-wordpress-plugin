# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**publisher_id** | **string** |  | [optional] 
**offer_id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**saas_subscription_status** | **string** | Indicates the status of the operation. | [optional] 
**beneficiary** | [**\Swagger\Client\azure.marketplace\AadIdentifier**](AadIdentifier.md) |  | [optional] 
**purchaser** | [**\Swagger\Client\azure.marketplace\AadIdentifier**](AadIdentifier.md) |  | [optional] 
**plan_id** | **string** |  | [optional] 
**quantity** | **int** |  | [optional] 
**term** | [**\Swagger\Client\azure.marketplace\SubscriptionTerm**](SubscriptionTerm.md) |  | [optional] 
**is_test** | **bool** | Indicating whether the current subscription is a test asset. | [optional] 
**is_free_trial** | **bool** | true - the customer subscription is currently in free trial, false - the customer subscription is not currently in free trial.(optional field - default false) | [optional] 
**allowed_customer_operations** | **string[]** |  | [optional] 
**session_id** | **string** |  | [optional] 
**fulfillment_id** | **string** |  | [optional] 
**store_front** | **string** |  | [optional] 
**session_mode** | **string** | Dry Run indicates all transactions run as Test-Mode in the commerce stack | [optional] 
**sandbox_type** | **string** | Possible Values are None, Csp (Csp sandbox purchase) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

