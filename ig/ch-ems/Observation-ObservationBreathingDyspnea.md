# Dyspnea - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dyspnea**

## Example Observation: Dyspnea



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationBreathingDyspnea",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "301282008",
      "display" : "Finding of respiration (finding)"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "267036007",
      "display" : "Dyspnea (finding)"
    }],
    "text" : "Dispnoe"
  }
}

```
