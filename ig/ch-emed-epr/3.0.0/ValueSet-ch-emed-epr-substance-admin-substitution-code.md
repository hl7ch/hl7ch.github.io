# Substance Administration Substitution Codes - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Substance Administration Substitution Codes**

## ValueSet: Substance Administration Substitution Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-substance-admin-substitution-code | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEprActSubstanceAdminSubstitutionCode |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes in use to allow or deny medication substitution. 

 **References** 

* [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md)
* [PRE MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md)
* [PADV Changed MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md)
* [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md)
* [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md)
* [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md)
* [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md)
* [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md)
* [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md)

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
  "id" : "ch-emed-epr-substance-admin-substitution-code",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "url" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-substance-admin-substitution-code",
  "version" : "3.0.0",
  "name" : "CHEMEDEprActSubstanceAdminSubstitutionCode",
  "title" : "Substance Administration Substitution Codes",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Codes in use to allow or deny medication substitution.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-substanceAdminSubstitution",
        "concept" : [
          {
            "code" : "E",
            "display" : "equivalent"
          },
          {
            "code" : "N",
            "display" : "none"
          }
        ]
      }
    ]
  }
}

```
