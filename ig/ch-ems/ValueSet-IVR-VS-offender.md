# IVR Offender - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Offender**

## ValueSet: IVR Offender 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-offender | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSoffender |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of attackers on the rescue staff. 

 **References** 

* [CH EMS Extension: Violence](StructureDefinition-ch-ems-ext-violence.md)
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
  "id" : "IVR-VS-offender",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-offender",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSoffender",
  "title" : "IVR Offender",
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
  "description" : "List of types of attackers on the rescue staff.",
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
        "code" : "125677006",
        "display" : "Relative",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Angehörige"
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
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000079",
        "display" : "crowd",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Personenansammlung"
        },
        {
          "language" : "fr-CH",
          "value" : "Foule"
        },
        {
          "language" : "it-CH",
          "value" : "Folla"
        }]
      },
      {
        "code" : "1000080",
        "display" : "person, unknown",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Drittperson unbekannt"
        },
        {
          "language" : "fr-CH",
          "value" : "Tierce personne inconnue"
        },
        {
          "language" : "it-CH",
          "value" : "Terza persona sconosciuta"
        }]
      },
      {
        "code" : "1000081",
        "display" : "person, known",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Drittperson bekannt"
        },
        {
          "language" : "fr-CH",
          "value" : "Tierce personne connue"
        },
        {
          "language" : "it-CH",
          "value" : "Terza persona conosciuta"
        }]
      }]
    }]
  }
}

```
