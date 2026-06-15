# IVR Wound Treatment - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Wound Treatment**

## ValueSet: IVR Wound Treatment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-woundTreat | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSwoundTreat |
| **Copyright/Legal**: CC0-1.0 | |

 
List of wound treatment types. 

 **References** 

* [CH EMS Procedure: Wound Treatment](StructureDefinition-ch-ems-procedure-woundtreatment.md)
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
  "id" : "IVR-VS-woundTreat",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-woundTreat",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSwoundTreat",
  "title" : "IVR Wound Treatment",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "List of wound treatment types.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "386028003",
        "display" : "patch",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Wundschnellverband"
        },
        {
          "language" : "fr-CH",
          "value" : "Pansement rapide"
        },
        {
          "language" : "it-CH",
          "value" : "Medicazoine rapida"
        }]
      },
      {
        "code" : "9458007",
        "display" : "Elastic bandage",
        "designation" : [{
          "language" : "de-CH",
          "value" : "elastische Binde"
        },
        {
          "language" : "fr-CH",
          "value" : "Bandage élastique"
        },
        {
          "language" : "it-CH",
          "value" : "Bendaggio elastico"
        }]
      },
      {
        "code" : "38141007",
        "display" : "Tourniquet",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tourniquet"
        },
        {
          "language" : "fr-CH",
          "value" : "Garrot"
        },
        {
          "language" : "it-CH",
          "value" : "Laccio emostatico"
        }]
      }]
    }]
  }
}

```
