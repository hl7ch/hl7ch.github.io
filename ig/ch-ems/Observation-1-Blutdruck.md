# 1 Blutdruck - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Blutdruck**

## Example Observation: 1 Blutdruck



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Blutdruck",
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
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "bodySite" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "368209003",
      "display" : "Right upper arm structure (body structure)"
    }],
    "text" : "rechter Arm"
  },
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
    "valueQuantity" : {
      "value" : 120,
      "unit" : "millimeter of mercury",
      "system" : "http://unitsofmeasure.org",
      "code" : "mm[Hg]"
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
    "valueQuantity" : {
      "value" : 80,
      "unit" : "millimeter of mercury",
      "system" : "http://unitsofmeasure.org",
      "code" : "mm[Hg]"
    }
  }]
}

```
