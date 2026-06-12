# UC3-MedicationStatement-Marcoumar - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-MedicationStatement-Marcoumar**

## Example MedicationStatement: UC3-MedicationStatement-Marcoumar

Profile: [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md)

**status**: Active

**medication**: [Medication MARCOUMAR Tabl 3 mg Plast Fl 25 Stk](Medication-UC3-Medication-Marcoumar.md)

**subject**: [Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)](Patient-UC3-Patient-LaraKeller.md)

**effective**: 2010-04-01 --> (ongoing)

**reasonCode**: Thromboembolieprophylaxe nach mechanischem Klappenersatz

> **dosage****sequence**: 1**text**: Dosierung gemäss separater INR-gesteuerter Verordnung.**timing**: Morning, Once**route**: zum Einnehmen

### DoseAndRates

| | |
| :--- | :--- |
| - | **Dose[x]** |
| * | 1 Tablette (Details: SNOMED CT code732936001 = '732936001') |




## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "UC3-MedicationStatement-Marcoumar",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"]
  },
  "status" : "active",
  "medicationReference" : {
    "reference" : "Medication/UC3-Medication-Marcoumar"
  },
  "subject" : {
    "reference" : "Patient/UC3-Patient-LaraKeller"
  },
  "effectivePeriod" : {
    "start" : "2010-04-01"
  },
  "reasonCode" : [{
    "text" : "Thromboembolieprophylaxe nach mechanischem Klappenersatz"
  }],
  "dosage" : [{
    "sequence" : 1,
    "text" : "Dosierung gemäss separater INR-gesteuerter Verordnung.",
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
