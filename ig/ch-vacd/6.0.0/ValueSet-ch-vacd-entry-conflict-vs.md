# Entry Conflict Codes - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Entry Conflict Codes**

## ValueSet: Entry Conflict Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-entry-conflict-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDEntryConflictCode |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes for declaring document entry conflicts 

 **References** 

* [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md)

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
  "id" : "ch-vacd-entry-conflict-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-entry-conflict-vs",
  "version" : "6.0.0",
  "name" : "CHVACDEntryConflictCode",
  "title" : "Entry Conflict Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
  "description" : "The codes for declaring document entry conflicts",
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
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-entry-conflict-cs",
        "concept" : [
          {
            "code" : "duplicate",
            "display" : "duplicate",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Duplikat"
              },
              {
                "language" : "fr-CH",
                "value" : "doublon"
              },
              {
                "language" : "it-CH",
                "value" : "duplicato"
              },
              {
                "language" : "rm-CH",
                "value" : "duplicat"
              },
              {
                "language" : "en-US",
                "value" : "duplicate"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
