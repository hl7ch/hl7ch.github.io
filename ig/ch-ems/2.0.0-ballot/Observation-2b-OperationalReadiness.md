# 2b Operational readiness - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2b Operational readiness**

## Example Observation: 2b Operational readiness



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2b-OperationalReadiness",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000042",
      "display" : "operational readiness"
    }],
    "text" : "Zeit Einsatzbereit"
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "valueDateTime" : "2016-12-10T13:40:00.000+01:00"
}

```
