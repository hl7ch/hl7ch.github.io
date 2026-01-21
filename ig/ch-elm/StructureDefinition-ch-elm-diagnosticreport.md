# CH ELM DiagnosticReport: Laboratory Report - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM DiagnosticReport: Laboratory Report**

## Resource Profile: CH ELM DiagnosticReport: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmDiagnosticReport |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the DiagnosticReport resource for the purpose of laboratory test reports. 

**Usages:**

* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-diagnosticreport)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-diagnosticreport.csv), [Excel](StructureDefinition-ch-elm-diagnosticreport.xlsx), [Schematron](StructureDefinition-ch-elm-diagnosticreport.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-diagnosticreport",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/DiagnosticReport-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport",
  "version" : "1.13.1",
  "name" : "ChElmDiagnosticReport",
  "title" : "CH ELM DiagnosticReport: Laboratory Report",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM base profile constrains the DiagnosticReport resource for the purpose of laboratory test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-diagnosticreport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DiagnosticReport",
        "path" : "DiagnosticReport",
        "short" : "CH ELM DiagnosticReport: Laboratory Report"
      },
      {
        "id" : "DiagnosticReport.identifier",
        "path" : "DiagnosticReport.identifier",
        "short" : "Persistent, unique identifier for the diagnostic report (UUID)",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "DiagnosticReport.identifier.system",
        "path" : "DiagnosticReport.identifier.system",
        "min" : 1,
        "patternUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "DiagnosticReport.identifier.value",
        "path" : "DiagnosticReport.identifier.value",
        "min" : 1,
        "example" : [
          {
            "label" : "CH ELM",
            "valueString" : "urn:uuid:d494503a-7bef-4551-853c-f3dced2c518f"
          }
        ],
        "constraint" : [
          {
            "key" : "ch-elm-doc-identifier",
            "severity" : "error",
            "human" : "The identifier must be an UUID.",
            "expression" : "startsWith('urn:uuid:')",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport"
          }
        ]
      },
      {
        "id" : "DiagnosticReport.basedOn",
        "path" : "DiagnosticReport.basedOn",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.status",
        "path" : "DiagnosticReport.status",
        "patternCode" : "final"
      },
      {
        "id" : "DiagnosticReport.subject",
        "path" : "DiagnosticReport.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.performer",
        "path" : "DiagnosticReport.performer",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.specimen",
        "path" : "DiagnosticReport.specimen",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.result",
        "path" : "DiagnosticReport.result",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
            ]
          }
        ]
      }
    ]
  }
}

```
