# UC 1: Glucose 8.1 mmol/L (05.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Glucose 8.1 mmol/L (05.02.2025)**

## Example Observation: UC 1: Glucose 8.1 mmol/L (05.02.2025)

Language: de-CH

**status**: Final

**category**: Laboratory

**code**: Fasting glucose [Moles/volume] in Serum or Plasma

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**effective**: 2025-02-05

**performer**: [Organization Labor Pipette](Organization-UC1-LaborPipette.md)

**value**: 8.1 millimole per liter(Details: UCUM codemmol/L = 'mmol/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-GlucoseLab-20250205",
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
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "effectiveDateTime" : "2025-02-05",
  "performer" : [
    {
      "reference" : "Organization/UC1-LaborPipette"
    }
  ],
  "valueQuantity" : {
    "value" : 8.1,
    "unit" : "millimole per liter",
    "system" : "http://unitsofmeasure.org",
    "code" : "mmol/L"
  }
}

```
