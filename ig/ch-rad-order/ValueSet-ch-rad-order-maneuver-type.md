# Maneuver Type - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Maneuver Type**

## ValueSet: Maneuver Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-maneuver-type | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderManeuverType |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Maneuver Type Value Set in the context of CH RAD-Order. 

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
  "id" : "ch-rad-order-maneuver-type",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-maneuver-type",
  "version" : "2.0.1",
  "name" : "ChRadOrderManeuverType",
  "title" : "Maneuver Type",
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
  "description" : "Definition for Maneuver Type Value Set in the context of CH RAD-Order.",
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
            "code" : "RID50075",
            "display" : "Extension maneuver"
          },
          {
            "code" : "RID50069",
            "display" : "Flexion maneuver"
          },
          {
            "code" : "RID10475",
            "display" : "Stress maneuver"
          },
          {
            "code" : "RID12535",
            "display" : "at rest"
          },
          {
            "code" : "RID10477",
            "display" : "exercise stress maneuver"
          },
          {
            "code" : "RID50035",
            "display" : "Single state of exercise"
          },
          {
            "code" : "RID50036",
            "display" : "Multiple states of exercise"
          },
          {
            "code" : "RID10467",
            "display" : "exhalation maneuver"
          },
          {
            "code" : "RID10468",
            "display" : "inspiration maneuver"
          },
          {
            "code" : "RID50083",
            "display" : "Standing maneuver"
          },
          {
            "code" : "RID50132",
            "display" : "standing with brace maneuver"
          },
          {
            "code" : "RID50073",
            "display" : "Bending maneuver"
          },
          {
            "code" : "RID50082",
            "display" : "Right bending maneuver"
          },
          {
            "code" : "RID50081",
            "display" : "Left bending maneuver"
          },
          {
            "code" : "RID50074",
            "display" : "clenched fist maneuver"
          },
          {
            "code" : "RID50078",
            "display" : "forced dorsiflexion maneuver"
          },
          {
            "code" : "RID48090",
            "display" : "voiding"
          }
        ]
      }
    ]
  }
}

```
