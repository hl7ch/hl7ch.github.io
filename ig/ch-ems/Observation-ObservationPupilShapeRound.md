# Pupil Round - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pupil Round**

## Example Observation: Pupil Round



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationPupilShapeRound",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "225591008",
      "display" : "Finding of pupil shape (finding)"
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
      "code" : "421356009",
      "display" : "Pupil round (finding)"
    }],
    "text" : "Runde Pupille"
  }
}

```
