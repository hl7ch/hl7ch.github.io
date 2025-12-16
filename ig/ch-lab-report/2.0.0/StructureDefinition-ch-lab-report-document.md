# CH LAB-Report Document: Laboratory Report - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Document: Laboratory Report**

## Resource Profile: CH LAB-Report Document: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabReportDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Bundle resource for the purpose of laboratory test reports in Switzerland. 

**Usages:**

* Examples for this Profile: [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md) and [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-report-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-report-document.csv), [Excel](StructureDefinition-ch-lab-report-document.xlsx), [Schematron](StructureDefinition-ch-lab-report-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-report-document",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Bundle-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document",
  "version" : "2.0.0",
  "name" : "ChLabReportDocument",
  "title" : "CH LAB-Report Document: Laboratory Report",
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
  "description" : "This profile constrains the Bundle resource for the purpose of laboratory test reports in Switzerland.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH LAB Document: Laboratory Report"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 2
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-composition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:DiagnosticReport",
        "path" : "Bundle.entry",
        "sliceName" : "DiagnosticReport",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:DiagnosticReport.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "DiagnosticReport",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-diagnosticreport"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Specimen",
        "path" : "Bundle.entry",
        "sliceName" : "Specimen",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Specimen.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Specimen",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ServiceRequest",
        "path" : "Bundle.entry",
        "sliceName" : "ServiceRequest",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ServiceRequest.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "ServiceRequest",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-servicerequest"
            ]
          }
        ]
      }
    ]
  }
}

```
