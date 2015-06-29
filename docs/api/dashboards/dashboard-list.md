# Return Dashboards

Returns list of all available dashboards.

## Resource URL

___https://appsco.com/api/v2/dashboards___

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

```.http
GET https://appsco.com/api/v2/dashboards HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [dashboard/id/icons](dashboard/id/icons)


```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboards": [
        "https://appsco.com/api/v2/dashboard/7",
        "https://appsco.com/api/v2/dashboard/8",
        "https://appsco.com/api/v2/dashboard/9",
        "https://appsco.com/api/v2/dashboard/10",
        "https://appsco.com/api/v2/dashboard/11",
        "https://appsco.com/api/v2/dashboard/12"
    ],
    "extended": "https://appsco.com/api/v2/dashboards/id",
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
|401 UNAUTHORIZED               |Unauthorized Request           |401            |