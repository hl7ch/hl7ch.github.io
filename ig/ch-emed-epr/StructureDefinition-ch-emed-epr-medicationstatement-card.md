# PMLC MedicationStatement - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PMLC MedicationStatement**

## Resource Profile: PMLC MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRMedicationStatementCard |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the aggregated medication statement for the Medication Card document 

**Usages:**

* Use this Profile: [PMLC Document](StructureDefinition-ch-emed-epr-document-medicationcard.md)
* Examples for this Profile: [MedicationStatement/MedicationStatementCardParacetamolSelfMedication](MedicationStatement-MedicationStatementCardParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedicationAfterDispense](MedicationStatement-MedicationStatementCardParacetamolSelfMedicationAfterDispense.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPmlc](MedicationStatement-MedicationStatementParacetamolAxapharmPmlc.md) and [MedicationStatement/MedicationStatementParacetamolDafalganEffPmlc](MedicationStatement-MedicationStatementParacetamolDafalganEffPmlc.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-medicationstatement-card)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-medicationstatement-card.csv), [Excel](StructureDefinition-ch-emed-epr-medicationstatement-card.xlsx), [Schematron](StructureDefinition-ch-emed-epr-medicationstatement-card.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-medicationstatement-card",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRMedicationStatementCard",
  "title" : "PMLC MedicationStatement",
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
  "description" : "Definition of the aggregated medication statement for the Medication Card document",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
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
  "type" : "MedicationStatement",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationStatement",
        "path" : "MedicationStatement",
        "constraint" : [
          {
            "key" : "split-dosage-unit-must-match-base-dosage",
            "severity" : "error",
            "human" : "The unit for doseAndRate of different dosages (split dosage) belonging to the same statement/request/dispense must match.",
            "expression" : "(dosage.count() > 1) implies dosage.doseAndRate.dose.ofType(Quantity).code.union(dosage.doseAndRate.dose.ofType(Range).low.code).union(dosage.doseAndRate.dose.ofType(Range).high.code).union(dosage.doseAndRate.rate.numerator.code).count() = 1",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
          }
        ]
      },
      {
        "id" : "MedicationStatement.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.implicitRules",
        "path" : "MedicationStatement.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "MedicationStatement.extension",
        "path" : "MedicationStatement.extension",
        "min" : 2
      },
      {
        "id" : "MedicationStatement.extension:substitution",
        "path" : "MedicationStatement.extension",
        "sliceName" : "substitution",
        "short" : "Whether the dispenser can substitute the prescribed medicine/package by another that is deemed equivalent, for medical or logistical reasons. By default, substitution is authorized."
      },
      {
        "id" : "MedicationStatement.extension:substitution.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.extension.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.extension:substitution.value[x]",
        "path" : "MedicationStatement.extension.value[x]",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-substance-admin-substitution-code"
        }
      },
      {
        "id" : "MedicationStatement.extension:substitution.value[x].coding",
        "path" : "MedicationStatement.extension.value[x].coding",
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-substanceAdminSubstitution",
          "code" : "N",
          "display" : "none"
        }
      },
      {
        "id" : "MedicationStatement.extension:treatmentPlan",
        "path" : "MedicationStatement.extension",
        "sliceName" : "treatmentPlan",
        "short" : "Reference to the MTP that introduced this medication in the treatment plan",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.extension:authorDocument",
        "path" : "MedicationStatement.extension",
        "sliceName" : "authorDocument",
        "short" : "The last intervening author, only if different that the last medical author (see 'Document PMLC' and 'Guidance - Different Authors')",
        "comment" : "...It represents the author of the last entry (of any kind) in the treatment. If it's the same author as the last medical author, it's not provided."
      },
      {
        "id" : "MedicationStatement.extension:authorDocument.value[x]",
        "path" : "MedicationStatement.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.extension:lastConsideredDocument",
        "path" : "MedicationStatement.extension",
        "sliceName" : "lastConsideredDocument",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.extension:prescription",
        "path" : "MedicationStatement.extension",
        "sliceName" : "prescription",
        "short" : "Reference to the PRE that introduced this medication in the treatment plan, if any",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-prescription"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.modifierExtension",
        "path" : "MedicationStatement.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "MedicationStatement.identifier.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.identifier.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.identifier.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.identifier.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.identifier.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.identifier.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.identifier.assigner",
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
        "id" : "MedicationStatement.basedOn",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.basedOn",
        "short" : "✕ This element will be removed in PML(C) documents",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "MedicationStatement.partOf",
        "path" : "MedicationStatement.partOf",
        "max" : "0"
      },
      {
        "id" : "MedicationStatement.statusReason",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.statusReason",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.category",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.category",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.medication[x]:medicationReference",
        "path" : "MedicationStatement.medication[x]",
        "sliceName" : "medicationReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "MedicationStatement.subject",
        "path" : "MedicationStatement.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ]
      },
      {
        "id" : "MedicationStatement.subject.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.subject.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.subject.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.subject.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.context",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.context",
        "short" : "✕ This element will be removed in PML(C) documents",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "MedicationStatement.effective[x]",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.effective[x]",
        "short" : "✕ Do not use. The effective period is contained in the main dosage",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.informationSource",
        "path" : "MedicationStatement.informationSource",
        "short" : "The last medical author, (see 'Document PMLC' and 'Guidance - Different Authors')",
        "comment" : "...It represents the author of the last section (of type _MTP_, _PRE_, or any type of _PADV_ except _COMMENT_ that apply to an _MTP_ or _PRE_) in this treatment.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.derivedFrom",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.derivedFrom",
        "short" : "✕ This element will be removed in PML(C) documents",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "MedicationStatement.reasonCode",
        "path" : "MedicationStatement.reasonCode",
        "short" : "The treatment reason(s) as text, and optionally coded",
        "definition" : "...Content creators should keep it as simple and short as possible (e.g. 'blood clog', 'hypertension')."
      },
      {
        "id" : "MedicationStatement.reasonCode.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.reasonCode.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.reasonCode.text",
        "path" : "MedicationStatement.reasonCode.text",
        "short" : "Plain text representation of the treatment reason(s)",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.reasonReference",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.reasonReference",
        "short" : "✕ This element will be removed in PML(C) documents",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "MedicationStatement.note.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.note.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.note.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.note.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.note.author[x]",
        "path" : "MedicationStatement.note.author[x]",
        "comment" : "...It represents the medical author of the entry that added the comment.",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Practitioner",
              "http://hl7.org/fhir/StructureDefinition/Patient",
              "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
              "http://hl7.org/fhir/StructureDefinition/Organization"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.note.time",
        "path" : "MedicationStatement.note.time",
        "comment" : "...It represents the medical author of the entry that added the comment.",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.note.text",
        "path" : "MedicationStatement.note.text",
        "short" : "The annotation text content (as raw text, no markdown allowed)."
      },
      {
        "id" : "MedicationStatement.dosage:baseEntry",
        "path" : "MedicationStatement.dosage",
        "sliceName" : "baseEntry",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-dosage"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.dosage:additionalEntry",
        "path" : "MedicationStatement.dosage",
        "sliceName" : "additionalEntry",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-dosage-split"
            ]
          }
        ]
      }
    ]
  }
}

```
