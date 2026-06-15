# Blood Pressure without value - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood Pressure without value**

## Example Observation: Blood Pressure without value



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationBloodPressure",
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
      "code" : "85354-9",
      "display" : "Blood pressure panel with all children optional"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "method" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "22762002",
      "display" : "Non-invasive (qualifier value)"
    }],
    "text" : "nicht invasiv"
  },
  "component" : [{
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "8480-6",
        "display" : "Systolic blood pressure"
      }]
    },
    "dataAbsentReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
        "code" : "unknown",
        "display" : "Unknown"
      }]
    }
  },
  {
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "8462-4",
        "display" : "Diastolic blood pressure"
      }]
    },
    "dataAbsentReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
        "code" : "unknown",
        "display" : "Unknown"
      }]
    }
  }]
}

```
