# CH-AllergyIntolerance-Condition-Usecase-7 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Condition-Usecase-7**

## Example Condition: CH-AllergyIntolerance-Condition-Usecase-7

Profile: [CH AllergyIntolerance Condition](StructureDefinition-ch-allergyintolerance-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**severity**: Moderate (severity modifier) (qualifier value)

**code**: Allergy to Hevea brasiliensis latex protein (finding)

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CH-AllergyIntolerance-Condition-Usecase-7",
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
        "code" : "confirmed"
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
        "code" : "1003755004",
        "display" : "Allergy to Hevea brasiliensis latex protein (finding)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  }
}

```
