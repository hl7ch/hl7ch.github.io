# CH-AllergyIntolerance-Usecase-2 - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-AllergyIntolerance-Usecase-2**

## Example AllergyIntolerance: CH-AllergyIntolerance-Usecase-2

**Abatement**: 2022-02-07

**clinicalStatus**: Active

**verificationStatus**: Unconfirmed

**type**: Allergy

**category**: Medication

**criticality**: Low Risk

**code**: Allergy to thiazide (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

### Reactions

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Substance** | **Manifestation** | **Severity** | **ExposureRoute** |
| * | Hydrochlorothiazide (substance) | Urticaria (disorder) | Moderate | Oral route (qualifier value) |



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "CH-AllergyIntolerance-Usecase-2",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/allergyintolerance-abatement",
      "valueDateTime" : "2022-02-07"
    }
  ],
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
        "code" : "860765003",
        "display" : "Allergy to thiazide (finding)"
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
            "code" : "387525002",
            "display" : "Hydrochlorothiazide (substance)"
          }
        ]
      },
      "manifestation" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "126485001",
              "display" : "Urticaria (disorder)"
            }
          ]
        }
      ],
      "severity" : "moderate",
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
