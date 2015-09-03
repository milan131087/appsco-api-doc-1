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

```.http
GET https://appsco.com/api/v2/dashboards/id/icons/id HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icons/484
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "icon": {
        "id": 484,
        "application_id": https://appsco.com/api/v2/apps/467,
        "application_template_id": 14,
        "title": "MySiteShop",
        "auth_type": "none",
        "url_editable": false,
        "is_configured": true,
        "self": "https://appsco.com/api/v2/dashboards/id/icons/484",
        "claims": {
          "username": "user.name@something.com,
          "password": "password"
        },
        "meta": {
            "accounts": "https://appsco.com/api/v2/accounts"
        }
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|409 CONFLICT                   |resource does not exist        |409            |