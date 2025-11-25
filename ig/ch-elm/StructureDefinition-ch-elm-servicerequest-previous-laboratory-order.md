# CH ELM ServiceRequest: Laboratory Order - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM ServiceRequest: Laboratory Order**

## Resource Profile: CH ELM ServiceRequest: Laboratory Order 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-previous-laboratory-order | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmServicePreviousRequestLaboratoryOrder |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the ServiceRequest resource for the purpose of the previous laboratory order. 

**Usages:**

* Refer to this Profile: [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-servicerequest-previous-laboratory-order)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.csv), [Excel](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.xlsx), [Schematron](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-servicerequest-previous-laboratory-order",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/ServiceRequest-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-previous-laboratory-order",
  "version" : "1.13.0",
  "name" : "ChElmServicePreviousRequestLaboratoryOrder",
  "title" : "CH ELM ServiceRequest: Laboratory Order",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "This CH ELM base profile constrains the ServiceRequest resource for the purpose of the previous laboratory order.",
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
        "id" : "ServiceRequest.identifier.extension:dataabsentreason",
        "path" : "ServiceRequest.identifier.extension",
        "sliceName" : "dataabsentreason",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
          }
        ]
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
      }
    ]
  }
}

```
