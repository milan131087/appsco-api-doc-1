# Return Icon's Details

Returns icon's details of one available icon on dashboard for the current user.

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id___

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
Location: https://appsco.com/api/v2/dashboards/107/icons/484
Cache-Control: no-cache

{
  "icon": {
    "application": "https://appsco.com/api/v2/applications/14",
    "title": "MySiteShop",
    "auth_type": "none",
    "is_configured": false,
    "url_editable": false,
    "icon_url": "https://apps.appsco.com/icon/14.png",
    "url": "https://accounts.mysiteshop.com/",
    "images": [
      "https://apps.appsco.com/icon/14.png"
    ],
    "self": "https://appsco.com/api/v2/dashboards/107/icons/484"
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
|409 CONFLICT                   |resource does not exist        |409            |