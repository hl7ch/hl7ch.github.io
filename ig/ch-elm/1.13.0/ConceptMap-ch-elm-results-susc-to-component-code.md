# CH ELM Results Susceptibility To Component Code - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Susceptibility To Component Code**

## ConceptMap: CH ELM Results Susceptibility To Component Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsSuscToComponentCode |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map shows for each leading code defining susceptibility testing results its corresponding antibiotic-valueset. The target code shows the URL of the value set containing the permitted antibiotic codes. 

Mapping from [CH ELM Results Laboratory Observation Susceptibility](ValueSet-ch-elm-results-laboratory-observation-susc.md) to [CH ELM Results Component Vs](ValueSet-ch-elm-results-component-vs.md)

**Group 1**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [CH ELM Results Component Vs](CodeSystem-ch-elm-results-component-vs.md)

* **Source Code**: 29579-0 (Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-tb



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-susc-to-component-code",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code",
  "version" : "1.13.0",
  "name" : "ChElmResultsSuscToComponentCode",
  "title" : "CH ELM Results Susceptibility To Component Code",
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
