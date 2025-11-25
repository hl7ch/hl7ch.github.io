# CH ELM Results Susceptibility To Component Observation Profile - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Susceptibility To Component Observation Profile**

## ConceptMap: CH ELM Results Susceptibility To Component Observation Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsSuscToComponentObservationProfile |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map specifies the ValuesSet for component.code for each leading code. 

Mapping from [CH ELM Results Laboratory Observation Susceptibility](ValueSet-ch-elm-results-laboratory-observation-susc.md) to [CH ELM Observation Profile Vs](ValueSet-ch-elm-observation-profile-vs.md)

**Group 1**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [CH ELM Observation Profile Vs](CodeSystem-ch-elm-observation-profile-vs.md)

* **Source Code**: 29579-0 (Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-component-conc



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-susc-to-component-observation-profile",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile",
  "version" : "1.13.0",
  "name" : "ChElmResultsSuscToComponentObservationProfile",
  "title" : "CH ELM Results Susceptibility To Component Observation Profile",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-susc",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-observation-profile-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-observation-profile-vs",
      "element" : [
        {
          "code" : "29579-0",
          "display" : "Mycobacterial susceptibility panel by Method for Slow-growing mycobacteria",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-component-conc",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
