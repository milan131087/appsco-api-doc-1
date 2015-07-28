# Options Dashboard's ID

Options ID's details of the current user

## Resource URL

___https://appsco.com/api/v2/dashboards/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request
```.http
OPTIONS https://appsco.com/api/v2/dashboards/83 HTTP/1.1
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