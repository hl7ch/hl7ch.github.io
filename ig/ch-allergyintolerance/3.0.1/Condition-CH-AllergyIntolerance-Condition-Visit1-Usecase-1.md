# CH-AllergyIntolerance-Condition-Visit1-Usecase-1 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Condition-Visit1-Usecase-1**

## Example Condition: CH-AllergyIntolerance-Condition-Visit1-Usecase-1

Profile: [CH AllergyIntolerance Condition](StructureDefinition-ch-allergyintolerance-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Unconfirmed

**category**: Problem List Item

**severity**: Moderate (severity modifier) (qualifier value)

**code**: Urticaria (disorder)

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

**onset**: 2021-12



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CH-AllergyIntolerance-Condition-Visit1-Usecase-1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition"
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
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "unconfirmed"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item"
        }
      ]
    }
  ],
  "severity" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "6736007",
        "display" : "Moderate (severity modifier) (qualifier value)"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "126485001",
        "display" : "Urticaria (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "onsetDateTime" : "2021-12"
}

```
