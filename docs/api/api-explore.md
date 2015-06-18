# Explore The API

Returns all available routs. Each route is named.

## Resource URL

___https://appsco.com/api/v2___

## Resource Information

|                               |               |
|-------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## OPTIONS https://appsco.com/api/v2

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "versions": {
        "v2": {
            "accounts": "https://appsco.com/api/v2/accounts",
            "me": "https://appsco.com/api/v2/me",
            "dashboards": "https://appsco.com/api/v2/dashboards",
            "apps": "https://appsco.com/api/v2/apps"
        }
    }
}

```