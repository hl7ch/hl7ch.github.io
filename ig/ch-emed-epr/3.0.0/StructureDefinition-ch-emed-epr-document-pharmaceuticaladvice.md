# PADV Document - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PADV Document**

## Resource Profile: PADV Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRDocumentPharmaceuticalAdvice |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the bundle for the pharmaceutical advice document 

**Usages:**

* Examples for this Profile: [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md) and [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.csv), [Excel](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.xlsx), [Schematron](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-document-pharmaceuticaladvice",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRDocumentPharmaceuticalAdvice",
  "title" : "PADV Document",
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
  "description" : "Definition of the bundle for the pharmaceutical advice document",
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
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-pharmaceuticaladvice",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "constraint" : [
          {
            "key" : "bundle-composition-same-id",
            "severity" : "error",
            "human" : "The bundle and the composition resources must have the same identifier.",
            "expression" : "identifier.single() = entry[0].resource.identifier.single()",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          },
          {
            "key" : "padv-mtp-same-id",
            "severity" : "error",
            "human" : "A changed MedicationStatement SHALL keep the same identifier",
            "expression" : "(entry.resource.ofType(Observation).extension('http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed').select(value as Reference)).all(reference = (resolve() as MedicationStatement).identifier.single().value)",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          },
          {
            "key" : "padv-pre-same-id",
            "severity" : "error",
            "human" : "A changed MedicationRequest SHALL keep the same identifier",
            "expression" : "(entry.resource.ofType(Observation).extension('http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed').select(value as Reference)).all(reference = (resolve() as MedicationRequest).identifier.single().value)",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          },
          {
            "key" : "padv-statement-part-of-same-id",
            "severity" : "error",
            "human" : "A changed MedicationStatement SHALL have the observation's identifier as partOf reference",
            "expression" : "entry.resource.where($this is MedicationStatement).all(partOf.single().resolve().exists() and partOf.single().resolve() is Observation)",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          },
          {
            "key" : "padv-request-part-of-same-id",
            "severity" : "error",
            "human" : "A changed MedicationRequest SHALL have the observation's identifier as partOf (supportingInformation) reference",
            "expression" : "entry.resource.where($this is MedicationRequest).all(supportingInformation.select($this.resolve() is Observation).anyTrue())",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          }
        ]
      },
      {
        "id" : "Bundle.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.implicitRules",
        "path" : "Bundle.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Bundle.language",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.language",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.identifier.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.identifier.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.identifier.use",
        "path" : "Bundle.identifier.use",
        "patternCode" : "official"
      },
      {
        "id" : "Bundle.identifier.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.identifier.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
        "constraint" : [
          {
            "key" : "urn-uuid-invariant",
            "severity" : "error",
            "human" : "The value shall be an URN-encoded UUID ('urn:uuid:00000000-0000-0000-0000-000000000000')",
            "expression" : "$this.matches('^urn:uuid:[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
          }
        ]
      },
      {
        "id" : "Bundle.identifier.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.identifier.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.identifier.assigner",
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
        "id" : "Bundle.total",
        "path" : "Bundle.total",
        "max" : "0"
      },
      {
        "id" : "Bundle.link",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.link",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 3
      },
      {
        "id" : "Bundle.entry.id",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.entry.id",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.entry.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "short" : "URN-encoded UUID for resource"
      },
      {
        "id" : "Bundle.entry.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Composition.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-pharmaceuticaladvice"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Composition.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Composition.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Composition.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "short" : "The patient targeted by this medication treatment plan",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Patient.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner"
      },
      {
        "id" : "Bundle.entry:Practitioner.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Practitioner.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioner.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Practitioner.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Practitioner.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization"
      },
      {
        "id" : "Bundle.entry:Organization.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Organization.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Organization.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Organization",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Organization.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Organization.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Organization.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:RelatedPerson",
        "path" : "Bundle.entry",
        "sliceName" : "RelatedPerson"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:RelatedPerson.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Device",
        "path" : "Bundle.entry",
        "sliceName" : "Device"
      },
      {
        "id" : "Bundle.entry:Device.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Device.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Device.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Device.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Device.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Encounter",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.entry",
        "sliceName" : "Encounter",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.entry:Encounter.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Encounter.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Encounter.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Encounter.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Encounter.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Location",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.entry",
        "sliceName" : "Location",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Bundle.entry:Location.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Location.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Location.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Location.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Location.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Binary",
        "path" : "Bundle.entry",
        "sliceName" : "Binary"
      },
      {
        "id" : "Bundle.entry:Binary.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Binary.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Binary.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Binary.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Binary.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Observation.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Observation.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Observation.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Observation.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationStatementChanged"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "MedicationStatement",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-changed"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationStatementChanged.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationRequestChanged"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "MedicationRequest",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest-changed"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:MedicationRequestChanged.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight",
        "path" : "Bundle.entry",
        "sliceName" : "ObsBodyWeight",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.modifierExtension",
        "path" : "Bundle.entry.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.link",
        "path" : "Bundle.entry.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-body-weight"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.search",
        "path" : "Bundle.entry.search",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.request",
        "path" : "Bundle.entry.request",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:ObsBodyWeight.response",
        "path" : "Bundle.entry.response",
        "max" : "0"
      },
      {
        "id" : "Bundle.signature",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Bundle.signature",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      }
    ]
  }
}

```
