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
|extended                       |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/accounts HTTP/1.1
```


## Response

> Extended hyperlink can be found at this link: [accounts/id](accounts/id)

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/accounts?page=2&extended=0"
Cache-Control: no-cache

{
  "accounts": [
    "https://appsco.com/api/v2/accounts/1",
    "https://appsco.com/api/v2/accounts/2",
    "https://appsco.com/api/v2/accounts/4",
    "https://appsco.com/api/v2/accounts/5",
    "https://appsco.com/api/v2/accounts/6",
    "https://appsco.com/api/v2/accounts/7",
    "https://appsco.com/api/v2/accounts/8",
    "https://appsco.com/api/v2/accounts/9",
    "https://appsco.com/api/v2/accounts/10",
    "https://appsco.com/api/v2/accounts/11",
    "https://appsco.com/api/v2/accounts/12",
    "https://appsco.com/api/v2/accounts/13",
    "https://appsco.com/api/v2/accounts/14",
    "https://appsco.com/api/v2/accounts/15",
    "https://appsco.com/api/v2/accounts/16",
    "https://appsco.com/api/v2/accounts/17",
    "https://appsco.com/api/v2/accounts/18",
    "https://appsco.com/api/v2/accounts/19",
    "https://appsco.com/api/v2/accounts/20",
    "https://appsco.com/api/v2/accounts/21",
    "https://appsco.com/api/v2/accounts/22",
    "https://appsco.com/api/v2/accounts/23",
    "https://appsco.com/api/v2/accounts/24",
    "https://appsco.com/api/v2/accounts/25",
    "https://appsco.com/api/v2/accounts/26",
    "https://appsco.com/api/v2/accounts/27",
    "https://appsco.com/api/v2/accounts/28",
    "https://appsco.com/api/v2/accounts/29",
    "https://appsco.com/api/v2/accounts/30",
    "https://appsco.com/api/v2/accounts/31",
    "https://appsco.com/api/v2/accounts/32",
    "https://appsco.com/api/v2/accounts/33",
    "https://appsco.com/api/v2/accounts/34",
    "https://appsco.com/api/v2/accounts/35",
    "https://appsco.com/api/v2/accounts/36",
    "https://appsco.com/api/v2/accounts/37",
    "https://appsco.com/api/v2/accounts/38",
    "https://appsco.com/api/v2/accounts/39",
    "https://appsco.com/api/v2/accounts/40",
    "https://appsco.com/api/v2/accounts/41",
    "https://appsco.com/api/v2/accounts/42",
    "https://appsco.com/api/v2/accounts/43",
    "https://appsco.com/api/v2/accounts/44",
    "https://appsco.com/api/v2/accounts/45",
    "https://appsco.com/api/v2/accounts/46",
    "https://appsco.com/api/v2/accounts/47",
    "https://appsco.com/api/v2/accounts/48",
    "https://appsco.com/api/v2/accounts/49",
    "https://appsco.com/api/v2/accounts/50",
    "https://appsco.com/api/v2/accounts/51",
    "https://appsco.com/api/v2/accounts/52",
    "https://appsco.com/api/v2/accounts/53",
    "https://appsco.com/api/v2/accounts/54",
    "https://appsco.com/api/v2/accounts/55",
    "https://appsco.com/api/v2/accounts/56",
    "https://appsco.com/api/v2/accounts/57",
    "https://appsco.com/api/v2/accounts/58",
    "https://appsco.com/api/v2/accounts/59",
    "https://appsco.com/api/v2/accounts/60",
    "https://appsco.com/api/v2/accounts/61",
    "https://appsco.com/api/v2/accounts/62",
    "https://appsco.com/api/v2/accounts/63",
    "https://appsco.com/api/v2/accounts/64",
    "https://appsco.com/api/v2/accounts/65",
    "https://appsco.com/api/v2/accounts/66",
    "https://appsco.com/api/v2/accounts/67",
    "https://appsco.com/api/v2/accounts/68",
    "https://appsco.com/api/v2/accounts/69",
    "https://appsco.com/api/v2/accounts/70",
    "https://appsco.com/api/v2/accounts/71",
    "https://appsco.com/api/v2/accounts/72",
    "https://appsco.com/api/v2/accounts/73",
    "https://appsco.com/api/v2/accounts/74",
    "https://appsco.com/api/v2/accounts/75",
    "https://appsco.com/api/v2/accounts/76",
    "https://appsco.com/api/v2/accounts/77",
    "https://appsco.com/api/v2/accounts/78",
    "https://appsco.com/api/v2/accounts/79",
    "https://appsco.com/api/v2/accounts/80",
    "https://appsco.com/api/v2/accounts/81",
    "https://appsco.com/api/v2/accounts/83",
    "https://appsco.com/api/v2/accounts/84",
    "https://appsco.com/api/v2/accounts/85",
    "https://appsco.com/api/v2/accounts/86",
    "https://appsco.com/api/v2/accounts/87",
    "https://appsco.com/api/v2/accounts/88",
    "https://appsco.com/api/v2/accounts/89",
    "https://appsco.com/api/v2/accounts/90",
    "https://appsco.com/api/v2/accounts/91",
    "https://appsco.com/api/v2/accounts/92",
    "https://appsco.com/api/v2/accounts/93",
    "https://appsco.com/api/v2/accounts/94",
    "https://appsco.com/api/v2/accounts/95",
    "https://appsco.com/api/v2/accounts/96",
    "https://appsco.com/api/v2/accounts/97",
    "https://appsco.com/api/v2/accounts/98",
    "https://appsco.com/api/v2/accounts/99",
    "https://appsco.com/api/v2/accounts/100",
    "https://appsco.com/api/v2/accounts/101",
    "https://appsco.com/api/v2/accounts/102"
  ],
  "meta": {
    "total": 14866,
    "page": 1,
    "first": "https://appsco.com/api/v2/accounts?page=1&extended=0",
    "last": "https://appsco.com/api/v2/accounts?page=149&extended=0",
    "pages": 149,
    "per_page": 100,
    "prev": "https://appsco.com/api/v2/accounts?page=1&extended=0",
    "next": "https://appsco.com/api/v2/accounts?page=2&extended=0"
  }
}
```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |