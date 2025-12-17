# Caveat Blood Coagulation Platelets - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Blood Coagulation Platelets**

## Example Observation: Caveat Blood Coagulation Platelets

Profile: [CH RAD-Order Platelets Observation](StructureDefinition-ch-rad-order-platelets-observation.md)

**status**: Final

**code**: Platelets [#/volume] in Blood

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 150000 10^9/L(Details: UCUM code10*9/uL = '10*9/uL')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CaveatBloodCoagulationPlatelets",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "26515-7",
        "display" : "Platelets [#/volume] in Blood"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 150000,
    "unit" : "10^9/L",
    "system" : "http://unitsofmeasure.org",
    "code" : "10*9/uL"
  }
}

```
