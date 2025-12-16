# UC 2: Breech Presentation (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Breech Presentation (27.03.2025)**

## Example Observation: UC 2: Breech Presentation (27.03.2025)

Language: de-CH

**status**: Final

**code**: Position of fetus (observable entity)

**subject**: [Kind](Bundle-UC2-Document.md#urn-uuid-111d5e66-f17e-4369-90c6-9382e566040e)

**encounter**: [Untersuchung Kind, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-833fd8f2-b75f-4dba-990f-6c46aa468d51)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: Steisslage



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "a5c14df0-3dca-4530-a22a-072af14178b1",
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
    "reference" : "urn:uuid:111d5e66-f17e-4369-90c6-9382e566040e",
    "display" : "Kind"
  },
  "encounter" : {
    "reference" : "urn:uuid:833fd8f2-b75f-4dba-990f-6c46aa468d51",
    "display" : "Untersuchung Kind, 27.03.2025"
  },
  "effectiveDateTime" : "2025-03-27",
  "performer" : [
    {
      "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
      "display" : "Tanja Allesgut @ Geburtsklinik"
    }
  ],
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "6096002",
        "display" : "Breech presentation (finding)"
      }
    ],
    "text" : "Steisslage"
  }
}

```
