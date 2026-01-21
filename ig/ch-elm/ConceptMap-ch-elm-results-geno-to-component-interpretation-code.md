# CH ELM Results Genotyping To Component Interpretation Code - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Genotyping To Component Interpretation Code**

## ConceptMap: CH ELM Results Genotyping To Component Interpretation Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-geno-to-component-interpretation-code | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsGenoToComponentInterpretationCode |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map specifies the ValuesSet for component.code for each leading code. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-geno-to-component-interpretation-code",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-geno-to-component-interpretation-code",
  "version" : "1.13.1",
  "name" : "ChElmResultsGenoToComponentInterpretationCode",
  "title" : "CH ELM Results Genotyping To Component Interpretation Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:21:00+00:00",
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
  "description" : "This CH ELM concept map specifies the ValuesSet for component.code for each leading code.",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-geno",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-interpretation-codes-vs",
      "element" : [
        {
          "code" : "94053-6",
          "display" : "Mycobacterium tuberculosis complex resistance panel by Molecular genetics method",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-pos-neg",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
