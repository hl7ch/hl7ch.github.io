# CH Emergency Record Composition - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Emergency Record Composition**

## Resource Profile: CH Emergency Record Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
Swiss Emergency Record based on International Patient Summary 

**Usages:**

* Use this Profile: [CH Emergency Record Bundle](StructureDefinition-ch-emr-bundle.md)
* Examples for this Profile: [Composition/EX-Composition](Composition-EX-Composition.md), [Composition/UC1-Composition-emr-MusterMax](Composition-UC1-Composition-emr-MusterMax.md), [Composition/UC2-Composition-emr-WalterSchmid](Composition-UC2-Composition-emr-WalterSchmid.md), [Composition/UC3-Composition-emr-LaraKeller](Composition-UC3-Composition-emr-LaraKeller.md)... Show 2 more, [Composition/UC4-Composition-emr-BeatFrei](Composition-UC4-Composition-emr-BeatFrei.md) and [Composition/UC5-Composition-emr-AnnaMeier](Composition-UC5-Composition-emr-AnnaMeier.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-composition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-composition.csv), [Excel](StructureDefinition-ch-emr-composition.xlsx), [Schematron](StructureDefinition-ch-emr-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-composition",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
    "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Composition-uv-ips"
  }],
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrComposition",
  "title" : "CH Emergency Record Composition",
  "status" : "active",
  "date" : "2026-06-12T17:22:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Swiss Emergency Record based on International Patient Summary",
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
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "fhirdocumentreference",
    "uri" : "http://hl7.org/fhir/documentreference",
    "name" : "FHIR DocumentReference"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition.subject",
      "path" : "Composition.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner",
        "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole",
        "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization",
        "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient",
        "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "min" : 4
    },
    {
      "id" : "Composition.section:sectionMedications",
      "path" : "Composition.section",
      "sliceName" : "sectionMedications"
    },
    {
      "id" : "Composition.section:sectionMedications.entry:medicationStatementOrRequest",
      "path" : "Composition.section.entry",
      "sliceName" : "medicationStatementOrRequest",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionImmunizations",
      "path" : "Composition.section",
      "sliceName" : "sectionImmunizations"
    },
    {
      "id" : "Composition.section:sectionImmunizations.entry:immunization",
      "path" : "Composition.section.entry",
      "sliceName" : "immunization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionMedicalDevices",
      "path" : "Composition.section",
      "sliceName" : "sectionMedicalDevices"
    },
    {
      "id" : "Composition.section:sectionMedicalDevices.entry:deviceStatement",
      "path" : "Composition.section.entry",
      "sliceName" : "deviceStatement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionPregnancyHx",
      "path" : "Composition.section",
      "sliceName" : "sectionPregnancyHx"
    },
    {
      "id" : "Composition.section:sectionPregnancyHx.entry:pregnancyStatus",
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
      "path" : "Composition.section.entry",
      "sliceName" : "pregnancyStatus",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-status-uv-ips"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:sectionAdvanceDirectives",
      "path" : "Composition.section",
      "sliceName" : "sectionAdvanceDirectives"
    },
    {
      "id" : "Composition.section:sectionAdvanceDirectives.entry:advanceDirective",
      "path" : "Composition.section.entry",
      "sliceName" : "advanceDirective",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionEmergencyContacts",
      "path" : "Composition.section",
      "sliceName" : "sectionEmergencyContacts",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionEmergencyContacts.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "56864-2"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionEmergencyContacts.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionEmergencyContacts.entry:relatedPerson",
      "path" : "Composition.section.entry",
      "sliceName" : "relatedPerson",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionCareTeam",
      "path" : "Composition.section",
      "sliceName" : "sectionCareTeam",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionCareTeam.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85847-2"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionCareTeam.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionCareTeam.entry:practitioner",
      "path" : "Composition.section.entry",
      "sliceName" : "practitioner",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource|4.0.1"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionCareTeam.entry:practitionerRole",
      "path" : "Composition.section.entry",
      "sliceName" : "practitionerRole",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource|4.0.1"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionResuscitation",
      "path" : "Composition.section",
      "sliceName" : "sectionResuscitation",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionResuscitation.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "100822-6"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionResuscitation.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionResuscitation.entry:observation",
      "path" : "Composition.section.entry",
      "sliceName" : "observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-resuscitation-status"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionRiskFactors",
      "path" : "Composition.section",
      "sliceName" : "sectionRiskFactors",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionRiskFactors.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "46467-7"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionRiskFactors.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionRiskFactors.entry:riskFactor",
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
      "path" : "Composition.section.entry",
      "sliceName" : "riskFactor",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:sectionOtherDocuments",
      "path" : "Composition.section",
      "sliceName" : "sectionOtherDocuments",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionOtherDocuments.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "55108-5"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionOtherDocuments.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionOtherDocuments.entry:document",
      "path" : "Composition.section.entry",
      "sliceName" : "document",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionCognitiveDisability",
      "path" : "Composition.section",
      "sliceName" : "sectionCognitiveDisability",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionCognitiveDisability.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "66610-7"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionCognitiveDisability.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionCognitiveDisability.entry:observation",
      "path" : "Composition.section.entry",
      "sliceName" : "observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-cognitive-disability"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "Composition.section:sectionPhysicalDisability",
      "path" : "Composition.section",
      "sliceName" : "sectionPhysicalDisability",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:sectionPhysicalDisability.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "96386-8"
        }]
      }
    },
    {
      "id" : "Composition.section:sectionPhysicalDisability.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:sectionPhysicalDisability.entry:observation",
      "path" : "Composition.section.entry",
      "sliceName" : "observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"],
        "aggregation" : ["bundled"]
      }]
    }]
  }
}

```
