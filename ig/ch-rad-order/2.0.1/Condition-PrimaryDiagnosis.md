# Primary Diagnosis - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Primary Diagnosis**

## Example Condition: Primary Diagnosis

Profile: [CH RAD-Order Diagnosis Condition](StructureDefinition-ch-rad-order-diagnosis-condition.md)

**clinicalStatus**: Active

**category**: Problem List Item

**code**: Primary Diagnosis

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "PrimaryDiagnosis",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
    ]
  },
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
    "text" : "Primary Diagnosis"
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  }
}

```
