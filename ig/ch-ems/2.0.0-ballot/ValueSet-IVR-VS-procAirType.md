# IVR Procedure Airway Type - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Procedure Airway Type**

## ValueSet: IVR Procedure Airway Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-procAirType | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSprocAirType |
| **Copyright/Legal**: CC0-1.0 | |

 
List of procedures for securing the airway. 

 **References** 

* [CH EMS Procedure: Airways](StructureDefinition-ch-ems-procedure-airways.md)
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
  "id" : "IVR-VS-procAirType",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-procAirType",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSprocAirType",
  "title" : "IVR Procedure Airway Type",
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
  "description" : "List of procedures for securing the airway.",
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
        "code" : "52765003",
        "display" : "Intubation",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Intubation"
        },
        {
          "language" : "fr-CH",
          "value" : "Intubation"
        },
        {
          "language" : "it-CH",
          "value" : "Intubazione"
        }]
      },
      {
        "code" : "230040009",
        "display" : "Airway suctioning",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Absaugen der Atemwege"
        },
        {
          "language" : "fr-CH",
          "value" : "Aspiration des voies aériennes"
        },
        {
          "language" : "it-CH",
          "value" : "Aspirazione delle vie aeree"
        }]
      },
      {
        "code" : "710971000",
        "display" : "Maintaining airway clearance",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Freimachen der Atemwege"
        },
        {
          "language" : "fr-CH",
          "value" : "Libération des voies aériennes"
        },
        {
          "language" : "it-CH",
          "value" : "Liberazione delle vie aeree"
        }]
      },
      {
        "code" : "232666000",
        "display" : "Jaw thrust",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Esmarch Handgriff"
        },
        {
          "language" : "fr-CH",
          "value" : "Subluxation de la mandibule"
        },
        {
          "language" : "it-CH",
          "value" : "Sublussazione della mandibola"
        }]
      },
      {
        "code" : "706177004",
        "display" : "Inhalation therapy device",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Inhalationsset"
        },
        {
          "language" : "fr-CH",
          "value" : "Kit de nébulisation"
        },
        {
          "language" : "it-CH",
          "value" : "Set per l'inalazione"
        }]
      }]
    }]
  }
}

```
