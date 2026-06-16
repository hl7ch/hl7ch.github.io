# ch-umzhconnectig-task-outputreference - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-umzhconnectig-task-outputreference**

## SearchParameter: ch-umzhconnectig-task-outputreference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-task-outputreference | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ch-umzhconnectig-task-outputreference |
| **Copyright/Legal**: CC0-1.0 | |

 
Custom search parameter for Task.output.valueReference 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ch-umzhconnectig-task-outputreference",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-task-outputreference",
  "version" : "1.0.0-ballot",
  "name" : "ch-umzhconnectig-task-outputreference",
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
  "description" : "Custom search parameter for Task.output.valueReference",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "code" : "ch-umzhconnectig-task-outputreference",
  "base" : ["Task"],
  "type" : "reference",
  "expression" : "Task.output.value as Reference",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
