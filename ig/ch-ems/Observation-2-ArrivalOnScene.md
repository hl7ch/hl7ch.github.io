# 2 Arrival on scene - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Arrival on scene**

## Example Observation: 2 Arrival on scene



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-ArrivalOnScene",
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
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:17:00.000+01:00"
}

```
