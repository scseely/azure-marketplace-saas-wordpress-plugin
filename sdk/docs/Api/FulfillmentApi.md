# Swagger\Client\FulfillmentApi

All URIs are relative to *https://marketplaceapi.microsoft.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fulfillmentActivateSubscription**](FulfillmentApi.md#fulfillmentactivatesubscription) | **POST** /saas/subscriptions/{subscriptionId}/activate | Activate a subscription
[**fulfillmentDeleteSubscription**](FulfillmentApi.md#fulfillmentdeletesubscription) | **DELETE** /saas/subscriptions/{subscriptionId} | Delete a subscription
[**fulfillmentGetSubscription**](FulfillmentApi.md#fulfillmentgetsubscription) | **GET** /saas/subscriptions/{subscriptionId} | Get subscription
[**fulfillmentListAvailablePlans**](FulfillmentApi.md#fulfillmentlistavailableplans) | **GET** /saas/subscriptions/{subscriptionId}/listAvailablePlans | List available plans
[**fulfillmentListSubscriptions**](FulfillmentApi.md#fulfillmentlistsubscriptions) | **GET** /saas/subscriptions/ | List subscriptions
[**fulfillmentResolve**](FulfillmentApi.md#fulfillmentresolve) | **POST** /saas/subscriptions/resolve | Resolve a subscription
[**fulfillmentUpdateSubscription**](FulfillmentApi.md#fulfillmentupdatesubscription) | **PATCH** /saas/subscriptions/{subscriptionId} | Patch a subscription

# **fulfillmentActivateSubscription**
> fulfillmentActivateSubscription($body, $content_type, $api_version, $subscription_id, $x_ms_requestid, $x_ms_correlationid)

Activate a subscription

Use this call to activate a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\azure.marketplace\SubscriberPlan(); // \Swagger\Client\azure.marketplace\SubscriberPlan | 
$content_type = "content_type_example"; // string | application/json
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$subscription_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $apiInstance->fulfillmentActivateSubscription($body, $content_type, $api_version, $subscription_id, $x_ms_requestid, $x_ms_correlationid);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentActivateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\azure.marketplace\SubscriberPlan**](../Model/SubscriberPlan.md)|  |
 **content_type** | **string**| application/json |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **subscription_id** | [**string**](../Model/.md)|  |
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

# **fulfillmentDeleteSubscription**
> fulfillmentDeleteSubscription($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid)

Delete a subscription

Unsubscribe and delete the specified subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
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
    $apiInstance->fulfillmentDeleteSubscription($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentDeleteSubscription: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillmentGetSubscription**
> \Swagger\Client\azure.marketplace\Subscription fulfillmentGetSubscription($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid)

Get subscription

Gets the specified SaaS subscription. Use this call to get license information and plan information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
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
    $result = $apiInstance->fulfillmentGetSubscription($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentGetSubscription: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\azure.marketplace\Subscription**](../Model/Subscription.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillmentListAvailablePlans**
> \Swagger\Client\azure.marketplace\SubscriptionPlans fulfillmentListAvailablePlans($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid)

List available plans

Use this call to find out if there are any private or public offers for the current publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
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
    $result = $apiInstance->fulfillmentListAvailablePlans($subscription_id, $api_version, $content_type, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentListAvailablePlans: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\azure.marketplace\SubscriptionPlans**](../Model/SubscriptionPlans.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillmentListSubscriptions**
> \Swagger\Client\azure.marketplace\SubscriptionsResponse fulfillmentListSubscriptions($api_version, $content_type, $continuation_token, $x_ms_requestid, $x_ms_correlationid)

List subscriptions

Lists all the SaaS subscriptions for a publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$content_type = "content_type_example"; // string | application/json
$continuation_token = "continuation_token_example"; // string | Optional value, only used for ListSubscriptions.
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->fulfillmentListSubscriptions($api_version, $content_type, $continuation_token, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentListSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **content_type** | **string**| application/json |
 **continuation_token** | **string**| Optional value, only used for ListSubscriptions. | [optional]
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillmentResolve**
> \Swagger\Client\azure.marketplace\ResolvedSubscription fulfillmentResolve($api_version, $content_type, $x_ms_marketplace_token, $x_ms_requestid, $x_ms_correlationid)

Resolve a subscription

The resolve endpoint enables the publisher to resolve a marketplace token to a persistent resource ID. The resource ID is the unique identifier for a SaaS subscription. When a user is redirected to a partner's website, the URL contains a token in the query parameters. The partner is expected to use this token and make a request to resolve it. The response contains the unique SaaS subscription ID, name, offer ID, and plan for the resource. This token is valid for one hour only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$content_type = "content_type_example"; // string | application/json
$x_ms_marketplace_token = "x_ms_marketplace_token_example"; // string | The token query parameter in the URL when the user is redirected to the SaaS partner's website from Azure (for example,  https://contoso.com/signup?token=..). Note, The URL decodes the token value from the browser before using it.
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->fulfillmentResolve($api_version, $content_type, $x_ms_marketplace_token, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentResolve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **content_type** | **string**| application/json |
 **x_ms_marketplace_token** | **string**| The token query parameter in the URL when the user is redirected to the SaaS partner&#x27;s website from Azure (for example,  https://contoso.com/signup?token&#x3D;..). Note, The URL decodes the token value from the browser before using it. |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\ResolvedSubscription**](../Model/ResolvedSubscription.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fulfillmentUpdateSubscription**
> fulfillmentUpdateSubscription($body, $content_type, $api_version, $subscription_id, $x_ms_requestid, $x_ms_correlationid)

Patch a subscription

Use this call to update the plan, the user count (quantity), or both.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\azure.marketplace\SubscriberPlan(); // \Swagger\Client\azure.marketplace\SubscriberPlan | 
$content_type = "content_type_example"; // string | application/json
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$subscription_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $apiInstance->fulfillmentUpdateSubscription($body, $content_type, $api_version, $subscription_id, $x_ms_requestid, $x_ms_correlationid);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->fulfillmentUpdateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\azure.marketplace\SubscriberPlan**](../Model/SubscriberPlan.md)|  |
 **content_type** | **string**| application/json |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **subscription_id** | [**string**](../Model/.md)|  |
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

