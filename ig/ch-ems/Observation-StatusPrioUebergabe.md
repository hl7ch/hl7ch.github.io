# Status Priorität Übergabe - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Status Priorität Übergabe**

## Example Observation: Status Priorität Übergabe



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "StatusPrioUebergabe",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "77941-3",
      "display" : "Final patient acuity NEMSIS"
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
      "code" : "371244009",
      "display" : "Yellow color (qualifier value)"
    }],
    "text" : "gelb"
  }
}

```
