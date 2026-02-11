# Amount Range - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Amount Range**

## Data Type Profile: Amount Range 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-range | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRAmountRange |
| **Copyright/Legal**: CC0-1.0 | |

 
A range of amount quantities 

**Usages:**

* Use this DataType Profile: [Dosage (MedicationRequest)](StructureDefinition-ch-emed-epr-dosage-medicationrequest.md), [Dosage Split](StructureDefinition-ch-emed-epr-dosage-split.md) and [Dosage (MedicationStatement / MedicationDispense)](StructureDefinition-ch-emed-epr-dosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-amount-range)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-amount-range.csv), [Excel](StructureDefinition-ch-emed-epr-amount-range.xlsx), [Schematron](StructureDefinition-ch-emed-epr-amount-range.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-amount-range",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-range",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRAmountRange",
  "title" : "Amount Range",
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
  "description" : "A range of amount quantities",
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
  "type" : "Range",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-range-with-emed-units",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Range",
        "path" : "Range"
      },
      {
        "id" : "Range.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Range.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Range.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Range.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Range.low",
        "path" : "Range.low",
        "min" : 1,
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
        "id" : "Range.high",
        "path" : "Range.high",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-quantity"
            ]
          }
        ]
      }
    ]
  }
}

```
