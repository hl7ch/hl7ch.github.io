# Service Request Categories for Questionnaires - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Service Request Categories for Questionnaires**

## ValueSet: Service Request Categories for Questionnaires (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/ValueSet/ServiceRequest.categories | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ServiceRequestCategories |
| **Copyright/Legal**: CC0-1.0 | |

 
ch-lab-order Service Request Categories 

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
  "id" : "ServiceRequest.categories",
  "url" : "http://fhir.ch/ig/ch-lab-order/ValueSet/ServiceRequest.categories",
  "version" : "3.0.0",
  "name" : "ServiceRequestCategories",
  "title" : "Service Request Categories for Questionnaires",
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
  "description" : "ch-lab-order Service Request Categories",
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
        "system" : "http://fhir.ch/ig/ch-lab-order/CodeSystem/ServiceRequest.categories"
      }
    ]
  }
}

```
