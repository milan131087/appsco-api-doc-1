# Dashboard List

Returns list of all available dashboards for the current user

## Resource URL

___https://appsco.com/api/v2/dashboards___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## OPTIONS https://appsco.com/api/v2/dashboards

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET, POST, DELETE, PATCH
```

## Parameters


|                               |                                       |
|-------------------------------|:-------------------------------------:|
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |

## Get Request / Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards?page=3
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboards": [
        "https://appsco.com/api/v2/dashboards/7",
        "https://appsco.com/api/v2/dashboards/8",
        "https://appsco.com/api/v2/dashboards/9",
        "https://appsco.com/api/v2/dashboards/10",
        "https://appsco.com/api/v2/dashboards/11",
        "https://appsco.com/api/v2/dashboards/12"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/dashboards?page=1",
        "last": "https://appsco.com/api/v2/dashboards?page=6",
        "next": "https://appsco.com/api/v2/dashboards?page=3",
        "page": 2,
        "pages": 6,
        "per_page": 6,
        "prev": "https://appsco.com/api/v2/dashboards?page=1",
        "total": 34,
    }
}

```
