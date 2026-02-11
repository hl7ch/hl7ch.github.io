# CH EMED EPR Paper Format Code System - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR Paper Format Code System**

## CodeSystem: CH EMED EPR Paper Format Code System (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/CodeSystem/ch-emed-epr-paper-format-code-system | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRPaperFormatCS |
| **Copyright/Legal**: CC0-1.0 | |

 
Possible paper formats that can be delivered by a CH EMED EPR service rendering original representations. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CHEMEDEPRPaperFormat](ValueSet-ch-emed-epr-paper-format.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-emed-epr-paper-format-code-system",
  "url" : "http://fhir.ch/ig/ch-emed-epr/CodeSystem/ch-emed-epr-paper-format-code-system",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRPaperFormatCS",
  "title" : "CH EMED EPR Paper Format Code System",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
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
  "description" : "Possible paper formats that can be delivered by a CH EMED EPR service rendering original representations.",
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
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "hierarchyMeaning" : "is-a",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "cara-pmp",
      "display" : "CARA PMP",
      "definition" : "CARA platform own format for PMP (eMedication service) project."
    },
    {
      "code" : "emediplan",
      "display" : "eMediplan",
      "definition" : "Paper format defined by eMediplan.",
      "concept" : [
        {
          "code" : "chmed16a",
          "display" : "CHMED16A",
          "definition" : "Paper format for CHMED16A eMediplan."
        },
        {
          "code" : "chmed23a",
          "display" : "CHMED23A",
          "definition" : "Paper format for CHMED23A eMediplan."
        }
      ]
    },
    {
      "code" : "ePrescription",
      "display" : "ePrescription",
      "definition" : "Paper format for Swiss ePrescription."
    }
  ]
}

```
