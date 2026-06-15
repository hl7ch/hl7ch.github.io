# CH EMS Procedure: Transportation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Procedure: Transportation**

## Resource Profile: CH EMS Procedure: Transportation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-transportation | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsProcedureTransportation |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Procedure resource for representing the details of patient positioning and the used recovery aids. 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-procedure-transportation.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-procedure-transportation.csv), [Excel](StructureDefinition-ch-ems-procedure-transportation.xlsx), [Schematron](StructureDefinition-ch-ems-procedure-transportation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-procedure-transportation",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-transportation",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsProcedureTransportation",
  "title" : "CH EMS Procedure: Transportation",
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
  "description" : "This profile constrains the Procedure resource for representing the details of patient positioning and the used recovery aids.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure",
      "short" : "CH EMS Procedure: Bedding"
    },
    {
      "id" : "Procedure.category",
      "path" : "Procedure.category",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "229824005"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Bedding of the patient",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-bedding"
      }
    },
    {
      "id" : "Procedure.usedCode",
      "path" : "Procedure.usedCode",
      "short" : "Aids used in the recovery and transportation of the patient",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-actRecovAid"
      }
    }]
  }
}

```
