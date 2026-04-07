# CH SMC - Marketing Status - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Marketing Status**

## CodeSystem: CH SMC - Marketing Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-marketing-status | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:ChSMCMarketingStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCMarketingStatusVS](ValueSet-ch-SMC-marketing-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-marketing-status",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-marketing-status",
  "version" : "1.0.1",
  "name" : "ChSMCMarketingStatusCS",
  "title" : "CH SMC - Marketing Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-07T14:04:04+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 1,
  "concept" : [{
    "code" : "iH",
    "display" : "im Handel"
  }]
}

```
