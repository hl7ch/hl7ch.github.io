# CH EMR MRI Safety Status - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMR MRI Safety Status**

## ValueSet: CH EMR MRI Safety Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-mri-safety-status-vs | *Version*:1.0.0-ballot |
| Active as of 2026-05-26 | *Computable Name*:ChEmrMriSafetyStatusVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Permitted values for the MRI safety status property of a device, per ASTM F2503: MR Safe, MR Conditional, MR Unsafe. 

 **References** 

* [CH Emergency Record Device](StructureDefinition-ch-emr-device.md)

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
  "id" : "ch-emr-mri-safety-status-vs",
  "url" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-mri-safety-status-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrMriSafetyStatusVS",
  "title" : "CH EMR MRI Safety Status",
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
  "description" : "Permitted values for the MRI safety status property of a device, per ASTM F2503: MR Safe, MR Conditional, MR Unsafe.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs"
    }]
  }
}

```
