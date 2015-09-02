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


## Parameters

|                               |                                                 |
|-------------------------------|:-----------------------------------------------:|
|title                          |dashboard[title] (notBlank & limit-max 255 chars)|



## Request

```.http
POST https://appsco.com/api/v2/dashboards/17
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/17
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboard": {
        "role_id": 17,
        "alias": 17,
        "title": "asdqweperaasd",
        "roles": [
            "OWNER",
            "SHARED"
        ],
        "default_dashboard": false,
        "logo": null,
        "url": "https://appsco.com/17/",
        "self": "https://appsco.com/api/v2/dashboards/17"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|422 Unprocessable Entity       |Unprocessable Entity           |422            |