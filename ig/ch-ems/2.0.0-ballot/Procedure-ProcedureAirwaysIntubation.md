# Intubation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intubation**

## Example Procedure: Intubation



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "ProcedureAirwaysIntubation",
  "status" : "completed",
  "category" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "232663008",
      "display" : "Airway procedure (procedure)"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "52765003",
      "display" : "Intubation (procedure)"
    }],
    "text" : "Intubation"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  }
}

```
