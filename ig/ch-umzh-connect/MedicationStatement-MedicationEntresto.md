# Medication Entresto - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Entresto**

## Example MedicationStatement: Medication Entresto



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationEntresto",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"]
  },
  "contained" : [{
    "resourceType" : "Medication",
    "id" : "MedEntresto",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"]
    },
    "code" : {
      "coding" : [{
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680656730044",
        "display" : "Entresto (Filmtabl 200 mg) Blist"
      },
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "C09DX04",
        "display" : "Valsartan und Sacubitril"
      }],
      "text" : "Entresto (Filmtabl 200 mg) Blist"
    },
    "form" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10221000",
        "display" : "Filmtablette"
      }],
      "text" : "Filmtablette"
    },
    "ingredient" : [{
      "itemCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "716072000",
          "display" : "Sacubitril"
        }]
      }
    },
    {
      "itemCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "386876001",
          "display" : "Valsartan"
        }]
      }
    }]
  }],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedEntresto"
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
        "when" : ["MORN", "NOON", "EVE"]
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
