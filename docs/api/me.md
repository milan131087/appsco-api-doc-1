# Own Profile (Me)

Returns appsco account of currently logged in user

## Resource URL

___https://appsco.com/api/v2/me___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |

## OPTIONS https://appsco.com/api/v2/me

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, GET, PATCH
```

## Parameters

|                               |                                       |
|-------------------------------|:-------------------------------------:|
|filter                         |Use to filter out searches             |
|page                           |Page number                            |
|expand                         |Show resource link or entire resource  |

## Get Request / Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "account": {
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
        "self": "https://appsco.com/api/v2/me"
    }
}

```

## Patch Request / Response

```.bash
PATCH https://appsco.com/api/v2/me -H “Authentication: Basic 5187236vjh8123” -D "first_name=Fooo"
```

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: https://appsco.com/api/v2/me
ETag: ""
Cache-Control: max-age-86400
X-RateLimit-Limit: 15
X-RateLimit-Remaining: 14
X-RateLimit-Reset: 1433771022

{
    "account": {
        "id": 1,
        "first_name": "Fooo",
        "last_name": "Bar",
        "email": "foo@bar.com",
        "phone": "+11111111111111",
        "locale": "nn",
        "timezone": "Europe/Wonderland",
        "gender": "m",
        "country": "NO",
        "picture": "https://appsco.com/public/pic/3",
        "self": "https://appsco.com/api/v2/me"
    }
}

```