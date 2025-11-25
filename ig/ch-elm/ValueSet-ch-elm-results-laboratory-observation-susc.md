# CH ELM Results Laboratory Observation Susceptibility - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Laboratory Observation Susceptibility**

## ValueSet: CH ELM Results Laboratory Observation Susceptibility 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-susc | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsLaboratoryObservationSusc |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the codes for the laboratory Susceptibility test results. 

 **References** 

* [CH ELM Observation Results for Microbial susceptibility tests](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md)
* [CH ELM Observation Results for Microbial susceptibility tests (strict)](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 1 concepts

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
  "id" : "ch-elm-results-laboratory-observation-susc",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-susc",
  "version" : "1.13.0",
  "name" : "ChElmResultsLaboratoryObservationSusc",
  "title" : "CH ELM Results Laboratory Observation Susceptibility",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "This CH ELM value set includes the codes for the laboratory Susceptibility test results.",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "29579-0",
            "display" : "Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria"
          }
        ]
      }
    ]
  }
}

```
