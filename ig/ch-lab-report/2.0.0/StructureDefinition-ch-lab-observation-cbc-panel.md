# CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles**

## Resource Profile: CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc-panel | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationCBCPanel |
| **Copyright/Legal**: CC0-1.0 | |

 
This panel is the traditional hemogram plus platelet count which must now be reported with with hemograms according to current US re-imbursement rule The panel includes 2 different RDWs to accommodate the two different ways of reporting them. (Most automated instruments report as a percent ). The hemoglobin produced by the automatic counters does not use a counting method to generate the hemoglobin so we have used the fotometry version of hemoglobin in this panel. 

**Usages:**

* Examples for this Profile: [Observation/ExampleObservationCBCPanel](Observation-ExampleObservationCBCPanel.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-cbc-panel)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-cbc-panel.csv), [Excel](StructureDefinition-ch-lab-observation-cbc-panel.xlsx), [Schematron](StructureDefinition-ch-lab-observation-cbc-panel.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-cbc-panel",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc-panel",
  "version" : "2.0.0",
  "name" : "ChLabObservationCBCPanel",
  "title" : "CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This panel is the traditional hemogram plus platelet count which must now be reported with with hemograms according to current US re-imbursement rule The panel includes 2 different RDWs to accommodate the two different ways of reporting them. (Most automated instruments report as a percent ). The hemoglobin produced by the automatic counters does not use a counting method to generate the hemoglobin so we have used the fotometry version of hemoglobin in this panel.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "CBC panel Auto (Bld)",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "58410-2"
            }
          ]
        }
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "min" : 8
      },
      {
        "id" : "Observation.hasMember:WhiteBloodCellCount",
        "path" : "Observation.hasMember",
        "sliceName" : "WhiteBloodCellCount",
        "label" : "Label",
        "short" : "White Blood Cell Count",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-wbc"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:RedBloodCellCount",
        "path" : "Observation.hasMember",
        "sliceName" : "RedBloodCellCount",
        "label" : "Label",
        "short" : "Red Blood Cell Count",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-rbc"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:Hemoglobin",
        "path" : "Observation.hasMember",
        "sliceName" : "Hemoglobin",
        "label" : "Label",
        "short" : "Hemoglobin",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-hb"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:Hematocrit",
        "path" : "Observation.hasMember",
        "sliceName" : "Hematocrit",
        "label" : "Label",
        "short" : "Hematocrit",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ht"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:MeanCorpuscularVolume",
        "path" : "Observation.hasMember",
        "sliceName" : "MeanCorpuscularVolume",
        "label" : "Label",
        "short" : "Mean Corpuscular Volume MCV",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mcv"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:MeanCorpuscularHemoglobin",
        "path" : "Observation.hasMember",
        "sliceName" : "MeanCorpuscularHemoglobin",
        "label" : "Label",
        "short" : "Mean Corpuscular Hemoglobin MCH",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mch"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:MeanCorpuscularHemoglobinConcentration",
        "path" : "Observation.hasMember",
        "sliceName" : "MeanCorpuscularHemoglobinConcentration",
        "label" : "Label",
        "short" : "Mean Corpuscular Hemoglobin Concentration MCHC",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mchc"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:ErythrocyteDistributionWidth",
        "path" : "Observation.hasMember",
        "sliceName" : "ErythrocyteDistributionWidth",
        "label" : "Label",
        "short" : "Erythrocyte Distribution Width",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:PlateletCount",
        "path" : "Observation.hasMember",
        "sliceName" : "PlateletCount",
        "label" : "Label",
        "short" : "Platelet Count",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-platelets"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:PlateletDistributionWidth",
        "path" : "Observation.hasMember",
        "sliceName" : "PlateletDistributionWidth",
        "label" : "Label",
        "short" : "Platelet Distribution Width",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-platelets-distribution-width"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:PlateletMeanVolume",
        "path" : "Observation.hasMember",
        "sliceName" : "PlateletMeanVolume",
        "label" : "Label",
        "short" : "Platelet Mean Volume",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-platelets-mean-volume"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
