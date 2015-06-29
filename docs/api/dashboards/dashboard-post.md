# Post Dashboard



## Resource URL

___https://appsco.com/api/v2/dashboards/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.http
POST https://appsco.com/api/v2/dashboards/8
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/8
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully posted",
        "self": "https://appsco.com/api/v2/dashboards/8
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |