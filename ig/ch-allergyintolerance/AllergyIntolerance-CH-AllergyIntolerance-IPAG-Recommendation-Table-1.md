# CH-AllergyIntolerance-IPAG-Recommendation-Table-1 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-IPAG-Recommendation-Table-1**

## Example AllergyIntolerance: CH-AllergyIntolerance-IPAG-Recommendation-Table-1

**clinicalStatus**: Active

**verificationStatus**: Unconfirmed

**type**: Allergy

**category**: Medication

**criticality**: Low Risk

**code**: Allergy to penicillin (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

**onset**: 2019-01-06

**lastOccurrence**: 2019-01-05

**note**: 

> 

Prick-Test positiv


> **reaction****AllergyIntolerance Location**:Popliteal fossa structure (body structure)**AllergyIntolerance Duration**: No display for Duration (value: 24; unit: h; system: http://unitsofmeasure.org; code: h)**AllergyIntolerance Exposure Date**: 2019-01-05 18:00:00+0100**AllergyIntolerance Exposure Duration**: No display for Duration (value: 10; unit: min; system: http://unitsofmeasure.org; code: min)**AllergyIntolerance Certainty**:Likely**AllergyIntolerance ExposureDescription**: taking 1000 mg of Amoxicillin**AllergyIntolerance Management**: antihistamine**substance**:Amoxicillin (substance)**manifestation**:Nausea, vomiting and diarrhea,Itching of skin (finding)**description**: Itching of Skin during 24hours, 3 times vomitus**onset**: 2019-01-05**severity**: Moderate**note**:
> 

respiratory tract infection whilst taking





## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-IPAG-Recommendation-Table-1",
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
        "code" : "unconfirmed",
        "display" : "Unconfirmed"
      }
    ]
  },
  "type" : "allergy",
  "category" : ["medication"],
  "criticality" : "low",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "91936005",
        "display" : "Allergy to penicillin (finding)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "onsetDateTime" : "2019-01-06",
  "lastOccurrence" : "2019-01-05",
  "note" : [
    {
      "text" : "Prick-Test positiv"
    }
  ],
  "reaction" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-location",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "32361000",
                "display" : "Popliteal fossa structure (body structure)"
              }
            ]
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/allergyintolerance-duration",
          "valueDuration" : {
            "value" : 24,
            "unit" : "h",
            "system" : "http://unitsofmeasure.org",
            "code" : "h"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-exposureDate",
          "valueDateTime" : "2019-01-05T18:00:00+01:00"
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-exposureDuration",
          "valueDuration" : {
            "value" : 10,
            "unit" : "min",
            "system" : "http://unitsofmeasure.org",
            "code" : "min"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/allergyintolerance-certainty",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/reaction-event-certainty",
                "code" : "likely",
                "display" : "Likely"
              }
            ]
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription",
          "valueString" : "taking 1000 mg of Amoxicillin"
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/openEHR-management",
          "valueString" : "antihistamine"
        }
      ],
      "substance" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "372687004",
            "display" : "Amoxicillin (substance)"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "2919008",
              "display" : "Nausea, vomiting and diarrhea"
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
      "description" : "Itching of Skin during 24hours, 3 times vomitus",
      "onset" : "2019-01-05",
      "severity" : "moderate",
      "note" : [
        {
          "text" : "respiratory tract infection whilst taking"
        }
      ]
    }
  ]
}

```
