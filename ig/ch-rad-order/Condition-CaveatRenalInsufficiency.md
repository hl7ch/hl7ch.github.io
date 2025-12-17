# Caveat Renal Insufficiency - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Renal Insufficiency**

## Example Condition: Caveat Renal Insufficiency

Profile: [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md)

**CH RAD-Order Caveat Type**: [SNOMED CT: 723188008](http://snomed.info/id/723188008) (Renal insufficiency (disorder))

**CH RAD-Order Qualifier Value**: [SNOMED CT: 52101004](http://snomed.info/id/52101004) (Present (qualifier value))

**clinicalStatus**: Active

**category**: Problem List Item

**code**: Renal insufficiency (disorder)

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

> **evidence****detail**:[Observation Creatinine renal clearance in Urine and Serum or Plasma collected for unspecified duration](Observation-CaveatRenalInsufficiencyCreatinineClearance.md)

> **evidence****detail**:[Observation Creatinine [Moles/volume] in Serum, Plasma or Blood](Observation-CaveatRenalInsufficiencyCreatinine.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CaveatRenalInsufficiency",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "723188008",
        "display" : "Renal insufficiency (disorder)"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "52101004",
        "display" : "Present (qualifier value)"
      }
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item",
          "display" : "Problem List Item"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "723188008",
        "display" : "Renal insufficiency (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "evidence" : [
    {
      "detail" : [
        {
          "reference" : "Observation/CaveatRenalInsufficiencyCreatinineClearance"
        }
      ]
    },
    {
      "detail" : [
        {
          "reference" : "Observation/CaveatRenalInsufficiencyCreatinine"
        }
      ]
    }
  ]
}

```
