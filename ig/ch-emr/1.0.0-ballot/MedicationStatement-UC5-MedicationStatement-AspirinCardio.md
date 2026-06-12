# UC5-MedicationStatement-AspirinCardio - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC5-MedicationStatement-AspirinCardio**

## Example MedicationStatement: UC5-MedicationStatement-AspirinCardio

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication ASPIRIN CARDIO Filmtabl 100 mg 28 Stk](Medication-UC5-Medication-AspirinCardio.md)

**subject**: [Anna Meier (official) Female, DoB: 1972-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015555555555555)](Patient-UC5-Patient-AnnaMeier.md)

**effective**: 2018-06-01 --> (ongoing)

**reasonReference**: [Condition Chronic ischemic heart disease (disorder)](Condition-UC5-Condition-KoronareHerzkrankheit.md)

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
  "id" : "UC5-MedicationStatement-AspirinCardio",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC5-Medication-AspirinCardio"
  },
  "subject" : {
    "reference" : "Patient/UC5-Patient-AnnaMeier"
  },
  "effectivePeriod" : {
    "start" : "2018-06-01"
  },
  "reasonReference" : [{
    "reference" : "Condition/UC5-Condition-KoronareHerzkrankheit"
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
