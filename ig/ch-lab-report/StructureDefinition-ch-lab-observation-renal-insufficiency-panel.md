# CH LAB-Report Observation Results: Renal Insufficiency Panel - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Renal Insufficiency Panel**

## Resource Profile: CH LAB-Report Observation Results: Renal Insufficiency Panel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-renal-insufficiency-panel | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationRenalInsufficiencyPanel |
| **Copyright/Legal**: Used by permission of HL7 Switzerland, all rights reserved Creative Commons License | |

 
This panel collects the lab results in relation to renal insufiency. 

 
This profile constrains the ChLabObservationPanel profile to represent results in relation to renal insufficiency for the HL7 Swiss project. Their hasMember element contain References to estimated GFR and Albumin Urine Test Observations. 

**Usages:**

* Examples for this Profile: [Observation/ObservationRenalInsufficiencyPanel](Observation-ObservationRenalInsufficiencyPanel.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-renal-insufficiency-panel)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.csv), [Excel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.xlsx), [Schematron](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-renal-insufficiency-panel",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-renal-insufficiency-panel",
  "version" : "2.0.0",
  "name" : "ChLabObservationRenalInsufficiencyPanel",
  "title" : "CH LAB-Report Observation Results: Renal Insufficiency Panel",
  "status" : "active",
  "date" : "2025-12-16T10:40:10+00:00",
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
  "description" : "This panel collects the lab results in relation to renal insufiency.",
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
  "purpose" : "This profile constrains the ChLabObservationPanel profile to represent results in relation to renal insufficiency for the  HL7 Swiss project. Their hasMember element contain References to estimated GFR and Albumin Urine Test Observations.",
  "copyright" : "Used by permission of HL7 Switzerland, all rights reserved Creative Commons License",
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
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "723188008"
            }
          ]
        }
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "min" : 2
      },
      {
        "id" : "Observation.hasMember:CKD-EPI",
        "path" : "Observation.hasMember",
        "sliceName" : "CKD-EPI",
        "label" : "Label",
        "short" : "eGFR crea, CKD-EPI 2021 or eGFR crea cystatin, CKD-EPI 2021",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember:uACR",
        "path" : "Observation.hasMember",
        "sliceName" : "uACR",
        "label" : "Label",
        "short" : "uACR, Urin Albumin/Creatinin Quotient",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
