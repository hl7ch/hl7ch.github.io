# Body Height 176 cm - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body Height 176 cm**

## Example Observation: Body Height 176 cm

Profile: [CH RAD-Order Body Height Observation](StructureDefinition-ch-rad-order-bodyheight-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Body height

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**effective**: 2019-04-01 10:10:00+0000

**value**: 176 cm(Details: UCUM codecm = 'cm')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BodyHeight",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyheight-observation"
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
        "code" : "8302-2",
        "display" : "Body height"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "effectiveDateTime" : "2019-04-01T10:10:00.000+00:00",
  "valueQuantity" : {
    "value" : 176,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  }
}

```
