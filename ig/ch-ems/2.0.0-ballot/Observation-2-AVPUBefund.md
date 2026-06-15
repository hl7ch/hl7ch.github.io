# 2 AVPU Befund - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 AVPU Befund**

## Example Observation: 2 AVPU Befund



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-AVPUBefund",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "11454-6",
      "display" : "Responsiveness assessment at First encounter"
    }]
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "V",
      "display" : "Reaktion nur bei lauter Ansprache"
    }],
    "text" : "Reaktion nur bei lauter Ansprache"
  }
}

```
