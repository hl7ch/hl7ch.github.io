# CH EPREG Observation (Base): Pregnancy Progress - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Observation (Base): Pregnancy Progress**

## Resource Profile: CH EPREG Observation (Base): Pregnancy Progress 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregObservationPregProgress |
| **Copyright/Legal**: CC0-1.0 | |

 
This base profile constrains the Observation resource to represent the pregnancy progress. 

**Usages:**

* Derived from this Profile: [CH EPREG Observation (Mother): Abdominal Circumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md), [CH EPREG Observation (Mother): Blood Pressure](StructureDefinition-ch-epreg-observation-blood-pressure.md), [CH EPREG Observation (Mother): Body Weight](StructureDefinition-ch-epreg-observation-body-weight.md), [CH EPREG Observation (Child): Fetal Heart Feature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md)...Show 7 more,[CH EPREG Observation (Child): Fetal Movement](StructureDefinition-ch-epreg-observation-fetal-movement.md),[CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md),[CH EPREG Observation (Mother): Fundus Height](StructureDefinition-ch-epreg-observation-fundus-height.md),[CH EPREG Observation (Mother): Gestational Age in Days](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md),[CH EPREG Observation (Mother): Urine Finding](StructureDefinition-ch-epreg-observation-urine-finding.md),[CH EPREG Observation (Mother): Vagina Feature](StructureDefinition-ch-epreg-observation-vagina-feature.md)and[CH EPREG Observation (Mother): Weight Gain](StructureDefinition-ch-epreg-observation-weight-gain.md)
* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-observation-preg-progress)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-observation-preg-progress.csv), [Excel](StructureDefinition-ch-epreg-observation-preg-progress.xlsx), [Schematron](StructureDefinition-ch-epreg-observation-preg-progress.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-observation-preg-progress",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress",
  "version" : "1.0.0",
  "name" : "ChEpregObservationPregProgress",
  "title" : "CH EPREG Observation (Base): Pregnancy Progress",
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
  "description" : "This base profile constrains the Observation resource to represent the pregnancy progress.",
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
        "short" : "CH EPREG Observation: Pregnancy Progress"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "ObservationCode"
            }
          ],
          "strength" : "example",
          "description" : "See also [Mapping Further Examinations](mapping-concept-valuesets.html#further-examinations).",
          "valueSet" : "http://hl7.org/fhir/ValueSet/observation-codes"
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
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
        "id" : "Observation.encounter",
        "path" : "Observation.encounter",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
            ]
          }
        ]
      },
      {
        "id" : "Observation.encounter.reference",
        "path" : "Observation.encounter.reference",
        "min" : 1
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "min" : 1
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
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
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "mustSupport" : true
      }
    ]
  }
}

```
