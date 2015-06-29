# Request Token

To authenticate user should request token in order to get username and password.

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
{
    "token": "token-hash",
    "ttl": ""
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
