# CH EPREG Encounter: Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Encounter: Mother**

## Resource Profile: CH EPREG Encounter: Mother 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregEncounterMother |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Encounter resource to represent a pregnancy examination from the mother's perspective. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md), [CH EPREG Encounter: Child](StructureDefinition-ch-epreg-encounter-child.md), [CH EPREG Observation (Mother): Abdominal Circumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md), [CH EPREG Observation (Mother): Blood Pressure](StructureDefinition-ch-epreg-observation-blood-pressure.md)...Show 7 more,[CH EPREG Observation (Mother): Body Weight](StructureDefinition-ch-epreg-observation-body-weight.md),[CH EPREG Observation (Mother): Fundus Height](StructureDefinition-ch-epreg-observation-fundus-height.md),[CH EPREG Observation (Mother): Gestational Age in Days](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md),[CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md),[CH EPREG Observation (Mother): Urine Finding](StructureDefinition-ch-epreg-observation-urine-finding.md),[CH EPREG Observation (Mother): Vagina Feature](StructureDefinition-ch-epreg-observation-vagina-feature.md)and[CH EPREG Observation (Mother): Weight Gain](StructureDefinition-ch-epreg-observation-weight-gain.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-encounter-mother)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-encounter-mother.csv), [Excel](StructureDefinition-ch-epreg-encounter-mother.xlsx), [Schematron](StructureDefinition-ch-epreg-encounter-mother.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-encounter-mother",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother",
  "version" : "1.0.0",
  "name" : "ChEpregEncounterMother",
  "title" : "CH EPREG Encounter: Mother",
  "status" : "active",
  "date" : "2025-12-16T12:16:11+00:00",
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
  "description" : "This profile constrains the Encounter resource to represent a pregnancy examination from the mother's perspective.",
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
        "short" : "CH EPREG Encounter: Mother",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchung | Examen"
          }
        ]
      },
      {
        "id" : "Encounter.extension",
        "path" : "Encounter.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Encounter.extension:examinationSequence",
        "path" : "Encounter.extension",
        "sliceName" : "examinationSequence",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nummer | Numéro"
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
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
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
      }
    ]
  }
}

```
