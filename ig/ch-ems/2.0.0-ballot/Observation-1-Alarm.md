# 1 Alarm - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Alarm**

## Example Observation: 1 Alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Alarm",
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
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:09:00.000+01:00"
}

```
