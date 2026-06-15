# 1 Infusion - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Infusion**

## Example MedicationAdministration: 1 Infusion



## Resource Content

```json
{
  "resourceType" : "MedicationAdministration",
  "id" : "1-Infusion",
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "1-Fentanyl",
    "code" : {
      "coding" : [{
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680539870027",
        "display" : "FENTANYL Sintetica Inj Lös 0.5 mg/10ml"
      }],
      "text" : "FENTANYL Sintetica Inj Lös 0.5 mg/10ml"
    },
    "form" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "11201000",
        "display" : "Solution for injection"
      }],
      "text" : "Injektionslösung"
    },
    "amount" : {
      "numerator" : {
        "value" : 10,
        "unit" : "Ampule (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732978007"
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
          "code" : "373492002",
          "display" : "Fentanyl (substance)"
        }],
        "text" : "Fentanyl"
      },
      "strength" : {
        "numerator" : {
          "value" : 0.5,
          "unit" : "milligram",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        },
        "denominator" : {
          "value" : 10,
          "unit" : "milligram",
          "system" : "http://unitsofmeasure.org",
          "code" : "mL"
        }
      }
    }]
  }],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#1-Fentanyl"
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
        "code" : "20045000",
        "display" : "Intravenous use"
      }],
      "text" : "intravenöse Anwendung"
    },
    "method" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "0009",
        "display" : "Infusion"
      }]
    },
    "dose" : {
      "value" : 1,
      "unit" : "Ampule (unit of presentation)",
      "system" : "http://snomed.info/sct",
      "code" : "732978007"
    }
  }
}

```
