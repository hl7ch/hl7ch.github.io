# Cardiac Arrest Befund - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cardiac Arrest Befund**

## Example Observation: Cardiac Arrest Befund



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CardiacArrestBefund",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "410429000",
      "display" : "Cardiac arrest (disorder)"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "valueBoolean" : true
}

```
