# CH ELM Observation Profile Vs - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Profile Vs**

## CodeSystem: CH ELM Observation Profile Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-observation-profile-vs | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmObservationProfileVs |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes contained in this code system represent URLs of Profile Observations that can be used as target codes in ConceptMaps. These profiles defines the Observation in relation to the leading code. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChElmObservationProfileVs](ValueSet-ch-elm-observation-profile-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-elm-observation-profile-vs",
  "url" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-observation-profile-vs",
  "version" : "1.12.0",
  "name" : "ChElmObservationProfileVs",
  "title" : "CH ELM Observation Profile Vs",
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
  "description" : "The codes contained in this code system represent URLs of Profile Observations that can be used as target codes in ConceptMaps. These profiles defines the Observation in relation to the leading code.",
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
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-txt"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-geno"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-hiv-rec"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-pq-virl"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-component-conc"
    },
    {
      "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-pq-ab"
    }
  ]
}

```
