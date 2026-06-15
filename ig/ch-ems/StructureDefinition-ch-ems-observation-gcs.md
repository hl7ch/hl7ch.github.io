# CH EMS Observation: GCS - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Observation: GCS**

## Resource Profile: CH EMS Observation: GCS 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsObservationGCS |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource for representing the GCS (Glasgow Coma Scale). 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-observation-gcs.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-observation-gcs.csv), [Excel](StructureDefinition-ch-ems-observation-gcs.xlsx), [Schematron](StructureDefinition-ch-ems-observation-gcs.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-observation-gcs",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsObservationGCS",
  "title" : "CH EMS Observation: GCS",
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
  "description" : "This profile constrains the Observation resource for representing the GCS (Glasgow Coma Scale).",
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
      "short" : "CH EMS Observation: GCS"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Glasgow coma score total",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "9269-2"
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
      "id" : "Observation.component",
      "path" : "Observation.component",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.component:motor",
      "path" : "Observation.component",
      "sliceName" : "motor",
      "short" : "Glasgow coma score motor",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:motor.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "9268-4"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:motor.value[x]",
      "path" : "Observation.component.value[x]",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsMotoric"
      }
    },
    {
      "id" : "Observation.component:motor.value[x].coding.extension:itemWeight",
      "path" : "Observation.component.value[x].coding.extension",
      "sliceName" : "itemWeight",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/itemWeight|5.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:verbal",
      "path" : "Observation.component",
      "sliceName" : "verbal",
      "short" : "Glasgow coma score verbal",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:verbal.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "9270-0"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:verbal.value[x]",
      "path" : "Observation.component.value[x]",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcsVerbal"
      }
    },
    {
      "id" : "Observation.component:verbal.value[x].coding.extension:itemWeight",
      "path" : "Observation.component.value[x].coding.extension",
      "sliceName" : "itemWeight",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/itemWeight|5.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:eyeOpening",
      "path" : "Observation.component",
      "sliceName" : "eyeOpening",
      "short" : "Glasgow coma score eye opening",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:eyeOpening.code",
      "path" : "Observation.component.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "9267-6"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:eyeOpening.value[x]",
      "path" : "Observation.component.value[x]",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-gcs-augenoeffnung"
      }
    },
    {
      "id" : "Observation.component:eyeOpening.value[x].coding.extension:itemWeight",
      "path" : "Observation.component.value[x].coding.extension",
      "sliceName" : "itemWeight",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/itemWeight|5.3.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
