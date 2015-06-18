# Response Headers

Response type will be JSON.
Response should be returned depending on what client requests.  
Request for type should be sent with header Content-Type/Accept header.

## Unauthorized Request

```.http
HTTP/1.1 401 UNAUTHORIZED
Location: https://appsco.com/api/v2/request-token
WWW-Authenticate: Basic realm=”Authentication required”
Content-type: application/json

{
    "error": "unauthorized",
    "message": "please authenticate with your token",
    "status": 401
}
```
## Method Not Allowed
  
```.http
HTTP/1.1 405 METHOD NOT ALLOWED
Content-type: application/json

{
    "error": "method not allowed",
    "message": "You are not authorized to use this method",
    "status": 405
}
```
## OPTIONS Header
  
Each API route can be explored with OPTIONS header.  
Available request types will be returned in the Allow header.

```.http
HTTP/1.1 200 OK
Allow: OPTIONS, POST, GET, DELETE
```