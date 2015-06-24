# Request token

To use the system user should obtain token.
Token can be obtained using get request with authentication headers.

## Resource URL

___https://appsco.com/api/v2/request-token___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## Request

```.http
GET https://appsco.com/api/v2/request-token HTTP/1.1
Authorization: Basic 5187236vjh8123
```

## Response

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