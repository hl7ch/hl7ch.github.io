# 2.4 Immunization Recommendation Response MessageHeader - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2.4 Immunization Recommendation Response MessageHeader**

## Example MessageHeader: 2.4 Immunization Recommendation Response MessageHeader

Last updated: 2021-06-01 00:00:00+0200

Profile: [CH VACD Immunization Recommendation Response MessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md)

**event**: [CDS Event: immunrecoresponse](CodeSystem-ch-vacd-clinical-decision-support-event-cs.md#ch-vacd-clinical-decision-support-event-cs-immunrecoresponse) (Immunization Recommendation Response)

### Destinations

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Endpoint** |
| * | Example Portal EPR | urn:oid:2.999.1.2.3.4.5 |

**sender**: [Organization Immunization CDS Service](Organization-CDSS-Organization.md)

### Sources

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Endpoint** |
| * | Example Vaccination Clinical Decision Support System | [https://example.com/cds/immunization/ws](https://example.com/cds/immunization/ws) |

**responsible**: [Organization Immunization CDS Service](Organization-CDSS-Organization.md)

**reason**: Recommendation regarding vaccination (procedure)

### Responses

| | | |
| :--- | :--- | :--- |
| - | **Identifier** | **Code** |
| * | 1-4-ImmunizationRecommendationRequest | OK |

**focus**: 

* [ImmunizationRecommendation: identifier = urn:oid:2.999.1.2.3.4#1; date = 2021-06-01 00:00:00+0200](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md)
* [ImmunizationRecommendation: identifier = urn:oid:2.999.1.2.3.4#2; date = 2021-06-01 00:00:00+0200](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "2-5-ImmunizationRecommendationResponseMessageHeader",
  "meta" : {
    "lastUpdated" : "2021-06-01T00:00:00.394+02:00",
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-messageheader"
    ]
  },
  "eventCoding" : {
    "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
    "code" : "immunrecoresponse",
    "display" : "Immunization Recommendation Response"
  },
  "destination" : [
    {
      "name" : "Example Portal EPR",
      "endpoint" : "urn:oid:2.999.1.2.3.4.5"
    }
  ],
  "sender" : {
    "reference" : "Organization/CDSS-Organization"
  },
  "source" : {
    "name" : "Example Vaccination Clinical Decision Support System",
    "endpoint" : "https://example.com/cds/immunization/ws"
  },
  "responsible" : {
    "reference" : "Organization/CDSS-Organization"
  },
  "reason" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "830152006",
        "display" : "Recommendation regarding vaccination (procedure)"
      }
    ]
  },
  "response" : {
    "identifier" : "1-4-ImmunizationRecommendationRequest",
    "code" : "ok"
  },
  "focus" : [
    {
      "reference" : "ImmunizationRecommendation/10-4-ImmunizationRecommendation"
    },
    {
      "reference" : "ImmunizationRecommendation/10-3-ImmunizationRecommendation"
    }
  ]
}

```
