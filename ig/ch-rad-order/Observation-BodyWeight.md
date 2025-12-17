# Body Weight 99 kg - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body Weight 99 kg**

## Example Observation: Body Weight 99 kg

Profile: [CH RAD-Order Body Weight Observation](StructureDefinition-ch-rad-order-bodyweight-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Body weight

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 99 kg(Details: UCUM codekg = 'kg')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BodyWeight",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyweight-observation"
    ]
  },
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "29463-7",
        "display" : "Body weight"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 99,
    "unit" : "kg",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  }
}

```
