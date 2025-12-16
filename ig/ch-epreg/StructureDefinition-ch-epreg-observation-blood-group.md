# CH EPREG Observation (Lab): Blood Group - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Observation (Lab): Blood Group**

## Resource Profile: CH EPREG Observation (Lab): Blood Group 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-group | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregObservationBloodGroup |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource to represent the blood group. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-observation-blood-group)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-observation-blood-group.csv), [Excel](StructureDefinition-ch-epreg-observation-blood-group.xlsx), [Schematron](StructureDefinition-ch-epreg-observation-blood-group.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-observation-blood-group",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-group",
  "version" : "1.0.0",
  "name" : "ChEpregObservationBloodGroup",
  "title" : "CH EPREG Observation (Lab): Blood Group",
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
  "description" : "This profile constrains the Observation resource to represent the blood group.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH EPREG Observation: Blood Group",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchungen und Tests | Analyses et tests"
          }
        ]
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "365636006"
            }
          ]
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Blutgruppenzugehörigkeit | Détermination du groupe sanguin"
          }
        ]
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
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
            "map" : "Untersuchungsdatum | Date de l’analyse"
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Durchgeführt durch | Analyse effectuée par"
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "description" : "See also [Mapping Blood Group & Rhesus](mapping-concept-valuesets.html#blood-group--rhesus).",
          "valueSet" : "http://fhir.ch/ig/ch-epreg/ValueSet/blood-group"
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Blutgruppe | Groupe sanguin"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Rhesus | Rhésus"
          }
        ]
      }
    ]
  }
}

```
