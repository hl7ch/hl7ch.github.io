# CH EMS PractitionerRole - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS PractitionerRole**

## Resource Profile: CH EMS PractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitionerrole | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsPractitionerRole |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the PractitionerRole resource for representing practitioners involved with the roles they perform, e.g. physician, caregiver. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-practitionerrole.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-practitionerrole.csv), [Excel](StructureDefinition-ch-ems-practitionerrole.xlsx), [Schematron](StructureDefinition-ch-ems-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-practitionerrole",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitionerrole",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsPractitionerRole",
  "title" : "CH EMS PractitionerRole",
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
  "description" : "This profile constrains the PractitionerRole resource for representing practitioners involved with the roles they perform, e.g. physician, caregiver.",
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
  "type" : "PractitionerRole",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PractitionerRole",
      "path" : "PractitionerRole",
      "short" : "CH EMS PractitionerRole",
      "constraint" : [{
        "key" : "ch-ems-epr-practitionerrole",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitionerrole"
      }]
    },
    {
      "id" : "PractitionerRole.practitioner",
      "path" : "PractitionerRole.practitioner",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.practitioner.reference",
      "path" : "PractitionerRole.practitioner.reference",
      "min" : 1
    },
    {
      "id" : "PractitionerRole.organization",
      "path" : "PractitionerRole.organization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.organization.reference",
      "path" : "PractitionerRole.organization.reference",
      "min" : 1
    },
    {
      "id" : "PractitionerRole.code",
      "path" : "PractitionerRole.code",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-teamRole"
      }
    }]
  }
}

```
