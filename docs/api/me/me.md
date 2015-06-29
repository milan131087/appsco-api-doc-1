# Return Own Profile (Me)

Returns appsco account of currently logged in user

## Resource URL

___https://appsco.com/api/v2/me___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.http
GET https://appsco.com/api/v2/me HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/me
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "account": {
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
        "self": "https://appsco.com/api/v2/me"
    },
    "meta": {
        "dashboards": "https://appsco.com/api/v2/dashboards"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |