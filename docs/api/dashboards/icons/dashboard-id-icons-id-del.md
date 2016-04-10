# Delete Icon

Delete one icon on dashboard for the current user.

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id___

## Request

```.http
DELETE https://appsco.com/api/v2/dashboards/id/icons/8 HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/107/icons
Cache-Control: no-cache

{
  "response": {
    "message": "Successful",
    "code": 200
  },
  "meta": {
    "icons": "https://appsco.com/api/v2/dashboards/107/icons"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|409 CONFLICT                   |resource does not exist        |409            |