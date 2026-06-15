# IVR Death Manner - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Death Manner**

## ValueSet: IVR Death Manner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-deathManner | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSdeathManner |
| **Copyright/Legal**: CC0-1.0 | |

 
List of possible causes of death. 

 **References** 

* [CH EMS Observation: Death Manner](StructureDefinition-ch-ems-observation-deathmanner.md)
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
  "id" : "IVR-VS-deathManner",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-deathManner",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSdeathManner",
  "title" : "IVR Death Manner",
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
  "description" : "List of possible causes of death.",
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
        "code" : "87309006",
        "display" : "death of unknown cause",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unklarer Todesfall"
        },
        {
          "language" : "fr-CH",
          "value" : "mort inexpliquée"
        },
        {
          "language" : "it-CH",
          "value" : "caduta di nodi più chiara"
        }]
      },
      {
        "code" : "418309003",
        "display" : "suspicious death",
        "designation" : [{
          "language" : "de-CH",
          "value" : "aussergewöhnlicher Todesfall"
        },
        {
          "language" : "fr-CH",
          "value" : "mort non naturelle"
        },
        {
          "language" : "it-CH",
          "value" : "morte non naturale"
        }]
      },
      {
        "code" : "38605008",
        "display" : "natural death",
        "designation" : [{
          "language" : "de-CH",
          "value" : "natürlicher Todesfall"
        },
        {
          "language" : "fr-CH",
          "value" : "mort naturelle"
        },
        {
          "language" : "it-CH",
          "value" : "morte naturale"
        }]
      }]
    }]
  }
}

```
