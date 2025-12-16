# CH EMED Observation (PADV) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Observation (PADV)**

## Resource Profile: CH EMED Observation (PADV) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the observation for the pharmaceutical advice document 

**Usages:**

* Derived from this Profile: [CH EMED Observation (LIST)](StructureDefinition-ch-emed-observation-list.md)
* Use this Profile: [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md) and [CH EMED Pharmaceutical Advice Document](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md)
* Refer to this Profile: [CH EMED Pharmaceutical Advice Composition](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md), [CH EMED MedicationRequest Changed](StructureDefinition-ch-emed-medicationrequest-changed.md) and [CH EMED MedicationStatement Changed](StructureDefinition-ch-emed-medicationstatement-changed.md)
* Examples for this Profile: [Observation/2-2-ObsPharmaceuticalAdvice](Observation-2-2-ObsPharmaceuticalAdvice.md), [Observation/Obs-ChangeDosage](Observation-Obs-ChangeDosage.md) and [Observation/PharmaceuticalAdvice-ChangeMedicament](Observation-PharmaceuticalAdvice-ChangeMedicament.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-observation.csv), [Excel](StructureDefinition-ch-emed-observation.xlsx), [Schematron](StructureDefinition-ch-emed-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-observation",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation",
  "version" : "6.0.0",
  "name" : "CHEMEDObservation",
  "title" : "CH EMED Observation (PADV)",
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
  "description" : "Definition of the observation for the pharmaceutical advice document",
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
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH EMED Observation (PADV)",
        "constraint" : [
          {
            "key" : "ch-obs-1",
            "severity" : "error",
            "human" : "In case of a 'CHANGE', reference SHALL be made to an entry containing the changes.",
            "expression" : "code.coding.exists(system='urn:oid:1.3.6.1.4.1.19376.1.9.2.1' and code='CHANGE') implies extension.where(url='http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed' or url='http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed').exists()",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
          }
        ]
      },
      {
        "id" : "Observation.extension",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:treatmentPlan",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:prescription",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:dispense",
        "path" : "Observation.extension",
        "sliceName" : "dispense",
        "short" : "Reference to the medication dispense",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:medicationStatementChanged",
        "path" : "Observation.extension",
        "sliceName" : "medicationStatementChanged",
        "short" : "Reference to the changed medication statement (it SHALL have the same identifier as the entry it replaces)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:medicationRequestChanged",
        "path" : "Observation.extension",
        "sliceName" : "medicationRequestChanged",
        "short" : "Reference to the changed medication request (it SHALL have the same identifier as the entry it replaces)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed"
            ]
          }
        ]
      },
      {
        "id" : "Observation.identifier",
        "path" : "Observation.identifier",
        "short" : "Observation Identifier",
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
        "id" : "Observation.status",
        "path" : "Observation.status",
        "fixedCode" : "final"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Observation code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/ihe-pharmaceuticaladvicestatuslist"
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
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
        "id" : "Observation.subject.reference",
        "path" : "Observation.subject.reference",
        "min" : 1
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
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
        "id" : "Observation.effective[x]:effectiveDateTime",
        "path" : "Observation.effective[x]",
        "sliceName" : "effectiveDateTime",
        "short" : "Effective Time",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Observation.issued",
        "path" : "Observation.issued",
        "min" : 1
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "short" : "The author of the medical decision, see also 'Guidance - Authorship'",
        "min" : 1,
        "max" : "1",
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
        "id" : "Observation.performer.reference",
        "path" : "Observation.performer.reference",
        "min" : 1
      },
      {
        "id" : "Observation.note",
        "path" : "Observation.note",
        "short" : "COMMENT: the actual comment. OK/CHANGE/REFUSE/CANCEL/SUSPEND: the reason why the action was done.",
        "min" : 1,
        "max" : "1"
      }
    ]
  }
}

```
