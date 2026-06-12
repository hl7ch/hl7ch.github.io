# Clinical Document Types - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clinical Document Types**

## ValueSet: Clinical Document Types 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-clinical-document-types-vs | *Version*:1.0.0-ballot |
| Active as of 2026-05-26 | *Computable Name*:ChEmrClinicalDocumentTypesVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for clinical document types 

 **References** 

* [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md)

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
  "id" : "ch-emr-clinical-document-types-vs",
  "url" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-clinical-document-types-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrClinicalDocumentTypesVS",
  "title" : "Clinical Document Types",
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
  "description" : "Value Set for clinical document types",
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
        "code" : "4191000179101"
      },
      {
        "code" : "422735006"
      },
      {
        "code" : "772790007"
      },
      {
        "code" : "1264561001"
      }]
    }]
  }
}

```
