# 2 Disposition - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Disposition**

## Example Observation: 2 Disposition



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-Disposition",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000034",
      "display" : "disposition"
    }],
    "text" : "Dispositionszeit"
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "valueDateTime" : "2016-12-10T12:11:00.000+01:00"
}

```
