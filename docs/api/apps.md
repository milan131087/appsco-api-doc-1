# Return list of all available APPS

Returns list of all available applications

## Resource URL

___https://appsco.com/api/v2/apps___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## OPTIONS https://appsco.com/api/v2/apps

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Parameters

|                               |                                       |
|-------------------------------|:-------------------------------------:|
|filter                         |Use to filter out searches             |
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |


## Request

```.bash
GET https://appsco.com/api/v2/apps
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/apps?page=2&term=term"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "accounts": [
        "https://appsco.com/api/v2/apps/1",
        "https://appsco.com/api/v2/apps/2",
        "https://appsco.com/api/v2/apps/3",
        "https://appsco.com/api/v2/apps/4",
        "https://appsco.com/api/v2/apps/5",
        "https://appsco.com/api/v2/apps/6"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/apps?page=1&term=term",
        "last": "https://appsco.com/api/v2/apps?page=6&term=term",
        "next": "https://appsco.com/api/v2/apps?page=2&term=term",
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
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |
