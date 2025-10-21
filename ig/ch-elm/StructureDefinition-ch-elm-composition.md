# CH ELM Composition: Laboratory Report - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Composition: Laboratory Report**

## Resource Profile: CH ELM Composition: Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Composition resource for the purpose of laboratory test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Composition: Laboratory Report Strict](StructureDefinition-ch-elm-composition-strict.md)
* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-composition.csv), [Excel](StructureDefinition-ch-elm-composition.xlsx), [Schematron](StructureDefinition-ch-elm-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-composition",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Composition-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition",
  "version" : "1.12.0",
  "name" : "ChElmComposition",
  "title" : "CH ELM Composition: Laboratory Report",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "This CH ELM base profile constrains the Composition resource for the purpose of laboratory test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH ELM Composition: Laboratory Report"
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "short" : "Persistent, unique identifier for the diagnostic report (UUID)",
        "min" : 1
      },
      {
        "id" : "Composition.identifier.system",
        "path" : "Composition.identifier.system",
        "min" : 1,
        "patternUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Composition.identifier.value",
        "path" : "Composition.identifier.value",
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
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition"
          }
        ]
      },
      {
        "id" : "Composition.status",
        "path" : "Composition.status",
        "patternCode" : "final"
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "min" : 1,
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
        "id" : "Composition.author",
        "path" : "Composition.author",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-author"
            ]
          }
        ]
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
            },
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "ordered" : false,
          "rules" : "closed"
        },
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-no-subsections",
        "path" : "Composition.section",
        "sliceName" : "lab-no-subsections",
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-no-subsections.code",
        "path" : "Composition.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18725-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-no-subsections.entry",
        "path" : "Composition.section.entry",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections",
        "path" : "Composition.section",
        "sliceName" : "lab-subsections",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotations",
        "path" : "Composition.section",
        "sliceName" : "annotations",
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-mst",
        "path" : "Composition.section",
        "sliceName" : "lab-mst",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-mst.code",
        "path" : "Composition.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18769-0"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-mst.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility-strict"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-mst.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-gt",
        "path" : "Composition.section",
        "sliceName" : "lab-gt",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-gt.code",
        "path" : "Composition.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "726528006"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-gt.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-genotyping-strict"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-gt.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-sero",
        "path" : "Composition.section",
        "sliceName" : "lab-sero",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:lab-sero.code",
        "path" : "Composition.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18727-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-sero.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-hiv-recency-strict"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-sero.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
