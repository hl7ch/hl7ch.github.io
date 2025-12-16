# UC 1: Examination 05.02.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Examination 05.02.2025**

## Example Encounter: UC 1: Examination 05.02.2025

Language: de-CH

**status**: Finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)](Patient-UC1-Child.md)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md) |

**period**: 2025-02-05 --> 2025-02-05

**partOf**: [Encounter: status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-05 --> 2025-02-05](Encounter-UC1-EncounterMother20250205.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "UC1-EncounterChild20250205",
  "language" : "de-CH",
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "subject" : {
    "reference" : "Patient/UC1-Child"
  },
  "participant" : [
    {
      "individual" : {
        "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
      }
    }
  ],
  "period" : {
    "start" : "2025-02-05",
    "end" : "2025-02-05"
  },
  "partOf" : {
    "reference" : "Encounter/UC1-EncounterMother20250205"
  }
}

```
