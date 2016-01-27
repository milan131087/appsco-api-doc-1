# Return application's ID

Returns appsco public application's ID

## Resource URL

___https://appsco.com/api/v2/applications/id___

## Resource Information

|                               |               |
|------------------------------:|---------------|
|Response Format                |JSON           |
|Requires Authentication        |Yes            |
|Rate Limited?                  |Yes            |
|Requests / 15 minute window    |15             |


## Request

```.http
GET https://appsco.com/api/v2/applications/1 HTTP/1.1
```

## Response

```.http
HTTP/1.1 200 OK
Content-type: application/json
Cache-Control: no-cache
{
  "application": {
    "id": 1,
    "title": "Twitter",
    "url": "https://twitter.com/",
    "url_editable": false,
    "icon_url": "https://apps.appsco.com/icon/1.png",
    "auth_types": {
      "unpw": "icon_unpw",
      "none": "icon_none"
    },
    "plugin_data": "{\"cookie\":{\"remove\":[\"http:\/\/twitter.com\/\",\"https:\/\/www.twitter.com\/\"],\"rx\":[]},\"login\":[{\"url\":[\"\/twitter.com\",\"\/www.twitter.com\"],\"code\":\"Appsco.Claims.get(function(claims) {\n    Appsco.Browser\n        .type(\"#signin-email\", claims['username'])\n        .type(\"#signin-password\", claims['password'])\n        .uncheck(\"#remember_me\")\n        .click('div.front-signin form.signin button[type=\"submit\"]')\n    ;\n});\n\",\"rx\":[]}],\"success\":[\"a:contains(@AppsCo_Test)\"]}",
    "self": "https://appsco.com/api/v2/applications/1"
  }
}
```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |