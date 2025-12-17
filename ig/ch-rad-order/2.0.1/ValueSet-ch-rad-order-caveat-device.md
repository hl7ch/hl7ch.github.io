# Caveat Device - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Device**

## ValueSet: Caveat Device (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-device | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderCaveatDevice |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Caveat Device Value Set in the context of CH RAD-Order. 

 **References** 

* [QuestionnaireRadiologyOrder](Bundle-DocumentRadiologyOrder.md)
* [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)
* [Module Questionnaire Radiologyorder Caveats](Questionnaire-ch-rad-order-module-caveats.md)

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
  "id" : "ch-rad-order-caveat-device",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-device",
  "version" : "2.0.1",
  "name" : "ChRadOrderCaveatDevice",
  "title" : "Caveat Device",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:17:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for Caveat Device Value Set in the context of CH RAD-Order.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "397578001"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "2667000",
            "display" : "Absent (qualifier value)"
          },
          {
            "code" : "373068000",
            "display" : "Undetermined (qualifier value)"
          }
        ]
      }
    ]
  }
}

```
