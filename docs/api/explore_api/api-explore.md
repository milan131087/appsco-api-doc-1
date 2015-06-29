# Explore The API OPTIONS

Returns all available routs. Each route is named.

## Resource URL

___https://appsco.com/api/v2___


## Request

```.http
OPTIONS https://appsco.com/api/v2 HTTP/1.1
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