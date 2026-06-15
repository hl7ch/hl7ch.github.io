# 1 Arrival Patient - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Arrival Patient**

## Example Observation: 1 Arrival Patient



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-ArrivalPatient",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000037",
      "display" : "arrival patient"
    }],
    "text" : "Ankunftszeit beim Patienten"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:22:00.000+01:00"
}

```
