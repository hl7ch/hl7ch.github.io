# CH VACD Immunization Recommendation Request MessageHeader - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Immunization Recommendation Request MessageHeader**

## Resource Profile: CH VACD Immunization Recommendation Request MessageHeader 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-messageheader | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDRecommendationRequestMessageHeader |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the MessageHeader for the immunization recommendation request. 

**Usages:**

* Use this Profile: [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Examples for this Profile: [MessageHeader/2-4-ImmunizationRecommendationRequestMessageHeader](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-recommendation-request-messageheader)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-recommendation-request-messageheader.csv), [Excel](StructureDefinition-ch-vacd-recommendation-request-messageheader.xlsx), [Schematron](StructureDefinition-ch-vacd-recommendation-request-messageheader.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-recommendation-request-messageheader",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-messageheader",
  "version" : "6.0.0",
  "name" : "CHVACDRecommendationRequestMessageHeader",
  "title" : "CH VACD Immunization Recommendation Request MessageHeader",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T10:03:10+00:00",
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
  "description" : "Definition of the MessageHeader for the immunization recommendation request.",
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
        "short" : "CH VACD Immunization Recommendation Request MessageHeader",
        "mustSupport" : true
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
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "patternCoding" : {
          "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
          "code" : "immunrecorequest",
          "display" : "Immunization Recommendation Request"
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
        "id" : "MessageHeader.destination.receiver",
        "path" : "MessageHeader.destination.receiver",
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
        "id" : "MessageHeader.sender",
        "path" : "MessageHeader.sender",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "MessageHeader.source.name",
        "path" : "MessageHeader.source.name",
        "min" : 1
      },
      {
        "id" : "MessageHeader.source.software",
        "path" : "MessageHeader.source.software",
        "min" : 1
      },
      {
        "id" : "MessageHeader.source.version",
        "path" : "MessageHeader.source.version",
        "min" : 1
      },
      {
        "id" : "MessageHeader.responsible",
        "path" : "MessageHeader.responsible",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
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
        "id" : "MessageHeader.focus",
        "path" : "MessageHeader.focus",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization",
              "http://hl7.org/fhir/StructureDefinition/Consent"
            ]
          }
        ]
      }
    ]
  }
}

```
