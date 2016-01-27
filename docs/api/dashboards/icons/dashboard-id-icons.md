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
|extended                       |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/dashboards/id/icons HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [icons/id](icons/id)


```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/107/icons?page=1&extended=0
Cache-Control: no-cache

{
  "icons": [
    "https://appsco.com/api/v2/dashboards/107/icons/484",
    "https://appsco.com/api/v2/dashboards/107/icons/73200",
    "https://appsco.com/api/v2/dashboards/107/icons/73202",
    "https://appsco.com/api/v2/dashboards/107/icons/77663"
  ],
  "meta": {
    "total": 4,
    "page": 1,
    "first": "https://appsco.com/api/v2/dashboards/107/icons?page=1&extended=0",
    "last": "https://appsco.com/api/v2/dashboards/107/icons?page=1&extended=0",
    "pages": 1,
    "per_page": 100,
    "prev": "https://appsco.com/api/v2/dashboards/107/icons?page=1&extended=0",
    "next": "https://appsco.com/api/v2/dashboards/107/icons?page=1&extended=0"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |