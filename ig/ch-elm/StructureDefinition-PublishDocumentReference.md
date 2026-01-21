# DocumentReference for sending the report - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentReference for sending the report**

## Resource Profile: DocumentReference for sending the report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:PublishDocumentReference |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the DocumentReference resource with publication constraints: 
* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document
 

**Usages:**

* Derived from this Profile: [DocumentReference for sending the report with strict validation](StructureDefinition-PublishDocumentReferenceStrict.md)
* CapabilityStatements using this Profile: [FOPH CapabilityStatement for receiving laboratory reports](CapabilityStatement-ch-elm-documentrecipient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/PublishDocumentReference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PublishDocumentReference.csv), [Excel](StructureDefinition-PublishDocumentReference.xlsx), [Schematron](StructureDefinition-PublishDocumentReference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PublishDocumentReference",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference",
  "version" : "1.13.1",
  "name" : "PublishDocumentReference",
  "title" : "DocumentReference for sending the report",
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
  "description" : "A profile on the DocumentReference resource with publication constraints: \n- must be status current\n- must have an identifier\n- uses attachment.url to carry the document as a contained resource\n- validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference"
      },
      {
        "id" : "DocumentReference.contained",
        "path" : "DocumentReference.contained",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "DocumentReference.contained:document",
        "path" : "DocumentReference.contained",
        "sliceName" : "document",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.modifierExtension",
        "path" : "DocumentReference.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.identifier",
        "path" : "DocumentReference.identifier",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "DocumentReference.status",
        "path" : "DocumentReference.status",
        "patternCode" : "current"
      },
      {
        "id" : "DocumentReference.docStatus",
        "path" : "DocumentReference.docStatus",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.date",
        "path" : "DocumentReference.date",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.relatesTo",
        "path" : "DocumentReference.relatesTo",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel",
        "path" : "DocumentReference.securityLabel",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content",
        "path" : "DocumentReference.content",
        "definition" : "The document and format referenced",
        "max" : "1"
      },
      {
        "id" : "DocumentReference.content.attachment",
        "path" : "DocumentReference.content.attachment",
        "constraint" : [
          {
            "key" : "ch-elm-resolveableurl",
            "severity" : "error",
            "human" : "Must resolve to the contained bundle.",
            "expression" : "url.exists() and url.resolve()",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference"
          }
        ]
      },
      {
        "id" : "DocumentReference.content.attachment.language",
        "path" : "DocumentReference.content.attachment.language",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.url",
        "path" : "DocumentReference.content.attachment.url",
        "short" : "The document is referenced by this url, contained in the DocumentReference",
        "min" : 1
      },
      {
        "id" : "DocumentReference.content.attachment.creation",
        "path" : "DocumentReference.content.attachment.creation",
        "mustSupport" : true
      }
    ]
  }
}

```
