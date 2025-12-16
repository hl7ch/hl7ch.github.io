# CH Core ServiceRequest - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core ServiceRequest**

## Resource Profile: CH Core ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-servicerequest | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the ServiceRequest resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-servicerequest.csv), [Excel](StructureDefinition-ch-core-servicerequest.xlsx), [Schematron](StructureDefinition-ch-core-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-servicerequest",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-servicerequest",
  "version" : "6.0.0",
  "name" : "CHCoreServiceRequest",
  "title" : "CH Core ServiceRequest",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Base definition of the ServiceRequest resource for use in Swiss specific use cases.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
      "identity" : "quick",
      "uri" : "http://siframework.org/cqf",
      "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest",
        "short" : "CH Core ServiceRequest"
      },
      {
        "id" : "ServiceRequest.basedOn",
        "path" : "ServiceRequest.basedOn",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/CarePlan",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-servicerequest",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationrequest"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.category",
        "path" : "ServiceRequest.category",
        "binding" : {
          "strength" : "example",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/servicerequest-category"
        }
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.encounter",
        "path" : "ServiceRequest.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.requester",
        "path" : "ServiceRequest.requester",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.performer",
        "path" : "ServiceRequest.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://hl7.org/fhir/StructureDefinition/HealthcareService",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.reasonReference",
        "path" : "ServiceRequest.reasonReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
              "http://hl7.org/fhir/StructureDefinition/Observation",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.insurance",
        "path" : "ServiceRequest.insurance",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage",
              "http://hl7.org/fhir/StructureDefinition/ClaimResponse"
            ]
          }
        ]
      }
    ]
  }
}

```
