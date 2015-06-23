# Return Icon's Details

Returns icon's details of one available icon on dashboard for the current user.

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icon/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.bash
GET https://appsco.com/api/v2/dashboards/id/icon/id
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icon/id
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "icon": {
        "id": 484,
        "application_id": 467,
        "application_template_id": 14,
        "title": "MySiteShop",
        "url": "https:\\/\\/accounts.mysiteshop.com\\/",
        "icon_url": "https:\\/\\/apps.appsco.com\\/icon\\/14.png",
        "auth_type": "none",
        "url_editable": false,
        "is_configured": true,
        "claims": {
          "username": "user.name@something.com,
          "password": "password"
        }
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |