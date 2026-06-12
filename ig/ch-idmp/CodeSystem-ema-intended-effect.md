# EMA - Intended Effect - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Intended Effect**

## CodeSystem: EMA - Intended Effect 

| | |
| :--- | :--- |
| *Official URL*:http://spor.ema.europa.eu/v1/lists/200000003186 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:EMAIntendedEffectCS |
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
  "version" : "1.0.0-ballot",
  "name" : "EMAIntendedEffectCS",
  "title" : "EMA - Intended Effect",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Intended Effect from EMA used by SMC)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "756005042000001",
    "display" : "preventive"
  },
  {
    "code" : "756005042000002",
    "display" : "therapeutic"
  },
  {
    "code" : "756005042000003",
    "display" : "diagnostic / imaging"
  }]
}

```
