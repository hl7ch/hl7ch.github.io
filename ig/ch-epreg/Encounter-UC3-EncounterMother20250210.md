# UC 3: Examination 10.02.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Examination 10.02.2025**

## Example Encounter: UC 3: Examination 10.02.2025

Language: de-CH

**CH EPREG Extension: Examination Sequence**: 1

**status**: Finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)](Patient-UC3-SophieDoppelherz.md)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md) |

**period**: 2025-02-10 --> 2025-02-10



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "UC3-EncounterMother20250210",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence",
      "valuePositiveInt" : 1
    }
  ],
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "subject" : {
    "reference" : "Patient/UC3-SophieDoppelherz"
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
  }
}

```
