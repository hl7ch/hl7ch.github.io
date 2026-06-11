# Export document type - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Export document type**

## ValueSet: Export document type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-patient-export-operation-vs | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:CHVACDPatientExportOperationVS |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes for declaring document entry conflicts 

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
  "id" : "ch-vacd-patient-export-operation-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-patient-export-operation-vs",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDPatientExportOperationVS",
  "title" : "Export document type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-11T13:35:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "The codes for declaring document entry conflicts",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
      "concept" : [{
        "code" : "urn:che:epr:ch-vacd:vaccination-record:2022",
        "display" : "CH VACD Vaccination Record"
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
      "concept" : [{
        "code" : "immunrecorequest",
        "display" : "Immunization Recommendation Request"
      }]
    }]
  }
}

```
