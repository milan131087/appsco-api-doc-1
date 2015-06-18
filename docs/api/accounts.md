# Accounts

Returns appsco public accounts

## Resource URL

___https://appsco.com/api/v2/accounts___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## OPTIONS https://appsco.com/api/v2/accounts

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET
```

## Parameters

|                               |                                       |
|-------------------------------|:-------------------------------------:|
|filter                         |Use to filter out searches             |
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts?page=2&term=term"
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
        "first": "https://appsco.com/api/v2/accounts?page=1&term=term",
        "last": "https://appsco.com/api/v2/accounts?page=6&term=term",
        "next": "https://appsco.com/api/v2/accounts?page=2&term=term",
        "page": 1,
        "pages": 6,
        "per_page": 6,
        "prev": null,
        "total": 34,
    }
}

```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts?page=2&term=term&expand=1"
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "accounts": [
        {
            "id": 1,
            "first_name": "Foo",
            "last_name": "Bar",
            "email": "foo@bar.com",
            "phone": "+11111111111111",
            "locale": "nn",
            "timezone": "Europe/Wonderland",
            "gender": "m",
            "country": "NO",
            "picture": "https://appsco.com/public/pic/3",
            "self": "https://appsco.com/api/v2/accounts/1"
        }
    ],
    "meta": {
        "first": "https://appsco.com/api/v2/accounts?page=1&term=term&expand=1",
        "last": "https://appsco.com/api/v2/accounts?page=6&term=term&expand=1",
        "next": "https://appsco.com/api/v2/accounts?page=2&term=term&expand=1",
        "page": 1,
        "pages": 6,
        "per_page": 1,
        "prev": null,
        "total": 6,
    }
}

```