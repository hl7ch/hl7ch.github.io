# CH EPREG Encounter: Child - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Encounter: Child**

## Resource Profile: CH EPREG Encounter: Child 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregEncounterChild |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Encounter resource to represent a pregnancy examination from the child's perspective. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md), [CH EPREG Observation (Child): Fetal Heart Feature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md), [CH EPREG Observation (Child): Fetal Movement](StructureDefinition-ch-epreg-observation-fetal-movement.md), [CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md) and [CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-encounter-child)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-encounter-child.csv), [Excel](StructureDefinition-ch-epreg-encounter-child.xlsx), [Schematron](StructureDefinition-ch-epreg-encounter-child.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-encounter-child",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child",
  "version" : "1.0.0",
  "name" : "ChEpregEncounterChild",
  "title" : "CH EPREG Encounter: Child",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
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
    }
  ],
  "description" : "This profile constrains the Encounter resource to represent a pregnancy examination from the child's perspective.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
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
  "type" : "Encounter",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Encounter",
        "path" : "Encounter",
        "short" : "CH EPREG Encounter: Child",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchung | Examen"
          }
        ]
      },
      {
        "id" : "Encounter.status",
        "path" : "Encounter.status",
        "patternCode" : "finished"
      },
      {
        "id" : "Encounter.subject",
        "path" : "Encounter.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kind | Enfant"
          }
        ]
      },
      {
        "id" : "Encounter.subject.reference",
        "path" : "Encounter.subject.reference",
        "min" : 1
      },
      {
        "id" : "Encounter.participant",
        "path" : "Encounter.participant",
        "min" : 1
      },
      {
        "id" : "Encounter.participant.individual",
        "path" : "Encounter.participant.individual",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kontrolle durchgeführt durch | Contrôle effectué par"
          }
        ]
      },
      {
        "id" : "Encounter.participant.individual.reference",
        "path" : "Encounter.participant.individual.reference",
        "min" : 1
      },
      {
        "id" : "Encounter.period",
        "path" : "Encounter.period",
        "min" : 1
      },
      {
        "id" : "Encounter.period.start",
        "path" : "Encounter.period.start",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Datum | Date de l’examen"
          }
        ]
      },
      {
        "id" : "Encounter.period.end",
        "path" : "Encounter.period.end",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Datum | Date de l’examen"
          }
        ]
      },
      {
        "id" : "Encounter.partOf",
        "path" : "Encounter.partOf",
        "min" : 1,
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.partOf.reference",
        "path" : "Encounter.partOf.reference",
        "min" : 1
      }
    ]
  }
}

```
