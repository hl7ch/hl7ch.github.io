# 1 Arrival on scene - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Arrival on scene**

## Example Observation: 1 Arrival on scene



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-ArrivalOnScene",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000036",
      "display" : "arrival on scene"
    }],
    "text" : "Ankunftszeit am Einsatzort"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:17:00.000+01:00"
}

```
