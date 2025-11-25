# CH ELM Results Shi Org - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Shi Org**

## ValueSet: CH ELM Results Shi Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-shi-org | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsShiOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Shi Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Shi Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 7 concepts

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
  "id" : "ch-elm-results-shi-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-shi-org",
  "version" : "1.13.0",
  "name" : "ChElmResultsShiOrg",
  "title" : "CH ELM Results Shi Org",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:47:06+00:00",
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
  "description" : "The \"CH ELM Results Shi Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Shi Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
            "code" : "125020009",
            "display" : "Shigella flexneri, serovar X (organism)"
          },
          {
            "code" : "85729005",
            "display" : "Shigella flexneri (organism)"
          },
          {
            "code" : "43612004",
            "display" : "Shigella dysenteriae (organism)"
          },
          {
            "code" : "55462008",
            "display" : "Shigella boydii (organism)"
          },
          {
            "code" : "77352002",
            "display" : "Genus Shigella (organism)"
          },
          {
            "code" : "4298009",
            "display" : "Shigella sonnei (organism)"
          },
          {
            "code" : "125021008",
            "display" : "Shigella flexneri, serovar Y (organism)"
          }
        ]
      }
    ]
  }
}

```
