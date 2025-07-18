# OpenAPIClient-php

This is a demo CRM API for you to integrate with to send enquiries.

There are three major entities in this API:
* Subscribers: these represent a person that has been entered into the CRM. There can only be one subscriber entry per email address.
* Subscriber lists: these contain a subset of subscribers and would be used for targeting marketing emails.
* Enquiries: a message sent by a subscriber.

For subscribers, every field is optional except email address.


For more information, please visit [https://www.propeller.co.uk](https://www.propeller.co.uk).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://devtest-crm-api.standard.aws.prop.cm*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EnquiriesApi* | [**createEnquiryForSubscriber**](docs/Api/EnquiriesApi.md#createenquiryforsubscriber) | **POST** /api/subscriber/{subscriberId}/enquiry | Create an enquiry
*EnquiriesApi* | [**getEnquiriesForSubscriber**](docs/Api/EnquiriesApi.md#getenquiriesforsubscriber) | **GET** /api/subscriber/{subscriberId}/enquiries | Get enquiries for subscriber
*MiscApi* | [**getCurrentUserDetails**](docs/Api/MiscApi.md#getcurrentuserdetails) | **GET** /api/me | Get the current API user
*MiscApi* | [**getStatus**](docs/Api/MiscApi.md#getstatus) | **GET** / | Check API status
*SubscriberListsApi* | [**createList**](docs/Api/SubscriberListsApi.md#createlist) | **POST** /api/list | Create a list
*SubscriberListsApi* | [**deleteList**](docs/Api/SubscriberListsApi.md#deletelist) | **DELETE** /api/list/{listId} | Delete a list
*SubscriberListsApi* | [**getAllLists**](docs/Api/SubscriberListsApi.md#getalllists) | **GET** /api/lists | Get all lists
*SubscriberListsApi* | [**getList**](docs/Api/SubscriberListsApi.md#getlist) | **GET** /api/list/{listId} | Get a list
*SubscribersApi* | [**createOrUpdateSubscriber**](docs/Api/SubscribersApi.md#createorupdatesubscriber) | **PUT** /api/subscriber | Create or update a subscriber
*SubscribersApi* | [**createSubscriber**](docs/Api/SubscribersApi.md#createsubscriber) | **POST** /api/subscriber | Create a subscriber
*SubscribersApi* | [**deleteSubscriber**](docs/Api/SubscribersApi.md#deletesubscriber) | **DELETE** /api/subscriber/{subscriberId} | Delete a subscriber
*SubscribersApi* | [**getSubscriber**](docs/Api/SubscribersApi.md#getsubscriber) | **GET** /api/subscriber/{subscriberId} | Get a subscriber
*SubscribersApi* | [**getSubscribers**](docs/Api/SubscribersApi.md#getsubscribers) | **GET** /api/subscribers | Get all subscribers
*SubscribersApi* | [**updateSubscriber**](docs/Api/SubscribersApi.md#updatesubscriber) | **PATCH** /api/subscriber/{subscriberId} | Update a subscriber

## Models

- [ApiFieldValidationError](docs/Model/ApiFieldValidationError.md)
- [ApiUser](docs/Model/ApiUser.md)
- [ApiValidationError](docs/Model/ApiValidationError.md)
- [CreateEnquiryForSubscriber200Response](docs/Model/CreateEnquiryForSubscriber200Response.md)
- [CreateEnquiryForSubscriberRequest](docs/Model/CreateEnquiryForSubscriberRequest.md)
- [CreateList200Response](docs/Model/CreateList200Response.md)
- [CreateListRequest](docs/Model/CreateListRequest.md)
- [CreateOrUpdateSubscriber200Response](docs/Model/CreateOrUpdateSubscriber200Response.md)
- [CreateOrUpdateSubscriberRequest](docs/Model/CreateOrUpdateSubscriberRequest.md)
- [CreateSubscriberRequest](docs/Model/CreateSubscriberRequest.md)
- [Enquiry](docs/Model/Enquiry.md)
- [GetAllLists200Response](docs/Model/GetAllLists200Response.md)
- [GetCurrentUserDetails200Response](docs/Model/GetCurrentUserDetails200Response.md)
- [GetEnquiriesForSubscriber200Response](docs/Model/GetEnquiriesForSubscriber200Response.md)
- [GetStatus200Response](docs/Model/GetStatus200Response.md)
- [GetSubscribers200Response](docs/Model/GetSubscribers200Response.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [ModelList](docs/Model/ModelList.md)
- [Subscriber](docs/Model/Subscriber.md)
- [Tenant](docs/Model/Tenant.md)
- [UpdateSubscriberRequest](docs/Model/UpdateSubscriberRequest.md)

## Authorization

Authentication schemes defined for the API:
### ApiUserAuthentication

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

dev@propeller.co.uk

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
