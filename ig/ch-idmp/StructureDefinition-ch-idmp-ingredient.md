# Ingredient - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ingredient**

## Resource Profile: Ingredient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-ingredient | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPIngredient |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-ingredient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-ingredient.csv), [Excel](StructureDefinition-ch-idmp-ingredient.xlsx), [Schematron](StructureDefinition-ch-idmp-ingredient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-ingredient",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-ingredient",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPIngredient",
  "title" : "Ingredient",
  "status" : "active",
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Ingredient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Ingredient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Ingredient",
      "path" : "Ingredient",
      "short" : "Ingredient"
    },
    {
      "id" : "Ingredient.for",
      "path" : "Ingredient.for",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
      }]
    },
    {
      "id" : "Ingredient.role",
      "path" : "Ingredient.role",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-ingredient-role"
      }
    },
    {
      "id" : "Ingredient.substance.code",
      "path" : "Ingredient.substance.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-substance"
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
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
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
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-substance"
    },
    {
      "id" : "Ingredient.substance.code.concept.coding:UNII.code",
      "path" : "Ingredient.substance.code.concept.coding.code",
      "min" : 1
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance",
      "path" : "Ingredient.substance.strength.referenceStrength.substance",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-substance"
      }
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance.concept",
      "path" : "Ingredient.substance.strength.referenceStrength.substance.concept",
      "min" : 1
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding",
      "path" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding:UNII",
      "path" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding",
      "sliceName" : "UNII",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding:UNII.system",
      "path" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-substance"
    },
    {
      "id" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding:UNII.code",
      "path" : "Ingredient.substance.strength.referenceStrength.substance.concept.coding.code",
      "min" : 1
    }]
  }
}

```
