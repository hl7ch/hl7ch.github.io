# EX-MedicationStatement (Metformin) - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-MedicationStatement (Metformin)**

## Example MedicationStatement: EX-MedicationStatement (Metformin)

Profile: [CH IPS MedicationStatement](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medicationstatement.html)

**status**: Active

**medication**: [Medication METFORMIN Axapharm Filmtabl 500 mg (Blister 50 Stk)](Medication-EX-Metformin.md)

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**effective**: 2020-03-03 --> (ongoing)

**reasonCode**: Diabetes

> **dosage****patientInstruction**: Unzerkaut während oder nach den Mahlzeiten mit ausreichend Flüssigkeit einnehmen**timing**: Morning, Evening, Once**route**: zum Einnehmen

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 1 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |




## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "EX-MedicationStatement",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/EX-Metformin"
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "effectivePeriod" : {
    "start" : "2020-03-03"
  },
  "reasonCode" : [{
    "text" : "Diabetes"
  }],
  "dosage" : [{
    "patientInstruction" : "Unzerkaut während oder nach den Mahlzeiten mit ausreichend Flüssigkeit einnehmen",
    "timing" : {
      "repeat" : {
        "boundsPeriod" : {
          "start" : "2020-03-03"
        },
        "when" : ["MORN", "EVE"]
      }
    },
    "route" : {
      "coding" : [{
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "20053000",
        "display" : "Oral use"
      }],
      "text" : "zum Einnehmen"
    },
    "doseAndRate" : [{
      "doseQuantity" : {
        "value" : 1,
        "unit" : "Tablet (unit of presentation)",
        "system" : "http://snomed.info/sct",
        "code" : "732936001"
      }
    }]
  }]
}

```
