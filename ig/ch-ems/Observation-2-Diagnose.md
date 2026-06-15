# 2 Diagnose - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Diagnose**

## Example Observation: 2 Diagnose



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-Diagnose",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "2931005",
      "display" : "Probable diagnosis (contextual qualifier) (qualifier value)"
    }],
    "text" : "Verdachtsdiagnose"
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "performer" : [{
    "reference" : "Practitioner/1-SaniPetraMuster"
  }],
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://fhir.de/CodeSystem/bfarm/icd-10-gm",
      "code" : "I63",
      "display" : "Hirninfarkt"
    }]
  }
}

```
