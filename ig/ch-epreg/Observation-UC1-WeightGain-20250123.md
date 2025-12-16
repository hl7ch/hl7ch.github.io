# UC 1: 11.1 kg (23.01.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: 11.1 kg (23.01.2025)**

## Example Observation: UC 1: 11.1 kg (23.01.2025)

Language: de-CH

**status**: Final

**code**: Measured gestational weight gain (observable entity)

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**encounter**: [Encounter: extension = 7; status = finished; class = ambulatory (ActCode#AMB); period = 2025-01-23 --> 2025-01-23](Encounter-UC1-EncounterMother20250123.md)

**effective**: 2025-01-23

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

**value**: 11.1 kilogram(Details: UCUM codekg = 'kg')

**derivedFrom**: [Observation Body weight](Observation-UC1-BodyWeight-20250123.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-WeightGain-20250123",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "816161008",
        "display" : "Measured gestational weight gain (observable entity)"
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
    "value" : 11.1,
    "unit" : "kilogram",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  },
  "derivedFrom" : [
    {
      "reference" : "Observation/UC1-BodyWeight-20250123"
    }
  ]
}

```
