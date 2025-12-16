# CH-AllergyIntolerance-Usecase-7 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-7**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-7

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Environment

**criticality**: Low Risk

**code**: Allergy to Hevea brasiliensis latex protein (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

> **reaction****AllergyIntolerance Certainty**:Confirmed**AllergyIntolerance ExposureDescription**: Works in ICU**substance**:Hevea brasiliensis latex (substance)**manifestation**:Eruption of skin (disorder),Itching of skin (finding)**severity**: Mild**exposureRoute**:Topical route (qualifier value)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-7",
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
  "category" : ["environment"],
  "criticality" : "low",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "1003755004",
        "display" : "Allergy to Hevea brasiliensis latex protein (finding)"
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
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription",
          "valueString" : "Works in ICU"
        }
      ],
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "1003751008",
            "display" : "Hevea brasiliensis latex (substance)"
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
            "code" : "6064005",
            "display" : "Topical route (qualifier value)"
          }
        ]
      }
    }
  ]
}

```
