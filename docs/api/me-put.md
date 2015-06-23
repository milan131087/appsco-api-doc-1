# Update Own Profile (Me)

Update appsco account of currently logged in user

## Resource URL

___https://appsco.com/api/v2/me___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## OPTIONS https://appsco.com/api/v2/me

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET, PUT
```


## Request

```.bash
PUT https://appsco.com/api/v2/me -H “Authentication: Basic 5187236vjh8123” -D "first_name=Fooo"
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/me
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "response": {
        "status": 200,
        "message": "Account successfully update",
        "self": "https://appsco.com/api/v2/me"
    },
    "meta": {
        "icons_url": "https://appsco.com/api/v2/me"
    }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |
