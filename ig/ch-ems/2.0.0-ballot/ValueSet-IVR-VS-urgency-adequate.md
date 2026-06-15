# IVR Urgency Adequate - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Urgency Adequate**

## ValueSet: IVR Urgency Adequate 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-urgency-adequate | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSurg_adequate |
| **Copyright/Legal**: CC0-1.0 | |

 
List of assessments of the priority of the mission set by the emergency call center. 

 **References** 

* [CH EMS Extension: Urgency Adequate](StructureDefinition-ch-ems-ext-urgencyadequate.md)
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
  "id" : "IVR-VS-urgency-adequate",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-urgency-adequate",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSurg_adequate",
  "title" : "IVR Urgency Adequate",
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
  "description" : "List of assessments of the priority of the mission set by the emergency call center.",
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
        "code" : "373066001",
        "display" : "Yes",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ja"
        },
        {
          "language" : "fr-CH",
          "value" : "oui"
        },
        {
          "language" : "it-CH",
          "value" : "si"
        }]
      },
      {
        "code" : "373067005",
        "display" : "No",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Nein"
        },
        {
          "language" : "fr-CH",
          "value" : "non"
        },
        {
          "language" : "it-CH",
          "value" : "no"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000134",
        "display" : "no, siren necessary",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nein, Sondersignal notwendig"
        },
        {
          "language" : "fr-CH",
          "value" : "non, sirène nécessaire"
        },
        {
          "language" : "it-CH",
          "value" : "no, segnali prioritari necessari"
        }]
      },
      {
        "code" : "1000135",
        "display" : "no, siren not necessary",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nein, Sondersignal nicht notwendig"
        },
        {
          "language" : "fr-CH",
          "value" : "non, sirène non nécessaire"
        },
        {
          "language" : "it-CH",
          "value" : "no, segnali prioritari non necessari"
        }]
      }]
    }]
  }
}

```
