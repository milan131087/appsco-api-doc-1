# Post Dashboard



## Resource URL

___https://appsco.com/api/v2/dashboard/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |



## Parameters

|                               |                                       |
|-------------------------------|:-------------------------------------:|
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |


## Request

```.bash
POST https://appsco.com/api/v2/dashboard
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboard?page=3
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully posted",
        "self": "https://appsco.com/api/v2/dashboard?page=3"
    },
    "meta": {
        "icons_url": "https://appsco.com/api/v2/dashboard?page=3"
    }

}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |