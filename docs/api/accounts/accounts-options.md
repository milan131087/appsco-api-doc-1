# Options Accounts

Returns all available accounts.

## Resource URL

___https://appsco.com/api/v2/accounts___


## Request

```.http
OPTIONS https://appsco.com/api/v2/accounts HTTP/1.1
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