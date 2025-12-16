# CH EPREG Observation (Mother): Blood Pressure - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Observation (Mother): Blood Pressure**

## Resource Profile: CH EPREG Observation (Mother): Blood Pressure 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregObservationBloodPressure |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource to represent the blood pressure. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-observation-blood-pressure)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-observation-blood-pressure.csv), [Excel](StructureDefinition-ch-epreg-observation-blood-pressure.xlsx), [Schematron](StructureDefinition-ch-epreg-observation-blood-pressure.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-observation-blood-pressure",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/StructureDefinition/bp"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure",
  "version" : "1.0.0",
  "name" : "ChEpregObservationBloodPressure",
  "title" : "CH EPREG Observation (Mother): Blood Pressure",
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
  "description" : "This profile constrains the Observation resource to represent the blood pressure.",
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
        "short" : "CH EPREG Observation: Blood Pressure"
      },
      {
        "id" : "Observation.category",
        "path" : "Observation.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
              "code" : "vital-signs"
            }
          ]
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "85354-9"
            }
          ]
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Blutdruck | Pression artérielle"
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
        "id" : "Observation.encounter",
        "path" : "Observation.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
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
        "max" : "0"
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Observation.component:SystolicBP",
        "path" : "Observation.component",
        "sliceName" : "SystolicBP",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:SystolicBP.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8480-6"
            }
          ]
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Systolischer Blutdruckwert | Valeur de la pression artérielle systolique"
          }
        ]
      },
      {
        "id" : "Observation.component:SystolicBP.value[x]",
        "path" : "Observation.component.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Systolischer Blutdruckwert | Valeur de la pression artérielle systolique"
          }
        ]
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].value",
        "path" : "Observation.component.value[x].value",
        "min" : 1
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].system",
        "path" : "Observation.component.value[x].system",
        "min" : 1,
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].code",
        "path" : "Observation.component.value[x].code",
        "min" : 1,
        "patternCode" : "mm[Hg]"
      },
      {
        "id" : "Observation.component:DiastolicBP",
        "path" : "Observation.component",
        "sliceName" : "DiastolicBP",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:DiastolicBP.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8462-4"
            }
          ]
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Diastolischer Blutdruckwert | Valeur de la pression artérielle diastolique"
          }
        ]
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x]",
        "path" : "Observation.component.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Diastolischer Blutdruckwert | Valeur de la pression artérielle diastolique"
          }
        ]
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].value",
        "path" : "Observation.component.value[x].value",
        "min" : 1
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].system",
        "path" : "Observation.component.value[x].system",
        "min" : 1,
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].code",
        "path" : "Observation.component.value[x].code",
        "min" : 1,
        "patternCode" : "mm[Hg]"
      }
    ]
  }
}

```
