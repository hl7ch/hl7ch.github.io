# EMA - Shelf Life Type - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Shelf Life Type**

## CodeSystem: EMA - Shelf Life Type 

| | |
| :--- | :--- |
| *Official URL*:http://spor.ema.europa.eu/v1/lists/100000073343 | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EMAShelfLifeTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Shelf Life Type from EMA used by SMC) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EMAShelfLifeTypeVS](ValueSet-ema-shelf-life-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ema-shelf-life-type",
  "url" : "http://spor.ema.europa.eu/v1/lists/100000073343",
  "version" : "1.0.0",
  "name" : "EMAShelfLifeTypeCS",
  "title" : "EMA - Shelf Life Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Shelf Life Type from EMA used by SMC)",
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
  "count" : 7,
  "concept" : [
    {
      "code" : "100000073403",
      "display" : "Shelf life of the medicinal product as packaged for sale"
    },
    {
      "code" : "100000073404",
      "display" : "Shelf life after first opening the immediate packaging"
    },
    {
      "code" : "100000073405",
      "display" : "Shelf life after dilution or reconstitution according to directions"
    },
    {
      "code" : "100000073406",
      "display" : "Shelf life from manufacturing time"
    },
    {
      "code" : "100000073407",
      "display" : "Shelf life from the activity reference time stated on the label"
    },
    {
      "code" : "100000073408",
      "display" : "Shelf life in unit-dose dispensing"
    },
    {
      "code" : "100000073409",
      "display" : "Shelf life after incorporation into meal or pelleted feed"
    }
  ]
}

```
