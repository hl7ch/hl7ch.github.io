# Composition Medical Referral - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Composition Medical Referral**

## Example Composition: Composition Medical Referral

Medical Referral



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "CompositionEtoc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-composition"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "enterer",
          "valueReference" : {
            "reference" : "PractitionerRole/DAtaentererHappyDoctors"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver",
      "valueReference" : {
        "reference" : "PractitionerRole/ORderfillerHappyHospital"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
      "valueReference" : {
        "reference" : "Patient/SUfferer"
      }
    }
  ],
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "371535009"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "721927009"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/SUfferer"
  },
  "date" : "2019-04-01T20:18:41.341+00:00",
  "author" : [
    {
      "reference" : "PractitionerRole/ORderplacerHappyDoctors"
    }
  ],
  "title" : "Zuweisungsschreiben",
  "section" : [
    {
      "title" : "Order-Referral",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "93037-0"
          }
        ]
      },
      "entry" : [
        {
          "reference" : "Questionnaire/QuestionnaireEtoc"
        },
        {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseEtocTransCare"
        },
        {
          "reference" : "ServiceRequest/ServiceRequestEtoc"
        }
      ]
    }
  ]
}

```
