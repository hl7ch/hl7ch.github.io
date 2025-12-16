# CH-AllergyIntolerance-Usecase-5 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-5**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-5

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Biologic

**criticality**: Low Risk

**code**: Allergy to cat dander (finding)

**patient**: [Monika Wegmüller Female, DoB: 1943-05-15 ( Medical record number)](Patient-MonikaWegmueller.md)

> **reaction****AllergyIntolerance Certainty**:Confirmed**AllergyIntolerance ExposureDescription**: Animal shelter**substance**:Cat dander (substance)**manifestation**:Eruption of skin (disorder)**severity**: Mild



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-5",
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
  "category" : ["biologic"],
  "criticality" : "low",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "232346004",
        "display" : "Allergy to cat dander (finding)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/MonikaWegmueller"
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
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription",
          "valueString" : "Animal shelter"
        }
      ],
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "260152009",
            "display" : "Cat dander (substance)"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "271807003",
              "display" : "Eruption of skin (disorder)"
            }
          ]
        }
      ],
      "severity" : "mild"
    }
  ]
}

```
