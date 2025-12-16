# UC 1: GFR 54 mL/min (05.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: GFR 54 mL/min (05.02.2025)**

## Example Observation: UC 1: GFR 54 mL/min (05.02.2025)

Language: de-CH

**status**: Final

**category**: Laboratory

**code**: Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**effective**: 2025-02-05

**performer**: [Organization Labor Pipette](Organization-UC1-LaborPipette.md)

**value**: 54 milliliter per minute per 1.73 square meter(Details: UCUM codemL/min/1.73.m2 = 'mL/min/1.73.m2')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-GFR-20250205",
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
        "code" : "62238-1",
        "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M"
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
    "value" : 54,
    "unit" : "milliliter per minute per 1.73 square meter",
    "system" : "http://unitsofmeasure.org",
    "code" : "mL/min/1.73.m2"
  }
}

```
