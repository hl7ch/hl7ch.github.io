# CH EMS MedicationStatement - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS MedicationStatement**

## Resource Profile: CH EMS MedicationStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationstatement | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsMedicationStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the MedicationStatement resource for representing a record of a medication that is being consumed by a patient. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-medicationstatement.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-medicationstatement.csv), [Excel](StructureDefinition-ch-ems-medicationstatement.xlsx), [Schematron](StructureDefinition-ch-ems-medicationstatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-medicationstatement",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationstatement",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsMedicationStatement",
  "title" : "CH EMS MedicationStatement",
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
  "description" : "This profile constrains the MedicationStatement resource for representing a record of a medication that is being consumed by a patient.",
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
  "type" : "MedicationStatement",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationStatement",
      "path" : "MedicationStatement",
      "short" : "CH EMS MedicationStatement"
    },
    {
      "id" : "MedicationStatement.contained",
      "path" : "MedicationStatement.contained",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.medication[x]",
      "path" : "MedicationStatement.medication[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medication"],
        "aggregation" : ["contained"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.medication[x].reference",
      "path" : "MedicationStatement.medication[x].reference",
      "min" : 1
    },
    {
      "id" : "MedicationStatement.subject",
      "path" : "MedicationStatement.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.subject.reference",
      "path" : "MedicationStatement.subject.reference",
      "min" : 1
    },
    {
      "id" : "MedicationStatement.context",
      "path" : "MedicationStatement.context",
      "short" : "Emergency service during which this allergy or intolerance was observed",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.context.reference",
      "path" : "MedicationStatement.context.reference",
      "min" : 1
    },
    {
      "id" : "MedicationStatement.reasonCode.text",
      "path" : "MedicationStatement.reasonCode.text",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage",
      "path" : "MedicationStatement.dosage",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.timing",
      "path" : "MedicationStatement.dosage.timing",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.timing.repeat.when",
      "path" : "MedicationStatement.dosage.timing.repeat.when",
      "short" : "Einnahmeschema"
    },
    {
      "id" : "MedicationStatement.dosage.route",
      "path" : "MedicationStatement.dosage.route",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.method",
      "path" : "MedicationStatement.dosage.method",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.doseAndRate",
      "path" : "MedicationStatement.dosage.doseAndRate",
      "mustSupport" : true
    }]
  }
}

```
