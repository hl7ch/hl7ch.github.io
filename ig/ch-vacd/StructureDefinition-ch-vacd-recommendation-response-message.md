# CH VACD Message Immunization Recommendation Response - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Message Immunization Recommendation Response**

## Resource Profile: CH VACD Message Immunization Recommendation Response 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-message | *Version*:6.0.0 | |
| Active as of 2025-12-16 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 3 | *Computable Name*:CHVACDRecommendationResponseMessage |
| **Copyright/Legal**: CC0-1.0 | | |

 
Definition of the bundle for the immunization recommendation response. 

**Usages:**

* Examples for this Profile: [Bundle/1-5-ImmunizationRecommendationResponse](Bundle-1-5-ImmunizationRecommendationResponse.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-recommendation-response-message)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-recommendation-response-message.csv), [Excel](StructureDefinition-ch-vacd-recommendation-response-message.xlsx), [Schematron](StructureDefinition-ch-vacd-recommendation-response-message.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-recommendation-response-message",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 3
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-message",
  "version" : "6.0.0",
  "name" : "CHVACDRecommendationResponseMessage",
  "title" : "CH VACD Message Immunization Recommendation Response",
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
  "description" : "Definition of the bundle for the immunization recommendation response.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH VACD Immunization Recommendation Response Message"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "short" : "Identification number of the document",
        "min" : 1
      },
      {
        "id" : "Bundle.identifier.system",
        "path" : "Bundle.identifier.system",
        "min" : 1
      },
      {
        "id" : "Bundle.identifier.value",
        "path" : "Bundle.identifier.value",
        "min" : 1
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "fixedCode" : "message"
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            }
          ],
          "rules" : "open"
        },
        "min" : 4
      },
      {
        "id" : "Bundle.entry:MessageHeader",
        "path" : "Bundle.entry",
        "sliceName" : "MessageHeader",
        "short" : "Immunization Recommendation Request MessageHeader",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:MessageHeader.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MessageHeader",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-response-messageheader"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "short" : "Immunization Recommendation Request Patient",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:Patient.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Patient",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRoles",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRoles",
        "short" : "PractitionerRoles",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PractitionerRoles.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PractitionerRole",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Practitioners",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioners",
        "short" : "Practitioners",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Practitioners.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Practitioner",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Organizations",
        "path" : "Bundle.entry",
        "sliceName" : "Organizations",
        "short" : "Organizations",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Organizations.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Organization",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ImmunizationRecommendations",
        "path" : "Bundle.entry",
        "sliceName" : "ImmunizationRecommendations",
        "short" : "Immunizations",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ImmunizationRecommendations.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "ImmunizationRecommendation",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
            ]
          }
        ]
      }
    ]
  }
}

```
