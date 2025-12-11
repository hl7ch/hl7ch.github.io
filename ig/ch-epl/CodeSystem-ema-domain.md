# EMA - Domain - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Domain**

## CodeSystem: EMA - Domain 

| | |
| :--- | :--- |
| *Official URL*:http://spor.ema.europa.eu/v1/lists/100000000004 | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EMADomainCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EMADomainVS](ValueSet-ema-domain.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ema-domain",
  "url" : "http://spor.ema.europa.eu/v1/lists/100000000004",
  "version" : "1.0.0",
  "name" : "EMADomainCS",
  "title" : "EMA - Domain",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:35:50+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "100000000012",
      "display" : "Human"
    },
    {
      "code" : "100000000013",
      "display" : "Veterinary"
    },
    {
      "code" : "100000000014",
      "display" : "Human and Veterinary"
    }
  ]
}

```
