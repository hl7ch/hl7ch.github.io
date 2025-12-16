# CH VACD Message Immunization Recommendation Request - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Message Immunization Recommendation Request**

## Resource Profile: CH VACD Message Immunization Recommendation Request 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-message | *Version*:6.0.0 | |
| Active as of 2025-12-16 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 3 | *Computable Name*:CHVACDRecommendationRequestMessage |
| **Copyright/Legal**: CC0-1.0 | | |

 
Definition of the bundle for the immunization recommendation request. 

**Usages:**

* Examples for this Profile: [Bundle/1-4-ImmunizationRecommendationRequest](Bundle-1-4-ImmunizationRecommendationRequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-recommendation-request-message)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-recommendation-request-message.csv), [Excel](StructureDefinition-ch-vacd-recommendation-request-message.xlsx), [Schematron](StructureDefinition-ch-vacd-recommendation-request-message.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-recommendation-request-message",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 3
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-message",
  "version" : "6.0.0",
  "name" : "CHVACDRecommendationRequestMessage",
  "title" : "CH VACD Message Immunization Recommendation Request",
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
  "description" : "Definition of the bundle for the immunization recommendation request.",
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
        "short" : "CH VACD Immunization Recommendation Request Message"
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
        "min" : 3
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
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-messageheader"
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PractitionerRole",
        "path" : "Bundle.entry",
        "sliceName" : "PractitionerRole",
        "short" : "PractitionerRoles",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PractitionerRole.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
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
        "id" : "Bundle.entry:Practitioner",
        "path" : "Bundle.entry",
        "sliceName" : "Practitioner",
        "short" : "Practitioners",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Practitioner.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
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
        "id" : "Bundle.entry:Organization",
        "path" : "Bundle.entry",
        "sliceName" : "Organization",
        "short" : "Organizations",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Organization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
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
        "id" : "Bundle.entry:Immunization",
        "path" : "Bundle.entry",
        "sliceName" : "Immunization",
        "short" : "Immunizations",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Immunization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Immunization",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:BasicImmunization",
        "path" : "Bundle.entry",
        "sliceName" : "BasicImmunization",
        "short" : "BasicImmunizations",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:BasicImmunization.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicalProblem",
        "path" : "Bundle.entry",
        "sliceName" : "MedicalProblem",
        "short" : "MedicalProblems",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicalProblem.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PastIllness",
        "path" : "Bundle.entry",
        "sliceName" : "PastIllness",
        "short" : "PastIllness",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PastIllness.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Condition",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance",
        "path" : "Bundle.entry",
        "sliceName" : "AllergyIntolerance",
        "short" : "AllergyIntolerances",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:AllergyIntolerance.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "AllergyIntolerance",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "short" : "Observations",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
            ]
          }
        ]
      }
    ]
  }
}

```
