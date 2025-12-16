# UC 1: Vertex Presentation (05.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Vertex Presentation (05.02.2025)**

## Example Observation: UC 1: Vertex Presentation (05.02.2025)

Language: de-CH

**status**: Final

**code**: Position of fetus (observable entity)

**subject**: [Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)](Patient-UC1-Child.md)

**encounter**: [Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --> 2025-02-05](Encounter-UC1-EncounterChild20250205.md)

**effective**: 2025-02-05

**performer**: [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)

**value**: Schädellage



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-FetalPosition-20250205",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "364607000",
        "display" : "Position of fetus (observable entity)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/UC1-Child"
  },
  "encounter" : {
    "reference" : "Encounter/UC1-EncounterChild20250205"
  },
  "effectiveDateTime" : "2025-02-05",
  "performer" : [
    {
      "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
    }
  ],
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "70028003",
        "display" : "Vertex presentation (finding)"
      }
    ],
    "text" : "Schädellage"
  }
}

```
