# Marketing Authorisation Number - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Marketing Authorisation Number**

## NamingSystem: Marketing Authorisation Number 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/AuthNo | *Version*:1.0.0-ballot |
| Draft as of 2025-10-28 | *Computable Name*:PhPID |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary Identifier in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "AuthNo",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/AuthNo",
  "version" : "1.0.0-ballot",
  "name" : "PhPID",
  "title" : "Marketing Authorisation Number",
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
  "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "usage" : "Used to identify the regulatory authorisation (MA) of a medicinal product.",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://fhir.ch/ig/ch-idmp/sid/authno",
    "preferred" : true
  }]
}

```
