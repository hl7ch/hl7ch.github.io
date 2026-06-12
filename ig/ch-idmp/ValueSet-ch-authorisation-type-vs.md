# CH - Authorisation Type - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - Authorisation Type**

## ValueSet: CH - Authorisation Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/ValueSet/ch-authorisation-type-vs | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAuthorisationTypeVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for Authorisation Type in Switzerland used by FOPH 

 **References** 

* [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)

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
  "id" : "ch-authorisation-type-vs",
  "url" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-authorisation-type-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChAuthorisationTypeVS",
  "title" : "CH - Authorisation Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Value Set for Authorisation Type in Switzerland used by FOPH",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-authorisation-type-cs"
    }]
  }
}

```
