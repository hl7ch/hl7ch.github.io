# CH VACD Vaccination Record Document - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Vaccination Record Document**

## Resource Profile: CH VACD Vaccination Record Document 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record | *Version*:6.0.0 | |
| Active as of 2025-12-16 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:CHVACDDocumentVaccinationRecord |
| **Copyright/Legal**: CC0-1.0 | | |

 
Definition of the bundle for the vaccination record document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. 

**Usages:**

* Examples for this Profile: [Bundle/1-3-VaccinationRecord](Bundle-1-3-VaccinationRecord.md), [Bundle/RDA01](Bundle-RDA01.md), [Bundle/RDA01b](Bundle-RDA01b.md), [Bundle/RDA02](Bundle-RDA02.md)...Show 39 more,[Bundle/RDA02b](Bundle-RDA02b.md),[Bundle/RDA03](Bundle-RDA03.md),[Bundle/RDA03b](Bundle-RDA03b.md),[Bundle/RDA04](Bundle-RDA04.md),[Bundle/RDA04b](Bundle-RDA04b.md),[Bundle/RDB01](Bundle-RDB01.md),[Bundle/RDB01b](Bundle-RDB01b.md),[Bundle/RDB02](Bundle-RDB02.md),[Bundle/RDB02b](Bundle-RDB02b.md),[Bundle/RDB03](Bundle-RDB03.md),[Bundle/RDB03b](Bundle-RDB03b.md),[Bundle/RDB04](Bundle-RDB04.md),[Bundle/RDB04b](Bundle-RDB04b.md),[Bundle/RDB05](Bundle-RDB05.md),[Bundle/RDB05b](Bundle-RDB05b.md),[Bundle/RDC01](Bundle-RDC01.md),[Bundle/RDC01b](Bundle-RDC01b.md),[Bundle/RDC02](Bundle-RDC02.md),[Bundle/RDC02b](Bundle-RDC02b.md),[Bundle/RDC03](Bundle-RDC03.md),[Bundle/RDC03b](Bundle-RDC03b.md),[Bundle/RDC04](Bundle-RDC04.md),[Bundle/RDC04b](Bundle-RDC04b.md),[Bundle/RDC05](Bundle-RDC05.md),[Bundle/RDC05b](Bundle-RDC05b.md),[Bundle/RDD01](Bundle-RDD01.md),[Bundle/RDD01b](Bundle-RDD01b.md),[Bundle/RDD02](Bundle-RDD02.md),[Bundle/RDD02b](Bundle-RDD02b.md),[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Bundle/RDE01](Bundle-RDE01.md),[Bundle/RDE01b](Bundle-RDE01b.md),[Bundle/RDF01](Bundle-RDF01.md),[Bundle/RDF01b](Bundle-RDF01b.md),[Bundle/RDF02](Bundle-RDF02.md),[Bundle/RDF02b](Bundle-RDF02b.md),[Bundle/RDF03](Bundle-RDF03.md)and[Bundle/RDF03b](Bundle-RDF03b.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-document-vaccination-record)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-document-vaccination-record.csv), [Excel](StructureDefinition-ch-vacd-document-vaccination-record.xlsx), [Schematron](StructureDefinition-ch-vacd-document-vaccination-record.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-document-vaccination-record",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record",
  "version" : "6.0.0",
  "name" : "CHVACDDocumentVaccinationRecord",
  "title" : "CH VACD Vaccination Record Document",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
  "description" : "Definition of the bundle for the vaccination record document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR.",
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
        "short" : "CH VACD Vaccination Record Document"
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
        "short" : "Vaccination Record composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
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
