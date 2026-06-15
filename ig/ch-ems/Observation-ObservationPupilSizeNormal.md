# Normal Pupil Size - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Normal Pupil Size**

## Example Observation: Normal Pupil Size



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationPupilSizeNormal",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "301938007",
      "display" : "Finding of size of pupil (finding)"
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
      "code" : "17621005",
      "display" : "Normal"
    }],
    "text" : "normal"
  }
}

```
