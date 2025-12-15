# AHVN13 - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AHVN13**

## NamingSystem: AHVN13 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/ahvn13 | *Version*:3.3.0 |
| Active as of 2018-11-27 | *Computable Name*:AHVN13 |
| **Copyright/Legal**: CC0-1.0 | |

 
The AHVN13 / NAVS13 - (abbreviation for new thirteen-digit Social Security number) - is an administrative identifier for natural persons in Switzerland. It is issued, announced and administered by the[Central Compensation Office](https://www.zas.admin.ch/zas/de/home/partenaires-et-institutions-/navs13.html). It is available to all organisations and communities for which there is a legal basis. The AHVN13 / NAVS13 shall not contain point characters for separation. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ahvn13",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/ahvn13"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "AHVN13",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2018-11-27",
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
  "responsible" : "The Federal Department of Finance (FDF) / Central Compensation Office CCO",
  "type" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "NI",
        "display" : "National unique individual identifier"
      }
    ],
    "text" : "IHI"
  },
  "description" : "The AHVN13 / NAVS13 - (abbreviation for new thirteen-digit Social Security number) - is an administrative identifier for natural persons in Switzerland. It is issued, announced and administered by the [Central Compensation Office](https://www.zas.admin.ch/zas/de/home/partenaires-et-institutions-/navs13.html). It is available to all organisations and communities for which there is a legal basis. The AHVN13 / NAVS13 shall not contain point characters for separation.",
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
      "value" : "2.16.756.5.32",
      "comment" : "This is the official identifier"
    }
  ]
}

```
