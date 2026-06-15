# 1 Rollout - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Rollout**

## Example Observation: 1 Rollout



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Rollout",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000035",
      "display" : "rollout"
    }],
    "text" : "Ausrückzeit"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:13:00.000+01:00"
}

```
