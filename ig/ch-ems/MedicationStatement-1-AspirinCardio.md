# 1 Aspirin Cardio - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Aspirin Cardio**

## Example MedicationStatement: 1 Aspirin Cardio



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "1-AspirinCardio",
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "1-Aspirin",
    "code" : {
      "text" : "Aspirin Cardio 100"
    }
  }],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#1-Aspirin"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "context" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "effectivePeriod" : {
    "start" : "2012-05"
  },
  "reasonCode" : [{
    "text" : "Herzvorfall vor 4 Jahren"
  }],
  "dosage" : [{
    "timing" : {
      "repeat" : {
        "when" : ["MORN"]
      }
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 1,
        "unit" : "Tablet (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732936001"
      }
    }]
  }]
}

```
