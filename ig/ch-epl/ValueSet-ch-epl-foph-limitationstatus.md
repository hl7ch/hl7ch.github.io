# CH EPL - Limitation Status - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Limitation Status**

## ValueSet: CH EPL - Limitation Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/ch-epl-foph-limitationstatus | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplLimitationStatusVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for Limitierungsstatus from ePL used by FOPH 

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
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R5/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ch-epl-foph-limitationstatus",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-epl-foph-limitationstatus",
  "version" : "1.0.0",
  "name" : "ChEplLimitationStatusVS",
  "title" : "CH EPL - Limitation Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "Value Set for Limitierungsstatus from ePL used by FOPH",
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
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus"
      }
    ]
  }
}

```
