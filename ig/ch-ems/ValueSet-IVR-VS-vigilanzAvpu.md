# IVR Vigilanz (AVPU) - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Vigilanz (AVPU)**

## ValueSet: IVR Vigilanz (AVPU) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-vigilanzAvpu | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:Vigilanzavpu |
| **Copyright/Legal**: CC0-1.0 | |

 
List of the states of vigilance of a patient (AVPU). 

 **References** 

* [CH EMS Observation: AVPU](StructureDefinition-ch-ems-observation-avpu.md)
* [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "IVR-VS-vigilanzAvpu",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-vigilanzAvpu",
  "version" : "2.0.0-ballot",
  "name" : "Vigilanzavpu",
  "title" : "IVR Vigilanz (AVPU)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:07:03+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "List of the states of vigilance of a patient (AVPU).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "A",
        "display" : "wach, ansprechbar und orientiert",
        "designation" : [{
          "language" : "de-CH",
          "value" : "wach, ansprechbar und orientiert"
        },
        {
          "language" : "fr-CH",
          "value" : "Alerte, réactif et orienté"
        },
        {
          "language" : "it-CH",
          "value" : "Vigile, reattivo e orientato"
        }]
      },
      {
        "code" : "V",
        "display" : "Reaktion nur bei lauter Ansprache",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Reaktion nur bei lauter Ansprache"
        },
        {
          "language" : "fr-CH",
          "value" : "Réaction uniquement lorsque l'on parle fort"
        },
        {
          "language" : "it-CH",
          "value" : "Reazione solo su stimolo verbale forte"
        }]
      },
      {
        "code" : "P",
        "display" : "Reaktion nur auf Schmerzreiz",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Reazione solo allo stimolo del dolore"
        },
        {
          "language" : "fr-CH",
          "value" : "Réaction uniquement au stimulus de la douleur"
        },
        {
          "language" : "it-CH",
          "value" : "Reazione solo allo stimolo del dolore"
        }]
      },
      {
        "code" : "U",
        "display" : "nicht ansprechbar, bewusstlos",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nicht ansprechbar, bewusstlos"
        },
        {
          "language" : "fr-CH",
          "value" : "Inconscient, sans réaction"
        },
        {
          "language" : "it-CH",
          "value" : "Incosciente, senza reazione"
        }]
      }]
    }]
  }
}

```
