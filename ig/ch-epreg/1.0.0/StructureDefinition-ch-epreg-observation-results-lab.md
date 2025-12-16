# CH EPREG Observation (Base): Results Laboratory - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Observation (Base): Results Laboratory**

## Resource Profile: CH EPREG Observation (Base): Results Laboratory 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregObservationResultsLab |
| **Copyright/Legal**: CC0-1.0 | |

 
This base profile constrains the Observation resource to represent the laboratory results. 

**Usages:**

* Derived from this Profile: [CH EPREG Observation (Lab): Blood Group](StructureDefinition-ch-epreg-observation-blood-group.md) and [CH EPREG Observation (Lab): Fetal RhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md)
* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-observation-results-lab)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-observation-results-lab.csv), [Excel](StructureDefinition-ch-epreg-observation-results-lab.xlsx), [Schematron](StructureDefinition-ch-epreg-observation-results-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-observation-results-lab",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab",
  "version" : "1.0.0",
  "name" : "ChEpregObservationResultsLab",
  "title" : "CH EPREG Observation (Base): Results Laboratory",
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
  "description" : "This base profile constrains the Observation resource to represent the laboratory results.",
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
        "short" : "CH EPREG Observation: Results Laboratory"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "strength" : "preferred",
          "description" : "See also [Mapping Laboratory Results](mapping-concept-valuesets.html#laboratory-results).",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-obsCode-eu-lab"
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
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/RelatedPerson"
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
        "short" : "See also 'Mapping Measurement Results'.",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "short" : "See also 'Mapping Measurement Results'.",
        "mustSupport" : true
      }
    ]
  }
}

```
