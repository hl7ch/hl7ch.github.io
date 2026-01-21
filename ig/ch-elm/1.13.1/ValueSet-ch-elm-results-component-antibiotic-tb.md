# CH ELM Results Antibiotic Tb - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Antibiotic Tb**

## ValueSet: CH ELM Results Antibiotic Tb 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-tb | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsComponentAntibioticTb |
| **Copyright/Legal**: CC0-1.0 | |

 
The "ch elm results antibiotic tb" group provides a curated set of codes representing specific antibiotics. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the "ch elm results antibiotic tb" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently 

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
  "id" : "ch-elm-results-component-antibiotic-tb",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-antibiotic-tb",
  "version" : "1.13.1",
  "name" : "ChElmResultsComponentAntibioticTb",
  "title" : "CH ELM Results Antibiotic Tb",
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
  "description" : "The \"ch elm results antibiotic tb\" group provides a curated set of codes representing specific antibiotics. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"ch elm results antibiotic tb\" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently",
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
            "code" : "18934-0",
            "display" : "Isoniazid [Susceptibility]"
          },
          {
            "code" : "18921-7",
            "display" : "Ethambutol [Susceptibility]"
          },
          {
            "code" : "18974-6",
            "display" : "rifAMPin [Susceptibility]"
          },
          {
            "code" : "18973-8",
            "display" : "Pyrazinamide [Susceptibility]"
          }
        ]
      }
    ]
  }
}

```
