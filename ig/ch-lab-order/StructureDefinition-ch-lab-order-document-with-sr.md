# CH LAB-Order Document with ServiceRequest - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order Document with ServiceRequest**

## Resource Profile: CH LAB-Order Document with ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderDocumentWithSR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Bundle resource to describe the lab order document using ServiceRequest. 

**Usages:**

* Examples for this Profile: [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md), [Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md), [Bundle/3-gyn-document](Bundle-3-gyn-document.md)...Show 3 more,[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md)and[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-order|current/StructureDefinition/ch-lab-order-document-with-sr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-order-document-with-sr.csv), [Excel](StructureDefinition-ch-lab-order-document-with-sr.xlsx), [Schematron](StructureDefinition-ch-lab-order-document-with-sr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-order-document-with-sr",
  "url" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr",
  "version" : "3.0.0",
  "name" : "ChLabOrderDocumentWithSR",
  "title" : "CH LAB-Order Document with ServiceRequest",
  "status" : "active",
  "date" : "2025-12-16T11:38:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Definition of the Bundle resource to describe the lab order document using ServiceRequest.",
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
        "short" : "CH LAB-Order Document with ServiceRequest"
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
        "short" : "The document's creation date and time",
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
        "short" : "Lab order composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "short" : "Patient",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Coverage",
        "path" : "Bundle.entry",
        "sliceName" : "Coverage",
        "short" : "Health insurance card",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Coverage.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Coverage",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
            ]
          }
        ]
      }
    ]
  }
}

```
