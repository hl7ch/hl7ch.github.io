# IVR GCS Eye Opening - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR GCS Eye Opening**

## ValueSet: IVR GCS Eye Opening 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcs-augenoeffnung | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:GcsAugenoeffnung |
| **Copyright/Legal**: CC0-1.0 | |

 
List of GCS observations of the eye opening. 

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
  "id" : "IVR-VS-gcs-augenoeffnung",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcs-augenoeffnung",
  "version" : "2.0.0-ballot",
  "name" : "GcsAugenoeffnung",
  "title" : "IVR GCS Eye Opening",
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
  "description" : "List of GCS observations of the eye opening.",
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
          "value" : "keine Reaktion"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucune réaction"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna reazione"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000150",
        "display" : "on pain stimulus",
        "designation" : [{
          "language" : "de-CH",
          "value" : "auf Schmerzreiz"
        },
        {
          "language" : "fr-CH",
          "value" : "À la douleur"
        },
        {
          "language" : "it-CH",
          "value" : "Allo stimolo doloroso"
        }]
      },
      {
        "code" : "1000151",
        "display" : "on request",
        "designation" : [{
          "language" : "de-CH",
          "value" : "auf Aufforderung"
        },
        {
          "language" : "fr-CH",
          "value" : "À la demande"
        },
        {
          "language" : "it-CH",
          "value" : "Allo stimolo verbale"
        }]
      },
      {
        "code" : "1000152",
        "display" : "spontaneous",
        "designation" : [{
          "language" : "de-CH",
          "value" : "spontan"
        },
        {
          "language" : "fr-CH",
          "value" : "Spontanée"
        },
        {
          "language" : "it-CH",
          "value" : "Spontanea"
        }]
      }]
    }]
  }
}

```
