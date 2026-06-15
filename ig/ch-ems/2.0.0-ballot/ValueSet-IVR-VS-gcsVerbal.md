# IVR GCS Verbal Response - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR GCS Verbal Response**

## ValueSet: IVR GCS Verbal Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsVerbal | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:GcsVerbal |
| **Copyright/Legal**: CC0-1.0 | |

 
List of GCS observations of the verbal response. 

 **References** 

* [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md)
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
  "id" : "IVR-VS-gcsVerbal",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsVerbal",
  "version" : "2.0.0-ballot",
  "name" : "GcsVerbal",
  "title" : "IVR GCS Verbal Response",
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
  "description" : "List of GCS observations of the verbal response.",
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
        "code" : "260389003",
        "display" : "no reaction",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine verbale Reaktion"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucune réaction verbale"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna reazione verbale"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000158",
        "display" : "incomprehensible sounds",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unverständliche Laute"
        },
        {
          "language" : "fr-CH",
          "value" : "Sons incompréhensibles"
        },
        {
          "language" : "it-CH",
          "value" : "Suoni incomprensibili"
        }]
      },
      {
        "code" : "1000159",
        "display" : "incoherent words",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unzusammenhängende Worte"
        },
        {
          "language" : "fr-CH",
          "value" : "Inappropriée"
        },
        {
          "language" : "it-CH",
          "value" : "Parla e pronuncia parole, ma incoerenti"
        }]
      },
      {
        "code" : "1000160",
        "display" : "conversational, disoriented",
        "designation" : [{
          "language" : "de-CH",
          "value" : "konversationsfähig, desorientiert"
        },
        {
          "language" : "fr-CH",
          "value" : "Confuse"
        },
        {
          "language" : "it-CH",
          "value" : "Confusione, frasi sconnesse"
        }]
      },
      {
        "code" : "1000161",
        "display" : "conversational, oriented",
        "designation" : [{
          "language" : "de-CH",
          "value" : "konversationsfähig, orientiert"
        },
        {
          "language" : "fr-CH",
          "value" : "Normale"
        },
        {
          "language" : "it-CH",
          "value" : "Paziente orientato, conversazione appropriata"
        }]
      }]
    }]
  }
}

```
