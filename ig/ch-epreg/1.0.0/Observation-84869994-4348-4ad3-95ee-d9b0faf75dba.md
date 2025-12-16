# UC 2: 32 Weeks (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: 32 Weeks (27.03.2025)**

## Example Observation: UC 2: 32 Weeks (27.03.2025)

Language: de-CH

**status**: Final

**code**: Gestational age in days

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**encounter**: [Untersuchung Mutter, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: 224 day(Details: UCUM coded = 'd')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "84869994-4348-4ad3-95ee-d9b0faf75dba",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "49052-4",
        "display" : "Gestational age in days"
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
  "valueQuantity" : {
    "value" : 224,
    "unit" : "day",
    "system" : "http://unitsofmeasure.org",
    "code" : "d"
  }
}

```
