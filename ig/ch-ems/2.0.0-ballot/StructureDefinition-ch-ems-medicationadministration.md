# CH EMS MedicationAdministration - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS MedicationAdministration**

## Resource Profile: CH EMS MedicationAdministration 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationadministration | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsMedicationAdministration |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the MedicationAdministration resource for representing a administration of a medication to a patient. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-medicationadministration.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-medicationadministration.csv), [Excel](StructureDefinition-ch-ems-medicationadministration.xlsx), [Schematron](StructureDefinition-ch-ems-medicationadministration.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-medicationadministration",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationadministration",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsMedicationAdministration",
  "title" : "CH EMS MedicationAdministration",
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
  "description" : "This profile constrains the MedicationAdministration resource for representing a administration of a medication to a patient.",
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
  },
  {
    "identity" : "w3c.prov",
    "uri" : "http://www.w3.org/ns/prov",
    "name" : "W3C PROV"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationAdministration",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationadministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationAdministration",
      "path" : "MedicationAdministration",
      "short" : "CH EMS MedicationAdministration"
    },
    {
      "id" : "MedicationAdministration.contained",
      "path" : "MedicationAdministration.contained",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.medication[x]",
      "path" : "MedicationAdministration.medication[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medication"],
        "aggregation" : ["contained"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.medication[x].reference",
      "path" : "MedicationAdministration.medication[x].reference",
      "min" : 1
    },
    {
      "id" : "MedicationAdministration.subject",
      "path" : "MedicationAdministration.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.subject.reference",
      "path" : "MedicationAdministration.subject.reference",
      "min" : 1
    },
    {
      "id" : "MedicationAdministration.context",
      "path" : "MedicationAdministration.context",
      "short" : "Emergency service during which this allergy or intolerance was observed",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.context.reference",
      "path" : "MedicationAdministration.context.reference",
      "min" : 1
    },
    {
      "id" : "MedicationAdministration.effective[x]",
      "path" : "MedicationAdministration.effective[x]",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.reasonCode.text",
      "path" : "MedicationAdministration.reasonCode.text",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage",
      "path" : "MedicationAdministration.dosage",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.route",
      "path" : "MedicationAdministration.dosage.route",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.method",
      "path" : "MedicationAdministration.dosage.method",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.dose",
      "path" : "MedicationAdministration.dosage.dose",
      "mustSupport" : true
    }]
  }
}

```
