# Dashboard ID/ICONS/ID/ACCOUNTS/POST

Return of all available accounts on dashboard for the current user

## Resource URL

___https://appsco.com/api/v2/dashboard/id/icon/id/account___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.bash
POST https://appsco.com/api/v2/dashboard/id/icon/id/account
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboard/id/icon/id/account
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully post",
        "self": "https://appsco.com/api/v2/dashboard/id/icon/id/account"
    },
    "meta": {
        "icons_url": "https://appsco.com/api/v2/dashboard/id/icon/id/account"
    }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |