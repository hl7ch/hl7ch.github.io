# forum-datenaustausch-tariff - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **forum-datenaustausch-tariff**

## NamingSystem: forum-datenaustausch-tariff 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/NamingSystem/forum-datenaustausch-tariff | *Version*:3.3.0 |
| Active as of 2023-04-20 | *Computable Name*:ForumDatenaustauschTariffType |
| **Copyright/Legal**: CC0-1.0 | |

 
Identification for Forum Datenaustausch tariff types. 
The detailed tariff list is avaible at this[url](https://www.forum-datenaustausch.ch/de/referenzdaten/) 
Naming Convention for fore each tariff type is: 
http://forum-datenaustausch.ch/tariff/[A-Z0-9]{3} 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "forum-datenaustausch-tariff",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-term/NamingSystem/forum-datenaustausch-tariff"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.3.0"
    }
  ],
  "name" : "ForumDatenaustauschTariffType",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2023-04-20T00:00:00+02:00",
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
  "description" : "Identification for Forum Datenaustausch tariff types. \n\nThe detailed tariff list is avaible at this [url](https://www.forum-datenaustausch.ch/de/referenzdaten/)\n\nNaming Convention for fore each tariff type is:\n\nhttp://forum-datenaustausch.ch/tariff/[A-Z0-9]{3}\n",
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
      "type" : "uri",
      "value" : "http://forum-datenaustausch.ch/tariff",
      "preferred" : true
    }
  ]
}

```
