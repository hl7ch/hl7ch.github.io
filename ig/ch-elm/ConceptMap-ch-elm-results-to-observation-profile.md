# CH ELM Results To Observation Profile - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results To Observation Profile**

## ConceptMap: CH ELM Results To Observation Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsToObservationProfile |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map specifies the observation profile for each leading code 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-to-observation-profile",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile",
  "version" : "1.13.1",
  "name" : "ChElmResultsToObservationProfile",
  "title" : "CH ELM Results To Observation Profile",
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
  "description" : "This CH ELM concept map specifies the observation profile for each leading code",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-observation-profile-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-observation-profile-vs",
      "element" : [
        {
          "code" : "56475-7",
          "display" : "Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-txt",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "62469-2",
          "display" : "HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-pq-virl",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77685-6",
          "display" : "HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-hiv-rec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "9709-7",
          "display" : "Coxiella burnetii phase 2 IgG Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "9711-3",
          "display" : "Coxiella burnetii phase 2 IgM Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
