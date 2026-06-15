# CH EMS Observation (Base) - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Observation (Base)**

## Resource Profile: CH EMS Observation (Base) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource to define the requirements for all specialized CH EMS Observation profiles. 

**Usages:**

* Derived from this Profile: [CH EMS Observation: Airways](StructureDefinition-ch-ems-observation-airways.md), [CH EMS Observation: Anamnesis Event](StructureDefinition-ch-ems-observation-anamnesisevent.md), [CH EMS Observation: Anamnesis Symptom](StructureDefinition-ch-ems-observation-anamnesissymptom.md), [CH EMS Observation: AVPU](StructureDefinition-ch-ems-observation-avpu.md)... Show 16 more, [CH EMS Observation: Blood Pressure](StructureDefinition-ch-ems-observation-bloodpressure.md), [CH EMS Observation: Breathing](StructureDefinition-ch-ems-observation-breathing.md), [CH EMS Observation: Cardiac Arrest](StructureDefinition-ch-ems-observation-cardiacarrest.md), [CH EMS Observation: Cold Exposure](StructureDefinition-ch-ems-observation-coldexposure.md), [CH EMS Observation: Condition Change](StructureDefinition-ch-ems-observation-conditionchange.md), [CH EMS Observation: Death Manner](StructureDefinition-ch-ems-observation-deathmanner.md), [CH EMS Observation: Diagnosis](StructureDefinition-ch-ems-observation-diagnosis.md), [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md), [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md), [CH EMS Observation: Heat Exposure](StructureDefinition-ch-ems-observation-heatexposure.md), [CH EMS Observation: Mission Time Status](StructureDefinition-ch-ems-observation-missiontimestatus.md), [CH EMS Observation: NACA](StructureDefinition-ch-ems-observation-naca.md), [CH EMS Observation: Pupil Shape](StructureDefinition-ch-ems-observation-pupilshape.md), [CH EMS Observation: Pupil Size](StructureDefinition-ch-ems-observation-pupilsize.md), [CH EMS Observation: Status Priority](StructureDefinition-ch-ems-observation-statuspriority.md) and [CH EMS Observation: Stroke/FAST](StructureDefinition-ch-ems-observation-stroke-fast.md)
* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-observation.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-observation.csv), [Excel](StructureDefinition-ch-ems-observation.xlsx), [Schematron](StructureDefinition-ch-ems-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-observation",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsObservation",
  "title" : "CH EMS Observation (Base)",
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
  "description" : "This profile constrains the Observation resource to define the requirements for all specialized CH EMS Observation profiles.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation",
      "short" : "CH EMS Observation (Base)"
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "short" : "Patient",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.subject.reference",
      "path" : "Observation.subject.reference",
      "min" : 1
    },
    {
      "id" : "Observation.encounter",
      "path" : "Observation.encounter",
      "short" : "Emergency service during which this observation is made",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.encounter.reference",
      "path" : "Observation.encounter.reference",
      "min" : 1
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "mustSupport" : true
    }]
  }
}

```
