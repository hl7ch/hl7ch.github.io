# UC2-MedicationStatement-AspirinCardio - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-MedicationStatement-AspirinCardio**

## Example MedicationStatement: UC2-MedicationStatement-AspirinCardio

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication ASPIRIN CARDIO Filmtabl 100 mg 28 Stk](Medication-UC2-Medication-AspirinCardio.md)

**subject**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**effective**: 2023-02-01 --> (ongoing)

**reasonReference**: [Condition CVA - Cerebrovascular accident](Condition-UC2-Condition-Schlaganfall.md)

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
  "id" : "UC2-MedicationStatement-AspirinCardio",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC2-Medication-AspirinCardio"
  },
  "subject" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "effectivePeriod" : {
    "start" : "2023-02-01"
  },
  "reasonReference" : [{
    "reference" : "Condition/UC2-Condition-Schlaganfall"
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
