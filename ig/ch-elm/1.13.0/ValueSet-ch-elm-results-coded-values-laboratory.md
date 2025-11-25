# CH ELM Results Coded Values Laboratory - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Coded Values Laboratory**

## ValueSet: CH ELM Results Coded Values Laboratory 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-coded-values-laboratory | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsCodedValuesLaboratory |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the codes for the laboratory test results (presence/absence). 

 **References** 

* [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 2 concepts

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
  "id" : "ch-elm-results-coded-values-laboratory",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-coded-values-laboratory",
  "version" : "1.13.0",
  "name" : "ChElmResultsCodedValuesLaboratory",
  "title" : "CH ELM Results Coded Values Laboratory",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:47:06+00:00",
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
  "description" : "This CH ELM value set includes the codes for the laboratory test results (presence/absence).",
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
        "concept" : [
          {
            "code" : "10828004",
            "display" : "Positive (qualifier value)"
          },
          {
            "code" : "260385009",
            "display" : "Negative (qualifier value)"
          }
        ]
      }
    ]
  }
}

```
