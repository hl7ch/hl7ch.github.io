# CH LAB-Report DiagnosticReport: Laboratory Report - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report DiagnosticReport: Laboratory Report**

## Resource Profile: CH LAB-Report DiagnosticReport: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-diagnosticreport | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabDiagnosticReport |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the DiagnosticReport resource for the purpose of laboratory test reports in Switzerland. 

**Usages:**

* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report Composition: Laboratory Report](StructureDefinition-ch-lab-report-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-diagnosticreport)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-diagnosticreport.csv), [Excel](StructureDefinition-ch-lab-diagnosticreport.xlsx), [Schematron](StructureDefinition-ch-lab-diagnosticreport.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-diagnosticreport",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/DiagnosticReport-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-diagnosticreport",
  "version" : "2.0.0",
  "name" : "ChLabDiagnosticReport",
  "title" : "CH LAB-Report DiagnosticReport: Laboratory Report",
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
  "description" : "This profile constrains the DiagnosticReport resource for the purpose of laboratory test reports in Switzerland.",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DiagnosticReport",
        "path" : "DiagnosticReport",
        "short" : "CH LAB-Report DiagnosticReport: Laboratory Report",
        "definition" : "Laboratory Report DiagnosticReport"
      },
      {
        "id" : "DiagnosticReport.extension",
        "path" : "DiagnosticReport.extension",
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
        "min" : 1
      },
      {
        "id" : "DiagnosticReport.extension:DiagnosticReportCompositionR5",
        "path" : "DiagnosticReport.extension",
        "sliceName" : "DiagnosticReportCompositionR5",
        "short" : "Associated Lab Report Composition",
        "definition" : "This extension implements the R5 composition element. It allow to link this DiagnosticReport with the Composition documenting this Laboratory Report.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.extension:DiagnosticReportCompositionR5.value[x]",
        "path" : "DiagnosticReport.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-composition"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.identifier",
        "path" : "DiagnosticReport.identifier",
        "short" : "Report identifier",
        "definition" : "Identifiers assigned to this Laboratory Report by the performer or other systems. It shall be common to several report versions",
        "comment" : "Composition.identifier SHALL be equal to one of the DiagnosticReport.identifier, if at least one exists"
      },
      {
        "id" : "DiagnosticReport.basedOn",
        "path" : "DiagnosticReport.basedOn",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-servicerequest"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.status",
        "path" : "DiagnosticReport.status",
        "short" : "Status of the Report",
        "comment" : "DiagnosticReport.status and Composition.status shall be aligned, based on the http://hl7.eu/fhir/laboratory/ConceptMap/ConceptMap-eu-diagRptStatus2CompStatus mapping"
      },
      {
        "id" : "DiagnosticReport.category",
        "path" : "DiagnosticReport.category",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "short" : "Report Category",
        "definition" : "A code that classifies this laboratory report. Two basic categories has been selected in this guide: laboratory specialty and Study type. Laboratory specialty is characteristic of the laboratory that produced the test result while Study type is an arbitrary classificion of the test type.",
        "comment" : "DiagnosticReport.category and Composition.category shall be aligned"
      },
      {
        "id" : "DiagnosticReport.category:studyType",
        "path" : "DiagnosticReport.category",
        "sliceName" : "studyType",
        "short" : "The way of grouping of the test results into clinically meaningful domains (e.g. hematology study, microbiology study, etc.)",
        "definition" : "Laboratory services, i.e., results of tests performed, could be characterized using typology of services, commonly called study types. Study type could be seen as an attribute or grouping mechanism that assigns a common clinical sense to certain types of laboratory test results., e.g., Hemoglobin, Platelet count, etc. belongs to 'Hematology study'.",
        "comment" : "In comparison to the laboratory specialty which is an attribute of laboratory, study type is a categorization of laboratory service. It needs to be mentioned that classification of test to study types in not standardized.",
        "min" : 0,
        "max" : "*",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "DiagnosticReport.category:specialty",
        "path" : "DiagnosticReport.category",
        "sliceName" : "specialty",
        "short" : "The clinical domain of the laboratory performing the observation (e.g. microbiology, toxicology, chemistry)",
        "definition" : "Laboratory specialty is an attribute of any laboratory setting representing professional qualification of the laboratory to execute certain kind of laboratory tests.",
        "comment" : "Specialty could be used as parameter for searching/querying of laboratory test results.",
        "min" : 0,
        "max" : "*",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specialty-eu-lab"
        }
      },
      {
        "id" : "DiagnosticReport.code",
        "path" : "DiagnosticReport.code",
        "short" : "Type of (Laboratory) Report",
        "definition" : "Specifies that it refers to a Laboratory Report",
        "comment" : "At least one DiagnosticReport.code.coding and Composition.type.coding SHALL be equal",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-reportType-eu-lab"
        }
      },
      {
        "id" : "DiagnosticReport.subject",
        "path" : "DiagnosticReport.subject",
        "short" : "Who and/or what this report is about",
        "definition" : "Who or what this report is about. The report can be about a human patient, a living subject, a device (e.g. a machine), a location or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).",
        "comment" : "DiagnosticReport and Composition SHALL have the same subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-animal-eu-lab",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.org/fhir/StructureDefinition/Location",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.encounter",
        "path" : "DiagnosticReport.encounter",
        "short" : "The healthcare event which this Laboratory Report is about (when test ordered).",
        "definition" : "The healthcare event (e.g. a patient and healthcare provider interaction) which this DiagnosticReport is about.",
        "comment" : "This will typically be the encounter the event occurred within, but some events may be initiated prior to or after the official completion of an encounter but still be tied to the context of the encounter (e.g. pre-admission laboratory tests).\n\n  DiagnosticReport and Composition SHALL have the same encounter."
      },
      {
        "id" : "DiagnosticReport.effective[x]",
        "path" : "DiagnosticReport.effective[x]",
        "short" : "Clinically relevant time/time-period for report."
      },
      {
        "id" : "DiagnosticReport.performer",
        "path" : "DiagnosticReport.performer",
        "short" : "Responsible Diagnostic Service.",
        "comment" : "If a DiagnosticReport.resultsInterpreter exists this is expected to be a Composition.author; otherwise a DiagnosticReport.performer should be an author."
      },
      {
        "id" : "DiagnosticReport.resultsInterpreter",
        "path" : "DiagnosticReport.resultsInterpreter",
        "comment" : "If a DiagnosticReport.resultsInterpreter exists this is expected to be a Composition.author; otherwise a DiagnosticReport.performer should be an author."
      },
      {
        "id" : "DiagnosticReport.specimen",
        "path" : "DiagnosticReport.specimen",
        "short" : "Specimens this report is based on.",
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
        "id" : "DiagnosticReport.result",
        "path" : "DiagnosticReport.result",
        "short" : "results",
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
        "id" : "DiagnosticReport.imagingStudy",
        "path" : "DiagnosticReport.imagingStudy",
        "max" : "0"
      },
      {
        "id" : "DiagnosticReport.presentedForm",
        "path" : "DiagnosticReport.presentedForm",
        "short" : "Entire report as issued (pdf recommended)"
      }
    ]
  }
}

```
