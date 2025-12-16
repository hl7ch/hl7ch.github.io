# CH LAB-Report Observation Results: Laboratory Report - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Laboratory Report**

## Resource Profile: CH LAB-Report Observation Results: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationResultsLaboratory |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource for the purpose of laboratory test reports in Switzerland. 

 
This profile constrains the Observation resource to represent a laboratory in vitro diagnostic test or panel/study. In case of a panel/study, the results of the panel appear as sub-observations. In this case this top-level Observation acts as a grouper of all the observations belonging to the panel or study. The top-level observation may carry a conclusion in the note element and or a global interpretation by the producer of the study, in the interpretation element. 

**Usages:**

* Derived from this Profile: [CH LAB-Report Observation Results: Panel](StructureDefinition-ChLab-observation-panel.md) and [CH LAB-Report Observation Results: Single Test](StructureDefinition-ChLab-observation-single-test.md)
* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md), [CH LAB-Report Observation Results: Laboratory Report](StructureDefinition-ch-lab-observation-results-laboratory.md) and [CH LAB-Report Composition: Laboratory Report](StructureDefinition-ch-lab-report-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-results-laboratory)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-results-laboratory.csv), [Excel](StructureDefinition-ch-lab-observation-results-laboratory.xlsx), [Schematron](StructureDefinition-ch-lab-observation-results-laboratory.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-results-laboratory",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory",
  "version" : "2.0.0",
  "name" : "ChLabObservationResultsLaboratory",
  "title" : "CH LAB-Report Observation Results: Laboratory Report",
  "status" : "active",
  "experimental" : false,
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
  "description" : "This profile constrains the Observation resource for the purpose of laboratory test reports in Switzerland.",
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
  "purpose" : "This profile constrains the Observation resource to represent a laboratory in vitro diagnostic test or panel/study. In case of a panel/study, the results of the panel appear as sub-observations. In this case this top-level Observation acts as a grouper of all the observations belonging to the panel or study.  The top-level observation may carry a conclusion in the note element and or a global interpretation by the producer of the study, in the interpretation element.",
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
        "short" : "Laboratory result for a simple test or for a panel/study",
        "definition" : "This observation may represent the result of a simple laboratory test such as hematocrit or it may group the set of results produced by a multi-test study or panel such as a complete blood count, a dynamic function test, a urine specimen study. In the latter case, the observation carries the overall conclusion of the study and references the atomic results of the study as \"has-member\" child observations",
        "comment" : "Represents either a lab simple observation or the group of observations produced by a laboratory study.",
        "constraint" : [
          {
            "key" : "eu-lab-1",
            "severity" : "error",
            "human" : "If observation status is other then \"registered\" or \"cancelled\", at least one of these Observation elements shall be provided:  \"value\", \"dataAbsentReason\", \"hasMember\" or \"component\"",
            "expression" : "(status in ('registered'|'cancelled')) or value.exists() or hasMember.exists() or component.exists() or dataAbsentReason.exists()",
            "source" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
          },
          {
            "key" : "eu-lab-2",
            "severity" : "error",
            "human" : "If observation has components and observation status is other then \"registered\" or \"cancelled\", at least one of these Observation.component elements shall be provided:  \"value\" or \"dataAbsentReason\"",
            "expression" : "component.exists() implies (status in ('registered'|'cancelled')) or component.value.exists() or component.dataAbsentReason.exists()",
            "source" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
          }
        ]
      },
      {
        "id" : "Observation.extension",
        "path" : "Observation.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Laboratory Test Kit",
        "definition" : "The laboratory test kit used for this test."
      },
      {
        "id" : "Observation.extension:supportingInfo",
        "path" : "Observation.extension",
        "sliceName" : "supportingInfo",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/workflow-supportingInfo|4.0.1"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:triggeredBy-r5",
        "path" : "Observation.extension",
        "sliceName" : "triggeredBy-r5",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-Observation.triggeredBy"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:triggeredBy-r5.extension:observation",
        "path" : "Observation.extension.extension",
        "sliceName" : "observation",
        "short" : "Triggering observation."
      },
      {
        "id" : "Observation.extension:triggeredBy-r5.extension:type",
        "path" : "Observation.extension.extension",
        "sliceName" : "type",
        "short" : "The type of trigger"
      },
      {
        "id" : "Observation.extension:certifiedRefMaterialCodeable",
        "path" : "Observation.extension",
        "sliceName" : "certifiedRefMaterialCodeable",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/observation-certifiedRefMaterialCodeable"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:certifiedRefMaterialIdentifer",
        "path" : "Observation.extension",
        "sliceName" : "certifiedRefMaterialIdentifer",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/observation-certifiedRefMaterialIdentifer"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:labTestKit",
        "path" : "Observation.extension",
        "sliceName" : "labTestKit",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/observation-deviceLabTestKit"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:value-r5",
        "path" : "Observation.extension",
        "sliceName" : "value-r5",
        "short" : "only for result of type Attachment",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-Observation.value%5Bx%5D"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:value-r5.value[x]",
        "path" : "Observation.extension.value[x]",
        "type" : [
          {
            "code" : "Attachment"
          }
        ]
      },
      {
        "id" : "Observation.status",
        "path" : "Observation.status",
        "short" : "Status of this observation (e.g. preliminary, final,...)"
      },
      {
        "id" : "Observation.category",
        "path" : "Observation.category",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "definition" : "A code that classifies the general type of observation being made. In this profile, fixed to \"laboratory\".",
        "comment" : "\"laboratory\" includes laboratory medicine and pathology",
        "min" : 1
      },
      {
        "id" : "Observation.category:laboratory",
        "path" : "Observation.category",
        "sliceName" : "laboratory",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
              "code" : "laboratory"
            }
          ]
        }
      },
      {
        "id" : "Observation.category:studyType",
        "path" : "Observation.category",
        "sliceName" : "studyType",
        "short" : "The way of grouping of the test results into clinically meaningful domains (e.g. hematology study, microbiology study, etc.)",
        "min" : 0,
        "max" : "*",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Observation.category:specialty",
        "path" : "Observation.category",
        "sliceName" : "specialty",
        "short" : "The clinical domain of the laboratory performing the observation (e.g. microbiology, toxicology, chemistry)",
        "min" : 0,
        "max" : "*",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specialty-eu-lab"
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "definition" : "Describes what was observed. Sometimes this is called the observation \"name\".  In this profile this code represents either a simple laboratory test or a laboratory study with multiple child observations",
        "comment" : "In the context of this Observation-laboratory-uv-ips profile, when the observation plays the role of a grouper of member sub-observations, the code represent the group (for instance a panel code). In case no code is available, at least a text shall be provided.",
        "binding" : {
          "strength" : "preferred",
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
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-animal-eu-lab",
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/Location"
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
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          },
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Observation.effective[x].extension:data-absent-reason",
        "path" : "Observation.effective[x].extension",
        "sliceName" : "data-absent-reason",
        "short" : "effective[x] absence reason",
        "definition" : "Provides a reason why the effectiveTime is missing.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/data-absent-reason|4.0.1"
            ]
          }
        ]
      },
      {
        "id" : "Observation.issued",
        "path" : "Observation.issued",
        "short" : "Date/Time this result was made available"
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitionerrole",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
              "http://hl7.org/fhir/StructureDefinition/RelatedPerson"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer.extension:performerFunction",
        "path" : "Observation.performer.extension",
        "sliceName" : "performerFunction",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/event-performerFunction|4.0.1"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Observation.value[x]:valueString",
        "path" : "Observation.value[x]",
        "sliceName" : "valueString",
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
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
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips"
            ]
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/results-coded-values-laboratory-uv-ips"
        }
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "short" : "Provides a reason why the expected value is missing."
      },
      {
        "id" : "Observation.method",
        "path" : "Observation.method",
        "definition" : "Laboratory technigue that has been used",
        "comment" : "Laboratory technique (method of measurement) are integral parts of the test specification of some laboratory test coding systems (e.g. NPU), in LOINC hovewer measurement principle is not always present in the test definition. In some cases however knowledge of the used measurment techique is important for proper interpretation of the test result.\nThat's why it is important to explicitly include informaiton about measurement method is such cases.",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-technique-eu-lab"
        }
      },
      {
        "id" : "Observation.specimen",
        "path" : "Observation.specimen",
        "comment" : "When the specimen is applicable and known it shall be documented",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
            ]
          }
        ]
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "short" : "Measuring instrument"
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "definition" : "A reference to another Observation profiled by ch-lab-observation-results-laboratory. The target observation (for instance an individual test member of a panel) is considered as a sub-observation of the current one, which plays the role of a grouper.",
        "comment" : "This element is used in the context of international patient summary when there is a need to group a collection of observations, because they belong to the same panel, or because they share a common interpretation comment, or a common media attachment (illustrative image or graph). In these cases, the current observation is the grouper, and its set of sub-observations are related observations using the type \"has-member\".  For a discussion on the ways Observations can be assembled in groups together see [Observation Grouping](http://hl7.org/fhir/observation.html#obsgrouping).",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "short" : "Laboratory result"
      },
      {
        "id" : "Observation.component.extension",
        "path" : "Observation.component.extension",
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
        "id" : "Observation.component.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5",
        "short" : "only for result of type Attachment",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-Observation.value%5Bx%5D"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component.extension:value-r5.value[x]",
        "path" : "Observation.component.extension.value[x]",
        "type" : [
          {
            "code" : "Attachment"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Observation.component.value[x]:valueString",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueBoolean",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueBoolean",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueRange",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueRange",
        "min" : 0,
        "max" : "1",
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
        "id" : "Observation.component.value[x]:valueRatio",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueRatio",
        "min" : 0,
        "max" : "1",
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
        "id" : "Observation.component.value[x]:valueTime",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "time"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueDateTime",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valuePeriod",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valuePeriod",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "min" : 0,
        "max" : "1",
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
        "id" : "Observation.component.value[x]:valueCodeableConcept",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips"
            ]
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/results-coded-values-laboratory-uv-ips"
        }
      }
    ]
  }
}

```
