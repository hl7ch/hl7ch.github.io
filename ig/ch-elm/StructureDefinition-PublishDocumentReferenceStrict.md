# DocumentReference for sending the report with strict validation - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentReference for sending the report with strict validation**

## Resource Profile: DocumentReference for sending the report with strict validation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:PublishDocumentReferenceStrict |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the DocumentReference resource with publication constraints: 
* must be status current
* must have an identifier
* uses attachment.url to carry the document as a contained resource
* strict validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict
 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/PublishDocumentReferenceStrict)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PublishDocumentReferenceStrict.csv), [Excel](StructureDefinition-PublishDocumentReferenceStrict.xlsx), [Schematron](StructureDefinition-PublishDocumentReferenceStrict.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PublishDocumentReferenceStrict",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict",
  "version" : "1.13.0",
  "name" : "PublishDocumentReferenceStrict",
  "title" : "DocumentReference for sending the report with strict validation",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "A profile on the DocumentReference resource with publication constraints: \n- must be status current\n- must have an identifier\n- uses attachment.url to carry the document as a contained resource\n- strict validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference"
      },
      {
        "id" : "DocumentReference.contained:document",
        "path" : "DocumentReference.contained",
        "sliceName" : "document",
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
            ]
          }
        ]
      }
    ]
  }
}

```
