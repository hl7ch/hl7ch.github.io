# CH-AllergyIntolerance-Condition-Usecase-3 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Condition-Usecase-3**

## Example Condition: CH-AllergyIntolerance-Condition-Usecase-3

Profile: [CH AllergyIntolerance Condition](StructureDefinition-ch-allergyintolerance-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Differential

**category**: Encounter Diagnosis

**severity**: Mild

**code**: Aspirin adverse reaction (disorder)

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CH-AllergyIntolerance-Condition-Usecase-3",
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
        "code" : "differential"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "encounter-diagnosis"
        }
      ]
    }
  ],
  "severity" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "255604002",
        "display" : "Mild"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "292044008",
        "display" : "Aspirin adverse reaction (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  }
}

```
