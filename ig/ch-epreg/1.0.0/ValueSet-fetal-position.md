# CH EPREG VS: Fetal Position - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG VS: Fetal Position**

## ValueSet: CH EPREG VS: Fetal Position 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/ValueSet/fetal-position | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:FetalPosition |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set includes SNOMED CT codes for fetal positions. 

 **References** 

* [CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md)

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
  "id" : "fetal-position",
  "url" : "http://fhir.ch/ig/ch-epreg/ValueSet/fetal-position",
  "version" : "1.0.0",
  "name" : "FetalPosition",
  "title" : "CH EPREG VS: Fetal Position",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T12:16:11+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "This value set includes SNOMED CT codes for fetal positions.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "70028003",
            "display" : "Vertex presentation (finding)"
          },
          {
            "code" : "6096002",
            "display" : "Breech presentation (finding)"
          },
          {
            "code" : "73161006",
            "display" : "Transverse lie (disorder)"
          }
        ]
      }
    ]
  }
}

```
