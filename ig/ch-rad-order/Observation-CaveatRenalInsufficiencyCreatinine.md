# Caveat Renal Insufficiency Creatinine - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Renal Insufficiency Creatinine**

## Example Observation: Caveat Renal Insufficiency Creatinine

Profile: [CH RAD-Order Creatinine Observation](StructureDefinition-ch-rad-order-creatinine-observation.md)

**status**: Final

**code**: Creatinine [Moles/volume] in Serum, Plasma or Blood

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 90 µmol/l(Details: UCUM codeumol/L = 'umol/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CaveatRenalInsufficiencyCreatinine",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "77140-2",
        "display" : "Creatinine [Moles/volume] in Serum, Plasma or Blood"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 90,
    "unit" : "µmol/l",
    "system" : "http://unitsofmeasure.org",
    "code" : "umol/L"
  }
}

```
