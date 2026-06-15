# CH EMS Observation: Stroke/FAST - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Observation: Stroke/FAST**

## Resource Profile: CH EMS Observation: Stroke/FAST 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-stroke-fast | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsObservationStrokeFAST |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource for representing the FAST (face, arm, speech, time) test in the context of a stroke examination. 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-observation-stroke-fast.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-observation-stroke-fast.csv), [Excel](StructureDefinition-ch-ems-observation-stroke-fast.xlsx), [Schematron](StructureDefinition-ch-ems-observation-stroke-fast.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-observation-stroke-fast",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-stroke-fast",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsObservationStrokeFAST",
  "title" : "CH EMS Observation: Stroke/FAST",
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
  "description" : "This profile constrains the Observation resource for representing the FAST (face, arm, speech, time) test in the context of a stroke examination.",
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
      "short" : "CH EMS Observation: Stroke/FAST"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Stroke / FAST",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "716800008"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "T: Time",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 3,
      "max" : "3"
    },
    {
      "id" : "Observation.component.extension",
      "path" : "Observation.component.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.component:face",
      "path" : "Observation.component",
      "sliceName" : "face",
      "short" : "F: Face",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:face.extension:laterality",
      "path" : "Observation.component.extension",
      "sliceName" : "laterality",
      "short" : "Affected side of the face",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:face.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "89545001"
        }]
      }
    },
    {
      "id" : "Observation.component:face.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Face drooping",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    },
    {
      "id" : "Observation.component:arm",
      "path" : "Observation.component",
      "sliceName" : "arm",
      "short" : "A: Arm",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:arm.extension:laterality",
      "path" : "Observation.component.extension",
      "sliceName" : "laterality",
      "short" : "Affected arm",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:arm.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "53120007"
        }]
      }
    },
    {
      "id" : "Observation.component:arm.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Arm weakness",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    },
    {
      "id" : "Observation.component:speech",
      "path" : "Observation.component",
      "sliceName" : "speech",
      "short" : "S: Speech",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:speech.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "87335007"
        }]
      }
    },
    {
      "id" : "Observation.component:speech.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Speech difficulty",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-yesNoUnknown"
      }
    }]
  }
}

```
