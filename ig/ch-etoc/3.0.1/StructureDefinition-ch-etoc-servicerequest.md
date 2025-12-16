# CH eTOC Service Request - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Service Request**

## Resource Profile: CH eTOC Service Request 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the ServiceRequest resource in the context of electronic transition of care. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md)
* Examples for this Profile: [ServiceRequest/ServiceRequestEtoc](ServiceRequest-ServiceRequestEtoc.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-servicerequest.csv), [Excel](StructureDefinition-ch-etoc-servicerequest.xlsx), [Schematron](StructureDefinition-ch-etoc-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-servicerequest",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest",
  "version" : "3.0.1",
  "name" : "ChEtocServiceRequest",
  "title" : "CH eTOC Service Request",
  "status" : "active",
  "date" : "2025-12-16T15:53:41+00:00",
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
  "description" : "Definition for the ServiceRequest resource in the context of electronic transition of care.",
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
        "short" : "CH eTOC Service Request",
        "definition" : "This IG adheres to the FHIR International Patient Summary (IPS) Implementation Guide. Clinical content uses\nmostly the same resources as the IPS; some minor differences are explained in comments to the resources affected. The resource definitions are however constrained from FHIR base definitions and Swiss Core definitions \nand NOT from UVIPS. This decision was made in order to minimize unexpected impact of future changes in IPS and for compatibility with \nSwiss Core. eTOC adds a ServiceRequest resource to the clinical content (according to the IPS) in order to depict the reason for a referral, the requested \nservice and some additional information (e.g. coverage, room preferance etc.). Resources for such purpose are referenced by the ServiceRequest\nresource. Header information such as sender, receiver etc. are condsidered as Generic Elements (to all sorts of referral, orders etc.) \nand follow the definition in the ORF Implementation Guide.  \n\nThis IG follows the Swiss eHealth Exchange Format Handbook Part I: Service Requests V 0.13. The Questionnaire resource gives gudiance for \nthe implementaion of the user interface."
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "mustSupport" : true,
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
        "id" : "ServiceRequest.code.text",
        "path" : "ServiceRequest.code.text",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.reasonCode",
        "path" : "ServiceRequest.reasonCode",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.reasonCode.text",
        "path" : "ServiceRequest.reasonCode.text",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.reasonReference",
        "path" : "ServiceRequest.reasonReference",
        "short" : "Explanation/Justification for service or service (primary diagnosis)",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-primary-diagnosis"
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
        "id" : "ServiceRequest.supportingInfo:secondarydiagnosis",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "secondarydiagnosis",
        "short" : "Additional problem / secondary diagnosis",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"
            ]
          }
        ],
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
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation"
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
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyweight-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:pregnancy",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "pregnancy",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pregnancystatus"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:historyofIllnesses",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "historyofIllnesses",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-illness"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:historyofProcedures",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "historyofProcedures",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-procedure"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:devices",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "devices",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-device"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:socialHistory",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "socialHistory",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-socialhistory"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:functionalStatus",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "functionalStatus",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-functionalstatus"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:medicationstatement",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "medicationstatement",
        "short" : "MedicationStatement contains one medication with dosage",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:allergiesIntolerances",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "allergiesIntolerances",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:immunizations",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "immunizations",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-immunization"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:labresults",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "labresults",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-lab-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:pathologyresults",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "pathologyresults",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pathology-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:imagingresults",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "imagingresults",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-radiology-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:cardiologyresults",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "cardiologyresults",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-cardiology-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.supportingInfo:attachment",
        "path" : "ServiceRequest.supportingInfo",
        "sliceName" : "attachment",
        "min" : 0,
        "max" : "*"
      }
    ]
  }
}

```
