# UC 1: AP 109 U/L (05.02.2025) - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: AP 109 U/L (05.02.2025)**

## Example Observation: UC 1: AP 109 U/L (05.02.2025)

Language: de-CH

**status**: Final

**category**: Laboratory

**code**: Alkaline phosphatase [Enzymatic activity/volume] in Serum or Plasma

**subject**: [Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-UC1-KatrinKinderlieb.md)

**effective**: 2025-02-05

**performer**: [Organization Labor Pipette](Organization-UC1-LaborPipette.md)

**value**: 109 enzyme unit per liter(Details: UCUM codeU/L = 'U/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC1-AP-20250205",
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
        "code" : "6768-6",
        "display" : "Alkaline phosphatase [Enzymatic activity/volume] in Serum or Plasma"
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
    "value" : 109,
    "unit" : "enzyme unit per liter",
    "system" : "http://unitsofmeasure.org",
    "code" : "U/L"
  }
}

```
