# CH EMS Observation: Heart Rate - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Observation: Heart Rate**

## Resource Profile: CH EMS Observation: Heart Rate 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heartrate | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsObservationHeartRate |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource for representing the heart rate, incl. interpretation and method. 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-observation-heartrate.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-observation-heartrate.csv), [Excel](StructureDefinition-ch-ems-observation-heartrate.xlsx), [Schematron](StructureDefinition-ch-ems-observation-heartrate.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-observation-heartrate",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
    "valueCanonical" : "http://hl7.org/fhir/StructureDefinition/heartrate"
  }],
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heartrate",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsObservationHeartRate",
  "title" : "CH EMS Observation: Heart Rate",
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
  "description" : "This profile constrains the Observation resource for representing the heart rate, incl. interpretation and method.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation",
      "short" : "CH EMS Observation: Heart Rate"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Heart rate",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "8867-4"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-quantity"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }]
    },
    {
      "id" : "Observation.interpretation:arrhythmia",
      "path" : "Observation.interpretation",
      "sliceName" : "arrhythmia",
      "short" : "Asystole | Tachycardia | Bradycardia",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pulesResult"
      }
    },
    {
      "id" : "Observation.interpretation:intensity",
      "path" : "Observation.interpretation",
      "sliceName" : "intensity",
      "short" : "weak | normal | strong | not tangible",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-intensity"
      }
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-pulseMethod"
      }
    }]
  }
}

```
