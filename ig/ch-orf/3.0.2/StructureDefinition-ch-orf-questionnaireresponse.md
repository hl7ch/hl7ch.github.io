# CH ORF QuestionnaireResponse - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF QuestionnaireResponse**

## Resource Profile: CH ORF QuestionnaireResponse 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfQuestionnaireResponse |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to define how a CH ORF-conformant QuestionnaireResponse resource must be structured. This is independent of the content and content structure of the response items to a specific questionnaire. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF Composition](StructureDefinition-ch-orf-composition.md)
* Examples for this Profile: [QuestionnaireResponse/qr-external-diagnostics-order](QuestionnaireResponse-qr-external-diagnostics-order.md), [QuestionnaireResponse/qr-order-referral-form](QuestionnaireResponse-qr-order-referral-form.md) and [QuestionnaireResponse/qr-radiology-order](QuestionnaireResponse-qr-radiology-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-questionnaireresponse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-questionnaireresponse.csv), [Excel](StructureDefinition-ch-orf-questionnaireresponse.xlsx), [Schematron](StructureDefinition-ch-orf-questionnaireresponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-questionnaireresponse",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaireresponse",
  "version" : "3.0.2",
  "name" : "ChOrfQuestionnaireResponse",
  "title" : "CH ORF QuestionnaireResponse",
  "status" : "active",
  "date" : "2025-12-16T09:33:08+00:00",
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
  "description" : "Profile to define how a CH ORF-conformant QuestionnaireResponse resource must be structured. \nThis is independent of the content and content structure of the response items to a specific questionnaire.",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "QuestionnaireResponse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "QuestionnaireResponse",
        "path" : "QuestionnaireResponse",
        "short" : "CH ORF QuestionnaireResponse"
      },
      {
        "id" : "QuestionnaireResponse.identifier",
        "path" : "QuestionnaireResponse.identifier",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.basedOn",
        "path" : "QuestionnaireResponse.basedOn",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.partOf",
        "path" : "QuestionnaireResponse.partOf",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.questionnaire",
        "path" : "QuestionnaireResponse.questionnaire",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.status",
        "path" : "QuestionnaireResponse.status",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.subject",
        "path" : "QuestionnaireResponse.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.encounter",
        "path" : "QuestionnaireResponse.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.authored",
        "path" : "QuestionnaireResponse.authored",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.author",
        "path" : "QuestionnaireResponse.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.source",
        "path" : "QuestionnaireResponse.source",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item",
        "path" : "QuestionnaireResponse.item",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.linkId",
        "path" : "QuestionnaireResponse.item.linkId",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.definition",
        "path" : "QuestionnaireResponse.item.definition",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.text",
        "path" : "QuestionnaireResponse.item.text",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.answer",
        "path" : "QuestionnaireResponse.item.answer",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.answer.value[x]",
        "path" : "QuestionnaireResponse.item.answer.value[x]",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.answer.item",
        "path" : "QuestionnaireResponse.item.answer.item",
        "mustSupport" : true
      },
      {
        "id" : "QuestionnaireResponse.item.item",
        "path" : "QuestionnaireResponse.item.item",
        "mustSupport" : true
      }
    ]
  }
}

```
