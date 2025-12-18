# CH PPQm Feed Request HTTP Method - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Feed Request HTTP Method**

## ValueSet: CH PPQm Feed Request HTTP Method 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmFeedRequestHttpMethod | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmFeedRequestHttpMethod |
| **Copyright/Legal**: CC0-1.0 | |

 
HTTP methods allowed in CH:PPQm Feed requests 

 **References** 

* [CH PPQm Feed Request Bundle](StructureDefinition-PpqmFeedRequestBundle.md)

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
  "id" : "PpqmFeedRequestHttpMethod",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmFeedRequestHttpMethod",
  "version" : "5.0.0",
  "name" : "PpqmFeedRequestHttpMethod",
  "title" : "CH PPQm Feed Request HTTP Method",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "HTTP methods allowed in CH:PPQm Feed requests",
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
        "system" : "http://hl7.org/fhir/http-verb",
        "concept" : [
          {
            "code" : "POST",
            "display" : "POST"
          },
          {
            "code" : "PUT",
            "display" : "PUT"
          },
          {
            "code" : "DELETE",
            "display" : "DELETE"
          }
        ]
      }
    ]
  }
}

```
