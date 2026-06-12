# Physical disability types - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Physical disability types**

## ValueSet: Physical disability types 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-physical-disability-types-vs | *Version*:1.0.0-ballot |
| Active as of 2026-05-26 | *Computable Name*:ChEmrPhysicalDisabilityTypesVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value sets for the types of disabilities 

 **References** 

* [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md)

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
  "id" : "ch-emr-physical-disability-types-vs",
  "url" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-physical-disability-types-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrPhysicalDisabilityTypesVS",
  "title" : "Physical disability types",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-26",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Value sets for the types of disabilities",
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
      "version" : "http://snomed.info/sct/2011000195101",
      "concept" : [{
        "code" : "397540003"
      },
      {
        "code" : "15188001"
      },
      {
        "code" : "128188000"
      },
      {
        "code" : "257277002"
      },
      {
        "code" : "228158008"
      }]
    }]
  }
}

```
