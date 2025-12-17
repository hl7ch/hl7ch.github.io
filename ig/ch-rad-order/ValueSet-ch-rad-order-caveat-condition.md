# Caveat Condition - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Condition**

## ValueSet: Caveat Condition (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-condition | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderCaveatCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Caveat Condition Value Set in the context of CH RAD-Order. 

 **References** 

* [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md)

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
  "id" : "ch-rad-order-caveat-condition",
  "url" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-condition",
  "version" : "2.0.1",
  "name" : "ChRadOrderCaveatCondition",
  "title" : "Caveat Condition",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:22:04+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for Caveat Condition Value Set in the context of CH RAD-Order.",
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
        "concept" : [
          {
            "code" : "64779008",
            "display" : "Blood coagulation disorder (disorder)"
          },
          {
            "code" : "723188008",
            "display" : "Renal insufficiency (disorder)"
          },
          {
            "code" : "19887002",
            "display" : "Claustrophobia (finding)"
          },
          {
            "code" : "879862001",
            "display" : "Body piercing (finding)"
          },
          {
            "code" : "34486009",
            "display" : "Hyperthyroidism (disorder)"
          },
          {
            "code" : "73211009",
            "display" : "Diabetes mellitus (disorder)"
          },
          {
            "code" : "366321006",
            "display" : "Finding of gravida (finding)"
          },
          {
            "code" : "293637006",
            "display" : "Allergy to contrast media (finding)"
          },
          {
            "code" : "372567009",
            "display" : "Metformin (substance)"
          },
          {
            "code" : "373254001",
            "display" : "Substance with beta adrenergic receptor antagonist mechanism of action (substance)"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "397578001"
          }
        ]
      }
    ]
  }
}

```
