# CH ELM Results Susceptibility To Component Code - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Susceptibility To Component Code**

## ConceptMap: CH ELM Results Susceptibility To Component Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsSuscToComponentCode |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map shows for each leading code defining susceptibility testing results its corresponding antibiotic-valueset. The target code shows the URL of the value set containing the permitted antibiotic codes. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-susc-to-component-code",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code",
  "version" : "1.13.1",
  "name" : "ChElmResultsSuscToComponentCode",
  "title" : "CH ELM Results Susceptibility To Component Code",
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
  "description" : "This CH ELM concept map shows for each leading code defining susceptibility testing results its corresponding antibiotic-valueset. The target code shows the URL of the value set containing the permitted antibiotic codes.",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-susc",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-component-vs",
      "element" : [
        {
          "code" : "29579-0",
          "display" : "Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-tb",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
