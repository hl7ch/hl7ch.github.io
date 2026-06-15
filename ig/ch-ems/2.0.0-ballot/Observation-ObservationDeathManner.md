# Natural Death - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Natural Death**

## Example Observation: Natural Death



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationDeathManner",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "419620001",
      "display" : "Death (event)"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "38605008",
      "display" : "Natural death (event)"
    }],
    "text" : "natürlicher Todesfall"
  }
}

```
