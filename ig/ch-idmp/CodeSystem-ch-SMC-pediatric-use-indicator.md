# CH SMC - Pediatric Use Indicator - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Pediatric Use Indicator**

## CodeSystem: CH SMC - Pediatric Use Indicator 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-pediatric-use-indicator | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChSMCPediatricUseIndicatorCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCPediatricUseIndicatorVS](ValueSet-ch-SMC-pediatric-use-indicator.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-pediatric-use-indicator",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-pediatric-use-indicator",
  "version" : "1.0.0-ballot",
  "name" : "ChSMCPediatricUseIndicatorCS",
  "title" : "CH SMC - Pediatric Use Indicator",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator)",
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
    "code" : "756005003001",
    "display" : "Authorised for the treatment in children",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Zugelassen für die Anwendung bei Kindern"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "TRUE"
    }]
  },
  {
    "code" : "756005003002",
    "display" : "Not authorised for the treatment in children",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Nicht zugelassen für die Anwendung bei Kindern"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "FALSE"
    }]
  }]
}

```
