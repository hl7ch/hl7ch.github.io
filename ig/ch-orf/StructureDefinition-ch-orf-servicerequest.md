# CH ORF ServiceRequest - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF ServiceRequest**

## Resource Profile: CH ORF ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to define how the record of a request for service to be performed is represented in the context of an order. This resource is used to share relevant information required to support an CH ORF request from the order placer to the order filler. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF Composition](StructureDefinition-ch-orf-composition.md) and [CH ORF QuestionnaireResponse](StructureDefinition-ch-orf-questionnaireresponse.md)
* Examples for this Profile: [ServiceRequest/sr-order-referral-form](ServiceRequest-sr-order-referral-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-servicerequest.csv), [Excel](StructureDefinition-ch-orf-servicerequest.xlsx), [Schematron](StructureDefinition-ch-orf-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-servicerequest",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest",
  "version" : "3.0.2",
  "name" : "ChOrfServiceRequest",
  "title" : "CH ORF ServiceRequest",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
  "description" : "Profile to define how the record of a request for service to be performed is represented in the context of an order.\nThis resource is used to share relevant information required to support an CH ORF request from the order placer to the order filler.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-servicerequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest",
        "short" : "CH ORF ServiceRequest"
      },
      {
        "id" : "ServiceRequest.extension",
        "path" : "ServiceRequest.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "ServiceRequest.extension:locationAndTime",
        "path" : "ServiceRequest.extension",
        "sliceName" : "locationAndTime",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-locationandtime"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.extension:requestedEncounterDetails",
        "path" : "ServiceRequest.extension",
        "sliceName" : "requestedEncounterDetails",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier",
        "path" : "ServiceRequest.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:placerOrderIdentifier",
        "path" : "ServiceRequest.identifier",
        "sliceName" : "placerOrderIdentifier",
        "short" : "Placer Order Identifier",
        "min" : 1,
        "max" : "1",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "PLAC"
              }
            ]
          }
        },
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:placerOrderIdentifier.system",
        "path" : "ServiceRequest.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:placerOrderIdentifier.value",
        "path" : "ServiceRequest.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:fillerOrderIdentifier",
        "path" : "ServiceRequest.identifier",
        "sliceName" : "fillerOrderIdentifier",
        "short" : "Filler Order Identifier",
        "min" : 0,
        "max" : "1",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "FILL"
              }
            ]
          }
        },
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:fillerOrderIdentifier.system",
        "path" : "ServiceRequest.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.identifier:fillerOrderIdentifier.value",
        "path" : "ServiceRequest.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.status",
        "path" : "ServiceRequest.status",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.intent",
        "path" : "ServiceRequest.intent",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.priority",
        "path" : "ServiceRequest.priority",
        "short" : "Order priority",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
        "short" : "Patient",
        "definition" : "The principle target of a particular form content is one patient (for obstetrical and neonatal use cases see...).",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.requester",
        "path" : "ServiceRequest.requester",
        "short" : "The person/organization responsible for the form content",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.insurance",
        "path" : "ServiceRequest.insurance",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.note",
        "path" : "ServiceRequest.note",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.note.text",
        "path" : "ServiceRequest.note.text",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.patientInstruction",
        "path" : "ServiceRequest.patientInstruction",
        "short" : "Use Appointment.patientInstruction (referenced via ServiceRequest.extension) for patient-oriented instructions"
      }
    ]
  }
}

```
