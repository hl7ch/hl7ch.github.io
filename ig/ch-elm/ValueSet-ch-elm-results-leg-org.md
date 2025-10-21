# CH ELM Results Leg Org - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Leg Org**

## ValueSet: CH ELM Results Leg Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-leg-org | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmResultsLegOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Leg Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Leg Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 19 concepts

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
  "id" : "ch-elm-results-leg-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-leg-org",
  "version" : "1.12.0",
  "name" : "ChElmResultsLegOrg",
  "title" : "CH ELM Results Leg Org",
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
  "description" : "The \"CH ELM Results Leg Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Leg Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
            "code" : "103465003",
            "display" : "Legionella pneumophila serogroup 3 (organism)"
          },
          {
            "code" : "89605004",
            "display" : "Legionella longbeachae (organism)"
          },
          {
            "code" : "116380009",
            "display" : "Legionella micdadei (organism)"
          },
          {
            "code" : "7527002",
            "display" : "Genus Legionella (organism)"
          },
          {
            "code" : "103463005",
            "display" : "Legionella pneumophila serogroup 1 (organism)"
          },
          {
            "code" : "113721003",
            "display" : "Legionella gormanii (organism)"
          },
          {
            "code" : "103467006",
            "display" : "Legionella pneumophila serogroup 5 (organism)"
          },
          {
            "code" : "116379006",
            "display" : "Legionella maceachernii (organism)"
          },
          {
            "code" : "131325006",
            "display" : "Legionella pneumophilia serogroup 13 (organism)"
          },
          {
            "code" : "18214000",
            "display" : "Legionella anisa (organism)"
          },
          {
            "code" : "103469009",
            "display" : "Legionella pneumophila serogroup 7 (organism)"
          },
          {
            "code" : "450611004",
            "display" : "Legionella bozemanae (organism)"
          },
          {
            "code" : "58923007",
            "display" : "Legionella cincinnatiensis (organism)"
          },
          {
            "code" : "131322009",
            "display" : "Legionella pneumophilia serogroup 10 (organism)"
          },
          {
            "code" : "131324005",
            "display" : "Legionella pneumophilia serogroup 12 (organism)"
          },
          {
            "code" : "103448007",
            "display" : "Legionella brunensis (organism)"
          },
          {
            "code" : "103464004",
            "display" : "Legionella pneumophila serogroup 2 (organism)"
          },
          {
            "code" : "103468001",
            "display" : "Legionella pneumophila serogroup 6 (organism)"
          },
          {
            "code" : "80897008",
            "display" : "Legionella pneumophila (organism)"
          }
        ]
      }
    ]
  }
}

```
