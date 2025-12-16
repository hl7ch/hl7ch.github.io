# CH-AllergyIntolerance-MultipleReactionEntries - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-MultipleReactionEntries**

## Example AllergyIntolerance: CH-AllergyIntolerance-MultipleReactionEntries

Profile: [CH AllergyIntolerance](StructureDefinition-ch-allergyintolerance.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Medication

**criticality**: High Risk

**code**: Allergy to penicillin

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

> **reaction****substance**:Penicillin**manifestation**:Eruption of skin**description**: Initial reaction to penicillin during first exposure.**onset**: 2023-01-15**severity**: Moderate

> **reaction****substance**:Penicillin**manifestation**:Dyspnea,Lip swelling**description**: Second reaction to penicillin during subsequent exposure.**onset**: 2023-06-10**severity**: Severe



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-MultipleReactionEntries",
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
  "type" : "allergy",
  "category" : ["medication"],
  "criticality" : "high",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "91936005",
        "display" : "Allergy to penicillin"
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
            "code" : "764146007",
            "display" : "Penicillin"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "271807003",
              "display" : "Eruption of skin"
            }
          ]
        }
      ],
      "description" : "Initial reaction to penicillin during first exposure.",
      "onset" : "2023-01-15",
      "severity" : "moderate"
    },
    {
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "764146007",
            "display" : "Penicillin"
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
        }
      ],
      "description" : "Second reaction to penicillin during subsequent exposure.",
      "onset" : "2023-06-10",
      "severity" : "severe"
    }
  ]
}

```
