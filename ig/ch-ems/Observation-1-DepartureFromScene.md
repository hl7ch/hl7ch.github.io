# 1 Departure from scene - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Departure from scene**

## Example Observation: 1 Departure from scene



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-DepartureFromScene",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000038",
      "display" : "departure from scene"
    }],
    "text" : "Abfahrtszeit vom Einsatzort"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:48:00.000+01:00"
}

```
