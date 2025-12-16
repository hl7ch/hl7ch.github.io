# UC 1.1: Coronary Heart Disease - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Coronary Heart Disease**

## Example Condition: UC 1.1: Coronary Heart Disease

Profile: [CH IPS Condition](StructureDefinition-ch-ips-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**severity**: Moderate (severity modifier) (qualifier value)

**code**: Coronary arteriosclerosis (disorder)

**subject**: [Monika Wegmüller Female, DoB: 1943-05-15](Patient-MonikaWegmueller.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "CoronaryHeartDisease",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
    ]
  },
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active",
        "display" : "Active"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "confirmed",
        "display" : "Confirmed"
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
        "code" : "53741008",
        "display" : "Coronary arteriosclerosis (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  }
}

```
