# CH EPREG Observation (Child): Fetal Movement - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Observation (Child): Fetal Movement**

## Resource Profile: CH EPREG Observation (Child): Fetal Movement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-movement | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregObservationFetalMovement |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource to represent the movement of the fetus (e.g. activity, strength). 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-observation-fetal-movement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-observation-fetal-movement.csv), [Excel](StructureDefinition-ch-epreg-observation-fetal-movement.xlsx), [Schematron](StructureDefinition-ch-epreg-observation-fetal-movement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-observation-fetal-movement",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-movement",
  "version" : "1.0.0",
  "name" : "ChEpregObservationFetalMovement",
  "title" : "CH EPREG Observation (Child): Fetal Movement",
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
  "description" : "This profile constrains the Observation resource to represent the movement of the fetus (e.g. activity, strength).",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH EPREG Observation: Fetal Movement"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "249040004"
            }
          ]
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kindsbewegungen | Mobilité fœtale"
          }
        ]
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
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
        "id" : "Observation.encounter",
        "path" : "Observation.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchung | Examen"
          }
        ]
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Zeitpunkt der Untersuchung | Date de l’examen"
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kontrolle durchgeführt durch | Contrôle effectué par"
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kindsbewegungen | Mobilité fœtale"
          }
        ]
      }
    ]
  }
}

```
