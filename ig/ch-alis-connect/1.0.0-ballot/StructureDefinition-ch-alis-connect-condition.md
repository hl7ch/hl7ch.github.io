# CH ALIS Condition Profile - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Condition Profile**

## Resource Profile: CH ALIS Condition Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-condition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition for the Condition resource in the context of ALIS-Connect. 

**Usages:**

* Refer to this Profile: [CH ALIS Encounter Profile](StructureDefinition-ch-alis-connect-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-condition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-condition.csv), [Excel](StructureDefinition-ch-alis-connect-condition.xlsx), [Schematron](StructureDefinition-ch-alis-connect-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-condition",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-condition",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisCondition",
  "title" : "CH ALIS Condition Profile",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Base definition for the Condition resource in the context of ALIS-Connect.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "alis",
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
  {
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
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition",
      "short" : "CH ALIS Condition"
    },
    {
      "id" : "Condition.extension",
      "path" : "Condition.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Condition.extension:DiagnosisConfidential",
      "path" : "Condition.extension",
      "sliceName" : "DiagnosisConfidential",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-diagnosisconfidential"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "DiagnosisConfidential"
      }]
    },
    {
      "id" : "Condition.code.coding",
      "path" : "Condition.code.coding",
      "min" : 1
    },
    {
      "id" : "Condition.code.coding.system",
      "path" : "Condition.code.coding.system",
      "short" : "DiagCatType",
      "mapping" : [{
        "identity" : "alis",
        "map" : "DiagnosisSystem"
      }]
    },
    {
      "id" : "Condition.code.coding.version",
      "path" : "Condition.code.coding.version",
      "mapping" : [{
        "identity" : "alis",
        "map" : "DiagnosisVersion"
      }]
    },
    {
      "id" : "Condition.code.coding.code",
      "path" : "Condition.code.coding.code",
      "short" : "DiagCode",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "DiagnosisCode"
      }]
    },
    {
      "id" : "Condition.bodySite",
      "path" : "Condition.bodySite",
      "max" : "1",
      "mapping" : [{
        "identity" : "alis",
        "map" : "Laterality"
      }]
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient"],
        "aggregation" : ["contained"]
      }]
    },
    {
      "id" : "Condition.subject.reference",
      "path" : "Condition.subject.reference",
      "min" : 1
    },
    {
      "id" : "Condition.onset[x]",
      "path" : "Condition.onset[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Condition.onset[x]:onsetDateTime",
      "path" : "Condition.onset[x]",
      "sliceName" : "onsetDateTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "OnSetDateTime"
      }]
    }]
  }
}

```
