# CH VACD Laboratory And Serology - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Laboratory And Serology**

## Resource Profile: CH VACD Laboratory And Serology 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDLaboratorySerology |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the labor and serology part for all documents. 

### Validation and VerificationStatus

An **Laboratory & Serologie** can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus ([extension](StructureDefinition-ch-vacd-ext-verification-status.md)) to [Confirmed](http://snomed.info/id/59156000)

b) In the case a patient is recording an entry the verificationStatus ([extension](StructureDefinition-ch-vacd-ext-verification-status.md)) has to be [Not confirmed](http://snomed.info/id/76104008), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, dupplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#laboratory-and-serology).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md), [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [Observation/9-1-Observation](Observation-9-1-Observation.md), [Observation/9-2-Observation](Observation-9-2-Observation.md) and [Observation/TCB04-LABRES1](Observation-TCB04-LABRES1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-laboratory-serology)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-laboratory-serology.csv), [Excel](StructureDefinition-ch-vacd-laboratory-serology.xlsx), [Schematron](StructureDefinition-ch-vacd-laboratory-serology.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-laboratory-serology",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology",
  "version" : "6.0.0",
  "name" : "CHVACDLaboratorySerology",
  "title" : "CH VACD Laboratory And Serology",
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
  "description" : "Definition of the labor and serology part for all documents.",
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
        "short" : "CH VACD Allergie Observations"
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
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.extension:recorder",
        "path" : "Observation.extension",
        "sliceName" : "recorder",
        "definition" : "The recorder Reference of the immunization. May be a Practitioner or a Patient",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:relatesTo",
        "path" : "Observation.extension",
        "sliceName" : "relatesTo",
        "definition" : "The definition of a relation of this laboratory entry in this document to an laboratory entry in an other document.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:conflict",
        "path" : "Observation.extension",
        "sliceName" : "conflict",
        "definition" : "The definition of a conflict on merging different documents.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"
            ]
          }
        ]
      },
      {
        "id" : "Observation.extension:verificationStatus",
        "path" : "Observation.extension",
        "sliceName" : "verificationStatus",
        "definition" : "Status of verification by a practitioner",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status"
            ]
          }
        ]
      },
      {
        "id" : "Observation.identifier",
        "path" : "Observation.identifier",
        "short" : "Observation item ID",
        "min" : 1
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Observation code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "LaboratorySerologyCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "extensible",
          "description" : "The code for Laboratory and Serology.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-laboratory-serology-vs"
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "short" : "Patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.encounter",
        "path" : "Observation.encounter",
        "short" : "Encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "short" : "The performer executing the laboratory analysis.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity"
          },
          {
            "code" : "CodeableConcept"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.note.author[x]",
        "path" : "Observation.note.author[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
