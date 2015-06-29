# Delete Icon

Delete one icon on dashboard for the current user.

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id___

## Request

```.http
DELETE https://appsco.com/api/v2/dashboards/id/icons/8 HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icons/8
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 1
X-RateLimit-Remaining: 0
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully delete",
        "self": "https://appsco.com/api/v2/dashboards/id/icons/8"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|409 CONFLICT                   |resource does not exist        |409            |