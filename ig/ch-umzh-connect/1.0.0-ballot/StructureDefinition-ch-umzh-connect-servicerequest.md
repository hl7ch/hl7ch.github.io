# CH UMZH Connect ServiceRequest - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH UMZH Connect ServiceRequest**

## Resource Profile: CH UMZH Connect ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ChUmzhConnectServiceRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
CH UMZH Connect ServiceRequest is derived from CH eTOC 

**Usages:**

* Refer to this Profile: [CH UMZH Connect Coordination Task](StructureDefinition-ch-umzh-connect-coordinationtask.md)
* Examples for this Profile: [ServiceRequest/ReferralOrthopedicSurgery](ServiceRequest-ReferralOrthopedicSurgery.md) and [ServiceRequest/ReferralTumorboard](ServiceRequest-ReferralTumorboard.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-umzh-connect|current/StructureDefinition/StructureDefinition-ch-umzh-connect-servicerequest.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-umzh-connect-servicerequest.csv), [Excel](StructureDefinition-ch-umzh-connect-servicerequest.xlsx), [Schematron](StructureDefinition-ch-umzh-connect-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-umzh-connect-servicerequest",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest",
  "version" : "1.0.0-ballot",
  "name" : "ChUmzhConnectServiceRequest",
  "title" : "CH UMZH Connect ServiceRequest",
  "status" : "active",
  "date" : "2026-06-16T06:40:38+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "CH UMZH Connect ServiceRequest is derived from CH eTOC",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest",
      "short" : "CH UMZH Connect ServiceRequest"
    },
    {
      "id" : "ServiceRequest.category",
      "path" : "ServiceRequest.category",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-umzh-connect/ValueSet/ch-umzh-connect-servicerequest-category"
      }
    },
    {
      "id" : "ServiceRequest.reasonReference",
      "path" : "ServiceRequest.reasonReference",
      "max" : "1"
    }]
  }
}

```
