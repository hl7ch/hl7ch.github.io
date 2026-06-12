# Application / Assessment Tracking Number - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Application / Assessment Tracking Number**

## NamingSystem: Application / Assessment Tracking Number 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/AttNo | *Version*:1.0.0-ballot |
| Draft as of 2025-10-28 | *Computable Name*:AttNo |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary Namingsystem in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "AttNo",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/AttNo",
  "version" : "1.0.0-ballot",
  "name" : "AttNo",
  "title" : "Application / Assessment Tracking Number",
  "status" : "draft",
  "kind" : "identifier",
  "date" : "2025-10-28",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Temporary Namingsystem in this implementation guide until officially released by Swissmedic",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "usage" : "Used to identify regulatory applications or assessment procedures (e.g., MAA, NDA, BLA).",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://fhir.ch/ig/ch-idmp/sid/attno",
    "preferred" : true
  }]
}

```
