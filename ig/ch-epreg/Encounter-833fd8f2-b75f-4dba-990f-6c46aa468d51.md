# UC 2: Examination 27.03.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Examination 27.03.2025**

## Example Encounter: UC 2: Examination 27.03.2025

Language: de-CH

**status**: Finished

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Kind](Bundle-UC2-Document.md#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e)

### Participants

| | |
| :--- | :--- |
| - | **Individual** |
| * | [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527) |

**period**: 2025-03-27 --> (ongoing)

**partOf**: [Untersuchung Mutter, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "833fd8f2-b75f-4dba-990f-6c46aa468d51",
  "language" : "de-CH",
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP",
    "display" : "inpatient encounter"
  },
  "subject" : {
    "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
    "display" : "Kind"
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
  },
  "partOf" : {
    "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
    "display" : "Untersuchung Mutter, 27.03.2025"
  }
}

```
