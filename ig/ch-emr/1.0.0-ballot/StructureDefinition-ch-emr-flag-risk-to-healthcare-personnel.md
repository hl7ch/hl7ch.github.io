# CH Emergency Record Risk to Healthcare Personnel - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Emergency Record Risk to Healthcare Personnel**

## Resource Profile: CH Emergency Record Risk to Healthcare Personnel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrFlagRiskToHealthcarePersonnel |
| **Copyright/Legal**: CC0-1.0 | |

 
Risk to healthcare personnel emanating from the patient — typically a communicable / infectious-disease condition or another patient-side circumstance that healthcare personnel need to be aware of for their own safety when treating the patient in an emergency context. 

**Usages:**

* Refer to this Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)
* Examples for this Profile: [Flag/EX-RiskFactor](Flag-EX-RiskFactor.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.csv), [Excel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.xlsx), [Schematron](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-flag-risk-to-healthcare-personnel",
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrFlagRiskToHealthcarePersonnel",
  "title" : "CH Emergency Record Risk to Healthcare Personnel",
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
  "description" : "Risk to healthcare personnel emanating from the patient — typically a communicable / infectious-disease condition or another patient-side circumstance that healthcare personnel need to be aware of for their own safety when treating the patient in an emergency context.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Flag",
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Flag",
      "path" : "Flag"
    },
    {
      "id" : "Flag.code",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        },
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/snapshot-source",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips|2.0.0"
        },
        {
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
        },
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/snapshot-source",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips|2.0.0"
        },
        {
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
        },
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/snapshot-source",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips|2.0.0"
        },
        {
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Flag.code",
      "constraint" : [{
        "key" : "ch-emr-flag-code-content",
        "severity" : "error",
        "human" : "Flag.code must carry at least text or one coding.",
        "expression" : "text.exists() or coding.exists()",
        "source" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"
      }],
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-emr/ValueSet/ch-emr-risk-to-healthcare-personnel-vs"
      }
    },
    {
      "id" : "Flag.subject",
      "path" : "Flag.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"],
        "aggregation" : ["bundled"]
      }]
    }]
  }
}

```
