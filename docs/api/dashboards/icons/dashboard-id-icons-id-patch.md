# Update Icon's Details

Update icon's details of one available icon on dashboard for the current user.

## Resource URL

___https://appsco.com/api/v2/dashboard/id/icon/id___

## Updatable fields

| Fields                        |     Y/N       |
|------------------------------:|---------------|
|Title                          |Yes            |
|Auth Type                      |Yes            |


## Request

```.http
PATCH https://appsco.com/api/v2/dashboards/id/icons/id HTTP/1.1
Content-Type: application/example
If-Match: "Fooo"
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
        "message": "Account successfully update",
        "self": "https://appsco.com/api/v2/dashboards/id/icons/8"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|409 CONFLICT                   |resource does not exist        |409            |