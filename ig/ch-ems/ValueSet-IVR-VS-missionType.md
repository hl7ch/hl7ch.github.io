# IVR Mission Type - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Mission Type**

## ValueSet: IVR Mission Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionType | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:MissionType |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of the missions. 

 **References** 

* [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)
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
  "id" : "IVR-VS-missionType",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionType",
  "version" : "2.0.0-ballot",
  "name" : "MissionType",
  "title" : "IVR Mission Type",
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
  "description" : "List of types of the missions.",
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
        "code" : "1000001",
        "display" : "primary mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Primäreinsatz"
        },
        {
          "language" : "fr-CH",
          "value" : "Mission primaire"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento primario"
        }]
      },
      {
        "code" : "1000002",
        "display" : "secondary mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sekundäreinsatz"
        },
        {
          "language" : "fr-CH",
          "value" : "Mission secondaire"
        },
        {
          "language" : "it-CH",
          "value" : "Intervento secondario"
        }]
      },
      {
        "code" : "1000003",
        "display" : "stand-by mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bereitschaftsdienst"
        },
        {
          "language" : "fr-CH",
          "value" : "Service de garde"
        },
        {
          "language" : "it-CH",
          "value" : "Guardia medica"
        }]
      }]
    }]
  }
}

```
