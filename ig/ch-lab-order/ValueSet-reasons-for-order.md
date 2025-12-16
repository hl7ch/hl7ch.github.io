# All Valid Reasons for Ordering a Lab Service - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **All Valid Reasons for Ordering a Lab Service**

## ValueSet: All Valid Reasons for Ordering a Lab Service 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/ValueSet/reasons-for-order | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ReasonsForOrder |
| **Copyright/Legal**: CC0-1.0 | |

 
Broadest value set of valid reasons for ordering laboratory services 

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
  "id" : "reasons-for-order",
  "url" : "http://fhir.ch/ig/ch-lab-order/ValueSet/reasons-for-order",
  "version" : "3.0.0",
  "name" : "ReasonsForOrder",
  "title" : "All Valid Reasons for Ordering a Lab Service",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T11:38:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Broadest value set of valid reasons for ordering laboratory services",
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
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "138875005"
          }
        ]
      }
    ]
  }
}

```
