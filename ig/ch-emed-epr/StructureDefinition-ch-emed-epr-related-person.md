# CH EMED EPR RelatedPerson - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR RelatedPerson**

## Resource Profile: CH EMED EPR RelatedPerson 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRRelatedPerson |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the related person for the eMedication context 

**Usages:**

* Refer to this Profile: [PMLC Composition](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [DIS Composition](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [PML Composition](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [PRE Composition](StructureDefinition-ch-emed-epr-composition-medicationprescription.md)... Show 11 more, [MTP Composition](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [PADV Composition](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md), [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md), [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md) and [PML Observation](StructureDefinition-ch-emed-epr-observation-list.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-related-person)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-related-person.csv), [Excel](StructureDefinition-ch-emed-epr-related-person.xlsx), [Schematron](StructureDefinition-ch-emed-epr-related-person.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-related-person",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRRelatedPerson",
  "title" : "CH EMED EPR RelatedPerson",
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
  "description" : "Definition of the related person for the eMedication context",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RelatedPerson",
        "path" : "RelatedPerson"
      },
      {
        "id" : "RelatedPerson.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.implicitRules",
        "path" : "RelatedPerson.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "RelatedPerson.modifierExtension",
        "path" : "RelatedPerson.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "RelatedPerson.identifier.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.identifier.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.identifier.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.identifier.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.identifier.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.identifier.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.identifier.assigner",
        "short" : "✕ This element will be removed in PML(C) documents",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.active",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.active",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "RelatedPerson.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "RelatedPerson.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      }
    ]
  }
}

```
