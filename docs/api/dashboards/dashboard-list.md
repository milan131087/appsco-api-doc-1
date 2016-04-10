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
|extended                       |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/dashboards HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [dashboard/id/icons](dashboard/id/icons)


```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards?page=1&extended=0
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
  "dashboards": [
    "https://appsco.com/api/v2/dashboards/108"
  ],
  "meta": {
    "total": 1,
    "page": 1,
    "first": "https://appsco.com/api/v2/dashboards?page=1&extended=0",
    "last": "https://appsco.com/api/v2/dashboards?page=1&extended=0",
    "pages": 1,
    "per_page": 100,
    "prev": "https://appsco.com/api/v2/dashboards?page=1&extended=0",
    "next": "https://appsco.com/api/v2/dashboards?page=1&extended=0"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |