# Caveat Blood Coagulation INR - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caveat Blood Coagulation INR**

## Example Observation: Caveat Blood Coagulation INR

Profile: [CH RAD-Order INR Observation](StructureDefinition-ch-rad-order-INR-observation.md)

**status**: Final

**code**: INR in Blood by Coagulation assay

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 2.3 INR(Details: UCUM code{INR} = '{INR}')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CaveatBloodCoagulationINR",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "34714-6",
        "display" : "INR in Blood by Coagulation assay"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 2.3,
    "unit" : "INR",
    "system" : "http://unitsofmeasure.org",
    "code" : "{INR}"
  }
}

```
