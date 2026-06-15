# 1 NACA Uebergabe - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 NACA Uebergabe**

## Example Observation: 1 NACA Uebergabe



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-NACAUebergabe",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "88076-5",
      "display" : "Injury severity score NACA"
    }]
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "III",
      "display" : "mässige bis schwere Störung"
    }],
    "text" : "mässige bis schwere Störung"
  }
}

```
