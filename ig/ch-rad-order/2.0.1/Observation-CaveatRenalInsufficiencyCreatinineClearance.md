# Caveat Renal Insufficiency Creatinine Clearance - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Renal Insufficiency Creatinine Clearance**

## Example Observation: Caveat Renal Insufficiency Creatinine Clearance

Profile: [CH RAD-Order Creatinine Clearance Observation](StructureDefinition-ch-rad-order-creatinineclearance-observation.md)

**status**: Final

**code**: Creatinine renal clearance in Urine and Serum or Plasma collected for unspecified duration

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 55 ml/min(Details: UCUM codemL/min = 'mL/min')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CaveatRenalInsufficiencyCreatinineClearance",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "33558-8",
        "display" : "Creatinine renal clearance in Urine and Serum or Plasma collected for unspecified duration"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 55,
    "unit" : "ml/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "mL/min"
  }
}

```
