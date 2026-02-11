# Time Quantity - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Time Quantity**

## Data Type Profile: Time Quantity 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-time-quantity | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRTimeQuantity |
| **Copyright/Legal**: CC0-1.0 | |

 
A quantity with a time unit (a duration) 

**Usages:**

* Use this DataType Profile: [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [DIS MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md) and [Ratio (Amount / Time)](StructureDefinition-ch-emed-epr-ratio-amount-per-time.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-time-quantity)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-time-quantity.csv), [Excel](StructureDefinition-ch-emed-epr-time-quantity.xlsx), [Schematron](StructureDefinition-ch-emed-epr-time-quantity.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-time-quantity",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-time-quantity",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRTimeQuantity",
  "title" : "Time Quantity",
  "status" : "draft",
  "date" : "2026-02-11T07:11:04+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "A quantity with a time unit (a duration)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Quantity.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Quantity.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Quantity.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Quantity.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Quantity.value",
        "path" : "Quantity.value",
        "constraint" : [
          {
            "key" : "time-quantity-strict-positive",
            "severity" : "error",
            "human" : "A time quantity shall have a strictly positive value",
            "expression" : "$this > 0",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-time-quantity"
          },
          {
            "key" : "time-quantity-only-integer",
            "severity" : "error",
            "human" : "A time quantity shall only have an integer value",
            "expression" : "$this.toString().convertsToInteger()",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-time-quantity"
          }
        ]
      },
      {
        "id" : "Quantity.comparator",
        "path" : "Quantity.comparator",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable."
      },
      {
        "id" : "Quantity.system",
        "path" : "Quantity.system",
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Quantity.code",
        "path" : "Quantity.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-time-quantity-unit-code"
        }
      }
    ]
  }
}

```
