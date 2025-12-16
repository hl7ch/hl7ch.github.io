# CH EMED MedicationStatement (CARD) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationStatement (CARD)**

## Resource Profile: CH EMED MedicationStatement (CARD) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationStatementCard |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication statement for the medication card document 

**Usages:**

* Use this Profile: [CH EMED Medication Card Document](StructureDefinition-ch-emed-document-medicationcard.md)
* Refer to this Profile: [CH EMED Medication Card Composition](StructureDefinition-ch-emed-composition-medicationcard.md)
* Examples for this Profile: [MedicationStatement/2-7-MedStatBeloczok](MedicationStatement-2-7-MedStatBeloczok.md), [MedicationStatement/2-7-MedStatNorvasc](MedicationStatement-2-7-MedStatNorvasc.md) and [MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationstatement-card)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationstatement-card.csv), [Excel](StructureDefinition-ch-emed-medicationstatement-card.xlsx), [Schematron](StructureDefinition-ch-emed-medicationstatement-card.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationstatement-card",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationStatementCard",
  "title" : "CH EMED MedicationStatement (CARD)",
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
  "description" : "Definition of the medication statement for the medication card document",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationStatement",
        "path" : "MedicationStatement",
        "short" : "CH EMED MedicationStatement (CARD)"
      },
      {
        "id" : "MedicationStatement.extension:treatmentPlan",
        "path" : "MedicationStatement.extension",
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
        "id" : "MedicationStatement.extension:authorDocument",
        "path" : "MedicationStatement.extension",
        "sliceName" : "authorDocument",
        "short" : "\"Last\" author of the original document if different from the author of the medical decision (MedicationStatement.informationSource), see also 'Guidance - Authorship'",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.extension:lastConsideredDocument",
        "path" : "MedicationStatement.extension",
        "sliceName" : "lastConsideredDocument",
        "short" : "Identifier of the last considered document for consolidating this MedicationStatement",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-last-considered-document"
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
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
            ],
            "aggregation" : ["contained"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "MedicationStatement.informationSource",
        "path" : "MedicationStatement.informationSource",
        "short" : "The \"last\" author of the medical decision, see also 'Guidance - Authorship'"
      },
      {
        "id" : "MedicationStatement.reasonCode.text",
        "path" : "MedicationStatement.reasonCode.text",
        "mustSupport" : true
      },
      {
        "id" : "MedicationStatement.note",
        "path" : "MedicationStatement.note",
        "short" : "Annotation comment"
      },
      {
        "id" : "MedicationStatement.dosage:baseEntry",
        "path" : "MedicationStatement.dosage",
        "sliceName" : "baseEntry",
        "mustSupport" : true
      },
      {
        "id" : "MedicationStatement.dosage:additionalEntry",
        "path" : "MedicationStatement.dosage",
        "sliceName" : "additionalEntry",
        "mustSupport" : true
      }
    ]
  }
}

```
