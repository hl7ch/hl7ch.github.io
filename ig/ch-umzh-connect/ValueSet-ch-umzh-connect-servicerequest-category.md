# CH UMZH Connect ServiceRequest Category - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH UMZH Connect ServiceRequest Category**

## ValueSet: CH UMZH Connect ServiceRequest Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/ValueSet/ch-umzh-connect-servicerequest-category | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ChUmzhConnectServiceRequestCategoryVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value set for ServiceRequest.category defining the type of service request. 

 **References** 

* [CH UMZH Connect ServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md)

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
  "id" : "ch-umzh-connect-servicerequest-category",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/ValueSet/ch-umzh-connect-servicerequest-category",
  "version" : "1.0.0-ballot",
  "name" : "ChUmzhConnectServiceRequestCategoryVS",
  "title" : "CH UMZH Connect ServiceRequest Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-16T06:42:23+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "Value set for ServiceRequest.category defining the type of service request.",
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
        "code" : "108252007",
        "display" : "Laboratory procedure (procedure)"
      },
      {
        "code" : "308461008",
        "display" : "Referral to radiology service (procedure)"
      },
      {
        "code" : "183545006",
        "display" : "Referral to orthopedic service (procedure)"
      },
      {
        "code" : "720006006",
        "display" : "Cancer care review (procedure)"
      }]
    }]
  }
}

```
