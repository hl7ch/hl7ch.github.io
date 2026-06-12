# Swissmedic Location Identifier - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swissmedic Location Identifier**

## NamingSystem: Swissmedic Location Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/SMCLocID | *Version*:1.0.0-ballot |
| Draft as of 2025-10-28 | *Computable Name*:SMCLocID |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary NamingSystem in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "SMCLocID",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/SMCLocID",
  "version" : "1.0.0-ballot",
  "name" : "SMCLocID",
  "title" : "Swissmedic Location Identifier",
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
  "description" : "Temporary NamingSystem in this implementation guide until officially released by Swissmedic",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "usage" : "Used to identify organisation locations registered with Swissmedic.",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://www.swissmedic.ch/fhir/identifier/locations",
    "preferred" : true
  }]
}

```
