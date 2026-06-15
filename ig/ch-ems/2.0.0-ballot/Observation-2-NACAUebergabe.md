# 2 NACA Uebergabe - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 NACA Uebergabe**

## Example Observation: 2 NACA Uebergabe



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-NACAUebergabe",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "88076-5",
      "display" : "Injury severity score NACA"
    }]
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
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
