# Observation-eGFR-CKD-EPI-2009-cr - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation-eGFR-CKD-EPI-2009-cr**

## Example Observation: Observation-eGFR-CKD-EPI-2009-cr

Profile: [CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md)

**identifier**: `http://example.org/Labor-Pipette/labvalues`/1304-03720-eGFR_CKD_EPI-cr

**status**: Final

**category**: Laboratory

**code**: Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Marc Mustermann](Bundle-LabResultReport-1-tvt.md#urn-uuid-017e8e32-2f3b-4bef-baf1-92c7278a7048)

**interpretation**: interpretation of results should be assigned based upon the level of kindey function

**note**: 

> 

All estimation formulas have their limitations: Only valid in steady state, i.e. not in acute renal failure, with abnormal muscle mass of the patient, with heavy meat consumption, dialysis and other conditions.


> **component****code**:Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M among black population**value**: >60 mL/min/1.73m2(Details: UCUM codemL/min = 'mL/min')

### ReferenceRanges

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Low** | **AppliesTo** | **Age** |
| * | 60 mL/min/1.73m2(Details: UCUM codemL/min = 'mL/min') | black/african-american | 18-? yrs |


> **component****code**:Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M among non black population**value**: >60 mL/min/1.73m2(Details: UCUM codemL/min = 'mL/min')

### ReferenceRanges

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Low** | **AppliesTo** | **Age** |
| * | 60 mL/min/1.73m2(Details: UCUM codemL/min = 'mL/min') | non-black/african-american | 18-? yrs |




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Observation-eGFR-CKD-EPI-2009-cr",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Pipette/labvalues",
      "value" : "1304-03720-eGFR_CKD_EPI-cr"
    }
  ],
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
        "code" : "62238-1",
        "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI)/1.73 sq M"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:6b8a0365-5022-403b-a5a5-8d8680d701ef",
    "display" : "Hans Guggindieluft"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "issued" : "2024-04-24T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:017e8e32-2f3b-4bef-baf1-92c7278a7048",
      "display" : "Marc Mustermann"
    }
  ],
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "N",
          "display" : "Normal"
        }
      ],
      "text" : "interpretation of results should be assigned based upon the level of kindey function"
    }
  ],
  "note" : [
    {
      "text" : "All estimation formulas have their limitations: Only valid in steady state, i.e. not in acute renal failure, with abnormal muscle mass of the patient, with\nheavy meat consumption, dialysis and other conditions."
    }
  ],
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "88293-6"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 60,
        "comparator" : ">",
        "unit" : "mL/min/1.73m2",
        "system" : "http://unitsofmeasure.org",
        "code" : "mL/min"
      },
      "referenceRange" : [
        {
          "low" : {
            "value" : 60,
            "unit" : "mL/min/1.73m2",
            "system" : "http://unitsofmeasure.org",
            "code" : "mL/min"
          },
          "appliesTo" : [
            {
              "text" : "black/african-american"
            }
          ],
          "age" : {
            "low" : {
              "value" : 18,
              "unit" : "yrs",
              "system" : "http://unitsofmeasure.org",
              "code" : "a"
            }
          }
        }
      ]
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "88294-4"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 60,
        "comparator" : ">",
        "unit" : "mL/min/1.73m2",
        "system" : "http://unitsofmeasure.org",
        "code" : "mL/min"
      },
      "referenceRange" : [
        {
          "low" : {
            "value" : 60,
            "unit" : "mL/min/1.73m2",
            "system" : "http://unitsofmeasure.org",
            "code" : "mL/min"
          },
          "appliesTo" : [
            {
              "text" : "non-black/african-american"
            }
          ],
          "age" : {
            "low" : {
              "value" : 18,
              "unit" : "yrs",
              "system" : "http://unitsofmeasure.org",
              "code" : "a"
            }
          }
        }
      ]
    }
  ]
}

```
