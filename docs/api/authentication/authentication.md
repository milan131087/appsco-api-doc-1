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
|Requests / 15 minute window    |10             |


## Request

```.http
POST https://appsco.com/api/v2/request-token HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/
Cache-Control: no-cache
X-RateLimit-Limit: 100
X-RateLimit-Remaining: 10

{
  "token": "18z4d9giu38k44gswgsc4s4wgwc4ks0oko8sckw4kw48scg0042cgvir9cjckkwsoogswcg4wskgg4ocs8ks4gc48owcgs04ogs"
}

```
## Error Response

|HEADER                         |Message                                       |Status         |
|-------------------------------|----------------------------------------------|---------------|
|401 unauthorized               |please authenticate with your token           |401            |
|405 access denied              |Please use basic auth for this api call.      |403            |
|422 unprocessable entity       |There is no registered application for []     |422            |