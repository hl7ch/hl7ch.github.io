# Taking Triatec - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Taking Triatec**

## Example MedicationStatement: Taking Triatec



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedStatTriatec",
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "Triatec",
    "code" : {
      "text" : "TRIATEC Tabl 2.5 mg"
    },
    "ingredient" : [{
      "itemCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "386872004",
          "display" : "Ramipril (substance)"
        }],
        "text" : "Ramipril"
      }
    }]
  }],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#Triatec"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "context" : {
    "reference" : "Encounter/EncounterExample"
  },
  "dateAsserted" : "2016-11-29T11:00:00+01:00",
  "reasonCode" : [{
    "text" : "Bluthochdruck"
  }],
  "dosage" : [{
    "timing" : {
      "repeat" : {
        "when" : ["MORN"]
      }
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 0.5,
        "unit" : "Tablet (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732936001"
      }
    }]
  }]
}

```
