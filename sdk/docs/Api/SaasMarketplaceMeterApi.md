# Swagger\Client\SaasMarketplaceMeterApi

All URIs are relative to *https://marketplaceapi.microsoft.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meteringPostBatchUsageEvent**](SaasMarketplaceMeterApi.md#meteringpostbatchusageevent) | **POST** /batchUsageEvent | Posts a set of usage events to the marketplace metering service API.
[**meteringPostUsageEvent**](SaasMarketplaceMeterApi.md#meteringpostusageevent) | **POST** /usageEvent | Posts a single usage event to the marketplace metering service API.

# **meteringPostBatchUsageEvent**
> \Swagger\Client\azure.marketplace\UsageEventOkResponse meteringPostBatchUsageEvent($body, $api_version, $x_ms_requestid, $x_ms_correlationid)

Posts a set of usage events to the marketplace metering service API.

The batch usage event API allows you to emit usage events for more than one purchased entity at once. The batch usage event request references the metering services dimension defined by the publisher when publishing the offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\SaasMarketplaceMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\azure.marketplace\UsageEvent()); // \Swagger\Client\azure.marketplace\UsageEvent[] | 
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->meteringPostBatchUsageEvent($body, $api_version, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaasMarketplaceMeterApi->meteringPostBatchUsageEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\azure.marketplace\UsageEvent[]**](../Model/UsageEvent.md)|  |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\UsageEventOkResponse**](../Model/UsageEventOkResponse.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meteringPostUsageEvent**
> \Swagger\Client\azure.marketplace\UsageEventOkResponse meteringPostUsageEvent($body, $api_version, $x_ms_requestid, $x_ms_correlationid)

Posts a single usage event to the marketplace metering service API.

Posts a single usage event to the marketplace metering service API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: azure_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\azure.marketplace.api\SaasMarketplaceMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\azure.marketplace\UsageEvent()); // \Swagger\Client\azure.marketplace\UsageEvent[] | 
$api_version = new \Swagger\Client\azure.marketplace\ApiVersion(); // \Swagger\Client\azure.marketplace\ApiVersion | Version of the API.
$x_ms_requestid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for tracking the request from the client, preferably a GUID. If this value isn't provided, one will be generated and provided in the response headers.
$x_ms_correlationid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn't provided, one will be generated and provided in the response headers.

try {
    $result = $apiInstance->meteringPostUsageEvent($body, $api_version, $x_ms_requestid, $x_ms_correlationid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaasMarketplaceMeterApi->meteringPostUsageEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\azure.marketplace\UsageEvent[]**](../Model/UsageEvent.md)|  |
 **api_version** | [**\Swagger\Client\azure.marketplace\ApiVersion**](../Model/.md)| Version of the API. |
 **x_ms_requestid** | [**string**](../Model/.md)| A unique string value for tracking the request from the client, preferably a GUID. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]
 **x_ms_correlationid** | [**string**](../Model/.md)| A unique string value for operation on the client. This parameter correlates all events from client operation with events on the server side. If this value isn&#x27;t provided, one will be generated and provided in the response headers. | [optional]

### Return type

[**\Swagger\Client\azure.marketplace\UsageEventOkResponse**](../Model/UsageEventOkResponse.md)

### Authorization

[azure_auth](../../README.md#azure_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

