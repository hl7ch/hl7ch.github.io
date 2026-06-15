# CH EMS ServiceRequest - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS ServiceRequest**

## Resource Profile: CH EMS ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the ServiceRequest resource for representing the requesting organization and further mission details. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-servicerequest.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-servicerequest.csv), [Excel](StructureDefinition-ch-ems-servicerequest.xlsx), [Schematron](StructureDefinition-ch-ems-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-servicerequest",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsServiceRequest",
  "title" : "CH EMS ServiceRequest",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This profile constrains the ServiceRequest resource for representing the requesting organization and further mission details.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-servicerequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest",
      "short" : "CH EMS ServiceRequest"
    },
    {
      "id" : "ServiceRequest.contained",
      "path" : "ServiceRequest.contained",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.subject",
      "path" : "ServiceRequest.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.subject.reference",
      "path" : "ServiceRequest.subject.reference",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.encounter",
      "path" : "ServiceRequest.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.encounter.reference",
      "path" : "ServiceRequest.encounter.reference",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.requester",
      "path" : "ServiceRequest.requester",
      "short" : "Requesting organisation (intermedicat care (IMC))",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"],
        "aggregation" : ["contained"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.requester.reference",
      "path" : "ServiceRequest.requester.reference",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.insurance",
      "path" : "ServiceRequest.insurance",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coverage"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.insurance.reference",
      "path" : "ServiceRequest.insurance.reference",
      "min" : 1
    }]
  }
}

```
