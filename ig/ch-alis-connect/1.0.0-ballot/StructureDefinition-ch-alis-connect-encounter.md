# CH ALIS Encounter Profile - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Encounter Profile**

## Resource Profile: CH ALIS Encounter Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-encounter | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisEncounter |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition for the Encounter resource in the context of ALIS-Connect. 

**Usages:**

* Refer to this Profile: [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-encounter.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-encounter.csv), [Excel](StructureDefinition-ch-alis-connect-encounter.xlsx), [Schematron](StructureDefinition-ch-alis-connect-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-encounter",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-encounter",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisEncounter",
  "title" : "CH ALIS Encounter Profile",
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
  "description" : "Base definition for the Encounter resource in the context of ALIS-Connect.",
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
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
  {
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
  "type" : "Encounter",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter",
      "short" : "CH ALIS Encounter",
      "mapping" : [{
        "identity" : "alis",
        "map" : "Visit"
      }]
    },
    {
      "id" : "Encounter.extension",
      "path" : "Encounter.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Encounter.extension:Termination",
      "path" : "Encounter.extension",
      "sliceName" : "Termination",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-termination"]
      }]
    },
    {
      "id" : "Encounter.identifier",
      "path" : "Encounter.identifier"
    },
    {
      "id" : "Encounter.identifier.value",
      "path" : "Encounter.identifier.value",
      "mapping" : [{
        "identity" : "alis",
        "map" : "VisitNumber"
      }]
    },
    {
      "id" : "Encounter.status",
      "path" : "Encounter.status",
      "short" : "finished",
      "fixedCode" : "finished"
    },
    {
      "id" : "Encounter.class",
      "path" : "Encounter.class",
      "short" : "Inpatient encounter",
      "patternCoding" : {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
        "code" : "IMP"
      }
    },
    {
      "id" : "Encounter.subject",
      "path" : "Encounter.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient"],
        "aggregation" : ["contained"]
      }]
    },
    {
      "id" : "Encounter.subject.reference",
      "path" : "Encounter.subject.reference",
      "min" : 1
    },
    {
      "id" : "Encounter.diagnosis",
      "path" : "Encounter.diagnosis",
      "short" : "Condition",
      "mapping" : [{
        "identity" : "alis",
        "map" : "Condition"
      }]
    },
    {
      "id" : "Encounter.diagnosis.condition",
      "path" : "Encounter.diagnosis.condition",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-condition"],
        "aggregation" : ["contained"]
      }]
    },
    {
      "id" : "Encounter.diagnosis.condition.reference",
      "path" : "Encounter.diagnosis.condition.reference",
      "min" : 1
    }]
  }
}

```
