# Update Own Profile (Me)

Update appsco account of currently logged in user

## Resource URL

___https://appsco.com/api/v2/me___


## Updatable fields

| Fields                        |   Y/N         |
|------------------------------:|---------------|
|First Name                     |Yes            |
|Last Name                      |Yes            |
|Email                          |Yes            |
|Phone                          |Yes            |
|Gender                         |Yes            |
|Picture                        |Yes            |


## Request

```.http
PATCH https://appsco.com/api/v2/me HTTP/1.1
Content-Type: application/example
If-Match: "Fooo"
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
    }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |