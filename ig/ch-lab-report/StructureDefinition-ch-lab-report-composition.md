# CH LAB-Report Composition: Laboratory Report - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Composition: Laboratory Report**

## Resource Profile: CH LAB-Report Composition: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-composition | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabReportComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Composition resource for the purpose of laboratory test reports in Switzerland. 

**Usages:**

* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-report-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-report-composition.csv), [Excel](StructureDefinition-ch-lab-report-composition.xlsx), [Schematron](StructureDefinition-ch-lab-report-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-report-composition",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Composition-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-composition",
  "version" : "2.0.0",
  "name" : "ChLabReportComposition",
  "title" : "CH LAB-Report Composition: Laboratory Report",
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
  "description" : "This profile constrains the Composition resource for the purpose of laboratory test reports in Switzerland.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "Laboratory Report composition",
        "definition" : "Laboratory Report composition.\n\r\nA composition is a set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. \r\nWhile a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained."
      },
      {
        "id" : "Composition.extension",
        "path" : "Composition.extension",
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
        "id" : "Composition.extension:information-recipient",
        "path" : "Composition.extension",
        "sliceName" : "information-recipient",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/StructureDefinition/information-recipient"
            ]
          }
        ]
      },
      {
        "id" : "Composition.extension:information-recipient.value[x]",
        "path" : "Composition.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitioner",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
              "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.extension:basedOn-order-or-requisition",
        "path" : "Composition.extension",
        "sliceName" : "basedOn-order-or-requisition",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/StructureDefinition/composition-basedOn-order-or-requisition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.extension:basedOn-order-or-requisition.value[x]",
        "path" : "Composition.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.extension:basedOn-order-or-requisition.value[x]:valueReference",
        "path" : "Composition.extension.value[x]",
        "sliceName" : "valueReference",
        "min" : 0,
        "max" : "1",
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
        "id" : "Composition.extension:diagnosticReport-reference",
        "path" : "Composition.extension",
        "sliceName" : "diagnosticReport-reference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/composition-diagnosticReportReference"
            ]
          }
        ]
      },
      {
        "id" : "Composition.extension:diagnosticReport-reference.value[x]",
        "path" : "Composition.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-diagnosticreport"
            ]
          }
        ]
      },
      {
        "id" : "Composition.extension:diagnosticReport-reference.value[x].reference",
        "path" : "Composition.extension.value[x].reference",
        "min" : 1
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "short" : "Report identifier",
        "definition" : "Identifiers assigned to this Laboratory Report by the performer or other systems. It shall be common to several report versions",
        "comment" : "Composition.identifier SHALL be equal to one of the DiagnosticReport.identifier, if at least one exists"
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
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
        "definition" : "A code that classifies this laboratory report.",
        "comment" : "DiagnosticReport.category and Composition.category shall be aligned"
      },
      {
        "id" : "Composition.category:studyType",
        "path" : "Composition.category",
        "sliceName" : "studyType",
        "short" : "The clinical domain of the laboratory performing the observation (e.g. microbiology, toxicology, chemistry)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips"
            ]
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Composition.category:specialty",
        "path" : "Composition.category",
        "sliceName" : "specialty",
        "short" : "The way of grouping of the test results into clinically meaningful groups (e.g. liver test; minerals; glucose profiles)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips"
            ]
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specialty-eu-lab"
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient"
            ]
          }
        ]
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitionerrole",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
        "comment" : "Added to the FHIR R4 guide to strctly conform with the R4 rules for document bundle resources inclusion.\n  Using this extension implies to accept a circular reference Composition to/from  DiagnosticReport"
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "exists",
              "path" : "$this.section"
            },
            {
              "type" : "exists",
              "path" : "$this.entry"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "definition" : "The \\\"body\\\" of the report is organized as a tree of up to two levels of sections: top level sections represent laboratory specialties. A top level section SHALL contain either one text block carrying all the text results produced for this specialty along with Laboratory Data Entries or a set of Laboratory Report Item Sections. In the first case the specialty section happens to also be a leaf section. In the latter case, each (second level) leaf section contained in the (top level) specialty section represents a Report Item: i.e., a battery, a specimen study (especially in microbiology), or an individual test. In addition, any leaf section SHALL contain a Laboratory Data Entries containing the observations of that section in a machine-readable format.",
        "min" : 1
      },
      {
        "id" : "Composition.section.title",
        "path" : "Composition.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section.code",
        "path" : "Composition.section.code",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-no-subsections",
        "path" : "Composition.section",
        "sliceName" : "lab-no-subsections",
        "short" : "Variant 1: EU Laboratory Report section with entries and no sub-sections",
        "definition" : "Variant 1: With this option, all laboratory report data entries are provided in the top level sections and no sub-sections are allowed.",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Composition.section:lab-no-subsections.code",
        "path" : "Composition.section.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Composition.section:lab-no-subsections.text",
        "path" : "Composition.section.text",
        "short" : "Text summary of the section, for human interpretation."
      },
      {
        "id" : "Composition.section:lab-no-subsections.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
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
        "id" : "Composition.section:lab-no-subsections.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections",
        "path" : "Composition.section",
        "sliceName" : "lab-subsections",
        "short" : "Variant 2: EU Laboratory Report section with one to many subsections Laboratory Report Item",
        "definition" : "Variant 2: With this option, this top level section doesn't include NEITHER a top level text NOR entry elements. Each Report Item is contained in a corresponding sub-sections which contains the Lab Report Data Entry.",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Composition.section:lab-subsections.code",
        "path" : "Composition.section.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Composition.section:lab-subsections.text",
        "path" : "Composition.section.text",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.entry",
        "path" : "Composition.section.entry",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.section",
        "path" : "Composition.section.section",
        "min" : 1,
        "type" : [
          {
            "code" : "BackboneElement"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section.code",
        "path" : "Composition.section.section.code",
        "min" : 1,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of the section, for human interpretation."
      },
      {
        "id" : "Composition.section:lab-subsections.section.entry",
        "path" : "Composition.section.section.entry",
        "min" : 1,
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
        "id" : "Composition.section:lab-subsections.section.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotations",
        "path" : "Composition.section",
        "sliceName" : "annotations",
        "short" : "Annotation comment",
        "definition" : "Narrative expression of comments accompanying the report, such as suggestions for evaluation, technical notes from the laboratory, etc.\n\nExamples:\nSuggestion: This result should be evaluated in relation to the patient's medical history and clinical condition.\nTechnical note: A list of accredited examination(s) is available at www.laboratory.com. ",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Composition.section:annotations.code",
        "path" : "Composition.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48767-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:annotations.text",
        "path" : "Composition.section.text",
        "min" : 1
      },
      {
        "id" : "Composition.section:annotations.entry",
        "path" : "Composition.section.entry",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotations.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
