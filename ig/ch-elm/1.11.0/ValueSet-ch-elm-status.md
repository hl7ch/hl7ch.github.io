# CH ELM Status - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Status**

## ValueSet: CH ELM Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-status | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the codes for the laboratory specialities. 

 **References** 

* [Status of the processing of the document](StructureDefinition-ch-ext-elm-status.md)

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
  "id" : "ch-elm-status",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-status",
  "version" : "1.12.0",
  "name" : "ChElmStatus",
  "title" : "CH ELM Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-10-21T11:37:53+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM value set includes the codes for the laboratory specialities.",
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
        "system" : "http://hl7.org/fhir/task-status",
        "concept" : [
          {
            "code" : "in-progress",
            "display" : "in-progress"
          },
          {
            "code" : "failed",
            "display" : "failed"
          },
          {
            "code" : "completed",
            "display" : "completed"
          }
        ]
      }
    ]
  }
}

```
