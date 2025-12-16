# CH EMED MedicationStatement (LIST) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationStatement (LIST)**

## Resource Profile: CH EMED MedicationStatement (LIST) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-list | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationStatementList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication statement for the medication list document 

**Usages:**

* Refer to this Profile: [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md)
* Examples for this Profile: [MedicationStatement/2-1-MedStatTriatec](MedicationStatement-2-1-MedStatTriatec.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationstatement-list)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationstatement-list.csv), [Excel](StructureDefinition-ch-emed-medicationstatement-list.xlsx), [Schematron](StructureDefinition-ch-emed-medicationstatement-list.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationstatement-list",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-list",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationStatementList",
  "title" : "CH EMED MedicationStatement (LIST)",
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
  "description" : "Definition of the medication statement for the medication list document",
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
        "short" : "CH EMED MedicationStatement (LIST)"
      },
      {
        "id" : "MedicationStatement.extension:parentDocument",
        "path" : "MedicationStatement.extension",
        "sliceName" : "parentDocument",
        "short" : "Reference to the parent document",
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
        "short" : "Author of the original document if different from the author of the medical decision (MedicationStatement.informationSource), see also 'Guidance - Authorship'",
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
      }
    ]
  }
}

```
