# UC 3: 155 /min (10.02.2025 - Child A) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: 155 /min (10.02.2025 - Child A)**

## Example Observation: UC 3: 155 /min (10.02.2025 - Child A)

Language: de-CH

**status**: Final

**code**: Fetal heart feature (observable entity)

**subject**: [Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: A)](Patient-UC3-ChildA.md)

**encounter**: [Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-10 --> 2025-02-10](Encounter-UC3-EncounterChildA20250210.md)

**effective**: 2025-02-10

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)

**value**: 155 /min



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC3-FetalHeartFeatureChildA-20250210",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "364620002",
        "display" : "Fetal heart feature (observable entity)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC3-ChildA"
  },
  "encounter" : {
    "reference" : "Encounter/UC3-EncounterChildA20250210"
  },
  "effectiveDateTime" : "2025-02-10",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
    }
  ],
  "valueString" : "155 /min"
}

```
