# CDS Event - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDS Event**

## CodeSystem: CDS Event 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ClinicalDecisionSupportEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
Clinical Decision Support Event 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-clinical-decision-support-event-cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2021-12-21T00:00:00+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
  "version" : "6.0.0",
  "name" : "ClinicalDecisionSupportEvent",
  "title" : "CDS Event",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
  "description" : "Clinical Decision Support Event",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "immunrecorequest",
      "display" : "Immunization Recommendation Request",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Immunization Recommendation Request"
        },
        {
          "language" : "fr-CH",
          "value" : "Immunization Recommendation Request"
        },
        {
          "language" : "it-CH",
          "value" : "Immunization Recommendation Request"
        },
        {
          "language" : "rm-CH",
          "value" : "Immunization Recommendation Request"
        },
        {
          "language" : "en-US",
          "value" : "Immunization Recommendation Request"
        }
      ]
    },
    {
      "code" : "immunrecoresponse",
      "display" : "Immunization Recommendation Response",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Immunization Recommendation Response"
        },
        {
          "language" : "fr-CH",
          "value" : "Immunization Recommendation Response"
        },
        {
          "language" : "it-CH",
          "value" : "Immunization Recommendation Response"
        },
        {
          "language" : "rm-CH",
          "value" : "Immunization Recommendation Response"
        },
        {
          "language" : "en-US",
          "value" : "Immunization Recommendation Response"
        }
      ]
    }
  ]
}

```
