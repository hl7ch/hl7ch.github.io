# Bradycardia - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bradycardia**

## Example Observation: Bradycardia



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationHeartRateBradycardia",
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "vital-signs",
      "display" : "Vital Signs"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "8867-4",
      "display" : "Heart rate"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "dataAbsentReason" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
      "code" : "unknown",
      "display" : "Unknown"
    }]
  },
  "interpretation" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "48867003",
      "display" : "Bradycardia (finding)"
    }],
    "text" : "Bradykardie"
  }],
  "method" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "113011001",
      "display" : "Palpation (procedure)"
    }],
    "text" : "Palpation"
  }
}

```
