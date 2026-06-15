# IVR Hospital Priority - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Hospital Priority**

## ValueSet: IVR Hospital Priority 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-hospitalPriority | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVShospitalPriority |
| **Copyright/Legal**: CC0-1.0 | |

 
List of priorities for hospital admission. 

 **References** 

* [CH EMS Observation: Status Priority](StructureDefinition-ch-ems-observation-statuspriority.md)
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
  "id" : "IVR-VS-hospitalPriority",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-hospitalPriority",
  "version" : "2.0.0-ballot",
  "name" : "IVRVShospitalPriority",
  "title" : "IVR Hospital Priority",
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
  "description" : "List of priorities for hospital admission.",
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
        "code" : "371246006",
        "display" : "green",
        "designation" : [{
          "language" : "de-CH",
          "value" : "grün"
        },
        {
          "language" : "fr-CH",
          "value" : "vert"
        },
        {
          "language" : "it-CH",
          "value" : "verde"
        }]
      },
      {
        "code" : "371240000",
        "display" : "red",
        "designation" : [{
          "language" : "de-CH",
          "value" : "rot"
        },
        {
          "language" : "fr-CH",
          "value" : "rouge"
        },
        {
          "language" : "it-CH",
          "value" : "rosso"
        }]
      },
      {
        "code" : "371244009",
        "display" : "yellow",
        "designation" : [{
          "language" : "de-CH",
          "value" : "gelb"
        },
        {
          "language" : "fr-CH",
          "value" : "jaune"
        },
        {
          "language" : "it-CH",
          "value" : "giallo"
        }]
      }]
    }]
  }
}

```
