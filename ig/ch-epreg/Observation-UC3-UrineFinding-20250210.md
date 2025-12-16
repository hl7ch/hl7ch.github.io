# UC 3: Bland (10.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Bland (10.02.2025)**

## Example Observation: UC 3: Bland (10.02.2025)

Language: de-CH

**status**: Final

**code**: Urine dipstick test finding (finding)

**subject**: [Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)](Patient-UC3-SophieDoppelherz.md)

**encounter**: [Encounter: extension = 1; status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-10 --> 2025-02-10](Encounter-UC3-EncounterMother20250210.md)

**effective**: 2025-02-10

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)

**value**: bland



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC3-UrineFinding-20250210",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "417597005",
        "display" : "Urine dipstick test finding (finding)"
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
  "valueString" : "bland"
}

```
