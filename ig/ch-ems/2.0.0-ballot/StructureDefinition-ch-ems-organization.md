# CH EMS Organization - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Organization**

## Resource Profile: CH EMS Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Organization resource for representing organizations involved in the emergency chain, e.g. emergency services. 

**Usages:**

* Use this Profile: [CH EMS Document](StructureDefinition-ch-ems-document.md)
* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md), [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md), [CH EMS PractitionerRole](StructureDefinition-ch-ems-practitionerrole.md) and [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-organization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-organization.csv), [Excel](StructureDefinition-ch-ems-organization.xlsx), [Schematron](StructureDefinition-ch-ems-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-organization",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsOrganization",
  "title" : "CH EMS Organization",
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
  "description" : "This profile constrains the Organization resource for representing organizations involved in the emergency chain, e.g. emergency services.",
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
    "uri" : "https://www.ech.ch/",
    "name" : "eCH Standards"
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
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization",
      "short" : "CH EMS Organization",
      "constraint" : [{
        "key" : "ch-ems-epr-organization",
        "severity" : "warning",
        "human" : "Warning that the resource is not conform to the CH Core EPR restrictions",
        "expression" : "conformsTo('http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr')",
        "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization"
      }]
    },
    {
      "id" : "Organization.identifier",
      "path" : "Organization.identifier",
      "min" : 1
    },
    {
      "id" : "Organization.identifier:GLN",
      "path" : "Organization.identifier",
      "sliceName" : "GLN",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.name",
      "path" : "Organization.name",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.address",
      "path" : "Organization.address",
      "mustSupport" : true
    }]
  }
}

```
