# PML Composition - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PML Composition**

## Resource Profile: PML Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRCompositionMedicationList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the medication list document 

**Usages:**

* Use this Profile: [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md)
* Examples for this Profile: [Composition/Inline-composition-for-utc-1-pml](Composition-Inline-composition-for-utc-1-pml.md) and [Composition/Inline-composition-for-utc-6b-pml](Composition-Inline-composition-for-utc-6b-pml.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-composition-medicationlist)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-composition-medicationlist.csv), [Excel](StructureDefinition-ch-emed-epr-composition-medicationlist.xlsx), [Schematron](StructureDefinition-ch-emed-epr-composition-medicationlist.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-composition-medicationlist",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRCompositionMedicationList",
  "title" : "PML Composition",
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
  "description" : "Definition of the composition for the medication list document",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "constraint" : [
          {
            "key" : "pml-composition-title",
            "severity" : "warning",
            "human" : "The PML composition title must be: 'Medikationsliste' in German or 'Liste de médication' in French or 'Elenco delle terapie farmacologiche' in Italian or 'Medication List' in English or titles in other languages are also allowed.",
            "expression" : "(language.startsWith('en') implies title = 'Medication List') and (language.startsWith('fr') implies title = 'Liste de médication') and (language.startsWith('de') implies title = 'Medikationsliste') and (language.startsWith('it') implies title = 'Elenco delle terapie farmacologiche')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
          }
        ]
      },
      {
        "id" : "Composition.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.implicitRules",
        "path" : "Composition.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Composition.modifierExtension",
        "path" : "Composition.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Composition.identifier.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.identifier.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.identifier.use",
        "path" : "Composition.identifier.use",
        "patternCode" : "official"
      },
      {
        "id" : "Composition.identifier.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.identifier.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.identifier.value",
        "path" : "Composition.identifier.value",
        "short" : "The document identifier as an URN-encoded UUID",
        "constraint" : [
          {
            "key" : "urn-uuid-invariant",
            "severity" : "error",
            "human" : "The value shall be an URN-encoded UUID ('urn:uuid:00000000-0000-0000-0000-000000000000')",
            "expression" : "$this.matches('^urn:uuid:[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
          }
        ]
      },
      {
        "id" : "Composition.identifier.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.identifier.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.identifier.assigner",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile.",
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
        "id" : "Composition.type.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.type.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.type.coding.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.type.coding.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.type.coding.version",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.type.coding.version",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.type.coding.userSelected",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.type.coding.userSelected",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.encounter",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.encounter",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.date",
        "path" : "Composition.date",
        "constraint" : [
          {
            "key" : "datetime-only-instant-invariant",
            "severity" : "error",
            "human" : "The dateTime shall be an instant ('YYYY-MM-DDThh:mm:ss+zz:zz' or 'YYYY-MM-DDThh:mm:ssZ')",
            "expression" : "$this.toString().matches('^([0-9]([0-9]([0-9][1-9]|[1-9]0)|[1-9]00)|[1-9]000)-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([01][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)(\\\\.[0-9]+)?(Z|(\\\\+|-)((0[0-9]|1[0-3]):[0-5][0-9]|14:00))$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
          }
        ]
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.confidentiality",
        "path" : "Composition.confidentiality",
        "short" : "The confidentiality is fixed to the 'normal' level",
        "patternCode" : "N"
      },
      {
        "id" : "Composition.confidentiality.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.confidentiality.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.confidentiality.extension",
        "path" : "Composition.confidentiality.extension",
        "max" : "1"
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode",
        "path" : "Composition.confidentiality.extension",
        "sliceName" : "confidentialityCode"
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept",
        "path" : "Composition.confidentiality.extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.confidentiality.extension.value[x].extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept.coding",
        "path" : "Composition.confidentiality.extension.value[x].coding",
        "patternCoding" : {
          "system" : "http://snomed.info/sct",
          "code" : "17621005"
        }
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept.coding.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.confidentiality.extension.value[x].coding.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept.coding.version",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.confidentiality.extension.value[x].coding.version",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode.value[x]:valueCodeableConcept.coding.userSelected",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.confidentiality.extension.value[x].coding.userSelected",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.attester",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.attester",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.custodian.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.custodian.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.relatesTo",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.relatesTo",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.relatesTo.code",
        "path" : "Composition.relatesTo.code",
        "patternCode" : "replaces"
      },
      {
        "id" : "Composition.event",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.event",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section"
      },
      {
        "id" : "Composition.section.modifierExtension",
        "path" : "Composition.section.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Composition.section.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section.focus",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.section.focus",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.section.mode",
        "path" : "Composition.section.mode",
        "patternCode" : "snapshot"
      },
      {
        "id" : "Composition.section.orderedBy",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.section.orderedBy",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.section.entry.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Composition.section.entry.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Composition.section:originalRepresentation",
        "path" : "Composition.section",
        "sliceName" : "originalRepresentation"
      },
      {
        "id" : "Composition.section:originalRepresentation.modifierExtension",
        "path" : "Composition.section.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Composition.section:originalRepresentation.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list",
        "path" : "Composition.section",
        "sliceName" : "list"
      },
      {
        "id" : "Composition.section:list.modifierExtension",
        "path" : "Composition.section.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Composition.section:list.author",
        "path" : "Composition.section.author",
        "max" : "0",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.text",
        "path" : "Composition.section.text",
        "short" : "Description of the parameters used to generate this medication list."
      },
      {
        "id" : "Composition.section:list.entry:medicationStatement",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationStatement",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-list",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-changed-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:medicationRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationRequest",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest-list",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication-request-changed-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:medicationDispense",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationDispense",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationdispense-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:observation",
        "path" : "Composition.section.entry",
        "sliceName" : "observation",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:annotation",
        "path" : "Composition.section",
        "sliceName" : "annotation"
      },
      {
        "id" : "Composition.section:annotation.modifierExtension",
        "path" : "Composition.section.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotation.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:vitalSigns",
        "path" : "Composition.section",
        "sliceName" : "vitalSigns",
        "short" : "IPS Vital Signs Section",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:vitalSigns.modifierExtension",
        "path" : "Composition.section.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Composition.section:vitalSigns.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8716-3"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:vitalSigns.code.coding",
        "path" : "Composition.section.code.coding",
        "min" : 1
      },
      {
        "id" : "Composition.section:vitalSigns.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-related-person",
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:vitalSigns.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-body-weight"
            ]
          }
        ]
      }
    ]
  }
}

```
