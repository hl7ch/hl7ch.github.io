# Administration Fentanyl - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administration Fentanyl**

## Example MedicationAdministration: Administration Fentanyl



## Resource Content

```json
{
  "resourceType" : "MedicationAdministration",
  "id" : "MedAdminFentanyl",
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "Fentanyl",
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
    "reference" : "#Fentanyl"
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "context" : {
    "reference" : "Encounter/EncounterExample"
  },
  "effectiveDateTime" : "2020-02-03T14:32:00+01:00",
  "reasonCode" : [{
    "text" : "Schmerzbehandlung"
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
