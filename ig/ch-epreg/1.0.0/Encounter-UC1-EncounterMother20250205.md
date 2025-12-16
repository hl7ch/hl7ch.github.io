# UC 1: Examination 05.02.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Examination 05.02.2025**

## Example Encounter: UC 1: Examination 05.02.2025

Language: de-CH

**status**: Finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [PractitionerRole Arzt/Ärztin](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md) |

**period**: 2025-02-05 --> 2025-02-05



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "UC1-EncounterMother20250205",
  "language" : "de-CH",
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "subject" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
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
  }
}

```
