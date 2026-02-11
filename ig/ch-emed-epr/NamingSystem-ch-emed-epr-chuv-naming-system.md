# CH EMED EPR CHUV Root Naming System - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR CHUV Root Naming System**

## NamingSystem: CH EMED EPR CHUV Root Naming System 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-chuv-naming-system | *Version*:3.0.0 |
| Draft as of 2026-01-20 | *Computable Name*:CHEMEDEPRCHUVRootOidNamingSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Naming System for CHUV root OID. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ch-emed-epr-chuv-naming-system",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-chuv-naming-system"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.0.0"
    }
  ],
  "name" : "CHEMEDEPRCHUVRootOidNamingSystem",
  "status" : "draft",
  "kind" : "root",
  "date" : "2026-01-20",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Naming System for CHUV root OID.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "2.16.756.5.30.1.196",
      "comment" : "Root OID for CHUV"
    }
  ]
}

```
