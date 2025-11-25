# CH ELM Quantity arb'U - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Quantity arb'U**

## Data Type Profile: CH ELM Quantity arb'U 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-quantity-arbu | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmQuantityArbU |
| **Copyright/Legal**: CC0-1.0 | |

 
Quantity with unit arb'U and system http://unitsofmeasure.org 

**Usages:**

* Use this DataType Profile: [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-quantity-arbu)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-quantity-arbu.csv), [Excel](StructureDefinition-ch-elm-quantity-arbu.xlsx), [Schematron](StructureDefinition-ch-elm-quantity-arbu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-quantity-arbu",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-quantity-arbu",
  "version" : "1.13.0",
  "name" : "ChElmQuantityArbU",
  "title" : "CH ELM Quantity arb'U",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Quantity with unit arb'U and system http://unitsofmeasure.org",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Quantity",
  "baseDefinition" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Quantity",
        "path" : "Quantity",
        "constraint" : [
          {
            "key" : "ch-elm-value-ge-zero",
            "severity" : "error",
            "human" : "value must be greater than or equal zero",
            "expression" : "value >= 0",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-quantity-arbu"
          }
        ]
      },
      {
        "id" : "Quantity.value",
        "path" : "Quantity.value",
        "min" : 1
      },
      {
        "id" : "Quantity.unit",
        "path" : "Quantity.unit",
        "patternString" : "[arb'U]"
      },
      {
        "id" : "Quantity.code",
        "path" : "Quantity.code",
        "patternCode" : "[arb'U]"
      }
    ]
  }
}

```
