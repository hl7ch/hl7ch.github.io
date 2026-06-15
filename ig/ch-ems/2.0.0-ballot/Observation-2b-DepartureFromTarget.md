# 2b Departure from target - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2b Departure from target**

## Example Observation: 2b Departure from target



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2b-DepartureFromTarget",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000041",
      "display" : "departure from target"
    }],
    "text" : "Abfahrtszeit vom Zielort"
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "valueDateTime" : "2016-12-10T13:25:00.000+01:00"
}

```
