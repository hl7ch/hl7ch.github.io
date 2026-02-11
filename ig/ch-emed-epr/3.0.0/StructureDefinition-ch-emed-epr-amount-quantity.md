# Amount Quantity - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Amount Quantity**

## Data Type Profile: Amount Quantity 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-quantity | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRAmountQuantity |
| **Copyright/Legal**: CC0-1.0 | |

 
A quantity with an amount unit (no time unit) 

**Usages:**

* Use this DataType Profile: [Amount Range](StructureDefinition-ch-emed-epr-amount-range.md), [Dosage (MedicationRequest)](StructureDefinition-ch-emed-epr-dosage-medicationrequest.md), [Dosage Split](StructureDefinition-ch-emed-epr-dosage-split.md), [Dosage (MedicationStatement / MedicationDispense)](StructureDefinition-ch-emed-epr-dosage.md)... Show 8 more, [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [DIS MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md), [PADV Changed MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md), [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [PRE MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md), [Ratio (Amount / Amount)](StructureDefinition-ch-emed-epr-ratio-amount-per-amount.md) and [Ratio (Amount / Time)](StructureDefinition-ch-emed-epr-ratio-amount-per-time.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-amount-quantity)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-amount-quantity.csv), [Excel](StructureDefinition-ch-emed-epr-amount-quantity.xlsx), [Schematron](StructureDefinition-ch-emed-epr-amount-quantity.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-amount-quantity",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-quantity",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRAmountQuantity",
  "title" : "Amount Quantity",
  "status" : "draft",
  "date" : "2026-02-11T07:01:54+00:00",
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
  "description" : "A quantity with an amount unit (no time unit)",
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
        "id" : "Quantity",
        "path" : "Quantity"
      },
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
            "key" : "amount-quantity-int-or-simple-decimal",
            "severity" : "warning",
            "human" : "An amount quantity should be either an integer, or a decimal that ends with '.25', '.5', or '.75' for non-scientific units (like tablets, pillules, ampules, etc.)",
            "expression" : "$this.toString().contains('.').not() or $this.toString().endsWith('.25') or $this.toString().endsWith('.5') or $this.toString().endsWith('.75')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-quantity"
          }
        ]
      },
      {
        "id" : "Quantity.comparator",
        "path" : "Quantity.comparator",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable."
      },
      {
        "id" : "Quantity.code",
        "path" : "Quantity.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-amount-quantity-unit-code"
        }
      }
    ]
  }
}

```
