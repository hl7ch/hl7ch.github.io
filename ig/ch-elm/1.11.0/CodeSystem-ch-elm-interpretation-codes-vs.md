# CH ELM Interpretation Codes Vs - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Interpretation Codes Vs**

## CodeSystem: CH ELM Interpretation Codes Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-interpretation-codes-vs | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmInterpretationCodesVs |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted to indicate the observation interpretation in relation to the leading code. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChElmInterpretationCodesVs](ValueSet-ch-elm-interpretation-codes-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-elm-interpretation-codes-vs",
  "url" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-interpretation-codes-vs",
  "version" : "1.12.0",
  "name" : "ChElmInterpretationCodesVs",
  "title" : "CH ELM Interpretation Codes Vs",
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
  "description" : "The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted to indicate the observation interpretation in relation to the leading code.",
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
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-avidity"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-pos"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-pos-neg"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-res"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-res-sus"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-sero"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-titer"
    }
  ]
}

```
