# Pharmaceutical Product Identifier - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pharmaceutical Product Identifier**

## NamingSystem: Pharmaceutical Product Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/PhPID | *Version*:1.0.0-ballot |
| Draft as of 2025-10-28 | *Computable Name*:PhPID |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary Identifier in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "PhPID",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/PhPID",
  "version" : "1.0.0-ballot",
  "name" : "PhPID",
  "title" : "Pharmaceutical Product Identifier",
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
  "usage" : "Used to identify pharmaceutical products per ISO 11616 (PhPID).",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://fhir.ch/ig/ch-idmp/sid/phpid",
    "preferred" : true
  }]
}

```
