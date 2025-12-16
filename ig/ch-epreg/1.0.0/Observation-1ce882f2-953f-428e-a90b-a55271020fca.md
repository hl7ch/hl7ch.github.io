# UC 2: Heartburn (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Heartburn (27.03.2025)**

## Example Observation: UC 2: Heartburn (27.03.2025)

Language: de-CH

**status**: Final

**code**: I am bothered by reflux or heartburn in the past 7 days [FACIT]

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**encounter**: [Untersuchung Mutter, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: true



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1ce882f2-953f-428e-a90b-a55271020fca",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "70387-6",
        "display" : "I am bothered by reflux or heartburn in the past 7 days [FACIT]"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
    "display" : "Fabienne Babyglück"
  },
  "encounter" : {
    "reference" : "urn:uuid:1ba6df42-ae1a-4b4a-886f-33d6b2223b1f",
    "display" : "Untersuchung Mutter, 27.03.2025"
  },
  "effectiveDateTime" : "2025-03-27",
  "performer" : [
    {
      "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
      "display" : "Tanja Allesgut @ Geburtsklinik"
    }
  ],
  "valueBoolean" : true
}

```
