# ch-umzhconnectig-task-outputcanonical - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-umzhconnectig-task-outputcanonical**

## SearchParameter: ch-umzhconnectig-task-outputcanonical 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-task-outputcanonical | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ch-umzhconnectig-task-outputcanonical |
| **Copyright/Legal**: CC0-1.0 | |

 
Custom search parameter for Task.output.valueCanonical 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ch-umzhconnectig-task-outputcanonical",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-task-outputcanonical",
  "version" : "1.0.0-ballot",
  "name" : "ch-umzhconnectig-task-outputcanonical",
  "status" : "active",
  "date" : "2026-06-16T06:40:38+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "Custom search parameter for Task.output.valueCanonical",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "code" : "ch-umzhconnectig-task-outputcanonical",
  "base" : ["Task"],
  "type" : "reference",
  "expression" : "Task.output.value as Canonical",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
