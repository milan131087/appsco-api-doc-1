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

## Request

```.http
GET https://appsco.com/api/v2 HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
ETag: ""
Cache-Control: max-age-86400
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

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |