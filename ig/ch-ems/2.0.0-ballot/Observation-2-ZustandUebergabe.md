# 2 Zustand Uebergabe - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Zustand Uebergabe**

## Example Observation: 2 Zustand Uebergabe



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-ZustandUebergabe",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "75527-2",
      "display" : "Vital status at discharge"
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
      "system" : "http://snomed.info/sct",
      "code" : "385425000",
      "display" : "Improved (qualifier value)"
    }],
    "text" : "verbessert"
  }
}

```
