# IVR NACA - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR NACA**

## ValueSet: IVR NACA 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-NACA | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:NACA |
| **Copyright/Legal**: CC0-1.0 | |

 
List of NACA score states. 

 **References** 

* [CH EMS Observation: NACA](StructureDefinition-ch-ems-observation-naca.md)
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
  "id" : "IVR-VS-NACA",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-NACA",
  "version" : "2.0.0-ballot",
  "name" : "NACA",
  "title" : "IVR NACA",
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
  "description" : "List of NACA score states.",
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
        "code" : "0",
        "display" : "keine Verletzung oder Erkrankung",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine Verletzung oder Erkrankung"
        },
        {
          "language" : "fr-CH",
          "value" : "aucune blessure ou maladie"
        },
        {
          "language" : "it-CH",
          "value" : "nessuna lesione o malattia"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "keine ärztliche Intervention erforderlich"
        }],
        "code" : "I",
        "display" : "geringfügige Störung",
        "designation" : [{
          "language" : "de-CH",
          "value" : "geringfügige Störung"
        },
        {
          "language" : "fr-CH",
          "value" : "Perturbation minime"
        },
        {
          "language" : "it-CH",
          "value" : "Disturbo minimo"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Ambulante ärztliche Abklärung, in der Regel aber keine notarztlichen Massnahmen erforderlich"
        }],
        "code" : "II",
        "display" : "leichte bis mässig schwere Störung",
        "designation" : [{
          "language" : "de-CH",
          "value" : "leichte bis mässig schwere Störung"
        },
        {
          "language" : "fr-CH",
          "value" : "Perturbation mineure à modérément grave"
        },
        {
          "language" : "it-CH",
          "value" : "Disturbo da lieve a moderatamente grave"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "nicht lebensbedrohlich; Stationäre Behandlung erforderlich, häufig auch notärztliche Massnahmen vor Ort"
        }],
        "code" : "III",
        "display" : "mässige bis schwere Störung",
        "designation" : [{
          "language" : "de-CH",
          "value" : "mässige bis schwere Störung"
        },
        {
          "language" : "fr-CH",
          "value" : "Perturbation modérée à grave"
        },
        {
          "language" : "it-CH",
          "value" : "Disturbo da moderato a grave"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "kurzfristige Entwicklung einer Lebensbedrohung kann nicht ausgeschlossen werden; in den überwiegenden Fällen ist eine notärtzliche Versorgung notwendig"
        }],
        "code" : "IV",
        "display" : "schwere Störung, lebensbedrohlich",
        "designation" : [{
          "language" : "de-CH",
          "value" : "schwere Störung, lebensbedrohlich"
        },
        {
          "language" : "fr-CH",
          "value" : "Perturbation grave, mettant la vie en danger"
        },
        {
          "language" : "it-CH",
          "value" : "Grave disturbo, pericolo di morte"
        }]
      },
      {
        "code" : "V",
        "display" : "akute Lebensgefahr",
        "designation" : [{
          "language" : "de-CH",
          "value" : "akute Lebensgefahr"
        },
        {
          "language" : "fr-CH",
          "value" : "Danger de mort immédiat"
        },
        {
          "language" : "it-CH",
          "value" : "Pericolo di morte imminente"
        }]
      },
      {
        "code" : "VI",
        "display" : "Reanimation",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Reanimation"
        },
        {
          "language" : "fr-CH",
          "value" : "Réanimation"
        },
        {
          "language" : "it-CH",
          "value" : "Rianimazione"
        }]
      },
      {
        "code" : "VII",
        "display" : "Tod",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tod"
        },
        {
          "language" : "fr-CH",
          "value" : "Mort"
        },
        {
          "language" : "it-CH",
          "value" : "Morte"
        }]
      }]
    }]
  }
}

```
