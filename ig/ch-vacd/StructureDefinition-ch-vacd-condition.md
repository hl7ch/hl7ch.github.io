# CH VACD Condition Profile (Abstract) - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Condition Profile (Abstract)**

## Resource Profile: CH VACD Condition Profile (Abstract) ( Abstract ) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-condition | *Version*:7.0.0-ballot |
| Draft as of 2026-06-11 | *Computable Name*:CHVACDCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Generic definition (abstract profile) of the condition for all documents except recommendation request or response. 

**Usages:**

* Derived from this Profile: [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md), [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md) and [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)
* Refer to this Profile: [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md)
* CapabilityStatements using this Profile: [CH VACD FHIR API CapabilityStatement for server](CapabilityStatement-ch-vacd-api-capstmt-srv.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-vacd|current/StructureDefinition/StructureDefinition-ch-vacd-condition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-condition.csv), [Excel](StructureDefinition-ch-vacd-condition.xlsx), [Schematron](StructureDefinition-ch-vacd-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-condition",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-condition",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDCondition",
  "title" : "CH VACD Condition Profile (Abstract)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-11T13:35:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Generic definition (abstract profile) of the condition for all documents except recommendation request or response.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : true,
  "type" : "Condition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.extension",
      "path" : "Condition.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Condition.extension:relatesTo",
      "path" : "Condition.extension",
      "sliceName" : "relatesTo",
      "definition" : "The definition of a relation of this immunization entry in this document to an immunization entry in an other document.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.extension:conflict",
      "path" : "Condition.extension",
      "sliceName" : "conflict",
      "definition" : "The definition of a conflict on merging different documents.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.identifier",
      "path" : "Condition.identifier",
      "min" : 1
    },
    {
      "id" : "Condition.verificationStatus",
      "path" : "Condition.verificationStatus",
      "definition" : "Status of verification.\nWith the verificationStatus, practitioners can express that they verified the data added by a patient or related person.",
      "min" : 1
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "Condition code",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.encounter",
      "path" : "Condition.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"]
      }]
    },
    {
      "id" : "Condition.recordedDate",
      "path" : "Condition.recordedDate",
      "short" : "Condition recordedDate",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Condition.recorder",
      "path" : "Condition.recorder",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.asserter",
      "path" : "Condition.asserter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.note.author[x]",
      "path" : "Condition.note.author[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
      }]
    }]
  }
}

```
