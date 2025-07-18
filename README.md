Backend development test
===
Basic JSON API endpoint for JS client to create a subscriber using the Propeller API and create an enquiry for them

A value for `PROPELLER_API_TOKEN` must be specified in `.env.local`

```
POST /api/create-enquiry

{
    "subscriber": {
        "emailAddress": "test@test.com",
        "firstName": "First Name",
        "lastName": "First Name",
        "dateOfBirth": "2000-02-02",
        "marketingConsent": true,
    },
    "lists": [
        "London"
    ],
    "enquiry": {
        "message": "Test message"
    }
}
```

TODO
---
As I had no prior experience of the Symfony framework, I was unable to get as far as I would have liked within the time
limit specified by the test brief. Given more time, my next areas of focus would be (in order): 

- Proper encapsulation of the generated OpenAPI client underpinning the `App\PropellerApi\Client` class, using dedicated
  exceptions and response DTOs, to both hide the details of the actual API and to allow refactoring/splitting of the
  generated client into a separate library
- Authentication for the 'browser-facing' API endpoint
- Improved error handling 
- Unit tests
