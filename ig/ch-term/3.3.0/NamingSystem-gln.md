# GLN - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **GLN**

## NamingSystem: GLN 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/gln | *Version*:3.3.0 |
| Active as of 2018-12-05 | *Computable Name*:GLN |
| **Copyright/Legal**: CC0-1.0 | |

 
Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the[GS1](https://www.gs1.ch/de/home)system, see[refdata](https://www.refdata.ch/). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "gln",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/gln"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "GLN",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2018-12-05",
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
  "description" : "Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).",
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
      "value" : "2.51.1.3",
      "comment" : "This is the official identifier"
    }
  ]
}

```
