# CH EMS Document - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Document**

## Resource Profile: CH EMS Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-document | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Bundle resource for representing the emergency medical service protocol. 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-document.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-document.csv), [Excel](StructureDefinition-ch-ems-document.xlsx), [Schematron](StructureDefinition-ch-ems-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-document",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-document",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsDocument",
  "title" : "CH EMS Document",
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
  "description" : "This profile constrains the Bundle resource for representing the emergency medical service protocol.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle",
      "short" : "CH EMS Document",
      "constraint" : [{
        "key" : "ch-ems-epr-document",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-document"
      }]
    },
    {
      "id" : "Bundle.identifier",
      "path" : "Bundle.identifier",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.timestamp",
      "path" : "Bundle.timestamp",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry",
      "path" : "Bundle.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resource"
        },
        {
          "type" : "type",
          "path" : "resource"
        }],
        "rules" : "open"
      },
      "min" : 3
    },
    {
      "id" : "Bundle.entry:Composition",
      "path" : "Bundle.entry",
      "sliceName" : "Composition",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Composition.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Composition",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition"]
      }]
    },
    {
      "id" : "Bundle.entry:Patient",
      "path" : "Bundle.entry",
      "sliceName" : "Patient",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Patient.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Patient",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient"]
      }]
    },
    {
      "id" : "Bundle.entry:Practitioner",
      "path" : "Bundle.entry",
      "sliceName" : "Practitioner",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Practitioner.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Practitioner",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner"]
      }]
    },
    {
      "id" : "Bundle.entry:PractitionerRole",
      "path" : "Bundle.entry",
      "sliceName" : "PractitionerRole",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:PractitionerRole.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "PractitionerRole",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitionerrole"]
      }]
    },
    {
      "id" : "Bundle.entry:Organization",
      "path" : "Bundle.entry",
      "sliceName" : "Organization",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Organization.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Organization",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"]
      }]
    },
    {
      "id" : "Bundle.entry:Device",
      "path" : "Bundle.entry",
      "sliceName" : "Device",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Device.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Device",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-device"]
      }]
    },
    {
      "id" : "Bundle.entry:Encounter",
      "path" : "Bundle.entry",
      "sliceName" : "Encounter",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Encounter.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Encounter",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter"]
      }]
    },
    {
      "id" : "Bundle.entry:Location",
      "path" : "Bundle.entry",
      "sliceName" : "Location",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Location.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Location",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location"]
      }]
    },
    {
      "id" : "Bundle.entry:Coverage",
      "path" : "Bundle.entry",
      "sliceName" : "Coverage",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Coverage.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Coverage",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coverage"]
      }]
    },
    {
      "id" : "Bundle.entry:Procedure",
      "path" : "Bundle.entry",
      "sliceName" : "Procedure",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Procedure.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Procedure",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure"]
      }]
    },
    {
      "id" : "Bundle.entry:ServiceRequest",
      "path" : "Bundle.entry",
      "sliceName" : "ServiceRequest",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:ServiceRequest.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "ServiceRequest",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest"]
      }]
    },
    {
      "id" : "Bundle.entry:Observation",
      "path" : "Bundle.entry",
      "sliceName" : "Observation",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Observation.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Observation",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation"]
      }]
    },
    {
      "id" : "Bundle.entry:AllergyIntolerance",
      "path" : "Bundle.entry",
      "sliceName" : "AllergyIntolerance",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:AllergyIntolerance.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "AllergyIntolerance",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-allergyintolerance"]
      }]
    },
    {
      "id" : "Bundle.entry:MedicationStatement",
      "path" : "Bundle.entry",
      "sliceName" : "MedicationStatement",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:MedicationStatement.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "MedicationStatement",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationstatement"]
      }]
    },
    {
      "id" : "Bundle.entry:MedicationAdministration",
      "path" : "Bundle.entry",
      "sliceName" : "MedicationAdministration",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:MedicationAdministration.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "MedicationAdministration",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationadministration"]
      }]
    }]
  }
}

```
