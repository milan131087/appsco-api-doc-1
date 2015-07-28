# Authentication Options

## Resource URL

___https://appsco.com/api/v2/request-token___

## Request

```.http
OPTIONS https://appsco.com/api/v2/request-token HTTP/1.1
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
