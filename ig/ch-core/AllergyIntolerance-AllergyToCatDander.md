# AllergyToCatDander - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AllergyToCatDander**

## Example AllergyIntolerance: AllergyToCatDander

Profile: [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Biologic

**criticality**: Low Risk

**code**: Allergy to cat dander (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-ElisabethBroennimannByBFH.md)

> **reaction****AllergyIntolerance Certainty**:Confirmed**AllergyIntolerance ExposureDescription**: Animal shelter**substance**:Cat dander (substance)**manifestation**:Eruption of skin (disorder)**severity**: Mild



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "AllergyToCatDander",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance"
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
