# CH ELM Results To Observation Profile - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results To Observation Profile**

## ConceptMap: CH ELM Results To Observation Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsToObservationProfile |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map specifies the observation profile for each leading code 

Mapping from [CH ELM Results Laboratory Observation](ValueSet-ch-elm-results-laboratory-observation.md) to [CH ELM Observation Profile Vs](ValueSet-ch-elm-observation-profile-vs.md)

**Group 1**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [CH ELM Observation Profile Vs](CodeSystem-ch-elm-observation-profile-vs.md)

* **Source Code**: 56475-7 (Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-txt
* **Source Code**: 62469-2 (HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-pq-virl
* **Source Code**: 77685-6 (HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-hiv-rec
* **Source Code**: 9709-7 (Coxiella burnetii phase 2 IgG Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto
* **Source Code**: 9711-3 (Coxiella burnetii phase 2 IgM Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-to-observation-profile",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile",
  "version" : "1.13.0",
  "name" : "ChElmResultsToObservationProfile",
  "title" : "CH ELM Results To Observation Profile",
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
