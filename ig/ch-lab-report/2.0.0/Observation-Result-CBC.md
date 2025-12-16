# Result CBC Panel - Blood by Automated count, Results in sliced component - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Result CBC Panel - Blood by Automated count, Results in sliced component**

## Example Observation: Result CBC Panel - Blood by Automated count, Results in sliced component

Profile: [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component](StructureDefinition-ch-lab-observation-cbc.md)

**status**: Final

**category**: Laboratory

**code**: CBC panel - Blood by Automated count

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

**effective**: 2024-04-23 11:24:26+0100

**performer**: [BeatBunsen](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

> **component****code**:Leukocytes [#/volume] in Blood by Automated count**value**: 2.9 10*9/L(Details: UCUM code10*9/L = '10*9/L')

> **component****code**:Erythrocytes [#/volume] in Blood by Automated count**value**: 4.35 10*12/L(Details: UCUM code10*12/L = '10*12/L')

> **component****code**:Hemoglobin [Mass/volume] in Blood**value**: 107 g/L(Details: UCUM codeg/dL = 'g/dL')

> **component****code**:Hematocrit [Volume Fraction] of Blood by Automated count**value**: 33 %(Details: UCUM code% = '%')

> **component****code**:MCV [Entitic mean volume] in Red Blood Cells by Automated count**value**: 75.9 fL(Details: UCUM codefL = 'fL')

> **component****code**:MCH [Entitic mass] by Automated count**value**: 24.6 pg(Details: UCUM codepg = 'pg')

> **component****code**:MCHC [Entitic Mass/volume] in Red Blood Cells by Automated count**value**: 324 g/L(Details: UCUM codeg/dL = 'g/dL')

> **component****code**:Platelets [#/volume] in Blood by Automated count**value**: 113 10*9/L(Details: UCUM code10^9/L = '10^9/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Result-CBC",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc"
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
        "code" : "58410-2"
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
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "6690-2"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 2.9,
        "unit" : "10*9/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "10*9/L"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "789-8"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 4.35,
        "unit" : "10*12/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "10*12/L"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "718-7"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 107,
        "unit" : "g/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "g/dL"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "4544-3"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 33,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "787-2"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 75.9,
        "unit" : "fL",
        "system" : "http://unitsofmeasure.org",
        "code" : "fL"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "785-6"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 24.6,
        "unit" : "pg",
        "system" : "http://unitsofmeasure.org",
        "code" : "pg"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "786-4"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 324,
        "unit" : "g/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "g/dL"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "777-3"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 113,
        "unit" : "10*9/L",
        "system" : "http://unitsofmeasure.org",
        "code" : "10^9/L"
      }
    }
  ]
}

```
