# CH RAD-Order Composition - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Composition**

## Resource Profile: CH RAD-Order Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-composition | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Composition resource in the context of CH RAD-Order. 

**Usages:**

* Use this Profile: [CH RAD-Order Document](StructureDefinition-ch-rad-order-document.md)
* Examples for this Profile: [Composition/CompositionRadiologyOrderImagingRequest](Composition-CompositionRadiologyOrderImagingRequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-composition.csv), [Excel](StructureDefinition-ch-rad-order-composition.xlsx), [Schematron](StructureDefinition-ch-rad-order-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-composition",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-composition",
  "version" : "2.0.1",
  "name" : "ChRadOrderComposition",
  "title" : "CH RAD-Order Composition",
  "status" : "active",
  "date" : "2025-12-17T07:22:04+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for the Composition resource in the context of CH RAD-Order.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH RAD-Order Composition"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.4",
              "code" : "2161000195103",
              "display" : "Imaging order (record artifact)"
            }
          ]
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721963009",
              "display" : "Order (record artifact)"
            }
          ]
        }
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "patternString" : "Radiologieauftrag"
      },
      {
        "id" : "Composition.section:orderReferral",
        "path" : "Composition.section",
        "sliceName" : "orderReferral"
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "ServiceRequest",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest"
            ]
          }
        ]
      }
    ]
  }
}

```
