# IVR Pretreatment - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Pretreatment**

## ValueSet: IVR Pretreatment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-preTreatment | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:PreTreatmen |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of persons who performed pretreatment. 

 **References** 

* [CH EMS Extension: Performer](StructureDefinition-ch-ems-ext-performer.md)
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
  "id" : "IVR-VS-preTreatment",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-preTreatment",
  "version" : "2.0.0-ballot",
  "name" : "PreTreatmen",
  "title" : "IVR Pretreatment",
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
  "description" : "List of types of persons who performed pretreatment.",
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
        "code" : "223366009",
        "display" : "Healthcare professional",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Gesundheitsfachperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Professionnel de la santé"
        },
        {
          "language" : "it-CH",
          "value" : "Professionista della salute"
        }]
      },
      {
        "code" : "260413007",
        "display" : "None",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine Vorbehandlung"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucun traitement antérieur"
        },
        {
          "language" : "it-CH",
          "value" : "Nessun trattamento precedente"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000142",
        "display" : "first responder",
        "designation" : [{
          "language" : "de-CH",
          "value" : "First responder"
        },
        {
          "language" : "fr-CH",
          "value" : "First responder"
        },
        {
          "language" : "it-CH",
          "value" : "First responder"
        }]
      },
      {
        "code" : "1000084",
        "display" : "non-professional",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Laie"
        },
        {
          "language" : "fr-CH",
          "value" : "Laïque"
        },
        {
          "language" : "it-CH",
          "value" : "Laico"
        }]
      }]
    }]
  }
}

```
