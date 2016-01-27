# Return Dashboard's IDs Details

Returns ID's details of the current user

## Resource URL

___https://appsco.com/api/v2/dashboards/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## OPTIONS https://appsco.com/api/v2/dashboards/id

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```


## Parameters


|                               |                                       |
|-------------------------------|:-------------------------------------:|
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |


## Request

```.bash
GET https://appsco.com/api/v2/dashboards/id HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/107
ETag: ""
Cache-Control: no-cache


{
  "dashboard": {
    "role_id": 107,
    "alias": "85",
    "title": "john.doe@example.com",
    "roles": [
      "OWNER",
      "SHARED"
    ],
    "default_dashboard": false,
    "logo": "https://appsco.com/bundles/appscodashboardapproot/img/dashboard-logo.png",
    "url": "https://appsco.com/107/",
    "self": "https://appsco.com/api/v2/dashboards/107"
  },
  "meta": {
    "accounts": {
      "accounts": [
        "https://appsco.com/api/v2/accounts/262"
      ],
      "count": 1
    },
    "icons": {
      "icons": [
        "https://appsco.com/api/v2/dashboards/107/icons/484",
        "https://appsco.com/api/v2/dashboards/107/icons/73200",
        "https://appsco.com/api/v2/dashboards/107/icons/73202",
        "https://appsco.com/api/v2/dashboards/107/icons/77663"
      ],
      "count": 4
    }
  }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |
|403 access denied              |Please use token for api calls |403            |