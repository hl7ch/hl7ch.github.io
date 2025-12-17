# CH RAD-Order Diagnosis Condition - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Diagnosis Condition**

## Resource Profile: CH RAD-Order Diagnosis Condition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderDiagnosisCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Diagnosis Condition resource in the context of CH RAD-Order. 

**Usages:**

* Refer to this Profile: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* Examples for this Profile: [Condition/PrimaryDiagnosis](Condition-PrimaryDiagnosis.md), [Condition/SecondaryDiagnosis1](Condition-SecondaryDiagnosis1.md) and [Condition/SecondaryDiagnosis2](Condition-SecondaryDiagnosis2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-diagnosis-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-diagnosis-condition.csv), [Excel](StructureDefinition-ch-rad-order-diagnosis-condition.xlsx), [Schematron](StructureDefinition-ch-rad-order-diagnosis-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-diagnosis-condition",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition",
  "version" : "2.0.1",
  "name" : "ChRadOrderDiagnosisCondition",
  "title" : "CH RAD-Order Diagnosis Condition",
  "status" : "active",
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
  "description" : "Definition for the Diagnosis Condition resource in the context of CH RAD-Order.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition",
        "short" : "CH RAD-Order Diagnosis Condition"
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "short" : "Problem List Item",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
              "code" : "problem-list-item"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Condition.code.text",
        "path" : "Condition.code.text",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Condition.subject",
        "path" : "Condition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
