# IDN Liechtenstein - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDN Liechtenstein**

## NamingSystem: IDN Liechtenstein 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/NamingSystem/IDN | *Version*:1.13.0 |
| Active as of 2023-10-18 | *Computable Name*:IDN |
| **Copyright/Legal**: CC0-1.0 | |

 
The IDN is a unique identification number generated for each person with health insurance in Liechtenstein. For more details please visit https://www.llv.li/de/privatpersonen/gesundheit-vorsorge-und-pflege/elektronisches-gesundheitsdossier/datenschutzhinweis. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://fhir.ch/ig/ch-elm/NamingSystem/IDN |
| Version | 1.13.0 |
| Name | IDN |
| Status | active |
| Definition | The IDN is a unique identification number generated for each person with health insurance in Liechtenstein. For more details please visit https://www.llv.li/de/privatpersonen/gesundheit-vorsorge-und-pflege/elektronisches-gesundheitsdossier/datenschutzhinweis. |
| Publisher | Federal Office of Public Health FOPH |
| Copyright | CC0-1.0 |

### Identifiers

* **Type**: OID
  * **Value**: 2.16.438.10.20.10.10.1.2.1
  * **Preferred**: true



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "IDN",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-elm/NamingSystem/IDN"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "1.13.0"
    }
  ],
  "name" : "IDN",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2023-10-18",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "The IDN is a unique identification number generated for each person with health insurance in Liechtenstein. \nFor more details please visit https://www.llv.li/de/privatpersonen/gesundheit-vorsorge-und-pflege/elektronisches-gesundheitsdossier/datenschutzhinweis.",
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
      "value" : "2.16.438.10.20.10.10.1.2.1",
      "preferred" : true
    }
  ]
}

```
