# UC 3: 120/75 mmHg (10.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: 120/75 mmHg (10.02.2025)**

## Example Observation: UC 3: 120/75 mmHg (10.02.2025)

Language: de-CH

**status**: Final

**category**: Vital Signs

**code**: Blood pressure panel with all children optional

**subject**: [Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)](Patient-UC3-SophieDoppelherz.md)

**encounter**: [Encounter: extension = 1; status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-10 --> 2025-02-10](Encounter-UC3-EncounterMother20250210.md)

**effective**: 2025-02-10

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)

> **component****code**:Systolic blood pressure**value**: 120 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')

> **component****code**:Diastolic blood pressure**value**: 75 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC3-BloodPressure-20250210",
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
    "reference" : "Patient/UC3-SophieDoppelherz"
  },
  "encounter" : {
    "reference" : "Encounter/UC3-EncounterMother20250210"
  },
  "effectiveDateTime" : "2025-02-10",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
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
        "value" : 75,
        "unit" : "millimeter of mercury",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    }
  ]
}

```
