# Return Dashboard's IDs Details

Returns ID's details of the current user

## Resource URL

___https://appsco.com/api/v2/dashboard/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## OPTIONS https://appsco.com/api/v2/dashboard/id

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
GET https://appsco.com/api/v2/dashboard/id
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboard/id
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboards": {
        "id": 83,
        "role_id": 105,
        "alias": "83",
        "title": "john.doe@boutsourcing.com",
        "roles": [
          "OWNER",
          "SHARED"
        ],
        "default_dashboard": false,
        "url": "https:\\/\\/appsco.com\\/83\\/",
        "logo_url": "https:\\/\\/appsco.com\\/bundles\\/appscodashboardapproot\\/img\\/dashboard-logo.png"
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|405 METHOD NOT ALLOWED         |Method Not allowed             |405            |
|409 CONFLICT                   |resource does not exist        |409            |