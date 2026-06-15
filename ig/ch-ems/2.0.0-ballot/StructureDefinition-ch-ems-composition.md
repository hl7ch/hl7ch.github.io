# CH EMS Composition - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Composition**

## Resource Profile: CH EMS Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Composition resource for representing the first entry in the CH EMS Document. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-composition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-composition.csv), [Excel](StructureDefinition-ch-ems-composition.xlsx), [Schematron](StructureDefinition-ch-ems-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-composition",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsComposition",
  "title" : "CH EMS Composition",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "This profile constrains the Composition resource for representing the first entry in the CH EMS Document.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition",
      "path" : "Composition",
      "short" : "CH EMS Composition",
      "constraint" : [{
        "key" : "ch-ems-epr-composition",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition"
      }]
    },
    {
      "id" : "Composition.type",
      "path" : "Composition.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "67796-3"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.subject",
      "path" : "Composition.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.date",
      "path" : "Composition.date",
      "mustSupport" : true
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "short" : "The author/responsible for this document/content (not necessarily who typed it in)",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner",
        "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitionerrole",
        "http://hl7.org/fhir/StructureDefinition/Device",
        "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
        "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.title",
      "path" : "Composition.title",
      "short" : "'Einsatzprotokoll Rettungsdienst' or 'Protocole d'intervention des services de sauvetage' or 'Protocollo d'intervento servizi di salvataggio' or 'Emergency Medical Service protocol'",
      "mustSupport" : true
    },
    {
      "id" : "Composition.custodian",
      "path" : "Composition.custodian",
      "short" : "Order recipient (responding organisation)",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Composition.section:mission",
      "path" : "Composition.section",
      "sliceName" : "mission",
      "short" : "Mission",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.title",
      "path" : "Composition.section.title",
      "short" : "'Einsatz' or 'Intervention' or 'Intervento' or 'intervention'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100001"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry",
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
      "id" : "Composition.section:mission.entry:missionEncounter",
      "path" : "Composition.section.entry",
      "sliceName" : "missionEncounter",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:missionEncounter.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.entry:missionTimeStatus",
      "path" : "Composition.section.entry",
      "sliceName" : "missionTimeStatus",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-missiontimestatus"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:missionTimeStatus.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.entry:precautionsInfection",
      "path" : "Composition.section.entry",
      "sliceName" : "precautionsInfection",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-precautionsinfection"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:precautionsInfection.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.entry:transportation",
      "path" : "Composition.section.entry",
      "sliceName" : "transportation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-transportation"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:transportation.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.entry:ambulance",
      "path" : "Composition.section.entry",
      "sliceName" : "ambulance",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-ambulance"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:ambulance.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.entry:device",
      "path" : "Composition.section.entry",
      "sliceName" : "device",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-device"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:mission.entry:device.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:mission.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:administrative",
      "path" : "Composition.section",
      "sliceName" : "administrative",
      "short" : "Administrative",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:administrative.title",
      "path" : "Composition.section.title",
      "short" : "'Administrativ' or 'Administratif' or 'Amministrativo' or 'administrative'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:administrative.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100003"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:administrative.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:administrative.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:pretreatment",
      "path" : "Composition.section",
      "sliceName" : "pretreatment",
      "short" : "Pretreatment",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:pretreatment.title",
      "path" : "Composition.section.title",
      "short" : "'Vorbehandlung' or 'Prétraitement' or 'Pretrattamento' or 'pretreatment'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:pretreatment.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100004"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:pretreatment.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:pretreatment.entry",
      "path" : "Composition.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-pretreatment"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:pretreatment.entry.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:pretreatment.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:anamnesis",
      "path" : "Composition.section",
      "sliceName" : "anamnesis",
      "short" : "Anamnesis",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.title",
      "path" : "Composition.section.title",
      "short" : "'Anamnese' or 'Anamnèse' or 'Anamnesi' or 'anamnesis'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100005"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.entry",
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
      "id" : "Composition.section:anamnesis.entry:anamnesisEvent",
      "path" : "Composition.section.entry",
      "sliceName" : "anamnesisEvent",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-anamnesisevent"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.entry:anamnesisEvent.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:anamnesis.entry:anamnesisSymptom",
      "path" : "Composition.section.entry",
      "sliceName" : "anamnesisSymptom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-anamnesissymptom"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.entry:anamnesisSymptom.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:anamnesis.entry:allergyIntolerance",
      "path" : "Composition.section.entry",
      "sliceName" : "allergyIntolerance",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-allergyintolerance"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.entry:allergyIntolerance.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:anamnesis.entry:medicationStatement",
      "path" : "Composition.section.entry",
      "sliceName" : "medicationStatement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationstatement"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:anamnesis.entry:medicationStatement.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:anamnesis.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:findings",
      "path" : "Composition.section",
      "sliceName" : "findings",
      "short" : "Findings",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.title",
      "path" : "Composition.section.title",
      "short" : "'Befund' or 'Résultats' or 'Risultati' or 'findings'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100006"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "title"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.section:airway",
      "path" : "Composition.section.section",
      "sliceName" : "airway",
      "short" : "A: Airway",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:airway.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Airway",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:airway.entry",
      "path" : "Composition.section.section.entry",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-airways"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:airway.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:airway.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:findings.section:breathing",
      "path" : "Composition.section.section",
      "sliceName" : "breathing",
      "short" : "B: Breathing",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:breathing.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Breathing",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:breathing.entry",
      "path" : "Composition.section.section.entry",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-breathing"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:breathing.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:breathing.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:findings.section:circulation",
      "path" : "Composition.section.section",
      "sliceName" : "circulation",
      "short" : "C: Circulation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:circulation.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Circulation",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry",
      "path" : "Composition.section.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:cardiacArrest",
      "path" : "Composition.section.section.entry",
      "sliceName" : "cardiacArrest",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-cardiacarrest"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:cardiacArrest.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:heartRate",
      "path" : "Composition.section.section.entry",
      "sliceName" : "heartRate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heartrate"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:heartRate.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:bloodPressure",
      "path" : "Composition.section.section.entry",
      "sliceName" : "bloodPressure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-bloodpressure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:circulation.entry:bloodPressure.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:circulation.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:findings.section:disability",
      "path" : "Composition.section.section",
      "sliceName" : "disability",
      "short" : "D: Disability",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Disability",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry",
      "path" : "Composition.section.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:glasgowComaScale",
      "path" : "Composition.section.section.entry",
      "sliceName" : "glasgowComaScale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:glasgowComaScale.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:levelOfResponsiveness",
      "path" : "Composition.section.section.entry",
      "sliceName" : "levelOfResponsiveness",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-avpu"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:levelOfResponsiveness.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:pupilShape",
      "path" : "Composition.section.section.entry",
      "sliceName" : "pupilShape",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-pupilshape"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:pupilShape.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:pupilSize",
      "path" : "Composition.section.section.entry",
      "sliceName" : "pupilSize",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-pupilsize"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:pupilSize.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:injurySeverity",
      "path" : "Composition.section.section.entry",
      "sliceName" : "injurySeverity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-stroke-fast"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:disability.entry:injurySeverity.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:disability.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:findings.section:exposure",
      "path" : "Composition.section.section",
      "sliceName" : "exposure",
      "short" : "E: Exposure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:exposure.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Exposure",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:exposure.entry",
      "path" : "Composition.section.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.section:exposure.entry:heatExposure",
      "path" : "Composition.section.section.entry",
      "sliceName" : "heatExposure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heatexposure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:exposure.entry:heatExposure.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:exposure.entry:coldExposure",
      "path" : "Composition.section.section.entry",
      "sliceName" : "coldExposure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-coldexposure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:findings.section:exposure.entry:coldExposure.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:findings.section:exposure.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:diagnosis",
      "path" : "Composition.section",
      "sliceName" : "diagnosis",
      "short" : "Diagnosis",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:diagnosis.title",
      "path" : "Composition.section.title",
      "short" : "'Diagnosen' or 'Diagnostique' or 'Diagnosi' or 'diagnosis'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:diagnosis.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100007"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:diagnosis.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:diagnosis.entry",
      "path" : "Composition.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-diagnosis"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:diagnosis.entry.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:diagnosis.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:procedures",
      "path" : "Composition.section",
      "sliceName" : "procedures",
      "short" : "Procedures",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.title",
      "path" : "Composition.section.title",
      "short" : "'Massnahmen' or 'Mesures' or 'Misure' or 'measures'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100008"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.entry",
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
      "id" : "Composition.section:procedures.entry:medicationAdministration",
      "path" : "Composition.section.entry",
      "sliceName" : "medicationAdministration",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationadministration"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.entry:medicationAdministration.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.entry:woundTreatment",
      "path" : "Composition.section.entry",
      "sliceName" : "woundTreatment",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-woundtreatment"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.entry:woundTreatment.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "title"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:procedures.section:airway",
      "path" : "Composition.section.section",
      "sliceName" : "airway",
      "short" : "A: Airway",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:airway.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Airway",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:airway.entry",
      "path" : "Composition.section.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-airways"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:airway.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section:airway.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:procedures.section:breathing",
      "path" : "Composition.section.section",
      "sliceName" : "breathing",
      "short" : "B: Breathing",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:breathing.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Breathing",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:breathing.entry",
      "path" : "Composition.section.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-breathing"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:breathing.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section:breathing.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:procedures.section:circulation",
      "path" : "Composition.section.section",
      "sliceName" : "circulation",
      "short" : "C: Circulation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:circulation.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Circulation",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:circulation.entry",
      "path" : "Composition.section.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:circulation.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section:circulation.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:procedures.section:disability",
      "path" : "Composition.section.section",
      "sliceName" : "disability",
      "short" : "D: Disability",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:disability.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Disability",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:disability.entry",
      "path" : "Composition.section.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:disability.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section:disability.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:procedures.section:exposure",
      "path" : "Composition.section.section",
      "sliceName" : "exposure",
      "short" : "E: Exposure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:exposure.title",
      "path" : "Composition.section.section.title",
      "min" : 1,
      "fixedString" : "Exposure",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:exposure.entry",
      "path" : "Composition.section.section.entry",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:procedures.section:exposure.entry.reference",
      "path" : "Composition.section.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:procedures.section:exposure.section",
      "path" : "Composition.section.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:eventOfDeath",
      "path" : "Composition.section",
      "sliceName" : "eventOfDeath",
      "short" : "Event of death",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eventOfDeath.title",
      "path" : "Composition.section.title",
      "short" : "'Todesfall' or 'Décès' or 'Decesso' or 'death'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eventOfDeath.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100009"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eventOfDeath.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eventOfDeath.entry",
      "path" : "Composition.section.entry",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-deathmanner"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eventOfDeath.entry.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:eventOfDeath.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:transport",
      "path" : "Composition.section",
      "sliceName" : "transport",
      "short" : "Transport",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:transport.title",
      "path" : "Composition.section.title",
      "short" : "'Transport' or 'Transport' or 'Trasporto' or 'transport'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:transport.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100010"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:transport.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:transport.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:handover",
      "path" : "Composition.section",
      "sliceName" : "handover",
      "short" : "Handover",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.title",
      "path" : "Composition.section.title",
      "short" : "'Übergabe' or 'Remise' or 'Consegna' or 'handover'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
          "code" : "1100011"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry",
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
      "id" : "Composition.section:handover.entry:patientStatusPriority",
      "path" : "Composition.section.entry",
      "sliceName" : "patientStatusPriority",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-statuspriority"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry:patientStatusPriority.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:handover.entry:patientConditionChange",
      "path" : "Composition.section.entry",
      "sliceName" : "patientConditionChange",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-conditionchange"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry:patientConditionChange.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:handover.entry:injurySeverity",
      "path" : "Composition.section.entry",
      "sliceName" : "injurySeverity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-naca"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry:injurySeverity.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:handover.entry:glasgowComaScale",
      "path" : "Composition.section.entry",
      "sliceName" : "glasgowComaScale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry:glasgowComaScale.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:handover.entry:handoverTo",
      "path" : "Composition.section.entry",
      "sliceName" : "handoverTo",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
        "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:handover.entry:handoverTo.reference",
      "path" : "Composition.section.entry.reference",
      "min" : 1
    },
    {
      "id" : "Composition.section:handover.section",
      "path" : "Composition.section.section",
      "max" : "0"
    },
    {
      "id" : "Composition.section:annotation",
      "path" : "Composition.section",
      "sliceName" : "annotation",
      "short" : "Annotation",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:annotation.title",
      "path" : "Composition.section.title",
      "short" : "'Kommentar' or 'Commentaire' or 'Osservazione' or 'Comment'",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:annotation.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "48767-8"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:annotation.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:annotation.section",
      "path" : "Composition.section.section",
      "max" : "0"
    }]
  }
}

```
