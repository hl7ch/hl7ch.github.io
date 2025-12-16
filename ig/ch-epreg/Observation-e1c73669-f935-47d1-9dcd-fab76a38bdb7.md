# UC 2: 65 kg (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: 65 kg (27.03.2025)**

## Example Observation: UC 2: 65 kg (27.03.2025)

Language: de-CH

**status**: Final

**category**: Vital Signs

**code**: Body weight

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**encounter**: [Untersuchung Mutter, 27.03.2025](Bundle-UC2-Document.md#urn-uuid-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: 65 kilogram(Details: UCUM codekg = 'kg')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "e1c73669-f935-47d1-9dcd-fab76a38bdb7",
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
        "code" : "29463-7",
        "display" : "Body weight"
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
    "value" : 65,
    "unit" : "kilogram",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  }
}

```
