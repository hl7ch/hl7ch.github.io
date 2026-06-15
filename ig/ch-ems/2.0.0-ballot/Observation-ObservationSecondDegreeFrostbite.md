# Second-degree Frostbite - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Second-degree Frostbite**

## Example Observation: Second-degree Frostbite



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationSecondDegreeFrostbite",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "370977006",
      "display" : "Frostbite (disorder)"
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
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000144",
      "display" : "second-degree frostbite"
    }],
    "text" : "Erfrierungen 2. Grades"
  }
}

```
