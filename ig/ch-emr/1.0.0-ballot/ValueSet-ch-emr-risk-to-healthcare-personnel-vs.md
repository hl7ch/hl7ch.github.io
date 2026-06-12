# Risk to Healthcare Personnel - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risk to Healthcare Personnel**

## ValueSet: Risk to Healthcare Personnel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-risk-to-healthcare-personnel-vs | *Version*:1.0.0-ballot |
| Active as of 2026-06-01 | *Computable Name*:ChEmrRiskToHealthcarePersonnelVS |
| **Copyright/Legal**: CC0-1.0 | |

 
SNOMED CT concepts that may indicate a risk to healthcare personnel emanating from the patient. Includes selected children of the Infectious disease hierarchy whose descendants are person-to-person transmissible — viral, bacterial, sexually transmitted, respiratory, healthcare-associated and parasitic disease — plus an aggressive behavior finding. Branches that do not pose a meaningful staff-transmission risk (anatomical-location infections, post-procedural / device-associated infections, sepsis variants, congenital and perinatal infections, plant / Microspora / Oomycota / fish infections, and the like) are excluded. 

 **References** 

* [CH Emergency Record Risk to Healthcare Personnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md)

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
  "id" : "ch-emr-risk-to-healthcare-personnel-vs",
  "url" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-risk-to-healthcare-personnel-vs",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrRiskToHealthcarePersonnelVS",
  "title" : "Risk to Healthcare Personnel",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-01",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "SNOMED CT concepts that may indicate a risk to healthcare personnel emanating from the patient.\nIncludes selected children of the Infectious disease hierarchy whose descendants are person-to-person transmissible — viral, bacterial, sexually transmitted, respiratory, healthcare-associated and parasitic disease — plus an aggressive behavior finding.\nBranches that do not pose a meaningful staff-transmission risk (anatomical-location infections, post-procedural / device-associated infections, sepsis variants, congenital and perinatal infections, plant / Microspora / Oomycota / fish infections, and the like) are excluded.",
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
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "34014006"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "87628006"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "275498002"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "408678008"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "402139000"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "187214007"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "71571008"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "61372001"
      }]
    }]
  }
}

```
