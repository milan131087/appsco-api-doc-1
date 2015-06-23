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

## OPTIONS https://appsco.com/api/v2/accounts/id

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Request

```.bash
GET https://appsco.com/api/v2/accounts/id
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts/id"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "accounts":
        {
            "id": 1,
            "first_name": "Foo",
            "last_name": "Bar",
            "email": "foo@bar.com",
            "phone": "+11111111111111",
            "locale": "nn",
            "timezone": "Europe/Wonderland",
            "gender": "m",
            "country": "NO",
            "picture": "https://appsco.com/public/pic/3",
            "self": "https://appsco.com/api/v2/accounts/id"
        }

}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |