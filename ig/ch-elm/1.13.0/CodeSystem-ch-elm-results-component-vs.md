# CH ELM Results Component Vs - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Component Vs**

## CodeSystem: CH ELM Results Component Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-component-vs | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsComponentVs |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChElmResultsComponentVs](ValueSet-ch-elm-results-component-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-elm-results-component-vs",
  "url" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-component-vs",
  "version" : "1.13.0",
  "name" : "ChElmResultsComponentVs",
  "title" : "CH ELM Results Component Vs",
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
  "description" : "This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes.",
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
  "caseSensitive" : false,
  "content" : "complete",
  "concept" : [
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-cpe"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-tb"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-cpe"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-tb"
    }
  ]
}

```
