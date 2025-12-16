# UC 2: Glucose 3.9 mmol/L (27.03.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Glucose 3.9 mmol/L (27.03.2025)**

## Example Observation: UC 2: Glucose 3.9 mmol/L (27.03.2025)

Language: de-CH

**status**: Final

**category**: Laboratory

**code**: Fasting glucose [Moles/volume] in Serum or Plasma

**subject**: [Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-76c2c5aa-3d7f-438d-b23d-56ce827695fd)

**effective**: 2025-03-27

**performer**: [Tanja Allesgut @ Geburtsklinik](Bundle-UC2-Document.md#urn-uuid-89029102-999c-4b69-a836-e4dbfbd55527)

**value**: 3.9 millimole per liter(Details: UCUM codemmol/L = 'mmol/L')

**interpretation**: Low



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "b9145a94-ea12-479b-a031-b07d4ac9f297",
  "language" : "de-CH",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "14771-0",
        "display" : "Fasting glucose [Moles/volume] in Serum or Plasma"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:76c2c5aa-3d7f-438d-b23d-56ce827695fd",
    "display" : "Fabienne Babyglück"
  },
  "effectiveDateTime" : "2025-03-27",
  "performer" : [
    {
      "reference" : "urn:uuid:89029102-999c-4b69-a836-e4dbfbd55527",
      "display" : "Tanja Allesgut @ Geburtsklinik"
    }
  ],
  "valueQuantity" : {
    "value" : 3.9,
    "unit" : "millimole per liter",
    "system" : "http://unitsofmeasure.org",
    "code" : "mmol/L"
  },
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "L",
          "display" : "Low"
        }
      ]
    }
  ]
}

```
