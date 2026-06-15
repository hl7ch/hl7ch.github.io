# IVR GCS Motoric Response - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR GCS Motoric Response**

## ValueSet: IVR GCS Motoric Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsMotoric | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:GcsMotoric |
| **Copyright/Legal**: CC0-1.0 | |

 
List of GCS observations of the motoric response. 

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
  "id" : "IVR-VS-gcsMotoric",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsMotoric",
  "version" : "2.0.0-ballot",
  "name" : "GcsMotoric",
  "title" : "IVR GCS Motoric Response",
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
  "description" : "List of GCS observations of the motoric response.",
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
        "display" : "No reaction",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine Reaktion auf Schmerzreiz"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucune réaction au stimulus douloureux"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna reazione a stimoli dolorosi"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000153",
        "display" : "stretching",
        "designation" : [{
          "language" : "de-CH",
          "value" : "auf Schmerz Strecksynergismen"
        },
        {
          "language" : "fr-CH",
          "value" : "Extension stéréotypée"
        },
        {
          "language" : "it-CH",
          "value" : "Estensione delle estremità allo stimolo doloroso"
        }]
      },
      {
        "code" : "1000154",
        "display" : "bending",
        "designation" : [{
          "language" : "de-CH",
          "value" : "auf Schmerz Beugesynergismen"
        },
        {
          "language" : "fr-CH",
          "value" : "Flexion stéréotypée"
        },
        {
          "language" : "it-CH",
          "value" : "Anormale flessione allo stimolo doloroso"
        }]
      },
      {
        "code" : "1000155",
        "display" : "undirected defense",
        "designation" : [{
          "language" : "de-CH",
          "value" : "ungezielte Schmerzabwehr"
        },
        {
          "language" : "fr-CH",
          "value" : "Evitement désorientée"
        },
        {
          "language" : "it-CH",
          "value" : "Retrae / Flette ma non localizza il dolore"
        }]
      },
      {
        "code" : "1000156",
        "display" : "directed defense",
        "designation" : [{
          "language" : "de-CH",
          "value" : "gezielte Schmerzabwehr"
        },
        {
          "language" : "fr-CH",
          "value" : "Evitement orientée"
        },
        {
          "language" : "it-CH",
          "value" : "Retrae / Flette localizza il dolore"
        }]
      },
      {
        "code" : "1000157",
        "display" : "take orders",
        "designation" : [{
          "language" : "de-CH",
          "value" : "befolgt Aufforderungen"
        },
        {
          "language" : "fr-CH",
          "value" : "Aux ordres"
        },
        {
          "language" : "it-CH",
          "value" : "Obbedisce ai comandi"
        }]
      }]
    }]
  }
}

```
