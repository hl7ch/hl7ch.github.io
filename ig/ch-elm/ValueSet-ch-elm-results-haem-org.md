# CH ELM Results Haem Org - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Haem Org**

## ValueSet: CH ELM Results Haem Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-haem-org | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsHaemOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Haem Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Haem Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 8 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ch-elm-results-haem-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-haem-org",
  "version" : "1.13.0",
  "name" : "ChElmResultsHaemOrg",
  "title" : "CH ELM Results Haem Org",
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
  "description" : "The \"CH ELM Results Haem Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Haem Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "103442008",
            "display" : "Haemophilus influenzae type b (organism)"
          },
          {
            "code" : "115407004",
            "display" : "Haemophilus influenzae, not b (organism)"
          },
          {
            "code" : "103441001",
            "display" : "Haemophilus influenzae type a (organism)"
          },
          {
            "code" : "103444009",
            "display" : "Haemophilus influenzae type d (organism)"
          },
          {
            "code" : "44470000",
            "display" : "Haemophilus influenzae (organism)"
          },
          {
            "code" : "103443003",
            "display" : "Haemophilus influenzae type c (organism)"
          },
          {
            "code" : "103446006",
            "display" : "Haemophilus influenzae type f (organism)"
          },
          {
            "code" : "103445005",
            "display" : "Haemophilus influenzae type e (organism)"
          }
        ]
      }
    ]
  }
}

```
