# CH ELM Results Diph Org - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Diph Org**

## ValueSet: CH ELM Results Diph Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-diph-org | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsDiphOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Diph Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Diph Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "ch-elm-results-diph-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-diph-org",
  "version" : "1.13.1",
  "name" : "ChElmResultsDiphOrg",
  "title" : "CH ELM Results Diph Org",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:05:32+00:00",
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
  "description" : "The \"CH ELM Results Diph Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Diph Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
            "code" : "55084001",
            "display" : "Corynebacterium pseudotuberculosis (organism)"
          },
          {
            "code" : "243255007",
            "display" : "Corynebacterium diphtheriae var belfanti (organism)"
          },
          {
            "code" : "70876001",
            "display" : "Corynebacterium diphtheriae type intermedius (organism)"
          },
          {
            "code" : "13755001",
            "display" : "Corynebacterium diphtheriae type mitis (organism)"
          },
          {
            "code" : "5851001",
            "display" : "Corynebacterium diphtheriae (organism)"
          },
          {
            "code" : "77086004",
            "display" : "Genus Corynebacterium (organism)"
          },
          {
            "code" : "83675005",
            "display" : "Corynebacterium diphtheriae type gravis (organism)"
          },
          {
            "code" : "103428000",
            "display" : "Corynebacterium ulcerans (organism)"
          }
        ]
      }
    ]
  }
}

```
