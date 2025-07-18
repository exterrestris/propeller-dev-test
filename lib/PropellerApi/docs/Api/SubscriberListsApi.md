# OpenAPI\Client\SubscriberListsApi

All URIs are relative to https://devtest-crm-api.standard.aws.prop.cm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createList()**](SubscriberListsApi.md#createList) | **POST** /api/list | Create a list |
| [**deleteList()**](SubscriberListsApi.md#deleteList) | **DELETE** /api/list/{listId} | Delete a list |
| [**getAllLists()**](SubscriberListsApi.md#getAllLists) | **GET** /api/lists | Get all lists |
| [**getList()**](SubscriberListsApi.md#getList) | **GET** /api/list/{listId} | Get a list |


## `createList()`

```php
createList($create_list_request): \OpenAPI\Client\Model\CreateList200Response
```

Create a list

Create a new list for the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscriberListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_list_request = new \OpenAPI\Client\Model\CreateListRequest(); // \OpenAPI\Client\Model\CreateListRequest

try {
    $result = $apiInstance->createList($create_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberListsApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_list_request** | [**\OpenAPI\Client\Model\CreateListRequest**](../Model/CreateListRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateList200Response**](../Model/CreateList200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteList()`

```php
deleteList($list_id)
```

Delete a list

Delete a list from the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscriberListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 'list_id_example'; // string | The list ID to delete

try {
    $apiInstance->deleteList($list_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberListsApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| The list ID to delete | |

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

## `getAllLists()`

```php
getAllLists(): \OpenAPI\Client\Model\GetAllLists200Response
```

Get all lists

Get all of the lists for the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscriberListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllLists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberListsApi->getAllLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetAllLists200Response**](../Model/GetAllLists200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($list_id): \OpenAPI\Client\Model\CreateList200Response
```

Get a list

Get a single list for the current tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiUserAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SubscriberListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 'list_id_example'; // string | The list ID to fetch

try {
    $result = $apiInstance->getList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberListsApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| The list ID to fetch | |

### Return type

[**\OpenAPI\Client\Model\CreateList200Response**](../Model/CreateList200Response.md)

### Authorization

[ApiUserAuthentication](../../README.md#ApiUserAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
