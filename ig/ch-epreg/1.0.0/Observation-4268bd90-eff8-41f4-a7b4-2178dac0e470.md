# UC 2: 160/60 mmHg (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: 160/60 mmHg (27.03.2025)**

## Example Observation: UC 2: 160/60 mmHg (27.03.2025)

Language: de-CH

**status**: Final

**category**: Vital Signs

**code**: Blood pressure panel with all children optional

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**encounter**: [Untersuchung Mutter, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

> **component****code**:Systolic blood pressure**value**: 160 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')

> **component****code**:Diastolic blood pressure**value**: 60 millimeter of mercury(Details: UCUM codemm[Hg] = 'mm[Hg]')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "4268bd90-eff8-41f4-a7b4-2178dac0e470",
  "language" : "de-CH",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "85354-9",
        "display" : "Blood pressure panel with all children optional"
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
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 160,
        "unit" : "millimeter of mercury",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 60,
        "unit" : "millimeter of mercury",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    }
  ]
}

```
