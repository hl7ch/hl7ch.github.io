# CH VACD Travel Information Code - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Travel Information Code**

## ValueSet: CH VACD Travel Information Code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-travel-code-vs | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:CHVACDTravelCodeVS |
| **Copyright/Legal**: CC0-1.0 | |

 
The code for travel information code. 

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
  "id" : "ch-vacd-travel-code-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-travel-code-vs",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDTravelCodeVS",
  "title" : "CH VACD Travel Information Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-11T13:29:29+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "The code for travel information code.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "129018004",
        "display" : "Traveling",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Reise"
        },
        {
          "language" : "fr-CH",
          "value" : "Voyager"
        },
        {
          "language" : "it-CH",
          "value" : "Viaggiare"
        },
        {
          "language" : "rm-CH",
          "value" : "Reise"
        },
        {
          "language" : "en-US",
          "value" : "Traveling"
        }]
      }]
    }]
  }
}

```
