# UC 1: Bland (05.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Bland (05.02.2025)**

## Example Observation: UC 1: Bland (05.02.2025)

Language: de-CH

**status**: Final

**code**: Vagina feature (observable entity)

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**encounter**: [Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --> 2025-02-05](Encounter-UC1-EncounterMother20250205.md)

**effective**: 2025-02-05

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

**value**: bland



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-VaginaFeature-20250205",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "364230003",
        "display" : "Vagina feature (observable entity)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "encounter" : {
    "reference" : "Encounter/UC1-EncounterMother20250205"
  },
  "effectiveDateTime" : "2025-02-05",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
    }
  ],
  "valueString" : "bland"
}

```
