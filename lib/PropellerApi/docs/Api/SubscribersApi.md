# OpenAPI\Client\SubscribersApi

All URIs are relative to https://devtest-crm-api.standard.aws.prop.cm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateSubscriber()**](SubscribersApi.md#createOrUpdateSubscriber) | **PUT** /api/subscriber | Create or update a subscriber |
| [**createSubscriber()**](SubscribersApi.md#createSubscriber) | **POST** /api/subscriber | Create a subscriber |
| [**deleteSubscriber()**](SubscribersApi.md#deleteSubscriber) | **DELETE** /api/subscriber/{subscriberId} | Delete a subscriber |
| [**getSubscriber()**](SubscribersApi.md#getSubscriber) | **GET** /api/subscriber/{subscriberId} | Get a subscriber |
| [**getSubscribers()**](SubscribersApi.md#getSubscribers) | **GET** /api/subscribers | Get all subscribers |
| [**updateSubscriber()**](SubscribersApi.md#updateSubscriber) | **PATCH** /api/subscriber/{subscriberId} | Update a subscriber |


## `createOrUpdateSubscriber()`

```php
createOrUpdateSubscriber($create_or_update_subscriber_request): \OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response
```

Create or update a subscriber

Create a new subscriber using the email address provided.  If there's already a subscriber with that email address, update it instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_or_update_subscriber_request = {"emailAddress":"test@example.com","firstName":null,"lastName":null,"dateOfBirth":null,"marketingConsent":null}; // \OpenAPI\Client\Model\CreateOrUpdateSubscriberRequest

try {
    $result = $apiInstance->createOrUpdateSubscriber($create_or_update_subscriber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->createOrUpdateSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_or_update_subscriber_request** | [**\OpenAPI\Client\Model\CreateOrUpdateSubscriberRequest**](../Model/CreateOrUpdateSubscriberRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response**](../Model/CreateOrUpdateSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscriber()`

```php
createSubscriber($create_subscriber_request): \OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response
```

Create a subscriber

Create a new subscriber.  If there's already a subscriber with this email address, this call will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_subscriber_request = new \OpenAPI\Client\Model\CreateSubscriberRequest(); // \OpenAPI\Client\Model\CreateSubscriberRequest

try {
    $result = $apiInstance->createSubscriber($create_subscriber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->createSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscriber_request** | [**\OpenAPI\Client\Model\CreateSubscriberRequest**](../Model/CreateSubscriberRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response**](../Model/CreateOrUpdateSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriber()`

```php
deleteSubscriber($subscriber_id)
```

Delete a subscriber

Delete a subscriber from the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 'subscriber_id_example'; // string | The subscriber ID to delete

try {
    $apiInstance->deleteSubscriber($subscriber_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->deleteSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriber_id** | **string**| The subscriber ID to delete | |

### Return type

void (empty response body)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriber()`

```php
getSubscriber($subscriber_id): \OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response
```

Get a subscriber

Get a single existing subscriber for the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 'subscriber_id_example'; // string | The subscriber ID to fetch

try {
    $result = $apiInstance->getSubscriber($subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriber_id** | **string**| The subscriber ID to fetch | |

### Return type

[**\OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response**](../Model/CreateOrUpdateSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscribers()`

```php
getSubscribers(): \OpenAPI\Client\Model\GetSubscribers200Response
```

Get all subscribers

Get all of the subscribers for the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubscribers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetSubscribers200Response**](../Model/GetSubscribers200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriber()`

```php
updateSubscriber($subscriber_id, $update_subscriber_request): \OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response
```

Update a subscriber

Update a subscriber by ID.  You cannot change a subscriber's email address using this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 'subscriber_id_example'; // string | The subscriber ID to update
$update_subscriber_request = {"firstName":"Test","lastName":"User","dateOfBirth":null,"marketingConsent":false,"lists":["01JY4Q9EKKCMXSVB7M682S2RNQ"]}; // \OpenAPI\Client\Model\UpdateSubscriberRequest

try {
    $result = $apiInstance->updateSubscriber($subscriber_id, $update_subscriber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->updateSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriber_id** | **string**| The subscriber ID to update | |
| **update_subscriber_request** | [**\OpenAPI\Client\Model\UpdateSubscriberRequest**](../Model/UpdateSubscriberRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateOrUpdateSubscriber200Response**](../Model/CreateOrUpdateSubscriber200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
