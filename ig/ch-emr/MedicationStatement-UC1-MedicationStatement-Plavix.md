# UC1-MedicationStatement-Plavix - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-MedicationStatement-Plavix**

## Example MedicationStatement: UC1-MedicationStatement-Plavix

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication PLAVIX Tabl 75 mg 28 Stk](Medication-UC1-Medication-Plavix.md)

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**effective**: 2015-06-01 --> (ongoing)

**reasonCode**: Prophylaxe Schlaganfall

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
  "id" : "UC1-MedicationStatement-Plavix",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC1-Medication-Plavix"
  },
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "effectivePeriod" : {
    "start" : "2015-06-01"
  },
  "reasonCode" : [{
    "text" : "Prophylaxe Schlaganfall"
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
