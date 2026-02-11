# MTP MedicationStatement - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MTP MedicationStatement**

## Resource Profile: MTP MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRMedicationStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication statement for the Medication Treatment Plan document 

**Usages:**

* Use this Profile: [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md) and [MTP Document](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md)
* Refer to this Profile: [MTP Composition](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md)
* Examples for this Profile: [MedicationStatement/MedicationStatementDafalganEffMaxDosePerPeriod](MedicationStatement-MedicationStatementDafalganEffMaxDosePerPeriod.md), [MedicationStatement/MedicationStatementDafalganEffSplitDose](MedicationStatement-MedicationStatementDafalganEffSplitDose.md), [MedicationStatement/MedicationStatementIbuprofenNoBrand](MedicationStatement-MedicationStatementIbuprofenNoBrand.md), [MedicationStatement/MedicationStatementMarcoumarFreeTextDosage](MedicationStatement-MedicationStatementMarcoumarFreeTextDosage.md)... Show 4 more, [MedicationStatement/MedicationStatementParacetamolAxapharmMtp](MedicationStatement-MedicationStatementParacetamolAxapharmMtp.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffMtp](MedicationStatement-MedicationStatementParacetamolDafalganEffMtp.md), [MedicationStatement/MedicationStatementParacetamolSelfMedication](MedicationStatement-MedicationStatementParacetamolSelfMedication.md) and [MedicationStatement/MedicationStatementTriatecMtp](MedicationStatement-MedicationStatementTriatecMtp.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.csv), [Excel](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.xlsx), [Schematron](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-medicationstatement-treatmentplan",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRMedicationStatement",
  "title" : "MTP MedicationStatement",
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
  "description" : "Definition of the medication statement for the Medication Treatment Plan document",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement",
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
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
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
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.partOf",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
        "max" : "0"
      },
      {
        "id" : "MedicationStatement.status",
        "path" : "MedicationStatement.status",
        "patternCode" : "active"
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
        "id" : "MedicationStatement.medication[x]",
        "path" : "MedicationStatement.medication[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
            ]
          }
        ]
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
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.note.author[x]",
        "short" : "✕ The note author is ignored, as it cannot be different than the document and/or entry's author",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "MedicationStatement.note.time",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "MedicationStatement.note.time",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
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
