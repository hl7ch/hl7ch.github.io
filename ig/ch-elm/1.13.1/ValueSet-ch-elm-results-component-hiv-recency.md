# CH ELM Results HIV Recency - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results HIV Recency**

## ValueSet: CH ELM Results HIV Recency 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-hiv-recency | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmResultsComponentHivRecency |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results HIV Recency" group provides a curated set codes needed to capture and report HIV recency test results. 

 **References** 

* [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md)

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
  "id" : "ch-elm-results-component-hiv-recency",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-hiv-recency",
  "version" : "1.13.1",
  "name" : "ChElmResultsComponentHivRecency",
  "title" : "CH ELM Results HIV Recency",
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
  "description" : "The \"CH ELM Results HIV Recency\" group provides a curated set codes needed to capture and report HIV recency test results.",
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
            "code" : "118040000",
            "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 120 antibody (procedure)"
          },
          {
            "code" : "118044009",
            "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 41 antibody (procedure)"
          },
          {
            "code" : "118052007",
            "display" : "Measurement of Human immunodeficiency virus 1 protein 31 antibody (procedure)"
          },
          {
            "code" : "117749009",
            "display" : "Measurement of Human immunodeficiency virus 1 protein 24 antibody (procedure)"
          },
          {
            "code" : "118047002",
            "display" : "Measurement of Human immunodeficiency virus 1 protein 17 antibody (procedure)"
          },
          {
            "code" : "118062000",
            "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 105 antibody (procedure)"
          },
          {
            "code" : "118067006",
            "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 36 antibody (procedure)"
          }
        ]
      }
    ]
  }
}

```
