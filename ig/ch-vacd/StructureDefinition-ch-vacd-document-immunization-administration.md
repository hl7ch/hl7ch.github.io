# CH VACD Immunization Administration Document - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Immunization Administration Document**

## Resource Profile: CH VACD Immunization Administration Document 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration | *Version*:6.0.0 | |
| Active as of 2025-12-16 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:CHVACDDocumentImmunizationAdministration |
| **Copyright/Legal**: CC0-1.0 | | |

 
Definition of the bundle for the immunization administration document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. 

**Usages:**

* Examples for this Profile: [Bundle/1-1-ImmunizationAdministration](Bundle-1-1-ImmunizationAdministration.md), [Bundle/A-D1-P-C1](Bundle-A-D1-P-C1.md), [Bundle/A-D2-HCP1-C1](Bundle-A-D2-HCP1-C1.md), [Bundle/A-D3-HCP2-C2](Bundle-A-D3-HCP2-C2.md)...Show 31 more,[Bundle/A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md),[Bundle/A-D5-P-C1](Bundle-A-D5-P-C1.md),[Bundle/A-D6-HCP1-C1](Bundle-A-D6-HCP1-C1.md),[Bundle/B-D1-HCP1-C1](Bundle-B-D1-HCP1-C1.md),[Bundle/B-D2-HCP1-C1](Bundle-B-D2-HCP1-C1.md),[Bundle/B-D3-HCP1-C1](Bundle-B-D3-HCP1-C1.md),[Bundle/B-D4-HCP1-C1](Bundle-B-D4-HCP1-C1.md),[Bundle/B-D5-HCP1-C1](Bundle-B-D5-HCP1-C1.md),[Bundle/B-D6-HCP1-C1](Bundle-B-D6-HCP1-C1.md),[Bundle/C-D1-P-C1](Bundle-C-D1-P-C1.md),[Bundle/C-D2-HCP1-C1](Bundle-C-D2-HCP1-C1.md),[Bundle/C-D3-HCP1-C1](Bundle-C-D3-HCP1-C1.md),[Bundle/C-D4-HCP2-C2](Bundle-C-D4-HCP2-C2.md),[Bundle/C-D5-HCP1-C1](Bundle-C-D5-HCP1-C1.md),[Bundle/C-D6-P-C1](Bundle-C-D6-P-C1.md),[Bundle/C-D7-HCP1-C1](Bundle-C-D7-HCP1-C1.md),[Bundle/D-D1-HCP1-C1](Bundle-D-D1-HCP1-C1.md),[Bundle/D-D2-HCP2-C2](Bundle-D-D2-HCP2-C2.md),[Bundle/D-D3-HCP1-C1](Bundle-D-D3-HCP1-C1.md),[Bundle/D-D4-HCP2-C2](Bundle-D-D4-HCP2-C2.md),[Bundle/D-D5-HCP1-C1](Bundle-D-D5-HCP1-C1.md),[Bundle/D-D6-HCP2-C2](Bundle-D-D6-HCP2-C2.md),[Bundle/D-D7-HCP3-C1](Bundle-D-D7-HCP3-C1.md),[Bundle/E-D1-HCP1-C1](Bundle-E-D1-HCP1-C1.md),[Bundle/E-D2-HCP1-C1](Bundle-E-D2-HCP1-C1.md),[Bundle/F-D1-HCP1-C1](Bundle-F-D1-HCP1-C1.md),[Bundle/F-D2-HCP1-C1](Bundle-F-D2-HCP1-C1.md),[Bundle/F-D3-HCP1-C1](Bundle-F-D3-HCP1-C1.md),[Bundle/F-D4-HCP1-C1](Bundle-F-D4-HCP1-C1.md),[Bundle/F-D5-HCP1-C1](Bundle-F-D5-HCP1-C1.md)and[Bundle/F-D6-HCP1-C1](Bundle-F-D6-HCP1-C1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-document-immunization-administration)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-document-immunization-administration.csv), [Excel](StructureDefinition-ch-vacd-document-immunization-administration.xlsx), [Schematron](StructureDefinition-ch-vacd-document-immunization-administration.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-document-immunization-administration",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration",
  "version" : "6.0.0",
  "name" : "CHVACDDocumentImmunizationAdministration",
  "title" : "CH VACD Immunization Administration Document",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T10:03:10+00:00",
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
  "description" : "Definition of the bundle for the immunization administration document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH VACD Immunization Administration Document"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "short" : "Unique identification number"
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 3
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition",
        "short" : "Immunization Administration composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Immunization",
        "path" : "Bundle.entry",
        "sliceName" : "Immunization",
        "short" : "Immunization",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Immunization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Immunization",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:BasicImmunization",
        "path" : "Bundle.entry",
        "sliceName" : "BasicImmunization",
        "short" : "BasicImmunizations",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:BasicImmunization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicalProblem",
        "path" : "Bundle.entry",
        "sliceName" : "MedicalProblem",
        "short" : "MedicalProblems",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicalProblem.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PastIllness",
        "path" : "Bundle.entry",
        "sliceName" : "PastIllness",
        "short" : "PastIllness",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PastIllness.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance",
        "path" : "Bundle.entry",
        "sliceName" : "AllergyIntolerance",
        "short" : "AllergyIntolerance",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AllergyIntolerance",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "short" : "Observation",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Medication",
        "path" : "Bundle.entry",
        "sliceName" : "Medication",
        "short" : "Medication",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Medication.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Medication",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
            ]
          }
        ]
      }
    ]
  }
}

```
