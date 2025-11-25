# CH ELM Results Geni Spec - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Geni Spec**

## ValueSet: CH ELM Results Geni Spec 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsGeniSpec |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Geni Spec" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Geni Spec" group should refer to the provided codes to ensure they capture and report material information correctly and consistently. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 10 concepts

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
  "id" : "ch-elm-results-geni-spec",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec",
  "version" : "1.13.0",
  "name" : "ChElmResultsGeniSpec",
  "title" : "CH ELM Results Geni Spec",
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
  "description" : "The \"CH ELM Results Geni Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Geni Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
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
            "code" : "119396006",
            "display" : "Specimen from endometrium (specimen)"
          },
          {
            "code" : "119324002",
            "display" : "Specimen of unknown material (specimen)"
          },
          {
            "code" : "119395005",
            "display" : "Specimen from uterine cervix (specimen)"
          },
          {
            "code" : "258527002",
            "display" : "Anal swab (specimen)"
          },
          {
            "code" : "122575003",
            "display" : "Urine specimen (specimen)"
          },
          {
            "code" : "257261003",
            "display" : "Swab (specimen)"
          },
          {
            "code" : "119393003",
            "display" : "Specimen from urethra (specimen)"
          },
          {
            "code" : "119347001",
            "display" : "Seminal fluid specimen (specimen)"
          },
          {
            "code" : "119394009",
            "display" : "Specimen from vagina (specimen)"
          },
          {
            "code" : "119344008",
            "display" : "Specimen from genital system (specimen)"
          }
        ]
      }
    ]
  }
}

```
