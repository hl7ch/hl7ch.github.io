# Composition Radiology Order - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Composition Radiology Order**

## Example Composition: Composition Radiology Order

Radiology Order



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "CompositionRadiologyOrderImagingRequest",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-composition"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "enterer",
          "valueReference" : {
            "reference" : "PractitionerRole/RoleDAtaenterer"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver",
      "valueReference" : {
        "reference" : "PractitionerRole/RoleORderfiller"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
      "valueReference" : {
        "reference" : "Patient/PatSUfferer"
      }
    }
  ],
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.4",
        "code" : "2161000195103",
        "display" : "Imaging order (record artifact)"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "721963009",
          "display" : "Order (record artifact)"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "date" : "2019-04-01T20:18:41.341+00:00",
  "author" : [
    {
      "reference" : "PractitionerRole/RoleORderplacer"
    }
  ],
  "title" : "Radiologieauftrag",
  "section" : [
    {
      "title" : "Order-Referral",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "93037-0",
            "display" : "Portable medical order form"
          }
        ]
      },
      "entry" : [
        {
          "reference" : "Questionnaire/QuestionnaireRadiologyOrder"
        },
        {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest"
        },
        {
          "reference" : "ServiceRequest/ServiceRequestRadiologyOrder"
        }
      ]
    }
  ]
}

```
