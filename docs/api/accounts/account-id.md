# Return All IDs for Account

Returns all available appsco public account's ID

## Resource URL

___https://appsco.com/api/v2/accounts/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.bash
GET https://appsco.com/api/v2/accounts/id
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts/1"
Cache-Control: no-cache

{
  "account": {
    "email": "admin@appsco.com",
    "country": "AF",
    "name": "Appsco Admin",
    "first_name": "Appsco",
    "last_name": "Admin",
    "gender": null,
    "locale": "en",
    "picture_url": null,
    "username": "admin@appsco.com",
    "roles": [
      "ROLE_ADMIN",
      "ROLE_WELCOME",
      "ROLE_USER"
    ],
    "self": "https://appsco.com/api/v2/accounts/1"
  },
  "meta": {
    "share": "https://appsco.com/api/v2/accounts/1/share"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |