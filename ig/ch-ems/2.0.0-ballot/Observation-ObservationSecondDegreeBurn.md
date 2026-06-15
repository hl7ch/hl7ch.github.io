# Second-degree Burn - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Second-degree Burn**

## Example Observation: Second-degree Burn



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationSecondDegreeBurn",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "125666000",
      "display" : "Burn (disorder)"
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
      "code" : "1000148",
      "display" : "second-degree burn"
    }],
    "text" : "Verbrennung 2. Grades"
  }
}

```
