# CH ELM Results Sal Org - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Sal Org**

## ValueSet: CH ELM Results Sal Org 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sal-org | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsSalOrg |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Sal Org" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the "CH ELM Results Sal Org" group should refer to the provided codes to accurately and uniformly capture and report organism-related information. 

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
  "id" : "ch-elm-results-sal-org",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sal-org",
  "version" : "1.13.1",
  "name" : "ChElmResultsSalOrg",
  "title" : "CH ELM Results Sal Org",
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
  "description" : "The \"CH ELM Results Sal Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Sal Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
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
            "code" : "85908006",
            "display" : "Salmonella Paratyphi B (organism)"
          },
          {
            "code" : "79128009",
            "display" : "Salmonella Paratyphi A (organism)"
          },
          {
            "code" : "5595000",
            "display" : "Salmonella Typhi (organism)"
          },
          {
            "code" : "1179072002",
            "display" : "Salmonella group C (organism)"
          },
          {
            "code" : "73525009",
            "display" : "Salmonella Enteritidis (organism)"
          },
          {
            "code" : "398467008",
            "display" : "Salmonella group O:4 (organism)"
          },
          {
            "code" : "32488009",
            "display" : "Salmonella Paratyphi C (organism)"
          },
          {
            "code" : "27268008",
            "display" : "Genus Salmonella (organism)"
          },
          {
            "code" : "1179032006",
            "display" : "Salmonella group D (organism)"
          },
          {
            "code" : "50136005",
            "display" : "Salmonella Typhimurium (organism)"
          }
        ]
      }
    ]
  }
}

```
