# Laterality - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laterality**

## ValueSet: Laterality (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-laterality | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderLaterality |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Laterality Value Set in the context of CH RAD-Order. 

 **References** 

* [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* [QuestionnaireRadiologyOrder](Bundle-DocumentRadiologyOrder.md)
* [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)
* [Module Questionnaire Radiologyorder Instruction](Questionnaire-ch-rad-order-module-medinfo.md)

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
  "id" : "ch-rad-order-laterality",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-laterality",
  "version" : "2.0.1",
  "name" : "ChRadOrderLaterality",
  "title" : "Laterality",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:22:04+00:00",
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
  "description" : "Definition for Laterality Value Set in the context of CH RAD-Order.",
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
        "system" : "http://radlex.org",
        "concept" : [
          {
            "code" : "RID5771",
            "display" : "Bilateral"
          },
          {
            "code" : "RID5824",
            "display" : "LEFT"
          },
          {
            "code" : "RID5825",
            "display" : "RIGHT"
          },
          {
            "code" : "RID49843",
            "display" : "Unspecified laterality"
          },
          {
            "code" : "RID38593",
            "display" : "Unilateral"
          }
        ]
      }
    ]
  }
}

```
