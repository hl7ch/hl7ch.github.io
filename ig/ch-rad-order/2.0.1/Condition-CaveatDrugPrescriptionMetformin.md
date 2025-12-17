# Caveat Drug Prescription Metformin - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Drug Prescription Metformin**

## Example Condition: Caveat Drug Prescription Metformin

Profile: [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md)

**CH RAD-Order Caveat Type**: [SNOMED CT: 1290126002](http://snomed.info/id/1290126002) (Drug therapy with explicit context (situation))

**CH RAD-Order Qualifier Value**: [SNOMED CT: 52101004](http://snomed.info/id/52101004) (Present (qualifier value))

**clinicalStatus**: Active

**category**: Problem List Item

**code**: Metformin (substance)

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CaveatDrugPrescriptionMetformin",
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
        "code" : "1290126002",
        "display" : "Drug therapy with explicit context (situation)"
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
        "code" : "372567009",
        "display" : "Metformin (substance)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  }
}

```
