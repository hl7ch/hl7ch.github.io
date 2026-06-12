# CH Emergency Record Medication Statement - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Emergency Record Medication Statement**

## Resource Profile: CH Emergency Record Medication Statement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrMedicationStatement |
| **Copyright/Legal**: CC0-1.0 | |

 
Medication Statement for the Swiss Emergency Record. Captures a medication the patient is taking with a treatment reason, a dose quantity, and a dosing schedule expressed using the CH EMED dosage pattern. 

**Usages:**

* Refer to this Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)
* Examples for this Profile: [MedicationStatement/UC1-MedicationStatement-BelocZok](MedicationStatement-UC1-MedicationStatement-BelocZok.md), [MedicationStatement/UC1-MedicationStatement-Plavix](MedicationStatement-UC1-MedicationStatement-Plavix.md), [MedicationStatement/UC2-MedicationStatement-AspirinCardio](MedicationStatement-UC2-MedicationStatement-AspirinCardio.md), [MedicationStatement/UC2-MedicationStatement-Atorvastatin](MedicationStatement-UC2-MedicationStatement-Atorvastatin.md)... Show 8 more, [MedicationStatement/UC2-MedicationStatement-Epril](MedicationStatement-UC2-MedicationStatement-Epril.md), [MedicationStatement/UC2-MedicationStatement-XigduoXR](MedicationStatement-UC2-MedicationStatement-XigduoXR.md), [MedicationStatement/UC3-MedicationStatement-Marcoumar](MedicationStatement-UC3-MedicationStatement-Marcoumar.md), [MedicationStatement/UC4-MedicationStatement-Bilol](MedicationStatement-UC4-MedicationStatement-Bilol.md), [MedicationStatement/UC5-MedicationStatement-AspirinCardio](MedicationStatement-UC5-MedicationStatement-AspirinCardio.md), [MedicationStatement/UC5-MedicationStatement-Atorvastatin](MedicationStatement-UC5-MedicationStatement-Atorvastatin.md), [MedicationStatement/UC5-MedicationStatement-Bilol](MedicationStatement-UC5-MedicationStatement-Bilol.md) and [MedicationStatement/UC5-MedicationStatement-Pemzek](MedicationStatement-UC5-MedicationStatement-Pemzek.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-medicationstatement.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-medicationstatement.csv), [Excel](StructureDefinition-ch-emr-medicationstatement.xlsx), [Schematron](StructureDefinition-ch-emr-medicationstatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-medicationstatement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
    "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/MedicationStatement-uv-ips"
  }],
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrMedicationStatement",
  "title" : "CH Emergency Record Medication Statement",
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
  "description" : "Medication Statement for the Swiss Emergency Record. Captures a medication the patient is taking with a treatment reason, a dose quantity, and a dosing schedule expressed using the CH EMED dosage pattern.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationStatement",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationStatement",
      "path" : "MedicationStatement"
    },
    {
      "id" : "MedicationStatement.medication[x]",
      "path" : "MedicationStatement.medication[x]",
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
      "id" : "MedicationStatement.medication[x]:medicationReference",
      "path" : "MedicationStatement.medication[x]",
      "sliceName" : "medicationReference",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "MedicationStatement.reasonCode",
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
      "path" : "MedicationStatement.reasonCode",
      "constraint" : [{
        "key" : "ch-emr-reasoncode-content",
        "severity" : "error",
        "human" : "A reasonCode must carry at least text or one coding.",
        "expression" : "text.exists() or coding.exists()",
        "source" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.reasonReference",
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
      "path" : "MedicationStatement.reasonReference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage",
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
      "path" : "MedicationStatement.dosage",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "rules" : "closed"
      },
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage:baseEntry",
      "path" : "MedicationStatement.dosage",
      "sliceName" : "baseEntry",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Dosage",
        "profile" : ["http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage:additionalEntry",
      "path" : "MedicationStatement.dosage",
      "sliceName" : "additionalEntry",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Dosage",
        "profile" : ["http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split"]
      }],
      "mustSupport" : true
    }]
  }
}

```
