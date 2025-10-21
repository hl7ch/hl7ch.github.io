# CH ELM Results Gene Tb - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Gene Tb**

## ValueSet: CH ELM Results Gene Tb 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-tb | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmResultsComponentGeneTb |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Gene Tb" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "CH ELM Results Gene Tb" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 5 concepts

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
  "id" : "ch-elm-results-component-gene-tb",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-tb",
  "version" : "1.12.0",
  "name" : "ChElmResultsComponentGeneTb",
  "title" : "CH ELM Results Gene Tb",
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
  "description" : "The \"CH ELM Results Gene Tb\" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Gene Tb\" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "46246-5",
            "display" : "Mycobacterium tuberculosis katG gene isoniazid high level resistance mutation [Identifier] by Molecular method"
          },
          {
            "code" : "46244-0",
            "display" : "Mycobacterium tuberculosis complex rpoB gene rifAMPin resistance mutation identified by Molecular method"
          },
          {
            "code" : "46245-7",
            "display" : "Mycobacterium tuberculosis pncA gene pyrazinamide resistance mutation [Identifier] by Molecular method"
          },
          {
            "code" : "46247-3",
            "display" : "Mycobacterium tuberculosis embB gene ethambutol resistance mutation [Identifier] by Molecular method"
          },
          {
            "code" : "63072-3",
            "display" : "Mycobacterium tuberculosis inhA gene isoniazid low level resistance mutation [Presence] by Molecular method"
          }
        ]
      }
    ]
  }
}

```
