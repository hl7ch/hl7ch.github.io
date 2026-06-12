# CH Refdata - Marketing Status - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Refdata - Marketing Status**

## CodeSystem: CH Refdata - Marketing Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-Refdata-marketing-status | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChRefdataMarketingStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChRefdataMarketingStatusVS](ValueSet-ch-Refdata-marketing-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-Refdata-marketing-status",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-Refdata-marketing-status",
  "version" : "1.0.0-ballot",
  "name" : "ChRefdataMarketingStatusCS",
  "title" : "CH Refdata - Marketing Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
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
  "count" : 2,
  "concept" : [{
    "code" : "756002026001",
    "display" : "Not marketed",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Ausser Handel"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "aH"
    }]
  },
  {
    "code" : "756002026002",
    "display" : "Marketed",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Im Handel"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "iH"
    }]
  }]
}

```
