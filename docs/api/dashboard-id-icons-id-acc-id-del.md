# Remove Account From current Icon

Remove account to which current icon is shared

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id/accounts/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |



## Request

```.bash
DELETE https://appsco.com/api/v2/dashboards/id/icons/id/accounts/id
```

## Success Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icons/id
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 1
X-RateLimit-Remaining: 0
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully removed",
        "self": "https://appsco.com/api/v2/dashboards/id/icons/id"
    },
    "meta": {
        "icons_url": "https://appsco.com/api/v2/dashboards/id/icons/id"
    }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |
