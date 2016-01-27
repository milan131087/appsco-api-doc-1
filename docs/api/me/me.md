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
Cache-Control: no-cache
X-RateLimit-Limit: 100
X-RateLimit-Remaining: 10

{
  "account": {
    "id": 260,
    "email": "john.doe@example.com",
    "first_name": "John",
    "last_name": "Doe",
    "locale": "en",
    "timezone": "Asia/Seoul",
    "gender": "m",
    "country": "RS",
    "phone": null,
    "picture_url": "https://lh6.googleusercontent.com/-815AUb_ow_o/AAAAAAAAAAI/AAAAAAAAABU/Rjbo9QHIkU/photo.jpg"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |