# CH VACD Travel Information - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Travel Information**

## Resource Profile: CH VACD Travel Information 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-information | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:CHVACDTravelInformation |
| **Copyright/Legal**: CC0-1.0 | |

 
Travel Information for ImmunizationRecommendation for travel vaccinations. 

### Scope and Usage

This Condition profile is used to define travel information to be sent with an [Immunization Recommendation Request Message](immunization-recommendation-request-message.md) to a CDS System to receive a [Immunization Recommendation Response Message](immunization-recommendation-response-message.md) with [Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md) in context to the travel destination.

### Model

**Usages:**

* Use this Profile: [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [Condition/8-10-Condition](Condition-8-10-Condition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-vacd|current/StructureDefinition/StructureDefinition-ch-vacd-travel-information.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-travel-information.csv), [Excel](StructureDefinition-ch-vacd-travel-information.xlsx), [Schematron](StructureDefinition-ch-vacd-travel-information.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-travel-information",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-information",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDTravelInformation",
  "title" : "CH VACD Travel Information",
  "status" : "active",
  "date" : "2026-06-11T13:29:29+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Travel Information for ImmunizationRecommendation for travel vaccinations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition.clinicalStatus",
      "path" : "Condition.clinicalStatus",
      "max" : "0"
    },
    {
      "id" : "Condition.verificationStatus",
      "path" : "Condition.verificationStatus",
      "short" : "The fix verification status \"Confirmed\".",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
          "code" : "confirmed"
        }]
      }
    },
    {
      "id" : "Condition.category",
      "path" : "Condition.category",
      "max" : "0"
    },
    {
      "id" : "Condition.severity",
      "path" : "Condition.severity",
      "max" : "0"
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "Fix value \"Traveling\" for indication of travel information.",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "129018004"
        }]
      }
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"]
      }]
    },
    {
      "id" : "Condition.onset[x]",
      "path" : "Condition.onset[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Condition.onset[x]:onsetPeriod",
      "path" : "Condition.onset[x]",
      "sliceName" : "onsetPeriod",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Condition.evidence",
      "path" : "Condition.evidence",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Condition.evidence.detail",
      "path" : "Condition.evidence.detail",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location"]
      }]
    }]
  }
}

```
