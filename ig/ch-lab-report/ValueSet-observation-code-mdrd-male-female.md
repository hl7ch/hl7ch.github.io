# CH LAB-Report Codes for eGFR (MDRD) - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Codes for eGFR (MDRD)**

## ValueSet: CH LAB-Report Codes for eGFR (MDRD) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-mdrd-male-female | *Version*:2.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:ObservationCodeMDRD |
| **Copyright/Legal**: CC0-1.0 | |

 
ValueSet for the allowed eGFR among males and eGFR among females codes 

 **References** 

* [CH LAB-Report Observation Results: eGFR - MDRD Profile for male and female Patients, components for blacks and non-blacks](StructureDefinition-ch-lab-observation-egfr-mdrd.md)

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
  "id" : "observation-code-mdrd-male-female",
  "url" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-mdrd-male-female",
  "version" : "2.0.0",
  "name" : "ObservationCodeMDRD",
  "title" : "CH LAB-Report Codes for eGFR (MDRD)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-16T10:40:10+00:00",
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
  "description" : "ValueSet for the allowed eGFR among males and eGFR among females codes",
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
            "code" : "77147-7",
            "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (MDRD)/1.73 sq M"
          },
          {
            "code" : "70969-1",
            "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (MDRD)/1.73 sq M among male population"
          },
          {
            "code" : "50044-7",
            "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (MDRD)/1.73 sq M among female population"
          }
        ]
      }
    ]
  }
}

```
