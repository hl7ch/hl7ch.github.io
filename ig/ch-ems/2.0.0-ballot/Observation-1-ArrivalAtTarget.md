# 1 Arrival at target - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Arrival at target**

## Example Observation: 1 Arrival at target



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-ArrivalAtTarget",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000039",
      "display" : "arrival at target"
    }],
    "text" : "Ankunftszeit am Zielort"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:54:00.000+01:00"
}

```
