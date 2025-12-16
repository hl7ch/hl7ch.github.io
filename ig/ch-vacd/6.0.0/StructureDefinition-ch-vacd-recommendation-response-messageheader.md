# CH VACD Immunization Recommendation Response MessageHeader - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Immunization Recommendation Response MessageHeader**

## Resource Profile: CH VACD Immunization Recommendation Response MessageHeader 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-messageheader | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDRecommendationResponseMessageHeader |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the MessageHeader for the immunization recommendation response. 

**Usages:**

* Use this Profile: [CH VACD Message Immunization Recommendation Response](StructureDefinition-ch-vacd-recommendation-response-message.md)
* Examples for this Profile: [MessageHeader/2-5-ImmunizationRecommendationResponseMessageHeader](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-recommendation-response-messageheader)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-recommendation-response-messageheader.csv), [Excel](StructureDefinition-ch-vacd-recommendation-response-messageheader.xlsx), [Schematron](StructureDefinition-ch-vacd-recommendation-response-messageheader.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-recommendation-response-messageheader",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-messageheader",
  "version" : "6.0.0",
  "name" : "CHVACDRecommendationResponseMessageHeader",
  "title" : "CH VACD Immunization Recommendation Response MessageHeader",
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
  "description" : "Definition of the MessageHeader for the immunization recommendation response.",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MessageHeader",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MessageHeader",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MessageHeader",
        "path" : "MessageHeader",
        "short" : "CH VACD Immunization Recommendation Response MessageHeader"
      },
      {
        "id" : "MessageHeader.event[x]",
        "path" : "MessageHeader.event[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "MessageHeader.event[x]:eventCoding",
        "path" : "MessageHeader.event[x]",
        "sliceName" : "eventCoding",
        "short" : "Immunization Recommendation Response",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "patternCoding" : {
          "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
          "code" : "immunrecoresponse"
        }
      },
      {
        "id" : "MessageHeader.destination",
        "path" : "MessageHeader.destination",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "MessageHeader.destination.name",
        "path" : "MessageHeader.destination.name",
        "min" : 1
      },
      {
        "id" : "MessageHeader.sender",
        "path" : "MessageHeader.sender",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "MessageHeader.responsible",
        "path" : "MessageHeader.responsible",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "MessageHeader.reason",
        "path" : "MessageHeader.reason",
        "short" : "Recommendation regarding vaccination (procedure)",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "830152006"
            }
          ]
        }
      },
      {
        "id" : "MessageHeader.response",
        "path" : "MessageHeader.response",
        "min" : 1
      },
      {
        "id" : "MessageHeader.focus",
        "path" : "MessageHeader.focus",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
            ]
          }
        ]
      }
    ]
  }
}

```
