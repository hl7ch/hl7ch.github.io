# CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures) - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures)**

## ValueSet: CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/ValueSet/ch-lab-bloodgroup-immuno-hematology-vs | *Version*:2.0.0 |
| Draft as of 2024-05-10 | *Computable Name*:ChLabBloodGroupImmunoHematology |
| **Copyright/Legal**: CC0-1.0 | |

 
This value set is used in the ChLabObservationBloodGroup profile. It contains Laboratory tests related to immunohematology 

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
  "id" : "ch-lab-bloodgroup-immuno-hematology-vs",
  "url" : "http://fhir.ch/ig/ch-lab-report/ValueSet/ch-lab-bloodgroup-immuno-hematology-vs",
  "version" : "2.0.0",
  "name" : "ChLabBloodGroupImmunoHematology",
  "title" : "CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2024-05-10T10:21:46+00:00",
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
  "description" : "This value set is used in the ChLabObservationBloodGroup profile. It contains Laboratory tests related to immunohematology",
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
        "system" : "http://snomed.info/sct",
        "filter" : [
          {
            "property" : "concept",
            "op" : "descendent-of",
            "value" : "127795003"
          }
        ]
      }
    ]
  }
}

```
