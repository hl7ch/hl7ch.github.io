# IVR Owner - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Owner**

## ValueSet: IVR Owner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRespiOwner | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:ActRespiOwner |
| **Copyright/Legal**: CC0-1.0 | |

 
List of owners of tools. 

 **References** 

* [CH EMS Extension: Owner](StructureDefinition-ch-ems-ext-owner.md)
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
  "id" : "IVR-VS-actRespiOwner",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRespiOwner",
  "version" : "2.0.0-ballot",
  "name" : "ActRespiOwner",
  "title" : "IVR Owner",
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
  "description" : "List of owners of tools.",
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
        "code" : "409971007",
        "display" : "Emergency medical services",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rettungsdienst"
        },
        {
          "language" : "fr-CH",
          "value" : "Service d'ambulance"
        },
        {
          "language" : "it-CH",
          "value" : "Servizio ambulanza"
        }]
      },
      {
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre"
        },
        {
          "language" : "it-CH",
          "value" : "Altro"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000082",
        "display" : "organisation point of departure",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Organisation des Abfahrtsortes"
        },
        {
          "language" : "fr-CH",
          "value" : "Organisation du lieu de départ"
        },
        {
          "language" : "it-CH",
          "value" : "Organizzazione del luogo di partenza"
        }]
      },
      {
        "code" : "1000083",
        "display" : "organisation point of arrival",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Organisation Zielort"
        },
        {
          "language" : "fr-CH",
          "value" : "Organisation du lieu d'arrivée"
        },
        {
          "language" : "it-CH",
          "value" : "Organizzazione del luogo di arrivo"
        }]
      }]
    }]
  }
}

```
