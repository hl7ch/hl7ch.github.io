# CH ELM Results Component Gene CPE - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results Component Gene CPE**

## ValueSet: CH ELM Results Component Gene CPE 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-cpe | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmResultsComponentGeneCpe |
| **Copyright/Legal**: CC0-1.0 | |

 
The "CH ELM Results Component Gene CPE" provides a curated set of codes representing specific genes. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

No formal definition provided for this value set

 

### Expansion

This value set contains 0 concepts

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
  "id" : "ch-elm-results-component-gene-cpe",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-gene-cpe",
  "version" : "1.13.0",
  "name" : "ChElmResultsComponentGeneCpe",
  "title" : "CH ELM Results Component Gene CPE",
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
  "description" : "The \"CH ELM Results Component Gene CPE\" provides a curated set of codes representing specific genes.",
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
  "copyright" : "CC0-1.0"
}

```
