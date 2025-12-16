# CH Core MedicationStatement - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core MedicationStatement**

## Resource Profile: CH Core MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreMedicationStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the MedicationStatement resource for use in Swiss specific use cases. 

**Usages:**

* Examples for this Profile: [MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-medicationstatement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-medicationstatement.csv), [Excel](StructureDefinition-ch-core-medicationstatement.xlsx), [Schematron](StructureDefinition-ch-core-medicationstatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-medicationstatement",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement",
  "version" : "6.0.0",
  "name" : "CHCoreMedicationStatement",
  "title" : "CH Core MedicationStatement",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Base definition of the MedicationStatement resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationStatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationStatement",
        "path" : "MedicationStatement",
        "short" : "CH Core MedicationStatement"
      },
      {
        "id" : "MedicationStatement.extension",
        "path" : "MedicationStatement.extension",
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
        "id" : "MedicationStatement.extension:substitution",
        "path" : "MedicationStatement.extension",
        "sliceName" : "substitution",
        "short" : "Whether substitution is allowed or not",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.medication[x]",
        "path" : "MedicationStatement.medication[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.subject",
        "path" : "MedicationStatement.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.informationSource",
        "path" : "MedicationStatement.informationSource",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "MedicationStatement.dosage",
        "path" : "MedicationStatement.dosage",
        "type" : [
          {
            "code" : "Dosage",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage"
            ]
          }
        ]
      }
    ]
  }
}

```
