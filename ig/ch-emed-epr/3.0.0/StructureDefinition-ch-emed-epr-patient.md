# CH EMED EPR Patient - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR Patient**

## Resource Profile: CH EMED EPR Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the patient for the eMedication context 

**Usages:**

* Use this Profile: [PMLC Document](StructureDefinition-ch-emed-epr-document-medicationcard.md), [DIS Document](StructureDefinition-ch-emed-epr-document-medicationdispense.md), [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md), [PRE Document](StructureDefinition-ch-emed-epr-document-medicationprescription.md)... Show 2 more, [MTP Document](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md) and [PADV Document](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.md)
* Refer to this Profile: [PMLC Composition](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [DIS Composition](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [PML Composition](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [PRE Composition](StructureDefinition-ch-emed-epr-composition-medicationprescription.md)... Show 16 more, [MTP Composition](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [PADV Composition](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [DIS MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md), [PADV Changed MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md), [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [PRE MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md), [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md), [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md), [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md), [Body Weight Observation](StructureDefinition-ch-emed-epr-observation-body-weight.md), [PML Observation](StructureDefinition-ch-emed-epr-observation-list.md) and [PADV Observation](StructureDefinition-ch-emed-epr-observation.md)
* Examples for this Profile: [Patient/PatientCARAPMP004](Patient-PatientCARAPMP004.md) and [Patient/PatientDupont](Patient-PatientDupont.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed-epr|current/StructureDefinition/ch-emed-epr-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-epr-patient.csv), [Excel](StructureDefinition-ch-emed-epr-patient.xlsx), [Schematron](StructureDefinition-ch-emed-epr-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-epr-patient",
  "url" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRPatient",
  "title" : "CH EMED EPR Patient",
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
  "description" : "Definition of the patient for the eMedication context",
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
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient.meta.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.meta.versionId",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.versionId",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.meta.lastUpdated",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.lastUpdated",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.meta.source",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.source",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.meta.security",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.security",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.meta.tag",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.meta.tag",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.implicitRules",
        "path" : "Patient.implicitRules",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Patient.modifierExtension",
        "path" : "Patient.modifierExtension",
        "comment" : "...All modifiers SHALL be documented in the profile, in order to be usable.",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier"
      },
      {
        "id" : "Patient.identifier.extension",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.identifier.extension",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.identifier.type",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.identifier.type",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.identifier.period",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.identifier.period",
        "short" : "✕ This element is not supported",
        "definition" : "Implementers should not set or read this element. \nThis element is only kept as optional to allow submission of documents that would contain a value, \nsince those documents are still readable by others.\nThe meaning of this element is undefined in this profile."
      },
      {
        "id" : "Patient.identifier.assigner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.identifier.assigner",
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
        "id" : "Patient.identifier:EPR-SPID",
        "path" : "Patient.identifier",
        "sliceName" : "EPR-SPID"
      },
      {
        "id" : "Patient.identifier:EPR-SPID.value",
        "path" : "Patient.identifier.value",
        "constraint" : [
          {
            "key" : "epr-spid-length-error",
            "severity" : "error",
            "human" : "EPR-SPID must start with 76133761 followed by 10 digits",
            "expression" : "matches('^76133761[0-9]{10}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
          },
          {
            "key" : "epr-spid-modulus-10-error",
            "severity" : "error",
            "human" : "EPR-SPID must pass the modulus 10 check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "true and (((10-((68+(substring(8,1).toInteger()*3)+(substring(9,1).toInteger()*1)+(substring(10,1).toInteger()*3)+(substring(11,1).toInteger()*1)+(substring(12,1).toInteger()*3)+(substring(13,1).toInteger()*1)+(substring(14,1).toInteger()*3)+(substring(15,1).toInteger()*1)+(substring(16,1).toInteger()*3))mod(10)))mod(10))=substring(17,1).toInteger())",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
          }
        ]
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13"
      },
      {
        "id" : "Patient.identifier:AHVN13.value",
        "path" : "Patient.identifier.value",
        "constraint" : [
          {
            "key" : "ahvn13-digit-check-error",
            "severity" : "error",
            "human" : "AHVN13 / NAVS13 must pass digit check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "true and (((10-(28+(substring(3,1).toInteger()*3)+(substring(4,1).toInteger()*1)+(substring(5,1).toInteger()*3)+(substring(6,1).toInteger()*1)+(substring(7,1).toInteger()*3)+(substring(8,1).toInteger()*1)+(substring(9,1).toInteger()*3)+(substring(10,1).toInteger()*1)+(substring(11,1).toInteger()*3))mod(10))mod(10))=substring(12,1).toInteger())",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
          },
          {
            "key" : "ahvn13-length-error",
            "severity" : "error",
            "human" : "AHVN13 / NAVS13 must start with 756 followed by 10 digits",
            "expression" : "matches('^756[0-9]{10}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
          }
        ]
      },
      {
        "id" : "Patient.identifier:LocalPid",
        "path" : "Patient.identifier",
        "sliceName" : "LocalPid"
      },
      {
        "id" : "Patient.identifier:LocalPid.assigner",
        "path" : "Patient.identifier.assigner",
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
        "id" : "Patient.identifier:insuranceCardNumber",
        "path" : "Patient.identifier",
        "sliceName" : "insuranceCardNumber"
      },
      {
        "id" : "Patient.identifier:insuranceCardNumber.value",
        "path" : "Patient.identifier.value",
        "constraint" : [
          {
            "key" : "veka-length-error",
            "severity" : "error",
            "human" : "Insurance card number must start with 807560 followed by 14 digits",
            "expression" : "matches('^807560[0-9]{14}$')",
            "source" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
          }
        ]
      },
      {
        "id" : "Patient.contact",
        "path" : "Patient.contact"
      },
      {
        "id" : "Patient.contact.organization",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.contact.organization",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "Patient.generalPractitioner",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.generalPractitioner",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "Patient.managingOrganization",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.managingOrganization",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      },
      {
        "id" : "Patient.link",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
            "valueCode" : "draft"
          }
        ],
        "path" : "Patient.link",
        "short" : "✕ This element will be removed in PML(C) documents",
        "comment" : "✕ Unsupported reference. It'll be stripped when generating PML(C) documents."
      }
    ]
  }
}

```
