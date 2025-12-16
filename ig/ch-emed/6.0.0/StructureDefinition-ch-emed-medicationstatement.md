# CH EMED MedicationStatement - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationStatement**

## Resource Profile: CH EMED MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication statement for the medication treatment plan document (and as basis medication statement) 

**Usages:**

* Derived from this Profile: [CH EMED MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md), [CH EMED MedicationStatement Changed](StructureDefinition-ch-emed-medicationstatement-changed.md) and [CH EMED MedicationStatement (LIST)](StructureDefinition-ch-emed-medicationstatement-list.md)
* Use this Profile: [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md) and [CH EMED Medication Treatment Plan Document](StructureDefinition-ch-emed-document-medicationtreatmentplan.md)
* Refer to this Profile: [CH EMED Medication Treatment Plan Composition](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md)
* Examples for this Profile: [MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md), [MedicationStatement/2-3-MedStatBeloczok](MedicationStatement-2-3-MedStatBeloczok.md), [MedicationStatement/2-5-MedStatNorvasc](MedicationStatement-2-5-MedStatNorvasc.md) and [MedicationStatement/AsNeededWithMaxDose](MedicationStatement-AsNeededWithMaxDose.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationstatement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationstatement.csv), [Excel](StructureDefinition-ch-emed-medicationstatement.xlsx), [Schematron](StructureDefinition-ch-emed-medicationstatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationstatement",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationStatement",
  "title" : "CH EMED MedicationStatement",
  "status" : "active",
  "date" : "2025-12-16T11:07:13+00:00",
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
  "description" : "Definition of the medication statement for the medication treatment plan document (and as basis medication statement)",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationStatement",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationStatement",
        "path" : "MedicationStatement",
        "short" : "CH EMED MedicationStatement (MTP and basis)",
        "constraint" : [
          {
            "key" : "ch-dosage-medstat",
            "severity" : "error",
            "human" : "If one dosage element is present, it SHALL NOT have a sequence number. \n              If more than one dosage element is present, the base entry SHALL have the sequence number 1.",
            "expression" : "(dosage.count() > 1 implies dosage.where($this.conformsTo('http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage') and sequence = 1).exists()) \n         and (dosage.count() = 1 implies dosage.single().sequence.exists().not())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
          }
        ]
      },
      {
        "id" : "MedicationStatement.contained",
        "path" : "MedicationStatement.contained",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.identifier",
        "path" : "MedicationStatement.identifier",
        "short" : "MedicationStatement Identifier",
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
        "id" : "MedicationStatement.medication[x]",
        "path" : "MedicationStatement.medication[x]",
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
        "id" : "MedicationStatement.medication[x]:medicationReference",
        "path" : "MedicationStatement.medication[x]",
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
        "id" : "MedicationStatement.subject",
        "path" : "MedicationStatement.subject",
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
        "id" : "MedicationStatement.subject.reference",
        "path" : "MedicationStatement.subject.reference",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.dateAsserted",
        "path" : "MedicationStatement.dateAsserted",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.informationSource",
        "path" : "MedicationStatement.informationSource",
        "short" : "The author of the medical decision, see also 'Guidance - Authorship'",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.informationSource.reference",
        "path" : "MedicationStatement.informationSource.reference",
        "min" : 1
      },
      {
        "id" : "MedicationStatement.reasonCode",
        "path" : "MedicationStatement.reasonCode",
        "short" : "Treatment reason"
      },
      {
        "id" : "MedicationStatement.dosage",
        "path" : "MedicationStatement.dosage",
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
        "id" : "MedicationStatement.dosage:baseEntry",
        "path" : "MedicationStatement.dosage",
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
        "id" : "MedicationStatement.dosage:additionalEntry",
        "path" : "MedicationStatement.dosage",
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
      }
    ]
  }
}

```
