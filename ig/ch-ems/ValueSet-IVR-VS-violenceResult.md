# IVR Violence Result - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Violence Result**

## ValueSet: IVR Violence Result 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceResult | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSviolenceResult |
| **Copyright/Legal**: CC0-1.0 | |

 
List of the consequences of violence against emergency service personnel. 

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
  "id" : "IVR-VS-violenceResult",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-violenceResult",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSviolenceResult",
  "title" : "IVR Violence Result",
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
  "description" : "List of the consequences of violence against emergency service personnel.",
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
        "code" : "260413007",
        "display" : "None",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine"
        },
        {
          "language" : "fr-CH",
          "value" : "aucun"
        },
        {
          "language" : "it-CH",
          "value" : "nessuna"
        }]
      },
      {
        "code" : "52684005",
        "display" : "Assault",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Körperverletzung"
        },
        {
          "language" : "fr-CH",
          "value" : "Coups et blessures"
        },
        {
          "language" : "it-CH",
          "value" : "Lesioni coporali"
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
          "value" : "autre"
        },
        {
          "language" : "it-CH",
          "value" : "altro"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000094",
        "display" : "obstruction of mission",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Behinderung des Einsatzes"
        },
        {
          "language" : "fr-CH",
          "value" : "Obstacle au bon déroulement de la mission"
        },
        {
          "language" : "it-CH",
          "value" : "Ostacolo al buon svolgimento della missione"
        }]
      },
      {
        "code" : "1000093",
        "display" : "violation of personal integrity",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Verletzung der persönlichen Integrität"
        },
        {
          "language" : "fr-CH",
          "value" : "Atteinte à l'intégrité de la personne"
        },
        {
          "language" : "it-CH",
          "value" : "Violazione dell'integrità personale"
        }]
      },
      {
        "code" : "1000092",
        "display" : "property damage",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sachschaden"
        },
        {
          "language" : "fr-CH",
          "value" : "Dommages à la propriété"
        },
        {
          "language" : "it-CH",
          "value" : "Danni alla proprietà"
        }]
      }]
    }]
  }
}

```
