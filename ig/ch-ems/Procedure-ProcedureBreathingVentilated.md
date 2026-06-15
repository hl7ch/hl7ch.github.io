# Ventilated - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ventilated**

## Example Procedure: Ventilated



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "ProcedureBreathingVentilated",
  "status" : "completed",
  "category" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "53950000",
      "display" : "Respiratory therapy (procedure)"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "707765006",
      "display" : "On ventilator (qualifier value)"
    }],
    "text" : "beatmet"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  }
}

```
