# Post Icon On Dashboard

Post icon on dashboard of current user

## Resource URL

___https://appsco.com/api/v2/dashboard/id/icons/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |ma
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |



## Request

```.bash
POST https://appsco.com/api/v2/dashboard/id/icons/id
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboard/id/icon/8
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully posted",
        "self": "https://appsco.com/api/v2/dashboard/id/icon/8"
    },
    "meta": {
        "icons_url": "https://appsco.com/api/v2/dashboard/id/icon/8"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |