# DocumentReference for Publish Response - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentReference for Publish Response**

## Resource Profile: DocumentReference for Publish Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceResponse | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:PublishDocumentReferenceResponse |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the DocumentReference resource for the publication response: 
* must be status current
* must have an identifier
 

**Usages:**

* Use this Profile: [Find Document References Response message](StructureDefinition-FindDocumentReferencesResponse.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/PublishDocumentReferenceResponse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PublishDocumentReferenceResponse.csv), [Excel](StructureDefinition-PublishDocumentReferenceResponse.xlsx), [Schematron](StructureDefinition-PublishDocumentReferenceResponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PublishDocumentReferenceResponse",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceResponse",
  "version" : "1.13.1",
  "name" : "PublishDocumentReferenceResponse",
  "title" : "DocumentReference for  Publish Response",
  "status" : "active",
  "date" : "2026-01-21T11:05:32+00:00",
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
  "description" : "A profile on the DocumentReference resource for the publication response: \n- must be status current\n- must have an identifier",
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
        "id" : "DocumentReference.contained",
        "path" : "DocumentReference.contained",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        },
        "max" : "1"
      },
      {
        "id" : "DocumentReference.contained:OperationOutcome",
        "path" : "DocumentReference.contained",
        "sliceName" : "OperationOutcome",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Resource",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension",
        "path" : "DocumentReference.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "DocumentReference.extension:chextelmstatus",
        "path" : "DocumentReference.extension",
        "sliceName" : "chextelmstatus",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status"
            ]
          }
        ]
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
        "min" : 1
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
      }
    ]
  }
}

```
