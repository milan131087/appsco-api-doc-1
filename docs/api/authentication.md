# Authentication

To authenticate user should provide username and password

## Resource URL

___https://appsco.com/api/v2/request-token___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## OPTIONS https://appsco.com/api/v2/request-token

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Request/Response

GET https://appsco.com/api/v2/request-token -H “Authentication: Basic 5187236vjh8123”

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "token": "token-hash",
    "ttl": ""
}

```