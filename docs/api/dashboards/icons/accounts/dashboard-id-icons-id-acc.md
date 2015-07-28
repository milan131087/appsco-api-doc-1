# Return Shared Accounts for Icon

Return shared all available accounts on dashboard for the current icon.

## Resource URL

___https://appsco.com/api/v2/dashboards/id/icons/id/accounts___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.http
GET https://appsco.com/api/v2/dashboards/id/icons/id/accounts HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/dashboards/id/icons/id/accounts
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "dashboards": [
        "https://appsco.com/api/v2/dashboards/id/icons/7",
        "https://appsco.com/api/v2/dashboards/id/icons/8",
        "https://appsco.com/api/v2/dashboards/id/icons/9",
        "https://appsco.com/api/v2/dashboards/id/icons/10",
        "https://appsco.com/api/v2/dashboards/id/icons/11",
        "https://appsco.com/api/v2/dashboards/id/icons/12"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/dashboards/id/icons/id?page=1",
        "last": "https://appsco.com/api/v2/dashboards/id/icons/id?page=6",
        "next": "https://appsco.com/api/v2/dashboards/id/icons/id?page=3",
        "page": 2,
        "pages": 6,
        "per_page": 6,
        "prev": "https://appsco.com/api/v2/dashboards/id/icons/id?page=1",
        "total": 34
    }
}

```
## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |
