# CH LAB-Report Codes for Erythrocyte Distribuiton Width Test - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Codes for Erythrocyte Distribuiton Width Test**

## ValueSet: CH LAB-Report Codes for Erythrocyte Distribuiton Width Test 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-entsvol-ratio | *Version*:2.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:ObservationCodeEntvolRatio |
| **Copyright/Legal**: CC0-1.0 | |

 
ValueSet for the allowed codes ENTVOL and RATIO 

 **References** 

* [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component](StructureDefinition-ch-lab-observation-cbc.md)
* [CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md)

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
  "id" : "observation-code-entsvol-ratio",
  "url" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-entsvol-ratio",
  "version" : "2.0.0",
  "name" : "ObservationCodeEntvolRatio",
  "title" : "CH LAB-Report Codes for Erythrocyte Distribuiton Width Test",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-16T10:27:41+00:00",
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
  "description" : "ValueSet for the allowed codes ENTVOL and RATIO",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "788-0",
            "display" : "Erythrocyte [DistWidth] in Blood by Automated count"
          }
        ]
      }
    ]
  }
}

```
