# CH-AllergyIntolerance-Usecase-6 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-6**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-6

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Food

**criticality**: High Risk

**code**: Allergy to peanut (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

### Reactions

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Substance** | **Manifestation** | **Severity** | **ExposureRoute** |
| * | Arachis oil (substance) | Anaphylaxis (disorder) | Severe | Oral route (qualifier value) |



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-6",
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
  "category" : ["food"],
  "criticality" : "high",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "91935009",
        "display" : "Allergy to peanut (finding)"
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
            "code" : "417889008",
            "display" : "Arachis oil (substance)"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "39579001",
              "display" : "Anaphylaxis (disorder)"
            }
          ]
        }
      ],
      "severity" : "severe",
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
