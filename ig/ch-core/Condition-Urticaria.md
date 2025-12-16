# Urticaria - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Urticaria**

## Example Condition: Urticaria

Profile: [CH Core Condition](StructureDefinition-ch-core-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Unconfirmed

**category**: Problem List Item

**severity**: Moderate (severity modifier) (qualifier value)

**code**: Urticaria (disorder)

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-ElisabethBroennimannByBFH.md)

**onset**: 2021-12



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "Urticaria",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition"
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
