# Body Height 176 cm - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body Height 176 cm**

## Example Observation: Body Height 176 cm

Profile: [CH eTOC Body Height Observation](StructureDefinition-ch-etoc-bodyheight-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Body height

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**effective**: 2019-04-01

**value**: 176 cm(Details: UCUM codecm = 'cm')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BodyHeight",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation"
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
        "code" : "8302-2"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  },
  "effectiveDateTime" : "2019-04-01",
  "valueQuantity" : {
    "value" : 176,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  }
}

```
