# Patch - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patch**

## Example Procedure: Patch



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "ProcedureWoundTreatment",
  "status" : "completed",
  "category" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "442460002",
      "display" : "Procedure on wound (procedure)"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "386028003",
      "display" : "Surgical patch (physical object)"
    }],
    "text" : "Wundschnellverband"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  }
}

```
