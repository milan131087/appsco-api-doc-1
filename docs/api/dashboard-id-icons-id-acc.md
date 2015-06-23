# Dashboard ID/ICONS/ID/ACCOUNTS/GET

Return of all available accounts on dashboard for the current user

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id/accounts___

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


## GET Request

```.bash
GET https://appsco.com/api/v2/dashboard/id/icon/id/account
```

## GET Response

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
    "dashboards": [
        "https://appsco.com/api/v2/dashboard/id/icon/7",
        "https://appsco.com/api/v2/dashboard/id/icon/8",
        "https://appsco.com/api/v2/dashboard/id/icon/9",
        "https://appsco.com/api/v2/dashboard/id/icon/10",
        "https://appsco.com/api/v2/dashboard/id/icon/11",
        "https://appsco.com/api/v2/dashboard/id/icon/12"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/dashboard/id/icon/id?page=1",
        "last": "https://appsco.com/api/v2/dashboard/id/icon/id?page=6",
        "next": "https://appsco.com/api/v2/dashboard/id/icon/id?page=3",
        "page": 2,
        "pages": 6,
        "per_page": 6,
        "prev": "https://appsco.com/api/v2/dashboard/id/icon/id?page=1",
        "total": 34
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |
