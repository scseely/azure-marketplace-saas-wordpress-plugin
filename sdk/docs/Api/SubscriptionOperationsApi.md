# Swagger\Client\SubscriptionOperationsApi

All URIs are relative to *https://marketplaceapi.microsoft.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionOperationsGetOperationStatus**](SubscriptionOperationsApi.md#subscriptionoperationsgetoperationstatus) | **GET** /saas/subscriptions/{subscriptionId}/operations/{operationId} | Get operation status
[**subscriptionOperationsListOperations**](SubscriptionOperationsApi.md#subscriptionoperationslistoperations) | **GET** /saas/subscriptions/{subscriptionId}/operations | List outstanding operations
[**subscriptionOperationsUpdateOperationStatus**](SubscriptionOperationsApi.md#subscriptionoperationsupdateoperationstatus) | **PATCH** /saas/subscriptions/{subscriptionId}/operations/{operationId} | Update the status of an operation

# **subscriptionOperationsGetOperationStatus**
> \Swagger\Client\azure.marketplace\Operation subscriptionOperationsGetOperationStatus($subscription_id, $operation_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid)

Get operation status

Enables the publisher to track the status of the specified triggered async operation (such as Subscribe, Unsubscribe, ChangePlan, or ChangeQuantity).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\SubscriptionOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$operation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$content_type = "content_type_example"; // string | application/json
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->subscriptionOperationsGetOperationStatus($subscription_id, $operation_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionOperationsApi->subscriptionOperationsGetOperationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | [**string**](../Model/.md)|  |
 **operation_id** | [**string**](../Model/.md)|  |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **content_type** | **string**| application/json |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\Operation**](../Model/Operation.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionOperationsListOperations**
> \Swagger\Client\azure.marketplace\OperationList subscriptionOperationsListOperations($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid)

List outstanding operations

Lists the outstanding operations for the current publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\SubscriptionOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$content_type = "content_type_example"; // string | application/json
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->subscriptionOperationsListOperations($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionOperationsApi->subscriptionOperationsListOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | [**string**](../Model/.md)|  |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **content_type** | **string**| application/json |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\OperationList**](../Model/OperationList.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionOperationsUpdateOperationStatus**
> subscriptionOperationsUpdateOperationStatus($body, $content_type, $api_version, $subscription_id, $operation_id, $x_ms_requestid, $x_ms_correlationid)

Update the status of an operation

Update the status of an operation to indicate success or failure with the provided values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\SubscriptionOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\azure.marketplace\UpdateOperation(); // \Swagger\Client\azure.marketplace\UpdateOperation | 
$content_type = "content_type_example"; // string | application/json
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$subscription_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$operation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $apiInstance->subscriptionOperationsUpdateOperationStatus($body, $content_type, $api_version, $subscription_id, $operation_id, $x_ms_requestid, $x_ms_correlationid);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionOperationsApi->subscriptionOperationsUpdateOperationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\azure.marketplace\UpdateOperation**](../Model/UpdateOperation.md)|  |
 **content_type** | **string**| application/json |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **subscription_id** | [**string**](../Model/.md)|  |
 **operation_id** | [**string**](../Model/.md)|  |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

void (empty response body)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

