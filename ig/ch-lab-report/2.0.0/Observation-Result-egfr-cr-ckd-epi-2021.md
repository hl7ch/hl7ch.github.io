# Example of Result eGFR-cr CKD-EPI 2021 - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of Result eGFR-cr CKD-EPI 2021**

## Example Observation: Example of Result eGFR-cr CKD-EPI 2021

Profile: [CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md)

**status**: Final

**category**: Laboratory

**code**: Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

**effective**: 2024-04-23 11:24:26+0100

**performer**: [BeatBunsen](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**value**: 74 mL/min(Details: UCUM codemL/min = 'mL/min')

**note**: 

> 

All estimation formulas have their limitations: Only valid in steady state, i.e. not in acute renal failure, with abnormal muscle mass of the patient, with heavy meat consumption, dialysis and other conditions.


### ReferenceRanges

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Low** | **Age** | **Text** |
| * | 60 mL/min | 31-100 a | Die Formel ist nur bis 93 Jahre validiert. |



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Result-egfr-cr-ckd-epi-2021",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021"
    ]
  },
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "98979-8",
        "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:14fbf29b-5dac-483e-b543-15031f12344b",
    "display" : "Katarina Keller"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:12328339-f7d6-4bb6-80e4-89fd03ce5052",
      "display" : "BeatBunsen"
    }
  ],
  "valueQuantity" : {
    "value" : 74,
    "unit" : "mL/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "mL/min"
  },
  "note" : [
    {
      "text" : "All estimation formulas have their limitations: Only valid in steady state, i.e. not in acute renal failure, with abnormal muscle mass of the patient, with\nheavy meat consumption, dialysis and other conditions."
    }
  ],
  "referenceRange" : [
    {
      "low" : {
        "value" : 60,
        "unit" : "mL/min"
      },
      "age" : {
        "low" : {
          "value" : 31,
          "unit" : "a"
        },
        "high" : {
          "value" : 100,
          "unit" : "a"
        }
      },
      "text" : "Die Formel ist nur bis 93 Jahre validiert."
    }
  ]
}

```
