# Dipotassium EDTA (ethylenediaminetetraacetate) - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dipotassium EDTA (ethylenediaminetetraacetate)**

## Example Substance: Dipotassium EDTA (ethylenediaminetetraacetate)

Profile: [CH LAB-Report Additive Substance](StructureDefinition-ch-lab-specimen-additive-substance.md)

**identifier**: `http://example.org/pipette/identifiers/substances`/1234333

**category**: Chemical

**code**: Edetate dipotassium



## Resource Content

```json
{
  "resourceType" : "Substance",
  "id" : "EDTA",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen-additive-substance"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/pipette/identifiers/substances",
      "value" : "1234333"
    }
  ],
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/substance-category",
          "code" : "chemical",
          "display" : "Chemical"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "1256100007"
      }
    ]
  }
}

```
