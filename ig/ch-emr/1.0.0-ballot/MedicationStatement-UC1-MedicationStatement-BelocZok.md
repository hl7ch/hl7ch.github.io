# UC1-MedicationStatement-BelocZok - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-MedicationStatement-BelocZok**

## Example MedicationStatement: UC1-MedicationStatement-BelocZok

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication BELOC ZOK Ret Tabl 50 mg 100 Stk](Medication-UC1-Medication-BelocZok.md)

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**effective**: 2016-01-01 --> (ongoing)

**reasonReference**: [Condition High blood pressure](Condition-UC1-Condition-Hypertonie.md)

> **dosage****sequence**: 1**timing**: Morning, Once**route**: zum Einnehmen

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 1 Tablette (Details: SNOMED CT code732936001 = '732936001') |


> **dosage****sequence**: 2**timing**: Evening, Once

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 0.5 Halbe Tablette (Details: SNOMED CT code732936001 = '732936001') |




## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "UC1-MedicationStatement-BelocZok",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC1-Medication-BelocZok"
  },
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "effectivePeriod" : {
    "start" : "2016-01-01"
  },
  "reasonReference" : [{
    "reference" : "Condition/UC1-Condition-Hypertonie"
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
  },
  {
    "sequence" : 2,
    "timing" : {
      "repeat" : {
        "when" : ["EVE"]
      }
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 0.5,
        "unit" : "Halbe Tablette",
        "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
        "code" : "732936001"
      }
    }]
  }]
}

```
