# CH ELM Interpretation Codes SERO - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Interpretation Codes SERO**

## ValueSet: CH ELM Interpretation Codes SERO 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-sero | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmInterpretationCodesSero |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the code for sero interpretation code(s). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 1 concepts

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
  "id" : "ch-elm-interpretation-codes-sero",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-interpretation-codes-sero",
  "version" : "1.12.0",
  "name" : "ChElmInterpretationCodesSero",
  "title" : "CH ELM Interpretation Codes SERO",
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
  "description" : "This CH ELM value set includes the code for sero interpretation code(s).",
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
            "code" : "1290194006",
            "display" : "Seroconversion (finding)"
          }
        ]
      }
    ]
  }
}

```
