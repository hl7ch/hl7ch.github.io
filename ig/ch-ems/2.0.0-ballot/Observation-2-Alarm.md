# 2 Alarm - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Alarm**

## Example Observation: 2 Alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-Alarm",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000033",
      "display" : "alarm"
    }],
    "text" : "Alarmierungszeit"
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:09:00.000+01:00"
}

```
