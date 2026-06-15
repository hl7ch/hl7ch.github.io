# IVR Result - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Result**

## ValueSet: IVR Result 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-result | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSresult |
| **Copyright/Legal**: CC0-1.0 | |

 
List of effects of procedures on the patient. 

 **References** 

* [CH EMS Observation: Condition Change](StructureDefinition-ch-ems-observation-conditionchange.md)
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
  "id" : "IVR-VS-result",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-result",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSresult",
  "title" : "IVR Result",
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
  "description" : "List of effects of procedures on the patient.",
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
        "code" : "231877006",
        "display" : "Worse",
        "designation" : [{
          "language" : "de-CH",
          "value" : "verschlechtert"
        },
        {
          "language" : "fr-CH",
          "value" : "détérioré"
        },
        {
          "language" : "it-CH",
          "value" : "perturbato"
        }]
      },
      {
        "code" : "260388006",
        "display" : "No status change",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unverändert"
        },
        {
          "language" : "fr-CH",
          "value" : "inchangé"
        },
        {
          "language" : "it-CH",
          "value" : "invariato"
        }]
      },
      {
        "code" : "385425000",
        "display" : "Improved",
        "designation" : [{
          "language" : "de-CH",
          "value" : "verbessert"
        },
        {
          "language" : "fr-CH",
          "value" : "amélioré"
        },
        {
          "language" : "it-CH",
          "value" : "migliorato"
        }]
      }]
    }]
  }
}

```
