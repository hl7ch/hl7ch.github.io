# IVR Identification Source - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Identification Source**

## ValueSet: IVR Identification Source 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idSource | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSidSource |
| **Copyright/Legal**: CC0-1.0 | |

 
List of persons who identified the patient. 

 **References** 

* [CH EMS Extension: Identification](StructureDefinition-ch-ems-ext-identification.md)
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
  "id" : "IVR-VS-idSource",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-idSource",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSidSource",
  "title" : "IVR Identification Source",
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
  "description" : "List of persons who identified the patient.",
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
        "code" : "116154003",
        "display" : "Patient",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Patient"
        },
        {
          "language" : "fr-CH",
          "value" : "Patient"
        },
        {
          "language" : "it-CH",
          "value" : "Paziente"
        }]
      },
      {
        "code" : "125677006",
        "display" : "Relative",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Angehöriger"
        },
        {
          "language" : "fr-CH",
          "value" : "Proche"
        },
        {
          "language" : "it-CH",
          "value" : "Parente"
        }]
      },
      {
        "code" : "14406004",
        "display" : "Police officer",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Polizei"
        },
        {
          "language" : "fr-CH",
          "value" : "Police"
        },
        {
          "language" : "it-CH",
          "value" : "Polizia"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000022",
        "display" : "witness",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Zeuge / Zeugin"
        },
        {
          "language" : "fr-CH",
          "value" : "Témoin"
        },
        {
          "language" : "it-CH",
          "value" : "Testimone"
        }]
      },
      {
        "code" : "1000067",
        "display" : "identification impossible",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Identifikation nicht möglich"
        },
        {
          "language" : "fr-CH",
          "value" : "Identification impossible"
        },
        {
          "language" : "it-CH",
          "value" : "Identificazione impossibile"
        }]
      }]
    }]
  }
}

```
