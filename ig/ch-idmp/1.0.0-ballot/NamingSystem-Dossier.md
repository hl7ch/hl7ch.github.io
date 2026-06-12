# FOPH Dossier Number - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FOPH Dossier Number**

## NamingSystem: FOPH Dossier Number 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/Dossier | *Version*:1.0.0-ballot |
| Active as of 2025-04-25 | *Computable Name*:FOPHDossierNumber |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding the Dossier number of FOPH 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "Dossier",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/Dossier",
  "version" : "1.0.0-ballot",
  "name" : "FOPHDossierNumber",
  "title" : "FOPH Dossier Number",
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
  "description" : "Identifier holding the Dossier number of FOPH",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "uniqueId" : [{
    "type" : "oid",
    "value" : "2.16.756.1",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "urn:oid:2.16.756.1",
    "preferred" : false
  }]
}

```
