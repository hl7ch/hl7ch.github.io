# CH EMS Observation: Breathing - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Observation: Breathing**

## Resource Profile: CH EMS Observation: Breathing 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-breathing | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsObservationBreathing |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Observation resource for representing the findings of the breathing. 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-observation-breathing.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-observation-breathing.csv), [Excel](StructureDefinition-ch-ems-observation-breathing.xlsx), [Schematron](StructureDefinition-ch-ems-observation-breathing.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-observation-breathing",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-breathing",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsObservationBreathing",
  "title" : "CH EMS Observation: Breathing",
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
  "description" : "This profile constrains the Observation resource for representing the findings of the breathing.",
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
      "short" : "CH EMS Observation: Breathing"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Finding of respiratory obstruction",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "301282008"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-respirationObservation"
      }
    }]
  }
}

```
