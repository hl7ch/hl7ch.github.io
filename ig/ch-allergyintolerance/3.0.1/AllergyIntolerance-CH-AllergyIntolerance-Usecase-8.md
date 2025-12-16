# CH-AllergyIntolerance-Usecase-8 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-8**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-8

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: No known allergy (situation)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-8",
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
        "code" : "active",
        "display" : "Active"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-verification",
        "code" : "confirmed",
        "display" : "Confirmed"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "716186003",
        "display" : "No known allergy (situation)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  }
}

```
