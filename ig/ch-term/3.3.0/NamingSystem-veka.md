# veka - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **veka**

## NamingSystem: veka 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/veka | *Version*:3.3.0 |
| Active as of 2025-05-05 | *Computable Name*:InsuranceCardNumber |
| **Copyright/Legal**: CC0-1.0 | |

 
Insurance card number (called VEKA-Nr. (Versichertenkarten-Nummer) in German) from[SASIS](https://www.sasis.ch/veka/). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "veka",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/veka"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "InsuranceCardNumber",
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
  "responsible" : "SASIS",
  "description" : "Insurance card number (called VEKA-Nr. (Versichertenkarten-Nummer) in German) from [SASIS](https://www.sasis.ch/veka/).",
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
      "value" : "2.16.756.5.30.1.123.100.1.1.1",
      "comment" : "This is the official identifier"
    }
  ]
}

```
