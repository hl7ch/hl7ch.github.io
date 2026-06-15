# CH EMS Procedure (Base) - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Procedure (Base)**

## Resource Profile: CH EMS Procedure (Base) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsProcedure |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Procedure resource to define the requirements for all specialized CH EMS Procedure profiles. 

**Usages:**

* Derived from this Profile: [CH EMS Procedure: Airways](StructureDefinition-ch-ems-procedure-airways.md), [CH EMS Procedure: Breathing](StructureDefinition-ch-ems-procedure-breathing.md), [CH EMS Procedure: Precautions Infection](StructureDefinition-ch-ems-procedure-precautionsinfection.md), [CH EMS Procedure: Pretreatment](StructureDefinition-ch-ems-procedure-pretreatment.md)... Show 2 more, [CH EMS Procedure: Transportation](StructureDefinition-ch-ems-procedure-transportation.md) and [CH EMS Procedure: Wound Treatment](StructureDefinition-ch-ems-procedure-woundtreatment.md)
* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-procedure.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-procedure.csv), [Excel](StructureDefinition-ch-ems-procedure.xlsx), [Schematron](StructureDefinition-ch-ems-procedure.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-procedure",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsProcedure",
  "title" : "CH EMS Procedure (Base)",
  "status" : "active",
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "This profile constrains the Procedure resource to define the requirements for all specialized CH EMS Procedure profiles.",
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
  "type" : "Procedure",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure",
      "short" : "CH EMS Procedure (Base)"
    },
    {
      "id" : "Procedure.subject",
      "path" : "Procedure.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.subject.reference",
      "path" : "Procedure.subject.reference",
      "min" : 1
    },
    {
      "id" : "Procedure.encounter",
      "path" : "Procedure.encounter",
      "short" : "Emergency service during which this procedure is made",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.encounter.reference",
      "path" : "Procedure.encounter.reference",
      "min" : 1
    }]
  }
}

```
