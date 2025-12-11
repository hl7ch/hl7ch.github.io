# CH SMC - Pediatric Use Indicator - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Pediatric Use Indicator**

## CodeSystem: CH SMC - Pediatric Use Indicator 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChSMCPediatricUseIndicatorCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCPediatricUseIndicatorVS](ValueSet-ch-SMC-pediatric-use-indicator.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-pediatric-use-indicator",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator",
  "version" : "1.0.0",
  "name" : "ChSMCPediatricUseIndicatorCS",
  "title" : "CH SMC - Pediatric Use Indicator",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator)",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "756005003001",
      "display" : "Authorised for the treatment in children",
      "designation" : [
        {
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
        }
      ]
    },
    {
      "code" : "756005003002",
      "display" : "Not authorised for the treatment in children",
      "designation" : [
        {
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
        }
      ]
    }
  ]
}

```
