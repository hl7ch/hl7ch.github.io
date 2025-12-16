# UC 3: Examination 10.02.2025 - Child A - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Examination 10.02.2025 - Child A**

## Example Encounter: UC 3: Examination 10.02.2025 - Child A

Language: de-CH

**status**: Finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Anonymous Patient (no stated gender), DoB Unknown ( Patient internal identifier: A)](Patient-UC3-ChildA.md)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md) |

**period**: 2025-02-10 --> 2025-02-10

**partOf**: [Encounter: extension = 1; status = finished; class = ambulatory (ActCode#AMB); period = 2025-02-10 --> 2025-02-10](Encounter-UC3-EncounterMother20250210.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "UC3-EncounterChildA20250210",
  "language" : "de-CH",
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "subject" : {
    "reference" : "Patient/UC3-ChildA"
  },
  "participant" : [
    {
      "individual" : {
        "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
      }
    }
  ],
  "period" : {
    "start" : "2025-02-10",
    "end" : "2025-02-10"
  },
  "partOf" : {
    "reference" : "Encounter/UC3-EncounterMother20250210"
  }
}

```
