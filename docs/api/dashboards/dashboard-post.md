# Post Dashboard



## Resource URL

___https://appsco.com/api/v2/dashboards?title=SomeTitle

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
|title                          |Dashboard title                        |
|notBlank                       |max 255 char                           |
|limit                          |max 255 char                           |



## Request

```.http
POST https://appsco.com/api/v2/dashboards?title=SomeTitle
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards?title=SomeTitle
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully posted",
        "self": "https://appsco.com/api/v2/dashboards?title=SomeTitle
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|422 Unprocessable Entity       |Form Data is Mailformed        |422            |