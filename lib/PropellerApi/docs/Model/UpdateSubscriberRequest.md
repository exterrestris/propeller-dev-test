# # UpdateSubscriberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The subscriber&#39;s first name. | [optional]
**last_name** | **string** | The subscriber&#39;s first name. | [optional]
**date_of_birth** | **string** | The subscriber&#39;s date of birth, in Y-m-d format. | [optional]
**marketing_consent** | **bool** | Has the subscriber consented to marketing?  true or false will update the value, null or not passing the field at all will leave their existing consent alone. | [optional]
**lists** | **string[]** | An array of list IDs.  The subscriber will be removed from any lists not in this array. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
