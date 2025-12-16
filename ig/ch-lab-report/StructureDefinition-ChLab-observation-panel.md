# CH LAB-Report Observation Results: Panel - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Panel**

## Resource Profile: CH LAB-Report Observation Results: Panel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationPanel |
| **Copyright/Legal**: Used by permission of HL7 Switzerland, all rights reserved Creative Commons License | |

 
This profile constrains the ChLabObservationResultsLaboratory profile to represent only a panel / battery of laboratory test results for the HL7 Swiss project. The top-level observation contains only further observations-panels and observations-single-tests in the hasMember element. The observation-panels may carry a conclusion in the note element and/or a global interpretation by the producer of the study, in the interpretation element; value[x] and component elements are not allowed and have to be shown in the observation-single-test profile. 

 
This profile constrains the ChLabObservationResultsLaboratory profile to represent a panel or battery of laboratory test results for the HL7 Swiss project. 

**Usages:**

* Derived from this Profile: [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles](StructureDefinition-ch-lab-observation-cbc-panel.md) and [CH LAB-Report Observation Results: Renal Insufficiency Panel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md)
* Refer to this Profile: [CH LAB-Report Observation Results: Panel](StructureDefinition-ChLab-observation-panel.md)
* Examples for this Profile: [Observation/BloodGroupPanel](Observation-BloodGroupPanel.md) and [Observation/ObservationPanel](Observation-ObservationPanel.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ChLab-observation-panel)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChLab-observation-panel.csv), [Excel](StructureDefinition-ChLab-observation-panel.xlsx), [Schematron](StructureDefinition-ChLab-observation-panel.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChLab-observation-panel",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel",
  "version" : "2.0.0",
  "name" : "ChLabObservationPanel",
  "title" : "CH LAB-Report Observation Results: Panel",
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
  "description" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent only a panel / battery of laboratory test results for the HL7 Swiss project. The top-level observation contains only further observations-panels and observations-single-tests in the hasMember element. The observation-panels may carry a conclusion in the note element and/or a global interpretation by the producer of the study, in the interpretation element; value[x] and component elements are not allowed and have to be shown in the observation-single-test profile.",
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
  "purpose" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent a panel or battery of laboratory test results for the  HL7 Swiss project.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.value[x]:valueString",
        "path" : "Observation.value[x]",
        "sliceName" : "valueString",
        "max" : "0",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueBoolean",
        "path" : "Observation.value[x]",
        "sliceName" : "valueBoolean",
        "max" : "0",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueRange",
        "path" : "Observation.value[x]",
        "sliceName" : "valueRange",
        "max" : "0",
        "type" : [
          {
            "code" : "Range",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Range-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueRatio",
        "path" : "Observation.value[x]",
        "sliceName" : "valueRatio",
        "max" : "0",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Ratio-eu-lab"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueTime",
        "path" : "Observation.value[x]",
        "sliceName" : "valueTime",
        "max" : "0",
        "type" : [
          {
            "code" : "time"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueDateTime",
        "path" : "Observation.value[x]",
        "sliceName" : "valueDateTime",
        "max" : "0",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valuePeriod",
        "path" : "Observation.value[x]",
        "sliceName" : "valuePeriod",
        "max" : "0",
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
        "sliceName" : "valueQuantity",
        "max" : "0",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueCodeableConcept",
        "path" : "Observation.value[x]",
        "sliceName" : "valueCodeableConcept",
        "max" : "0",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "mustSupport" : true
      },
      {
        "id" : "Observation.note",
        "path" : "Observation.note",
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "max" : "0"
      }
    ]
  }
}

```
