# 1 Spray - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Spray**

## Example MedicationAdministration: 1 Spray



## Resource Content

```json
{
  "resourceType" : "MedicationAdministration",
  "id" : "1-Spray",
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "1-Nitrolingual",
    "code" : {
      "coding" : [{
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680405580012",
        "display" : "NITROLINGUAL Pumpspray"
      }],
      "text" : "NITROLINGUAL Pumpspray"
    },
    "form" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10309200",
        "display" : "Sublingual spray, solution"
      }],
      "text" : "Sublingualspray, Lösung"
    },
    "amount" : {
      "numerator" : {
        "value" : 1,
        "unit" : "Inhaler (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732997007"
      },
      "denominator" : {
        "value" : 1,
        "unit" : "Package - unit of product usage (qualifier value)",
        "system" : "http://snomed.info/sct",
        "code" : "1681000175101"
      }
    },
    "ingredient" : [{
      "itemCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "387404004",
          "display" : "Glyceryl trinitrate (substance)"
        }],
        "text" : "Nitroglycerin"
      },
      "strength" : {
        "numerator" : {
          "value" : 0.4,
          "unit" : "milligram",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Actuation (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732981002"
        }
      }
    }]
  }],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#1-Nitrolingual"
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "context" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:30:00.000+01:00",
  "reasonCode" : [{
    "text" : "Verdacht auf Myokardinfarkt"
  }],
  "dosage" : {
    "route" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "20067000",
        "display" : "Sublingual use"
      }],
      "text" : "Sublingual"
    },
    "method" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "0017",
        "display" : "Spraying"
      }]
    },
    "dose" : {
      "value" : 2,
      "unit" : "Actuation (unit of presentation)",
      "system" : "http://snomed.info/sct",
      "code" : "732981002"
    }
  }
}

```
