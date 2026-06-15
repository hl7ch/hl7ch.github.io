# 1 Transport - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Transport**

## Example Procedure: 1 Transport



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "1-Transport",
  "status" : "completed",
  "category" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "229824005",
      "display" : "Positioning patient (procedure)"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000103",
      "display" : "laying"
    }],
    "text" : "liegend"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "usedCode" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "156009",
      "display" : "Spine board, device (physical object)"
    }],
    "text" : "Rettungsbrett"
  }]
}

```
