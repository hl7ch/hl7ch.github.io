# Caveat Body Piercing - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Body Piercing**

## Example Condition: Caveat Body Piercing

Profile: [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md)

**CH RAD-Order Caveat Type**: [SNOMED CT: 879862001](http://snomed.info/id/879862001) (Body piercing (finding))

**CH RAD-Order Qualifier Value**: [SNOMED CT: 52101004](http://snomed.info/id/52101004) (Present (qualifier value))

**clinicalStatus**: Active

**category**: Problem List Item

**code**: Body piercing (finding)

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CaveatBodyPiercing",
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
        "code" : "879862001",
        "display" : "Body piercing (finding)"
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
        "code" : "879862001",
        "display" : "Body piercing (finding)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  }
}

```
