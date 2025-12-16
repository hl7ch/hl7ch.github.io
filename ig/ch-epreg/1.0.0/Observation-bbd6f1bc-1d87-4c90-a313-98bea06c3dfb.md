# UC 2: Glucose Strip (26.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Glucose Strip (26.03.2025)**

## Example Observation: UC 2: Glucose Strip (26.03.2025)

Language: de-CH

**status**: Final

**code**: Glucose [Moles/volume] in Blood by Automated test strip

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**encounter**: [Untersuchung Mutter, 26.03.2025](Bundle-UC2-Document.md#urn-uuid-8e89c502-964f-4234-9728-540d881b0380)

**effective**: 2025-03-26

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: 4.7 millimole per liter(Details: UCUM codemmol/L = 'mmol/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "bbd6f1bc-1d87-4c90-a313-98bea06c3dfb",
  "language" : "de-CH",
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "72516-8",
        "display" : "Glucose [Moles/volume] in Blood by Automated test strip"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
    "display" : "Fabienne Babyglück"
  },
  "encounter" : {
    "reference" : "urn:uuid:8e89c502-964f-4234-9728-540d881b0380",
    "display" : "Untersuchung Mutter, 26.03.2025"
  },
  "effectiveDateTime" : "2025-03-26",
  "performer" : [
    {
      "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
      "display" : "Tanja Allesgut @ Geburtsklinik"
    }
  ],
  "valueQuantity" : {
    "value" : 4.7,
    "unit" : "millimole per liter",
    "system" : "http://unitsofmeasure.org",
    "code" : "mmol/L"
  }
}

```
