# UC4-MedicationStatement-Bilol - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-MedicationStatement-Bilol**

## Example MedicationStatement: UC4-MedicationStatement-Bilol

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication BILOL Filmtabl 5 mg 30 Stk](Medication-UC4-Medication-Bilol.md)

**subject**: [Beat Frei (official) Male, DoB: 1968-07-22 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756014444444444444)](Patient-UC4-Patient-BeatFrei.md)

**effective**: 2024-02-01 --> (ongoing)

**reasonReference**: [Condition Aortic aneurysm](Condition-UC4-Condition-Aortenaneurysma.md)

> **dosage****sequence**: 1**timing**: Morning, Once**route**: zum Einnehmen

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 1 Tablette (Details: SNOMED CT code732936001 = '732936001') |




## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "UC4-MedicationStatement-Bilol",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC4-Medication-Bilol"
  },
  "subject" : {
    "reference" : "Patient/UC4-Patient-BeatFrei"
  },
  "effectivePeriod" : {
    "start" : "2024-02-01"
  },
  "reasonReference" : [{
    "reference" : "Condition/UC4-Condition-Aortenaneurysma"
  }],
  "dosage" : [{
    "sequence" : 1,
    "timing" : {
      "repeat" : {
        "when" : ["MORN"]
      }
    },
    "route" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "20053000"
      }],
      "text" : "zum Einnehmen"
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 1,
        "unit" : "Tablette",
        "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
        "code" : "732936001"
      }
    }]
  }]
}

```
