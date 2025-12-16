# Body Weight 99 kg - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body Weight 99 kg**

## Example Observation: Body Weight 99 kg

Profile: [CH eTOC Body Weight Observation](StructureDefinition-ch-etoc-bodyweight-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Body weight

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**effective**: 2019-04-01

**value**: 99 kg(Details: UCUM codekg = 'kg')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BodyWeight",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyweight-observation"
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
        "code" : "29463-7"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  },
  "effectiveDateTime" : "2019-04-01",
  "valueQuantity" : {
    "value" : 99,
    "unit" : "kg",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  }
}

```
