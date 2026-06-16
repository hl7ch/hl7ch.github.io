# Medication Concor - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Concor**

## Example MedicationStatement: Medication Concor



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationConcor",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"]
  },
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "MedConcor",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"]
    },
    "code" : {
      "coding" : [{
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680473110395",
        "display" : "Concor (Filmtabl 10 mg) Blist"
      },
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "C07AB07",
        "display" : "Bisoprolol"
      }],
      "text" : "Concor (Filmtabl 10 mg) Blist"
    },
    "form" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10221000",
        "display" : "Filmtablette"
      }]
    },
    "ingredient" : [{
      "itemCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "386869006",
          "display" : "Bisoprolol fumarat"
        }],
        "text" : "Bisoprolol fumarat"
      }
    }]
  }],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedConcor"
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "dosage" : [{
    "timing" : {
      "repeat" : {
        "boundsPeriod" : {
          "start" : "2025-12-19"
        },
        "when" : ["MORN"]
      }
    },
    "route" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "20053000",
        "display" : "Oral use"
      }]
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 1,
        "unit" : "Stk",
        "system" : "http://unitsofmeasure.org",
        "code" : "{Piece}"
      }
    }]
  }]
}

```
