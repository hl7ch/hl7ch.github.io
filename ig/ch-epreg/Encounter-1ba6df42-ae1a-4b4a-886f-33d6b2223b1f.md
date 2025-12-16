# UC 2: Examination 27.03.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Examination 27.03.2025**

## Example Encounter: UC 2: Examination 27.03.2025

Language: de-CH

**status**: Finished

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527) |

**period**: 2025-03-27 --> (ongoing)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
  "language" : "de-CH",
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP",
    "display" : "inpatient encounter"
  },
  "subject" : {
    "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
    "display" : "Fabienne Babyglück"
  },
  "participant" : [
    {
      "individual" : {
        "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
        "display" : "Tanja Allesgut @ Geburtsklinik"
      }
    }
  ],
  "period" : {
    "start" : "2025-03-27"
  }
}

```
