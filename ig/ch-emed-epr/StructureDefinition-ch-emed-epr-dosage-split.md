# Dosage Split - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dosage Split**

## Data Type Profile: Dosage Split 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-dosage-split | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRDosageSplit |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the split dosage element 

**Usages:**

* Use this DataType Profile: [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [DIS MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md), [PADV Changed MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md)... Show 7 more, [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [PRE MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md), [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md), [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md) and [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-dosage-split)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-dosage-split.csv), [Excel](StructureDefinition-ch-emed-epr-dosage-split.xlsx), [Schematron](StructureDefinition-ch-emed-epr-dosage-split.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-dosage-split",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-dosage-split",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRDosageSplit",
  "title" : "Dosage Split",
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
  "description" : "Definition of the split dosage element",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Dosage",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Dosage.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Dosage.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Dosage.modifierExtension",
        "path" : "Dosage.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Dosage.text",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Dosage.text",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Dosage.timing.modifierExtension",
        "path" : "Dosage.timing.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Dosage.timing.event",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Dosage.timing.event",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Dosage.timing.repeat.bounds[x]",
        "path" : "Dosage.timing.repeat.bounds[x]",
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Dosage.timing.repeat.when",
        "path" : "Dosage.timing.repeat.when",
        "short" : "... It shall only contain values from Event Timings",
        "constraint" : [
          {
            "key" : "only-standard-event-timings",
            "severity" : "error",
            "human" : "The timing event shall only be 'MORN', 'NOON', 'EVE' or 'NIGHT'.",
            "expression" : "$this = 'MORN' or $this = 'NOON' or $this = 'EVE' or $this = 'NIGHT'",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-dosage-split"
          }
        ]
      },
      {
        "id" : "Dosage.timing.code",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Dosage.timing.code",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Dosage.doseAndRate.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Dosage.doseAndRate.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Dosage.doseAndRate.dose[x]",
        "path" : "Dosage.doseAndRate.dose[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Dosage.doseAndRate.dose[x]:doseQuantity",
        "path" : "Dosage.doseAndRate.dose[x]",
        "sliceName" : "doseQuantity",
        "min" : 0,
        "max" : "1",
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
        "id" : "Dosage.doseAndRate.dose[x]:doseRange",
        "path" : "Dosage.doseAndRate.dose[x]",
        "sliceName" : "doseRange",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Range",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-amount-range"
            ]
          }
        ]
      },
      {
        "id" : "Dosage.doseAndRate.rate[x]",
        "path" : "Dosage.doseAndRate.rate[x]",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-ratio-amount-per-time"
            ]
          }
        ]
      }
    ]
  }
}

```
