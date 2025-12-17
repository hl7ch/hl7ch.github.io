# CH RAD-Order Document - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Document**

## Resource Profile: CH RAD-Order Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-document | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Bundle (document) resource in the context of CH RAD-Order. 

**Usages:**

* Examples for this Profile: [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-document.csv), [Excel](StructureDefinition-ch-rad-order-document.xlsx), [Schematron](StructureDefinition-ch-rad-order-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-document",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-document",
  "version" : "2.0.1",
  "name" : "ChRadOrderDocument",
  "title" : "CH RAD-Order Document",
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
  "description" : "Definition for the Bundle (document) resource in the context of CH RAD-Order.",
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
        "short" : "CH RAD-Order Bundle (document)",
        "definition" : "This IG follows the IHE Scheduled Workflow (SWF) Profile: \nAn Order Filler accepts from an Order Placer a single Order that it equates to a Filler Order \n(which is concept commonly used in HL7) or Imaging Service Request (Concept commonly used in DICOM). \nConsequently one CH RAD-Order Document contains one CH RAD-Order ServiceRequest which depicts one Placer Order \nequal one Filler Order equal one Imaging Service Request."
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-composition"
            ]
          }
        ]
      }
    ]
  }
}

```
