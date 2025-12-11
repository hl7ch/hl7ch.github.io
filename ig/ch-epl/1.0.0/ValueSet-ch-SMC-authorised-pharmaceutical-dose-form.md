# CH SMC - Authorised Pharmaceutical Dose Form - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Authorised Pharmaceutical Dose Form**

## ValueSet: CH SMC - Authorised Pharmaceutical Dose Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-authorised-pharmaceutical-dose-form | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChSMCAuthorisedPharmaceuticalDoseFormVS |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Authorised Pharmaceutical Dose Form from SMC used by FOPH 

 **References** 

* [CH - SMC Authorized Dose Form](StructureDefinition-authorizedDoseForm.md)

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
  "id" : "ch-SMC-authorised-pharmaceutical-dose-form",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-authorised-pharmaceutical-dose-form",
  "version" : "1.0.0",
  "name" : "ChSMCAuthorisedPharmaceuticalDoseFormVS",
  "title" : "CH SMC - Authorised Pharmaceutical Dose Form",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Value Set for the Authorised Pharmaceutical Dose Form from SMC used by FOPH",
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
        "valueSet" : [
          "http://fhir.ch/ig/ch-epl/ValueSet/edqm-pharmaceutical-dose-form"
        ]
      },
      {
        "valueSet" : [
          "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-pharmaceutical-dose-form"
        ]
      },
      {
        "valueSet" : ["http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-term"]
      },
      {
        "valueSet" : [
          "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combination-packaging"
        ]
      }
    ]
  }
}

```
