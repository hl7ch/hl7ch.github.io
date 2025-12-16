# CH ORF DocumentReference - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF DocumentReference**

## Resource Profile: CH ORF DocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfDocumentReference |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to describe how to provide a reference to a document to make it available to a healthcare system. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Profile: [DocumentReference/DocRef](DocumentReference-DocRef.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-documentreference.csv), [Excel](StructureDefinition-ch-orf-documentreference.xlsx), [Schematron](StructureDefinition-ch-orf-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-documentreference",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference",
  "version" : "3.0.2",
  "name" : "ChOrfDocumentReference",
  "title" : "CH ORF DocumentReference",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
  "description" : "Profile to describe how to provide a reference to a document to make it available to a healthcare system.",
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
      "identity" : "EPR-XDS",
      "uri" : "https://profiles.ihe.net/ITI/MHD/index.html",
      "name" : "XDS metadata"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference",
        "short" : "CH ORF DocumentReference"
      },
      {
        "id" : "DocumentReference.status",
        "path" : "DocumentReference.status",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "short" : "Precise type of clinical document",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "short" : "High-level kind of a clinical document at a macro level",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
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
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content",
        "path" : "DocumentReference.content",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment",
        "path" : "DocumentReference.content.attachment",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.contentType",
        "path" : "DocumentReference.content.attachment.contentType",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.data",
        "path" : "DocumentReference.content.attachment.data",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context",
        "path" : "DocumentReference.context",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.related",
        "path" : "DocumentReference.context.related",
        "mustSupport" : true
      }
    ]
  }
}

```
