# Return Accounts

Returns all available accounts.

## Resource URL

___https://appsco.com/api/v2/accounts___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Parameters

|                               |                                       |
|-------------------------------|:-------------------------------------:|
|filter                         |Use to filter out searches             |
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/accounts HTTP/1.1
```


## Response

> Extended hyperlink can be found at this link: [accounts/id](accounts/id)

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts?page=2&filter=filter"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "accounts": [
        "https://appsco.com/api/v2/accounts/1",
        "https://appsco.com/api/v2/accounts/2",
        "https://appsco.com/api/v2/accounts/3",
        "https://appsco.com/api/v2/accounts/4",
        "https://appsco.com/api/v2/accounts/5",
        "https://appsco.com/api/v2/accounts/6"
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/accounts?page=1&filter=filter",
        "last": "https://appsco.com/api/v2/accounts?page=6&filter=filter",
        "next": "https://appsco.com/api/v2/accounts?page=2&filter=filter",
        "page": 1,
        "pages": 6,
        "per_page": 6,
        "prev": null,
        "total": 34,
    }
}
```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |