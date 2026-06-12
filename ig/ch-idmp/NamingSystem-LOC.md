# LOC Identifier - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **LOC Identifier**

## NamingSystem: LOC Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/LOC | *Version*:1.0.0-ballot |
| Active as of 2025-04-25 | *Computable Name*:LocID |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "LOC",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/LOC",
  "version" : "1.0.0-ballot",
  "name" : "LocID",
  "title" : "LOC Identifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2025-04-25",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "uniqueId" : [{
    "type" : "oid",
    "value" : "1.2.276.0.76",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "https://spor.ema.europa.eu/v1/locations",
    "preferred" : false
  }]
}

```
