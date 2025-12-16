# CH LAB-Order Document with ServiceRequest and Form - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order Document with ServiceRequest and Form**

## Resource Profile: CH LAB-Order Document with ServiceRequest and Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderDocumentWithSR_AndForm |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Bundle resource to describe the lab order document using ServiceRequest and Form. 

**Usages:**

* Examples for this Profile: [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md), [Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md), [Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md), [Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md)...Show 2 more,[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md)and[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-order|current/StructureDefinition/ch-lab-order-document-with-sr-and-form)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-order-document-with-sr-and-form.csv), [Excel](StructureDefinition-ch-lab-order-document-with-sr-and-form.xlsx), [Schematron](StructureDefinition-ch-lab-order-document-with-sr-and-form.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-order-document-with-sr-and-form",
  "url" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form",
  "version" : "3.0.0",
  "name" : "ChLabOrderDocumentWithSR_AndForm",
  "title" : "CH LAB-Order Document with ServiceRequest and Form",
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
  "description" : "Definition of the Bundle resource to describe the lab order document using ServiceRequest and Form.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH LAB-Order Bundle with ServiceRequest and Form"
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 3
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
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr-and-form"
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
      }
    ]
  }
}

```
