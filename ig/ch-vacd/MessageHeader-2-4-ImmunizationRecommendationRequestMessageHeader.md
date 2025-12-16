# 2.4 Immunization Recommendation Request MessageHeader - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2.4 Immunization Recommendation Request MessageHeader**

## Example MessageHeader: 2.4 Immunization Recommendation Request MessageHeader

Last updated: 2021-06-01 00:00:00+0200

Profile: [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)

**event**: [CDS Event: immunrecorequest](CodeSystem-ch-vacd-clinical-decision-support-event-cs.md#ch-vacd-clinical-decision-support-event-cs-immunrecorequest) (Immunization Recommendation Request)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Name** | **Endpoint** | **Receiver** |
| * | Example Vaccination Clinical Decision Support System | [https://example.com/cds/immunization/ws](https://example.com/cds/immunization/ws) | [Organization Immunization CDS Service](Organization-CDSS-Organization.md) |

**sender**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)

### Sources

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Name** | **Software** | **Version** | **Endpoint** |
| * | Example Portal EPR | EPR-Portal-VacModule | V1.1 | urn:oid:2.999.1.2.3.4.5 |

**responsible**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)

**reason**: Recommendation regarding vaccination (procedure)

**focus**: 

* [Immunization: extension = ->PractitionerRole,Confirmed (SNOMED CT#59156000); identifier = urn:oid:2.999.1.2.3.4#12345; status = completed; vaccineCode = Boostrix; occurrence[x] = 2013-09-15 00:00:00+0200; recorded = 2013-09-15 00:00:00+0200; lotNumber = 12345; reasonCode = Immunization](Immunization-7-7-Immunization.md)
* [Immunization: extension = ->PractitionerRole,Confirmed (SNOMED CT#59156000); identifier = urn:oid:2.999.1.2.3.4#23456; status = completed; vaccineCode = Boostrix; occurrence[x] = 2014-08-12 00:00:00+0200; recorded = 2014-08-12 00:00:00+0200; lotNumber = 12345; reasonCode = Immunization](Immunization-7-8-Immunization.md)
* [Immunization: extension = ->PractitionerRole,Confirmed (SNOMED CT#59156000); identifier = urn:oid:2.999.1.2.3.4#34567; status = completed; vaccineCode = Boostrix; occurrence[x] = 2015-11-01 00:00:00+0100; recorded = 2015-11-01 00:00:00+0100; lotNumber = 12345; reasonCode = Immunization](Immunization-7-9-Immunization.md)
* [Immunization: extension = ->PractitionerRole,Confirmed (SNOMED CT#59156000); identifier = urn:oid:2.999.1.2.3.4#45678; status = completed; vaccineCode = MMR-II; occurrence[x] = 2016-03-05 00:00:00+0100; recorded = 2016-03-05 00:00:00+0100; lotNumber = 12345; reasonCode = Immunization](Immunization-7-10-Immunization.md)
* [Immunization: extension = ->PractitionerRole,Confirmed (SNOMED CT#59156000); identifier = urn:oid:2.999.1.2.3.4#12312; status = completed; vaccineCode = HBVAXPRO 40; occurrence[x] = 2012-02-26 00:00:00+0100; recorded = 2012-02-26 00:00:00+0100; lotNumber = 12345; reasonCode = Immunization](Immunization-7-11-Immunization.md)
* [Condition Disorder of liver (disorder)](Condition-8-6-Condition.md)
* [Condition Animal health occupation (occupation)](Condition-8-7-Condition.md)
* [Condition Measles (disorder)](Condition-8-8-Condition.md)
* [AllergyIntolerance Allergy to egg protein (finding)](AllergyIntolerance-11-3-AllergyIntolerance.md)
* [AllergyIntolerance Atopic dermatitis (disorder)](AllergyIntolerance-11-4-AllergyIntolerance.md)
* [Observation Hepatitis B virus surface Ab [Units/volume] in Serum](Observation-9-2-Observation.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "2-4-ImmunizationRecommendationRequestMessageHeader",
  "meta" : {
    "lastUpdated" : "2021-06-01T00:00:00.394+02:00",
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-messageheader"
    ]
  },
  "eventCoding" : {
    "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-clinical-decision-support-event-cs",
    "code" : "immunrecorequest",
    "display" : "Immunization Recommendation Request"
  },
  "destination" : [
    {
      "name" : "Example Vaccination Clinical Decision Support System",
      "endpoint" : "https://example.com/cds/immunization/ws",
      "receiver" : {
        "reference" : "Organization/CDSS-Organization"
      }
    }
  ],
  "sender" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
  },
  "source" : {
    "name" : "Example Portal EPR",
    "software" : "EPR-Portal-VacModule",
    "version" : "V1.1",
    "endpoint" : "urn:oid:2.999.1.2.3.4.5"
  },
  "responsible" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
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
  "focus" : [
    {
      "reference" : "Immunization/7-7-Immunization"
    },
    {
      "reference" : "Immunization/7-8-Immunization"
    },
    {
      "reference" : "Immunization/7-9-Immunization"
    },
    {
      "reference" : "Immunization/7-10-Immunization"
    },
    {
      "reference" : "Immunization/7-11-Immunization"
    },
    {
      "reference" : "Condition/8-6-Condition"
    },
    {
      "reference" : "Condition/8-7-Condition"
    },
    {
      "reference" : "Condition/8-8-Condition"
    },
    {
      "reference" : "AllergyIntolerance/11-3-AllergyIntolerance"
    },
    {
      "reference" : "AllergyIntolerance/11-4-AllergyIntolerance"
    },
    {
      "reference" : "Observation/9-2-Observation"
    }
  ]
}

```
