# CH EMED MedicationStatement Changed - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationStatement Changed**

## Resource Profile: CH EMED MedicationStatement Changed 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-changed | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationStatementChanged |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the changed medication statement for the pharmaceutical advice document 

**Usages:**

* Derived from this Profile: [CH EMED MedicationStatement Changed (LIST)](StructureDefinition-ch-emed-medicationstatement-changed-list.md)
* Use this Profile: [CH EMED Pharmaceutical Advice Document](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md)
* Refer to this Profile: [CH EMED Extension MedicationStatement Changed](StructureDefinition-ch-emed-ext-medicationstatement-changed.md)
* Examples for this Profile: [MedicationStatement/MedStatTriatec-ChangeDosage](MedicationStatement-MedStatTriatec-ChangeDosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationstatement-changed)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationstatement-changed.csv), [Excel](StructureDefinition-ch-emed-medicationstatement-changed.xlsx), [Schematron](StructureDefinition-ch-emed-medicationstatement-changed.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationstatement-changed",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-changed",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationStatementChanged",
  "title" : "CH EMED MedicationStatement Changed",
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
  "description" : "Definition of the changed medication statement for the pharmaceutical advice document",
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
        "short" : "CH EMED MedicationStatement Changed (PADV)"
      },
      {
        "id" : "MedicationStatement.partOf",
        "path" : "MedicationStatement.partOf",
        "short" : "Reference to the Observation from type 'CHANGE'",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ]
      }
    ]
  }
}

```
