# 1 Diagnose - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Diagnose**

## Example Observation: 1 Diagnose



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Diagnose",
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
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "performer" : [{
    "reference" : "Practitioner/1-NotarztPierreUrgentiste"
  }],
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://fhir.de/CodeSystem/bfarm/icd-10-gm",
      "code" : "I21.0",
      "display" : "ST elevation (STEMI) myocardial infarction of anterior wall"
    }]
  }
}

```
