# Return Dashboard ICONS

Returns all available icons of the dashboards for the current user

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons___

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
GET https://appsco.com/api/v2/dashboards/id/icons HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [icons/id](icons/id)


```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icons
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "icons": [
        "https://appsco.com/api/v2/dashboards/id/icons/7",
        "https://appsco.com/api/v2/dashboards/id/icons/8",
        "https://appsco.com/api/v2/dashboards/id/icons/9",
        "https://appsco.com/api/v2/dashboards/id/icons/10",
        "https://appsco.com/api/v2/dashboards/id/icons/11",
        "https://appsco.com/api/v2/dashboards/id/icons/12"
    ],
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