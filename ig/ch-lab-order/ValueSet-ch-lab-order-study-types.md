# Laboratory Study Types - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laboratory Study Types**

## ValueSet: Laboratory Study Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/ValueSet/ch-lab-order-study-types | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderLabStudyTypes |
| **Copyright/Legal**: CC0-1.0 | |

 
refers to https://wiki.ihe.net/index.php/1.3.6.1.4.1.19376.1.3.3.2.1, but without some errors 

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
  "id" : "ch-lab-order-study-types",
  "url" : "http://fhir.ch/ig/ch-lab-order/ValueSet/ch-lab-order-study-types",
  "version" : "3.0.0",
  "name" : "ChLabOrderLabStudyTypes",
  "title" : "Laboratory Study Types",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-16T11:38:24+00:00",
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
  "description" : "refers to https://wiki.ihe.net/index.php/1.3.6.1.4.1.19376.1.3.3.2.1, but without some errors",
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
            "code" : "18716-1",
            "display" : "Allergy studies (set)"
          },
          {
            "code" : "18717-9",
            "display" : "Blood bank studies (set)"
          },
          {
            "code" : "18718-7",
            "display" : "Cell marker studies (set)"
          },
          {
            "code" : "18719-5",
            "display" : "Chemistry studies (set)"
          },
          {
            "code" : "18720-3",
            "display" : "Coagulation studies (set)"
          },
          {
            "code" : "18721-1",
            "display" : "Therapeutic drug monitoring studies (set)"
          },
          {
            "code" : "18722-9",
            "display" : "Fertility studies (set)"
          },
          {
            "code" : "18723-7",
            "display" : "Hematology studies (set)"
          },
          {
            "code" : "18724-5",
            "display" : "HLA studies (set)"
          },
          {
            "code" : "18725-2",
            "display" : "Microbiology studies (set)"
          },
          {
            "code" : "18727-8",
            "display" : "Serology studies (set)"
          },
          {
            "code" : "18728-6",
            "display" : "Toxicology studies (set)"
          },
          {
            "code" : "18729-4",
            "display" : "Urinalysis studies (set)"
          },
          {
            "code" : "18767-4",
            "display" : "Blood gas studies (set)"
          },
          {
            "code" : "18768-2",
            "display" : "Cell counts+Differential studies (set)"
          },
          {
            "code" : "18769-0",
            "display" : "Microbial susceptibility tests Set"
          },
          {
            "code" : "26435-8",
            "display" : "Molecular pathology studies (set)"
          },
          {
            "code" : "26437-4",
            "display" : "Chemistry challenge studies (set)"
          },
          {
            "code" : "26438-2",
            "display" : "Cytology studies (set)"
          },
          {
            "code" : "27898-6",
            "display" : "Pathology studies (set)"
          }
        ]
      }
    ]
  }
}

```
