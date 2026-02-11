# CH EMED EPR Organization - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR Organization**

## Resource Profile: CH EMED EPR Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPROrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the organization for the eMedication context 

**Usages:**

* Use this Profile: [PMLC Document](StructureDefinition-ch-emed-epr-document-medicationcard.md), [DIS Document](StructureDefinition-ch-emed-epr-document-medicationdispense.md), [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md), [PRE Document](StructureDefinition-ch-emed-epr-document-medicationprescription.md)... Show 2 more, [MTP Document](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md) and [PADV Document](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.md)
* Refer to this Profile: [PMLC Composition](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [DIS Composition](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [PML Composition](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [PRE Composition](StructureDefinition-ch-emed-epr-composition-medicationprescription.md)... Show 20 more, [MTP Composition](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [PADV Composition](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [CH EMED EPR Device](StructureDefinition-ch-emed-epr-device.md), [PMLC Document](StructureDefinition-ch-emed-epr-document-medicationcard.md), [DIS Document](StructureDefinition-ch-emed-epr-document-medicationdispense.md), [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md), [PRE Document](StructureDefinition-ch-emed-epr-document-medicationprescription.md), [MTP Document](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md), [PADV Document](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.md), [CH EMED EPR Medication (DIS)](StructureDefinition-ch-emed-epr-medication-medicationdispense.md), [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md), [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md), [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md), [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md), [CH EMED EPR Patient](StructureDefinition-ch-emed-epr-patient.md), [CH EMED EPR Practitioner](StructureDefinition-ch-emed-epr-practitioner.md), [CH EMED EPR PractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md) and [CH EMED EPR RelatedPerson](StructureDefinition-ch-emed-epr-related-person.md)
* Examples for this Profile: [Association CARA](Organization-OrganizationCara.md), [Hôpitaux universitaires de Genève](Organization-OrganizationHug.md) and [Pharma SI](Organization-OrganizationPharmaSI.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-organization.csv), [Excel](StructureDefinition-ch-emed-epr-organization.xlsx), [Schematron](StructureDefinition-ch-emed-epr-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-organization",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization",
  "version" : "3.0.0",
  "name" : "CHEMEDEPROrganization",
  "title" : "CH EMED EPR Organization",
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
  "description" : "Definition of the organization for the eMedication context",
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
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
    },
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Organization.implicitRules",
        "path" : "Organization.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Organization.modifierExtension",
        "path" : "Organization.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier"
      },
      {
        "id" : "Organization.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.identifier.assigner",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "Organization.identifier:GLN",
        "path" : "Organization.identifier",
        "sliceName" : "GLN"
      },
      {
        "id" : "Organization.identifier:GLN.value",
        "path" : "Organization.identifier.value",
        "constraint" : [
          {
            "key" : "gln-length-error",
            "severity" : "error",
            "human" : "GLN must be exactly 13 characters long",
            "expression" : "true and matches('^[0-9]{13}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
          },
          {
            "key" : "gln-modulus-10-error",
            "severity" : "error",
            "human" : "GLN must pass the modulus 10 check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "true and (((10-((substring(0,1).toInteger()*1)+(substring(1,1).toInteger()*3)+(substring(2,1).toInteger()*1)+(substring(3,1).toInteger()*3)+(substring(4,1).toInteger()*1)+(substring(5,1).toInteger()*3)+(substring(6,1).toInteger()*1)+(substring(7,1).toInteger()*3)+(substring(8,1).toInteger()*1)+(substring(9,1).toInteger()*3)+(substring(10,1).toInteger()*1)+(substring(11,1).toInteger()*3))mod(10))mod(10))=substring(12,1).toInteger())",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
          },
          {
            "key" : "gln-startswith76-error",
            "severity" : "error",
            "human" : "GLN must start with 76 for Swiss HCP",
            "expression" : "true and startsWith('76')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
          }
        ]
      },
      {
        "id" : "Organization.partOf",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.partOf",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "Organization.endpoint",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Organization.endpoint",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      }
    ]
  }
}

```
