# CH SMC - Marketing Status - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Marketing Status**

## CodeSystem: CH SMC - Marketing Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-marketing-status | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChSMCMarketingStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCMarketingStatusVS](ValueSet-ch-SMC-marketing-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-marketing-status",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-marketing-status",
  "version" : "1.0.0-ballot",
  "name" : "ChSMCMarketingStatusCS",
  "title" : "CH SMC - Marketing Status",
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
  "count" : 3,
  "concept" : [{
    "code" : "7560050074000001",
    "display" : "Distribution interruption",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Vertriebsunterbruch"
    }]
  },
  {
    "code" : "7560050074000002",
    "display" : "Not on the market",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Nicht in Verkehr bringen"
    }]
  },
  {
    "code" : "7560050074000003",
    "display" : "No interruption of distribution reported",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://www.snomed.org/",
        "version" : "1.0",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Kein Vertriebsunterbruch gemeldet"
    }]
  }]
}

```
