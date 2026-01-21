# CH ELM Document: Laboratory Report - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Document: Laboratory Report**

## Resource Profile: CH ELM Document: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Bundle resource for the purpose of laboratory test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Document: Laboratory Report (strict)](StructureDefinition-ch-elm-document-strict.md)
* Use this Profile: [DocumentReference for sending the report](StructureDefinition-PublishDocumentReference.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-document.csv), [Excel](StructureDefinition-ch-elm-document.xlsx), [Schematron](StructureDefinition-ch-elm-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-document",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Bundle-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document",
  "version" : "1.13.1",
  "name" : "ChElmDocument",
  "title" : "CH ELM Document: Laboratory Report",
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
  "description" : "This CH ELM base profile constrains the Bundle resource for the purpose of laboratory test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH ELM Document: Laboratory Report",
        "constraint" : [
          {
            "key" : "ch-elm-leading-code",
            "severity" : "warning",
            "human" : "The ServiceRequest.code and the Observation.code are in general equal.",
            "expression" : "entry.resource.ofType(ServiceRequest).code = entry.resource.ofType(Observation).code",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document"
          }
        ]
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "short" : "Persistent, unique identifier for the diagnostic report (UUID)"
      },
      {
        "id" : "Bundle.identifier.system",
        "path" : "Bundle.identifier.system",
        "patternUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
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
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document"
          }
        ]
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 8
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
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner",
        "max" : "2"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole",
        "min" : 1,
        "max" : "2"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization",
        "min" : 1,
        "max" : "4"
      },
      {
        "id" : "Bundle.entry:Organization.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Organization",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:DiagnosticReport",
        "path" : "Bundle.entry",
        "sliceName" : "DiagnosticReport"
      },
      {
        "id" : "Bundle.entry:DiagnosticReport.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DiagnosticReport",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Specimen",
        "path" : "Bundle.entry",
        "sliceName" : "Specimen",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Specimen.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Specimen",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ServiceRequest",
        "path" : "Bundle.entry",
        "sliceName" : "ServiceRequest",
        "min" : 1,
        "max" : "2"
      },
      {
        "id" : "Bundle.entry:ServiceRequest.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1
      }
    ]
  }
}

```
