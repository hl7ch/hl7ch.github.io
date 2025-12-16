# CH LAB-Report ServiceRequest: Laboratory Order - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report ServiceRequest: Laboratory Order**

## Resource Profile: CH LAB-Report ServiceRequest: Laboratory Order 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-servicerequest | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabReportServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the ServiceRequest resource for the purpose of laboratory orders in Switzerland. 

**Usages:**

* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md) and [CH LAB-Report Composition: Laboratory Report](StructureDefinition-ch-lab-report-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-report-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-report-servicerequest.csv), [Excel](StructureDefinition-ch-lab-report-servicerequest.xlsx), [Schematron](StructureDefinition-ch-lab-report-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-report-servicerequest",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/ServiceRequest-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-servicerequest",
  "version" : "2.0.0",
  "name" : "ChLabReportServiceRequest",
  "title" : "CH LAB-Report ServiceRequest: Laboratory Order",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This profile constrains the ServiceRequest resource for the purpose of laboratory orders in Switzerland.",
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
        "short" : "CH LAB Service Request: Laboratory"
      },
      {
        "id" : "ServiceRequest.identifier",
        "path" : "ServiceRequest.identifier",
        "min" : 1
      },
      {
        "id" : "ServiceRequest.requisition",
        "path" : "ServiceRequest.requisition",
        "short" : "Composite Request ID."
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-orderCodes-eu-lab"
        }
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-animal-eu-lab",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.org/fhir/StructureDefinition/Location",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.authoredOn",
        "path" : "ServiceRequest.authoredOn",
        "short" : "When the order was placed"
      },
      {
        "id" : "ServiceRequest.insurance",
        "path" : "ServiceRequest.insurance",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Coverage"]
          }
        ]
      },
      {
        "id" : "ServiceRequest.supportingInfo",
        "path" : "ServiceRequest.supportingInfo",
        "short" : "Additional information: e.g AOEs and prior results"
      },
      {
        "id" : "ServiceRequest.specimen",
        "path" : "ServiceRequest.specimen",
        "short" : "Specimens to be used by the laboratory procedure",
        "comment" : "If the specimen information are known when the order is created then the ServiceRequest.specimen should be used.\nIf the ServiceRequest can be updated when the specimen is collected then the ServiceRequest.specimen or the Specimen.request could be used.\nOtherwise the relationship is recorded in the Specimen.request element",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
            ]
          }
        ]
      }
    ]
  }
}

```
