# Order Control Codes used in CH LAB-Order - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Order Control Codes used in CH LAB-Order**

## ValueSet: Order Control Codes used in CH LAB-Order (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/ValueSet/ch-lab-vs-order-control | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabVSOrderControl |
| **Copyright/Legal**: CC0-1.0 | |

 
Contains some codes of placer applications from v2-0119 table 

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
  "id" : "ch-lab-vs-order-control",
  "url" : "http://fhir.ch/ig/ch-lab-order/ValueSet/ch-lab-vs-order-control",
  "version" : "3.0.0",
  "name" : "ChLabVSOrderControl",
  "title" : "Order Control Codes used in CH LAB-Order",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-16T11:34:27+00:00",
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
  "description" : "Contains some codes of placer applications from v2-0119 table",
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
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0119",
        "concept" : [
          {
            "code" : "RP",
            "display" : "Order/service replace request"
          },
          {
            "code" : "CA",
            "display" : "Cancel order/service request"
          },
          {
            "code" : "HD",
            "display" : "Hold order request"
          },
          {
            "code" : "RL",
            "display" : "Release previous hold"
          }
        ]
      }
    ]
  }
}

```
