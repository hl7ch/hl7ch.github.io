# CH EMS CodeableConcept - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS CodeableConcept**

## Data Type Profile: CH EMS CodeableConcept 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsCodeableConcept |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the CodeableConcept data type. 

**Usages:**

* Use this DataType Profile: [CH EMS AllergyIntolerance](StructureDefinition-ch-ems-allergyintolerance.md), [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md), [CH EMS Extension: Disinfection](StructureDefinition-ch-ems-ext-disinfection.md), [CH EMS Extension: Emergency Doctor System](StructureDefinition-ch-ems-ext-emergencydoctorsystem.md)... Show 39 more, [CH EMS Extension: Identification](StructureDefinition-ch-ems-ext-identification.md), [CH EMS Extension: Laterality](StructureDefinition-ch-ems-ext-laterality.md), [CH EMS Extension: Owner](StructureDefinition-ch-ems-ext-owner.md), [CH EMS Extension: Performer](StructureDefinition-ch-ems-ext-performer.md), [CH EMS Extension: Person Role](StructureDefinition-ch-ems-ext-personrole.md), [CH EMS Extension: Team Role](StructureDefinition-ch-ems-ext-teamrole.md), [CH EMS Extension: Urgency Adequate](StructureDefinition-ch-ems-ext-urgencyadequate.md), [CH EMS Extension: Valuables Patient](StructureDefinition-ch-ems-ext-valuablespatient.md), [CH EMS Extension: Violence](StructureDefinition-ch-ems-ext-violence.md), [CH EMS Location: Ambulance](StructureDefinition-ch-ems-location-ambulance.md), [CH EMS Location: Location and Destination](StructureDefinition-ch-ems-location-locationdestination.md), [CH EMS Medication](StructureDefinition-ch-ems-medication.md), [CH EMS Observation: Airways](StructureDefinition-ch-ems-observation-airways.md), [CH EMS Observation: Anamnesis Event](StructureDefinition-ch-ems-observation-anamnesisevent.md), [CH EMS Observation: Anamnesis Symptom](StructureDefinition-ch-ems-observation-anamnesissymptom.md), [CH EMS Observation: AVPU](StructureDefinition-ch-ems-observation-avpu.md), [CH EMS Observation: Blood Pressure](StructureDefinition-ch-ems-observation-bloodpressure.md), [CH EMS Observation: Breathing](StructureDefinition-ch-ems-observation-breathing.md), [CH EMS Observation: Cold Exposure](StructureDefinition-ch-ems-observation-coldexposure.md), [CH EMS Observation: Condition Change](StructureDefinition-ch-ems-observation-conditionchange.md), [CH EMS Observation: Death Manner](StructureDefinition-ch-ems-observation-deathmanner.md), [CH EMS Observation: Diagnosis](StructureDefinition-ch-ems-observation-diagnosis.md), [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md), [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md), [CH EMS Observation: Heat Exposure](StructureDefinition-ch-ems-observation-heatexposure.md), [CH EMS Observation: Mission Time Status](StructureDefinition-ch-ems-observation-missiontimestatus.md), [CH EMS Observation: NACA](StructureDefinition-ch-ems-observation-naca.md), [CH EMS Observation: Pupil Shape](StructureDefinition-ch-ems-observation-pupilshape.md), [CH EMS Observation: Pupil Size](StructureDefinition-ch-ems-observation-pupilsize.md), [CH EMS Observation: Status Priority](StructureDefinition-ch-ems-observation-statuspriority.md), [CH EMS Observation: Stroke/FAST](StructureDefinition-ch-ems-observation-stroke-fast.md), [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md), [CH EMS PractitionerRole](StructureDefinition-ch-ems-practitionerrole.md), [CH EMS Procedure: Airways](StructureDefinition-ch-ems-procedure-airways.md), [CH EMS Procedure: Breathing](StructureDefinition-ch-ems-procedure-breathing.md), [CH EMS Procedure: Precautions Infection](StructureDefinition-ch-ems-procedure-precautionsinfection.md), [CH EMS Procedure: Pretreatment](StructureDefinition-ch-ems-procedure-pretreatment.md), [CH EMS Procedure: Transportation](StructureDefinition-ch-ems-procedure-transportation.md) and [CH EMS Procedure: Wound Treatment](StructureDefinition-ch-ems-procedure-woundtreatment.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-codeableconcept.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-codeableconcept.csv), [Excel](StructureDefinition-ch-ems-codeableconcept.xlsx), [Schematron](StructureDefinition-ch-ems-codeableconcept.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-codeableconcept",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsCodeableConcept",
  "title" : "CH EMS CodeableConcept",
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
  "description" : "This profile constrains the CodeableConcept data type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "orim",
    "uri" : "http://hl7.org/orim",
    "name" : "Ontological RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "CodeableConcept",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CodeableConcept",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CodeableConcept",
      "path" : "CodeableConcept",
      "short" : "CH EMS CodeableConcept"
    },
    {
      "id" : "CodeableConcept.coding",
      "path" : "CodeableConcept.coding",
      "type" : [{
        "code" : "Coding",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coding"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CodeableConcept.text",
      "path" : "CodeableConcept.text",
      "mustSupport" : true
    }]
  }
}

```
