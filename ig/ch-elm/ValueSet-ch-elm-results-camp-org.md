# CH ELM Results Camp Org - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Camp Org**

## ValueSet: CH ELM Results Camp Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-camp-org | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmResultsCampOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Camp Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Camp Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 13 concepts

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
  "id" : "ch-elm-results-camp-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-camp-org",
  "version" : "1.12.0",
  "name" : "ChElmResultsCampOrg",
  "title" : "CH ELM Results Camp Org",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "The \"CH ELM Results Camp Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Camp Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
            "code" : "450602004",
            "display" : "Campylobacter ureolyticus (organism)"
          },
          {
            "code" : "103427005",
            "display" : "Campylobacter upsaliensis (organism)"
          },
          {
            "code" : "116386003",
            "display" : "Campylobacter lari (organism)"
          },
          {
            "code" : "113525005",
            "display" : "Campylobacter rectus (organism)"
          },
          {
            "code" : "9041007",
            "display" : "Campylobacter hyointestinalis (organism)"
          },
          {
            "code" : "116037008",
            "display" : "Campylobacter curvus (organism)"
          },
          {
            "code" : "9892000",
            "display" : "Campylobacter concisus (organism)"
          },
          {
            "code" : "703009006",
            "display" : "Campylobacter jejuni or Campylobacter coli (finding)"
          },
          {
            "code" : "84210007",
            "display" : "Campylobacter fetus (organism)"
          },
          {
            "code" : "113528007",
            "display" : "Campylobacter gracilis (organism)"
          },
          {
            "code" : "40614002",
            "display" : "Campylobacter coli (organism)"
          },
          {
            "code" : "35408001",
            "display" : "Genus Campylobacter (organism)"
          },
          {
            "code" : "66543000",
            "display" : "Campylobacter jejuni (organism)"
          }
        ]
      }
    ]
  }
}

```
