# Options Own Profile (Me)

Returns appsco account options of currently logged in user

## Resource URL

___https://appsco.com/api/v2/me___


## Request
```.http
OPTIONS https://appsco.com/api/v2/me HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |