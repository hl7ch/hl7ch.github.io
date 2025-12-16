# CH EMED MedicationRequest (PRE) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationRequest (PRE)**

## Resource Profile: CH EMED MedicationRequest (PRE) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication request for the medication prescription document 

**Usages:**

* Derived from this Profile: [CH EMED MedicationRequest Changed](StructureDefinition-ch-emed-medicationrequest-changed.md) and [CH EMED MedicationRequest (LIST)](StructureDefinition-ch-emed-medicationrequest-list.md)
* Use this Profile: [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md) and [CH EMED Medication Prescription Document](StructureDefinition-ch-emed-document-medicationprescription.md)
* Refer to this Profile: [CH EMED Medication Prescription Composition](StructureDefinition-ch-emed-composition-medicationprescription.md)
* Examples for this Profile: [MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md) and [MedicationRequest/MedReq-ComplexDosage](MedicationRequest-MedReq-ComplexDosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationrequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationrequest.csv), [Excel](StructureDefinition-ch-emed-medicationrequest.xlsx), [Schematron](StructureDefinition-ch-emed-medicationrequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationrequest",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationRequest",
  "title" : "CH EMED MedicationRequest (PRE)",
  "status" : "active",
  "date" : "2025-12-16T11:14:15+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Definition of the medication request for the medication prescription document",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
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
      "identity" : "script10.6",
      "uri" : "http://ncpdp.org/SCRIPT10_6",
      "name" : "Mapping to NCPDP SCRIPT 10.6"
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
  "type" : "MedicationRequest",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationrequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationRequest",
        "path" : "MedicationRequest",
        "short" : "CH EMED MedicationRequest (PRE)",
        "constraint" : [
          {
            "key" : "ch-dosage-medreq",
            "severity" : "error",
            "human" : "If one dosage element is present, it SHALL NOT have a sequence number. \n              If more than one dosage element is present, the base entry SHALL have the sequence number 1.",
            "expression" : "(dosageInstruction.count() > 1 implies dosageInstruction.where($this.conformsTo('http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-medicationrequest') and sequence = 1).exists()) \n         and (dosageInstruction.count() = 1 implies dosageInstruction.single().sequence.exists().not())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
          }
        ]
      },
      {
        "id" : "MedicationRequest.contained",
        "path" : "MedicationRequest.contained",
        "min" : 1
      },
      {
        "id" : "MedicationRequest.extension",
        "path" : "MedicationRequest.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "MedicationRequest.extension:treatmentplan",
        "path" : "MedicationRequest.extension",
        "sliceName" : "treatmentplan",
        "short" : "Reference to the medication treatment plan",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.identifier",
        "path" : "MedicationRequest.identifier",
        "short" : "MedicationRequest Identifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.medication[x]",
        "path" : "MedicationRequest.medication[x]",
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
        "id" : "MedicationRequest.medication[x]:medicationReference",
        "path" : "MedicationRequest.medication[x]",
        "sliceName" : "medicationReference",
        "short" : "Reference to the contained medication",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "MedicationRequest.subject",
        "path" : "MedicationRequest.subject",
        "short" : "Patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.subject.reference",
        "path" : "MedicationRequest.subject.reference",
        "min" : 1
      },
      {
        "id" : "MedicationRequest.authoredOn",
        "path" : "MedicationRequest.authoredOn",
        "min" : 1
      },
      {
        "id" : "MedicationRequest.requester",
        "path" : "MedicationRequest.requester",
        "short" : "The author of the medical decision, see also 'Guidance - Authorship'",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.requester.reference",
        "path" : "MedicationRequest.requester.reference",
        "min" : 1
      },
      {
        "id" : "MedicationRequest.reasonCode",
        "path" : "MedicationRequest.reasonCode",
        "short" : "Treatment reason"
      },
      {
        "id" : "MedicationRequest.dosageInstruction",
        "path" : "MedicationRequest.dosageInstruction",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        },
        "min" : 1
      },
      {
        "id" : "MedicationRequest.dosageInstruction:baseEntry",
        "path" : "MedicationRequest.dosageInstruction",
        "sliceName" : "baseEntry",
        "short" : "Base entry of the dosage instruction",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-medicationrequest"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.dosageInstruction:additionalEntry",
        "path" : "MedicationRequest.dosageInstruction",
        "sliceName" : "additionalEntry",
        "short" : "Additional entry of the dosage instruction",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split"
            ]
          }
        ]
      },
      {
        "id" : "MedicationRequest.dispenseRequest.validityPeriod",
        "path" : "MedicationRequest.dispenseRequest.validityPeriod",
        "short" : "Period of validity of the prescription"
      },
      {
        "id" : "MedicationRequest.dispenseRequest.numberOfRepeatsAllowed",
        "path" : "MedicationRequest.dispenseRequest.numberOfRepeatsAllowed",
        "short" : "Repeated supply per medication (without initial dispense)"
      },
      {
        "id" : "MedicationRequest.dispenseRequest.quantity",
        "path" : "MedicationRequest.dispenseRequest.quantity",
        "short" : "Number of packages"
      },
      {
        "id" : "MedicationRequest.substitution.allowed[x]:allowedCodeableConcept",
        "path" : "MedicationRequest.substitution.allowed[x]",
        "sliceName" : "allowedCodeableConcept",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://terminology.hl7.org/ValueSet/v3-ActSubstanceAdminSubstitutionCode"
        }
      }
    ]
  }
}

```
