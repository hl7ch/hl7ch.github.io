# CH-AllergyIntolerance-Usecase-3 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-3**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-3

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Intolerance

**category**: Medication

**criticality**: Low Risk

**code**: Aspirin adverse reaction (disorder)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

> **reaction****AllergyIntolerance Certainty**:Confirmed**substance**:Aspirin (substance)**manifestation**:Tinnitus (finding),Itching of skin (finding)**severity**: Mild**exposureRoute**:Oral route (qualifier value)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-3",
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
  "type" : "intolerance",
  "category" : ["medication"],
  "criticality" : "low",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "292044008",
        "display" : "Aspirin adverse reaction (disorder)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "reaction" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/allergyintolerance-certainty",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/reaction-event-certainty",
                "code" : "confirmed",
                "display" : "Confirmed"
              }
            ]
          }
        }
      ],
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "387458008",
            "display" : "Aspirin (substance)"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "60862001",
              "display" : "Tinnitus (finding)"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "418363000",
              "display" : "Itching of skin (finding)"
            }
          ]
        }
      ],
      "severity" : "mild",
      "exposureRoute" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "26643006",
            "display" : "Oral route (qualifier value)"
          }
        ]
      }
    }
  ]
}

```
