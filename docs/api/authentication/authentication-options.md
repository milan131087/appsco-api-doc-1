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
Content-Type: application/json
Location: https://appsco.com/api/v2/request-token

{
  "allow": [
    "POST",
    "OPTIONS"
  ]
}
```

## Error Response

|HEADER                          |Message                                 |Status         |
|--------------------------------|----------------------------------------|---------------|
|403 access denied               |Please use basic auth for this api call |403            |


