# gtin - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **gtin**

## NamingSystem: gtin 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/gtin | *Version*:3.3.0 |
| Active as of 2025-05-05 | *Computable Name*:GTIN |
| **Copyright/Legal**: CC0-1.0 | |

 
Global Trade Item Number from[GS1](https://www.gs1.ch/de/home). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "gtin",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/gtin"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "GTIN",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2025-05-05",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "responsible" : "GS1",
  "description" : "Global Trade Item Number from [GS1](https://www.gs1.ch/de/home).",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "2.51.1.1",
      "comment" : "This is the official identifier"
    }
  ]
}

```
