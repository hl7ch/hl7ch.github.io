# CH EMED EPR - HCI Index CdTyp9 Naming System - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR - HCI Index CdTyp9 Naming System**

## NamingSystem: CH EMED EPR - HCI Index CdTyp9 Naming System 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-hci-index-cdtyp9-naming-system | *Version*:3.0.0 |
| Draft as of 2026-01-21 | *Computable Name*:CHEMEDEPRHCIIndexCDTyp9NamingSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Naming System of HCI's CdTyp9 (unit codes) table. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ch-emed-epr-hci-index-cdtyp9-naming-system",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-hci-index-cdtyp9-naming-system"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.0.0"
    }
  ],
  "name" : "CHEMEDEPRHCIIndexCDTyp9NamingSystem",
  "status" : "draft",
  "kind" : "codesystem",
  "date" : "2026-01-21",
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
  "description" : "Naming System of HCI's CdTyp9 (unit codes) table.",
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
      "type" : "uri",
      "value" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9"
    }
  ]
}

```
