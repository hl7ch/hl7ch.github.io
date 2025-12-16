# CH ORF Document - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Document**

## Resource Profile: CH ORF Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to set constraints that specify the CH ORF-conformant presentation of a document. The CH ORF exchange format is defined as a document type corresponding to a Bundle resource. 

**Usages:**

* Examples for this Profile: [Bundle/bundle-order-referral-form](Bundle-bundle-order-referral-form.md), [Bundle/external-diagnostics-order](Bundle-external-diagnostics-order.md) and [Bundle/radiology-order](Bundle-radiology-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-document.csv), [Excel](StructureDefinition-ch-orf-document.xlsx), [Schematron](StructureDefinition-ch-orf-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-document",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document",
  "version" : "3.0.2",
  "name" : "ChOrfDocument",
  "title" : "CH ORF Document",
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
  "description" : "Profile to set constraints that specify the CH ORF-conformant presentation of a document. \nThe CH ORF exchange format is defined as a document type corresponding to a Bundle resource.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH ORF Bundle"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "short" : "Document Identifier",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.identifier.system",
        "path" : "Bundle.identifier.system",
        "fixedUri" : "urn:ietf:rfc:3986",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
        "short" : "UUID as Document Identifier",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "Date, the document was created",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.total",
        "path" : "Bundle.total",
        "max" : "0"
      },
      {
        "id" : "Bundle.link",
        "path" : "Bundle.link",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 2
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Questionnaire",
        "path" : "Bundle.entry",
        "sliceName" : "Questionnaire",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Questionnaire.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:QuestionnaireResponse",
        "path" : "Bundle.entry",
        "sliceName" : "QuestionnaireResponse",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:QuestionnaireResponse.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:ServiceRequest",
        "path" : "Bundle.entry",
        "sliceName" : "ServiceRequest",
        "min" : 1,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:ServiceRequest.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentReference",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Binary",
        "path" : "Bundle.entry",
        "sliceName" : "Binary",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Binary.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/Binary"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Appointment",
        "path" : "Bundle.entry",
        "sliceName" : "Appointment",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Appointment.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Coverage",
        "path" : "Bundle.entry",
        "sliceName" : "Coverage",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Coverage.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
