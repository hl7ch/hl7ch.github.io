# UC 1: 120/80 mmHg (23.01.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: 120/80 mmHg (23.01.2025)**

## Example Observation: UC 1: 120/80 mmHg (23.01.2025)

Language: de-CH

**status**: Final

**category**: Vital Signs

**code**: Blood pressure panel with all children optional

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**encounter**: [Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --> 2025-01-23](Encounter-UC1-EncounterMother20250123.md)

**effective**: 2025-01-23

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

> **component****code**:Systolic blood pressure**value**: 120 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')

> **component****code**:Diastolic blood pressure**value**: 80 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-BloodPressure-20250123",
  "language" : "de-CH",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "85354-9",
        "display" : "Blood pressure panel with all children optional"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "encounter" : {
    "reference" : "Encounter/UC1-EncounterMother20250123"
  },
  "effectiveDateTime" : "2025-01-23",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
    }
  ],
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 120,
        "unit" : "millimeter of mercury",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 80,
        "unit" : "millimeter of mercury",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    }
  ]
}

```
