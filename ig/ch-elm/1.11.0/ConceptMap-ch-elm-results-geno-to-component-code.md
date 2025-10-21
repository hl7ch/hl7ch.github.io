# CH ELM Results Genotype To Component Code - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Genotype To Component Code**

## ConceptMap: CH ELM Results Genotype To Component Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-geno-to-component-code | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmResultsGenoToComponentCode |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map shows for each leading code defining genotype testing results its corresponding genotyp-valueset. The target code shows the URL of the value set containing the permitted genotype codes. 

Mapping from [CH ELM Results Laboratory Observation Genotyping](ValueSet-ch-elm-results-laboratory-observation-geno.md) to [CH ELM Results Component Vs](ValueSet-ch-elm-results-component-vs.md)

**Group 1**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.3.0/CodeSystem-v3-loinc.html) to [CH ELM Results Component Vs](CodeSystem-ch-elm-results-component-vs.md)

* **Source Code**: 94053-6 (Mycobacterium tuberculosis complex resistance panel by Molecular genetics method)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-tb



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-geno-to-component-code",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-geno-to-component-code",
  "version" : "1.12.0",
  "name" : "ChElmResultsGenoToComponentCode",
  "title" : "CH ELM Results Genotype To Component Code",
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
  "description" : "This CH ELM concept map shows for each leading code defining genotype testing results its corresponding genotyp-valueset. The target code shows the URL of the value set containing the permitted genotype codes.",
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
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-component-vs",
      "element" : [
        {
          "code" : "94053-6",
          "display" : "Mycobacterium tuberculosis complex resistance panel by Molecular genetics method",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-tb",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
