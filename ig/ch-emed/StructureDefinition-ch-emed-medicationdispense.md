# CH EMED MedicationDispense (DIS) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationDispense (DIS)**

## Resource Profile: CH EMED MedicationDispense (DIS) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationDispense |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication dispense for the medication dispense document 

**Usages:**

* Derived from this Profile: [CH EMED MedicationDispense (LIST)](StructureDefinition-ch-emed-medicationdispense-list.md)
* Use this Profile: [CH EMED Medication Dispense Document](StructureDefinition-ch-emed-document-medicationdispense.md) and [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md)
* Refer to this Profile: [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md)
* Examples for this Profile: [MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md), [MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md), [MedicationDispense/MedDispTriatec-WasNotSubstituted](MedicationDispense-MedDispTriatec-WasNotSubstituted.md) and [MedicationDispense/MedDispTriatec-WasSubstituted](MedicationDispense-MedDispTriatec-WasSubstituted.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationdispense)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationdispense.csv), [Excel](StructureDefinition-ch-emed-medicationdispense.xlsx), [Schematron](StructureDefinition-ch-emed-medicationdispense.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationdispense",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationDispense",
  "title" : "CH EMED MedicationDispense (DIS)",
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
  "description" : "Definition of the medication dispense for the medication dispense document",
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
      "identity" : "rx-dispense-rmim",
      "uri" : "http://www.hl7.org/v3/PORX_RM020070UV",
      "name" : "V3 Pharmacy Dispense RMIM"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationDispense",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationDispense",
        "path" : "MedicationDispense",
        "short" : "CH EMED MedicationDispense (DIS)",
        "constraint" : [
          {
            "key" : "ch-dosage-meddis",
            "severity" : "error",
            "human" : "If one dosage element is present, it SHALL NOT have a sequence number. \n              If more than one dosage element is present, the base entry SHALL have the sequence number 1.",
            "expression" : "(dosageInstruction.count() > 1 implies dosageInstruction.where($this.conformsTo('http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage') and sequence = 1).exists()) \n         and (dosageInstruction.count() = 1 implies dosageInstruction.single().sequence.exists().not())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
          }
        ]
      },
      {
        "id" : "MedicationDispense.contained",
        "path" : "MedicationDispense.contained",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.extension:treatmentReason",
        "path" : "MedicationDispense.extension",
        "sliceName" : "treatmentReason",
        "short" : "Treatment reason"
      },
      {
        "id" : "MedicationDispense.extension:prescription",
        "path" : "MedicationDispense.extension",
        "sliceName" : "prescription",
        "short" : "Reference to the medication prescription",
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
        "id" : "MedicationDispense.extension:pharmaceuticalAdvice",
        "path" : "MedicationDispense.extension",
        "sliceName" : "pharmaceuticalAdvice",
        "short" : "Reference to the pharmaceutical advice",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-pharmaceuticaladvice"
            ]
          }
        ]
      },
      {
        "id" : "MedicationDispense.extension:treatmentPlan",
        "path" : "MedicationDispense.extension",
        "sliceName" : "treatmentPlan",
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
        "id" : "MedicationDispense.identifier",
        "path" : "MedicationDispense.identifier",
        "short" : "MedicationDispense Identifier",
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
        "id" : "MedicationDispense.status",
        "path" : "MedicationDispense.status",
        "fixedCode" : "completed"
      },
      {
        "id" : "MedicationDispense.medication[x]",
        "path" : "MedicationDispense.medication[x]",
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
        "id" : "MedicationDispense.medication[x]:medicationReference",
        "path" : "MedicationDispense.medication[x]",
        "sliceName" : "medicationReference",
        "short" : "Reference to the contained medication",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "MedicationDispense.subject",
        "path" : "MedicationDispense.subject",
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
        "id" : "MedicationDispense.subject.reference",
        "path" : "MedicationDispense.subject.reference",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.performer",
        "path" : "MedicationDispense.performer",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "MedicationDispense.performer.actor",
        "path" : "MedicationDispense.performer.actor",
        "short" : "The author of the medical decision, see also 'Guidance - Authorship'",
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
        "id" : "MedicationDispense.performer.actor.reference",
        "path" : "MedicationDispense.performer.actor.reference",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.quantity",
        "path" : "MedicationDispense.quantity",
        "short" : "Number of packages",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.whenHandedOver",
        "path" : "MedicationDispense.whenHandedOver",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.dosageInstruction",
        "path" : "MedicationDispense.dosageInstruction",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        },
        "short" : "How the medication should be taken",
        "min" : 1
      },
      {
        "id" : "MedicationDispense.dosageInstruction:baseEntry",
        "path" : "MedicationDispense.dosageInstruction",
        "sliceName" : "baseEntry",
        "short" : "Base entry of the dosage instruction",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage"
            ]
          }
        ]
      },
      {
        "id" : "MedicationDispense.dosageInstruction:additionalEntry",
        "path" : "MedicationDispense.dosageInstruction",
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
        "id" : "MedicationDispense.substitution",
        "path" : "MedicationDispense.substitution",
        "constraint" : [
          {
            "key" : "ch-emed-dis-1",
            "severity" : "error",
            "human" : "If no substitution was performed, no type is expected.",
            "expression" : "wasSubstituted = true or (wasSubstituted = false and type.exists().not())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
          }
        ]
      },
      {
        "id" : "MedicationDispense.substitution.type",
        "path" : "MedicationDispense.substitution.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ActSubstanceAdminSubstitutionCode"
        }
      }
    ]
  }
}

```
