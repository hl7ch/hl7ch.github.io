# Time Quantity Unit Codes - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Time Quantity Unit Codes**

## ValueSet: Time Quantity Unit Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-time-quantity-unit-code | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRTimeQuantityUnitCode |
| **Copyright/Legal**: CC0-1.0 | |

 
Unit Codes for time quantity units. 
These are all unit codes about time quantities, excluding amount units. 

 **References** 

* [Time Quantity](StructureDefinition-ch-emed-epr-time-quantity.md)

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
  "id" : "ch-emed-epr-time-quantity-unit-code",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "url" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-time-quantity-unit-code",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRTimeQuantityUnitCode",
  "title" : "Time Quantity Unit Codes",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:11:04+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Unit Codes for time quantity units.\n\nThese are all unit codes about time quantities, excluding amount units.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://unitsofmeasure.org",
        "concept" : [
          {
            "code" : "s",
            "display" : "Second"
          },
          {
            "code" : "min",
            "display" : "Minute"
          },
          {
            "code" : "h",
            "display" : "Hour"
          },
          {
            "code" : "d",
            "display" : "Day"
          },
          {
            "code" : "mo",
            "display" : "Month"
          },
          {
            "code" : "a",
            "display" : "Year"
          }
        ]
      }
    ]
  }
}

```
