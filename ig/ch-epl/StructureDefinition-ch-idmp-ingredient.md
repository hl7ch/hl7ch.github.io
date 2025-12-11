# IDMP Ingredient - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDMP Ingredient**

## Resource Profile: IDMP Ingredient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-ingredient | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPIngredient |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [IDMP RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-ingredient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-ingredient.csv), [Excel](StructureDefinition-ch-idmp-ingredient.xlsx), [Schematron](StructureDefinition-ch-idmp-ingredient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-ingredient",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-ingredient",
  "version" : "1.0.0",
  "name" : "CHIDMPIngredient",
  "title" : "IDMP Ingredient",
  "status" : "active",
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product.",
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
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "idmp",
      "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
      "name" : "IDMP Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Ingredient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Ingredient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Ingredient",
        "path" : "Ingredient",
        "short" : "CH IDMP Ingredient"
      },
      {
        "id" : "Ingredient.for",
        "path" : "Ingredient.for",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"
            ]
          }
        ]
      },
      {
        "id" : "Ingredient.role",
        "path" : "Ingredient.role",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-ingredient-role"
        }
      },
      {
        "id" : "Ingredient.role.coding",
        "path" : "Ingredient.role.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Ingredient.role.coding:SMC",
        "path" : "Ingredient.role.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Ingredient.role.coding:SMC.system",
        "path" : "Ingredient.role.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-ingredient-role"
      },
      {
        "id" : "Ingredient.role.coding:SMC.code",
        "path" : "Ingredient.role.coding.code",
        "min" : 1
      },
      {
        "id" : "Ingredient.substance.code",
        "path" : "Ingredient.substance.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-substance"
        }
      },
      {
        "id" : "Ingredient.substance.code.concept",
        "path" : "Ingredient.substance.code.concept",
        "min" : 1
      },
      {
        "id" : "Ingredient.substance.code.concept.coding",
        "path" : "Ingredient.substance.code.concept.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Ingredient.substance.code.concept.coding:UNII",
        "path" : "Ingredient.substance.code.concept.coding",
        "sliceName" : "UNII",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Ingredient.substance.code.concept.coding:UNII.system",
        "path" : "Ingredient.substance.code.concept.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-substance"
      },
      {
        "id" : "Ingredient.substance.code.concept.coding:UNII.code",
        "path" : "Ingredient.substance.code.concept.coding.code",
        "min" : 1
      }
    ]
  }
}

```
