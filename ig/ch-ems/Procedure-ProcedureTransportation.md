# Transportation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transportation**

## Example Procedure: Transportation



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "ProcedureTransportation",
  "status" : "completed",
  "category" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "229824005",
      "display" : "Positioning patient (procedure)"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000103",
      "display" : "laying"
    }],
    "text" : "liegend"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "usedCode" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "156009",
      "display" : "Spine board, device (physical object)"
    }],
    "text" : "Rettungsbrett"
  },
  {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "code" : "1000085",
      "display" : "vacuum pillow"
    }],
    "text" : "Vakuumkissen"
  }]
}

```
