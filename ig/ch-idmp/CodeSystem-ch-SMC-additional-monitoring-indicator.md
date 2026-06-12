# CH SMC - Additional Monitoring Indicator - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Additional Monitoring Indicator**

## CodeSystem: CH SMC - Additional Monitoring Indicator 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-additional-monitoring-indicator | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChSMCAdditionalMonitoringIndicatorCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Additional Monitoring Indicator 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCAdditionalMonitoringIndicatorVS](ValueSet-ch-SMC-additional-monitoring-indicator.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-additional-monitoring-indicator",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-additional-monitoring-indicator",
  "version" : "1.0.0-ballot",
  "name" : "ChSMCAdditionalMonitoringIndicatorCS",
  "title" : "CH SMC - Additional Monitoring Indicator",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Additional Monitoring Indicator",
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
    "code" : "756005001001",
    "display" : "Black Triangle Warning",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Schwarzes Dreieck Art. 14a AMZV"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "BLACK_TR"
    }]
  },
  {
    "code" : "756005001002",
    "display" : "Black Box Warning",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Black Box Warning"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "BBOX_W"
    }]
  },
  {
    "code" : "756005001003",
    "display" : "No Warning",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Keine Warnung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "N"
    }]
  }]
}

```
