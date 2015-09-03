# Return application's ID

Returns appsco public application's ID

## Resource URL

___https://appsco.com/api/v2/applications/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.http
GET https://appsco.com/api/v2/applications/1 HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/applications/1"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "plugin_data": {
        "id": 1,
        "title": "Foo",
        "url": "https://appsco.com/icon/4",
        "self": "https://appsco.com/api/v2/applications/1",
        "icons": {
             "16": "https://applications.appsco.com/icon/12.png",
             "24": "https://applications.appsco.com/icon/24.png",
             "32": "https://applications.appsco.com/icon/32.png",
             "64": "https://applications.appsco.com/icon/64.png",
             "128": "https://applications.appsco.com/icon/128.png",
             "256": "https://applications.appsco.com/icon/256.png",
             "512": "https://applications.appsco.com/icon/512.png",
        }
    }
}
```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |