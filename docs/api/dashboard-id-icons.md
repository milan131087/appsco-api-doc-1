# Dashboard ID/ICONS

Returns all available icons of the dashboards for the current user

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icon___

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
GET https://appsco.com/api/v2/dashboards/id/icon
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icon
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboards": [
        "https://appsco.com/api/v2/dashboards/id/icons/7",
        "https://appsco.com/api/v2/dashboards/id/icons/8",
        "https://appsco.com/api/v2/dashboards/id/icons/9",
        "https://appsco.com/api/v2/dashboards/id/icons/10",
        "https://appsco.com/api/v2/dashboards/id/icons/11",
        "https://appsco.com/api/v2/dashboards/id/icons/12"
    ],
    "extended": "https://appsco.com/api/v2/dashboards/id/icons/7",
    "meta": {
        "first": "https://appsco.com/api/v2/dashboards?page=1",
        "last": "https://appsco.com/api/v2/dashboards?page=6",
        "next": "https://appsco.com/api/v2/dashboards?page=3",
        "page": 2,
        "pages": 6,
        "per_page": 6,
        "prev": "https://appsco.com/api/v2/dashboards?page=1",
        "total": 34
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |