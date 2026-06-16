# Discharge Medication Aspirin - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Discharge Medication Aspirin**

## Example MedicationStatement: Discharge Medication Aspirin

Profile: [CH Core MedicationStatement](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-medicationstatement.html)

**status**: Active

**medication**: [Medication Acetylsalicylic acid](Medication-MedAspirin.md)

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

> **dosage****timing**: Morning, Once**route**: Oral use

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 1 Stk (Details: UCUM code{Piece} = '{Piece}') |




## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationAspirin",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/MedAspirin"
  },
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "dosage" : [{
    "timing" : {
      "repeat" : {
        "boundsPeriod" : {
          "start" : "2026-01-20"
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
