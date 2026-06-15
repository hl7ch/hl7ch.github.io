# 1 Notarzt - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Notarzt**

## Example Practitioner: 1 Notarzt



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "1-NotarztPierreUrgentiste",
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000028105"
  }],
  "name" : [{
    "family" : "Urgentiste",
    "given" : ["Pierre"]
  }],
  "qualification" : [{
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "309294001",
        "display" : "Emergency department physician (occupation)"
      }],
      "text" : "Notarzt/Notärztin SGNOR"
    }
  }]
}

```
