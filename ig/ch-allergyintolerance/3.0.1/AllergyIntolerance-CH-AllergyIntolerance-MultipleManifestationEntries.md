# CH-AllergyIntolerance-MultipleManifestationEntries - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-MultipleManifestationEntries**

## Example AllergyIntolerance: CH-AllergyIntolerance-MultipleManifestationEntries

Profile: [CH AllergyIntolerance](StructureDefinition-ch-allergyintolerance.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Food

**criticality**: High Risk

**code**: Allergy to shrimp

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

> **reaction****substance**:Shrimp**manifestation**:Dyspnea,Lip swelling,Nausea**description**: Reaction to shrimps consumption.**onset**: 2023-07-21**severity**: Severe



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-MultipleManifestationEntries",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
    ]
  },
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
  "category" : ["food"],
  "criticality" : "high",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "419972009",
        "display" : "Allergy to shrimp"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "reaction" : [
    {
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "278840001",
            "display" : "Shrimp"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "267036007",
              "display" : "Dyspnea"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "699376002",
              "display" : "Lip swelling"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "422587007",
              "display" : "Nausea"
            }
          ]
        }
      ],
      "description" : "Reaction to shrimps consumption.",
      "onset" : "2023-07-21",
      "severity" : "severe"
    }
  ]
}

```
