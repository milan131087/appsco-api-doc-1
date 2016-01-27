# Return list of all available APPS

Returns list of all available applications

## Resource URL

___https://appsco.com/api/v2/applications___

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
|dashboards                     |Use to filter out searches             |
|page                           |Page number                            |
|extended                       |Show resource link or entire resource  |


## Request

```.http
GET https://appsco.com/api/v2/applications HTTP/1.1
```

## Response

> Extended hyperlink can be found at this link: [applications/id](applications/id)

```.http
HTTP/1.1 200 OK
Content-type: application/json
Location: "https://appsco.com/api/v2/dashboards?page=2&extended=0"
ETag: ""
Cache-Control: no-cache
{
  "applications": [
    "https://appsco.com/api/v2/applications/1",
    "https://appsco.com/api/v2/applications/2",
    "https://appsco.com/api/v2/applications/3",
    "https://appsco.com/api/v2/applications/6",
    "https://appsco.com/api/v2/applications/7",
    "https://appsco.com/api/v2/applications/8",
    "https://appsco.com/api/v2/applications/13",
    "https://appsco.com/api/v2/applications/14",
    "https://appsco.com/api/v2/applications/15",
    "https://appsco.com/api/v2/applications/16",
    "https://appsco.com/api/v2/applications/17",
    "https://appsco.com/api/v2/applications/18",
    "https://appsco.com/api/v2/applications/19",
    "https://appsco.com/api/v2/applications/20",
    "https://appsco.com/api/v2/applications/21",
    "https://appsco.com/api/v2/applications/22",
    "https://appsco.com/api/v2/applications/23",
    "https://appsco.com/api/v2/applications/24",
    "https://appsco.com/api/v2/applications/25",
    "https://appsco.com/api/v2/applications/26",
    "https://appsco.com/api/v2/applications/27",
    "https://appsco.com/api/v2/applications/28",
    "https://appsco.com/api/v2/applications/29",
    "https://appsco.com/api/v2/applications/30",
    "https://appsco.com/api/v2/applications/31",
    "https://appsco.com/api/v2/applications/32",
    "https://appsco.com/api/v2/applications/33",
    "https://appsco.com/api/v2/applications/34",
    "https://appsco.com/api/v2/applications/35",
    "https://appsco.com/api/v2/applications/36",
    "https://appsco.com/api/v2/applications/37",
    "https://appsco.com/api/v2/applications/38",
    "https://appsco.com/api/v2/applications/39",
    "https://appsco.com/api/v2/applications/40",
    "https://appsco.com/api/v2/applications/41",
    "https://appsco.com/api/v2/applications/42",
    "https://appsco.com/api/v2/applications/44",
    "https://appsco.com/api/v2/applications/45",
    "https://appsco.com/api/v2/applications/46",
    "https://appsco.com/api/v2/applications/47",
    "https://appsco.com/api/v2/applications/48",
    "https://appsco.com/api/v2/applications/49",
    "https://appsco.com/api/v2/applications/50",
    "https://appsco.com/api/v2/applications/51",
    "https://appsco.com/api/v2/applications/52",
    "https://appsco.com/api/v2/applications/53",
    "https://appsco.com/api/v2/applications/54",
    "https://appsco.com/api/v2/applications/55",
    "https://appsco.com/api/v2/applications/56",
    "https://appsco.com/api/v2/applications/57",
    "https://appsco.com/api/v2/applications/58",
    "https://appsco.com/api/v2/applications/59",
    "https://appsco.com/api/v2/applications/60",
    "https://appsco.com/api/v2/applications/61",
    "https://appsco.com/api/v2/applications/62",
    "https://appsco.com/api/v2/applications/63",
    "https://appsco.com/api/v2/applications/64",
    "https://appsco.com/api/v2/applications/65",
    "https://appsco.com/api/v2/applications/66",
    "https://appsco.com/api/v2/applications/67",
    "https://appsco.com/api/v2/applications/68",
    "https://appsco.com/api/v2/applications/69",
    "https://appsco.com/api/v2/applications/70",
    "https://appsco.com/api/v2/applications/71",
    "https://appsco.com/api/v2/applications/72",
    "https://appsco.com/api/v2/applications/73",
    "https://appsco.com/api/v2/applications/74",
    "https://appsco.com/api/v2/applications/75",
    "https://appsco.com/api/v2/applications/76",
    "https://appsco.com/api/v2/applications/77",
    "https://appsco.com/api/v2/applications/78",
    "https://appsco.com/api/v2/applications/79",
    "https://appsco.com/api/v2/applications/80",
    "https://appsco.com/api/v2/applications/81",
    "https://appsco.com/api/v2/applications/82",
    "https://appsco.com/api/v2/applications/83",
    "https://appsco.com/api/v2/applications/84",
    "https://appsco.com/api/v2/applications/87",
    "https://appsco.com/api/v2/applications/88",
    "https://appsco.com/api/v2/applications/89",
    "https://appsco.com/api/v2/applications/90",
    "https://appsco.com/api/v2/applications/91",
    "https://appsco.com/api/v2/applications/92",
    "https://appsco.com/api/v2/applications/93",
    "https://appsco.com/api/v2/applications/94",
    "https://appsco.com/api/v2/applications/95",
    "https://appsco.com/api/v2/applications/96",
    "https://appsco.com/api/v2/applications/97",
    "https://appsco.com/api/v2/applications/98",
    "https://appsco.com/api/v2/applications/99",
    "https://appsco.com/api/v2/applications/100",
    "https://appsco.com/api/v2/applications/101",
    "https://appsco.com/api/v2/applications/102",
    "https://appsco.com/api/v2/applications/103",
    "https://appsco.com/api/v2/applications/104",
    "https://appsco.com/api/v2/applications/105",
    "https://appsco.com/api/v2/applications/106",
    "https://appsco.com/api/v2/applications/107",
    "https://appsco.com/api/v2/applications/108",
    "https://appsco.com/api/v2/applications/109"
  ],
  "meta": {
    "total": 187,
    "page": 1,
    "first": "https://appsco.com/api/v2/dashboards?page=1&extended=0",
    "last": "https://appsco.com/api/v2/dashboards?page=2&extended=0",
    "pages": 2,
    "per_page": 100,
    "prev": "https://appsco.com/api/v2/dashboards?page=1&extended=0",
    "next": "https://appsco.com/api/v2/dashboards?page=2&extended=0"
  }
}

```

## Error Response

|HEADER                         |Message                        |Status         |
|-------------------------------|-------------------------------|---------------|
|401 UNAUTHORIZED               |Unauthorized Request           |401            |