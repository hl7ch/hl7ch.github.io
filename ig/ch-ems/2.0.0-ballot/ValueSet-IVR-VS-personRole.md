# IVR Person Role - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Person Role**

## ValueSet: IVR Person Role 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-personRole | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:Ech0207personRole |
| **Copyright/Legal**: CC0-1.0 | |

 
List of roles of other persons involved in the event or in connection with the patient. 

 **References** 

* [CH EMS Extension: Person Role](StructureDefinition-ch-ems-ext-personrole.md)
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
  "id" : "IVR-VS-personRole",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-personRole",
  "version" : "2.0.0-ballot",
  "name" : "Ech0207personRole",
  "title" : "IVR Person Role",
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
  "description" : "List of roles of other persons involved in the event or in connection with the patient.",
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
        "code" : "74964007",
        "display" : "Other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere Rolle"
        },
        {
          "language" : "fr-CH",
          "value" : "Autre rôle"
        },
        {
          "language" : "it-CH",
          "value" : "Altro ruolo"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000095",
        "display" : "escort",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Begleitperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Accompagnateur"
        },
        {
          "language" : "it-CH",
          "value" : "Accompagnatore"
        }]
      },
      {
        "code" : "1000096",
        "display" : "inheritor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erben"
        },
        {
          "language" : "fr-CH",
          "value" : "Héritiers"
        },
        {
          "language" : "it-CH",
          "value" : "Eredi"
        }]
      },
      {
        "code" : "1000097",
        "display" : "principal",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Auftraggeber"
        },
        {
          "language" : "fr-CH",
          "value" : "Mandataire"
        },
        {
          "language" : "it-CH",
          "value" : "Mandatario"
        }]
      },
      {
        "code" : "1000098",
        "display" : "legal representative",
        "designation" : [{
          "language" : "de-CH",
          "value" : "gesetzlicher Vertreter"
        },
        {
          "language" : "fr-CH",
          "value" : "Représentant légal"
        },
        {
          "language" : "it-CH",
          "value" : "Rappresentante legale"
        }]
      },
      {
        "code" : "1000099",
        "display" : "parents",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Eltern"
        },
        {
          "language" : "fr-CH",
          "value" : "Parents"
        },
        {
          "language" : "it-CH",
          "value" : "Genitori"
        }]
      }]
    }]
  }
}

```
