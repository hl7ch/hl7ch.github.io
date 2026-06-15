# CH EMS Practitioner - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Practitioner**

## Resource Profile: CH EMS Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsPractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Practitioner resource for representing practitioners involved in the emergency chain, e.g. paramedic (in training), transport paramedic, emergency doctor. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md), [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md), [CH EMS Observation: Diagnosis](StructureDefinition-ch-ems-observation-diagnosis.md) and [CH EMS PractitionerRole](StructureDefinition-ch-ems-practitionerrole.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-practitioner.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-practitioner.csv), [Excel](StructureDefinition-ch-ems-practitioner.xlsx), [Schematron](StructureDefinition-ch-ems-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-practitioner",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsPractitioner",
  "title" : "CH EMS Practitioner",
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
  "description" : "This profile constrains the Practitioner resource for representing practitioners involved in the emergency chain, e.g. paramedic (in training), transport paramedic, emergency doctor.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "eCH",
    "uri" : "http://www.ech.ch/",
    "name" : "eCH-Standards"
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
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Practitioner",
      "path" : "Practitioner",
      "short" : "CH EMS Practitioner",
      "constraint" : [{
        "key" : "ch-ems-epr-practitioner",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner"
      }]
    },
    {
      "id" : "Practitioner.identifier:GLN",
      "path" : "Practitioner.identifier",
      "sliceName" : "GLN",
      "short" : "GLN of the individual",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.identifier:GLN.assigner",
      "path" : "Practitioner.identifier.assigner",
      "short" : "Reference to the team in which this individual is member of (the team then does have the GLN of the responding organisation)",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.identifier:GLN.assigner.reference",
      "path" : "Practitioner.identifier.assigner.reference",
      "min" : 1
    },
    {
      "id" : "Practitioner.name",
      "path" : "Practitioner.name",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.name.family",
      "path" : "Practitioner.name.family",
      "short" : "Nachname"
    },
    {
      "id" : "Practitioner.name.given",
      "path" : "Practitioner.name.given",
      "short" : "Vorname"
    },
    {
      "id" : "Practitioner.address",
      "path" : "Practitioner.address",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.qualification.code",
      "path" : "Practitioner.qualification.code",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-formation"
      }
    }]
  }
}

```
