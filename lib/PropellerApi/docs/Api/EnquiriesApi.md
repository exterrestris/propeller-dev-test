# OpenAPI\Client\EnquiriesApi

All URIs are relative to https://devtest-crm-api.standard.aws.prop.cm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEnquiryForSubscriber()**](EnquiriesApi.md#createEnquiryForSubscriber) | **POST** /api/subscriber/{subscriberId}/enquiry | Create an enquiry |
| [**getEnquiriesForSubscriber()**](EnquiriesApi.md#getEnquiriesForSubscriber) | **GET** /api/subscriber/{subscriberId}/enquiries | Get enquiries for subscriber |


## `createEnquiryForSubscriber()`

```php
createEnquiryForSubscriber($subscriber_id, $create_enquiry_for_subscriber_request): \OpenAPI\Client\Model\CreateEnquiryForSubscriber200Response
```

Create an enquiry

Create an enquiry for a subscriber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 'subscriber_id_example'; // string | The subscriber ID to add an enquiry for
$create_enquiry_for_subscriber_request = new \OpenAPI\Client\Model\CreateEnquiryForSubscriberRequest(); // \OpenAPI\Client\Model\CreateEnquiryForSubscriberRequest

try {
    $result = $apiInstance->createEnquiryForSubscriber($subscriber_id, $create_enquiry_for_subscriber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->createEnquiryForSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriber_id** | **string**| The subscriber ID to add an enquiry for | |
| **create_enquiry_for_subscriber_request** | [**\OpenAPI\Client\Model\CreateEnquiryForSubscriberRequest**](../Model/CreateEnquiryForSubscriberRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateEnquiryForSubscriber200Response**](../Model/CreateEnquiryForSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnquiriesForSubscriber()`

```php
getEnquiriesForSubscriber($subscriber_id): \OpenAPI\Client\Model\GetEnquiriesForSubscriber200Response
```

Get enquiries for subscriber

Get all of the enquiries for a specific subscriber in the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 'subscriber_id_example'; // string | The subscriber ID to fetch enquiries for

try {
    $result = $apiInstance->getEnquiriesForSubscriber($subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->getEnquiriesForSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriber_id** | **string**| The subscriber ID to fetch enquiries for | |

### Return type

[**\OpenAPI\Client\Model\GetEnquiriesForSubscriber200Response**](../Model/GetEnquiriesForSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
