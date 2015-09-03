# Return list of all available APPS

Returns list of all available applications

## Resource URL

___https://appsco.com/api/v2/applications___

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
|filter                         |Use to filter out searches             |
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/applications HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [applications/id](applications/id)

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/applications"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "apps": [
        "https://appsco.com/api/v2/applications/1",
        "https://appsco.com/api/v2/applications/2",
        "https://appsco.com/api/v2/applications/3",
        "https://appsco.com/api/v2/applications/4",
        "https://appsco.com/api/v2/applications/5",
        "https://appsco.com/api/v2/applications/6"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/applications?page=1&filter=filter",
        "last": "https://appsco.com/api/v2/applications?page=6&filter=filter",
        "next": "https://appsco.com/api/v2/applications?page=2&filter=filter",
        "page": 1,
        "pages": 6,
        "per_page": 6,
        "prev": null,
        "total": 34,
    }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |