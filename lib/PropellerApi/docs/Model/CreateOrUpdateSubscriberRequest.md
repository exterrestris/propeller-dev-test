# # CreateOrUpdateSubscriberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The email address of the subscriber. This is required. |
**first_name** | **string** | The subscriber&#39;s first name. This is optional. | [optional]
**last_name** | **string** | The subscriber&#39;s first name. This is optional. | [optional]
**date_of_birth** | **string** | The subscriber&#39;s date of birth, in Y-m-d format. This is optional. | [optional]
**marketing_consent** | **bool** | Has the subscriber consented to marketing?  true or false will update the value, null or not passing the field at all will leave their existing consent alone. | [optional]
**lists** | **string[]** | An array of list IDs.  An updated subscriber will be added to any lists here, but will not be removed from any of their existing lists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
