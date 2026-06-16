# CH UMZH Connect Coordination Task - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH UMZH Connect Coordination Task**

## Resource Profile: CH UMZH Connect Coordination Task 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ChUmzhConnectCoordinationTask |
| **Copyright/Legal**: CC0-1.0 | |

 
CH UMZH Connect Coordination Task 

**Usages:**

* Examples for this Profile: [Task/TaskReferralOrthopedicSurgery](Task-TaskReferralOrthopedicSurgery.md), [Task/TaskReferralOrthopedicSurgeryCompleted](Task-TaskReferralOrthopedicSurgeryCompleted.md) and [Task/TaskReferralOrthopedicSurgeryUpdated](Task-TaskReferralOrthopedicSurgeryUpdated.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-umzh-connect|current/StructureDefinition/StructureDefinition-ch-umzh-connect-coordinationtask.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-umzh-connect-coordinationtask.csv), [Excel](StructureDefinition-ch-umzh-connect-coordinationtask.xlsx), [Schematron](StructureDefinition-ch-umzh-connect-coordinationtask.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-umzh-connect-coordinationtask",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask",
  "version" : "1.0.0-ballot",
  "name" : "ChUmzhConnectCoordinationTask",
  "title" : "CH UMZH Connect Coordination Task",
  "status" : "active",
  "date" : "2026-06-16T06:42:23+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "CH UMZH Connect Coordination Task",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Task",
  "baseDefinition" : "http://hl7.org/fhir/uv/cow/StructureDefinition/coordination-task",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Task",
      "path" : "Task"
    },
    {
      "id" : "Task.businessStatus",
      "path" : "Task.businessStatus",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.org/fhir/uv/cow/ValueSet/business-status"
      }
    },
    {
      "id" : "Task.focus",
      "path" : "Task.focus",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest"]
      }]
    },
    {
      "id" : "Task.requester",
      "path" : "Task.requester",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
      }],
      "constraint" : [{
        "key" : "ch-umzh-abs-url",
        "severity" : "error",
        "human" : "Reference must be an absolute URL (http:// or https://)",
        "expression" : "reference.exists() implies reference.matches('^https?://')",
        "source" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"
      }]
    },
    {
      "id" : "Task.owner",
      "path" : "Task.owner",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
      }],
      "constraint" : [{
        "key" : "ch-umzh-abs-url",
        "severity" : "error",
        "human" : "Reference must be an absolute URL (http:// or https://)",
        "expression" : "reference.exists() implies reference.matches('^https?://')",
        "source" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"
      }]
    }]
  }
}

```
