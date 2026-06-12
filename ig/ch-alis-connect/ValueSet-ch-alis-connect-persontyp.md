# CH ALIS PersonTyp - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS PersonTyp**

## ValueSet: CH ALIS PersonTyp 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ValueSet/ch-alis-connect-persontyp | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisPersonTyp |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set defines the PersonTyp. 

 **References** 

* [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

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
  "id" : "ch-alis-connect-persontyp",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/ch-alis-connect-persontyp",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisPersonTyp",
  "title" : "CH ALIS PersonTyp",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This value set defines the PersonTyp.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-persontyp",
      "concept" : [{
        "code" : "ResponsiblePhysician"
      },
      {
        "code" : "ProvidingPhysician"
      },
      {
        "code" : "TreatingPhysician"
      },
      {
        "code" : "FeePhysician"
      },
      {
        "code" : "AssistingPhysician1"
      },
      {
        "code" : "AssistingPhysician2"
      },
      {
        "code" : "AssistingPhysician3"
      },
      {
        "code" : "AssistingPhysician4"
      },
      {
        "code" : "AssistingPhysician5"
      },
      {
        "code" : "AssistingPhysician6"
      },
      {
        "code" : "AssistingPhysician7"
      },
      {
        "code" : "AssistingPhysician8"
      },
      {
        "code" : "AssistingPhysician9"
      }]
    }]
  }
}

```
