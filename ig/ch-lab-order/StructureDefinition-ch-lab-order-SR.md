# CH LAB-Order ServiceRequest - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order ServiceRequest**

## Resource Profile: CH LAB-Order ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderSR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the ServiceRequest resource to describe a single lab test order. 

**Usages:**

* Refer to this Profile: [CH LAB-Order ServiceRequest](StructureDefinition-ch-lab-order-SR.md) and [CH LAB-Order Composition with ServiceRequest](StructureDefinition-ch-lab-order-composition-with-sr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-order|current/StructureDefinition/ch-lab-order-SR)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-order-SR.csv), [Excel](StructureDefinition-ch-lab-order-SR.xlsx), [Schematron](StructureDefinition-ch-lab-order-SR.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-order-SR",
  "url" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR",
  "version" : "3.0.0",
  "name" : "ChLabOrderSR",
  "title" : "CH LAB-Order ServiceRequest",
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
  "description" : "Definition of the ServiceRequest resource to describe a single lab test order.",
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
        "short" : "CH LAB-Order ServiceRequest",
        "constraint" : [
          {
            "key" : "sr-1",
            "severity" : "error",
            "human" : "If serviceRequest.orderDetail = RP (Order/service replace request), then the element 'replaces' must be present",
            "expression" : "orderDetail.exists() and orderDetail.where($this.memberOf('http://fhir.ch/ig/ch-lab-order/ValueSet/ch-lab-vs-order-control')).exists() implies replaces.exists()",
            "source" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          }
        ]
      },
      {
        "id" : "ServiceRequest.instantiatesCanonical",
        "path" : "ServiceRequest.instantiatesCanonical",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.replaces",
        "path" : "ServiceRequest.replaces",
        "short" : "references the previous ServiceRequest in the situation of ordering supplemental laboratory tests",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.category",
        "path" : "ServiceRequest.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "108252007",
              "display" : "Laboratory procedure (procedure)"
            }
          ]
        }
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "ServiceRequestCode"
            }
          ],
          "strength" : "example",
          "description" : "Codes for tests or services that can be carried out by a designated individual, organization or healthcare service. For laboratory, LOINC is preferred.",
          "valueSet" : "http://hl7.org/fhir/ValueSet/procedure-code|4.0.1"
        }
      },
      {
        "id" : "ServiceRequest.orderDetail.coding",
        "path" : "ServiceRequest.orderDetail.coding",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.orderDetail.coding.code",
        "path" : "ServiceRequest.orderDetail.coding.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://terminology.hl7.org/ValueSet/v2-0119"
        }
      },
      {
        "id" : "ServiceRequest.reasonCode",
        "path" : "ServiceRequest.reasonCode",
        "short" : "Clinical Question in free text",
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
              "http://hl7.org/fhir/StructureDefinition/Observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.insurance",
        "path" : "ServiceRequest.insurance",
        "short" : "Insurance information",
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.supportingInfo",
        "path" : "ServiceRequest.supportingInfo",
        "short" : "Supporting information",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement",
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference",
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR",
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
