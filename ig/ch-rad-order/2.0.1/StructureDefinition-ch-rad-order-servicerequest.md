# CH RAD-Order ServiceRequest - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order ServiceRequest**

## Resource Profile: CH RAD-Order ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the ServiceRequest resource in the context of CH RAD-Order. 

**Usages:**

* Refer to this Profile: [CH RAD-Order Composition](StructureDefinition-ch-rad-order-composition.md)
* Examples for this Profile: [ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-servicerequest.csv), [Excel](StructureDefinition-ch-rad-order-servicerequest.xlsx), [Schematron](StructureDefinition-ch-rad-order-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-servicerequest",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest",
  "version" : "2.0.1",
  "name" : "ChRadOrderServiceRequest",
  "title" : "CH RAD-Order ServiceRequest",
  "status" : "active",
  "date" : "2025-12-17T07:17:47+00:00",
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
  "description" : "Definition for the ServiceRequest resource in the context of CH RAD-Order.",
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
      "identity" : "quick",
      "uri" : "http://siframework.org/cqf",
      "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest",
        "short" : "CH RAD-Order ServiceRequest",
        "definition" : "This IG follows the IHE Scheduled Workflow (SWF) Profile: \nAn Order Filler accepts from an Order Placer a single Order that it equates to a Filler Order \n(which is concept commonly used in HL7) or Imaging Service Request (Concept commonly used in DICOM). \nConsequently one CH RAD-Order Document contains one CH RAD-Order ServiceRequest which depicts one Placer Order \nequal one Filler Order equal one Imaging Service Request."
      },
      {
        "id" : "ServiceRequest.category",
        "path" : "ServiceRequest.category",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-requested-service"
        }
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "short" : "Use 'RSNA/LOINC Playbook (Full Version support)' OR Codes from 'ChRadOrderModalityType' but NOT both. \nIn case of 'ChRadOrderModalityType' specify Imaging Request Details by means of orderDetail.",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.code.coding",
        "path" : "ServiceRequest.code.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "ServiceRequest.code.coding:LncPlbFull",
        "path" : "ServiceRequest.code.coding",
        "sliceName" : "LncPlbFull",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://loinc.org/vs/loinc-rsna-radiology-playbook"
        }
      },
      {
        "id" : "ServiceRequest.code.coding:RdlxModType",
        "path" : "ServiceRequest.code.coding",
        "sliceName" : "RdlxModType",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-modality-type"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail",
        "path" : "ServiceRequest.orderDetail",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.orderDetail.extension",
        "path" : "ServiceRequest.orderDetail.extension",
        "min" : 1
      },
      {
        "id" : "ServiceRequest.orderDetail.extension:orderDetailType",
        "path" : "ServiceRequest.orderDetail.extension",
        "sliceName" : "orderDetailType",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.orderDetail:imagingRegion",
        "path" : "ServiceRequest.orderDetail",
        "sliceName" : "imagingRegion",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-region"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail:laterality",
        "path" : "ServiceRequest.orderDetail",
        "sliceName" : "laterality",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-laterality"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail:viewType",
        "path" : "ServiceRequest.orderDetail",
        "sliceName" : "viewType",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-view-type"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail:maneuverType",
        "path" : "ServiceRequest.orderDetail",
        "sliceName" : "maneuverType",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-maneuver-type"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail:guidanceForAction",
        "path" : "ServiceRequest.orderDetail",
        "sliceName" : "guidanceForAction",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-guidance-for-action"
        }
      },
      {
        "id" : "ServiceRequest.performer",
        "path" : "ServiceRequest.performer",
        "short" : "Desired radiologist for diagnostic / for intervention",
        "max" : "1",
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
        "id" : "ServiceRequest.reasonCode",
        "path" : "ServiceRequest.reasonCode",
        "short" : "Diagnostic Question in free text: Coding of all diagnostic questions will be defined later.",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.reasonCode.text",
        "path" : "ServiceRequest.reasonCode.text",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.reasonReference",
        "path" : "ServiceRequest.reasonReference",
        "short" : "Reason for the referral (primary diagnosis)",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo",
        "path" : "ServiceRequest.supportingInfo",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        },
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:bodyHeight",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "bodyHeight",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyheight-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:bodyWeight",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "bodyWeight",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyweight-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:diagnosis",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "diagnosis",
        "short" : "Additional problem / secondary diagnosis",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:caveats",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "caveats",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:previousImagingResults",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "previousImagingResults",
        "short" : "The ImagingStudy Resource lists the SOP Instances which are either attached by means of a document reference or which shall be retrieved by means of a DICOM service",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy",
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.bodySite",
        "path" : "ServiceRequest.bodySite",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-focus"
        }
      }
    ]
  }
}

```
