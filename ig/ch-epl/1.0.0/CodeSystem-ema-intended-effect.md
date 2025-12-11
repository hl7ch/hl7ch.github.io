# EMA - Intended Effect - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Intended Effect**

## CodeSystem: EMA - Intended Effect 

| | |
| :--- | :--- |
| *Official URL*:http://spor.ema.europa.eu/v1/lists/200000003186 | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EMAIntendedEffectCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Intended Effect from EMA used by SMC) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EMAIntendedEffectVS](ValueSet-ema-intended-effect.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ema-intended-effect",
  "url" : "http://spor.ema.europa.eu/v1/lists/200000003186",
  "version" : "1.0.0",
  "name" : "EMAIntendedEffectCS",
  "title" : "EMA - Intended Effect",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Intended Effect from EMA used by SMC)",
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
      "code" : "200000003192",
      "display" : "preventive"
    },
    {
      "code" : "200000003194",
      "display" : "therapeutic"
    },
    {
      "code" : "200000003196",
      "display" : "diagnostic / imaging"
    }
  ]
}

```
