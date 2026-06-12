# CH Emergency Record Device Use Statement - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Emergency Record Device Use Statement**

## Resource Profile: CH Emergency Record Device Use Statement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrDeviceUseStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
Use of an implanted device in the Emergency Record. The `bodySite` CodeableConcept may carry the ChEmrBodyStructureReference extension to link to a `ChEmrBodyStructure` for structured anatomy + laterality. 

**Usages:**

* Refer to this Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)
* Examples for this Profile: [DeviceUseStatement/EX-DeviceUseStatement](DeviceUseStatement-EX-DeviceUseStatement.md), [DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker](DeviceUseStatement-UC1-DeviceUseStatement-Pacemaker.md) and [DeviceUseStatement/UC3-DeviceUseStatement-AorticValve](DeviceUseStatement-UC3-DeviceUseStatement-AorticValve.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-deviceusestatement.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-deviceusestatement.csv), [Excel](StructureDefinition-ch-emr-deviceusestatement.xlsx), [Schematron](StructureDefinition-ch-emr-deviceusestatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-deviceusestatement",
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrDeviceUseStatement",
  "title" : "CH Emergency Record Device Use Statement",
  "status" : "active",
  "date" : "2026-06-12T17:17:43+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Use of an implanted device in the Emergency Record. The `bodySite` CodeableConcept may carry the ChEmrBodyStructureReference extension to link to a `ChEmrBodyStructure` for structured anatomy + laterality.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
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
    "identity" : "quick",
    "uri" : "http://siframework.org/cqf",
    "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DeviceUseStatement",
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/DeviceUseStatement-uv-ips",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DeviceUseStatement",
      "path" : "DeviceUseStatement"
    },
    {
      "id" : "DeviceUseStatement.subject",
      "path" : "DeviceUseStatement.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "DeviceUseStatement.device",
      "path" : "DeviceUseStatement.device",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "DeviceUseStatement.bodySite",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "DeviceUseStatement.bodySite",
      "constraint" : [{
        "key" : "ch-emr-dus-bodysite-matches-bodystructure",
        "severity" : "error",
        "human" : "If bodySite carries the body-structure-reference extension, bodySite.coding must equal the referenced BodyStructure.location.coding.",
        "expression" : "extension.where(url = 'http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference').empty() or coding = (extension.where(url = 'http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference').value as Reference).resolve().location.coding",
        "source" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site"
      }
    },
    {
      "id" : "DeviceUseStatement.bodySite.extension:bodyStructure",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "DeviceUseStatement.bodySite.extension",
      "sliceName" : "bodyStructure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.bodySite.extension:bodyStructure.value[x]",
      "path" : "DeviceUseStatement.bodySite.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bodystructure"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "DeviceUseStatement.bodySite.coding",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "DeviceUseStatement.bodySite.coding",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    }]
  }
}

```
