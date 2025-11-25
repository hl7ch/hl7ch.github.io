# CH ELM ServiceRequest: Laboratory Order - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM ServiceRequest: Laboratory Order**

## Resource Profile: CH ELM ServiceRequest: Laboratory Order 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmServiceRequestLaboratoryOrder |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the ServiceRequest resource for the purpose of laboratory orders. 

**Usages:**

* Refer to this Profile: [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-servicerequest-laboratory-order)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-servicerequest-laboratory-order.csv), [Excel](StructureDefinition-ch-elm-servicerequest-laboratory-order.xlsx), [Schematron](StructureDefinition-ch-elm-servicerequest-laboratory-order.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-servicerequest-laboratory-order",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/ServiceRequest-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order",
  "version" : "1.13.0",
  "name" : "ChElmServiceRequestLaboratoryOrder",
  "title" : "CH ELM ServiceRequest: Laboratory Order",
  "status" : "active",
  "date" : "2025-11-25T09:47:06+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM base profile constrains the ServiceRequest resource for the purpose of laboratory orders.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-servicerequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest",
        "short" : "CH ELM ServiceRequest: Laboratory Order"
      },
      {
        "id" : "ServiceRequest.identifier",
        "path" : "ServiceRequest.identifier",
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.identifier.value",
        "path" : "ServiceRequest.identifier.value",
        "min" : 1,
        "maxLength" : 100
      },
      {
        "id" : "ServiceRequest.basedOn",
        "path" : "ServiceRequest.basedOn",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-previous-laboratory-order"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.requisition",
        "path" : "ServiceRequest.requisition",
        "short" : "Original order identifier, use basedOn ServiceRequest identifier if additional order information is provided",
        "mustSupport" : true
      },
      {
        "id" : "ServiceRequest.status",
        "path" : "ServiceRequest.status",
        "patternCode" : "completed"
      },
      {
        "id" : "ServiceRequest.intent",
        "path" : "ServiceRequest.intent",
        "patternCode" : "order"
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept"
            ]
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation"
        }
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.requester",
        "path" : "ServiceRequest.requester",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.specimen",
        "path" : "ServiceRequest.specimen",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
            ]
          }
        ]
      }
    ]
  }
}

```
