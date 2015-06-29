# API Rate Limits  

Rate limiting per access token in your control. 
If a method allows for 15 requests per rate limit window, 
then it allows you to make 15 requests per window per leveraged access token.  

## 15 Minute Windows  

Rate limits in the API are divided into 15 minute intervals.


## HTTP Headers and Response Codes
Ensure that you inspect these headers, as they provide pertinent data on where your application is at for a given rate 
limit on the method that you just utilized. 

* __X-Rate-Limit-Limit__: the rate limit ceiling for that given request
* __X-Rate-Limit-Remaining__: the number of requests left for the 15 minute window
* __X-Rate-Limit-Reset__: the remaining window before the rate limit resets in UTC epoch seconds

When you exceeds the rate limit for a given API endpoint, the Appsco API will return an HTTP 429 “Too Many Requests”.

If you hit the rate limit on a given endpoint, this is the body of the HTTP 429 message that you will see:

```.http
HTTP/1.1 429 TOO MANY REQUESTS
Content-type: application/json

{
    "response": {
        "error": : "too many requests",
        "message": "too many requests, please try later!",
        "status": 429
    }
}
```

## Chart  

