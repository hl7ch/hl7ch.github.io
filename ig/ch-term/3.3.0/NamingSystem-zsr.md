# ZSR - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ZSR**

## NamingSystem: ZSR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/zsr | *Version*:3.3.0 |
| Active as of 2018-12-05 | *Computable Name*:ZSR |
| **Copyright/Legal**: CC0-1.0 | |

 
The ZSR number is issued to self-employed, natural or legal persons (organisations) who can and want to work at the expense of health insurance. See[Sasis](https://www.sasis.ch/de/779). German: ZSR (Zahlstellenregister), French: RCC (Registre des codes-créanciers), Italian: RCC (Registro dei codici creditori). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "zsr",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/zsr"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "ZSR",
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
  "responsible" : "SASIS",
  "description" : "The ZSR number is issued to self-employed, natural or legal persons (organisations) who can and want to work at the expense of health insurance.                        See [Sasis](https://www.sasis.ch/de/779).                       German: ZSR (Zahlstellenregister),                       French: RCC (Registre des codes-créanciers),                       Italian: RCC (Registro dei codici creditori).",
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
      "value" : "2.16.756.5.30.1.123.100.2.1.1",
      "comment" : "This is the official identifier"
    }
  ]
}

```
