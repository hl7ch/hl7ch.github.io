# UC 1: 35 Weeks (23.01.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: 35 Weeks (23.01.2025)**

## Example Observation: UC 1: 35 Weeks (23.01.2025)

Language: de-CH

**status**: Final

**code**: Gestational age in days

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**encounter**: [Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --> 2025-01-23](Encounter-UC1-EncounterMother20250123.md)

**effective**: 2025-01-23

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

**value**: 245 day(Details: UCUM coded = 'd')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-GestationalAgeInDays-20250123",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "49052-4",
        "display" : "Gestational age in days"
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
  "valueQuantity" : {
    "value" : 245,
    "unit" : "day",
    "system" : "http://unitsofmeasure.org",
    "code" : "d"
  }
}

```
