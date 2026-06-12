# GLN Identifier - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **GLN Identifier**

## NamingSystem: GLN Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/GLN | *Version*:1.0.0-ballot |
| Active as of 2025-04-25 | *Computable Name*:GLNIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for GLN (Global Location Number) 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "GLN",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/GLN",
  "version" : "1.0.0-ballot",
  "name" : "GLNIdentifier",
  "title" : "GLN Identifier",
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
  "description" : "Identifier holding a number for GLN (Global Location Number)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "uniqueId" : [{
    "type" : "oid",
    "value" : "2.51.1.3",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "urn:oid:2.51.1.3",
    "preferred" : false
  }]
}

```
