# Ratio (Amount / Time) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ratio (Amount / Time)**

## Data Type Profile: Ratio (Amount / Time) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-ratio-amount-per-time | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRRatioAmountPerTime |
| **Copyright/Legal**: CC0-1.0 | |

 
A ratio of amount per time 

**Usages:**

* Use this DataType Profile: [Dosage (MedicationRequest)](StructureDefinition-ch-emed-epr-dosage-medicationrequest.md), [Dosage Split](StructureDefinition-ch-emed-epr-dosage-split.md) and [Dosage (MedicationStatement / MedicationDispense)](StructureDefinition-ch-emed-epr-dosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-ratio-amount-per-time)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-ratio-amount-per-time.csv), [Excel](StructureDefinition-ch-emed-epr-ratio-amount-per-time.xlsx), [Schematron](StructureDefinition-ch-emed-epr-ratio-amount-per-time.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-ratio-amount-per-time",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-ratio-amount-per-time",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRRatioAmountPerTime",
  "title" : "Ratio (Amount / Time)",
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
  "description" : "A ratio of amount per time",
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
  "type" : "Ratio",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Ratio.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Ratio.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Ratio.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Ratio.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Ratio.numerator",
        "path" : "Ratio.numerator",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-quantity"
            ]
          }
        ]
      },
      {
        "id" : "Ratio.denominator",
        "path" : "Ratio.denominator",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-time-quantity"
            ]
          }
        ]
      }
    ]
  }
}

```
